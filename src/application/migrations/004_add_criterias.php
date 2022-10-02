<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_criterias extends CI_Migration
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
            'parameter_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
            ],
            'value' => [
                'type' => 'VARCHAR',
                'constraint' => 5,
            ],
            'description' => [
                'type' => 'VARCHAR',
                'constraint' => 191,
                'null' => TRUE,
            ],
            'min_value' => [
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => TRUE,
            ],
            'max_value' => [
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => TRUE,
            ],
        ]);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key('parameter_id', FALSE);
        $this->dbforge->create_table('criterias');
    }

    public function down()
    {
        $this->dbforge->drop_table('criterias');
    }
}
