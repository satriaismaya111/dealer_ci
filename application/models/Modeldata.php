<?php
class Modeldata extends CI_Model {
	public function register()
	{
		return $this->db->get('tbl_user')->result();
	}
	public function Simpan_register()
	{
		$isidata=array(
			'nama'		=>$this->input->post('nama',TRUE),
			'username'		=>$this->input->post('username',TRUE),
			'password'		=>$this->input->post('password',TRUE),
		);
		return $this->db->insert('tbl_user',$isidata);
	}
	public function datamobil()
	{
		return $this->db->get('tbl_mobil')->result();
	}
	public function Simpan_mobil()
	{
		$isidata=array(
			'merek_mobil'	=>$this->input->post('merek_mobil',TRUE),
			'nama_mobil'	=>$this->input->post('nama_mobil',TRUE),
			'harga'			=>$this->input->post('harga',TRUE),
			'stok'			=>$this->input->post('stok',TRUE),
			'keterangan'	=>$this->input->post('keterangan',TRUE),
		);
		return $this->db->insert('tbl_mobil',$isidata);
	}
	public function get_id_mobil($id)
	{
		$this->db->where('id_mobil',$id);
		return $this->db->get('tbl_mobil')->row();
	}
	public function hapus_mobil()
	{
		$idmobil=$this->input->post('id_mobil',TRUE);
		$this->db->where('id_mobil',$idmobil);
		$this->db->delete('tbl_mobil');
	}
	public function get_id_mobil_edit($id)
	{
		$this->db->where('id_mobil',$id);
		return $this->db->get('tbl_mobil')->result();
	}
	public function Update_mobil($id_mobil,$merek_mobil,$nama_mobil,$harga,$stok,$keterangan)
	{
		$isidata=array(
			'merek_mobil'	=>$merek_mobil,
			'nama_mobil'	=>$nama_mobil,
			'harga'			=>$harga,
			'stok'			=>$stok,
			'keterangan'	=>$keterangan,
		);
		$this->db->set($isidata);
		$this->db->where('id_mobil',$id_mobil);
		$this->db->update('tbl_mobil');
	}
	public function isimobil()
	{
		return $this->db->get('tbl_mobil')->result();
	}



	public function datacustomer()
	{
		return $this->db->get('tbl_customer')->result();
	}
	public function Simpan_customer()
	{
		$isidata=array(
			'nama'			=>$this->input->post('nama',TRUE),
			'alamat'		=>$this->input->post('alamat',TRUE),
			'jk'			=>$this->input->post('jk',TRUE),
			'no_telepon'	=>$this->input->post('no_telepon',TRUE),
			'keterangan'	=>$this->input->post('keterangan',TRUE),
		);
		return $this->db->insert('tbl_customer',$isidata);
	}
	public function get_id_customer($id)
	{
		$this->db->where('id_customer',$id);
		return $this->db->get('tbl_customer')->row();
	}
	public function hapus_customer()
	{
		$idmobil=$this->input->post('id_customer',TRUE);
		$this->db->where('id_customer',$idcustomer);
		$this->db->delete('tbl_customer');
	}
	public function get_id_customer_edit($id)
	{
		$this->db->where('id_customer',$id);
		return $this->db->get('tbl_customer')->result();
	}
	public function Update_customer($id_customer,$nama,$alamat,$jk,$no_telepon,$keterangan)
	{
		$isidata=array(
			'nama'			=>$nama,
			'alamat'		=>$alamat,
			'jk'			=>$jk,
			'no_telepon'	=>$no_telepon,
			'keterangan'	=>$keterangan,
		);
		$this->db->set($isidata);
		$this->db->where('id_customer',$id_customer);
		$this->db->update('tbl_customer');
	}
	public function isicustomer()
	{
		return $this->db->get('tbl_customer')->result();
	}
}
?>