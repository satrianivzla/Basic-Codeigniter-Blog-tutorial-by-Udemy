<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Postcomments extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        /*Additional code which you want to run automatically in every function call */
        $this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
        $this->output->set_header('Pragma: no-cache');

        $this->load->model('comment');

    }

    public function get_comments($post_id)
    {

        $data['comments'] = $this->comment->get_comments($post_id);
        $this->load->view('get_comments', $data);
    }

    public function add_comment()
    {
        $this->load->view('add_comment');
    }

    public function save_comment($comment_data)
    {
        $data['comment'] = $this->comment->save($comment_data);
        echo $data['comment'];
    }

}
