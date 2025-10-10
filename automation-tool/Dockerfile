# --- Stage 1: Build the Go binary ---
FROM golang:1.25-alpine AS builder

WORKDIR /app

# 复制go模块文件并下载依赖
# 使用 go.* 通配符，这样即使 go.sum 不存在也不会报错
COPY go.* ./

# 下载所有go.mod中定义的依赖
RUN go mod download

# 复制源代码
COPY *.go ./

# 构建一个静态链接的Linux可执行文件
RUN CGO_ENABLED=0 GOOS=linux go build -o main .

# --- Stage 2: Create the final, minimal image ---
FROM alpine:latest

# 安装mariadb-client
RUN apk add --no-cache mariadb-client

# 暴露我们API服务监听的端口（主要用于文档目的）
EXPOSE 8080

# 从builder阶段复制编译好的二进制文件
COPY --from=builder /app/main /app/main

# 设置工作目录
WORKDIR /app

# 容器启动时默认执行的命令
CMD ["./main"]