<?php require_once('adminphp\sessao.php'); ?>



<!DOCTYPE html>
<html class="ls-pre-panel">
<head>
  <title>Agendamento de Laboratórios</title>

  <meta charset="utf-8">
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">

    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="icon" sizes="192x192" href="/locawebstyle/assets/images/ico-painel1.png">
    <link rel="apple-touch-icon" href="/locawebstyle/assets/images/ico-painel1.png">
    <meta name="apple-mobile-web-app-title" content="Painel 1">
    <script src="locaweb/mediaqueries-ie.js" type="text/javascript"></script>
    <script src="locaweb/html5shiv.js" type="text/javascript"></script>
    <link href="http://assets.locaweb.com.br/locastyle/3.10.1/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="css/insumos.css">
</head>
<body class="documentacao documentacao_exemplos documentacao_exemplos_painel1 documentacao_exemplos_painel1_pre-painel documentacao_exemplos_painel1_pre-painel_index">

  <div class="ls-topbar ls-topbar-gray" id="barra">

  <!-- Barra inicial (Onde contém o titulo) -->
    <div class="ls-notification-topbar">
      <h1 class="titulo-principal">Agendamento de Laboratórios</h1>
    </div>
    <span class="ls-show-sidebar ls-ico-menu"></span>
  </div>
  <!--Barra Vertical de Menu (Contém a logo de usuário,logo do pitagoras e os menus para acessar)-->
  <?php require_once('./model/menu.php'); ?>
  <!-- Aqui inicia o conteúdo da pagina -->
<main class="ls-main ">
  <div class="wrapper">
  <div class="container-fluid"> 
    <!--Feito por Henrique-->
        
    <h2 class="sub-titulo">Insumos</h2>

    <div id="botaocadastro" class="">
      <button type="button" class="ls-btn-dark ls-ico-search" style="margin:2px;">Buscar</button>
      <button data-ls-module="modal" data-target="#modalSmall" type="button" class="ls-btn-dark ls-ico-plus" style="margin: 2px;">Novo </button>
      <button type="button" class="ls-btn-dark ls-ico-close" style="margin:2px;">Cancelar</button>
   </div>

   <!--Modal-Novo Insumo-->
   <div class="ls-modal" id="modalSmall">
      <div class="ls-modal-small">
        <div class="ls-modal-header">
            <h4 id ="titulomodal"class="ls-modal-title">Novo Insumo</h4>
        </div>
        <div class="ls-modal-body">
            <form action="" class="ls-form row">
                <fieldset>
                  <label class="ls-label col-md-12 col-xs-12">
                    <b class="ls-label-text">Insumo:</b>
                    <input type="text" name="nome" placeholder="" class="ls-field" required>
                  </label>
                  <label class="ls-label col-md-12 col-sm-8">
                      <b class="ls-label-text">Tipo de insumo:</b>
                      <div class="ls-custom-select">
                        <select name="" class="ls-select">
                          <option>Todos</option>
                          <option>Ativos</option>
                          <option>Desativados</option>
                        </select>
                      </div>
                    </label>
                </fieldset>
            </form>
        </div>
        <div class="ls-modal-footer">
          <button class="ls-btn ls-float-right" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="ls-btn-primary">Salvar</button>
        </div>
      </div>
    </div>

    <!--Modal-Editar Insumo-->
    <div class="ls-modal" id="modal-editar">
      <div class="ls-modal-small">
        <div class="ls-modal-header">
            <h4 id ="titulomodal"class="ls-modal-title">Editar Insumo</h4>
        </div>
        <div class="ls-modal-body">
            <form action="" class="ls-form row">
                <fieldset>
                  <label class="ls-label col-md-12 col-xs-12">
                    <b class="ls-label-text">Insumo:</b>
                    <input type="text" name="nome" placeholder="" class="ls-field" required>
                  </label>
                  <label class="ls-label col-md-12 col-sm-8">
                      <b class="ls-label-text">Tipo de insumo:</b>
                      <div class="ls-custom-select">
                        <select name="" class="ls-select">
                          <option>Todos</option>
                          <option>Ativos</option>
                          <option>Desativados</option>
                        </select>
                      </div>
                    </label>
                </fieldset>
            </form>
        </div>
        <div class="ls-modal-footer">
          <div id="botoes-editar">
            <button type="submit" class="ls-btn-primary">Salvar</button>
            <button class="ls-btn-primary">Excluir</button>
            <button class="ls-btn-primary" data-dismiss="modal">Cancelar</button>
          </div>
        </div>
      </div>
    </div>

   <br>

  <div class="corpo"> 
      <form action="" class="ls-form ls-form-horizontal row" id="formulario-01">
  <fieldset>
    <label class="ls-label col-md-5 col-xs-12" id="pesquisar">
      <b class="ls-label-text">Pesquisar:</b>
      <input type="text" placeholder="Informe o que deseja pesquisar" class="ls-field" required>
    </label>

    <label class="ls-label col-md-4 col-xs-12" id="filtrar">
      <b class="ls-label-text">Filtrar por:</b>
      <div class="ls-custom-select">
        <select name="" class="ls-select">
          <option>Selecione o filtro</option>
          <option>Tipo 01</option>
          <option>Tipo 02</option>
          <option>Tipo 03</option>
          <option>Tipo 04</option>
          <option>Tipo 05</option>
        </select>
      </div>
    </label>

  </fieldset>
</form>
         
          <table class="ls-table ls-table-striped">
            <thead>
              <tr>
                <th><b>Tipo</b></th>
                <th id="insumo"><b>Insumo</b></th>
                <th id="editar"><b>Editar</b></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                  <td>Computador</td>
                <td>Acer I7 - 16GB - 2TB</td>
                <td><button id="lapis" data-ls-module="modal" data-target="#modal-editar" type="button" class="ls-btn ls-ico-pencil"></button></td>
              </tr>
              <tr>
                  <td>Software</td>
                <td>DEV C++</td>
                <td><button id="lapis" data-ls-module="modal" data-target="#modal-editar" type="button" class="ls-btn ls-ico-pencil"></button></td>
              </tr>
                <tr>
                  <td>Computador</td>
                <td>Acer I7 - 16GB - 2TB</td>
                <td><button id="lapis" data-ls-module="modal" data-target="#modal-editar" type="button" class="ls-btn ls-ico-pencil"></button></td>
              </tr>
              <tr>
                  <td>Software</td>
                <td>DEV C++</td>
                <td><button id="lapis" data-ls-module="modal" data-target="#modal-editar" type="button" class="ls-btn ls-ico-pencil"></button></td>
              </tr>
                
             </tbody>
          </table></form>
      </div>
     </div>
  </div>
    <div class="push"></div>



<!--Essa parte é do footer, onde contém por quem é desenvolvido, a logo e o email-->
<?php require_once('model\footer.php'); ?>
</main>


<!--Esses scripts são do locaweb NAO APAGUE-->
  <script src="locaweb/jquery.js" type="text/javascript"></script>
  <script src="locaweb/example.js" type="text/javascript"></script>
  <script src="locaweb/localstyle.js" type="text/javascript"></script>
  <script src="locaweb/highcharts.js" type="text/javascript"></script>
  <script src="locaweb/panel-charts.js" type="text/javascript"></script>

  <script type="text/javascript">
    $(window).on('load', function() {
      locastyle.browserUnsupportedBar.init();
    });
  </script>

</body>
</html>
