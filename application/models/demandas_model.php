<?php 

class Demandas_Model extends CI_Model {

	public function create_demanda($data) {
		return $this->db->insert('demandas', $data);
	}

	public function delete_demanda($id) {
		$this->db->where('da_id', $id);
		return $this->db->delete('demandas');
	}

	public function update_demanda($data, $id) {
		$this->db->where('da_id', $id);
		return $this->db->update('demandas', $data);
	}

	public function get_demandas() {
		$query = $this->db->get('demandas');
		return $query->result();
	}

	public function get_demandas_usuario($usuario) {
		$this->db->where('us_id', $usuario);
		$query = $this->db->get('demandas');
		return $query->result();
	}

	public function get_demandas_cliente($cliente) {
		$this->db->where('cli_id', $cliente);
		$query = $this->db->get('demandas');
		return $query->result();
	}	

}

 ?>