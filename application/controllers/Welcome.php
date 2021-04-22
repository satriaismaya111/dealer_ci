<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}
	public function login()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$ketemu=$this->db->get('tbl_user')->row_array();
		if ($ketemu >0) {
			redirect('Welcome/beranda');
		}else {
			redirect('Welcome/');
		}
	}
	

	public function Beranda()
	{
		$this->load->view('beranda');
	}
	public function register()
	{
		$this->load->model('Modeldata');
		$data['tbl_user']		=$this->Modeldata->register();
		$this->load->view('register',$data);
	}
	public function simpanregister()
	{
		$this->load->model('Modeldata');
		$simpan=$this->Modeldata->Simpan_register();
		redirect('Welcome/register');
	}



	public function mobil()
	{
		$this->load->model('Modeldata');
		$data['datamobil']		=$this->Modeldata->datamobil();
		$this->load->view('beranda',$data);
	}
	public function Simpanmobil()
	{
		$this->load->model('Modeldata');
		$simpan=$this->Modeldata->Simpan_mobil();
		redirect('Welcome/mobil');
	}
	public function Getidmobil($id)
	{
		$this->load->model('Modeldata');
		$data=$this->Modeldata->get_id_mobil($id);
		echo json_decode($data);
	}
	public function hapusmobil()
	{
		$this->load->model('Modeldata');
		$simpan=$this->Modeldata->hapus_mobil();
		redirect('Welcome/mobil');
	}
	public function Editmobil($idmobil=null)
	{
		$this->load->model('Modeldata');
		$data['get_id_mobil']		=$this->Modeldata->get_id_mobil_edit($idmobil);
		$this->load->view('beranda',$data);
	}
	public function Updatemobil()
	{
		$id_mobil =$this->input->post('id_mobil', TRUE);
		$merek_mobil =$this->input->post('merek_mobil', TRUE);
		$nama_mobil =$this->input->post('nama_mobil', TRUE);
		$harga =$this->input->post('harga', TRUE);
		$stok =$this->input->post('stok', TRUE);
		$keterangan =$this->input->post('keterangan', TRUE);
		$this->load->model('Modeldata');
		$this->Modeldata->Update_mobil($id_mobil,$merek_mobil,$nama_mobil,$harga,$stok,$keterangan);
		redirect('Welcome/mobil');
	}



	public function customer()
	{
		$this->load->model('Modeldata');
		$data['isicustomer']		=$this->Modeldata->isicustomer();
		$this->load->view('beranda',$data);
	}
	public function Simpancustomer()
	{
		$this->load->model('Modeldata');
		$simpan=$this->Modeldata->Simpan_customer();
		redirect('Welcome/customer');
	}
	
}

	