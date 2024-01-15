<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InsLoginM extends CI_Model
{
	public function selectLoginData($data)
	{
		return $this->db->select("u1.*,t1.status as st")->from("tblinstituteuser u1")->join("tblinstitute t1","t1.instituteid=u1.instituteid")->where($data)->get()->result();
	}

	public function insertUser($data)
	{
		return $this->db->insert("tblinstituteuser",$data);
	}

	public function selectAllInstituteName()
	{
		return $this->db->get("tblinstitute")->result();
	}
	public function loadalluser()
	{
		$where=array("instituteid"=>$_SESSION['suid']);
		return $this->db->where($where)->get("tblinstituteuser")->result();
	}
	public function chgpass($data,$where)
	{
		$this->db->where($where)->update("tblinstituteuser",$data);
	}
}
?>