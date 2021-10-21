<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Create_Categories extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
    }

    public function up()
    {
        $this->dbforge->add_field([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'category_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'default' => 'Active'
            ]
        ]);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('categories');
    }

    public function down()
    {
        $this->dbforge->drop_table('categories');
    }
}