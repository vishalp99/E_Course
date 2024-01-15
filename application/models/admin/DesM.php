<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DesM extends CI_Model
{
   public function selectAllinstitute()
   {
   	 return $this->db->from("tblinstitute t1")->
                         join("tblcity c1","c1.cityid=t1.cityid")->  
                         get()->result();
   }
   public function selectAllinstituteUser()
   {
   	 return $this->db->from("tblinstituteuser t1")->
                         join("tblinstitute t2","t2.instituteid=t1.instituteid")->
                         get()->result();
   }
   public function selectAllstudent()
   {
   	 return $this->db->from("tblstudent t1")->
                         join("tblcity c1","c1.cityid=t1.cityid")->         
                         get()->result();
   }
   public function selectAllclass()
   {
   	 return $this->db->from("tblclass t1")->
                         join("tblinstitute t2","t2.instituteid=t1.instituteid")->
                         get()->result();
   }   
   public function selectAllcity()
   {
   	 return $this->db->from("tblcity c1")->
                         join("tblstate s1","c1.stateid=s1.stateid")->  
                         get()->result();
   }
   public function selectAllstate()
   {
   	 return $this->db->get("tblstate")->result();
   }
   public function updateInsStatus($where,$data)
   {
       return $this->db->where($where)->update("tblinstitute",$data);
   }
   public function updateStuStatus($where,$data)
   {
       return $this->db->where($where)->update("tblstudent",$data);
   } 
   public function SearchDataIns($qry)
   {
      return $this->db->from("tblinstitute")->
                        like("institutename",$qry)->
                        or_like("email",$qry)->
                        or_like("instituteid",$qry)->
                        or_like("contactnumber",$qry)->
                        get()->result()[0];
   } 
   public function SearchDataStu($qry)
   {
      return $this->db->from("tblstudent")->
                        like("username",$qry)->
                        or_like("emailid",$qry)->
                        or_like("studentid",$qry)->
                        or_like("mobilenumber",$qry)->
                        get()->result()[0];  
   }
   public function updateClassStatus($where,$data)
   {
      return $this->db->where($where)->update("tblclass",$data);
   }
   public function allClsByInsid($data)
   {
      return $this->db->where($data)->get("tblclass")->result();
   }  
   public function updateClsStudent($where,$data)
   {
      return $this->db->where($where)->update("tblclassstudents",$data);
   }
}

?>

