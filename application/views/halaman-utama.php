<!DOCTYPE html>
<html lang="en">
<head>
    <title>Azhar.com</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootstrap 4 landing page template for developers and startups">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css');?>">
    <!-- Global CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css?<?= time()?>">   
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styleshu.css">
    
</head> 

<body>
    <!-- ******HEADER****** --> 
    <header id="header" class="header">  
        <div class="container">       
            <h1 class="logo">
                <a class="scrollto" href="#hero">
                    <span class="logo-icon-wrapper"><img class="logo-icon" src="assets/images/logo-icon.svg" alt="icon"></span>
                    <span class="text"><span class="highlight">Azhar</span>.com</span></a>
            </h1><!--//logo-->
            <nav class="main-nav navbar-expand-md float-right navbar-inverse" role="navigation">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!--//nav-toggle-->
                
                <div id="navbar-collapse" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"><a class="active nav-link scrollto" href="#about">About</a></li>                                                                    
                        <li class="nav-item"><a class="nav-link scrollto" href="#team">Team</a></li>              
                        <li class="nav-item"><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </nav><!--//main-nav-->                     
        </div><!--//container-->
    </header><!--//header-->
    
    <div id="hero" class="hero-section">
        
        <div id="hero-carousel" class="hero-carousel carousel carousel-fade slide" data-ride="carousel" data-interval="10000">                    
            
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li class="active" data-slide-to="0" data-target="#hero-carousel"></li>
				<li data-slide-to="1" data-target="#hero-carousel"></li>
				<li data-slide-to="2" data-target="#hero-carousel"></li>
			</ol>
			
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
    			
				<div class="carousel-item item-1 active">
					<div class="item-content container">
    					<div class="item-content-inner">
    				        
				            <h2 class="heading">Tugas Akhir  <br class="d-none d-md-block">Web Programming II</h2>
				            <p class="intro">Dikembangkan/dibuat oleh Azhar Ryad Npm 17 111 324.</p>				            
    				        
    					</div><!--//item-content-inner-->
					</div><!--//item-content-->
				</div><!--//item-->
				
				<div class="carousel-item item-2">
					<div class="item-content container">
						<div class="item-content-inner">    				        
				            <h2 class="heading">Sudah terdaftar menjadi mahasiswa?</h2>
				            <p class="intro">Login Sekarang!</p>
				            <a class="btn btn-primary btn-cta" href="<?= base_url('Login_c');?>" target="_blank">Login Sekarang</a>
    				        
    					</div><!--//item-content-inner-->
					</div>
				</div><!--//item-->
				
				<div class="carousel-item item-3">
					<div class="item-content container">
						<div class="item-content-inner">
    				        
				            <h2 class="heading">Belum terdaftar menjadi mahasiswa?</h2>
				            <p class="intro">Daftar Sekarang!</p>
				            <a class="btn btn-primary btn-cta" href="<?= base_url('register');?>">Daftar Sekarang</a>
    				        
    					</div><!--//item-content-inner-->
					</div>
				</div><!--//item-->
			</div><!--//carousel-inner-->

		</div><!--//carousel-->
    </div><!--//hero-->
    
    <div id="about" class="about-section">
        <div class="container text-center">
            <h2 class="section-title">Sekolah Tinggi Teknologi Bandung</h2>
            <p class="intro">Salah satu Perguruan Tinggi di Kota Bandung yang mencetak mahasiswa berdaya saing dan unggul di bidang Teknologi</p>                    
            <h2 class="section-title">Program Studi</h2>
            <div class="items-wrapper row">
                <div class="item col-md-4 col-12">
                    <div class="item-inner"><!--//figure-holder-->
                        <h3 class="item-title">Desain Komunikasi Visual</h3>
                        <div class="item-desc">
                            Desain Komunikasi Visual (DKV) adalah cabang ilmu desain yang mempelajari konsep komunikasi dan ungkapan kreatif, teknik dan media dengan memanfaatkan elemen-elemen visual ataupun rupa untuk menyampaikan pesan untuk tujuan tertentu (tujuan informasi ataupun tujuan persuasi yaitu mempengaruhi perilaku). 
                        </div><!--//item-desc-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-md-4 col-12">
                    <div class="item-inner"><!--//figure-holder-->
                        <h3 class="item-title">Teknik Informatika</h3>
                        <div class="item-desc">
                            Teknik Informatika adalah salah satu jurusan di fakultas teknik yang mempelajari bagaimana penerapan logika matematika dalam pengelolaan informasi yang dapat meliputi transformasi data atau pengolahan fakta-fakta simbolik dengan memanfaatkan teknologi komputer seoptimal mungkin. </div><!--//item-desc-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-md-4 col-12">
                    <div class="item-inner"><!--//figure-holder-->
                        <h3 class="item-title">Teknik Industri</h3>
                        <div class="item-desc">
                            Teknik Industri adalah suatu bidang keilmuan yang mempelajari bagaimana merancang, mengatur dan mengaplikasikan semua faktor-faktor seperti manusia, mesin, metode, material, lingkungan dan analisis keuangan serta kajian manajerial menjadi suatu sistem dalam lingkup yang berhubungan dengan fungsi industri seperti penelitian dasar, penelitian operasional dll. </div><!--//item-desc-->
                    </div><!--//item-inner-->
                </div><!--//item-->
            </div><!--//items-wrapper-->
        </div><!--//container-->
    </div><!--//about-section-->
    
    
    <div class="team-section" id="team">
        <div class="container text-center">
            <h2 class="section-title">Pengembang</h2>
            <div class="story">
                <p>Website ini saya kembangkan menggunakan template AppKit free bootstrap. dengan tujuan menyelesaikan tugas matakuliah Web Programming II</p>
            </div>
            <div class="members-wrapper row">
                <div class="item col-md-6 col-12">
                    <div class="item-inner">
                        <div class="profile mb-2">
                            <img class="profile-image" src="<?= base_url('assets/dist/img/azhar1.jpg');?>" alt="Azhar Ryad" />
                        </div>
                        
                        <div class="member-content">
                            <h3 class="member-name">Azhar Ryad</h3>
                            <div class="member-title">Full-Stack Coding</div>
                            <ul class="social list-inline">
                                <li class="list-inline-item"><a class="twitter" href="https://twitter.com/Arryad_" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                
                                <li class="list-inline-item"><a class="facebook" href="https://www.facebook.com/SherlockHolmesked" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a class="github" href="https://github.com/arryad" target="_blank"><i class="fab fa-github"></i></a></li>
                                
                            </ul>
                            <div class="member-desc">
                               <p>Azhar adalah seorang mahasiswa sekolah tinggi teknologi bandung yang mengambil jurusan informatika.</p>
                            </div><!--//member-desc-->
                        </div><!--//member-content-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-md-6 col-12">
                    <div class="item-inner">
                        <div class="profile mb-2">
                            <img class="profile-image" src="assets/images/team-2.png" alt="Andri Nugroho, S.Kom." />
                        </div>
                        
                        <div class="member-content">
                            <h3 class="member-name">Andri Nugroho, S.Kom.</h3>
                            <div class="member-title">Pembimbing/Dosen</div>
                            <ul class="social list-inline">
                                <li class="list-inline-item"><a class="twitter" href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#" target="_blank"><i class="fas fa-globe"></i></a></li>
                                <li class="list-inline-item"><a class="github" href="#" target="_blank"><i class="fab fa-github"></i></a></li>
                               
                                
                            </ul>
                            <div class="member-desc">
                                <p>Pak Andri adalah seorang dosen matakuliah Web Programming II yang membimbing saya. </p>
                            </div><!--//member-desc-->
                        </div><!--//member-content-->
                    </div><!--//item-inner-->
                </div><!--//item-->
            </div><!--//members-wrapper-->
        </div>
    </div><!--//team-section-->
        
    <div id="contact" class="contact-section">
        <div class="container text-center">
            <h2 class="section-title">Contact Us</h2>
            <div class="contact-content">
                <p>Kontak saya pada link di bawah bio jika ingin memberi kritik, saran ataupun yang lainnya.</p>
                
            </div>
            <a class="btn btn-cta btn-primary" href="<?= base_url('Login_c');?>">Login Sekarang!</a>
            
        </div><!--//container-->
    </div><!--//contact-section-->
    
    <footer class="footer text-center">
        <div class="container">
            <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">Dikembangkan oleh Azhar Ryad Menggunakan Desain <i class="fas fa-heart"></i><a href="https://themes.3rdwavemedia.com/" target="_blank">Xiaoying Riley</a></small>
            
            
        </div><!--//container-->
    </footer>
     
    <!-- Javascript -->          
    <script type="text/javascript" src="<?= base_url('assets/js/jquery-3.3.1.min.js');?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/jquery-scrollTo/jquery.scrollTo.min.js'); ?>"></script>     
    <script type="text/javascript" src="<?= base_url('assets/js/main.js'); ?>"></script> 
       
</body>
</html> 

