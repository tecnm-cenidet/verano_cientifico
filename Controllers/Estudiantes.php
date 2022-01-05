<?php
class Estudiantes extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }
    public function estudiantes()
    {
        $data['page_id'] = 7;
        $data['page_tag'] = 'Login-Verano Cientifico';
        $data['page_tittle'] = 'Registro Estudiantes';
        $data['page_name'] = 'Registro Estudiantes';
        $data['page_functions_js'] = 'functions_registerEst.js';
        $this->views->getView($this, 'registerest', $data);
    }
    public function register()
    {
        if ($_POST) {
            error_reporting(0); //quitarlo cuando ya se aloje en un hosting para probar función mail.
            if (empty($_POST['txtNombre']) || empty($_POST['txtPaterno']) || empty($_POST['txtMaterno']) || empty($_POST['txtCurp']) || empty($_POST['txtEmailInst']) || empty($_POST['txtEmailAlt']) || empty($_POST['txtInstitucion']) || empty($_POST['txtCel']) || empty($_POST['txtTelefono']) || empty($_POST['txtPassword']) || empty($_POST['txtConfirmarPass'])) {
                $arrResponse = array('status' => false, 'msg' => 'Error de datos');
            } else {
                $strNombre = $_POST['txtNombre'];
                $strPaterno = $_POST['#txtPaterno'];
                $strMaterno = $_POST['#txtMaterno'];
                $strCurp = $_POST['#txtCurp'];
                $strEmail = strClean($_POST['#txtEmailInst']);
                $strEmailAlt = strClean($_POST['#txtEmailAlt']);
                $strInstitucion = $_POST['#txtInstitucion'];
                $strCel = $_POST['#txtCel'];
                $strTelefono = $_POST['#txtTelefono'];
                $strPassword = $_POST['#txtPassword'];
                $strConfirmarPassword = $_POST['#txtConfirmarPass'];

                if ($strPassword != $strConfirmarPassword) {
                    $arrResponse = array('status' => false, 'msg' => 'Los passwords no coinciden.');
                } else {
                    $strPasswordEncriptA = hash("SHA256", $strPassword);
                    $dataEstudiantes = array(
                        'strNombre' => $strNombre,
                        'strPaterno' => $strPaterno,
                        'strMaterno' => $strMaterno,
                        'strCurp' => $strCurp,
                        'strEmail' => $strEmail,
                        'strEmailAlt' => $strEmailAlt,
                        'strInstitucion' => $strInstitucion,
                        'strCel' => $strCel,
                        'strTelefono' => $strTelefono,
                        'strPassword' => $strPasswordEncriptA
                    );
                    $requestEvaluadores = $this->model->insertEstudiante($dataEstudiantes);

                    if ($requestEvaluadores) {
                        $sendEmail = sendEmail($dataEstudiantes, 'Emailregistroestudiante');


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
