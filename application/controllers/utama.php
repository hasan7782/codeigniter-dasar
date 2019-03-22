<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class utama extends CI_Controller {

	
	public function index()
	{
		$this->load->view('beranda');
	}
	public function latihan()
	{
		$data['x']=5;
		$data['y']=10;
		$data['z']="UMRI";
		$this->load->view('vlatihan',$data);
	}
	public function latihan2($a,$b)
	{
		$data['a']=$a;
		$data['b']=$b;
		$data['c']=$a + $b;
		$this->load->view('vlatihan2',$data);
	}
	public function jumlah()
	{
		$this->load->view('form');
	}
	public function kirim()
	{
		$data['a'] = $_POST['a'];
		$data['b'] = $_POST['b'];
		$data['c'] = $_POST['a'] + $_POST['b'];
		$this->load->view('hasil',$data);
	}
}
