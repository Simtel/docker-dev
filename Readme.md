# Docker 

PHP + MySql + Apache + NGINX

### Helpers

Консолька Mysql
```sh
docker exec -it server_db_1 /usr/bin/mysql -uroot -pexample
```

Восстановление бд из файла дампа
```sh
cat backup.sql | docker exec -i CONTAINER /usr/bin/mysql -u root --password=root DATABASE
```