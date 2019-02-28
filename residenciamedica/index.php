<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Faculdade de Ciências Médicas</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/custom.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        $(function(){$("#includedResMed").load("../editaisResMed.html");});
        //$(function(){$("#includedResMedVagas").load("../editaisResMedVagas.html");});
        //$(function(){$("#includedResMedVagas").load("../editaisResMedVagas.html");});
    </script>
</head>

<body id="page-top" class="index">

<!-- Navigation -->
<nav class="navbar navbar-default ">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="" href="http://www.fcm.unicamp.br/fcm">
                <img class="img-responsive" src="../img/marcaFCM_branco.png" alt="">
            </a>
        </div>
        <div class="navbar-header logo-unicamp hidden-xs">
            <a href="http://www.unicamp.br" class="">
                <img class="img-responsive" src="../img/logo-unicamp-branco-65.png" alt="">
            </a>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<div class="blur-background">
    <!-- Portfolio Grid Section -->
    <div id="publicacoes">
        <div class="container">
            <h1>Residência Médica</h1>
            <div class="row flex-row">
                <div class="col-md-12 flex-cell">
                    <h2>Processo Seletivo 2019</h2>
                    <h2>Publicações</h2>
                    <div id="includedResMed"></div>
                </div>
                <!--
                <div class="col-md-6 flex-cell right">
                    <h2>Processo Seletivo 2018 - Vagas Remanescentes</h2>
                    <h2>Publicações</h2>
                    <div id="includedResMedVagas"></div>
                </div>
                -->
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<footer class="text-center footer">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-lg-6">
                    <a href="mailto:coreme@fcm.unicamp.br">
                        <img class="" src="../img/Message-48.png">
                        <h5>coreme@fcm.unicamp.br</h5>
                    </a>

                </div>
                <div class="footer-col col-lg-6 ">
                    <a href="http://www.fcm.unicamp.br">
                        <img class="" src="../img/Geography-48.png">
                        <h5>Faculdade de Ciências Médicas - Unicamp</h5>
                    </a>
                </div>

            </div>
        </div>
    </div>
</footer>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-43442078-7', 'auto');
    ga('send', 'pageview');

</script>
</body>

</html>
