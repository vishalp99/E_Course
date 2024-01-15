<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminProM extends CI_Model 
{
    public function selectInsInsU()
    {
        return $this->db->get("tblinstituteuser")->result();
    }
    public function selectIns()
    {
        return $this->db->from("tblinstitute t1")->join("tblcity c1","c1.cityid=t1.cityid")->get()->result();
    }
    public function selectStudent()
    {
        return $this->db->get("tblstudent")->result();
    }
    public function selectAdminById($data)
    {
        return $this->db->where($data)->get("tbladmin")->result();
    }
    public function selectAdmininfo($data)
    {
        return $this->db->where($data)->get("tbladmin")->result();
    }
    public function updateAdminPro($data,$where)
    {        
        return $this->db->where($where)->update("tbladmin",$data);    
    }
}
?>
