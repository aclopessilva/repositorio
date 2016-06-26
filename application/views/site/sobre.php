<div class="text-center">
	<h3>
		<i><?php echo("$sobre->sobreMsgInicial")?></i>
	</h3>

	<img src="<?php echo base_url($sobre->sobreFoto)?>"
		class="img-responsive thumbnail center-block" width="200">
	<table class="table table-condensed">
		<tr>
			<td>Nome:</td>
			<td><b><?php echo("$sobre->sobreNomeCompleto")?></b></td>
		</tr>
		<tr>
			<td>Dados basicos:</td>
			<td><b><?php echo("$sobre->sobreDadosBasicos")?></b></td>
		</tr>
		<tr>
			<td>Resumo:</td>
			<td><b><?php echo("$sobre->sobreResumo")?></b></td>
		</tr>
		<tr>
			<td>Metas:</td>
			<td><b><?php echo("$sobre->sobreMetas")?></b></td>
		</tr>
		<tr>
			<td>Hobbies:</td>
			<td><b><?php echo("$sobre->sobreHobbies")?></b></td>
		</tr>
	</table>
</div>