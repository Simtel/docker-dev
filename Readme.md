# Docker 

PHP + MySql + Apache + NGINX

### Helpers

Восстановление бд из файла дампа
```sh
cat backup.sql | docker exec -i CONTAINER /usr/bin/mysql -u root --password=root DATABASE
```