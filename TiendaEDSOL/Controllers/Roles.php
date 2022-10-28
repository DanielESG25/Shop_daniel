<?php 

	class Roles extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Roles()
		{
			$data['page_id'] = 3;
			$data['page_tag'] = "Roles Usuario";
            $data['page_name'] = "rol_usuario";
			$data['page_title'] = "Roles Usuario <small>Tienda virtual</small>";
			$this->views->getView($this,"roles",$data);
		}

		public function getRoles()
		{
            $arrData = $this->model->selectRoles();
			//Recorrer la tabla para seleccionar solo el Estado de cada registro y poder marcarlo de color
			for($i=0;$i<count($arrData);$i++)
			{
				if($arrData[$i]['Estado'] == 1)
				{
					$arrData[$i]['Estado'] = '<span class="badge badge-success">Activo</span>';				
				}else{
					$arrData[$i]['Estado'] = '<span class="badge badge-danger">Inactivo</span>';
				}

				$arrData[$i]['opciones'] = '<div class="text-center">
				<button class="btn btn-info btn-sm btnEditarRol" rl="'.$arrData[$i]['Idrol'].'" title="Editar"> <i class="fas fa-pencil-alt"></i></button>
				<button class="btn btn-warning btn-sm btnPermisosRol" rl="'.$arrData[$i]['Idrol'].'" title="Permisos"> <i class="fas fa-key"></i></button>
				<button class="btn btn-danger btn-sm btnEliminarRol" rl="'.$arrData[$i]['Idrol'].'" title="Eliminar"><i class="far fa-trash-alt"></i></button>
			    </div>';
			}
			//convertir los datos del array para cualquier lenguaje.
			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			die();
		}

	}
 ?>