<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_Users extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'ip' => [
                'type' => 'VARCHAR',
                'constraint' => 55,
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => TRUE,
            ],
            'created_at datetime default current_timestamp'
        ]);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('users');
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}
