<?php  
defined('BASEPATH')or exit("no direct script is allowed");


class AccessreqM extends CI_Model
{
	public function updatereqstatus($data,$where)
	{
		$this->db->where($where)->update("tblclassrequest",$data);
	}
	public function givepermission($data)
	{
	
		$this->db->insert("tblclassstudents",$data);
	}
	public function insertintoresaccess($data)
	{
		$this->db->insert("tblresourceaccess",$data);
	}
	public function denypermission($data,$where)
	{
		$this->db->where($where)->update("tblclassrequest",$data);
	}
	public function blockstudent($data,$where)
	{
		$this->db->where($where)->update("tblclassstudents",$data);
	}
	public function unblockstudent($data,$where)
	{
		$this->db->where($where)->update("tblclassstudents",$data);
	}
	// public function allresbyclassid($data)
	// {
	// 	return $this->db->where($data)->get("tblresource")->result();
	// }
	// public function blockresourceforstudent($data)
	// {
	// 	$this->db->where($data)->delete("tblresourceaccess");
	// }
	public function allclsbyinsid($data)
	{
		return $this->db->where($data)->get("tblclass")->result();
	}
}
?>