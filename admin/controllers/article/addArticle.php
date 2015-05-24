<?php

  class addArticle extends CI_Controller{
  		function __construct(){
  			parent ::__construct();
  			$this->load->database();
  			$this->upload_path = "D:/freehost/zhangjun/web/image/app";
  			$this->new_path = "http://zhangjun.cnd20150623.benbenidc.com/image/app/";
  		}

  		function index(){
  			//var_dump(dirname(__FILE__));
  			$image = $_FILES['image'];
  			$title = $_POST['title'];
  			$content = $_POST['content'];
        //在新行里加上<br>
       // $content = nl2br($content);
  			$origin = $_POST['origin'];
  			$tmp_path = $image['tmp_name'];
  			$link =  $_POST['link'];

  			//var_dump($tmp_path);
  			$rand_name = $this->get_rand_name(12).'.jpg';
  			$this->new_path = $this->new_path.$rand_name;
  			$uploadfile = $this->upload_path.$rand_name;
  			if(copy($tmp_path,$uploadfile)){
  				$data = array("title"=>$title
  							  ,"content"=>$content
  							  ,"origin"=>$origin
  							  ,"image"=>$this->new_path
  							  ,"link"=>$link
  							  ,"create_time"=>date('Y-m-d H:i:s')
  							  ,"update_time"=>date('Y-m-d H:i:s')
  							  );
  				$res = $this->db->insert('pre_article',$data);
  				var_dump($res);

  			}else{
  				var_dump('上传失败');
  			}

  		//	$this->load->view('success.html');
  		}

  		private function get_rand_name($length){
  			$hash = '/image_';   
	        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';   
	        $max = strlen($chars) - 1;   
	        mt_srand((double)microtime() * 1000000);   
	            for($i = 0; $i < $length; $i++)   
	            {   
	                $hash .= $chars[mt_rand(0, $max)];   
	            }   

	           var_dump($hash);
	        return $hash;   
  		} 

  	}	