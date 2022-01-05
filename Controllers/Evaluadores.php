<?php
class Evaluadores extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }
    public function evaluadores()
    {
        $data['page_id'] = 6;
        $data['page_tag'] = 'Login-Verano Cientifico';
        $data['page_tittle'] = 'Registro Evaluadores';
        $data['page_name'] = 'Registro Evaluadores';
        $data['page_functions_js'] = 'functions_registerEval.js';
        $this->views->getView($this, 'registereval', $data);
    }
    public function register()
    {
        if ($_POST) {
            error_reporting(0); //quitarlo cuando ya se aloje en un hosting para probar función mail.
            if (empty($_POST['txtNombre']) || empty($_POST['txtPaterno']) || empty($_POST['txtMaterno']) || empty($_POST['txtRfc']) || empty($_POST['txtEmailInst']) || empty($_POST['txtEmailAlt']) || empty($_POST['txtTelefono']) || empty($_POST['txtExt']) || empty($_POST['txtInstitucion']) || empty($_POST['txtPassword']) || empty($_POST['txtConfirmarPass'])) {
                $arrResponse = array('status' => false, 'msg' => 'Error de datos');
            } else {
                $strNombre = $_POST['txtNombre'];
                $strPaterno = $_POST['#txtPaterno'];
                $strMaterno = $_POST['#txtMaterno'];
                $strRfc = $_POST['#txtRfc'];
                $strEmail = strClean($_POST['#txtEmailInst']);
                $strEmailAlt = strClean($_POST['#txtEmailAlt']);
                $strTelefono = $_POST['#txtTelefono'];
                $strExt = $_POST['#txtExt'];
                $strInstitucion = $_POST['#txtInstitucion'];
                $strPassword = $_POST['#txtPassword'];
                $strConfirmarPassword = $_POST['#txtConfirmarPass'];

                if ($strPassword != $strConfirmarPassword) {
                    $arrResponse = array('status' => false, 'msg' => 'Los passwords no coinciden.');
                } else {
                    $strPasswordEncriptA = hash("SHA256", $strPassword);
                    $dataEvaluadores = array(
                        'strNombre' => $strNombre,
                        'strPaterno' => $strPaterno,
                        'strMaterno' => $strMaterno,
                        'strRfc' => $strRfc,
                        'strEmail' => $strEmail,
                        'strEmailAlt' => $strEmailAlt,
                        'strTelefono' => $strTelefono,
                        'strExt' => $strExt,
                        'strInstitucion' => $strInstitucion,
                        'strPassword' => $strPasswordEncriptA
                    );
                    $requestEvaluadores = $this->model->insertEvaluador($dataEvaluadores);

                    if ($requestEvaluadores) {
                        $sendEmail = sendEmail($dataEvaluadores, 'Emailregistroevaluador');


                        if ($sendEmail) {
                            $arrResponse = array(
                                'status' => true,
                                'msg' => 'Se ha enviado un email al correo del administrador para la creación de su cuenta.'
                            );
                        } else {
                            $arrResponse = array(
                                'status' => false,
                                'msg' => 'El correo no se puedo enviar.'
                            );
                        }
                    } else {
                        $arrResponse = array(
                            'status' => false,
                            'msg' => 'Algo salio mal'
                        );
                    }
                }
                echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
            }
            die();
        }
    }
    public function llenarInstitucion()
    {
        $htmlOpcione = "";
        $arrData = $this->model->selectInstituciones();
        if (count($arrData) > 0) {
            for ($i = 0; $i < count($arrData); $i++) {
                $htmlOpcione .= '<option value="' . $arrData[$i]['name'] . '">' . $arrData[$i]['id'] . " - " . $arrData[$i]['name'] . '</option>';
            }
        }
        echo $htmlOpcione;
        die();
    }
}
