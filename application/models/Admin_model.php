<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function tambah($insert)
	{

		return $this->db->insert('tb_berita',$insert);
		# code...
	}

	public function get()
   {
	 return $this->db->get('tb_berita');
	# code...
    }

    public function hapus($id)
    {
    	$this->db->where('id',$id);
    	return $this->db->delete('tb_berita');
    	# code...
    }
	

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */