
<div class="text-right">
    <a href="<?php echo site_url('login/logout') ?>" class="btn btn-danger">Logout</a><br>

</div>
<!--botao comentarios --> 
<div class="text-left">
    <a href="<?php echo site_url('admin')?>" class="btn btn-default" >Voltar</a>
</div>
<div class="panel panel-info">
    <div class="panel-heading">Comentarios</div>
    <div class="panel-body"> 
        
        <?php foreach ($comentarios as $comentario): ?>

        <div class="jumbotron">
            <h3>NOME: <?php echo $comentario['contNome'] ?></h3>
            <h4>Email: <?php echo $comentario['contEmail'] ?></h4>
            <h5>Assunto: <?php echo $comentario['contAssunto'] ?></h5>
            <div class="main">
                <?php echo $comentario['contComent'] ?>
            </div>
</div>
        <?php endforeach ?>
    </div>

</div>

