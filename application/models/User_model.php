<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User_model extends CI_Model
{
	function get_address($no_record=100)
	{
		$this->db->order_by('id'); //แสดง record สุดท้ายออกมาบรรทัดแรก
		$query = $this->db->get('grade',$no_record);
		foreach ($query->result() as $row)
		{
			$data['grade'][] = array(
				'id'        => $row->id,
				'subject_code' => $row->subject_code,
				'subject_name'   => $row->subject_name,
				'credit'     => $row->credit,
				'grade'     => $row->grade
			);
		}
		//var_dump($data); เรียกดูข้อมูลของ data
		return $data;
	}
	public function get_1address($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('grade');

		if ($query->num_rows() > 0)
		{
			$row = $query->row();
			$data = array(
				'id'        => $row->id,
				'subject_code'  => $row->subject_code,
				'subject_name'   => $row->subject_name,
				'credit'     => $row->credit,
				'grade'     => $row->grade
			);
			return $data;
		}
	}

	public function update_data($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('grade', $data);
	}

	public function delete_data($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('grade');
	}

	public function insert_data($data)
	{
		return $this->db->insert('grade', $data);
	}
}
