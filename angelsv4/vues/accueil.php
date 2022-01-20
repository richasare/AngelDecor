

        <div class="row" style="z-index:1;position:absolute">
            <img id="im1" src='Images/ph5.png' style="width:100vw; max-width:150vw ; height:475.583px" >
            </div >
           
            <div style="z-index:2;position:absolute">
            <cadre id="cd0">

            </div>
            <div style="z-index:3;position:absolute">
            <cadre2 id="cd10" >
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


<p style="text-align: center"><font size="5" color="black" ><span style="border-bottom: 3px solid #a88230" >NOS FONCTIONALITES</span></font></p>
<div class="container">
  <div class="row">
    <div id='de2' class="col"style="opacity: 0;width:42vw;max-width:150vw; ">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"  >
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="Images/ph1.png" alt="First slide" style="border-radius: 10px;width:42vw;height:60vh;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Images/ph2.png" alt="Second slide" style="border-radius: 10px;width:42vw;height:60vh;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Images/ph3.png" alt="Third slide" style="border-radius: 10px;width:42vw;height:60vh;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>


    <div id='de'class="col"style="background-color: #ffffff;opacity: 0;border-radius: 10px;border:3px solid #a88230;display:block;text-align:center;width:42vw;height:60vh;max-width:150vw;">
    <br>
    <a class="nav-link"  data-toggle="modal" data-target="#myModal"><img src="Images/devis.png" id="dei" style="width:225px;height:225px;opacity:1;"></a>

    <!--ICI CE TROUVE LE POP UP -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"> Devis / Contact</h5>

                

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action="index.php?uc=env" id="formu">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nom Complet</label>
                  <input type="text" class="form-control" name="nom" placeholder="Votre nom/prenom" id="nom">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Adresse Mail</label>
                  <input type="text" class="form-control" name="mail" placeholder="Votre email" id="mail">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Telephone</label>
                  <input type="text" class="form-control" name="telephone" placeholder="Votre numero de téléphone" id="tel">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Sujet du devis</label>
                  <textarea class="form-control" name="sujet" id="sujet"></textarea>
                </div>
                </form>
            </div>
            <div class="modal-footer">
              <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>-->
              <button  class="btn btn-warning" type="button" onclick="alerte()" >Envoi</button>
              
            </div>
          </div>
        </div>
      </div>
      <!--ICI SE FINIT LE POP UP-->


    <p style="text-align: center"><font id="fo"size="4" color="#a88230" >FAITES VOTRE DEVIS</font></p>
    </div>
    </div>
    </div>

    <p style="text-align: center"><font size="5" color="black" ><span style="border-bottom: 3px solid #a6a6a6" >Les AVIS</span> </font></p>
<div class="container">
  <div class="row">
    <div  class="col">
    </div>
    <div id='de3'class="col"style="background-color: #ffffff;opacity: 0">
       <!--LES AVIS GOOGLE-->
       <script src="https://apps.elfsight.com/p/platform.js" defer></script>
      <div class="elfsight-app-daa2c6f8-cbab-4935-8fd5-3b8b5adca3e4"></div>
      <!--FIN les AVIS GOOGLE-->
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
<script>
     navbar();

 </script>
