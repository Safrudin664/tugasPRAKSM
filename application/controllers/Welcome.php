<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_welcome', 'model');
		$this->load->helper(array('url','form'));
		$this->load->library(array('session','form_validation'));

		/* ===============================
		   STEAM UI THEME DATA
		   =============================== */
		$this->theme = array(
			'app_name'      => 'MARKET GAME',
			'primary'       => '#172120',
			'secondary'     => '#1b3833',
			'accent'        => '#66c0f4',
			'text'          => '#c7d5e0',
			'text_light'    => '#ffffff',
			'card'          => '#2a475e',
			'hover'         => '#3b6e8c',
			'footer'        => '#171a21'
		);
	}

	/* ==================================================
	   HOME PAGE
	   ================================================== */
	public function index($id_game = FALSE)
	{
		if ($id_game === FALSE) {

			$data['theme']      = $this->theme;
			$data['page_title'] = 'MARKET GAME';
			$data['home_post']  = $this->model->read();

			$this->load->view('header', $data);
			$this->load->view('home', $data);
			$this->load->view('footer', $data);

		} else {

			$data['theme']      = $this->theme;
			$data['page_title'] = 'Detail Post';
			$data['post']       = $this->model->read($id_game);

			$this->load->view('header', $data);
			$this->load->view('post', $data);
			$this->load->view('footer', $data);
		}
	}

	/* ==================================================
	   CREATE POST
	   ================================================== */
	public function create()
	{
		$this->form_validation->set_rules(
			'nama_game',
			'Name',
			'required|max_length[30]'
		);

		$this->form_validation->set_rules(
			'description',
			'Description',
			'required'
		);

		$this->form_validation->set_rules(
			'harga',
			'Harga',
			'required'
		);


		if ($this->form_validation->run() == FALSE) {

			$data['theme']      = $this->theme;
			$data['page_title'] = 'Create Content';

			$this->load->view('header', $data);
			$this->load->view('create', $data);
			$this->load->view('footer', $data);

		} else {

			$id_game = uniqid('item', TRUE);

			$config['upload_path']      = './upload/post/';
			$config['allowed_types']    = 'jpg|jpeg|png';
			$config['max_size']         = 100000;
			$config['file_ext_tolower'] = TRUE;
			$config['file_name']        = str_replace('.', '_', $id_game);

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('image1')) {

				$this->session->set_flashdata(
					'error',
					$this->upload->display_errors()
				);

				redirect('welcome/create');

			} else {

				$gambar = $this->upload->data('file_name');

				$this->model->create($id_game, $gambar);

				$this->session->set_flashdata(
					'success',
					'Content berhasil ditambahkan.'
				);

				redirect('');
			}
		}
	}

	/* ==================================================
	   UPDATE POST
	   ================================================== */
	public function update($id_game)
	{
		$this->form_validation->set_rules(
			'nama_game',
			'Name',
			'required|max_length[30]'
		);

		$this->form_validation->set_rules(
			'description',
			'Description',
			'required'
		);

		if ($this->form_validation->run() == FALSE) {

			$data['theme']      = $this->theme;
			$data['page_title'] = 'Update Content';
			$data['game']       = $this->model->read($id_game);

			$this->load->view('header', $data);
			$this->load->view('update', $data);
			$this->load->view('footer', $data);

		} else {

			if (!empty($_FILES['image1']['name'])) {

				$post = $this->model->read($id_game);

				$config['upload_path']      = './upload/post/';
				$config['allowed_types']    = 'jpg|jpeg|png';
				$config['max_size']         = 100000;
				$config['file_ext_tolower'] = TRUE;
				$config['file_name']        = uniqid('img');

				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('image1')) {

					$this->session->set_flashdata(
						'error',
						$this->upload->display_errors()
					);

					redirect('welcome/update/'.$id_game);

				} else {

					if (
						$post &&
						!empty($post->gambar) &&
						file_exists('./upload/post/'.$post->gambar)
					) {
						unlink('./upload/post/'.$post->gambar);
					}

					$gambar = $this->upload->data('file_name');

					$this->model->update($id_game, $gambar);

					$this->session->set_flashdata(
						'success',
						'Content berhasil diupdate.'
					);

					redirect('');
				}

			} else {

				$this->model->update($id_game);

				$this->session->set_flashdata(
					'success',
					'Data berhasil diupdate.'
				);

				redirect('');
			}
		}
	}

	/* ==================================================
	   DELETE
	   ================================================== */
	public function delete($id_game)
	{
		$post = $this->model->read($id_game);

		if (
			$post &&
			!empty($post->gambar) &&
			file_exists('./upload/post/'.$post->gambar)
		) {
			unlink('./upload/post/'.$post->gambar);
		}

		$this->model->delete($id_game);

		$this->session->set_flashdata(
			'success',
			'Data berhasil dihapus.'
		);

		redirect('');
	}
}