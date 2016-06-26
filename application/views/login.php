<div id="panelLogin" class="text-center">
	<form action="<?php echo site_url('login/auth')?>" method="post"
		class="form-horizontal" role="form">
		<div class="form-group">
			<label class="control-label col-md-4" for="usuario">Usuario:</label>
			<div class="col-md-4">
				<input type="text" class="form-control" name="usuario" id="usuario"
					placeholder="Entre com seu usuario" />
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-4" for="senha">Senha:</label>
			<div class="col-md-4">
				<input type="password" class="form-control" name="senha" id="senha"
					placeholder="Entre com sua senha" />
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-4" > </div>
			<div class="col-md-4">
				<button type=submit class="btn btn-default type="
					submit" name="entrar" id="entrar">Entrar</button>
			</div>
		</div>
	</form>
</div>


<?php

if ($this->session->flashdata ( 'mensagem' )) {?>
<div class=text-center>
<?php 	echo $this->session->flashdata ( 'mensagem' )?>
</div><br>
<?php 
}
?>