<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('User_model');

	}
// List all your items
	public function index()
	{   
		$data['hits']=$this->User_model->hist();
		$data['vertical']=$this->User_model->vertical();
		$data['tampil']=$this->User_model->get();
		$this->load->view('template home/sidebar');
		$this->load->view('template home/navbar');
		$this->load->view('Welcome_message',$data);
		$this->load->view('user/login',$data);
		$this->load->view('user/register',$data);

		$this->load->view('template home/footer');


	}
	public function nasional()

	{   $data['hits']=$this->User_model->hist();
		$data['vertical']=$this->User_model->get_nasional_v();
		$data['tampil']=$this->User_model->get_nasional();
		$this->load->view('template home/sidebar');
		$this->load->view('template home/navbar');
		$this->load->view('user/nasional/nasional',$data);
		$this->load->view('template home/footer');
		# code...
	}
	public function olahraga()
	{
	$data['hits']=$this->User_model->hist();   
	$data['vertical']=$this->User_model->get_olahraga_v();
	$data['tampil']=$this->User_model->get_olahraga();
	$this->load->view('template home/sidebar');
	$this->load->view('template home/navbar');
	$this->load->view('user/olahraga/olahraga',$data);
	$this->load->view('template home/footer');
		# code...
}
public function ekonomi()
{ 
$data['hits']=$this->User_model->hist();
$data['vertical']=$this->User_model->get_ekonomi_v();   
$data['tampil']=$this->User_model->get_ekonomi();
$this->load->view('template home/sidebar');
$this->load->view('template home/navbar');
$this->load->view('user/ekonomi/ekonomi',$data);
$this->load->view('template home/footer');
		# code...
}
public function teknologi()
{   
$data['hits']=$this->User_model->hist();
$data['vertical']=$this->User_model->get_teknologi_v();
$data['tampil']=$this->User_model->get_teknologi();
$this->load->view('template home/sidebar');
$this->load->view('template home/navbar');
$this->load->view('user/teknologi/teknologi',$data);
$this->load->view('template home/footer');
		# code...
}

public function detail($where)
{   $data=$this->User_model->populer($where);
	$data['tampil']=$this->User_model->getdetail($where);
	$this->load->view('template home/sidebar');
	$this->load->view('template home/navbar');
	$this->load->view('user/detail',$data);
	$this->load->view('template home/footer');

}
public function politik()
{   
	$data['vertical']=$this->User_model->politik();
	$data['tampil']=$this->User_model->politik_H();
	$this->load->view('template home/sidebar');
	$this->load->view('template home/navbar');
	$this->load->view('user/nasional/politik',$data);
	$this->load->view('template home/footer');

}
public function hk()
{   
	$data['vertical']=$this->User_model->hk();
	$data['tampil']=$this->User_model->hk_H();
	$this->load->view('template home/sidebar');
	$this->load->view('template home/navbar');
	$this->load->view('user/nasional/hukum&kriminal',$data);
	$this->load->view('template home/footer');

}
public function peristiwa()
{   
	$data['vertical']=$this->User_model->pristiwa();
	$data['tampil']=$this->User_model->pristiwa_H();
	$this->load->view('template home/sidebar');
	$this->load->view('template home/navbar');
	$this->load->view('user/nasional/pristiwa',$data);
	$this->load->view('template home/footer');

}

public function sepakbola()
{   
	$data['vertical']=$this->User_model->sepakbola();
	$data['tampil']=$this->User_model->sepakbola_h();
	$this->load->view('template home/sidebar');
	$this->load->view('template home/navbar');
	$this->load->view('user/olahraga/sepakbola',$data);
	$this->load->view('template home/footer');

}

public function motorgp()
{   
	$data['vertical']=$this->User_model->motorgp();
	$data['tampil']=$this->User_model->motorgp_h();
	$this->load->view('template home/sidebar');
	$this->load->view('template home/navbar');
	$this->load->view('user/olahraga/motorgp',$data);
	$this->load->view('template home/footer');

}

public function f1()
{   
	$data['vertical']=$this->User_model->f1();
	$data['tampil']=$this->User_model->f1_h();
	$this->load->view('template home/sidebar');
	$this->load->view('template home/navbar');
	$this->load->view('user/olahraga/f1',$data);
	$this->load->view('template home/footer');

}

public function raket()
{   
	$data['vertical']=$this->User_model->raket();
	$data['tampil']=$this->User_model->raket_h();
	$this->load->view('template home/sidebar');
	$this->load->view('template home/navbar');
	$this->load->view('user/olahraga/raket',$data);
	$this->load->view('template home/footer');

}
public function ti()
{   
	$data['vertical']=$this->User_model->ti();
	$data['tampil']=$this->User_model->ti_h();
	$this->load->view('template home/sidebar');
	$this->load->view('template home/navbar');
	$this->load->view('user/teknologi/ti',$data);
	$this->load->view('template home/footer');

}

public function sains()
{   
	$data['vertical']=$this->User_model->sains();
	$data['tampil']=$this->User_model->sains_h();
	$this->load->view('template home/sidebar');
	$this->load->view('template home/navbar');
	$this->load->view('user/teknologi/sains',$data);
	$this->load->view('template home/footer');

}

public function telkomunikasi()
{   
	$data['vertical']=$this->User_model->telkomunikasi();
	$data['tampil']=$this->User_model->telkomunikasi_h();
	$this->load->view('template home/sidebar');
	$this->load->view('template home/navbar');
	$this->load->view('user/teknologi/telekomunikasi',$data);
	$this->load->view('template home/footer');

}

public function otomotif()
{   
	$data['vertical']=$this->User_model->otomotif();
	$data['tampil']=$this->User_model->otomotif_h();
	$this->load->view('template home/sidebar');
	$this->load->view('template home/navbar');
	$this->load->view('user/teknologi/otomotif',$data);
	$this->load->view('template home/footer');

}
public function keuangan()
{   
	$data['vertical']=$this->User_model->keuangan();
	$data['tampil']=$this->User_model->keuangan_h();
	$this->load->view('template home/sidebar');
	$this->load->view('template home/navbar');
	$this->load->view('user/Ekonomi/keuangan',$data);
	$this->load->view('template home/footer');

}
public function energi()
{   
	$data['vertical']=$this->User_model->energi();
	$data['tampil']=$this->User_model->energi_h();
	$this->load->view('template home/sidebar');
	$this->load->view('template home/navbar');
	$this->load->view('user/Ekonomi/energi',$data);
	$this->load->view('template home/footer');

}
public function bisnis()
{   
	$data['vertical']=$this->User_model->bisnis();
	$data['tampil']=$this->User_model->bisnis_h();
	$this->load->view('template home/sidebar');
	$this->load->view('template home/navbar');
	$this->load->view('user/Ekonomi/bisnis',$data);
	$this->load->view('template home/footer');

}
public function makro()
{   
	$data['vertical']=$this->User_model->makro();
	$data['tampil']=$this->User_model->makro_h();
	$this->load->view('template home/sidebar');
	$this->load->view('template home/navbar');
	$this->load->view('user/Ekonomi/makro',$data);
	$this->load->view('template home/footer');

}


	// Add a new item
public function add()
{

}

	//Update one item
public function update( $id = NULL )
{

}

	//Delete one item
public function delete( $id = NULL )
{

}
}
