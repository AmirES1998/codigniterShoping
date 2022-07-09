<?php

class My_Controller extends CI_Controller
{
	public $tables ;
	public $scope ;   // panel & site scope
	public $url;
	public function __construct()
	{
		parent::__construct();
		$this->lang->load("public", "fa") ; // fa is directory that public_lang.php is in it
		self::setTables() ;
	}

	protected function setTables() {
		$this->tables = array(
			"customers" => "customers" ,
			"brands" => "manufatueres" ,
			"orders" => "orders" ,
			"products" => "products" ,
			"product_groups" => "product_groups" ,
			"product_pictures" => "product_pics"

		);
	}

	protected function uploadFiles() {

	}

	protected function success() {

	}

}
