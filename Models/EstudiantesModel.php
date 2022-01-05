<?php
class EstudiantesModel extends Mysql
{
    private $strNombre;
    private $strPaterno;
    private $strMaterno;
    private $strCurp;
    private $strEmail;
    private $strEmailAlt;
    private $strInstitucion;
    private $strCel;
    private $strTelefono;
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
    public function insertEstudiante($dataEstudiantes)
    {
        $this->strNombre = $dataEstudiantes['strNombre'];
        $this->strPaterno = $dataEstudiantes['strPaterno'];
        $this->strMaterno = $dataEstudiantes['strMaterno'];
        $this->strRfc = $dataEstudiantes['strRfc'];
        $this->strEmail = $dataEstudiantes['strEmail'];
        $this->strEmailAlt = $dataEstudiantes['strEmailAlt'];
        $this->strTelefono = $dataEstudiantes['strTelefono'];
        $this->strExt = $dataEstudiantes['strExt'];
        $this->strInstitucion = $dataEstudiantes['strInstitucion'];
        $this->strPassword = $dataEstudiantes['strPassword'];
        $this->strConfirmacionPass = $dataEstudiantes['strConfirmarPassword'];


        $sql = "INSERT INTO registration_request(name,falastname,molastname,curp,email,emailalt,institution,cel,telefono,password)VAlUES(?,?,?,?,?,?,?,?,?,?)";
        $request = $this->insert($sql, $dataEstudiantes);
        return $request;
    }
}
