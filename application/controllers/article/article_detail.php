<?php

  class article_detail extends CI_Controller{
  		function __construct(){
  			parent ::__construct();
  			$this->load->database();
  			$this->load->model('article/article_list_model');
  		}

  		function index(){
  			$article_id = $_GET['article_id'];

  			$article = $this->article_list_model->article_detail($article_id);
  			$data['article'] = $article;
  			$this->load->view('article/article_detail.html',$data);

  		}


  	}	