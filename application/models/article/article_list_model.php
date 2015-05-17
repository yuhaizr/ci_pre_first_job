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
 	*首页的文章列表
 	*/
 	function list_welcome_article(){
 		$this->db->select('aid,title,content,image,origin,link,create_time');
 		$this->db->from('pre_article');
 		$this->db->order_by('create_time desc');
 		$this->db->limit(10);

 		$query = $this->db->get();
 		$welcome_article_list = $query->result_array();

 		$welcome_article_list = $this->fix_welcome_article($welcome_article_list);

 		return $welcome_article_list;
 	}
 	//对首页的文章列表的样式进行处理
 	function fix_welcome_article($welcome_article_list){
 		foreach ($welcome_article_list as $key => $value) {
 			$content = $value['content'];
 			$content = $this->msubstr($content, 0,70,count($content))."......";
 			$welcome_article_list[$key]['content'] = $content;
 		}

 		return $welcome_article_list;
 	}











/**
 +----------------------------------------------------------
 * 字符串截取，支持中文和其他编码
 +----------------------------------------------------------
 * @static
 * @access public
 +----------------------------------------------------------
 * @param string $str 需要转换的字符串
 * @param string $start 开始位置
 * @param string $length 截取长度
 * @param string $charset 编码格式
 * @param string $suffix 截断显示字符
 * @param string $strength 字符串的长度
 +----------------------------------------------------------
 * @return string
 +----------------------------------------------------------
 */
function msubstr($str, $start=0, $length, $strength,$charset="utf-8", $suffix=true)
{
    if(function_exists("mb_substr")){
     if($suffix){
      if($length <$strength ){
       return mb_substr($str, $start, $length, $charset)."....";
      }else{
       return mb_substr($str, $start, $length, $charset);
      }  
     }else{
      return mb_substr($str, $start, $length, $charset);
     }

     
    }elseif(function_exists('iconv_substr')) {
     if($suffix){//是否加上......符号
      if($length < $strength){
       return iconv_substr($str,$start,$length,$charset)."....";
      }else{
       return iconv_substr($str,$start,$length,$charset) ;
      }  
     }else{
      return iconv_substr($str,$start,$length,$charset) ;
     }

       
    }
    $re['utf-8']   = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";
    $re['gb2312'] = "/[\x01-\x7f]|[\xb0-\xf7][\xa0-\xfe]/";
    $re['gbk']    = "/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";
    $re['big5']   = "/[\x01-\x7f]|[\x81-\xfe]([\x40-\x7e]|\xa1-\xfe])/";
    preg_match_all($re[$charset], $str, $match);
    $slice = join("",array_slice($match[0], $start, $length));
    if($suffix){
     return $slice."…";
    } else{
     return $slice;
    }
   
}




 }