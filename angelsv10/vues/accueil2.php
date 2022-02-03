<script>
 RedirectionJavascript();
</script>
<script>bois();</script>




<div class="container"style="padding-left:0;margin-left:0;" >
<div style="z-index:3;position:absolute">
    <cadre id="cd0"style="width:100vw;height:800px">

</div>
<div style="z-index:3;position:fixed">
<img src="Images/logo7.png" class="card-img-top" style="width:60%;height:60%;margin-left:20vw;margin-top:22vh;opacity:0.85">
</div>
<div style="z-index:4;position:fixed">
<img src="Images/logo6.png" class="card-img-top" style="width:60%;height:60%;margin-left:20vw;opacity:0.85; margin-top:165px;">
</div>
 <div style="z-index:4;position:absolute">
 <br>
        <br>

    <cadre2 id="cd10" style="width:100vw;text-align:center" >

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><br><br>
    <div class="" style="background-color:white;opacity:0.1; width:100vw; height:193px; display:inline-block;">
    </div>
    </cadre2>
 </div>
 <div style="z-index:5;position:absolute; text-align:center; " >
 <cadre2 id="cd10" style="width:100vw;text-align:center" >
 <button type="button" onclick="scroll1()">Galerie/Devis</button>
    <button type="button" onclick="scroll2()">Avis</button>
    <button type="button"onclick="scroll3()">Contact</button>
    <br>
   <br><br><br><br>
   <h3 style="opacity:1; width:70vw; color:white;margin-left:15vw;text-shadow:2px 3px 1px black">Spécialisée dans la pose et la restauration de parquets de haute qualité, Angels Décor est une jeune société composée de professionnels expérimentés et passionnés menés par Angel Tonev. Notre exigence de produire chaque fois un travail d'exception nous vaut la satisfaction de nos clients et la reconnaissance de nos paires. Basée au Pré-Saint-Gervais (93), notre champ d'action s'étend à toute la France et au-delà.</h3>
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container"style="padding-left:0;margin-left:0;" >
<div style="z-index:3;position:absolute">
    <cadre id="cd0"style="width:100vw;height:460px;background-color:#eae7e7;opacity:1">

</div>

 <div style="z-index:4;position:absolute">
 <br>
        <br>
        <br>
    <cadre2 id="cd10" style="width:100vw;text-align:center" >

    <a href="https://www.google.com/maps/uv?pb=!1s0x47e663ac32461f05%3A0xe7b79ac4ba26cb00!3m1!7e115!4shttps%3A%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipOK57PxhaE4XVXNEoa_AF0ASAtDrxDQSzjcNOiD%3Dw213-h160-k-no!5sangels%20decor%20-%20Recherche%20Google!15sCgIgAQ&imagekey=!1e10!2sAF1QipOK57PxhaE4XVXNEoa_AF0ASAtDrxDQSzjcNOiD&hl=fr&sa=X&ved=2ahUKEwiYg7HRscL1AhVKzoUKHSrTBDgQoip6BAghEAM">
    <div class="card" id="cr1" style="width: 28rem;">
  <img src="Images/galerie3.png" id="gal"class="card-img-top" alt="..."style="width:40%;height:40%">
  <div class="card-body">
    <h1 class="card-title" style="font:bold large">Galerie <br><br></h1>


  </div>
</div>

</a>

<a data-toggle="modal" data-target="#myModal" href="#">
<div class="card" id="cr2" style="width: 28rem; ">
  <img src="Images/devis2.png" id="dei"class="card-img-top" alt="..."style="width:40%;height:40%;">
  <div class="card-body">
    <h1 class="card-title" style="font:bold large">Devis</h1>
    <h3 class="card-title" style="font:bold large">en moins de 24H</h3>

  </div>
</div>
</a>



    </cadre2>




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
          <button  class=""style="" type="button" onclick="alerte()" >Envoi</button>

        </div>
      </div>
    </div>
  </div>
  <!--ICI SE FINIT LE POP UP-->

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
<div class="container"style="padding-left:0;margin-left:0;" >
<div style="z-index:1;position:absolute;height:555px;">
    <cadre id="cd0"style="width:100vw;height:555px;background-color:#a6a6a6;opacity:1">

</div>

 <div style="z-index:4;position:absolute">
 <br>
        <br>


        <div class="container" style="padding-left:235px; padding-top:50px;">
          <cadre2 id="cd10" style="width:70vw;text-align:center; height:100px;"  >
                <!--LES AVIS GOOGLE-->
                <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                <div class="elfsight-app-daa2c6f8-cbab-4935-8fd5-3b8b5adca3e4"></div>
                <!--FIN les AVIS GOOGLE-->


          </cadre2>
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

<script>navbar();</script>
