<?php
class PermisosModel extends Mysql
{
    public $idPermiso;
    public $id_rol;
    public $id_modulo;
    public $r;
    public $w;
    public $u;
    public $d;

    public function __construct()
    {
        parent::__construct();
    }
    public function selectModulos()
    {
        $sql = "SELECT *FROM module WHERE status!=0";
        $request = $this->select_all($sql);
        return $request;
    }
    public function selectPermisosRol(int $id_rol)
    {
        $this->id_rol = $id_rol;
        $sql = "SELECT *FROM permissions WHERE id_rol=$this->id_rol";
        $request = $this->select_all($sql);
        return $request;
    }
    public function permisosModulos(int $id_rol)
    {
        $this->id_rol = $id_rol;
        $sql = "SELECT 
        p.id_role,
        p.id_module,
        m.name,
        p.read,
        p.write,
        p.update,
        p.delete 
        FROM permissions p
        INNER JOIN module m
        ON
        p.id_module=m.id
        WHERE
        p.id_role=$this->id_rol";
        $request = $this->select_all($sql);
        //dep($request);

        $arrPermisos = array();

        for ($i = 0; $i < count($request); $i++) {
            $arrPermisos[$request[$i]['id_module']] = $request[$i];
        }
        //dep($arrPermisos);
        return $arrPermisos;
    }
}
