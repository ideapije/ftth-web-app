<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_Optical_Distribution_Cabinets extends CI_Migration
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
            'odc_name' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
            ],
            'supply' => [
                'type' => 'INT',
                'constraint' => 15,
                'unsigned' => TRUE,
                'null' => TRUE,
            ],
        ]);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('optical_distribution_cabinets');
    }

    public function down()
    {
        $this->dbforge->drop_table('optical_distribution_cabinets');
    }
}
