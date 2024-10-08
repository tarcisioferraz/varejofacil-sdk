# PHP VarejoFacil SDK

Este SDK é designado à ajudar desenvolvedores PHP à integrar seus projetos com o ERP VarejoFacil das Casas Magalhaes.

#### Instalação
```
composer require tarcisioferraz/varejofacil-sdk
```
<details>
 <summary>Precisa de ajuda com a instalação?</summary>

## Instale o Composer
Se o comando de instalação acima não funcionar, instale o composer usando as instruções de instalação abaixo e tente novamente.

#### Debian / Ubuntu
```
sudo apt-get install curl
curl -s http://getcomposer.org/installer | php
php composer.phar install
```
Após a instalação do composer, repita o comando de instalação do sdk abaixo:
```
php composer.phar require tarcisioruas/bradesco-registro-online
```

#### Windows:
[Faça o download do Composer para Windows](https://getcomposer.org/doc/00-intro.md#installation-windows)
</details>

#### Observações

- Para usar com PHP stream wrapper, a opção allow_url_fopen precisa estar ativada dentro do php.ini do sistema
- Para usar com cURL, a versão do cURL precisa ser maior ou igual que a 7.19.4, e deve estar complilada com OpenSSL e zlib


#### Como Usar
##### Configurações Preliminares

Para se conectar à API do VarejoFacil, é necessário ter em mãos as credenciais de acesso e também a url de onde o ERP está hospedado. Para obter às suas, entrem em contato com o suporte responsável.

##### Códigos de Exemplo

Adicionando um produto.
```php
<?php
require 'vendor/autoload.php';

use \VarejoFacil\VarejoFacilSDK;
use \VarejoFacil\Services\ProdutoService;

$usuario = 'seu_usuario';
$senha = 'sua_senha';
$dominio = 'seusubdominio.varejofacil.com';
$sdk = new VarejoFacilSDK($dominio, $usuario, $senha);

$produtoService = new ProdutoService($sdk);

$produto = new Produto(null, "Tenis Nike");

// ...

$produtoService->save($produto);

```

### Desenvolvimento

Quer contribuir? Ótimo!

Se encontrou e corrigiu um bug ou implementou uma nova funcionalidade, sinta-se à vontade para nos enviar um pull request. Você será adicionado à lista de desenvolvedores automaticamente.
