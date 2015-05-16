<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('article/article_list_model','articel_list_model');

	}

	public function index()
	{
		// $this->load->helper('url');

		$welcome_article_list =  $this->articel_list_model->list_welcome_article();
		//var_dump($welcome_article_list);
		$data = array('welcome_article_list'=>$welcome_article_list);

		$this->load->view('welcome_message',$data);
	}

}
