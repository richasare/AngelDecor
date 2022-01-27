
<script>
 RedirectionJavascript();
</script>
<script>bois();</script>



<div class="container"style="padding-left:0;margin-left:0;" >
<div style="z-index:2;position:absolute">
    <div class="cadre" id="cd0"style="width:100vw;height:850px; ">
    </div>
</div>
 <div style="z-index:4;position:absolute">
    <br>
    <div class="cadre2" id="cd10" style="width:100vw;text-align:center;" >
    <button type="button" onclick="scroll1()">Devis/Galerie</button>
    <button type="button" onclick="scroll2()">Avis</button>
    <button type="button"onclick="scroll3()">Contact</button>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="" style="background-color:black;opacity:0.5; width:80vw; height:300px; display:inline-block;">
      <!--<div class="" style="position:absolute; z-index: 5;">
        <h5 style="opacity:1;">Spécialisée dans la pose et la restauration de parquets de haute qualité, Angels Décor est une jeune société composée de professionnels expérimentés et passionnés menés par Angel Tonev. Notre exigence de produire chaque fois un travail d'exception nous vaut la satisfaction de nos clients et la reconnaissance de nos paires. Basée au Pré-Saint-Gervais (93), notre champ d'action s'étend à toute la France et au-delà.</h5>

      </div>-->

    </div>


  </div>
 </div>
 <div class="" style="z-index:5;position:absolute; text-align:center; " >
   <br><br><br><br><br><br><br><br><br><br><br><br>
   <h5 style="opacity:1; width:80vw;">Spécialisée dans la pose et la restauration de parquets de haute qualité, Angels Décor est une jeune société composée de professionnels expérimentés et passionnés menés par Angel Tonev. Notre exigence de produire chaque fois un travail d'exception nous vaut la satisfaction de nos clients et la reconnaissance de nos paires. Basée au Pré-Saint-Gervais (93), notre champ d'action s'étend à toute la France et au-delà.</h5>
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
br
<div class="container"style="padding-left:0;margin-left:0;" >
<div style="z-index:2;position:absolute">
    <div class="cadre" id="cd0"style="width:100vw;height:460px;background-color:#f0ab3a;opacity:1">
    </div>
</div>
<div style="z-index:3;position:absolute">
<img src="Images/glogo2.png" class="card-img-top" style="width:60%;height:60%">

</div>
 <div style="z-index:4;position:absolute">
 <br>
        <br>
        <br>
    <div class="cadre2" id="cd10" style="width:100vw;text-align:center" >

    <a href="https://www.google.com/maps/uv?pb=!1s0x47e663ac32461f05%3A0xe7b79ac4ba26cb00!3m1!7e115!4shttps%3A%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipOK57PxhaE4XVXNEoa_AF0ASAtDrxDQSzjcNOiD%3Dw213-h160-k-no!5sangels%20decor%20-%20Recherche%20Google!15sCgIgAQ&imagekey=!1e10!2sAF1QipOK57PxhaE4XVXNEoa_AF0ASAtDrxDQSzjcNOiD&hl=fr&sa=X&ved=2ahUKEwiYg7HRscL1AhVKzoUKHSrTBDgQoip6BAghEAM">
    <div class="card" style="width: 18rem;">
  <img src="Images/galerie3.png" class="card-img-top" alt="..."style="width:50%;height:50%">
  <div class="card-body">
    <h5 class="card-title">Galerie</h5>
    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->

  </div>
</div>
</a>

<a data-toggle="modal" data-target="#myModal" href="#">
<div class="card" style="width: 18rem;">
  <img src="Images/devis2.png" class="card-img-top" alt="..."style="width:50%;height:50%">
  <div class="card-body">
    <h5 class="card-title">Devis sous 24H</h5>
    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->

  </div>
</div>
</a>
<!--ancien emplacement du texte-->





</div>




</div>


</div>
<!--ICI CE TROUVE LE POP UP -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Devis / Contact</h5>



          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
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
<div class="container"style="padding-left:0;margin-left:0;" >
<div style="z-index:2;position:absolute">
    <div class="cadre" id="cd0"style="width:100vw;height:460px;background-color:#a6a6a6;opacity:1">
    </div>
</div>
<div style="z-index:3;position:absolute;text-align:end ;width:100vw">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<img src="Images/glogo.png" class="card-img-top" style="width:13%;height:13%">

</div>
 <div style="z-index:4;position:absolute;width:100vw;text-align:center">
 <br>
        <br>
        <br>
        <br>

    <div class="cadre2" id="cd10" style="width:50vw;text-align:center" >
          <!--LES AVIS GOOGLE-->
          <script src="https://apps.elfsight.com/p/platform.js" defer></script>
      <div class="elfsight-app-daa2c6f8-cbab-4935-8fd5-3b8b5adca3e4"></div>
      <!--FIN les AVIS GOOGLE-->


    </div>

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
