<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template
{

  function __construct()
  {
    $this->ci =&get_instance();
  }

  function admin($template, $data='')
  {

    $data['content'] = $this->ci->load->view($template, $data, TRUE);
    $data['nav']     = $this->ci->load->view('admin/nav', $data, TRUE);

    $this->ci->load->view('admin/dashboard', $data);
  }

  function user($template, $data='')
  {

    $data['content'] = $this->ci->load->view($template, $data, TRUE);
    $data['nav']     = $this->ci->load->view('user/nav', $data, TRUE);
    $data['css']     = $this->ci->load->view('user/css', $data, TRUE);
    $data['js']      = $this->ci->load->view('user/js', $data, TRUE);

    $this->ci->load->view('user/index', $data);
  }
}
