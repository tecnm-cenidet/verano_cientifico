<?php
class LoginprofesorModel extends Mysql
{
    private $intIdUsuario;
    private $strUsuario;
    private $strPassword;
    private $strEmail;
    private $strToken;

    public function __construct()
    {
        parent::__construct();
    }
    public function loginUserProfesor(string $id, string $password)
    {
        $this->strId = $id;
        $this->strPassword = $password;
        $sql = "SELECT
        u.id as id,
        u.name as name,
        u.falastname as falastname,
        u.molastname as molastname,
        u.password as password, 
        u.profile_photo_path as profile_photo_path, 
        u.token as token,
        u.status as status,
        u.id_institution as id_institucion,
        r.name as role_name,
        r.id as id_role
        FROM
        user u
        INNER JOIN
        role r
        on
        u.id_role=r.id
        WHERE u.email='$this->strId'
        and
        u.password='$this->strPassword' and u.status!=0";

        $request = $this->select($sql);
        return $request;
    }
}
