<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{
    public function index()
    {

        $this->template->load('template_admin','admin/user');
    }
}