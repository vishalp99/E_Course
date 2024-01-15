<?php 
defined('BASEPATH')or exit("no direct script is allowed");


class ManageprofileM extends CI_Model
{

	public function selectstudinfo($data)
	{
	//return $this->db->where($data)->get("tblstudent s")->result()[0];
		return $this->db->from("tblstudent s")->join("tblcity c","c.cityid=s.cityid")->where($data)->get()->result()[0];
	}
	public function updateprofile($newdata)
	{
 		$where=array("studentid"=>$_SESSION['stid']);
		$this->db->where($where)->update("tblstudent",$newdata);
	}
	public function ostudentp($data)
	{
		return $this->db->where($data)->get("tblstudent")->result()[0];
	}
	public function delprofileByallID($data)
	{
	 $this->db->delete("tblstudent",$data);
	 $this->db->delete("tblclassrequest",$data);
	 $this->db->delete("tblclassstudents",$data);
	 $this->db->delete("tblresourceview",$data);
	 $this->db->delete("tblresourceaccess",$data);

	}
}
?>