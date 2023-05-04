<?php
class Home extends CI_Controller

{
    public function index()
    {
        $data['title'] = 'TAPSA Electrohomeopathy
        Medical Institute (Promotion, Research & Development)';
        $this->load->view('home');
    }
}
