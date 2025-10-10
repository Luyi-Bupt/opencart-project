package main

import (
	"fmt"
	"net/http"
	"os"
	"os/exec"
	"time"

	"github.com/gin-gonic/gin"
	"github.com/robfig/cron/v3"
)

// performBackup 将备份逻辑封装成一个独立的函数
// 这样可以被定时任务和API处理程序复用
func performBackup() error {
	fmt.Println("正在执行数据库备份...")

	dbHost := os.Getenv("DB_HOST")
	dbUser := os.Getenv("DB_USER")
	dbPassword := os.Getenv("DB_PASSWORD")
	dbName := os.Getenv("DB_NAME")

	if dbHost == "" || dbUser == "" || dbPassword == "" || dbName == "" {
		return fmt.Errorf("错误：数据库环境变量未完整设置！")
	}

	timestamp := time.Now().Format("2006-01-02_15-04-05")
	backupFileName := fmt.Sprintf("backup_%s.sql", timestamp)
	backupFilePath := fmt.Sprintf("/backups/%s", backupFileName)

	dumpCommand := fmt.Sprintf(
		"mariadb-dump --ssl=0 -h %s -u %s -p%s %s",
		dbHost,
		dbUser,
		dbPassword,
		dbName,
	)

	fullCommand := fmt.Sprintf("%s > %s", dumpCommand, backupFilePath)
	cmd := exec.Command("sh", "-c", fullCommand)

	// 我们捕获错误输出，以便在API中返回
	output, err := cmd.CombinedOutput()
	if err != nil {
		// 如果出错，返回包含具体错误信息的error
		return fmt.Errorf("备份失败: %v, 输出: %s", err, string(output))
	}

	fmt.Printf("数据库 '%s' 成功备份到 %s\n", dbName, backupFilePath)
	return nil
}

func main() {
	fmt.Println("自动化运维服务启动...")

	// --- 定时任务设置 ---
	c := cron.New()
	// "0 * * * *" 表示在每小时的第0分钟执行一次
	// cron语法: 分 时 日 月 周
	c.AddFunc("0 * * * *", func() {
		fmt.Println("--- [定时任务] 开始执行备份 ---")
		if err := performBackup(); err != nil {
			fmt.Printf("--- [定时任务] 备份失败: %v ---\n", err)
		} else {
			fmt.Println("--- [定时任务] 备份成功 ---")
		}
	})

	// 在一个新的goroutine中启动定时任务，不阻塞主线程
	go c.Start()
	fmt.Println("定时备份任务已启动，每小时执行一次。")

	// --- API服务设置 ---
	router := gin.Default()

	// 定义一个API端点：当有POST请求访问 /backup/now 时，执行备份
	router.POST("/backup/now", func(ctx *gin.Context) {
		fmt.Println("--- [API] 收到立即备份请求 ---")
		if err := performBackup(); err != nil {
			fmt.Printf("--- [API] 备份失败: %v ---\n", err)
			// 向请求方返回一个包含错误信息的JSON
			ctx.JSON(http.StatusInternalServerError, gin.H{
				"status":  "error",
				"message": err.Error(),
			})
		} else {
			fmt.Println("--- [API] 备份成功 ---")
			// 向请求方返回一个成功的JSON
			ctx.JSON(http.StatusOK, gin.H{
				"status":  "ok",
				"message": "Backup completed successfully.",
			})
		}
	})

	router.GET("/hello", func(ctx *gin.Context) {
		ctx.String(http.StatusOK, "Hello! The automation tool is running.")
	})

	// 启动API服务器，监听在容器的8080端口
	fmt.Println("API服务已启动，监听在 :8080")
	router.Run(":8080")
}
