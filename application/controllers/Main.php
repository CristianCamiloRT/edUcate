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

		$data = array(
			'_title' => 'Videos de',
			'_description' => 'Videos de',
		);

		$this->parser->parse('layout', $data);
	}
}
