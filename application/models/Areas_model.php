<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Areas_model extends CI_Model
{

	function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get_areas(){     
        $query = $this->db->get('areas'); 
        return $query->result();
    }

    function get_materias($id_area){
        $query = $this->db->get_where('materias', array('id_area' => $id_area));
        return $query->result();
    }

    function get_nombre_materia($id_materia){
        $query = $this->db->select('nombre')->where('id', $id_materia)->get('materias')->row(); 
        return $query;
    }
   
    function get_videos($id_materia){
        $query = $this->db->get_where('videos', array('id_materia' => $id_materia));
        return $query->result();
    }

    function get_video($id_video){
        $query = $this->db->get_where('videos', array('id' => $id_video))->row();
        return $query;
    }
}