<?php 

	class RolesModel extends Mysql
	{
		public function __construct()
		{
			parent::__construct();
		}	

        public function selectRoles()
        {
            //envia la consulta a las librerias donde esta el archivo de consulta a la base de datos
            $sql = "SELECT * FROM rol WHERE estado != 0";
            $request = $this->select_all($sql);
            return $request;
        }
	}


 ?>