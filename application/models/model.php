	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {
	
	//================================================================================
	public function __construct()
	{
		$this->load->database();
	}
	//================================================================================	
	
	public function inputdata($data,$table)
	{
		$this->db->insert($table,$data);
	}

	public function selectdata($norkm){
		$this->db->join('datapasien', 'datapasien.id_pas=rekam.id_pas');
		$this->db->where('norkm',$norkm);		
		return $this->db->get('rekam');
	}	

	public function Getpasien()
	{
		$this->db->from('datapasien');
		return $this->db->get()->result();
	}

	public function getpasienterbarusepuluh()
	{
		$this->db->from('datapasien');
		$this->db->order_by('id_pas', 'desc');
		$this->db->limit(10);
		return $this->db->get()->result();
	}

	public function Getdokter()
	{
		$this->db->from('dokter');
		return $this->db->get()->result();
	}

	public function inputdata1($data1,$table)
	{
		$this->db->insert($table,$data1);
	}

	public function inputdataper($data1,$table)
	{
		$this->db->insert($table,$data1);
	}

	public function inputnorkm($data,$table,$id_rekam)
	{
		$this->db->where('id_rekam', $id_rekam);
		$this->db->update($table,$data);
	}

	public function inputdata2($data1,$table)
	{
		$this->db->insert($table,$data1);
	}

	public function tampil_data(){
		return $this->db->get('dokter');
	}

	public function tampil_data_doks($id_dok){
		$this->db->select("rekam.*, pempol.*");
		$this->db->where('id_dok',$id_dok);
		$this->db->where('pempol.tglkun', date('Y-m-d'));
		$this->db->where('rekam.id_rekam IS NULL');
		$this->db->join('rekam', 'pempol.id1=rekam.id1', 'left');
		return $this->db->get('pempol');
	}

	public function tampil_pempol($id){
		 $dataa1 = $this->db->query("SELECT * from pempol JOIN datapasien using(id_pas) where id_dok='$id'");

		return $dataa1->result();
	}

	public function hapus_data($where,$table){
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

	public function input_databaru($data,$table){
		$this->db->insert($table,$data);
	}

	public function get_no_antrian($id_dok){
		$q = $this->db->query("SELECT RIGHT(noantrian,4) AS kd_max FROM pempol WHERE DATE(tglkun)=CURDATE() AND id_dok='$id_dok'");
        $kd = "";
        if($q->num_rows()>0){
        	
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }else{
            $kd = "0001";
        }
        return $kd;
}

	//================================================================================
		public function cek_login($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get('admin');
	}

	//================================================================================
		public function cek_login_dokter($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get('dokter');
	}
	//================================================================================
		public function input_data2($dataa1, $table){
		$this->db->insert($table, $dataa1);
	}
	//================================================================================
		public function tampil_data1(){
		return $this->db->get('inputkmr');
	}
	//================================================================================
		public function input_data3($dataa1, $table){
		$this->db->insert($table,$dataa1);

	}
	//================================================================================
		public function tampil_data2(){
		// $dataa1 = $this->db->query("SELECT * from rekam JOIN datapasien USING(id_pas) JOIN pempol USING(id1)");
		return $this->db->query('call prekam()')->result();
		
		}
	//================================================================================
		public function hapus_data1($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	//================================================================================
		public function editpasien($id_pas,$data){
		$this->db->where('id_pas',$id_pas);
		$this->db->update('datapasien',$data);
	}
		public function editkamar($id_kmr,$data1){
		$this->db->where('id_kmr',$id_kmr);
		$this->db->update('inputkmr',$data1);
	}
	//================================================================================
		public function edit_data1($where,$table){
		return $this->db->get_where($table,$where);
	}
	//================================================================================
		public function cariPasien(){
		$cari = $this->input->post('cari', TRUE);
		$data = $this->db->query("SELECT * from rekam JOIN datapasien USING(id_pas) JOIN pempol USING(id1) WHERE norkm like '%$cari%' ");
		return $data->result();
	}
	//================================================================================
		public function input_dokter($data,$table){
		$this->db->insert($table,$data);
	}
	//================================================================================	
		public function input_kelas($data,$table){
		$this->db->insert($table,$data);
	}	
	function get_dokter($id){
        $hasil=$this->db->query("SELECT * FROM dokter WHERE pilpol='$id'");
        return $hasil->result();
    }

    function get_pasbydok($id){
        $hasil=$this->db->query("SELECT * FROM pempol JOIN datapasien using(id_pas) WHERE id_dok='$id'");
        return $hasil->result();
    }

    public function getid1($id_pas)
    {
    	# code...
    	$hasil=$this->db->query("SELECT * FROM pempol WHERE id_pas='$id_pas' ORDER BY id1 DESC");
        return $hasil->result();
    }

  public function modfun()
  {
  	return $this->db->query("SELECT frekam() as f")->result();
  }

  public function tampilpasiennorekam()
  {
  	$this->db->join('datapasien', 'datapasien.id_pas=rekam.id_pas');
  	$this->db->join('pempol', 'pempol.id1=rekam.id1');
  	$this->db->join('dokter', 'pempol.id_dok=dokter.id_dok');
  	return $this->db->get('rekam');
  }

  public function tampilpasiennorekam1($norkm)
  {
  	$this->db->join('datapasien', 'datapasien.id_pas=rekam.id_pas');
  	$this->db->join('pempol', 'pempol.id1=rekam.id1');
  	$this->db->join('dokter', 'pempol.id_dok=dokter.id_dok');
  	$this->db->where('norkm', $norkm);
  	return $this->db->get('rekam');
  }

}


/* End of file model.php */
/* Location: ./application/models/model.php */
?>