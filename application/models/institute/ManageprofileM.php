<?php  
defined('BASEPATH')or exit("no direct script is allowed");

class ManageprofileM extends CI_Model
{
	public function selectuserinfo($data)
	{
	return $this->db->where($data)->get("tblinstituteuser u")->result()[0];
	}
	public function updateprofile($data)
	{
	
		$where=array("instituteuserid"=>$_SESSION['uid']);
		$this->db->where($where)->update("tblinstituteuser",$data);
	}
	public function selectinsinfo($data)
	{
	//	return $this->db->where($data)->get("tblinstitute")->result()[0];	
	
		return $this->db->from("tblinstitute t")->join("tblcity c","c.cityid=t.cityid")->where($data)->get()->result()[0];
	}
	public function updateinsprofile($data)
	{
		$where=array("instituteid"=>$_SESSION['suid']);
			$this->db->where($where)->update("tblinstitute",$data);	
	}
	public function classbyuid($data)
	{
		
		return $this->db->select("c.*")->from("tblclass c")->join("tblclassuser au","au.classid=c.classid")->join("tblinstituteuser u","u.instituteuserid=au.instituteuserid")->where($data)->get()->result();
	}
	public function selectstudentinfobystdid($data)
	{
		return $this->db->select("s2.*,c1.title")->from("tblclass c1")->join("tblclassstudents s1","s1.classid=c1.classid")->join("tblstudent s2","s2.studentid=s1.studentid")->where($data)->get()->result();
	}
	public function selectinsbyinsid($data)
	{
		return $this->db->where($data)->from("tblinstitute t1")->join("tblcity c1","c1.cityid=t1.cityid")->get()->result()[0];
	}
	public function buser($data,$where)
	{
		$this->db->where($where)->update("tblinstituteuser",$data);
	}

	public function ubuser($data,$where)
	{
		$this->db->where($where)->update("tblinstituteuser",$data);
	}
}

?>