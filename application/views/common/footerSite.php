
</div>

</div>
<!-- fim do 2 bloco -->
<div class="col-md-2"></div>
<!-- 3 bloco -->
</div>
<!-- fim do row-->


<!-- linha cinza-->
<div style="background-color: gray; height: 10px"></div>


<!-- footer msg -->
<div class="text-center">
	<div id="footer">
		<em><?php echo "AnaClara. NP:156094-8. LP2/2016 - ADS/IFSPGRU"?></em>
	</div>


	<!-- download link -->
	<div class=" hidden-xs">
		<div>
			<a href="<?php echo site_url('file/resumopdf')?>">Download my resume</a>
		</div>
	</div>
</div>

<!-- se tiver mensagem vou mostrar um alert -->

<?php
if ($this->session->flashdata ( 'mensagem' )) {
	?>
<script>
	    alert("<?php echo $this->session->flashdata ( 'mensagem' )?>");
	</script>
<?php
}
?>

</body>
</html>

<!-- class="navbar navbar-default navbar-fixed-bottom" -->