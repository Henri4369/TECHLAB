

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
    <link rel="icon" sizes="192x192" href="locawebstyle/assets/images/ico-painel1.png">
    <link rel="apple-touch-icon" href="locawebstyle/assets/images/ico-painel1.png">
    <meta name="apple-mobile-web-app-title" content="Painel 1">
    <script src="locaweb/mediaqueries-ie.js" type="text/javascript"></script>
    <script src="locaweb/html5shiv.js" type="text/javascript"></script>
    <link href="http://assets.locaweb.com.br/locastyle/3.10.1/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="css/agendamentos.css">
</head>
<body class="documentacao documentacao_exemplos documentacao_exemplos_painel1 documentacao_exemplos_painel1_pre-painel documentacao_exemplos_painel1_pre-painel_index">

  <div class="ls-topbar ls-topbar-gray" id="barra">

  <!-- Barra inicial (Onde contém o titulo) -->
    <div class="ls-notification-topbar">
      <h1 class="titulo-principal" >Agendamentos de Laboratórios</h1>
    </div>
    <span class="ls-show-sidebar ls-ico-menu"></span>
  </div>
  <!--Barra Vertical de Menu (Contém a logo de usuário,logo do pitagoras e os menus para acessar)-->
  <?php require_once('./model/menu.php'); ?>
    
    
  <!-- Aqui inicia o conteúdo da pagina -->
<main class="ls-main ">
  <div class="container-fluid"> 
  	
      <h2 class="sub-titulo hist">Histórico dos Agendamentos</h2>

      
      
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

    <fieldset>
<button type="button" class="ls-btn-dark ls-ico-close" id="botoes">Cancelar</button>
      <button type="button" class="ls-btn-dark ls-ico-search" id="botoes">Buscar</button>
</fieldset>  

  </fieldset>
</form>

    <table class="ls-table ls-table-striped" style="margin-top: 30px" >
  <thead>
    <tr>
      <th>Usuário</th>
      <th class="hidden-xs">Perfil</th>
      <th class="hidden-xs">Tipo</th>
      <th>Laboratório</th>
      <th>Data</th>
      <th class="hidden-xs">Período</th>
      <th>Situação</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td> Suzana O.</td>
      <td class="hidden-xs">Professor</td>
      <td class="ls-ico-edit-admin hidden-xs">Desenho</td>
      <td>Laboratório desenho 1</td>
      <td>04/09/2019</td>
      <td class="hidden-xs">Manha-Integral</td>
      <td>Aprovado</td> 
       
      
    </tr>
      <tr>
      <td> Paulo da silva</td>
      <td class="hidden-xs">Professor</td>
      <td class=" ls-ico-screen hidden-xs">Informática</td>
      <td>Laboratório Avançado</td>
      <td>04/09/2019</td>
      <td class="hidden-xs">Manha-Integral</td>
      <td>Aprovado</td>
          
      
    </tr>
      <tr>
      <td> Julio Cézar</td>
      <td class="hidden-xs">Coordenador</td>
      <td class=" ls-ico-screen hidden-xs">Informática</td>
      <td>Laboratório I</td>
      <td>04/09/2019</td>
      <td class="hidden-xs">Noite - 19:00h ás 22:00h</td>
      <td>Aprovado </td>
          
    </tr>
    
      <tr>
      <td> Alexandre Sauer</td>
      <td class="hidden-xs">Professor</td>
      <td class=" ls-ico-screen hidden-xs">Informática</td>
      <td>Laboratório III</td>
      <td>04/09/2019</td>
      <td class="hidden-xs">Noite - 19:00h ás 20:45h</td>
      <td>Aprovado </td>
      
      
    </tr>


  </tbody>
</table>
  </div>

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
