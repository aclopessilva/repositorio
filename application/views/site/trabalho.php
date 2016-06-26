<div class="text-center">
	<h3>
		<i><?php echo("What have I done so far?")?></i>
	</h3>

	<img src="<?php echo base_url('images/work-life-fusion.jpg')?>"
		class="img-responsive thumbnail center-block" width=150>

	<table class="table table-condensed">
		<tr>
			<td>Projetos realizados:</td>
			<td><b><?php echo("$trabalho->trabProjReal")?></b></td>
		</tr>
		<tr>
			<td>Projetos futuros:</td>
			<td><b><?php echo("$trabalho->trabProjFut")?></b></td>
		</tr>
	</table>
</div>