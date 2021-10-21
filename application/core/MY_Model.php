<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Model extends CI_Model
{
    //the database table
    public $table_name = '';

    //Primary key field
    public $primary_key = '';

    //Filter for primary key
    public $primaryFilter = 'intval';

    //Order by field, Default order for this model
    public $order_by = '';

    public function __construct()
    {
        parent::__construct();
    }

    public function find($ids = false)
    {
        //set flag -if we are passing a single id then we should get a single record
        $single = $ids == false || is_array($ids) ? false : true;

        if ($ids !== false) {
            //check if the ids is an array
            is_array($ids) || $ids = array($ids);

            //sanitize ids
            $filter = $this->primaryFilter;
            $ids = array_map($filter, $ids);

            //using active record where_in as are dealing with array
            $this->db->where_in($this->primary_key, $ids);
        }

        //check order by if it was already set
        // count($this->db->order_by($this->order_by)) ||
        // $this->db->order_by($this->order_by);

        //Return results
        $single == false || $this->db->limit(1);
        $method = $single ? 'row_array' : 'result_array';
        return $this->db->get($this->table_name)->$method();

    }

    public function find_by($key, $val = false, $orwhere = false, $single = false)
    {
        //LIMIT the result
        // check if the keys are in array or not

        if (!is_array($key)) {
            $this->db->where(htmlentities($key), htmlentities($val));
        } else {
            $key = array_map('htmlentities', $key);
            $where_method = $orwhere == true ? 'or_where' : 'where';
            $this->db->$where_method($key);
        }

        //Return results
        $single == false || $this->db->limit(1);
        $method = $single ? 'row_array' : 'result_array';
        return $this->db->get($this->table_name)->$method();

    }

    public function get_assoc($ids = false)
    {
        //Get records
        $result = $this->find($ids);
        //turn result into an associative array
        if ($ids != false && !is_array($ids)) {
            $result = array($result);
        }
        $data = $this->to_assoc($result);

        return $data;
    }

    public function to_assoc($result = array())
    {
        $data = array();
        if (count($result) > 0) {
            foreach ($result as $row) {
                $tmp = array_values(array_slice($row, 0, 1));
                $data[$tmp[0]] = $row;
            }
        }

        return $data;
    }

    public function save($data, $id = false)
    {
        if ($id == false) {
            //insert data
            $this->db->set($data)->insert($this->table_name);
        } else {
            //update the data
            $filter = $this->primaryFilter;
            $this->db->set($data)->where($this->primary_key, $filter($id))
                ->update($this->table_name);
        }

        //Return ID
        return $id == false ? $this->db->insert_id() : $id;
    }

    public function delete($ids)
    {
        $filter = $this->primaryFilter;
        $ids = !is_array($ids) ? array($ids) : $ids;

        foreach ($ids as $id) {
            $id = $filter($id);
            if ($id) {
                $this->db->where($this->primary_key, $id)->limit(1)
                    ->delete($this->table_name);
            }
        }
    }

    public function delete_by($key, $value)
    {
        if (empty($key)) {
            return false;
        }
        $this->db->where(htmlentities($key), htmlentities($value))
            ->delete($this->table_name);
    }

}
