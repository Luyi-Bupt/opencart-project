# ‼️ 请将 "UBUNTU_IP" 替换为您Ubuntu电脑的IP地址，或如果在本机测试则使用localhost ‼️

# 1. 初始化计数器
v1_hits=0
v2_hits=0
missed_hits=0

echo "正在进行100次顺序请求测试，请稍候..."
echo "每完成一次请求，就会打印一个点:"

# 2. 执行100次循环 (这次没有 & 和 wait)
for i in $(seq 1 100); do
  # 打印一个点作为进度指示
  printf "."

  # 将curl的输出保存到一个变量中
  response=$(curl -s http://localhost:8080)
  
  # 3. 使用 if/elif/else 逻辑判断响应内容
  if echo "$response" | grep -q -e "-- V2 --"; then
    ((v2_hits++))
  elif echo "$response" | grep -q -e "-- V1 --"; then
    ((v1_hits++))
  else
    ((missed_hits++))
  fi
done

# 换行，让输出更好看
echo ""

# 4. 打印最终的统计报告
echo "========================="
echo "测试完成！"
echo "V1 版本命中次数: $v1_hits"
echo "V2 版本命中次数: $v2_hits"
echo "未命中（或错误）次数: $missed_hits"
echo "========================="
