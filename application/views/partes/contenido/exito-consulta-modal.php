<div class="modal fade" id="exito-consulta-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<!-- Trigger the modal with a button -->
	<button type="button" class="btn btn-info btn-md" id="close-modal">Hide</button>
	<div class="modal-dialog" role="document">
		<div class="modal-content">

			<div class="modal-header">
       			<h3 class="modal-title h4 text-black mb-4">Consulta</h3>
       			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
       				<span aria-hidden="true">&times;</span>        				
				</button>
   			</div>

			<div class="modal-body">
				<p class="mb-4" data-aos="fade-up">Su consulta fue <strong>registrada</strong> con <strong>EXITO</strong>.</p>
				<p class="mb-4" data-aos="fade-up">Le estaremos respondiendo a la brevedad.</p>
				<br>
				<p class="mb-4" data-aos="fade-up">Muchas Gracias!</p>
			</div>

		</div>
	</div>
</div>

<script>
$(document).ready(function(){
  // Show the Modal on load
  $("#exito-consulta-modal").modal("show");

  // Hide the Modal
  $("#close-modal").click(function(){
    $("#exito-consulta-modal").modal("hide");
  });
});
</script>