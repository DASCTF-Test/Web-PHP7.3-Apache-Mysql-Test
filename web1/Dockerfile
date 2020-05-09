FROM dasctfbase/web_php73_apache_mysql

COPY src /var/www/html

# 如需自定义 FLAG 请将自定义脚本覆盖到 /flag.sh
COPY files/flag.sh /flag.sh

# 如需操作数据库请将 sql 文件拷贝到 /db.sql
COPY files/db.sql /db.sql

# 如有上传文件等操作请务必将权限设置正确！
# RUN chown www-data:www-data /var/www/html/uploads/

# 如需静态 FLAG 请在此利用环境变量声明
# ENV DASCTF=DASCTF{flag_test}

# 请声明对外暴露端口
EXPOSE 80
