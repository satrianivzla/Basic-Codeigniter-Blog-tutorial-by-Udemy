<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends MX_Controller
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

    public function index()
    {
        $this->form_validation->set_rules('firstname', 'Firstname',
            'trim|required|min_length[2]|max_length[50]');

        $this->form_validation->set_rules('lastname', 'Lastname',
            'trim|required|min_length[2]|max_length[50]');

        $this->form_validation->set_rules('email', 'Email address',
            'trim|required|valid_email|is_unique[users.email]');

        $this->form_validation->set_rules('password', 'Password',
            'trim|required|min_length[2]');

        $this->form_validation->set_rules('confirm_password', 'Confirm Password',
            'trim|required|min_length[2]|matches[password]');

        $this->form_validation->set_rules('gender', 'Gender', 'trim|required');

        $this->form_validation->set_message('is_unique',
            'The Email you are trying to register is already in use..!!');

        if ($this->form_validation->run() === false) {
            $data['title'] = 'Register';
            $data['module'] = 'users';
            $data['view_file'] = 'register';
            echo Modules::run('templates/default_layout', $data);
        } else {
            $email = $this->input->post('email');
            $firstname = $this->input->post('firstname');
            $lastname = $this->input->post('lastname');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $gender = $this->input->post('gender');

            if ($gender === 'male') {
                $profile_pic = 'male.png';
            } else {
                $profile_pic = 'female.png';
            }
            //hash password
            $this->load->library('bcrypt');
            $hash = $this->bcrypt->hash_password($password);

            $userData = array(
                'email' => $email,
                'firstname' => $firstname,
                'lastname' => $lastname,
                'username' => $username,
                'password' => $hash,
                'profile_pic' => $profile_pic,
                'gender' => $gender,
            );

            $data['insert'] = $this->user->save($userData);

            if (!empty($data['insert'])) {
                $this->session->set_flashdata('UserRegistred',
                    'You have registered successfully kindly Login..!!');
                redirect('login');
            }

        }

    }

}
