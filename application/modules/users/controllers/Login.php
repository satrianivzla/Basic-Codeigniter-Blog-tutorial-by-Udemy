<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('user');

        $this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
        $this->output->set_header('Pragma: no-cache');

        $this->load->library('MY_Form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('login_email', 'Email ID',
            'trim|valid_email|callback_login_check');
        $this->form_validation->set_rules('login_password', 'Password', 'trim|required');

        if ($this->form_validation->run($this) === false) {
            $data['title'] = 'Login';
            $data['module'] = 'users';
            $data['view_file'] = 'login';
            echo Modules::run('templates/default_layout', $data);
        } else {
            redirect('dashboard','refresh');
        }

    }

    public function login_check()
    {
        $email = $this->input->post('login_email');
        $password = $this->input->post('login_password');

        if (empty($email)) {
            $this->form_validation->set_message('login_check', 'Email is Required');
            return false;
        }

        //Using MY MODEL find_by methods
        $data['userData'] = $this->user->find_by('email', $email, null, true);

        if (empty($data['userData'])) {
            $this->form_validation->set_message('login_check', 'Invalid email or password');
            return false;
        } else {
            $storedPassword = $data['userData']['password'];

            //checking the hashed password by using bcrypt library
            $this->load->library('bcrypt');
            if ($this->bcrypt->check_password($password, $storedPassword)) {
                //Password does match the stored password
                $newdata = array(
                    'user_id' => $data['userData']['id'],
                    'firstname' => $data['userData']['firstname'],
                    'lastname' => $data['userData']['lastname'],
                    'is_logged_in' => true,
                );

                $this->session->set_userdata($newdata);
                return true;
            } else {
                //Password does not match
                $this->form_validation->set_message('login_check', 'Invalid email or password');
                return false;
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login', 'refresh');
    }

}
