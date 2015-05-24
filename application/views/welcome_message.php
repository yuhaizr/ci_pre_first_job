	

	<?php $this->load->view('header.html') ?>
 	<link rel="stylesheet" type="text/css" href="<?php echo  base_url() ;?>css/welcome_message.css">
	<title>欢迎来到<?php echo APP_NAME;?></title>

	<?php $this->load->view('nav.html') ?>
		
	<?php $this->load->view('article/welcome_article_list.html')?>	

	<?php $this->load->view('footer.html')?>
