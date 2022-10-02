<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_parameters extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'parameter' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'category' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'NULL' => TRUE
            ],
        ]);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('parameters');
    }

    public function down()
    {
        $this->dbforge->drop_table('parameters');
    }
}
