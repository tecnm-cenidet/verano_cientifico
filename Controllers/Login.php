<?php
class Login extends Controllers
{
    public function __construct()
    {
        session_start();
        if (isset($_SESSION['login'])) {
            header('Location:' . base_url() . '/');
        }
        parent::__construct();
    }
    public function login()
    {
        $data['page_id'] = 6;
        $data['page_tag'] = 'Login-Verano Cientifico';
        $data['page_tittle'] = 'Login-Verano Cientifico';
        $data['page_name'] = 'Login';
        $data['page_functions_js'] = 'functions_login.js';
        $this->views->getView($this, 'login', $data);
    }
    public function loginUser()
    {
        if ($_POST) {
            if (empty($_POST['txtEmail']) || empty($_POST['txtPassword'])) {
                $arrResponse = array('status' => false, 'msg' => 'Error de datos');
            } else {
                $strEmail = strtolower(strClean($_POST['txtEmail']));
                $strPassword = hash("SHA256", $_POST['txtPassword']);
                $requestUser = $this->model->loginUser($strEmail, $strPassword);

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
    public function resetPass()
    {
        if ($_POST) {
            error_reporting(0); //quitarlo cuando ya se aloje en un hosting
            if (empty($_POST['txtEmail'])) {
                $arrResponse = array('status' => false, 'msg' => 'Error de datos');
            } else {
                $token = token();
                $strEmail = strtolower(strClean($_POST['txtEmail']));
                $arrData = $this->model->getUserEmail($strEmail);

                if (empty($arrData)) {
                    $arrResponse = array('status' => false, 'msg' => 'La cuenta de correo no esta registrada.');
                } else {
                    $idUser = $arrData['id'];
                    $nombreUser = $arrData['name'];

                    $url_recovery = base_url() . '/login/confirmUser/' . $strEmail . '/' . $token;
                    $requestUpdate = $this->model->setTokenUser($idUser, $token);

                    $dataUser = array(
                        'user' => $nombreUser,
                        'email' => $strEmail,
                        'asunto' => 'Recuperar cuenta -' . NOMBRE_REMITENTE,
                        'url_recovery' => $url_recovery
                    );

                    if ($requestUpdate) {
                        $sendEmail = sendEmail($dataUser, 'Emailcambiopassword');

                        exit;
                        if ($sendEmail) {
                            $arrResponse = array(
                                'status' => true,
                                'msg' => 'Se ha enviado un email a tu correo para cambiar la contraseña'
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
    public function confirmUser(string $params)
    {
        if (empty($params)) {
            header('Location:' . base_url() . '/login');
        } else {
            $arrParams = explode(',', $params);
            $strEmail = strClean($arrParams[0]);
            $strToken = strClean($arrParams[1]);

            $arrResponse = $this->model->getUser($strEmail, $strToken);

            if (empty($arrResponse)) {
                header('Location:' . base_url() . '/login');
            } else {
                $data['page_id'] = 8;
                $data['page_tag'] = 'Cambiar Password';
                $data['page_tittle'] = 'Cambiar Password';
                $data['page_name'] = 'Cambiar Password';
                $data['user_id'] = $arrResponse['id'];
                $data['email'] = $strEmail;
                $data['token'] = $strToken;
                $data['page_functions_js'] = 'functions_login.js';
                $this->views->getView($this, 'changepassword', $data);
            }
        }
        die();
    }

    public function changePass()
    {
        if ($_POST) {
            if (empty($_POST['txtUserId']) || empty($_POST['txtEmail']) || empty($_POST['txtToken']) || empty($_POST['txtNuevoPassword']) || empty($_POST['txtConfirmarPassword'])) {
                $arrResponse = array('status' => false, 'msg' => 'Error de datos');
            } else {
                $idUser = intval($_POST['txtUserId']);
                $strNuevoPassword = $_POST['txtNuevoPassword'];
                $strConfirmarPassword = $_POST['txtConfirmarPassword'];
                $strEmail = strClean($_POST['txtEmail']);
                $strToken = strClean($_POST['txtToken']);

                if ($strNuevoPassword != $strConfirmarPassword) {
                    $arrResponse = array('status' => false, 'msg' => 'Los passwords no coinciden.');
                } else {
                    $requestUser = $this->model->getUser($strEmail, $strToken);
                    if (empty($requestUser)) {
                        $arrResponse = array('status' => false, 'msg' => 'Error de datos.');
                    } else {
                        $strPasswordEncript = hash("SHA256", $strNuevoPassword);
                        $requestPass = $this->model->insertPassword($idUser, $strPasswordEncript);
                        if ($requestPass) {
                            $arrResponse = array(
                                'status' => true,
                                'msg' => 'Password actualizado con éxito.'
                            );
                        } else {
                            $arrResponse = array(
                                'status' => false,
                                'msg' => 'Algo salio mal'
                            );
                        }
                    }
                }
            }
            echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
            die();
        }
    }
}
