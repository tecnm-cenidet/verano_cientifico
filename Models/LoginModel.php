<?php
class LoginModel extends Mysql
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
    public function loginUser(string $email, string $password)
    {
        $this->strEmail = $email;
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
        WHERE u.email='$this->strEmail' 
        and
        u.password='$this->strPassword' and u.status!=0";

        $request = $this->select($sql);
        return $request;
    }
    public function getUserEmail(string $email)
    {
        $this->strEmail = $email;
        $sql = "SELECT *FROM user WHERE email='$this->strEmail'
        and status=1";
        $request = $this->select($sql);
        return $request;
    }
    public function setTokenUser(int $idUser, string $token)
    {
        $this->intIdUsuario = $idUser;
        $this->strToken = $token;
        $sql = "UPDATE user SET
        token=? WHERE id=$this->intIdUsuario";
        $arrData = array($this->strToken);
        $request = $this->update($sql, $arrData);
        return $request;
    }
    public function getUser(string $email, string $token)
    {
        $this->strEmail = $email;
        $this->strToken = $token;
        $sql = "SELECT *FROM user WHERE email='$this->strEmail' 
        and
        token='$this->strToken' and status=1";

        $request = $this->select($sql);
        return $request;
    }
    public function insertPassword(int $idUser, string $password)
    {
        $this->intIdUsuario = $idUser;
        $this->strPassword = $password;
        $sql = "UPDATE user SET
        password=?, token=? WHERE id=$this->intIdUsuario";
        $arrData = array($this->strPassword, "");
        $request = $this->update($sql, $arrData);
        return $request;
    }
}
