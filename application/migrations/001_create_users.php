<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_Users extends CI_Migration {

  public function __construct()
  {
    parent::__construct();
  }

  public function up()
  {
    $this->dbforge->add_field(array(
      'id' => array(
        'type' => 'INT',
        'constraint' => 5,
        'unsigned' => TRUE,
        'auto_increment' => TRUE
      ),

      'email' => array(
        'type' => 'VARCHAR',
        'constraint' => '100'
      ),

      'firstname' => array(
        'type' => 'VARCHAR',
        'constraint' => '100'
      ),

      'lastname' => array(
        'type' => 'VARCHAR',
        'constraint' => '100'
      ),

      'password' => array(
        'type' => 'VARCHAR',
        'constraint' => '200'
      ),

      'profile_pic' => array(
        'type' => 'VARCHAR',
        'constraint' => '100'
      ),

      'gender' => array(
        'type' => 'VARCHAR',
        'constraint' => '100'
      ),

      'about' => array(
        'type' => 'VARCHAR',
        'constraint' => '500',
        'default' => 'Write something about yourself'
      ),


    ));
    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->create_table('users');
  }

  public function down()
  {
    $this->dbforge->drop_table('users');
  }
  
}
