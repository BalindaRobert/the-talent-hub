<?php
use LDAP\Result;
defined('BASEPATH') OR exit('No direct script access allowed');
class profile extends CI_Model{
public function insert_profile($yow){
   return $this->db->insert('profilee',$yow);
}
public function fetch(){
   $query=$this->db->get('profilee');
   return $query->result();
}
public function editt($id){
  $query= $this->db->get_where('profilee',['id'=>$id]);
  return $query->row();
}
}
?>