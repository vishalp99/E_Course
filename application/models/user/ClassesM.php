<?php 
defined('BASEPATH')or exit("no direct script is allowed");


class ClassesM extends CI_Model
{
	public function loadclassprofile($data)
	{

		return $this->db->select("c1.*,it.institutename,it.googlemapurl,it.fblink,it.instalink,it.twitterlink,it.linkedinlink,it.youtubelink,it.website")->from("tblclass c1")->join("tblinstitute it","it.instituteid=c1.instituteid")->where($data)->get()->result();
	}
	public function instituteuserbyclassid($data)
	{
		return $this->db->select("i1.*")->from("tblinstituteuser i1")->join("tblclassuser c1","c1.instituteuserid=i1.instituteuserid")->join("tblclass c2","c2.classid=c1.classid")->where($data)->get()->result();
	}
	public function allstudentbyclassid($data)
	{
	//	return $this->db->from("tblclassstudents c1")->where($data)->get()->result();
	return $this->db->from("tblclassrequest c1")->where($data)->get()->result();

	}
	public function enrollclassbystudentid($data)
	{
		$this->db->insert("tblclassrequest",$data);
	}
	public function profileclassres($data)
	{
		return $this->db->select("r1.*,c1.classid")->from("tblresource r1")->join("tblclass c1","c1.classid=r1.classid")->where($data)->get()->result();
	}
	public function loadallresbyclassid($data)
	{
		return $this->db->select("r1.*,c1.classid")->from("tblresource r1")->join("tblclass c1","c1.classid=r1.classid")->join("tblresourceaccess a1","a1.resourceid=r1.resourceid")->join("tblstudent s1","s1.studentid=a1.studentid")->where($data)->get()->result();
	
	}
	public function loadsingleres($data)
	{
		return $this->db->where($data)->get("tblresource")->result()[0];
	}
	public function addresview($data)
	{
		$this->db->insert("tblresourceview",$data);
	}
	public function quetionsbyresid($data)
    {
        //return $this->db->select("q1.*,c1.*,s1.*,u1.username as uname,u1.profilepic as ppic")->where($data)->from("tblquestion q1")->join("tblclass c1","c1.classid=q1.classid")->join("tblstudent s1","s1.studentid=q1.studentid")->join("tblinstituteuser u1","u1.instituteuserid=q1.instituteuserid")->get()->result();

        return $this->db->select("q1.*,c1.classid,s1.username,s1.profilepic")->where($data)->from("tblquestion q1")->join("tblclass c1","c1.classid=q1.classid")->join("tblstudent s1","s1.studentid=q1.studentid")->get()->result();
    }
     public function answerbyresid($data)
    {
            return $this->db->where($data)->from("tblquestion q1")->join("tblclass c1","c1.classid=q1.classid")->join("tblinstituteuser u1","u1.instituteuserid=q1.instituteuserid")->get()->result();
        
    }
     public function loadmsg()
    {
        return $this->db->select("sq1.*,s1.username,s1.profilepic")->from("tblquestionstudentpost sq1")->join("tblquestion q1","q1.questionid=sq1.questionid")->join("tblstudent s1","s1.studentid=sq1.studentid")->get()->result();
    }
    public function addmsgbyquestionid($data)
    {
    	$this->db->insert("tblquestionstudentpost",$data);
    }
    public function addquestion($data)
    {
    	$this->db->insert("tblquestion",$data);
    }
}

?>