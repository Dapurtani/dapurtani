<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

  function __construct()
{
    parent::__construct();
    $this->load->library(array('template'));
    $this->load->model('search_m');
}

  public function index(){
    $data['t_sayur']=$this->search_m->get_all();
    $this->load->view('user/nav',$data);
  }


}
