<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_customers extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field([
            'id' => [
                'type' => 'INT',
                'constraint' => 25,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'customer_name' => [
                'type' => 'VARCHAR',
                'constraint' => 191,
            ],
            'location' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ],
        ]);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('customers');
    }

    public function down()
    {
        $this->dbforge->drop_table('customers');
    }
}
