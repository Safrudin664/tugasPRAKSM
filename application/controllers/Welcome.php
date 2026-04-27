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
			'app_name'      => 'Steam Multimedia',
			'primary'       => '#171a21',
			'secondary'     => '#1b2838',
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
	public function index($id = FALSE)
	{
		if ($id === FALSE) {

			$data['theme']      = $this->theme;
			$data['page_title'] = 'Steam Multimedia';
			$data['home_post']  = $this->model->read();

			$this->load->view('header', $data);
			$this->load->view('home', $data);
			$this->load->view('footer', $data);

		} else {

			$data['theme']      = $this->theme;
			$data['page_title'] = 'Detail Post';
			$data['post']       = $this->model->read($id);

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
			'name',
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
			$data['page_title'] = 'Create Content';

			$this->load->view('header', $data);
			$this->load->view('create', $data);
			$this->load->view('footer', $data);

		} else {

			$id = uniqid('item', TRUE);

			$config['upload_path']      = './upload/post/';
			$config['allowed_types']    = 'jpg|jpeg|png';
			$config['max_size']         = 100000;
			$config['file_ext_tolower'] = TRUE;
			$config['file_name']        = str_replace('.', '_', $id);

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('image1')) {

				$this->session->set_flashdata(
					'error',
					$this->upload->display_errors()
				);

				redirect('welcome/create');

			} else {

				$filename = $this->upload->data('file_name');

				$this->model->create($id, $filename);

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
	public function update($id)
	{
		$this->form_validation->set_rules(
			'name',
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
			$data['post']       = $this->model->read($id);

			$this->load->view('header', $data);
			$this->load->view('update', $data);
			$this->load->view('footer', $data);

		} else {

			if (!empty($_FILES['image1']['name'])) {

				$post = $this->model->read($id);

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

					redirect('welcome/update/'.$id);

				} else {

					if (
						$post &&
						!empty($post->filename) &&
						file_exists('./upload/post/'.$post->filename)
					) {
						unlink('./upload/post/'.$post->filename);
					}

					$filename = $this->upload->data('file_name');

					$this->model->update($id, $filename);

					$this->session->set_flashdata(
						'success',
						'Content berhasil diupdate.'
					);

					redirect('');
				}

			} else {

				$this->model->update($id);

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
	public function delete($id)
	{
		$post = $this->model->read($id);

		if (
			$post &&
			!empty($post->filename) &&
			file_exists('./upload/post/'.$post->filename)
		) {
			unlink('./upload/post/'.$post->filename);
		}

		$this->model->delete($id);

		$this->session->set_flashdata(
			'success',
			'Data berhasil dihapus.'
		);

		redirect('');
	}
}