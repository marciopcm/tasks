<?php 


class Usuario_Model extends CI_Model {


	public function login_usuario($email, $senha) {

		$this->db->where('us_email', $email);
		$result = $this->db->get('usuarios');

		$db_password = $result->row(2)->us_senha;
		print_r($db_password);

		if (password_verify($senha, $db_password)) {
			$us_id = $result->row(2)->us_id;

			$user_data = array(
				'us_id' => $us_id,
			);
			
			$this->session->set_userdata($user_data);
			return true;
		} else {
			return false;
		}
	}

	public function create_usuario($data) {
		return $this->db->insert('usuarios', $data);
	}

	public function get_usuario($id) {
		$this->db->where('us_id', $id);
		$query = $this->db->get('usuarios');
		return $query->result();
	}
	
}

 ?>
