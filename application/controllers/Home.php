<?php
class Home extends CI_Controller

{
    public function index()
    {
        $data['title'] = 'TAPSA Electrohomeopathy
        Medical Institute (Promotion, Research & Development) Bihar';
        $this->load->view('home', $data);
    }
}
