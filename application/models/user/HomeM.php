<?php 
defined('BASEPATH')or exit("no direct script is allowed");
  
  class HomeM extends CI_Model
  {
  	public function allclasses($data)
  	{
  		if(count($data)>0)
  		{
		return $this->db->select("*")->from("tblclass")->like('classcode',$data)->get()->result();		
  		}
  		// else{
  		// return $this->db->select("*")->from("tblclass")->get()->result();		
  		// }
  	}
    public function allinstitutes($data)
    {
        if(count($data)>0)
      {
    return $this->db->select("*")->from("tblinstitute")->like('institutename',$data)->or_like('email',$data)->get()->result();
      
      }
      else{
      return $this->db->select("*")->from("tblinstitute")->get()->result();   
   
     }
    }
  	public function myclassesbystudentid($data)
  	{
  		return $this->db->select("c1.*,s1.status as sta")->from("tblclass c1")->join("tblclassstudents s1","s1.classid=c1.classid")->join("tblstudent s2","s2.studentid=s1.studentid")->where($data)->get()->result();
  	}
  	
  } 
?>