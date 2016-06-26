<div class="text-center">
	<div class="panel panel-info" style="margin-bottom: 0px">

		<div class="panel-heading">CONTACT ME</div>

		<br> <img
			src="<?php echo base_url('images/littlepinkmoto-contact.png')?>"
			class="img-responsive thumbnail center-block" width=150>

		<h4>
			<?php echo("Entre em contato comigo para duvidas, sugestoes ou criticas ;)")?>
		</h4>

		<div class="panel-body">
			<form action="<?php echo site_url('site/contatoEnviar')?>"
				method="post" class="form-horizontal" role="form">

				<div class="form-group">
					<label class="control-label col-md-2" for="contNome">Nome:</label>
					<div class="col-md-10">
						<input class="form-control" type="text" name="contNome"
							id="contNome" />
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-md-2" for="contEmail">Email:</label>
					<div class="col-md-10">
						<input class="form-control" type="text" name="contEmail"
							id="contEmail" />
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-md-2" for="contAssunto">Assunto:</label>
					<div class="col-md-10">
						<input class="form-control" type="text" name="contAssunto"
							id="contAssunto" />
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-md-2" for="contComent">Comentario:</label>
					<div class="col-md-10">
						<input class="form-control" type="text" name="contComent"
							id="contComent" />
					</div>
				</div>

				<div class="col-sm-offset-2 col-md-2">
					<button type=submit class="btn btn-default" type="
					submit"
						name="enviar" id="enviar">Enviar</button>
				</div>

			</form>
		</div>
	</div>
</div>

