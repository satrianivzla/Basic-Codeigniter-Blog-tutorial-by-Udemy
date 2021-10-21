<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Create_Posts extends CI_Migration
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
            'category_id' => [
                'type' => 'INT',
                'constraint' => '5',
                'unsigned' => TRUE
            ],
            'poster_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'body' => [
                'type' => 'VARCHAR',
                'constraint' => '500'
            ],
            'created_at timestamp default current_timestamp',
            'updated_at' => [
                'type' => 'VARCHAR',
                'constraint' => 250,
                'null' => TRUE,
                'on update' => 'NOW()'
            ]
        ]);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('posts');
    }

    public function down()
    {
        $this->dbforge->drop_table('posts');
    }
}