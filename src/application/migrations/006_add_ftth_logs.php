<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_ftth_logs extends CI_Migration
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
            'ftth_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
            ],
            'odc_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
            ],
            'customer_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
            ],
            'parameter_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
            ],
            'value' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => TRUE,
            ],
        ]);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key('ftth_id', FALSE);
        $this->dbforge->add_key('odc_id', FALSE);
        $this->dbforge->add_key('customer_id', FALSE);
        $this->dbforge->add_key('parameter_id', FALSE);
        $this->dbforge->create_table('ftth_logs');
    }

    public function down()
    {
        $this->dbforge->drop_table('ftth_logs');
    }
}
