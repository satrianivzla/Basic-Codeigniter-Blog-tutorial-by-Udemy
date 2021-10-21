<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
        $this->output->set_header('Pragma: no-cache');

        $this->load->model('category');
    }

    public function get_cat_for_form()
    {
        $data['categories'] = $this->category->find();
        $this->load->view('cat_form', $data);
    }
    
    public function get_cat_sidebar()
    {
        $data['categories'] =  $this->category->find();
        $this->load->view('cat_sidebar', $data);
    }
}