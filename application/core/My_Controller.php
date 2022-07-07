<?php

class My_Controller extends CI_Controller
{
	public $tables ;
	public $scope ;
	public function __construct()
	{
		parent::__construct();
		$this->lang->load("public", "fa") ;
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

	protected function upload_files() {

	}

	protected function success() {

	}

}
