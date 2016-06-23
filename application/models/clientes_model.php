<?php 


class Clientes_Model extends CI_Model {

	public function create_cliente($data) {
		return $this->db->insert('clientes', $data);
	}

	public function get_clientes() {
		$query = $this->db->get('clientes');
		return $query->result();
	}

	public function get_cliente_id($id) {
		$this->db->where('id', $id);
		$query = $this->db->get('clientes');
		return $query->result();
	}

	public function delete_cliente($id) {
		$this->db->where('id', $id);
		$this->db->delete('clientes');
	}

	public function update_cliente($data, $id) {
		$this->db->where('id', $id);
		return $this->db->update('clientes', $data);
	}
}

 ?>