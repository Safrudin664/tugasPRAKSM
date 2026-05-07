
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_welcome extends CI_Model {
    public function create($id_game, $filename){
        $data = [
            'id_game' => $id_game,
            'nama_game' => $this->input->post('nama_game', TRUE),
            'description' => $this->input->post('description', TRUE),
            'harga' => $this->input->post('harga', TRUE),
			'gambar' => $filename,
			'tag' => $tag
        ];

        $this->db->insert('game', $data);
    }

    
	public function read($id_game = false)
	{
		if ($id_game === false) {
			return $this->db->get('game')->result_array();
		} else {
			$query = $this->db->get_where('game', array('id_game' => $id_game));
			return $query->row();
		}
	}


	public function update($id_game, $filename = null){
		$data = [
			'nama_game' => $this->input->post('nama_game', TRUE),
			'description' => $this->input->post('description', TRUE),
			'harga' => $this->input->post('harga', TRUE),
			'discount' => $this->input->post('discount', TRUE),
		];

		if ($filename !== null) {
			$data['gambar'] = $filename;
		}

		$this->db->where('id_game', $id_game);
		$this->db->update('game', $data);
	}

	public function delete($id_game){
		$this->db->where('id_game', $id_game);
		$this->db->delete('game');
	}

	public function deleteAll(){
		$this->db->empty_table('game');
	}
}

