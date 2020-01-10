# Docker 

PHP 7.4

Apache 

MySQL + Adminer

Nginx 1.13

XDebug

Memcache:latest

---

 + [Get started](#getstarted);
 + [Подсказки](#helpers);
---
### Адреса

Сайт:
```
http://localhost
```

Админер
```
http://localhost:8080
login: root
password: example
```

Данные для подключения к Memcached
```
host: memcached
port: 11211
```
---
### <a name="getstarted"></a> Get started

Клонируем репозиторий
```console
git@github.com:Simtel/docker-dev.git
```
Переходим в папку
```console
cd docker-dev
``` 

Билдим контейнеры
```console
make build
```
---
### <a name="helpers"></a> Подсказки
Консолька для запуска php скриптов

```sh
docker exec -it docker-dev_web_1 bash
```

Консолька Mysql
```sh
docker exec -it docker-dev_db_1 /usr/bin/mysql -uroot -pexample
```

Восстановление бд из файла дампа
```sh
cat backup.sql | docker exec -i CONTAINER /usr/bin/mysql -u root --password=example DATABASE
```

Если нужно какие то настройки вносить в php.ini, то задавать их надо в 

```console
./docker/php/php.ini
```

