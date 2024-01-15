<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Institute_UserM extends CI_Model 
{
    public function selectAllInstituteUser()
    {
       return $this->db->get("tblinstituteuser")->result();
    }
    public function selectInsUserById($data)
    {
       return $this->db->where($data)->
                         from("tblinstituteuser t1")->
                         join("tblinstitute t2","t2.instituteid=t1.instituteid")->
                         get()->result();
    }
}
?>