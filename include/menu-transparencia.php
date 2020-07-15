<div class="list-group menu-left-t">

    <?php
    /**
     * MENU ESQUERDO TRANSPARÊNCIA DESPESAS
     */
    if (isset($_REQUEST['cat']) && $_REQUEST['cat'] == 'despesas'):
        ?>
        <button onclick="LoadPage('empenhos')" type="button" class="list-group-item"><i class=" fa fa-file-text"></i>  Empenhos</button>
        <button onclick="LoadPage('favorecidos')"type="button" class="list-group-item"><i class=" fa fa-truck"></i>  Favorecidos</button>
        <button onclick="LoadPage('pagamentos')" type="button" class="list-group-item"><i class=" fa fa-money"></i>  Pagamentos</button>
        <button onclick="LoadPage('diarias')" type="button" class="list-group-item"><i class=" fa fa-user-circle"></i>  Diárias</button>
    <?php endif; ?>
    <?php
    /**
     * MENU ESQUERDO TRANSPARÊNCIA RECEITAS
     */
    if (isset($_REQUEST['cat']) && $_REQUEST['cat'] == 'receitas'):
        ?>
        <button onclick="LoadPage('receitaprevista')" type="button" class="list-group-item"><i class=" fa fa-line-chart"></i>  Receita Prevista</button>
        <button onclick="LoadPage('disponibilidades')" type="button" class="list-group-item"><i class=" fa fa-bank"></i>  Disponibilidades</button>
    <?php endif; ?>
    <?php
    /**
     * MENU ESQUERDO TRANSPARÊNCIA SERVIDORES
     */
    if (isset($_REQUEST['cat']) && $_REQUEST['cat'] == 'servidores'):
        ?>
        <button onclick="LoadPage('servidores')" type="button" class="list-group-item"><i class=" fa fa-male"></i>  Servidores </button>
        <button onclick="LoadPage('dependentes')" type="button" class="list-group-item"><i class=" fa fa-child"></i>  Dependentes</button>
        <button onclick="LoadPage('folpagamento')" type="button" class="list-group-item"><i class=" fa fa-money"></i>  Folha de Pagamento</button>
    <?php endif; ?>

    <?php
    /**
     * MENU ESQUERDO TRANSPARÊNCIA LICITAÇÕES
     */
    if (isset($_REQUEST['cat']) && $_REQUEST['cat'] == 'licitacoes'):
        ?>
        <button onclick="LoadPage('licitacoes')" type="button" class="list-group-item"><i class=" fa fa-legal"></i>  Listar Licitações</button>      
    <?php endif; ?>
        
        <?php
    /**
     * MENU ESQUERDO TRANSPARÊNCIA CONTRATOS
     */
    if (isset($_REQUEST['cat']) && $_REQUEST['cat'] == 'contratos'):
        ?>
        <button onclick="LoadPage('contratos')" type="button" class="list-group-item"><i class=" fa fa-handshake-o"></i>  Listar Contratos</button>      
    <?php endif; ?>
        
         <?php
    /**
     * MENU ESQUERDO TRANSPARÊNCIA PLANEJAMENTO
     */
    if (isset($_REQUEST['cat']) && $_REQUEST['cat'] == 'planejamento'):
        ?>
        <button onclick="LoadPage('planejamento')" type="button" class="list-group-item"><i class=" fa fa-balance-scale"></i>  Mostrar Planejamentos</button>      
    <?php endif; ?>
        
        
           <?php
    /**
     * MENU ESQUERDO TRANSPARÊNCIA RELATÓRIOS
     */
    if (isset($_REQUEST['cat']) && $_REQUEST['cat'] == 'relatorios'):
        ?>
        <button onclick="LoadPage('relatorios')" type="button" class="list-group-item"><i class=" fa fa-calculator"></i>  Mostrar Relatórios</button>      
    <?php endif; ?>





</div>

