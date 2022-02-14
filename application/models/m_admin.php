<?php 
/**
 * 
 */
class m_admin extends CI_Model
{
//================================================================================
	public function __construct()
	{
		$this->load->database();
	}
//================================================================================	
	public function get_data(){
		$query = $this->db->get('data');
		return $query->ressult_array();
	}
//================================================================================
	public function cek_login($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get('data');
	}
//================================================================================
	public function cek_login_dokter($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get('dokter');
	}
//================================================================================
	public function input_data($data, $table){
		$this->db->insert($table, $data);
	}
//================================================================================
	public function input_data1($dataa1, $table){
		$this->db->insert($table, $dataa1);
	}
//================================================================================
	public function input_data2($dataa2, $table){
		$this->db->insert($table, $dataa2);
	}
//================================================================================
	public function tampil_data(){
	return $this->db->get('datapasien');
	}
//================================================================================
	public function tampil_data1(){
	return $this->db->get('inputkmr');
	}
//================================================================================
	public function tampil_datawhere($id_pas){
		$this->db->where('id_pas', $id_pas);
		return $this->db->get('datapasien');
	}
//================================================================================
	public function editpasien($id_pas,$data){
		$this->db->where('id_pas',$id_pas);
		$this->db->update('datapasien',$data);
	}
//================================================================================
	public function tampil_pasien(){
		return $this->db->get('datapasien');
	}
//================================================================================
	public function cariPasien(){
		$cari = $this->input->post('cari', TRUE);
		$data = $this->db->query("SELECT * from datapasien where nama like '%$cari%' ");
		return $data->result();
	}
//================================================================================
	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
//================================================================================
	public function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}
//================================================================================
	

	// public function update_data($where,$data,$table)
	// {
	// 	# code...
	// 	$this->db->where('id_pas',$where);
	// 	$this->db->update('datapasien',$data);
	// }
}
 ?>