<?php 
  include 'db.php';
?>

<html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>TIM | Supporto tecnico e configurazione</title>
    <link rel="shortcut icon" href="imgs\favicon.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/tim.css" rel="stylesheet" type="text/css">
    <link href="css/orientation.css" rel="stylesheet" type="text/css">
  </head>
  <body>

<!--Barra superiore-->
    <nav id="landmark" class="navbar navbar-inverse" >
  <div class="container-fluid">
    <ul class="nav navbar-nav navbar-left">
      <li>
        <a href="index.php" style="padding:0px">
            <?php
             $immagine = getImmagine('logotim');
              $mydiv = '<div class="img-responsive">';
              $mydiv .= '<img style="width: 100%; max-width: 87;" src="'.$immagine['path'].'" />';
              $mydiv .= '</div>';
              echo $mydiv;
           ?>     
        </a>
      </li>
      <li><a href="#" id="linknonvalidi">Il gruppo</a></li> 
      <li><a href="Chi_Siamo.php">Chi siamo</a></li> 
      <li class="dropdown" >
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Dispositivi
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Dispositivi.php">Per categoria</a></li>
          <li><a href="Promozioni.php">Promozioni</a></li>
        </ul>
      </li>
            <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Smart Life
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="SmartLife.php">Per categoria</a></li>
        </ul>
      </li>
            <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Assistenza
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Assistenza.php" >Per categoria</a></li>
          <li><a href="In_Evidenza.php" >In evidenza</a></li>
        </ul>
      </li>
    </ul>
     <ul class="hidden-xs nav navbar-nav navbar-right">   
      <li><a href="#" id="linknonvalidi"><span class="glyphicon glyphicon-envelope" aria-hidden="true"> Mail</span></a></li> 
      <li><a href="#" id="linknonvalidi"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"> Carrello</span></a></li> 
    </ul>
  </div>
</nav>







<div class="hidden-md hidden-lg">


    <div class="dropdown ">
      <button class="btn btn-default dropdown-toggle center-block" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Servizi Smart Life per categoria
        <span class="caret "></span>
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" id="altrilinktendina">
        <li><a class="thumbnail" href="GestioneLineaEServizi.php">
          <img src="imgs\assistenza\gestionelineaeservizi.PNG" class="img-rounded">
        </a></li>
        <li><a class="thumbnail" href="ControlloCostiEPagamenti.php">
          <img src="imgs\assistenza\controllocostiepagamenti.PNG" class="img-rounded">
        </a></li>
        <li><a class="thumbnail" href="AssistenzaSmartLife.php">
          <img src="imgs\assistenza\smartlife.PNG" class="img-rounded">
        </a></li>
        <li><a class="thumbnail" href="SupportoConfigurazione.php">
        <img src="imgs\assistenza\supportotecnicoeconfigurazione.PNG" class="img-rounded">
        </a></li>
      </ul>
    </div>



  <div>

    <div class="panel-group" id="pannellicollassati">
      <div id="tabellaDropdown" class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" href="#collapse1">ADSL e Fibra</a>
          </h4>
        </div>
          <div id="collapse1" class="panel-collapse collapse">
          <div class="panel-body">
            Fibra
          </div>
          <div class="panel-body"><a href="ModemADSL.php">
            Modem ADSL
           </a></div>
          <div class="panel-body">
            Ripetitori Wi-Fi
          </div>
          <div class="panel-body">
            Risorse di rete
          </div>
        </div>
      </div>
    </div>
    
    <div class="panel-group" id="pannellicollassati">
      <div class="panel panel-default" id="tabellaDropdown">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" href="#collapse2">LINEA TELEFONICA</a>
          </h4>
        </div>
        <div id="collapse2" class="panel-collapse collapse">
          <div class="panel-body">
            Guida ai servizi telefonici
          </div>
          <div class="panel-body">
            Problemi linea telefonica
          </div>
          <div class="panel-body">
            Linea ISDN
          </div>
        </div>
      </div>
    </div>

    <div class="panel-group" id="pannellicollassati">
      <div class="panel panel-default" id="tabellaDropdown">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" href="#collapse3">SMARTPHONE E TABLET</a>
          </h4>
        </div>
        <div id="collapse3" class="panel-collapse collapse">
          <div class="panel-body">
            TIM Vision
          </div>
          <div class="panel-body">
            TIM SKY
          </div>
          <div class="panel-body">
            Premium online
          </div>
          <div class="panel-body">
            Domande e risposte
          </div>
        </div>
      </div>
    </div>

    <div class="panel-group" id="pannellicollassati">
      <div class="panel panel-default" id="tabellaDropdown">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" href="#collapse4">DECODER E TV</a>
          </h4>
        </div>
        <div id="collapse4" class="panel-collapse collapse">
          <div class="panel-body">
            TIM Vision
          </div>
          <div class="panel-body">
            TIM SKY
          </div>
          <div class="panel-body">
            Premium online
          </div>
          <div class="panel-body">
            Domande e risposte
          </div>
        </div>
      </div>
    </div>

    <div class="panel-group" id="pannellicollassati">
      <div class="panel panel-default" id="tabellaDropdown">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" href="#collapse5">NAVIGAZIONE</a>
          </h4>
        </div>
        <div id="collapse5" class="panel-collapse collapse">
          <div class="panel-body">
            Impostazioni per la navigazione
          </div>
          <div class="panel-body">
            Problemi di navigazione
          </div>
        </div>
      </div>
    </div>

    <div class="panel-group" id="pannellicollassati">
      <div class="panel panel-default" id="tabellaDropdown">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" href="#collapse6">SICUREZZA PC</a>
          </h4>
        </div>
        <div id="collapse6" class="panel-collapse collapse">
          <div class="panel-body">
            Total Security
          </div>
          <div class="panel-body">
            Antivirus
          </div>
          <div class="panel-body">
            Navigare sicuri
          </div>
          <div class="panel-body">
            Sicurezza posta
          </div>
        </div>
      </div>
    </div>    

  </div>
</div>







<div class="row hidden-xs hidden-sm" >
  <div class="col-md-3 col-md-offset-1">
    <a class="thumbnail" href="GestioneLineaEServizi.php" id="altrilink">
       <img src="imgs\assistenza\gestionelineaeservizi.PNG" class="img-rounded">
    </a>
    <a class="thumbnail" href="ControlloCostiEPagamenti.php" id="altrilink">
    <img src="imgs\assistenza\controllocostiepagamenti.PNG" class="img-rounded">
    </a>
    <a class="thumbnail" href="AssistenzaSmartLife.php" id="altrilink">
    <img src="imgs\assistenza\smartlife.PNG" class="img-rounded">
    </a>
    <a class="thumbnail" href="SupportoConfigurazione.php" id="currentPage">
    <img src="imgs\assistenza\supportotecnicoeconfigurazione.PNG" class="img-rounded">
    </a>
  </div>

  <div class="col-md-5 col-md-offset-1">

    <div class="panel panel-default">
      <div class="panel-heading" id="bottonetabella">
        ADSL e Fibra
      </div>
          <div class="panel-body">
            Fibra
          </div>
          <div class="panel-body"><a href="ModemADSL.php">
            Modem ADSL
           </a></div>
          <div class="panel-body">
            Ripetitori Wi-Fi
          </div>
          <div class="panel-body">
            Risorse di rete
          </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading" id="bottonetabella">
        LINEA TELEFONICA
      </div>
      <div class="panel-body">
        Guida ai servizi telefonici
      </div>
      <div class="panel-body">
        Problemi linea telefonica
      </div>
      <div class="panel-body">
        Linea ISDN
      </div>
    </div>

    <div class="panel panel-default" id="tabella">
      <div class="panel-heading" id="bottonetabella">
        SMARTPHONE E TABLET
      </div>
      <div class="panel-body">
        Servizi per e dal tuo Smartphone
      </div>
      <div class="panel-body">
        Configurare la posta
      </div>
      <div class="panel-body">
        Configurazioni e manuali
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading" id="bottonetabella">
        DECODER E TV
      </div>
      <div class="panel-body">
        TIM Vision
      </div>
      <div class="panel-body">
        TIM SKY
      </div>
      <div class="panel-body">
        Premium online
      </div>
      <div class="panel-body">
        Domande e risposte
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading" id="bottonetabella">
        NAVIGAZIONE
      </div>
      <div class="panel-body">
        Impostazioni per la navigazione
      </div>
      <div class="panel-body">
        Problemi di navigazione
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading" id="bottonetabella">
        SICUREZZA PC
      </div>
      <div class="panel-body">
        Total Security
      </div>
      <div class="panel-body">
        Antivirus
      </div>
      <div class="panel-body">
        Navigare sicuri
      </div>
      <div class="panel-body">
        Sicurezza posta
      </div>
    </div>

  </div>
</div>






























<!--SiteMap-->
    <nav class="navbar navbar-default" id="navigationbarp">
      <div class="container-fluid">
        <div class="navbar-header" style="float: none">
          <div>

                  <?php
                    $immagine = getImmagine('logotim');
                      $mydiv = '<div class="navbar-brand hidden-xs">';
                      $mydiv .= '<img style="margin-top: 3; width:100%; max-width:75; border-radius: 10px 10px 10px 10px;" src="'.$immagine['path'].'" />';
                      $mydiv .= '</div>';
                      echo $mydiv;
                  ?>  

          </div>
          <div class="navbar-brand" style="padding: 0; padding-top: 1; padding-left: 3px;">
            <p class="navbar-text">ASSISTENZA / SUPPORTO TECNICO E CONFIGURAZIONE /</p>
          </div>
        </div>
      </div>
    </nav>



<!--Footer-->
    <div class="section" id="footlinks">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <h4>INFORMAZIONI UTILI</h4>
            <ul>
              <li>
                <p>Come pagare il conto</p>
              </li>
              <li>
                <p>Carta dei servizi</p>
              </li>
              <li>
                <p>ViviTIM</p>
              </li>
            </ul>
          </div>
          <div class="col-md-3">
            <h4>STRUMENTI VELOCI</h4>
            <ul>
              <li>
                <p>Ricarica Online</p>
              </li>
              <li>
                <p>Verifica Copertura</p>
              </li>
              <li>
                <p>Trova Negozio</p>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <p>SEGUICI SU:</p>
            <ul class="list-unstyled" >
              <li id="fbtw" class="linknonvalidi">
                <a href="#">
                  <?php
                    $immagine = getImmagine('facebook');
                      $mydiv = '<div class="img-responsive">';
                      $mydiv .= '<img style="width: 100%;" src="'.$immagine['path'].'" />';
                      $mydiv .= '</div>';
                      echo $mydiv;
                  ?>  
                </a>
              </li>
              <li id="fbtw" class="linknonvalidi">
                <a href="#">
                  <?php
                    $immagine = getImmagine('twitter');
                      $mydiv = '<div class="img-responsive">';
                      $mydiv .= '<img style="width: 100%;" src="'.$immagine['path'].'" />';
                      $mydiv .= '</div>';
                      echo $mydiv;
                  ?>  
                </a>
              </li>
              <li id="fbtw" class="linknonvalidi">
                <a href="#">
                  <?php
                    $immagine = getImmagine('google');
                      $mydiv = '<div class="img-responsive">';
                      $mydiv .= '<img style="width: 100%;" src="'.$immagine['path'].'" />';
                      $mydiv .= '</div>';
                      echo $mydiv;
                  ?>  
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
      <footer class="section section-primary" id="bluefooter">
          <div class="row">
            
            <div class="col-md-8 col-sm-6">
              
              <div class="col-sm-2">
                <p>Privacy</p>
              </div>
              
              <div class="col-sm-2 text-left">
                <p>Note legali</p>
              </div>
              
              <div class="col-sm-2 text-left">
                <p>Website info</p>
              </div>
              
              <div class="col-sm-2 text-left">
                <p>Contatti</p>
              </div>
              
              <div class="col-sm-3">
                <p class="text-left">Per i consumatori</p>             
              </div>

            </div>

            <div class="col-sm-6 col-md-3">
                <p class="text-right">Telecom Italia 2012 - P.IVA 00488410010</p>
            </div>

          </div>

      </footer>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body></html>