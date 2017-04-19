<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Hero extends CI_Model {

	public function addData()
		{
			$object = array('nama' => $this->input->post('nama'),
							'tanggal_lahir' => $this->input->post('tglLahir'),
							'foto' => $this->upload->data('file_name'),
							'fk_jenis'=> $this->input->post('fk_jenis'),
							);
			$this->db->insert('hero', $object);
		}

		public function editData($id)
		{
			$object = array('nama' => $this->input->post('nama'),
							'tanggal_lahir' => $this->input->post('tglLahir'),
							'foto' => $this->upload->data('file_name'),
							'fk_jenis'=> $this->input->post('fk_jenis'),
							);
			$this->db->where('id', $id);
			$this->db->update('hero', $object);
		}
		public function deleteData($id)
		{	
			$this->db->query("delete from hero where id = '$id'");
		}

}

/* End of file Pemain_Model.php */
/* Location: ./application/models/Pemain_Model.php */