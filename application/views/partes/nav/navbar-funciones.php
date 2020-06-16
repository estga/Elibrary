<?php if(($this->session->userdata('logged_in')) and ($tipo == '1')) { ?>
    <div class="dropdown">
	    <button class="btn btn-secondary dropdown-toggle bg-dark fondo2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		    Hola <?php echo $nombre ;?>
	    </button>
	    <div class="dropdown-menu bg-dark rounded fondo2">
		    <a class="text-white p-3 mb-2" href="<?php echo base_url('admin');?>">Administración</a> <br><br>
		    <a class="text-white p-3 mb-2" href="<?php echo base_url('logout');?>">Salir</a>
	    </div>
    </div>

<?php } else if(($this->session->userdata('logged_in')) and ($tipo == '0')) { ?>
    <div class="dropdown">
	    <button class="btn btn-secondary dropdown-toggle bg-dark fondo2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		    Hola <?php echo $nombre ;?>
	    </button>
	    <div class="dropdown-menu bg-dark rounded fondo2">
		    <a class="text-white p-3 mb-2" href="<?php echo base_url("perfil/$id");?>">Mi Perfil</a> <br><br>
		    <a class="text-white p-3 mb-2" href="<?php echo base_url('logout');?>">Salir</a>
	    </div>
    </div>
<?php } ?>