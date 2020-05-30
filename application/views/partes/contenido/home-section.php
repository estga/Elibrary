<div class="intro-section" id="home-section">
<div class="slide-1" style="background-image:url('images/biblioteca12.jpg');" data-stellar-background-ratio="0.5">
<div class="container">
<div class="row align-items-center">
<div class="col-12">
<div class="row align-items-center">

    <div class="mb-4">
        <h1 data-aos="fade-up" data-aos-delay="100">Objective</h1>
        <p class="mb-4" data-aos="fade-up" data-aos-delay="200">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni eum odio consectetur distinctio molestias, facilis minus ipsum ut architecto minima quibusdam! Minima praesentium quidem soluta expedita eligendi natus fugit autem similique! Debitis voluptatum eligendi, quas tempore consequatur voluptatem ad ratione, illum architecto culpa ut! Sit, nesciunt beatae. Ullam, possimus reprehenderit.</p>
		<!-- Button trigger modal -->
		<p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary py-3 px-5 btn-pill" data-toggle="modal" data-target="#signup">Be Part Now</a></p>
    </div>

	<!-- Modal -->
    <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<div class="modal-header">
        			<h3 class="modal-title h4 text-black mb-4">Sign Up</h3>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>        				
					</button>
      			</div>

				<div class="modal-body">
					<form action="" method="post" class="form-box">
                		<?php echo validation_errors (); ?>
						<?php echo form_open (); ?>
               			<div class="form-row">
							<div class="form-group col">
                   				<input type="text" class="form-control" placeholder="Apellido" value="<?php echo set_value('apellido'); ?>">
               				</div>
               				<div class="form-group col">
                    			<input type="text" class="form-control" placeholder="Nombre" value="<?php echo set_value('nombre'); ?>" value="<?php echo set_value('apellido'); ?>">
							</div>
						</div>
						<div class="form-row">
               				<div class="form-group col">
               	    			<input type="text" class="form-control" placeholder="Email" value="<?php echo set_value('email'); ?>">
               				</div>
               				<div class="form-group col">
               	    			<input type="text" class="form-control" placeholder="Usuario" value="<?php echo set_value('username'); ?>">
							</div>
						</div>
               			<div class="form-group">
                   			<input type="password" class="form-control" placeholder="Password" value="<?php echo set_value('pass'); ?>">
               			</div>

						<div class="form-group" data-aos="fade-up">
                   			<input type="submit" class="btn btn-primary btn-pill" value="Sign up">
						</div>
						<?php echo form_close (); ?>
					</form>
				</div>

			</div>
		</div>
	</div>

</div>
</div>
</div>
</div>
</div>
</div>
