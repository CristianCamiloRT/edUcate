<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->library('parser');

		$data = array(
			'_title' => 'Plataforma Educativa',
			'_description' => 'Plataforma Educativa',
		);

		$this->parser->parse('layout', $data);
	}

	public function videos()
	{
		$this->load->library('parser');
        $this->load->model('areas_model');
		$materia = $this->areas_model->get_nombre_materia($this->input->get('materia'));
		$data = array(
			'_title' => 'Videos de '.$materia->nombre,
			'_description' => 'Videos de '.$materia->nombre,
			'_content' => $this->load->view('content/videos', ['videos' => $this->areas_model->get_videos($this->input->get('materia')), 'materia' => $materia->nombre], true)
		);

		$this->parser->parse('layout', $data);
	}

	public function ver()
	{
		$this->load->library('parser');

        $this->load->model('areas_model');
		$video = $this->areas_model->get_video($this->input->get('id_video'));
		$data = array(
			'_title' => $video->titulo,
			'_description' => $video->titulo,
			'_content' => $this->load->view('content/ver', ['video' => $video], true)
		);

		$this->parser->parse('layout', $data);
	}
}
