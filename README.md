# z-api-sdk-php-laravel
z-api-sdk-php-laravel foi criado e é mantido pela equipe [Jetimob](https://github.com/jetimob). É um SDK utilizado para
interagir com a API da [Z-API](https://conheca.z-api.io/) de forma simples e direta.

---
## Instalação
Instale o pacote utilizando o [composer](https://getcomposer.org/)
```shell
composer require jetimob/z-api-sdk-php-laravel
```

---
## Configuração
Para começar, as configurações do pacote devem ser publicadas através do comando:

````shell
php artisan z-api:install
````

Este comando irá criar o arquivo de configuração `z-api.php` no diretório `config` para que você possa modificar conforme
a necessidade do seu projeto.

---
## Uso

Sempre que for chamar qualquer api do pacote **z-api-sdk-php-laravel**, utilize o namespace `Jetimob\ZApi\Facades\Zapi`
ou, simplesmente, `ZApi`. O namespace `ZApi` é registrado automaticamente pelo **Laravel**, ou seja, a importação pode
ser feita apenas com `use ZApi;` no topo de um arquivo.

---

## Licença

z-api-sdk-php-laravel está licenciado sob [The MIT License (MIT)](LICENSE).

---
Mais informações sobre a API da Z-API podem ser encontradas [aqui](https://developer.z-api.io/).
