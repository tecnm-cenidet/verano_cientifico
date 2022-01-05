<?php
class EvaluadoresModel extends Mysql
{
    private $strNombre;
    private $strPaterno;
    private $strMaterno;
    private $strRfc;
    private $strEmail;
    private $strEmailAlt;
    private $strTelefono;
    private $strExt;
    private $strInstitucion;
    private $strPassword;
    private $strConfirmacionPass;

    public function __construct()
    {
        parent::__construct();
    }
    public function selectInstituciones()
    {
        $sql = "SELECT *FROM institution";
        $request = $this->select_all($sql);
        return $request;
    }
    public function insertEvaluador($dataEvaluadores)
    {
        $this->strNombre = $dataEvaluadores['strNombre'];
        $this->strPaterno = $dataEvaluadores['strPaterno'];
        $this->strMaterno = $dataEvaluadores['strMaterno'];
        $this->strRfc = $dataEvaluadores['strRfc'];
        $this->strEmail = $dataEvaluadores['strEmail'];
        $this->strEmailAlt = $dataEvaluadores['strEmailAlt'];
        $this->strTelefono = $dataEvaluadores['strTelefono'];
        $this->strExt = $dataEvaluadores['strExt'];
        $this->strInstitucion = $dataEvaluadores['strInstitucion'];
        $this->strPassword = $dataEvaluadores['strPassword'];
        $this->strConfirmacionPass = $dataEvaluadores['strConfirmarPassword'];


        $sql = "INSERT INTO registration_request (name,falastname,molastname,rfc,email,emailalt,telefono,ext,institution,password)VAlUES(?,?,?,?,?,?,?,?,?,?)";
        $request = $this->insert($sql, $dataEvaluadores);
        return $request;
    }
}
