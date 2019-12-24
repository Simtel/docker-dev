# Docker 

PHP + MySql + Apache + NGINX

### Адреса

Сайт:
```
http://localhost
```

Админер
```
http://localhost:8080
```

Данные для подключения к Memcached
```
host: memcached
port: 11211
```

### Подсказки
Консолька для запуска php скриптов

```sh
docker exec -it server_web_1 bash
```

Консолька Mysql
```sh
docker exec -it server_db_1 /usr/bin/mysql -uroot -pexample
```

Восстановление бд из файла дампа
```sh
cat backup.sql | docker exec -i CONTAINER /usr/bin/mysql -u root --password=root DATABASE
```


