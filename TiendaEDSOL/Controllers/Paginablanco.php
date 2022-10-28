<?php 

	class Paginablanco extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function paginablanco()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = "Tienda ED&SOL";
			$data['page_title'] = "Tienda ED&SOL";
			$data['page_name'] = "paginablanco";
			$this->views->getView($this,"Paginablanco",$data);
		}

	}
 ?>