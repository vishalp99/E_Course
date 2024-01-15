<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LoginM extends CI_Model 
{
    public function selectLoginAdmin($data)
    {
        return $this->db->where($data)->get("tbladmin")->result();
    }	
    public function updateAdminPass($data,$where)
    {
    	return $this->db->where($where)->update("tbladmin",$data);
    }
}
?>