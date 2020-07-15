<div class = "clearfix"></div>
<div class="widget widget_latestpost">
    <h3 class="title"><span>Serviços</span></h3>
    <div class="latest-posts widget">
        <div class="latest-post clearfix mg">
              <a href="diario.php" class="btn-service btn-azul btn-s-lg">
                <span  class="fa fa-file-pdf-o"></span>
                <span>Diário Oficial<img src="images/DIARIO_DL.jpg"> </span>
            </a>
            <a href="transparencia.php" class="btn-service btn-verde btn-s-lg">
                <span  class="fa fa-search"></span>
                <span>Portal da Transparência</span>
            </a>
            <a href="./esic/" class="btn-service btn-azul btn-s-lg">
                <span  class="fa fa-info-circle"></span>
                <span>E-Sic</span>
            </a>
            <a href="#" class="btn-service btn-verde btn-s-lg">
                <span  class="fa fa-usd"></span>
                <span>Contracheque</span>
            </a>
            <?php
                $read = new Read;
                $read->ExeRead("prefeitura", "WHERE precodigo = :precodigo" ,  "precodigo=". PRECODIGO); //
				$prefeitura = $read->getResult()[0];
				//$prebrasao = $prefeitura_inicio['prebrasao'];
				//var_dump($read);
				
       // $cidade = new Cidade;
       // $prefeitura = new Prefeitura($cidade->precodigo);
       
      ?>
            <a href="http://www.cmamarante.municipiaui.org/" class="btn-service btn-cinza btn-s-lg" title="Acesse a Câmara Municipal de: <?= $prefeitura['prenome'] ?>" target="_blank">
                <span  class="fa fa-institution"></span>
                <span>Câmara Municipal</span>
            </a>
           
        </div>

    </div>
</div>