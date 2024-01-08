Executar projeto

- No terminal `docker compose up -d`
- Dentro do container `php composer.phar install`

será montado localmente na url 
- localhost:8100


Ferramentas de review e correção de código (Dentro do container):

- php composer.phar check
  - php stan
  - php cs
- php composer.phar cs:fix
  - php cs fixer
