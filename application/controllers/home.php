<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{
    public function index()
    {

        $this->template->load('template_admin','admin/dashboard');
    }
}