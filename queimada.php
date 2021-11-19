<!DOCTYPE html>
<html lang="pt-br">

  <head>

<?php
        $host = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "amazonia";

        $conn = mysqli_connect($host, $usuario, $senha, $banco);

  ?>      

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Amazônia S.O.S</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- <link href="../amazoniasos/css/bootstrap.min.css" rel="stylesheet"> -->


  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Amazônia S.O.S</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="home.php">Home</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="denuncias.php">Desmatamento</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="queimada.php">Queimadas</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="poluicao.php">Poluição</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="trafico.php">trafico</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
     <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        
       <?php
            
           include "conexao.php";
        
            $consulta= "SELECT * FROM queimada";
            $con=$mysqli->query($consulta) ;
       
            ?>  

        <form >
         <table width="1100" border="0" id="alter">
            <tr class="dif">
                <td width="50">ID</td>
                <td width="150">NATUREZA DO CRIME</td>
                <td width="100">MUNICIPIO</td>
                <td width="100">BAIRRO</td>
                <td width="100">RUA</td>
                <td width="100">DESCRIÇÃO</td>
                

            </tr>

             <?php
                    # executa a expressão con no servidor, e armazena o resultado!
                    while ($tbl = $con->fetch_array()){ 
                ?>
                        <tr>    
                            <td class="dif1">
                            <?php echo $tbl["id_queimada"]; ?></td>
                            <td><?php echo $tbl["tipoq"]; ?></td>
                            <td><?php echo $tbl["municipioq"]; ?></td>
                            <td><?php echo $tbl["bairroq"]; ?></td>
                            <td><?php echo $tbl["ruaq"]; ?></td>
                            <td><?php echo $tbl["mensagemq"]; ?></td>
                                
                            </td>   
         </form>

                       <?php } ?> 
                        </tr>    
              <!-- OBSERVAÇÃO NAO ESQUECER O ESPAÇO MEU FILHO, SE NAO DOR DE CABECA DE 2horas -->
        </table>

                <!-- Fim artigos -->
            </div>
            <!-- Fim div conteudo -->
        </section>      
      </div>
    </header>


     <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Localização</h4>
            <p class="lead mb-0">3981 Jauary II
              <br>Centro, MA 65243</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Redes Sociais</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-linkedin-in"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">Sobre o Design</h4>
            <p class="lead mb-0">Design de uso livre, codigo aberto
              <a href="http://startbootstrap.com">Amazônia S.O.S</a>.</p>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Coutinho 2019</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>
