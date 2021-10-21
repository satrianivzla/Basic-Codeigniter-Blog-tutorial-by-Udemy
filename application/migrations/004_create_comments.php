<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Create_Comments extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ),

            'post_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ),

            'commenter_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ),

            'comment_body' => array(
                'type' => 'VARCHAR',
                'constraint' => '200',
            ),

            'created_at  timestamp default current_timestamp',
            'updated_at' => array(
                'type' => 'varchar',
                'constraint' => 250,
                'null' => true,
                'on update' => 'NOW()',
            ),

        ));
        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('comments');
    }

    public function down()
    {
        $this->dbforge->drop_table('comments');
    }
}
