<?php
class User_m extends CI_Model{
	/**
	 * function for show all data
	 */
	function gets(){
		return $this->db->get('users')->result();
	}
	/**
	 * function for show data by id
	 */ 
	function get($id){
		$this->db->where(array("id" => $id));
		return $this->db->get('users')->result();
	}
	/**
	 * $data param data array=>coloumn, value
	 */
	public function add($data){
		$this->db->insert("users",$data); 
	}
	function edit($id, $data){
		$this->db->where(array("id" => $id));
		$this->db->update("users", $data);
	} 
	function del($id){
		$this->db->delete('users', ["id"=>$id]);
	}
}