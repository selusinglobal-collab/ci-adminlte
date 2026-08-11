<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Wajib meng-extends MX_Controller agar kompatibel dengan HMVC Wiredesignz
class MY_Controller extends MX_Controller {

    protected $data = [];

    public function __construct() {
        parent::__construct();

        // Load library dan helper global yang pasti dipakai di semua controller
        // $this->load->library('session');
        // $this->load->helper('url');

        // Pengecekan status login
        // Jika user belum login, lempar ke halaman login frontend
        // if (!$this->session->userdata('fa_logged_in')) {
        //     // Kecualikan controller login itu sendiri agar tidak terjadi looping redirect
        //     if ($this->router->fetch_class() !== 'auth') {
        //         redirect('auth/login');
        //     }
        // }

        // Default value untuk semua page
        $this->data['title']     = "Home";
        $this->data['pretitle']  = "Dashboard";
        $this->data['pagetitle'] = "Home";
    }

    /**
     * Helper untuk me-render page menggunakan modul layout HMVC
     */
    protected function render_layout($view_path, $custom_data = []) {
        // Gabungkan array default ($title, $pretitle, dll) dengan data dinamis dari method
        $merged_data = array_merge($this->data, $custom_data);

        // Eksekusi core HMVC run untuk modul layout
        echo modules::run('layout/render', $view_path, $merged_data);
    }

}
