<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Public_access extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        /*Additional code which you want to run automatically in every function call */
        $this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
        $this->output->set_header('Pragma: no-cache');

        $this->load->model('user');

    }

    public function view_author_profile($id)
    {
        $id = $this->uri->segment(2);
        if (empty($id)) {
            show_404();
        } else {

            $data['title'] = 'View Profile';
            $data['module'] = 'users';
            $data['view_file'] = 'view_author_profile';

            $data['user_profile'] = $this->user->find($id);

            if ($this->session->userdata('is_logged_in') == false) {
                echo Modules::run('templates/default_layout', $data);
            } else {
                echo Modules::run('templates/user_layout', $data);
            }
        }
    }

    public function author_check($id)
    {
        $data['user_profile'] = $this->user->find($id);
        if (empty($data['user_profile'])) {
            echo 'error';
        }
    }

}
