<div class="intro-section" id="home-section">
<div class="slide-1" style="background-image:url('<?php echo base_url(); ?>/images/biblioteca12.jpg');" data-stellar-background-ratio="0.5">
<div class="container">
<div class="row align-items-center">
<div class="col-12">
<div class="row align-items-center">

    <div class="col-lg-6 mb-4">
        <h1 data-aos="fade-up" data-aos-delay="100">Que te ofrecemos?</h1>
        <p class="mb-4" data-aos="fade-up" data-aos-delay="200">Un servicio de información profesional basado en prácticas y normas bibliotecológicas. Un equipo dedicado a encontrar y brindar la mejor solución de información para vos. Nos esforzamos para que, si sos estudiante, profesional, empleado o investigador, nuestro servicio cubra rápidamente tus expectativas.</p>
		<!-- Button trigger modal -->
		<p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary py-3 px-5 btn-pill" data-toggle="modal" data-target="#signup">Se parte!</a></p>
    </div>

	<!-- Modal -->
    <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="form">
			<div class="modal-content">

				<div class="modal-header">
        			<h3 class="modal-title h4 text-black mb-4">Registro</h3>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>        				
					</button>
      			</div>

				<div class="modal-body">
                    <?php echo validation_errors(); ?>
					<div data-aos="fade" role="form">
		                <?php echo form_open ('user_controller/valido_usuario', ['class' => 'form-group', 'role' => 'form']); ?>
			            <div class="form-group row">
        	                <div class="col-md-6 mb-3 mb-lg-0">
					            <?php echo form_input (['name' => "nombre",
											            'id' => "nombre",
											            'type' => "text",
                                                        'class' => "form-control",
                                                        'required'=>'required',
											            'placeholder' => "Nombre",
											            'value' => set_value('nombre')]); ?>
        	                    <?php echo form_error('nombre', '<div class="bg-danger">', '</div>'); ?>
                            </div>
        	                <div class="col-md-6">
					            <?php echo form_input (['name' => "apellido",
											            'id' => "apellido",
											            'type' => "text",
                                                        'class' => "form-control",
                                                        'required'=>'required',
											            'placeholder' => "Apellido",
											            'value' => set_value('apellido')]); ?>
        	                    <?php echo form_error('apellido', '<div class="bg-danger">', '</div>'); ?>
                            </div>
        	            </div>

        	            <div class="form-group row">
        	                <div class="col-md-12">
					            <?php echo form_input (['name' => "correo",
											            'id' => "correo",
											            'type' => "email",
											            'class' => "form-control",
											            'required'=>'required',
											            'placeholder' => "Email",
											            'value' => set_value('correo')]); ?>
        	                    <?php echo form_error('correo', '<div class="bg-danger">', '</div>'); ?>
                            </div>
        	            </div>

        	            <div class="form-group row">
        	                <div class="col-md-12">
					            <?php echo form_password (['name' => "password",
											               'id' => "password",
                                                           'class' => "form-control",
											               'required'=>'required',
											               'placeholder' => "Ingrese una contraseña"]); ?>
        	                    <?php echo form_error('pass', '<div class="bg-danger">', '</div>'); ?>
                            </div>
        	            </div>

        	            <div class="form-group row">
        	                <div class="col-md-6">
					            <?php echo form_submit ('submit', 'Registrarme',"class='btn btn-primary btn-block'"); ?>
        	                </div>
        	            </div>
			            <?php echo form_close();?>

                    </div>
				</div>

			</div>
		</div>
    </div>
    
    <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
        <div class="form-box">
            <h3 class="h4 text-black mb-4">Ingresar</h3>
            <?php echo form_open('user_controller/iniciar_sesion_validacion', ['class' => 'form-signin', 'role' => 'form']); ?>

            <div class="form-group">
                <?php echo form_input(['name' => "correo",
										'id' => "correo",
										'type' => "email",
										'class' => "form-control",
										'required'=>'required',
										'placeholder' => "Email",
										'value' => set_value('correo')]); ?>
            </div>

            <div class="form-group">
                <?php echo form_password(['name' => "password",
										  'id' => "password",
                                          'class' => "form-control",
										  'required'=>'required',
										  'placeholder' => "Ingrese una contraseña"]); ?>
            </div>

            <?php echo validation_errors('<div class="bg-danger">', '</div> <br>'); ?>

            <?php echo form_submit('inicio_sesion', 'Iniciar sesión',"class='btn btn-primary btn-pill'"); ?>
            <?php echo form_close(); ?>
        </div>
    </div>

</div>
</div>
</div>
</div>
</div>
</div>
