<?php
class Home extends Controllers
{
    public function __construct()
    {
        parent::__construct();
        session_start();
        session_regenerate_id(true);
        if (empty($_SESSION['login'])) {
            header('Location:' . base_url() . '/login');
        }
        getPermisos(1);
    }
    public function Home()
    {
        $data['page_id'] = 1;
        $data['page_tag'] = 'Verano Cientifico';
        $data['page_tittle'] = 'Página Principal';
        $data['page_name'] = 'home';
        $data['page_content'] = 'Aqui va todo el contenido de la page';
        $this->views->getView($this, 'home', $data);
    }
}
