<?php
class ResetPassword extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }
    public function resetpassword()
    {
        $data['page_id'] = 7;
        $data['page_tag'] = 'ResetPassword-Verano Cientifico';
        $data['page_tittle'] = 'ResetPassword';
        $data['page_name'] = 'ResetPassword';
        $data['page_functions_js'] = 'functions_login.js';
        $this->views->getView($this, 'resetpassword', $data);
    }
}
