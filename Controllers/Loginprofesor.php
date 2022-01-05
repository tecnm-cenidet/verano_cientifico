<?php
class Loginprofesor extends Controllers
{
    public function __construct()
    {
        session_start();
        session_regenerate_id(true);
        if (isset($_SESSION['login'])) {
            header('Location:' . base_url() . '/');
        }
        parent::__construct();
    }
    public function loginprofesor()
    {
        $data['page_id'] = 6;
        $data['page_tag'] = 'Login-Verano Cientifico';
        $data['page_tittle'] = 'Login-Verano Cientifico';
        $data['page_name'] = 'Login';
        $data['page_functions_js'] = 'functions_login.js';
        $this->views->getView($this, 'loginprofesor', $data);
    }
    public function loginUserProfesor()
    {

        if ($_POST) {
            if (empty($_POST['txtIdTec']) || empty($_POST['txtPassword'])) {
                $arrResponse = array('status' => false, 'msg' => 'Error de datos');
            } else {
                $strId = strtolower(strClean($_POST['txtIdTec']));
                $strPassword = hash("SHA256", $_POST['txtPassword']);
                $requestUser = $this->model->loginUserProfesor($strId, $strPassword);
                //dep($requestUser);

                if (empty($requestUser)) {
                    $arrResponse = array('status' => false, 'msg' => 'El usuario o la contraseña son incorrectos.');
                } else {
                    $arrData = $requestUser;
                    if ($arrData['status'] == 1) {
                        $_SESSION['id_User'] = $arrData['id'];
                        $_SESSION['login'] = true;
                        $_SESSION['userData'] = $arrData;
                        $arrResponse = array('status' => true, 'msg' => 'ok');
                    } else {
                        $arrResponse = array('status' => false, 'msg' => 'El usuario está inactivo.');
                    }
                }
                echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
            }
            die();
        }
    }
}
