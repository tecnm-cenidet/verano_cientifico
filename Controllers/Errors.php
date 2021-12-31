<?php
class Errors extends Controllers
{
    public function __construct()
    {
        parent::__construct();
        session_start();
        if (empty($_SESSION['login'])) {
            header('Location:' . base_url() . '/login');
        }
    }
    public function NotFound()
    {
        $data['page_id'] = 3;
        $data['page_tag'] = 'Error';
        $data['page_tittle'] = 'Página No encontrada';
        $data['page_name'] = 'error';

        $this->views->getView($this, 'errors', $data);
    }
}
$notFound = new Errors();
$notFound->NotFound();
