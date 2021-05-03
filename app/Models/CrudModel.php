<?php namespace App\Models;

use CodeIgniter\Model;

class CrudModel extends Model
{
    public function ObtenerData()
    {
        $query= $this->db->query("SELECT * FROM stock_medicinas");
        return $query->getResult();
    }
    public function insertar($datos,$idDato)
    {
        $query =$this->db->table('stock_medicinas');
        $query ->insert($datos,$idDato);
        return $this->db->insertID($idDato);
    }
    public function insertar_receta($datos)
    {
        $query =$this->db->table('recetas');
        $query ->insert($datos);
        return $this->db->insertID();
    }
    public function ObtenerDato($data)
    {
        $datos = $this->db->table('stock_medicinas');
        $datos ->where($data);
        return $datos->get()->getResultArray();
    }

    public function actualizar($data,$idDato)
    {
        $datos = $this->db->table('stock_medicinas');
        $datos ->set($data);
        $datos ->where('CODIGO_DE_BARRAS',$idDato);
        return $datos ->update();
    }
    public function eliminar($data)
    {
        $datos = $this->db->table('stock_medicinas');
        $datos ->where($data);
        return $datos ->delete();

    }
}