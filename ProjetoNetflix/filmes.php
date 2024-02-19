<html>
  <head>
     <meta charset="UTF-8">
       <script src="js/jquery-3.7.1.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
       <title>Filmes</title>
     
   </head>
    <body class="container pt-5 bg-black">
        
        <nav class="navbar bg-dark navbar-dark navbar-expand-sm"> <!-- criei um menu para aparecer na area de navegar -->
            
            <div class="container"><!-- a classe container vai alterar a largura do navegar é alterada -->
                <a href="" class="navbar-brand d-flex align-intems-center"> <!-- vai centralizar o icone e a descrição dele -->
                <i class="fi fi-brands-netflix"></i>
            Netflix</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" <!-- ultilizando a div collapse o menu foi criado -->
                        data-bs-tarfet="#menuNavbar">
                    <span class="navbar-toggle-icon"</span>
                </button>
                    <div class="collapse navbar-collapse" id="menuNavbar">
                    <div class="navbar-nav ms-auto"><!-- joga os itens do menu para direita -->
                    <a href="index.php" class="nav-link active">Inicio</a>
                    <a href="index.php" class="nav-link">Sair</a>
                    </div>
                    </div>
            </div>
        </nav>
            
                    
      <?php
      @$cod = $_REQUEST['cod']; //coloquei está parte pq não tinha
       if (isset($cod)) {
            if ($cod == '001') {
            $result = array(
                          'img/Perfil01/AsPanteras.jpg', 'img/Perfil01/AsPatricinhasDeBeverlyHills.jpg',
                          'img/Perfil01/BadBoys.jpg', 'img/Perfil01/DeRepente30.jpg',
                          'img/Perfil01/EsposaDeMentirinha.jpg');
            
              echo ('<h2 class="text-light">Comédia</h2>');
              echo ('<div class="row">');
            foreach ($result as $filmes){
              echo ('<div class="col-md-2">');
              echo ('<img src='.$filmes.' class="img-fluid" alt="filme">');
              echo ('</div>');
              echo ('<br><br>');
            }
            
            $rresult = array('img/Perfil01/GenteGrande2.jpg','img/Perfil01/MammaMia.jpg',
                'img/Perfil01/MisterioDoMediterraneo.jpg','img/Perfil01/OperacaoCupido.jpg',
                'img/Perfil01/UmEspiaoeMeio.jpg');
            
              echo ('<h2 class="text-light">Comédia Romantica</h2>');
              echo ('<div class="row">');
            foreach ($rresult as $filmes){
              echo ('<div class="col-md-2">');
              echo ('<img src='.$filmes.' class="img-fluid" alt="filme">');
              echo ('</div>');
              echo ('<br><br>');
                
            }}
            
                     
       if ($cod == '002') {
                 $result = array(
                     'img/Perfil02/Bright.jpg', 'img/Perfil02/HomemAranha.jpg',
                     'img/Perfil02/JogosVorazes.jpg', 'img/Perfil02/JumanjiProximaFase.jpg',
                     'img/Perfil02/KillBoksoon.jpg');
                 
                  echo ('<h2 class="text-light">Comédia</h2>');
                  echo ('<div class="row">');
                       foreach ($result as $filmes){
                  echo ('<div class="col-md-2">');
                  echo ('<img src='.$filmes.' class="img-fluid" alt="filme">');
                  echo ('</div>');
                  echo ('<br><br>');
                 }
                     
                  $rresult= array('img/Perfil02/MeiGong.jpg',
                     'img/Perfil02/XMen.jpg', 'img/Perfil02/SenhoreSenhoraSmith.jpg',
                     'img/Perfil02/TheOldGuard.jpg', 'img/Perfil02/TombRaider.jpg');
       
                 echo ('<h2 class="text-light">Comédia Romantica</h2>');
                 echo ('<div class="row">');
            foreach ($rresult as $filmes){
                 echo ('<div class="col-md-2">');
                 echo ('<img src='.$filmes.' class="img-fluid" alt="filme">');
                 echo ('</div>');
                 echo ('<br><br>');
                 
       }}
                
    
                if ($cod == '003') {
                 $result = array(
                     'img/Perfil03/AFamiliaAddams2.jpg', 'img/Perfil03/CadaUmNaSuaCasa.jpg',
                     'img/Perfil03/Divertidamente.jpg', 'img/Perfil03/Enrolados.jpg',
                     'img/Perfil03/Moana.jpg');
                  echo ('<h2 class="text-light">Comédia</h2>');
                  echo ('<div class="row">');
                       foreach ($result as $filmes){
                  echo ('<div class="col-md-2">');
                  echo ('<img src='.$filmes.' class="img-fluid" alt="filme">');
                  echo ('</div>');
                  echo ('<br><br>');
                 }
                 
                 $rresult = array(
                     'img/Perfil03/Pinoquio.jpg', 'img/Perfil03/RayaoUltimoDragao.jpg',
                     'img/Perfil03/Valente.jpg',   'img/Perfil03/aPrincesaeoSapo.jpg', 
                     'img/Perfil03/Frozen2.jpg');
                     
                 echo ('<h2 class="text-light">Comédia Romantica</h2>');
                 echo ('<div class="row">');
            foreach ($rresult as $filmes){
                 echo ('<div class="col-md-2">');
                 echo ('<img src='.$filmes.' class="img-fluid" alt="filme">');
                 echo ('</div>');
                 echo ('<br><br>');
                 
       }}}
                
                
      ?>
     
  </body>
</html>
              
