# Docker 

PHP + MySql + Apache + NGINX

 + [Get started](#getstarted);
 + [Подсказки](#helpers);

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

### <a name="getstarted"></a> Get started

Клонируем репозиторий
```bash
git@github.com:Simtel/docker-dev.git
```
Переходим в папку
```bash
cd docker-dev
``` 

Билдим контейнеры

```bash
make build
```

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
cat backup.sql | docker exec -i CONTAINER /usr/bin/mysql -u root --password=root DATABASE
```


