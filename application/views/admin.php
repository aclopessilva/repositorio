
<div class="text-right">
	<a href="<?php echo site_url('login/logout')?>" class="btn btn-danger">Logout</a><br>

</div>

<div class="panel panel-info">
	<div class="panel-heading">SOBRE</div>
	<div class="panel-body">
		<form action="<?php echo site_url('admin/sobre')?>" method="post"
			class="form-horizontal" role="form">

			<div class="form-group">
				<label class="control-label col-md-2" for="sobreMsgInicial">Mensagem
					inicial:</label>
				<div class="col-md-10">
					<input class="form-control" type="text" name="sobreMsgInicial"
						id="sobreMsgInicial" value="<?php echo $sobre->sobreMsgInicial?>" />
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-md-2" for="sobreFoto">Foto:</label>
				<div class="col-md-10">
					<input class="form-control" type="text" name="sobreFoto"
						id="sobreFoto" value="<?php echo $sobre->sobreFoto?>" />
				</div>
			</div>



			<div class="form-group">
				<label class="control-label col-md-2" for="sobreNomeCompleto">Nome
					completo:</label>
				<div class="col-md-10">
					<input class="form-control" type="text" name="sobreNomeCompleto"
						id="sobreNomeCompleto"
						value="<?php echo $sobre->sobreNomeCompleto?>" />
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-md-2" for="sobreDadosBasicos">Dados
					basicos:</label>
				<div class="col-md-10">
					<input class="form-control" type="text" name="sobreDadosBasicos"
						id="sobreDadosBasicos"
						value="<?php echo $sobre->sobreDadosBasicos?>" />
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-md-2" for="sobreResumo">Resumo:</label>
				<div class="col-md-10">
					<input class="form-control" type="text" name="sobreResumo"
						id="sobreResumo" value="<?php echo $sobre->sobreResumo?>" />
				</div>
			</div>


			<div class="form-group">
				<label class="control-label col-md-2" for="sobreMetas">Metas:</label>
				<div class="col-md-10">
					<input class="form-control" type="text" name="sobreMetas"
						id="sobreHobbies" value="<?php echo $sobre->sobreMetas?>" />
				</div>
			</div>


			<div class="form-group">
				<label class="control-label col-md-2" for="sobreHobbies">Hobbies:</label>
				<div class="col-md-10">
					<input class="form-control" type="text" name="sobreHobbies"
						id="sobreHobbies" value="<?php echo $sobre->sobreHobbies?>" />
				</div>
			</div>


			<div class="col-sm-offset-2 col-sm-10">
				<button type=submit class="btn btn-default" type="
					submit"
					name="atualizar" id="atualizar">Atualizar</button>
			</div>
		</form>
	</div>
</div>


<div class="panel panel-info">
	<div class="panel-heading">CARREIRA</div>
	<div class="panel-body">
		<form action="<?php echo site_url('admin/carreira')?>" method="post"
			class="form-horizontal" role="form">

			<div class="form-group">
				<label class="control-label col-md-2" for="carrInicial">Mensagem
					inicial:</label>
				<div class="col-md-10">
					<input class="form-control" type="text" name="carrInicial"
						id="carrInicial" value="<?php echo $carreira->carrInicial?>" />
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-md-2" for="carrFormAca">Formacao
					academica:</label>
				<div class="col-md-10">
					<input class="form-control" type="text" name="carrFormAca"
						id="carrFormAca" value="<?php echo $carreira->carrFormAca?>" />
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-md-2" for="carrIdiomas">Idiomas:</label>
				<div class="col-md-10">
					<input class="form-control" type="text" name="carrIdiomas"
						id="carrIdiomas" value="<?php echo $carreira->carrIdiomas?>" />
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-md-2" for="carrExp">Experiencia</label>
				<div class="col-md-10">
					<input class="form-control" type="text" name="carrExp"
						id="carrExp" value="<?php echo $carreira->carrExp?>" />
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-md-2" for="carrExpInt">Experiencia
					internacional:</label>
				<div class="col-md-10">
					<input class="form-control" type="text" name="carrExpInt"
						id="carrExpInt" value="<?php echo $carreira->carrExpInt?>" />
				</div>
			</div>

			<div class="col-sm-offset-2 col-sm-10">
				<button type=submit class="btn btn-default" type="
					submit"
					name="atualizar" id="atualizar">Atualizar</button>
			</div>
		</form>
	</div>
</div>



<div class="panel panel-info">
	<div class="panel-heading">TRABALHO</div>
	<div class="panel-body">
		<form action="<?php echo site_url('admin/trabalho')?>" method="post"
			class="form-horizontal" role="form">

			<div class="form-group">
				<label class="control-label col-md-2" for="trabProjReal">Projetos
					realizados:</label>
				<div class="col-md-10">
					<input class="form-control" type="text" name="trabProjReal"
						id="trabProjReal" value="<?php echo $trabalho->trabProjReal?>" />
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2" for="trabProjFut">Projetos
					futuros:</label>
				<div class="col-md-10">
					<input class="form-control" type="text" name="trabProjFut"
						id="trabProjFut" value="<?php echo $trabalho	->trabProjFut?>" />
				</div>
			</div>

			<div class="col-sm-offset-2 col-md-2">
				<button type=submit class="btn btn-default" type="
					submit"
					name="atualizar" id="atualizar">Atualizar</button>
			</div>

		</form>
	</div>

</div>