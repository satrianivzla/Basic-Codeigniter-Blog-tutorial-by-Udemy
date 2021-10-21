<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Comment extends MY_Model
{
    //the database table
    public $table_name = 'comments';

    //Primary key field
    public $primary_key = 'id';

    //Filter for primary key
    public $primaryFilter = 'intval';

    //Order by field, Default order for this model
    public $order_by = '';

    public function __construct()
    {
        parent::__construct();
    }

    public function get_comments($post_id)
    {
        $query = $this->db->select('*')->from('comments')
            ->join('users', 'users.id = comments.commenter_id')
            ->where(array('comments.post_id' => $post_id))
            ->order_by('comments.id', 'DESC')->get();
        return $query->result_array();
    }

}
