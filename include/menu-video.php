<div class="video-box widget row-fluid">
    <h3 class="title"><span>Videos</span></h3>
    <?php
    $read = new Read();
    $cidade = new Cidade;
    $precodigo = $cidade->precodigo;
    $read->ExeRead("videos", "WHERE precodigo = :precodigo AND precodigo < 225 AND videstado = 1 order by prenumero desc limit 4", "precodigo={$precodigo}");

    if ($read->getResult()):

        foreach ($read->getResult() as $value):
            $pos = strripos($value['vidurl'], "v=");
            if ($pos):
                $url = substr($value['vidurl'], $pos + 2, 11);
            else:
                $pos = strripos($value['vidurl'], ".be/");
                if ($pos):
                    $url = substr($value['vidurl'], $pos + 4, 11);
                endif;
            endif;
            ?>

            <iframe width="100%" height="230" src="https://www.youtube.com/embed/<?= $url ?>" frameborder="0" allowfullscreen></iframe><hr>
            <?php
        endforeach;
    endif;
    ?>

</div>

