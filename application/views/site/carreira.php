<div class="text-center">
	<h3>
		<i><?php echo("$carreira->carrInicial")?></i>
	</h3>

<img src="<?php echo base_url('images/career.jpg')?>" class="img-responsive thumbnail center-block" width=150>
		
	<table class="table table-condensed">
		<tr>
			<td>Formacao academica:</td>
			<td><b><?php echo("$carreira->carrFormAca")?></b></td>
		</tr>
		<tr>
			<td>Idiomas:</td>
			<td><b><?php echo("$carreira->carrIdiomas")?></b></td>
		</tr>
		<tr>
			<td>Experiencias:</td>
			<td><b><?php echo("$carreira->carrExp")?></b></td>
		</tr>
		<tr>
			<td>Experiencia internacional:</td>
			<td><b><?php echo("$carreira->carrExpInt")?></b></td>
		</tr>
	</table>

</div>