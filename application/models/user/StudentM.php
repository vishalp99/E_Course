<?php 
defined('BASEPATH')or exit("no direct script is allowed");
  
  class StudentM extends CI_Model
  {
  	public function selectlogindata($data)
  	{
  		return $this->db->where($data)->get("tblstudent")->result();
  	}
  	public function selectcitybystateid($data)
  	{
  		return $this->db->where($data)->get("tblcity")->result();
  	}
  	public function selectallstate()
  	{
  		return $this->db->get("tblstate")->result();
  	}
  	public function insertstudent($data)
  	{
  		$this->db->insert("tblstudent",$data);
  	}
    public function fetch_data()
    {
      return $this->db->get("tblstudent")->result();
    }
    public function chgpass($data,$where)
  {
    $this->db->where($where)->update("tblstudent",$data);
  }
  } 
?>