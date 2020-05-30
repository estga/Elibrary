<div class="site-section bg-light" id="contact-section">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-7">
    <h2 class="section-title mb-3">Message Us</h2>
    <p class="mb-5">Natus totam voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam temporibus culpa dolore molestias blanditiis consequuntur sunt nisi.</p>

	<?php echo validation_errors(); ?>
    <div data-aos="fade" role="form">
		<?php echo form_open ('verificacion', ['class' => 'form-group', 'role' => 'form', 'id' => 'form_registro']); ?>
		<fieldset>
			<div class="form-group row">
        	    <div class="col-md-6 mb-3 mb-lg-0">
					<?php echo form_input (['name' => "nombre",
											'id' => "nombre",
											'type' => "text",
											'class' => "form-control",
											'placeholder' => "First name",
											'value' => set_value('nombre')]); ?>
        	    </div>
        	    <div class="col-md-6">
					<?php echo form_input (['name' => "apellido",
											'id' => "apellido",
											'type' => "text",
											'class' => "form-control",
											'placeholder' => "Last name",
											'value' => set_value('apellido')]); ?>
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
        	    </div>
        	</div>

			<div class="form-group row">
        	    <div class="col-md-12">
					<?php echo form_input (['name' => "tema",
											'id' => "tema",
											'type' => "text",
											'class' => "form-control",
											'required'=>'required',
											'placeholder' => "Subjet",
											'value' => set_value('tema')]); ?>
        	    </div>
        	</div>
		
        	<div class="form-group row">
        	    <div class="col-md-12">
					<?php echo form_input (['name' => "consulta",
											'id' => "consulta",
											'type' => "text",
											'class' => "form-control",
											'required'=>'required',
											'placeholder' => "Write your message here.",
											'value' => set_value('consulta')]); ?>
        	    </div>
        	</div>

        	<div class="form-group row">
        	    <div class="col-md-6">
					<?php echo form_submit ('submit', 'Send Message',"class='btn btn-primary btn-block'"); ?>
        	    </div>
        	</div>
			<?php echo form_close();?>

		</fieldset>
    </div>
</div>
</div>
</div>
</div>