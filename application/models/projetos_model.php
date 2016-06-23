<?php 

class Projetos_Model extends CI_Model {

	public function get_projetos() {
		$query = $this->db->get('projetos');
		return $query->result();
	}

	public function get_projetos_id($id) {
		$this->db->where('proj_id', $id);
		$query = $this->db->get('projetos');
		return $query->result();
	}

	public function create_projeto($data) {
		return $this->db->insert('projetos', $data);
	}

	public function delete_projeto($id) {
		$this->db->where('proj_id', $id);
		$this->db->delete('projetos');
	}

	public function update_projeto($data, $id) {
		$this->db->where('proj_id', $id);
		return $this->db->update('projetos', $data);
	}

}

 ?>