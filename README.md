# DateBR Bundle para o conversão de datas no Framework Laravel #

Este bundle ajuda na conversão de datas, conforme os exemplos abaixos.

## Colaboradores ##
Benício Ribeiro da Paixão Júnior - http://github.com/larsurilch

## Funções ##
- Converter data no formato BR (Brasil) para o formato padrão do Mysql. Exemplo: '18/03/1988' => '1988-03-18'
- Converter data para exibição (View) - Completo (date)     : '1988-03-18' => '18/03/1988'
- Converter data e hora para exibição (View) - (datetime)   : '1988-03-18 16:27:10' => '18/03/1988 - 16:27:10'

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

$date = DateBR::toView('1988-03-18', 'date'); // '18/03/1988'

$date = DateBR::toView('1988-03-18 16:27:10', 'datetime'); // '18/03/1988 - 16:27:10'

```
