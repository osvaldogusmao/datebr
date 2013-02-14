<?php

/**
 * Bundle conversor de data no formato pt_BR para o padrão usado no Mysql
 * 
 * @package     datebr
 * @author      Osvaldo Gusmão <osvaldogusmao@yahoo.com.br>
 * @basedon     
 */

class DateBR{

	public static function toMysql($value){

		$date = explode('/',$value);

		$dateFormat = $date[2].'-'.$date[1].'-'.$date[0];

		return $dateFormat;
	}

}