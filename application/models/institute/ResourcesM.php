<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ResourcesM extends CI_Model 
{
     public function selectAllLecByclassId($data)    //$data
    {
    	return $this->db->select("r1.*,c1.classimage,c1.title,c1.description")->from("tblresource r1")->join("tblclass c1","r1.classid=c1.classid")->where($data)->get()->result();      //where($data) 
    }  
    public function stuinfobyclassid($data)
    {
        return $this->db->select("s1.*,s2.status,s2.classid")->from("tblstudent s1")->join("tblclassstudents s2","s2.studentid=s1.studentid")->join("tblclass c1","c1.classid=s2.classid")->where($data)->get()->result();
    }
    public function classuserbyclassid($data)
    {
        return $this->db->select("u1.*")->from("tblinstituteuser u1")->join("tblclassuser u2","u2.instituteuserid=u1.instituteuserid")->join("tblclass c1","c1.classid=u2.classid")->join("tblinstitute i1","i1.instituteid=u1.instituteid")->where($data)->get()->result();
    }
    public function insertResource($data)
    {
    	$this->db->insert("tblresource",$data);

        return $this->db->insert_id();
    }
    public function deleteResource($data)
    {
    	return $this->db->delete("tblresource",$data);
    }
    public function classesbyclassid($data)
    {
     //   return $this->db->where($data)->get("tblclass c1")->result()[0];
   
        return $this->db->select("c1.*,i1.institutename")->from("tblclass c1")->join("tblinstitute i1","i1.instituteid=c1.instituteid")->where($data)->get()->result()[0];
    }
    public function selectAllLecByresId($data)
    {
        return $this->db->where($data)->get("tblresource")->result()[0];
    }
    public function updateResourceinf($newdata,$where)
    {
            $this->db->where($where)->update("tblresource",$newdata);
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
        return $this->db->select("sq1.*,c1.classid,s1.username,s1.profilepic")->from("tblquestionstudentpost sq1")->join("tblquestion q1","q1.questionid=sq1.questionid")->join("tblstudent s1","s1.studentid=sq1.studentid")->join("tblclass c1","c1.classid=q1.classid")->get()->result();
    }
    public function insertanswer($data,$where)
    {
        $this->db->where($where)->update("tblquestion",$data);
    }
    public function studentrequestbyclassid($data)
    {
        return $this->db->select("cr1.status as sta,cr1.classid,s1.*")->where($data)->from("tblclassrequest cr1")->join("tblclass c1","c1.classid=cr1.classid")->join("tblstudent s1","s1.studentid=cr1.studentid")->get()->result();
    }
    public function studentbyclassid($data)
    {
        return $this->db->select("c1.*,s1.*")->where($data)->from("tblclassstudents c1")->join("tblclass c2","c2.classid=c1.classid")->join("tblstudent s1","s1.studentid=c1.studentid")->get()->result();
    }
    public function blockreply($data,$where)
    {
        $this->db->where($where)->update("tblquestionstudentpost",$data);
    }
}
?>