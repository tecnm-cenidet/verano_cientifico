<?php
class Students extends Controllers
{
    public function __construct()
    {
        parent::__construct();
        session_start();
        session_regenerate_id(true);
        if (empty($_SESSION['login'])) {
            header('Location:' . base_url() . '/login');
        }
    }
    public function Students()
    {
        $data['page_id'] = 5;
        $data['page_tag'] = 'Verano Cientifico';
        $data['page_tittle'] = 'Estudiantes';
        $data['page_name'] = 'Estudiantes';
        $this->views->getView($this, 'estudiantes', $data);
    }
}
