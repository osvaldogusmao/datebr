# DateBR Bundle parao Framework php Laravel #

Este bundle ajuda a converter datas em formato BR (Brasil) para o formato padrão em Banco de Dados.

## Funções ##
- Converter data no formato BR (Brasil) para o formato padrão do Mysql. Exemplo: '18/03/1988' => '1988-03-18'

## Instalação ##

Instalando usando o Artisan.

```
php artisan bundle:install datebr
```  
Ou você pode baixar e inclui-lo na sua pastas de bundles: ``app/bundles``  

E no arquivo ``application/bundles.php`` adicionar a seguinte linha:

```php
'datebr' => array('auto' => true),
```

## Exemplos ##


```php

// Conversão
$date = DateBR::toMysql('18/03/1988'); // '1988-03-18'

```