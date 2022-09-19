<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Siswa extends CI_Controller
{
	public function index()
	{
//		$query = $this->db->get('tb_siswa');

//		$query = $this->db->get('tb_siswa',2,1);

//		$query = $this->db->get_where('tb_siswa', array('jenis_kelamin'=>'pria'));

//		$query = $this->db->select('nama, alamat, tempat_lahir, tgl_lahir');
//		$query = $this->db->get('tb_siswa');
//		echo "<pre>";
//		print_r($query->result());
//		echo "</pre>";

//		$this->db->select("(SELECT AVG(tinggi_badan) FROM tb_siswa WHERE jenis_kelamin = 'pria') AS tinggi_badan", FALSE);
//		$query = $this->db->get('tb_siswa');
//		print_r($query->row());

//		$this->db->select("(SELECT AVG(tinggi_badan) FROM tb_siswa WHERE jenis_kelamin = 'pria') AS tinggi_badan", FALSE);
//		$query = $this->db->get('tb_siswa')->row();
//		echo $query->tinggi_badan;

//		$this->db->select_max('tinggi_badan');
//		$this->db->select_max('tinggi_badan', 'max_tinggi_badan');
//		$query = $this->db->get('tb_siswa');
//		print_r($query->row());

//		$this->db->SELECT_MIN('tinggi_badan');
//		$this->db->SELECT_MIN('tinggi_badan', 'min_tinggi_badan');
//		$query = $this->db->get('tb_siswa');
//		print_r($query->row());

//		$this->db->SELECT_AVG('tinggi_badan');
//		$query = $this->db->get('tb_siswa');
//		print_r($query->row());

//		$this->db->SELECT_AVG('tinggi_badan', 'avg_tinggi_badan');
//		$query = $this->db->get('tb_siswa');
//		print_r($query->row());

//		$this->db->SELECT_SUM('tinggi_badan');
//		$query = $this->db->get('tb_siswa');
//		print_r($query->row());

//		$this->db->SELECT_SUM('tinggi_badan', 'sum_tinggi_badan');
//		$query = $this->db->get('tb_siswa');
//		print_r($query->row());

//		$this->db->SELECT('*');
//		$this->db->FROM('tb_siswa');
//		$this->db->JOIN('tb_kelas', 'tb_siswa.kd_kelas = tb_kelas.kd_kelas');
//		$query = $this->db->GET();
//		echo "<pre>";
//		print_r($query->result());
//		echo "</pre>";

//		$this->db->SELECT('*');
//		$this->db->FROM('tb_siswa');
//		$this->db->WHERE('jenis_kelamin', 'pria');
//		$this->db->WHERE('tempat_lahir', 'sidoarjo');
//		$query = $this->db->get();
//		echo "<pre>";
//		print_r($query->result());
//		echo "</pre>";

//		$this->db->SELECT('*');
//		$this->db->FROM('tb_siswa');
//		$this->db->LIKE('alamat', 'gunung');
//		$query = $this->db->GET();
//		echo "<pre>";
//		print_r ($query->result());
//		echo "</pre>";

//		$this->db->SELECT('*');
//		$this->db->FROM('tb_siswa');
//		$this->db->LIKE('alamat', 'gunung', 'both');
//		$query = $this->db->GET();
//		echo "<pre>";
//		print_r ($query->result());
//		echo "</pre>";

//		$like = array('alamat' => 'Gunung', 'tempat_lahir' => 'sido');
//		$this->db->SELECT('*');
//		$this->db->FROM('tb_siswa');
//		$this->db->LIKE($like);
//		$query = $this->db->GET();
//		echo "<pre>";
//		print_r($query->result());
//		echo "</pre>";

//		$this->db->SELECT('*');
//		$this->db->FROM('tb_siswa');
//		$this->db->LIKE('alamat', 'Gunung');
//		$this->db->OR_LIKE('tempat_lahir', 'sido');
//		$query = $this->db->get();
//		echo "<pre>";
//		print_r($query->result());
//		echo "</pre>";

//		$this->db->SELECT('*');
//		$this->db->FROM('tb_siswa');
//		$this->db->NOT_LIKE('tempat_lahir', 'sido');
//		$query = $this->db->GET();
//		echo "<pre>";
//		print_r($query->result());
//		echo "</pre>";

//		$this->db->SELECT('*');
//		$this->db->FROM('tb_siswa');
//		$this->db->LIKE('alamat', 'Gunung');
//		$this->db->OR_NOT_LIKE('tempat_lahir', 'sido');
//		$query = $this->db->get();
//		echo "<pre>";
//		print_r($query->result());
//		echo "</pre>";

//		$this->db->SELECT('jenis_kelamin,count(kd_siswa) AS jumlah');
//		$this->db->FROM('tb_siswa');
//		$this->db->GROUP_BY('jenis_kelamin');
//		$query = $this->db->get();
//		echo "<pre>";
//		print_r($query->result());
//		echo "</pre>";

//		$this->db->SELECT('tempat_lahir');
//		$this->db->DISTINCT('tempat_lahir');
//		$this->db->FROM('tb_siswa');
//		$query = $this->db->GET();
//		echo "<pre>";
//		print_r($query->result());
//		echo "</pre>";

//		$this->db->FROM('tb_siswa');
//		$this->db->ORDER_BY('tinggi_badan', 'DESC');
//		$query = $this->db->GET();
//		echo "<pre>";
//		print_r($query->result());
//		echo "</pre>";

//		$this->db->from('tb_siswa');
//		$this->db->order_by('tinggi_badan DESC', 'nama ASC');
//		$query = $this->db->get();
//		echo "<pre>";
//		print_r($query->result());
//		echo "</pre>";

//		$this->db->from('tb_siswa');
//		$this->db->order_by('tinggi_badan', 'DESC');
//		$this->db->order_by('nama', 'ASC');
//		$query = $this->db->get();
//		echo "<pre>";
//		print_r($query->result());
//		echo "</pre>";

//		$this->db->from('tb_siswa');
//		$this->db->order_by('tinggi_badan', 'RANDOM');
//		$query = $this->db->get();
//		echo "<pre>";
//		print_r($query->result());
//		echo "</pre>";

//		$this->db->from('tb_siswa');
//		$this->db->limit('2');
//		$query = $this->db->get();
//		echo "<pre>";
//		print_r($query->result());
//		echo "</pre>";

//		$this->db->from('tb_siswa');
//		$this->db->limit('2', '3');
//		$query = $this->db->get();
//		echo "<pre>";
//		print_r($query->result());
//		echo "</pre>";

//		echo $this->db->count_all_results('tb_siswa');

//		$this->db->where('jenis_kelamin', 'pria');
//		$this->db->from('tb_siswa');
//		echo $this->db->count_all_results();

//		echo $this->db->count_all('tb_siswa');

//		$data = array(
//			'kd_kelas' => '1',
//			'nama' => 'gita',
//			'alamat' => 'sedati gede',
//			'tgl_lahir' => '1994-04-04',
//			'tempat_lahir' => 'sidoarjo',
//			'jenis_kelamin' => 'pria',
//			'berat_badan' => '60',
//			'tinggi_badan' => '160'
//		);
//		$this->db->insert('tb_siswa', $data);

//		$data = array (
//			array (
//				'kd_kelas' => '2',
//				'nama' => 'hari',
//				'alamat' => 'pabean',
//				'tgl_lahir' => '1994-05-05',
//				'tempat_lahir' => 'jakarta',
//				'jenis_kelamin' => 'pria',
//				'berat_badan' => '60',
//				'tinggi_badan' => '160'
//			),
//			array (
//				'kd_kelas' => '1',
//				'nama' => 'ikhsan',
//				'alamat' => 'wonocolo',
//				'tgl_lahir' => '1994-06-06',
//				'tempat_lahir' => 'sidoarjo',
//				'jenis_kelamin' => 'pria',
//				'berat_badan' => '70',
//				'tinggi_badan' => '160'
//			)
//		);
//
//		$this->db->insert_batch('tb_siswa', $data);

//		$data = array (
//			'nama' => 'Dika Cahyadi',
//			'alamat' => 'Pucang',
//			'tgl_lahir' => '1994-07-07',
//		);
//		$this->db->update('tb_siswa', $data, array('kd_siswa' => '4'));

		$this->db->delete('tb_siswa', array('kd_siswa' => 9));
	}
}

