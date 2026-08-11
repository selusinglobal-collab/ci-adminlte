<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends MY_Controller {

    public function __construct() {
        parent::__construct();
        // $this->load->model('gl_account_model');
        $this->data['title']     = "sia.selusin :: Beranda";
        $this->data['pretitle']  = "&nbsp;";
        $this->data['pagetitle'] = "Beranda";
        $this->data['beranda'] = 1;
    }

    public function index()
    {
        // $data['title'] = "Home";

        // Panggil method 'render' dari modul 'layout'
        // Parameter pertama: 'nama_modul/nama_view'
        // echo modules::run('layout/render', 'home/index', $data);
        $data = [];
        $this->render_layout('beranda/index', $data);
    }
}
