<?php 
defined('BASEPATH')or exit("No direct script is allowed");


class AjexsearchM extends CI_Model
{
	public function fetch_data($query)
	{
		//$this->db->select("*")->from("tblstudent");
	//	if($query != '')
	//	{
	//		$this->db->like('username',$query);

	//		$this->db->or_like('emailid',$query);

//			$this->db->or_like('mobilenumber',$query);
//		}
		if($query != '')
		{
		return $this->db->select("*")->from("tblstudent")->like('username',$query)->or_like('emailid',$query)->or_like('mobilenumber',$query)->get()->result();
			}
	}
	public function fetch_class($data)
	{
		return $this->db->select("c1.classid")->where($data)->get("tblclass c1")->result()[0];
	}
	public function fetchstudentsfromclassid($data)
	{
		return $this->db->select("c1.studentid")->from("tblclassstudents c1")->where($data)->get()->result();
	}
}

?>