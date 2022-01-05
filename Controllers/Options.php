<?php
class Options extends Controllers
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
    public function options()
    {
        $data['page_id'] = 1;
        $data['page_tag'] = 'Opciones de sesión';
        $data['page_tittle'] = 'Opciones de sesión';
        $data['page_name'] = 'Opciones de sesión';
        $data['page_functions_js'] = 'functions_login.js';
        $this->views->getView($this, 'options', $data);
    }
}
