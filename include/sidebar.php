<!-- clima -->
<div id="sidebar" class="span4">
    <?php include_once 'menu-servicos.php'; ?> 
    <div class="widget widget_latestpost">
        <?php
        $cidade = new Cidade;
        $prefeitura = new Prefeitura($cidade->precodigo);
        ?>
        <h3 class="title"><span>Clima</span></h3>
        <div class="latest-posts" style="text-align: center;">
            <iframe allowtransparency="true" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no" src="http://www.cptec.inpe.br/widget/widget.php?p=<?= trim($prefeitura->preclima) ?>&w=h&c=00AAB5&f=ffffff" height="200px" width="215px"></iframe>
            <noscript>Previs&atilde;o de <a href="http://www.cptec.inpe.br/cidades/tempo/<?= trim($prefeitura->preclima) ?>"><?= $prefeitura->prenome ?></a> <a href="http://www.cptec.inpe.br">CPTEC/INPE</a></noscript><!-- Widget Previs&atilde;o de Tempo CPTEC/INPE -->            
        </div>
    </div>

    <?php include_once 'menu-video.php'; ?>

</div><!-- sidebar -->