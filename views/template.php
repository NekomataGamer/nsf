
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Faculdade Nossa Senhora de Fátima</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="<?php echo BASE_URL?>/assets/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="<?php echo BASE_URL?>/assets/css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="<?php echo BASE_URL?>/assets/css/fontawesome-all.min.css" rel="stylesheet">
	<!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body>
    <!-- banner -->
    <div class="banner">
        <!-- header -->
    <header>	
	<nav class="mnu navbar-light">
            <div class="logo" id="logo">
                <h1><a href="<?php echo BASE_URL;?>"><img src="<?php echo BASE_URL;?>assets/images/logo-icon-negativa.png" style="width: 90px; margin: -25px 0;" /></a></h1>
            </div>
				<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                <input type="checkbox" id="drop">
                    <ul class="menu">
						<li class="mr-lg-4 mr-3 active"><a href="<?php echo BASE_URL;?>">Home</a></li>
						<li class="mr-lg-4 mr-3">
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">NSF <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                            <a href="#">NSF <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul style="box-shadow: 2px 2px 2px #aaa;">
                              <li><a href="<?php echo BASE_URL;?>pages/sobre/">Sobre Nós</a></li>
								<!-- <li><a href="<?php echo BASE_URL;?>pages/sobre">Agenda</a></li> -->
								<!-- <li><a href="<?php echo BASE_URL;?>pages/sobre">Blog</a></li> -->
                            </ul>
                        </li>
						<li class="mr-lg-4 mr-3"><a href="<?php echo BASE_URL;?>pages/cursos">Cursos</a></li>
                        <li class="mr-lg-4 mr-3"><a href="<?php echo BASE_URL;?>pages/ingressar">Ingressar</a></li>
						<li class="mr-lg-4 mr-3">
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">Serviços <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                            <a href="#">Serviços <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul style="box-shadow: 2px 2px 2px #aaa;">
								<li><a href="<?php echo BASE_URL;?>pages/npj">NPJ</a></li>
                            </ul>
                        </li>
						<li class="mr-lg-4 mr-3">
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">Contato <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                            <a href="#">Contato <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul style="box-shadow: 2px 2px 2px #aaa;">
								<li><a href="<?php echo BASE_URL;?>pages/fale_conosco/">Fale Conosco</a></li>
								<li><a href="<?php echo BASE_URL;?>pages/trabalhe_conosco/">Trabalhe Conosco</a></li>
							</ul>
							
                        </li>
                        <li><a href="https://edukante.com/fatima/" target="_blank">Minha NSF</a></li>
                    </ul>
    </nav>
</header>
<!-- //header -->
        <div class="container" style="<?= ($viewData['home'] == false)?'height: 100px;':'';?>">
		<?php if($viewData['home'] !== false):?>
            <!-- banner-text -->
            <div class="banner-text">
                <div class="slider-info" style="text-align: left !important; margin-left: 0px !important;">
					<h3>MATRICULAS ABERTAS!</h3>
					<h4 style="color: #fff;">Inscreva-se Abaixo</h4>
				</div>
            </div>
			
				<div class="banner-top pb-5">
					<div class="row slider-bottom">
						<div class="col-md-3 slider-bottom-lft">
							<h4>Inscreva-se!</h4>
							<!-- <p class="text-white mt-2">Nosso Suporte entrará em contato com você através desses dados</p> -->
						</div>
						<div class="col-md-9 n-right-w3ls">
							<div class="row">
								<div class="col-md-4 form-group news-rt">
									<input class="form-control" type="text" name="nome" placeholder="Nome Completo" required="">
								</div>
								<div class="col-md-4 form-group news-lt">
									<input class="form-control" type="text" name="telefone" placeholder=" Telefone" required="" id="telefone">
								</div>
								<div class="col-md-4 form-group news-last">
									<div class="sbm-it">
										<div class="form-group">
											<input class="form-control submit text-uppercase" type="submit" value="Inscrever">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endif;?>
        </div>
    </div>
	 <!-- //banner-text -->
	 <?php $this->loadViewInTemplate($viewName, $viewData); ?>
<!--footer-->
	<footer>
		<div class="container py-md-4 mt-md-3">
			<div class="row footer-top-w3layouts-agile py-5">
				<div class="col-md-4 footer-grid">
					<div class="footer-title">
						<!-- <h3>About Us</h3> -->
					</div>
					<div class="footer-text">
						<!-- <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. lacinia eget consectetur sed, convallis at tellus.tempus convallis quis ac lectus sit amet nisl tempus convallis quis ac lectus</p> -->
						<img src="<?php echo BASE_URL;?>assets/images/logo-icon.png" style="width: 250px;" />
					</div>
				</div>
				<div class="col-md-4 footer-grid">
					<div class="footer-title">
						<h3>Fale Conosco</h3>
					</div>
					<div class="contact-info">
					<!-- <h4>Location :</h4>
					<p>0926k 4th block building, king Avenue, New York City.</p> -->
					<div class="phone">
						<h4>Contatos: </h4>
						<p>Telefone : (27) 3376-1305</p>
						<p>Email : <a href="secretaria@nsf.vix.br">secretaria@nsf.vix.br</a></p>
					</div>
				</div>
				</div>
				<div class="col-md-4 footer-grid">
					<div class="footer-title">
						<h3>Links Importantes</h3>
					</div>

					<div class="row">
						<div class="col-md-6">
							<ul style="color: #fff;">
								<li><a href="<?php echo BASE_URL?>">Home</a></li>
								<li><a href="<?php echo BASE_URL?>">Cursos</a></li>
								<li><a href="<?php echo BASE_URL?>">Ingressar</a></li>
								<li><a href="<?php echo BASE_URL?>">NPJ</a></li>
							</ul>
						</div>
						<div class="col-md-6">
						<ul style="color: #fff;">
								<li><a href="<?php echo BASE_URL?>">Trabalhe Conosco</a></li>
								<li><a href="<?php echo BASE_URL?>">Fale Conosco</a></li>
								<li><a href="<?php echo BASE_URL?>">Minha NSF</a></li>
							</ul>
						</div>
					</div>

					<!-- <div class="footer-list">
						<div class="flickr-grid">
							<a href="services.html">
								<img src="<?php echo BASE_URL;?>assets/images/g1.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="services.html">
								<img src="<?php echo BASE_URL;?>assets/images/g2.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="services.html">
								<img src="<?php echo BASE_URL;?>assets/images/g3.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="services.html">
								<img src="<?php echo BASE_URL;?>assets/images/g4.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="services.html">
								<img src="<?php echo BASE_URL;?>assets/images/g5.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="services.html">
								<img src="<?php echo BASE_URL;?>assets/images/g6.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="services.html">
								<img src="<?php echo BASE_URL;?>assets/images/g7.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="services.html">
								<img src="<?php echo BASE_URL;?>assets/images/g9.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="services.html">
								<img src="<?php echo BASE_URL;?>assets/images/g8.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div> -->
				
			</div>
		</div>
	</footer>
	<!---->
	<div class="copyright py-3">
		<div class="container">
			<div class="copyrighttop">
				<ul>
					<li>
						<h4>Siga-nos nas redes sociais:</h4>
					</li>
					<li>
						<a href="https://www.facebook.com/nsfvix/" target="_blank">
							<span class="fa fa-facebook"></span>
						</a>
					</li>
					<!-- <li>
						<a href="#">
							<span class="fa fa-twitter"></span>
						</a>
					</li> -->
					<li>
						<a href="https://www.google.com.br/maps/place/Faculdade+NSF/@-20.2962745,-40.306829,17z/data=!3m1!4b1!4m5!3m4!1s0xb817e138be6af5:0x220ba4834f4340f0!8m2!3d-20.2962745!4d-40.3046403?hl=pt-BR" target="_blank">
							<span class="fa fa-google-plus"></span>
						</a>
					</li>
					<!-- <li>
						<a href="#">
							<span class="fa fa-pinterest"></span>
						</a>
					</li> -->
				</ul>
			</div>
			<div class="copyrightbottom">
				<p>© <?php echo date('Y');?> NSF. Todos os Direitos Reservados | Design by
					<a href="https://cosersalvador.com/">Grupo Coser Salvador</a>
				</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<!-- //footer -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous"></script>

<script>
	$('#telefone').mask('(00) 0000-0000');
</script>
</body>
</html>