<?php

/**
 * 
 */
class M_mahasiswa extends CI_Model
{
	
	public function tampil_data()
	{
		 return $this->db->get('tb_mhs');
	}

    public function input_data($data,$table)
    {
  $this->db->insert($table,$data);
	}
	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function detail_data($NPM=null)
	{
		$query = $this->db->get_where('tb_mhs', array('NPM' => $NPM))->row(); 
		return $query;
	}
}