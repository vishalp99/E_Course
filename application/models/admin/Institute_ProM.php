<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Institute_ProM extends CI_Model
{
    public function selectInstitute($data)
    {
    	return $this->db->where($data)->
                        from("tblinstitute t1")->
    	                  join("tblcity c1","c1.cityid=t1.cityid")->
    	                  join("tblstate s1","s1.stateid=c1.stateid")->
    	                  get()->result();
    }
    public function selectInstituteuser($data)
    {
      	return $this->db->where($data)->
      	                  from("tblinstitute t1")->
                          join("tblinstituteuser t2","t2.instituteid=t1.instituteid")->
                          get()->result();  
    }
    public function selectClass($data)
    {
    	return $this->db->where($data)->
    	                  from("tblclass c1")->
    	                  join("tblinstitute t1","t1.instituteid=c1.instituteid")->
    	                  get()->result();
    }
    public function selectStudent($data)
    {
    	return $this->db->where($data)->
    	                  from("tblstudent t1")->
    	                  join("tblclassstudents c1","c1.studentid=t1.studentid")->
                          join("tblclass c2","c2.classid=c1.classid")->
                          join("tblinstitute t3","t3.instituteid=c2.instituteid")->
                          group_by("t1.studentid")->
                          get()->result();    	                   
    }
    public function selectStudentById1($data)
    {
    	return $this->db->where($data)->
    	                  from("tblstudent s1")->
    	                  join("tblclassstudents t1","t1.studentid=s1.studentid")->
    	                  join("tblcity c2","c2.cityid=s1.cityid")->
    	                  join("tblclass c1","c1.classid=t1.classid")->
    	                  get()->result();
    }
    public function selectClassById($data)
    {
        return $this->db->where($data)->
                          from("tblclass c1")->
                          join("tblinstitute t1","t1.instituteid=c1.instituteid")->
                          get()->result();
    }
    public function selectInstituteUserById($data)
    {
    	return $this->db->where($data)->
    	                  from("tblinstituteuser t1")->
    	                  join("tblinstitute t2","t2.instituteid=t1.instituteid")->
    	                  get()->result(); 
    }
}
?>