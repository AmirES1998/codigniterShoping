<?php


class Shoping_Model extends My_Model {

	function __construct()
    {
		parent::__construct() ;
    }

	function insert($table, $data) {
		if(count($data) > 0)
			return self::insert($table, $data) ;
	}


}
