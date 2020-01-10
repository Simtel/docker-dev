.DEFAULT_GOAL := help

help: ## Show this help.
	@fgrep -h "##" $(MAKEFILE_LIST) | fgrep -v fgrep | sed -e 's/\\$$//' | sed -e 's/##//'

up: ## Up containers
	@docker-compose up -d
	@echo -e "Make: Up containers.\n"

build: ## Build containers
	@docker-compose up -d --build
	@echo -e "Make: Up containers.\n"

down: ## Down containers
	@docker-compose down

stop: ## Stop contrainers
	@docker-compose stop	

restart: stop up ## Restart docker containers	

mysql-console: ## Mysql Console Failed
	@docker exec -it server_db_1 /usr/bin/mysql -uroot -pexample	

php-console: ## PHP console
	docker exec -it server_web_1 bash	