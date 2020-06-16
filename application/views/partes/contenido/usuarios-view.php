<div class="intro-section single-cover" id="home-section">
<div class="slide-1" style="background-image:url('<?php echo base_url(); ?>/images/img_2.jpg');" data-stellar-background-ratio="0.5">
<div class="container">
<div class="row align-items-center">
<div class="col-12">
<div class="row justify-content-center align-items-center text-center">

    <div class="col-lg-6">
        <h1 data-aos="fade-up" data-aos-delay="100">Lista de usuarios</h1>
        <p data-aos="fade-up" data-aos-delay="200"><a href="#CommentSeccion" class="text-white"><?php echo count($usuarios); ?> Usuarios</a></p>
    </div>

</div>
</div>
</div>
</div>
</div>
</div>
    
<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pt-5">
                    <div class='well'>
                        <div class='table-responsive'>
                            <?php if($usuarios > 0){ ?>
                                <table class="table table-striped table-bordered tabla-funciones text-center">
                                    <thead>
            				            <tr>
            					            <th>Nombre</th>
            					            <th>Apellido</th>
            					            <th>Correo</th>
                                            <th>Direccion</th>
                                            <th>Telefono</th>
                                            <th>Fecha de registro</th>
                                            <th>Tipo de Usuario</th>
                                            <th>Estado</th>
            				            </tr>
            			            </thead>
        
                                    <tbody>
                                        <?php foreach($usuarios as $fila) { ?>
                                            <tr>
            					                <td><?php echo $fila->nombre; ?></td>
            					                <td><?php echo $fila->apellido; ?></td>
            					                <td><?php echo $fila->correo; ?></td>
            					                <td><?php echo $fila->direccion; ?></td>
                                                <td><?php echo $fila->telefono; ?></td>
            					                <td><?php echo date("d/m/Y", strtotime($fila->fecha)); ?></td>
                                                <?php if ($fila->tipo == 0 ) { ?>
                                                    <td><?php echo 'Socio'; ?></td>
                                                <?php } else {?>
                                                    <td><?php echo 'Administrador'; ?></td>
                                                <?php } ?>
                                                <?php if ($fila->estado == 0 ) { ?>
                                                    <td><a class="btn btn-danger" href="#" ><span class="icon-close"></span></a></td>
                                                <?php } else {?>
                                                    <td><a class="btn btn-success" href="#" ><span class="icon-check"></span></a></td>
                                                <?php } ?>
            				                </tr>
                                        <?php } ?>
                                    </tbody>
        
                                </table>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>