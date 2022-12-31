<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_Transports extends CI_Migration
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
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
            ],
            'supply' => [
                'type' => 'TEXT',
            ],
            'demand' => [
                'type' => 'TEXT',
            ],
            'costs' => [
                'type' => 'TEXT',
            ],
            'results_least_cost' => [
                'type' => 'TEXT',
                'null' => TRUE,
            ],
            'results_modi' => [
                'type' => 'TEXT',
                'null' => TRUE,
            ],
            'least_cost' => [
                'type' => 'VARCHAR',
                'constraint' => 55,
                'null' => TRUE,
            ],
            'modi' => [
                'type' => 'VARCHAR',
                'constraint' => 55,
                'null' => TRUE,
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => TRUE
            ],
            'created_at datetime default current_timestamp'
        ]);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key('user_id', FALSE);
        $this->dbforge->create_table('transports');
    }

    public function down()
    {
        $this->dbforge->drop_table('transports');
    }
}
