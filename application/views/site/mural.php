<div class="text-center">
    <div class="panel panel-info" style="margin-bottom: 0px">

        <div class="panel-heading">MURAL DE VISITAS</div>

        <br> <img
            src="<?php echo base_url('images/littlepinkmoto-contact.png') ?>"
            class="img-responsive thumbnail center-block" width=150>

        <h4>
            <?php echo("Entre em contato comigo para duvidas, sugestoes ou criticas ;)") ?>
        </h4>

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
</div>

