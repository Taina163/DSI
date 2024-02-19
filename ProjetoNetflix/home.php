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
      <style>
          .h3{
              font-family: Optima, sans-serif;
             }
     .img {
      width: 150px;
      height: 150px;
      margin-top: 150px;
     }
    
      </style>

</head>

<body class="container pt-5 bg-black text-white text-center">

<div class="row">
<div class="col-md-12">
<h3>Quem está assistindo?</h3>
</div>
</div>

    <!-- criei um array associativo e depois dos 3 perfis com um foreach -->
    <div class="row" >
    <?php

$result = array(
array('nome' => 'Taina', 'imagem' => 'img/PerfilTaina.png', 'pagina' => 'filmes.php?cod=001'),
array('nome' => 'Gabriela', 'imagem' => 'img/PerfilGabriela.png', 'pagina' => 'filmes.php?cod=002'),
array('nome' => 'Julia', 'imagem' => 'img/PerfilKids.png', 'pagina' => 'filmes.php?cod=003'),
);

foreach ($result as $data) {
echo ('<div class="col-md-4" >');
echo ('<a class="text-decoration-none text-light" href="'. $data['pagina'].'">');
echo ('<img src="' . $data['imagem'] . '">');
echo ( '<h4>' . $data['nome'] . '</h4>');
echo ('</a>');
echo ('</div>');
}

     ?>
    </div>



   </div>
</body>
</html>
