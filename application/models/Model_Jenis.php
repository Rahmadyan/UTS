<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Jenis extends CI_Model {


		public function getDataJenis()
		{
			$query=$this->db->query("select * from jenis_hero");
			return $query->result_array();
		}
		public function getHeroAll()
		{
			$query=$this->db->query("select A.keterangan as keterangan_jenis,B.* from jenis_hero as A join hero as B on A.id = B.fk_jenis");
			return $query->result_array();
		}
		public function getDataIdJenis($id)
		{
			$query=$this->db->query("select * from jenis_hero where id='$id'");
			return $query->result_array();
		}

		public function getHeroById($id)
		{
			$sql="select A.keterangan as keterangan_jenis,B.* from jenis_hero as A join hero as B on A.id = B.fk_jenis where A.id=$id";
			$query=$this->db->query($sql);
			return $query->result_array();			
		}
		public function getHero($id)
		{
			$sql="select * from hero where id=$id";
			$query=$this->db->query($sql);
			return $query->result_array();			
		}
		public function addData()
		{
			$object = array('keterangan' => $this->input->post('nama'),
							
							);
			$this->db->insert('jenis_hero', $object);
		}
		public function editData($id)
		{
			$object = array('keterangan' => $this->input->post('nama'),
							);
			$this->db->where('id', $id);
			$this->db->update('jenis_hero', $object);
		}
		public function deleteData($id)
		{	
			//$this->db->query("delete from hero where fk_jenis = '$id'");
			$this->db->query("delete from jenis_hero where id = '$id'");
		}

}

/* End of file Pegawai_Model.php */
/* Location: ./application/models/Pegawai_Model.php */
 ?>