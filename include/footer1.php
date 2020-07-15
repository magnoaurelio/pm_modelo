<?php
$cidade = new Cidade;
$prefeitura = new Prefeitura($cidade->precodigo);
?>
<footer id="footer" class="row-fluid">
    <div id="footer-widgets" class="container">
        <div class="footer-widget span3 block1">
            <div class="widget widget_latestpost">
                <h3 class="title"><span>Links Importantes</span></h3>
                <div class="latest-posts widget">
                    <ul class="links-importantes">
                        <li><a target="blank" href="http://www.cptec.inpe.br/cidades/tempo/<?= trim($prefeitura->preclima) ?>" title="Clima do Município de: <?= trim($prefeitura->prenome) ?>" class="list-group-item"><img src="portal/files/imagem/clima.gif" width="30" height="25" alt=""/> CLIMA</a><br></li>
                        <li><a target="blank" href="http://www.cidades.ibge.gov.br/xtras/perfil.php?lang=&codmun=<?= $prefeitura->preibge ?>&search=piaui|<?= strtolower(trim($prefeitura->prenome)) ?>"  title="Dados Estatísticos do Município de: <?= trim($prefeitura->prenome) ?>"  class="list-group-item"><img src="portal/files/imagem/logo042.jpg" width="30" height="25" alt=""/> IBGE</a></li>
                        <li><a target="blank" href="http://pi.transparencia.gov.br/"  class="list-group-item"><img src="portal/files/imagem/cgu.jpg" width="30" height="25" alt=""/> Controladoria Geral da União</a></li>
                        <li><a target="blank" href="https://www42.bb.com.br/portalbb/daf/beneficiario,802,4647,4652,0,1.bbx"  class="list-group-item"><img src="portal/files/imagem/bblogo.jpg" width="30" height="25" alt=""/> Banco do Brasil</a></li>
                        <li><a target="blank" href="http://www.caixa.gov.br/"  class="list-group-item"><img src="portal/files/imagem/logo041.jpg" width="30" height="25" alt=""/> Caixa Econômica Federal</a></li>
                        <li><a target="blank" href="http://www.bnb.gov.br/"  class="list-group-item"><img src="portal/files/imagem/logo13.jpg" width="30" height="25" alt=""/> Banco do Nordeste</a></li>
                        <li><a target="blank" href="http://www.correios.com.br/"  class="list-group-item"><img src="portal/files/imagem/logo075.jpg" width="30" height="25" alt=""/> Correios</a></li>
                        <li><a target="blank" href="http://www.tce.pi.gov.br/"  class="list-group-item"><img src="portal/files/imagem/tce.jpg" width="30" height="25" alt=""/> Tribunal de Contas do Estado</a></li>
                        <li><a target="blank" href="http://www.mppi.mp.br/internet/"  class="list-group-item"><img src="portal/files/imagem/mppi.jpg" width="30" height="25" alt=""/> Ministério Público do Piauí</a></li>

                    </ul>

                </div>
            </div>
        </div>

        <div class="footer-widget span3 block2">
            <div class="widget">
                <h3 class="title"><span>Siga a Prefeitura</span></h3>
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcamaradeputados%2F&tabs&width=340&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1824835067764554" width="340" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            </div>
        </div>

        <div class="footer-widget span3 block3">
            <div class="widget">
                <h3 class="title"><span>Palavras Chaves</span></h3>
                <div class="tagcloud">
                    <a href='#'>Transparência</a>
                    <a href='#'>Portal</a>
                    <a href='#'>Institucional</a>
                    <a href='#'>Prefeitura</a>
                    <a href='#'>Notícias</a>
                    <a href='#'>Servidores</a>
                    <a href='#'>Licitações</a>
                    <a href='#'>Contratos</a>
                </div>
            </div>
        </div>

        <div class="footer-widget span3 block4">
            <div class="widget">
                <h3 class="title"><span>Mídias Sociais</span></h3>
                <div class="socmed clearfix">		
                    <ul>
                        <li>
                            <a href="#"><img src="images/rss-icon.png" alt=""></a>
                            <h4>RSS</h4>
                            <p>Inscritos</p>
                        </li>
                        <li>
                            <a href="#"><img src="images/twitter-icon.png" alt=""></a>
                            <h4>37005</h4>
                            <p>Seguidores</p>
                        </li>
                        <li>
                            <a href="#"><img src="images/fb-icon.png" alt=""></a>
                            <h4>109</h4>
                            <p>Fans</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-widget span6 block5">
            <img class="footer-logo" src="images/logo_scmilagres.jpg" alt="Logo">
            <div class="footer-text">
                <h4>Sobre a Prefeitura</h4>
                <p><?= $prefeitura->pretema ?></p>
            </div><div class="clearfix"></div>
        </div>

    </div><!-- footer-widgets -->


    <div id="site-info" class="container">

        <div id="footer-nav" class="fr">
            <!--<ul class="menu">
                <li><a href="index-2.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>-->
            <b><small>Desenvolvido por:</small> <a href="http://magnusoft.com.br" target="_blank"><img src="portal/app/images/logomagnus.png" style="width:60px;"/></a></b>
        </div>

        <div id="credit" class="fl">
            <p>&copy; PREFEITURA MUNICIPAL DE <?= $prefeitura->prenome ?> Todos os direitos resevados</p>
        </div>

    </div><!-- .site-info -->

</footer>

<script type='text/javascript' src='js/depen.js'></script>

