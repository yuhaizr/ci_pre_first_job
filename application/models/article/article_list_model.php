<?php

 /**
 * @author 於海
 * @create_time 
 */
 class Article_list_model extends CI_Model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->database();
 	}
 	/**
 	*
 	*/
 	function list_welcome_article(){
 		$this->db->select('aid,title,content,image,origin,link,create_time');
 		$this->db->from('pre_article');
 		$this->db->order_by('create_time desc');
 		$this->db->limit(10);

 		$query = $this->db->get();
 		$welcome_article_list = $query->result_array();
 		return $welcome_article_list;
 	}
 }