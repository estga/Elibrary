<div class="intro-section single-cover" id="home-section">
<div class="slide-1" style="background-image:url('<?php echo base_url(); ?>/images/biblioteca12.jpg');" data-stellar-background-ratio="0.5">
<div class="container">
<div class="row align-items-center">
<div class="col-12">
<div class="row justify-content-center align-items-center text-center">

    <div class="col-lg-6">
        <h1 data-aos="fade-up" data-aos-delay="100">Mi Perfil</h1>
    </div>

</div>
</div>
</div>
</div>
</div>
</div>





<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="text-center display-4"><?php echo $this->session->userdata('nombre') . ' ' . $this->session->userdata('apellido'); ?></h3>
                    </div>
                    <div class="panel-body lead">
                        <div class="row">
                            <!-- <div class="col-sm-4">
                                <img alt="User Pic" src="<?php echo base_url('/uploads/carteles/') . $fila->cartel; ?>" class="img-circle img-responsive">
                            </div> -->
                            <div class="col-sm-8">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Usuario:</td>
                                                <td><?php echo $this->session->userdata('nombre') . ' ' . $this->session->userdata('apellido'); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Dirección:</td>
                                                <td><?php echo $this->session->userdata('direccion'); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Teléfono:</td>
                                                <td><?php echo $this->session->userdata('telefono'); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Correo:</td>
                                                <td><a href="mailto:<?php echo $this->session->userdata('correo'); ?>"><?php echo $this->session->userdata('correo'); ?></a></td>
                                            </tr>
                                            <tr>
                                                <td>Contraseña:</td>
                                                <td><?php echo $this->session->userdata('pass'); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Socio desde:</td>
                                                <td><?php echo date("d/m/Y", strtotime($this->session->userdata('fecha'))); ?></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<!-- <div class="intro-section" id="home-section">
<div class="slide-1" style="background-image:url('<?php echo base_url(); ?>/images/biblioteca12.jpg');" data-stellar-background-ratio="0.5">
<div class="container">
<div class="row align-items-center">
<div class="col-12">
<div class="row align-items-center">


    <?php if($this->session->userdata('logged_in') == FALSE){ ?>
    
    		<div class="container">
    		    <h1 class="display-4">No hay usuario</h1>
    		</div>
    
    <?php } else { ?>
    
    	<div class="container">
    			<div class="container">
    			    <h1 class="display-4">Mi Perfil</h1>
    			</div>
    		<table class="table table-bordered text-white lead">
    			<thead>
    				<tr>
    					<th>Nombre</th>
    					<th>Apellido</th>
    					<th>Correo</th>
    					<th>Contraseña</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Fecha de registro</th>
    				</tr>
    			</thead>
    			<tbody>
    				<tr>
    					<td><?php echo $this->session->userdata('nombre'); ?></td>
    					<td><?php echo $this->session->userdata('apellido'); ?></td>
    					<td><?php echo $this->session->userdata('correo'); ?></td>
    					<td><?php echo $this->session->userdata('pass'); ?></td>
    					<td><?php echo $this->session->userdata('direccion'); ?></td>
                        <td><?php echo $this->session->userdata('telefono'); ?></td>
    					<td><?php echo $this->session->userdata('fecha'); ?></td>
    				</tr>
    				<!-- <a type="button" class="btn btn-success" href="<?php echo base_url("modificar_perfil/$row->id"); ?>">Cambiar Correo o Contraseña</a> -->
    			</tbody>
    		</table>	            
    	</div>
    
    <?php } ?>
</div>
</div>
</div>
</div>
</div>
</div> -->