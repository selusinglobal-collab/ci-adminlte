<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layout extends MY_Controller { // Pastikan extend ke MX_Controller untuk HMVC

    public function render($view, $data = array())
    {
        // Mengambil view konten secara modular dan menyimpannya sebagai string buffer
        $data['content'] = $this->load->view($view, $data, TRUE);

        // Memasukkan konten tersebut ke dalam Master Template
        $this->load->view('index', $data);
    }
}
