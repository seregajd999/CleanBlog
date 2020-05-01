<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<?php $page->get_headhtml();?>
<title><?php $page->get_title();?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="<?php $page->get_description();?>">
<meta name="keywords" content="<?php $page->get_keywords();?>">

<!-- Bootstrap core CSS -->
<link href="/modules/CleanBlog/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="/modules/CleanBlog/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

<!-- Custom styles for this template -->
<link href="/modules/CleanBlog/css/clean-blog.min.css" rel="stylesheet">


</head>
<body>


  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="/"><?php $page->get_header();?></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
					<!--Верхнее меню-->
				<li class="nav-item">
            <a class="nav-link" href="/">Главная</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">О компании</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/news">Новости</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact">Контакты</a>
					</li>
					<!--Конец-->
				</ul>
      </div>
    </div>
	</nav>
	

	<!-- Page Header -->
	
	<header class="masthead" style="background-image: url('/modules/CleanBlog/img/home-bg.jpg')">
	
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1><?php $page->get_name();?></h1>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
            <div class="post-subtitle">
						<?php $page->get_content();?>
	         </div>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://github.com/seregajd999/CleanBlog">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
					</ul>
					<div class="user_menu">
				<?php
					if($User->authorized){
						echo'<a href="/user" class="user">'.$User->login.'</a>';
					}else{
						echo'<a href="/user" class="in">Вход</a><a href="/user/reg" class="reg">Регистрация</a>';
					}
				?>
			</div>
					<p class="copyright text-muted">Copyright &copy; Your Website 2020</p>
					<p class="copyright text-muted"><a  href="https://gofiblog.ml/">Посетить сайт</a></p>
        </div>
      </div>
    </div>
  </footer>
<!-- Page script -->
  <!-- Bootstrap core JavaScript -->
  <script src="/modules/CleanBlog/vendor/jquery/jquery.min.js"></script>
  <script src="/modules/CleanBlog/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="/modules/CleanBlog/js/clean-blog.min.js"></script>


<script>
document.getElementById('menu').onclick = function(){
	var menu = document.getElementById('nav');
	var sidebar_menu = document.getElementById('sidebar_menu');
	if(menu.style.height == menu.scrollHeight + 'px'){
		menu.style.height = '0px';
		sidebar_menu.style.height = '0px';
	}else{
		menu.style.height = menu.scrollHeight + 'px';
		sidebar_menu.style.height = sidebar_menu.scrollHeight + 'px';
	}
}
</script>
<?php $page->get_endhtml();?>
</body>
</html>