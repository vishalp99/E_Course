<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminM extends CI_Model
{
    public function selectAllInstutute()
    {
       return $this->db->from("tblinstitute t1")->
                         join("tblcity c1","c1.cityid=t1.cityid")->
                         get()->result();
    }
    public function selectAllInstututeStudent($data)
    {
    	return $this->db->where($data)->from("tblinstituteuser t1")->join("tblinstitute t2","t2.instituteid=t1.instituteid")->get()->result();
    }
}
?>
