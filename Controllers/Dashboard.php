<?php
class Dashboard extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }
    public function dashboard()
    {
        $data['page_id'] = 2;
        $data['page_tag'] = 'Dashboard - Verano Cientifico';
        $data['page_tittle'] = 'Dashboard - Verano Cientifico';
        $data['page_name'] = 'Dashboard';

        $this->views->getView($this, 'dashboard', $data);
    }
}
