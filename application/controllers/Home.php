<?php
class Home extends CI_Controller

{
    public function index()
    {
        $data['title'] = "TAPSA Electrohomeopathy Medical Institute";
        $this->load->view('home', $data);
    }
}