<?php 
defined('BASEPATH')or exit("no direct script is allowed");

class CrtclassM extends CI_Model
{
	public function crtclass($data)
	{
		$this->db->insert("tblclass",$data);
		return $this->db->insert_id();
	}
	public function insertalloweusers($data)
	{
		$this->db->insert("tblclassuser",$data);
	}
	public function selectuserbyinsid()
	{
		$where=array("instituteid"=>$_SESSION['suid']);
		return $this->db->where($where)->get("tblinstituteuser")->result();
	}
	public function allclassesbyinsid($data)
	{
		return $this->db->where($data)->get("tblclass")->result();	
	}
	public function classesbyuserid()
	{
		$data=array("u.instituteuserid"=>$_SESSION['uid']);
		
		return $this->db->select("c.*,u.status as sta")->from("tblclass c")->join("tblclassuser au","au.classid=c.classid")->join("tblinstituteuser u","u.instituteuserid=au.instituteuserid")->where($data)->get()->result();
	}
	public function usersbyclassid($data)
	{
	return $this->db->where($data)->get("tblclassuser")->result();		
	}
	public function classesbyclassid($data)
	{
		return $this->db->where($data)->get("tblclass")->result()[0];
	}
	public function updateclass($newdata,$where)
	{
		$this->db->where($where)->update("tblclass",$newdata);
	}
	public function deleteuserbyclassid($where)
	{
		$this->db->where($where)->delete("tblclassuser");
	}
	public function deleteclass($data)
	{
		$this->db->where($data)->delete("tblclass");
	}
}
?>