<?php
class Tematics extends Controllers
{
    public function __construct()
    {
        parent::__construct();
        session_start();
        if (empty($_SESSION['login'])) {
            header('Location:' . base_url() . '/login');
        }
    }
    public function Tematics()
    {
        $data['page_id'] = 4;
        $data['page_tag'] = 'Verano Cientifico';
        $data['page_tittle'] = 'Temáticas de Investigación';
        $data['page_name'] = 'Tematicas';
        $this->views->getView($this, 'tematicas', $data);
    }
}
