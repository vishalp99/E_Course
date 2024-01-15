<?php 
defined('BASEPATH')or exit("No direct sccript is allowed");

class HomeM extends CI_Model
{
	
	public function totcls($data)
	{
		return $this->db->where($data)->from("tblclass c1")->get()->result();

	}
	public function totus($data)
	{
			return $this->db->where($data)->from("tblinstituteuser c1")->get()->result();		
	}

	public function totstu($data)
	{
			//	return $this->db->where($data)->from("tblclassstudents")->get()->result();

			return $this->db->select("s2.*,s1.status,s1.addedby")->from("tblstudent s2")->join("tblclassstudents s1","s1.studentid=s2.studentid")->join("tblclass c1","c1.classid=s1.classid")->join("tblinstitute t1","t1.instituteid=c1.instituteid")->where($data)->group_by("s2.studentid")->get()->result();				
	}

	public function pndreq($data)
	{		
        // return $this->db->select("c1.classid,c1.title,cr1.status as sta,s1.*")->from("tblclassrequest cr1")->join("tblclass c1","c1.classid=cr1.classid")->join("tblstudent s1","s1.studentid=cr1.studentid")->where_in("cr1.classid",$data)->get()->result();

        return $this->db->select("c1.classid,c1.title,cr1.status as sta,s1.*")->from("tblclassrequest cr1")->join("tblclass c1","c1.classid=cr1.classid")->join("tblstudent s1","s1.studentid=cr1.studentid")->where($data)->get()->result();
	}
	public function getresid($data)
	{
	//	return $this->db->select("c1.resourceid")->from("tblresource c1")->where($data)->get()->result();
	
		return $this->db->select("r1.*,c1.classid,c1.title")->from("tblresource r1")->join("tblclass c1","c1.classid=r1.classid")->join("tblinstitute t","t.instituteid=c1.instituteid")->where($data)->get()->result();
	}
	public function getviews($data)
	{
		//return $this->db->from("tblresourceview")->where($data)->group_by("resourceid")->get()->result();
	
		return $this->db->select("v.datetime,s.studentid,s.username,s.profilepic,s.status as st,c1.title,c1.status,r.resourceid,r.resourcetitle")->from("tblresourceview v")->join("tblresource r","r.resourceid=v.resourceid")->join("tblclass c1","c1.classid=r.classid")->join("tblinstitute t","t.instituteid=c1.instituteid")->join("tblstudent s","s.studentid=v.studentid")->where($data)->get()->result();

	}
}
?>