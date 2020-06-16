<div class="site-mobile-menu site-navbar-target">
	<div class="site-mobile-menu-header">
		<div class="site-mobile-menu-close mt-3">
        	<span class="icon-close2 js-menu-toggle"></span>
    	</div>
	</div>
	<div class="site-mobile-menu-body"></div>
</div>
    
<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

	<div class="container-fluid">
    	<div class="d-flex align-items-center">
        	<div class="site-logo mr-auto w-25">
                <a href="<?php echo base_url('welcome'); ?>">
                    ELibrary
                </a>
            </div>
  
			<div class="mx-auto text-center">
          		<nav class="site-navigation position-relative text-right" role="navigation">
            		<ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
              			<li><a href="<?php echo base_url('welcome'); ?>" class="icon-home"></a></li>
              			<li><a href="#home-section" class="icon-arrow-up"></a></li>
            		</ul>
          		</nav>
        	</div>
  
        	<div class="ml-auto w-25">
          		<nav class="site-navigation position-relative text-right" role="navigation">
            		<ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
              			<li class="cta"><a href="<?php echo base_url('welcome/consultas'); ?>" class="nav-link"><span>Contáctanos</span></a></li>
            		</ul>
          		</nav>
          		<a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
        	</div>
      	</div>
    </div>

    <div class="container-fluid">
    	<div class="d-flex align-items-center">

            <?php if(($this->session->userdata('logged_in')) and ($this->session->userdata('tipo') == '1')) { ?>
                <div class="dropdown">
	                <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                <h5 style = "font-family:georgia,garamond,serif;font-size:20px;"><?php echo $this->session->userdata('nombre'); ?></h5>
	                </button>
	                <div class="dropdown-menu bg-dark rounded">
                        <a class="text-white p-3 mb-2" href="<?php echo base_url("welcome/perfil");?>">Mi Perfil</a>
                        <div class="dropdown-divider"></div>
		                <a class="text-white p-3 mb-2" href="<?php echo base_url('user_controller/listar_usuarios');?>">Gestionar Socios</a>
                        <a class="text-white p-3 mb-2" href="<?php echo base_url('admin');?>">Gestionar Libros</a>
                        <div class="dropdown-divider"></div>
		                <a class="text-white p-3 mb-2" href="<?php echo base_url('user_controller/logout');?>">Salir</a>
	                </div>
                </div>

            <?php } else if(($this->session->userdata('logged_in')) and ($this->session->userdata('logged_in')) and ($this->session->userdata('tipo') == '0')) { ?>
                <div class="site-logo mr-auto w-25 dropdown">
                    <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                <h5 style = "font-family:georgia,garamond,serif;font-size:20px;"><?php echo $this->session->userdata('nombre'); ?></h5>
	                </button>
                    <div class="dropdown-menu bg-dark rounded">
			            <a class="text-white p-3 mb-2" href="<?php echo base_url("welcome/perfil");?>">Mi Perfil</a>
                        <div class="dropdown-divider"></div>
			            <a class="text-white p-3 mb-2" href="<?php echo base_url('user_controller/logout');?>">Salir</a>
			        </div>
                </div>
            <?php } ?>
        </div>
    </div>
        
</header>
