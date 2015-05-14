<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<head lang="en">
    <meta charset="UTF-8">

	<title>欢迎来到<?php echo APP_NAME;?></title>

 	<link rel="stylesheet" type="text/css" href="<?php echo  base_url() ;?>bootstrap/css/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="<?php echo  base_url() ;?>/css/welcome_message.css">

	<script type="text/javascript" src ="<?php echo  base_url() ;?>js/jquery-2.1.1.js" ></script>
	<script type="text/javascript" src="<?php echo  base_url() ;?>bootstrap/js/bootstrap.js"></script>

	 
</head>
<body>

	<?php echo BASEPATH;?>
	<!-- 导航栏   开始 -->
 	<div class="container-fluid">
	
		<nav class="navbar navbar-default">	
		
			<div class="collapse navbar-collapse nav_all " id="bs-example-navbar-collapse-1">
			 	<div class="container">
				 	<ul class="nav navbar-nav nav_ul">
					
						<li role="presentation" class="nav_li" ><span>&nbsp;</span></li>
						<li role="presentation" class="nav_li" id="nav_first"><a href="index.php">首页</a></li>
					
						<li role="presentation" class="nav_li"> <a href="index.php">行业资讯</a></li>
					
						<li role="presentation" class="nav_li dropdown" id="nav_li_dropdown">
								
								<a href="index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">公司类别<span class="caret"></span></a>
								
								<ul class="dropdown-menu nav_ul_li_ul" role="menu">	

									<li class="nav_ul_li_ul_li">类别1</li>

									<!-- <li class="divider nav_ul_li_ul_li"></li> -->

									<li class="nav_ul_li_ul_li">类别2</li>	

								</ul>
						</li>

						<li role="presentation" class="nav_li"> <a href="index.php">职位介绍</a></li>

						<li role="presentation" class="nav_li"> <a href="index.php">岗位能力</a></li>

						<li role="presentation" class="nav_li"> <a href="index.php">门户导航</a></li>

						<li role="presentation" class="nav_li"> <a href="index.php">求职招聘</a></li>

					</ul>

				</div>
				<div id="login">
					 <?php if($this->session->userdata('avatar_url')) {  ?> 
					<img width="40px" height="40px" src="<?php echo $_SESSION['avatar_url']?>"  >
					<?php  }else{  ?>
					<a data-toggle="modal" href="user/login.html" data-target="#loginModal"  class="btn btn-primary btn-large">登入</a>
					<?php }?>
				</div>

			

			</div>	

		</nav>

	</div>
	<!-- 导航栏   结束-->


	<!-- 登入弹出框 开始 -->

	<div id="loginModal" class="modal fade container">
		<div class="moddal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">快来加入我们吧</h4>
				</div>
			<form method="post"  action="<?php echo site_url("user/login")?>">
				<div class="modal-body">
      					<br><br>
		                <label for="email">邮箱:</label>
		                <input  placeholder="请输入您的邮箱" size="20" required="required" name="email" id="email" type="email"/>
		                <br/><br>
		                <label for="password">密码:</label>
		                <input  placeholder="请输入您的密码" required="required" name="password" id="password" type="password">
			 			<br><br>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-deafault" data-dismiss="modal">关闭</button>
					<button type="submit" class="btn btn-primary" >保存</button>
					
					
				</div>
				</form>
			</div>
		</div>
		登入
	</div>

	<!-- 登入弹出框 结束 -->	
	<!-- 全部内容  开始-->
	<div class="container">

		<div class="jumbotron">

			<div class="media">

			  <div class="media-left div_image">

			    <a href="#">

			      <img width="100%" height="100%" class="media-object" src="<?php echo IMAGE_PATH ?>/welcome_bg.jpg" alt="...">
			   
			    </a>

			  </div>

			  <div class="media-body">

			    <h4 class="media-heading">Media heading</h4>

			    <span>内容内容呢内容内容呢内容内容呢内容内容呢</span>

			  </div>

			</div>

		</div> 

	</div>
	
	<div class="container">
		<div class="row">

			<div class="col-xs-2">
			    <div class="thumbnail">
			      <img width="100%" height="100%" src="<?php echo IMAGE_PATH ?>/welcome_bg.jpg" alt="...">
			      <div class="caption">
			        <p>内容内容呢内容内容呢内容内容呢内容内容呢</p>
			      </div>
			    </div>
			</div>

			<div class="col-xs-2">
			    <div class="thumbnail">
			      <img width="100%" height="100%" src="<?php echo IMAGE_PATH ?>/welcome_bg.jpg" alt="...">
			      <div class="caption">
			        <p>内容内容呢内容内容呢内容内容呢内容内容呢</p>
			      </div>
			    </div>
			</div>

			<div class="col-xs-2">
			    <div class="thumbnail">
			      <img width="100%" height="100%" src="<?php echo IMAGE_PATH ?>/welcome_bg.jpg" alt="...">
			      <div class="caption">
			        <p>内容内容呢内容内容呢内容内容呢内容内容呢</p>
			      </div>
			    </div>
			</div>

			<div class="col-xs-2">
			    <div class="thumbnail">
			      <img width="100%" height="100%" src="<?php echo IMAGE_PATH ?>/welcome_bg.jpg" alt="...">
			      <div class="caption">
			        <p>内容内容呢内容内容呢内容内容呢内容内容呢内容内容呢内容内容呢内容内容呢内容内
			        容呢内容内容呢内容内容呢内容内容呢内容内容呢内容内容呢内容内容呢内容内容呢内容内容呢
			        容呢内容内容呢内容内容呢内容内容呢内容内容呢内容内容呢内容内容呢内容内容呢内容内容呢
			        容呢内容内容呢内容内容呢内容内容呢内容内容呢内容内容呢内容内容呢内容内容呢内容内容呢
			        容呢内容内容呢内容内容呢内容内容呢内容内容呢内容内容呢内容内容呢内容内容呢内容内容呢
			        容呢内容内容呢内容内容呢内容内容呢内容内容呢内容内容呢内容内容呢内容内容呢内容内容呢
			        容呢内容内容呢内容内容呢内容内容呢内容内容呢内容内容呢内容内容呢内容内容呢内容内容呢</p>
			      </div>
			    </div>
			</div>						

		</div>
	</div>
	<div class="container">
			<div class="col-xs-2">
			    <div class="thumbnail">
			      <img width="100%" height="100%" src="<?php echo IMAGE_PATH ?>/welcome_bg.jpg" alt="...">
			      <div class="caption">
			        <p>内容内容呢内容内容呢内容内容呢内容内容呢</p>
			      </div>
			    </div>
			</div>

			<div class="col-xs-2">
			    <div class="thumbnail">
			      <img width="100%" height="100%" src="<?php echo IMAGE_PATH ?>/welcome_bg.jpg" alt="...">
			      <div class="caption">
			        <p>内容内容呢内容内容呢内容内容呢内容内容呢</p>
			      </div>
			    </div>
			</div>

			<div class="col-xs-2">
			    <div class="thumbnail">
			      <img width="100%" height="100%" src="<?php echo IMAGE_PATH ?>/welcome_bg.jpg" alt="...">
			      <div class="caption">
			        <p>内容内容呢内容内容呢内容内容呢内容内容呢</p>
			      </div>
			    </div>
			</div>		


	</div>

	 <!-- 全部内容  结束-->




  <?php echo  date('Y-m-d H:i:s') ?>



</body>
</html>