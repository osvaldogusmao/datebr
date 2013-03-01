<?php

/**
 * Bundle conversor de data no formato pt_BR para o padrão usado no Mysql
 * 
 * @package     datebr
 * @author      Osvaldo Gusmão <osvaldogusmao@yahoo.com.br>
 * @basedon     
 */

class DateBR{

	protected static $formatos = array(
		'datetime' => 'd/m/Y - H:i:s',
		'date'     => 'd/m/Y',
	);

	public static function toMysql($value){

		$date = explode('/',$value);

		$dateFormat = $date[2].'-'.$date[1].'-'.$date[0];

		return $dateFormat;
	}
	
	public static function toView($value, $formato){

		if(in_array($formato, array_keys(DateBR::$formatos))){
			return date(DateBR::$formatos[$formato], strtotime($value));
		}else{
			return false;
		}

	}
}
