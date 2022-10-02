<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_fiber_2_homes extends CI_Migration
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
            'location' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'location_status' => [
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => TRUE,
            ],
            'potential_customer' => [
                'type' => 'INT',
                'constraint' => 5,
                'null' => TRUE,
            ],
        ]);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key('parameter_id', FALSE);
        $this->dbforge->create_table('fiber_2_homes');
    }

    public function down()
    {
        $this->dbforge->drop_table('fiber_2_homes');
    }
}
