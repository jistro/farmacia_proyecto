<?php namespace App\Controllers;

use App\Models\CrudModel;
use CodeIgniter\Config\View;

class Crud extends BaseController
{
	public function index()
	{
		$Crud= new CrudModel();
		$Datos= $Crud->ObtenerData();
		$mensaje = session('mensaje');
		$data= 	[
					"datos" => $Datos,
					"mensaje" => $mensaje
				];
		return view('listado', $data);
	}

	public function crear()
	{
		$datos=	[
					"CODIGO_DE_BARRAS"		=>$_POST['CODIGO_DE_BARRAS'],
					"NOMBRE_MEDICAMENTO"	=>$_POST['NOMBRE_MEDICAMENTO'],
					"ACTIVO"       			=>$_POST['ACTIVO'],
					"TIPO_MEDICAMENTO"      =>$_POST['TIPO_MEDICAMENTO'],
					"DESCRIPCION"  			=>$_POST['DESCRIPCION'],
					"STOCK_DISPONIBLE"      =>$_POST['STOCK_DISPONIBLE']
				];
		$Crud= new CrudModel();
		$respuesta = $Crud->insertar($datos,$_POST['CODIGO_DE_BARRAS']);
		if ($respuesta>0)
		{
			return redirect()->to(base_url().'/')->with('mensaje','0');
		}
		else
		{
			return redirect()->to(base_url().'/')->with('mensaje','1');
		}
		//echo $Crud->insertar($datos);
	}

	public function actualizar()
	{
		$datos=	[
					"NOMBRE_MEDICAMENTO"	=>$_POST['NOMBRE_MEDICAMENTO'],
					"ACTIVO"       			=>$_POST['ACTIVO'],
					"TIPO_MEDICAMENTO"      =>$_POST['TIPO_MEDICAMENTO'],
					"DESCRIPCION"  			=>$_POST['DESCRIPCION'],
					"STOCK_DISPONIBLE"      =>$_POST['STOCK_DISPONIBLE']
				];	
		$idDato= $_POST['CODIGO_DE_BARRAS'];
		$Crud = new CrudModel();
		$respuesta = $Crud->actualizar($datos,$idDato);
		if ($respuesta)
		{
			return redirect()->to(base_url().'/')->with('mensaje','2');
		}
		else
		{
			return redirect()->to(base_url().'/')->with('mensaje','3');
		}
	}

	public function surtir()
	{
		if (($_POST['Cantidad'])<=0)
		{
			return redirect()->to(base_url().'/')->with('mensaje','10');
		}
		if (($_POST['STOCK_DISPONIBLE']-$_POST['Cantidad'])>0)
		{
			$datos=	[
				"NOMBRE_MEDICAMENTO"	=>$_POST['NOMBRE_MEDICAMENTO'],
				"ACTIVO"       			=>$_POST['ACTIVO'],
				"TIPO_MEDICAMENTO"      =>$_POST['TIPO_MEDICAMENTO'],
				"DESCRIPCION"  			=>$_POST['DESCRIPCION'],
				"STOCK_DISPONIBLE"      =>$_POST['STOCK_DISPONIBLE']-$_POST['Cantidad']
			];	
			$idDato= $_POST['CODIGO_DE_BARRAS'];
			$Crud = new CrudModel();
			$respuesta = $Crud->actualizar($datos,$idDato);
			if ($respuesta)
			{
				return redirect()->to(base_url().'/')->with('mensaje','6');
			}
			else
			{
				return redirect()->to(base_url().'/')->with('mensaje','7');
			}
		}
		else if (($_POST['STOCK_DISPONIBLE']-$_POST['Cantidad'])==0)
		{
			$Crud= new CrudModel();
			$data= ["CODIGO_DE_BARRAS"=>$_POST['CODIGO_DE_BARRAS']];
			$respuesta = $Crud->eliminar($data);
			if ($respuesta)
			{
				return redirect()->to(base_url().'/')->with('mensaje','8');
			}
			else
			{
				return redirect()->to(base_url().'/')->with('mensaje','7');
			}
		}
		else if (($_POST['Cantidad'])>$_POST['STOCK_DISPONIBLE'])
		{
			return redirect()->to(base_url().'/')->with('mensaje','9');
		}
	}


	public function obtenerDatos($idDatos)
	{
		$data=["CODIGO_DE_BARRAS"=>$idDatos];
		$Crud= new CrudModel();
		$respuesta= $Crud->ObtenerDato($data);
		$datos=["datos"=>$respuesta];
		return view('actualizar',$datos);
	}
	public function surtir_med($idDatos)
	{
		$data=["CODIGO_DE_BARRAS"=>$idDatos];
		$Crud= new CrudModel();
		$respuesta= $Crud->ObtenerDato($data);
		$datos=["datos"=>$respuesta];
		return view('surtir',$datos);
	}

	public function eliminar($idDato)
	{
		$Crud= new CrudModel();
		$data= ["CODIGO_DE_BARRAS"=>$idDato];
		$respuesta = $Crud->eliminar($data);
		if ($respuesta)
		{
			return redirect()->to(base_url().'/')->with('mensaje','4');
		}
		else
		{
			return redirect()->to(base_url().'/')->with('mensaje','5');
		}

	}

	

}
