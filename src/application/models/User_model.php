<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    protected const TABLE_NAME = 'users';

    public function __construct()
    {
        parent::__construct();
    }

    public function insert($data)
    {
        $this->db->insert(self::TABLE_NAME, $data);
        return $this->db->insert_id();
    }

    public function first_or_create($ip, $data)
    {
        $findItem = $this->db->get_where(self::TABLE_NAME, [
            'ip' => $ip
        ])->row();

        if ($findItem->id ?? false) {
            return $findItem->id;
        } else {
            return $this->insert($data);
        }
    }
}
