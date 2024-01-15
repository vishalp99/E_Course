<?php 
defined('BASEPATH')or exit("no direct script is allowed");
class InstituteregM extends CI_Model
{
	public function selectstate()
	{
		return $this->db->get("tblstate")->result();
	}
	public function selectcitybystateid($data)
	{
		return $this->db->where($data)->get("tblcity")->result();
	}
	public function insertinstitute($data)
	{
      $this->db->insert("tblinstitute",$data);
      return $this->db->insert_id();
	}
	
	public function insertdefaultuser($data)
	{
      $this->db->insert("tblinstituteuser",$data);
  }
  public function fetch_data()
  {
  	return $this->db->get("tblinstitute")->result();
  }
public function fetch_sudata()
  {
  	return $this->db->get("tblinstituteuser")->result();
  }
}

?>