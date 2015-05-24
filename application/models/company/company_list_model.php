<?php

 /**
 * @author 於海
 * @create_time 
 */
 class Company_list_model extends CI_Model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->database();
 	}
 	/**
 	*显示公司列表
 	*/
 	function list_company(){
 		$this->db->select('aid,title,content,image,origin,link,create_time');
 		$this->db->from('pre_article');
 		$this->db->order_by('create_time desc');
 		$this->db->limit(10);

 		$query = $this->db->get();
 		$welcome_article_list = $query->result_array();

 		$welcome_article_list = $this->fix_welcome_article($welcome_article_list);

 		return $welcome_article_list;
 	}
 











 }