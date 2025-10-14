# --- nginx.Dockerfile ---

# 使用官方Nginx镜像作为基础
FROM nginx:1.25-alpine

# 在构建镜像时，直接将我们本地的opencart源代码，
# 复制到镜像内的Nginx网站根目录 /var/www/html
COPY ./opencart /var/www/html