<?php

  class User extends CI_Controller{
  		function __construct(){
  			parent ::__construct();
  			$this->load->database();
  		}

  		function login(){
  			$email = $_POST['email'];
  			$password = $_POST['password'];

  			if (!$email || !$password) {
  				// $this->views('');
  				// return false;
  			}else{
  				$this->db->select('uid,username,avatar_url');
  				$this->db->from('pre_user');
  				$this->db->where('email',$email);
  				$this->db->where('password',$password);

  				$query = $this->db->get();
  				$user_info = $query->row_array();
  				if($user_info){
  					// $_SESSION['uid'] = $user_info['uid'];
  					// $_SESSION['username'] = $user_info['username'];
  					// $_SESSION['avatar_url'] = $user_info['avatar_url'];
  					$data = array("uid"=>$user_info['uid']
  								,"username"=>$user_info['username']
  								,"avatar_url"=>$user_info['avatar_url']);

  					 $this->session->set_userdata($data);
  				}

  				// var_dump($_SESSION['avatar_url'],$user_info);
  			//	echo $this->session->userdata('avatar_url');
  				$this->load->view('welcome_message');
  				//$this->load->view('welcome_message');
  			}


  		}
  }