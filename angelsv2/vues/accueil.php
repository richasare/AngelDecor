

        <div class="row" style="z-index:1;position:absolute">
            <img src='Images/ph5.png' style="width:100vw; max-width:100vw ; height:475.583px" >
            </div >
            <center>
            <div style="z-index:2;position:absolute">
            <cadre>

            </div>
            <div style="z-index:3;position:absolute">
            <cadre2>
            <img id="cd1"src='Images/logo2.png' style="width:140px;height:110px;opacity:0"  >
            <br>
            <br>
            <br>
            <font id="cd2"size="4" color="white" style="opacity:0">Spécialisée dans la pose et la restauration de parquets de haute qualité, <br>
                Angels Décor est une jeune société composée de professionnels expérimentés et passionnés menés par Angel Tonev. <br>
                Notre exigence de produire chaque fois un travail d'exception nous vaut la satisfaction de nos clients et la reconnaissance de nos paires. <br>
                Basée au Pré-Saint-Gervais (93), notre champ d'action s'étend à toute la France et au-delà.</font>
            </cadre2>
        </div>
      </center>

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<p style="text-align: center"><font size="5" color="black" ><span style="border-bottom: 3px solid #a88230" >NOS AVANTAGES</span></font></p>
<div class="container">
  <div class="row">
    <div id='de2' class="col"style="opacity: 0">
    <p style="text-align: center"><font size="5" color="black" >Notre systeme de Devis </font></p>
    <p style="text-align: left"><font size="4" color="black" ><strong>La rapidité est l'une de nos forces.
    <br>
    Chez Angels Decor les devis seront effectués dans les prochaines 24H après votre demande.
    <br>
     Comptez sur nous pour ne pas vous faire perdre votre temps!</font></p>
</strong>
    </div>


    <div id='de'class="col"style="background-color: #ffffff;opacity: 0;border-radius: 10px;border:3px solid #a88230;display:block;text-align:center;">
    <a class="nav-link"  data-toggle="modal" data-target="#myModal"><img src="Images/devis.png" id="dei" style="width:200px;height:200px;opacity:1;"></a>

    <!--ICI CE TROUVE LE POP UP -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"> Devis / Contact</h5>

                <?php
                if(isset($_POST['mailform']))
                {


                  if (!empty($_POST['name']) AND !empty($_POST['mail']) AND !empty($_POST['telephone']) AND !empty($_POST['sujet']) )
                  {
                    $header="MIME-Version: 1.0\r\n";
                    $header.='From:"AngelsDecor.fr"<support@angelsdecor.fr>'."\n";
                    $header.='Content-Type:text/html; charset="uft-8"'."\n";
                    $header.='Content-Transfer-Encoding: 8bit';

                    $message='
                    <html>
                      <body>
                        <div align="center">
                          <img src="http://www.primfx.com/mailing/banniere.png"/>
                          <br />
                          <u> Nom de l\'expéditeur: </u>'.$_POST['name'].'<br />
                          <u> Mail de l\'expéditeur: </u>'.$_POST['mail'].'<br />
                          <u> Téléphone de l\'expéditeur: </u>'.$_POST['telephone'].'<br />
                          <br />
                          '.$_POST['sujet'].'
                          <img src="http://www.primfx.com/mailing/separation.png"/>
                        </div>
                      </body>
                    </html>
                    ';

                    mail("bob.angelsdecor@gmail.com", "Contact - Monsite.com", $message, $header);
                  }
                }
                  else {
                    $msg = "Tout les champs doivent étre completés ok? !";
                  }


                  ?>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action="index.php?uc=env">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nom Complet</label>
                  <input type="text" class="form-control" name="nom" placeholder="Votre nom/prenom" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Adresse Mail</label>
                  <input type="text" class="form-control" name="mail" placeholder="Votre email" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Telephone</label>
                  <input type="text" class="form-control" name="telephone" placeholder="Votre numero de téléphone" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Sujet du devis</label>
                  <textarea class="form-control" name="sujet" id="message-text"></textarea>
                </div>
              
            </div>
            <div class="modal-footer">
              <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>-->
              <button  class="btn btn-warning" type="submit" >Envoi</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!--ICI SE FINIT LE POP UP-->


    <p style="text-align: center"><font id="fo"size="4" color="#a88230" >FAITES VOTRE DEVIS</font></p>
    </div>

    <p style="text-align: center"><font size="5" color="black" ><span style="border-bottom: 3px solid #a6a6a6" >OU SOMMES NOUS</span> </font></p>
<div class="container">
  <div class="row">
    <div  class="col">
    </div>
    <div id='de3'class="col"style="background-color: #ffffff;opacity: 0">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.3904656277805!2d2.3985250154263373!3d48.88889530651272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66db1a0f0a3a9%3A0xadce8504ae2bac72!2s11%20Rue%20Jean-Baptiste%20Cl%C3%A9ment%2C%2093500%20Le%20Pr%C3%A9-Saint-Gervais!5e0!3m2!1sfr!2sfr!4v1642023252971!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="col">

    </div>






<temp id="temp" t="0">
<temp id="temp2" t2="0">
<temp id="temp3" t3="0">
<script>


    var time;

        time = window.setInterval(function() {charge()}, 100);


</script>
