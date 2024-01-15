<?php 
defined('BASEPATH')or exit("no direct script is allowed");


class InsM extends CI_Model
{
	
	public function loadinsbyid($data)
	{
		return $this->db->from("tblinstitute")->where($data)->get()->result()[0];
	}
	public function totuserbyinsid($data)
	{
		return $this->db->from("tblinstituteuser")->where($data)->get()->result(); 
	}
	public function totclsbyinsid($data)
	{
		return $this->db->from("tblclass")->where($data)->get()->result();
	}

}
