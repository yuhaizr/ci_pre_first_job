<?php

  class AdminManager extends CI_Controller{
  		function __construct(){
  			parent ::__construct();
  			$this->load->database();
  		}

  		function index(){
  			//var_dump(IMAGE_PATH);
  			$this->load->view('article/addArticle.html');
  		}

  	}	