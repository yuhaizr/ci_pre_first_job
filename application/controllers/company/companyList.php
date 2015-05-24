<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyList extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('company/company_list_model','company_list_model');

	}

	public function index()
	{

		$company_list =  $this->company_list_model->list_company();
		//var_dump($welcome_article_list);
		$data = array('company_list'=>$company_list);

		$this->load->view('company/company_list',$data);
	}

}
