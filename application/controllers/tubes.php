<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class tubes extends CI_Controller {

// ======================================================================================

	public function __construct()
	 {
	 	parent::__construct();
	 	$this->load->model('model');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		// Pembantu Foreach get database
		$this->load->library('table','session');

	 }

// ======================================================================================

	public function index($value='awal')
	{
		$this->load->view('pages/'.$value);
	}

	public function homdok()
	{
		$this->load->view('doktor/home');
	}

	public function periksa($id_pas)
	{
		$data['pasien'] = $this->db->where('id_pas', $id_pas)->get('datapasien')->row();
		$data['id_pas'] = $id_pas;
		$this->load->view('doktor/periksa', $data);
	}
	
	public function list()
	{
		$this->load->view('doktor/list');
	}	

	public function logdok()
	{
		$this->load->view('doktor/logdok');
	}
// ======================================================================================

	public function user()
	{
		$this->load->view('pages/home');
	}

// ======================================================================================

	public function pilpol()
	{
		$data['data_pasien'] = $this->model->getpasienterbarusepuluh();
		$data['data_dokter'] = $this->model->Getdokter();
		$this->load->view('pages/poli', $data);
	}

	public function pilpol2()
	{
		$data['data_pasien'] = $this->model->getpasienterbarusepuluh();
		$data['data_dokter'] = $this->model->Getdokter();
		$this->load->view('pages/poli2', $data);
	}

// ======================================================================================

	public function pilpoladmin()
	{
		$data['data_pasien'] = $this->model->getpasienterbarusepuluh();
		$data['data_dokter'] = $this->model->Getdokter();
		$this->load->view('admin/poli', $data);
	}	

// ======================================================================================

	public function cek1()
	{
	$id2 = $this->input->post('id2');
	$norkm = $this->input->post('norkm');
	$ceks = $this->model->selectdata($norkm);
		if($ceks->num_rows() > 0){

			$data_session = $ceks->result_array()[0];
 
			$this->session->set_userdata($data_session);
 
			redirect('tubes/pilpol');

			}else{
			echo "Data Tidak Ditemukan";
		}
	}

// ======================================================================================

	public function cek6()
	{
	$id2 = $this->input->post('id2');
	$norkm = $this->input->post('norkm');
	$ceks = $this->model->selectdata($norkm)->num_rows();
		if($ceks > 0){

			$data_session = array(
				'norkm' => $norkm

				);
 
			$this->session->set_userdata($data_session);
 
			redirect('tubes/pilpoladmin');

			}else{
			echo "Data Tidak Ditemukan";
		}
	}
	// ======================================================================================

	public function cek10()
	{
	$id2 = $this->input->post('id2');
	$norkm = $this->input->post('norkm');
	$ceks = $this->model->selectdata($norkm)->num_rows();
		if($ceks > 0){

			$data_session = array(
				'norkm' => $norkm

				);
 
			$this->session->set_userdata($data_session);
 
			redirect('tubes/printresep1/'.$norkm);

			}else{
			echo "Data Tidak Ditemukan";
		}
	}
	// ======================================================================================

	public function cek11()
	{
	$id2 = $this->input->post('id2');
	$norkm = $this->input->post('norkm');
	$ceks = $this->model->selectdata($norkm)->num_rows();
		if($ceks > 0){

			$data_session = array(
				'norkm' => $norkm

				);
 
			$this->session->set_userdata($data_session);
 
			redirect('tubes/ceknors/'.$norkm);

			}else{
			echo "Data Tidak Ditemukan";
		}
	}

// ======================================================================================

	public function cek7($id_rekam)
	{
	$norkm = $this->input->post('norkm');
	$data = array(
	 			"norkm" => $norkm
	 		);
	$cekper=$this->model->inputnorkm($data,'rekam',$id_rekam);
	redirect('tubes/datapasiennorekam','refresh');
	}
// ======================================================================================

	public function cekperiksa()
	{
	 	$id_pas = $this->input->post('id_pas');
	 	$cekrkm = $this->db->where('id_pas', $id_pas)->get('rekam');
	 	$id1 = $this->model->getid1($id_pas);
	 	$jenis_rawat = $this->input->post('jenis_rawat');
	 	$tglkun = $this->input->post('tglkun');
	 	$diagnosa = $this->input->post('diagnosa');
	 	$resep = $this->input->post('resep');

			$data1 = array(
			 			"id_pas" => $id_pas,
			 			"id1" => $id1[0]->id1,
			 			"jenis_rawat" => $jenis_rawat,
			 			"tglkun" => $tglkun,
			 			"diagnosa" => $diagnosa,
			 			"resep" => $resep
			 			
			 		);
			if ($cekrkm->num_rows() > 0) {
				$data1["norkm"] = $cekrkm->row_array(0)['norkm'];
			}
			$cekper=$this->model->inputdataper($data1,'rekam');
	 	
	redirect('tubes/getpasbydok','refresh');
	}
// ======================================================================================

	public function cek5()
	 {	
	 		$id_pas = $this->input->post('id_pas');
	 		$id_dok = $this->input->post('id_dok');
	 		$pilpol = $this->input->post('pilpol');
	 		$tglkun = $this->input->post('tglkun');
	 		$pembayaran = $this->input->post('pembayaran');
	 		$an = $this->model->get_no_antrian($id_dok);
	 		
	 	$data1 = array(
	 			"id_pas" => $id_pas,
	 			"id_dok" => $id_dok,
	 			"pilpol" => $pilpol,
	 			"tglkun" => $tglkun,
	 			"pembayaran" => $pembayaran,
	 			"noantrian" => $an
	 		);
	 	$cex=$this->model->inputdata1($data1,'pempol');
		
		$noantrian = array  
		(
		'noantrian' =>$an
		); 		
		
	 	$this->session->set_userdata($noantrian);
	 	$this->session->set_userdata($data1);

	 	  $this->form_validation->set_rules('tglkun','tglkun','trim|required|date', array('date'=>$tglkun<1));

		  if($this->form_validation->run() == FALSE){
		  	$this->load->view('pages/baru');
		  }else{
			redirect('tubes/antriadmin');
		}
	 }		

// ======================================================================================

	public function cek2()
	 {	
	 		$id_pas = $this->input->post('id_pas');
	 		$id_dok = $this->input->post('id_dok');
	 		$pilpol = $this->input->post('pilpol');
	 		$tglkun = $this->input->post('tglkun');
	 		$pembayaran = $this->input->post('pembayaran');
	 		$an = $this->model->get_no_antrian($id_dok);
	 		
	 	$data1 = array(
	 			"id_pas" => $id_pas,
	 			"id_dok" => $id_dok,
	 			"pilpol" => $pilpol,
	 			"tglkun" => $tglkun,
	 			"pembayaran" => $pembayaran,
	 			"noantrian" => $an
	 		);
	 	$cex=$this->model->inputdata1($data1,'pempol');
		
		$noantrian = array  
		(
		'noantrian' =>$an
		); 		
		
	 	$this->session->set_userdata($noantrian);
	 	$this->session->set_userdata($data1);

	 	  $this->form_validation->set_rules('tglkun','tglkun','trim|required|date', array('date'=>$tglkun<1));

		  if($this->form_validation->run() == FALSE){
		  	$this->load->view('pages/baru');
		  }else{
			redirect('tubes/antri');
		}
	 }

//=========================================================================================

	public function antri()
	 {
	 	$this->load->view('pages/antrian');
	 }

//=========================================================================================

	public function antriadmin()
	 {
	 	$this->load->view('admin/antrian');
	 }

//=========================================================================================

	public function cetaks()
	 {
	 	$this->load->view('admin/ceknorekpasien');
	 }

//=========================================================================================

	public function cetakrujukan($norkm)
	 {
	 	$data['rekams'] = $this->model->tampilpasiennorekam1($norkm)->result();
	 	$this->load->view('admin/cetakrujukan',$data);
	 }


//=========================================================================================

	public function kontakadmin()
	 {
	 	$this->load->view('admin/kontak');
	 }

//=========================================================================================

	public function inputnorekampasien($id_rekam)
	 {	
	 	$data['id_rekam'] = $id_rekam;
	 	$this->load->view('admin/inputnorekampasien',$data);
	 }

//=========================================================================================

	public function datapasiennorekam()
	 {
	 	$data['rekam'] = $this->model->tampilpasiennorekam()->result();
	 	$this->load->view('admin/datapasiennorekam', $data);
	 }

//=========================================================================================

	public function printresep1($norkm)
	 {

	 	$data['rekams'] = $this->model->tampilpasiennorekam1($norkm)->result();
	 	$this->load->view('admin/printresep', $data);
	 }

//=========================================================================================

	public function ceknors($norkm)
	 {

	 	$data['rekams'] = $this->model->tampilpasiennorekam1($norkm)->result();
	 	$this->load->view('admin/ceknorekam', $data);
	 }

// ======================================================================================

	public function tampildokteruser(){
		$datdok['user'] = $this->model->tampil_data()->result();
		$this->load->view('pages/viewjadwaldokter',$datdok);
	}

// ======================================================================================

	public function tampildokteradmin(){
		$datdok['user'] = $this->model->tampil_data()->result();
		$this->load->view('admin/viewjadwaldokter',$datdok);
	}	

// ======================================================================================

	public function tampildoks(){
		$datdok['user'] = $this->model->tampil_pempol($this->session->userdata('id_dok'));
		$this->load->view('doktor/home',$datdok);
	}

// ======================================================================================

	public function tambah()
	{
		$this->load->view('pages/tambah');
	}

	
//================================================================================
		public function logadmin(){
		$this->load->view('admin/loginadmin');
		}

//================================================================================
		public function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = $this->model->cek_login($username,$password)->num_rows();
		// $data = $this->model->cek_login($username,$password)->row();

		if ($cek > 0) {
			$this->session->set_userdata('mamam', $username);
			redirect('tubes/utama');
		}
	}

		// else{
		// 	echo "data tidak ada";
		// }
	//================================================================================
		public function aksi_login_dokter(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = $this->model->cek_login_dokter($username,$password);
		// $data = $this->model->cek_login($username,$password)->row();

		if ($cek->num_rows() > 0) {
			$data=$cek->result();
			$array = array(
				'id_dok' => $data[0]->id_dok,
				'username'=>$data[0]->username,
				'namadokter'=>$data[0]->namadokter,
				'pilpol'=>$data[0]->pilpol,
				'jadwal'=>$data[0]->jadwal
			);
			
			$this->session->set_userdata($array);
			redirect('tubes/tampildoks');
		}
	}

		// else{
		// 	echo "data tidak ada";
		// }
//================================================================================
		public function utama(){
		$this->load->view('admin/menuutama');
		}
//================================================================================
		public function cetakresep(){
		$this->load->view('admin/cetakresep');
		}		
//================================================================================
		public function loginadm(){
		$this->load->view('admin/loginadm');
		}
//================================================================================
		public function inputnorekam(){
		$this->load->view('admin/inputnorekam');
		}
//================================================================================
		public function viewjadwaldokter(){
		$this->load->view('admin/viewjadwaldokter');
		}
//================================================================================
		public function baruadmin(){
		$this->load->view('admin/baru');
		}
//================================================================================
		public function lamaadmin(){
		$this->load->view('admin/lama');
		}
//================================================================================
		public function poliadmin(){
		$this->load->view('admin/poli');
		}
//================================================================================
		public function antrianadmin(){
		$this->load->view('admin/antrian');
		}																
//================================================================================
		public function inputdokter(){
		$this->load->view('admin/inputdokter');
		}				
//================================================================================
		public function v_upload(){
		$this->load->view('admin/beritaacara');
		}		
//================================================================================
		public function v_upload_sukses(){
		$this->load->view('admin/uploadberitaacara');
		}		
//================================================================================
		
		public function cek4(){
		$nama = $this->input->post('nama');
		$noidentitas = $this->input->post('noidentitas');
		$jenkel = $this->input->post('jenkel');
		$tgllahir = $this->input->post('tgllahir');
		$alamat = $this->input->post('alamat');
		$nohp = $this->input->post('nohp');
		

		if ($this->input->post('id')) {
			$this->input->post('id');

			$dataa1 = array(
					'nama'=>$nama,
					'noidentitas'=>$noidentitas,
					'jenkel'=>$jenkel,
					'tgllahir'=>$tgllahir,
					'alamat'=>$alamat,
					'nohp'=>$nohp
					
				);
			$this->model->editpas($id,$dataa1);
			redirect('tubes/utama','refresh');
		}
		else{
			$dataa1 = array(
					'nama'=>$nama,
					'noidentitas'=>$noidentitas,
					'jenkel'=>$jenkel,
					'tgllahir'=>$tgllahir,
					'alamat'=>$alamat,
					'nohp'=>$nohp
					
				);
		$this->form_validation->set_rules('nama','nama','required|min_length[2]|max_length[20]');
		$this->form_validation->set_rules('noidentitas','noidentitas','required|max_length[20]');
		$this->form_validation->set_rules('tgllahir','tgllahir','required|max_length[12]');
		$this->form_validation->set_rules('nohp','nohp','trim|required|numeric', array('numeric'=>'HARUS ANGKA SEMUA'));

		 if($this->form_validation->run() == FALSE){
		 	$this->load->view('admin/baru');
		 }else{
			$this->model->input_data3($dataa1,'datapasien');
			redirect('tubes/pilpoladmin');	
		}
	}
		
}		
//================================================================================
		
		public function cek3(){
		$nama = $this->input->post('nama');
		$noidentitas = $this->input->post('noidentitas');
		$jenkel = $this->input->post('jenkel');
		$tgllahir = $this->input->post('tgllahir');
		$umur = $this->input->post('umur');
		$alamat = $this->input->post('alamat');
		$nohp = $this->input->post('nohp');
		

		if ($this->input->post('id')) {
			$this->input->post('id');

			$dataa1 = array(
					'nama'=>$nama,
					'noidentitas'=>$noidentitas,
					'jenkel'=>$jenkel,
					'tgllahir'=>$tgllahir,
					'umur'=>$umur,
					'alamat'=>$alamat,
					'nohp'=>$nohp
					
				);
			$this->model->editpas($id,$dataa1);
			redirect('tubes/utama','refresh');
		}
		else{
			$dataa1 = array(
					'nama'=>$nama,
					'noidentitas'=>$noidentitas,
					'jenkel'=>$jenkel,
					'tgllahir'=>$tgllahir,
					'umur'=>$umur,
					'alamat'=>$alamat,
					'nohp'=>$nohp
					
				);
		$this->form_validation->set_rules('nama','nama','required|min_length[2]|max_length[25]');
		$this->form_validation->set_rules('noidentitas','noidentitas','required|max_length[20]');
		$this->form_validation->set_rules('tgllahir','tgllahir','required|max_length[12]');
		$this->form_validation->set_rules('nohp','nohp','trim|required|numeric', array('numeric'=>'HARUS ANGKA SEMUA'));

		 if($this->form_validation->run() == FALSE){
		 	$this->load->view('pages/baru');
		 }else{
			$this->model->input_data3($dataa1,'datapasien');
			$data_session=$dataa1;
			$data_session['id_pas']=$this->db->insert_id();
			$this->session->set_userdata($data_session);
			redirect('tubes/pilpol2');	
		}
	}
		
}
//================================================================================
		public function index1(){
            $dataa1['dataa1'] = $this->model->tampil_data2();
            // $dataa1['frekam'] = $this->model->modfun();
            $this->load->view('admin/tampilpasien',$dataa1);
        }
//================================================================================
		public function tambahdokter(){
		$pilpol = $this->input->post('pilpol');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$namadokter = $this->input->post('namadokter');
		$notlp = $this->input->post('notlp');
		$alamatdok = $this->input->post('alamatdok');
		$jadwal = $this->input->post('jadwal');
 
		$data = array(
			'pilpol' => $pilpol,
			'username' => $username,
			'password' => $password,
			'namadokter' => $namadokter,
			'notlp' => $notlp,
			'alamatdok' => $alamatdok,
			'jadwal' => $jadwal
			);
		$this->model->input_dokter($data,'dokter');
		redirect('tubes/utama');
	}
//================================================================================	
		public function indexfoto(){
		$this->load->view('admin/beritaacara', array('error' => ' ' ));
	}
//================================================================================
	public function aksi_upload(){
		$config['upload_path']          = './upload/';
		$config['allowed_types']        = 'gif|jpg|png|pdf|pptx|docx|php|html';
		$config['max_size']             = 1000000;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/beritaacara', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('admin/uploadberitaacara', $data);
		}
	}

	public function getdokbypoli(){
        $id=$this->input->post('id');
        $data=$this->model->get_dokter($id);
        echo json_encode($data);

    }

    public function getpasbydok(){
        $data['pasien']=$this->model->tampil_data_doks($this->session->userdata('id_dok'))->row(0);
		$this->load->view('doktor/antriandoks',$data);
    }


    // ======================================================================
   public function hapus($id_pas){
		$where = array('id_pas' => $id_pas);
		$this->model->hapus_data($where,'rekam');
		redirect('tubes/index1');
	}

	    // ======================================================================
   public function cancel($id1){
		$where = array('id1' => $id1);
		$this->model->hapus_data($where,'pempol');
		redirect('tubes/getpasbydok');
	}


}

/* End of file tubes.php */
/* Location: ./application/controllers/tubes.php */
?>