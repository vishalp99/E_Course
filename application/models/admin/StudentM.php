<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentM extends CI_Model
{
    public function selectAllStudent()
    {
       return $this->db->get("tblstudent")->result();
    }
    public function selectStuById($data)
    {
       return $this->db->where($data)->
                         from("tblstudent t1")->
                         join("tblcity c1","c1.cityid=t1.cityid")->
                         get()->result();  
    }
}
?>
