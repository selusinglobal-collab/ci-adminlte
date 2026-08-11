<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Underconstruction extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->data['title'] = 'Under-construction';
        $this->data['pretitle'] = 'Overview';
        $this->data['pagetitle'] = 'Under-construction';
    }

    public function index() {
        // Panggil method 'render' dari modul 'layout'
        // Parameter pertama: 'nama_modul/nama_view'
        // echo modules::run('layout/render', 'underconstruction/v_underconstruction', $data);
        $data = [];
        // $this->render_layout('underconstruction/index', $data);
        // $this->render_layout('underconstruction/error-404', $data);
        $this->load->view('underconstruction/404');
    }
}
