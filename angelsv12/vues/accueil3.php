<script>
 RedirectionJavascript();
</script>
<script>bois();</script>



<div style="z-index:3;position:fixed">
  <img src="Images/logo7.png" class="card-img-top" style="width:60%;height:60%;margin-left:20vw;margin-top:43px;opacity:0.85">
</div>
<div style="z-index:5;position:fixed">
  <img src="Images/logo6.png" class="card-img-top" style="width:60%;height:60%;margin-left:20vw;opacity:0.85; margin-top:30px;">
</div>
<!-- Bouton devis/galerie -->
<div style="margin-top:25px;position:absolute;z-index:6">
  <a href="https://www.google.com/maps/uv?pb=!1s0x47e663ac32461f05%3A0xe7b79ac4ba26cb00!3m1!7e115!4shttps%3A%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipOK57PxhaE4XVXNEoa_AF0ASAtDrxDQSzjcNOiD%3Dw213-h160-k-no!5sangels%20decor%20-%20Recherche%20Google!15sCgIgAQ&imagekey=!1e10!2sAF1QipOK57PxhaE4XVXNEoa_AF0ASAtDrxDQSzjcNOiD&hl=fr&sa=X&ved=2ahUKEwiYg7HRscL1AhVKzoUKHSrTBDgQoip6BAghEAM">
    <div class="card" id="cr1" style="width: 22rem;text-align:center;margin-left:10vw;">
      <img src="Images/galerie3.png" id="gal"class="card-img-top" alt="..."style="width:40%;height:40%">
      <div class="card-body">
        <h1 class="card-title" style="font:bold large">Galerie <br><br></h1>
      </div>
    </div>
  </a>

  <a data-toggle="modal" data-target="#myModal" href="#">
    <div class="card" id="cr2" style="width: 22rem;text-align:center;margin-left:35vw ">
      <img src="Images/devis2.png" id="dei"class="card-img-top" alt="..."style="width:40%;height:40%;">
      <div class="card-body">
        <h1 class="card-title" style="font:bold large"> Devis </h1>
        <h3 class="card-title" style="font:bold large"> en moins de 24H </h3>
      </div>
    </div>
  </a>
</div>
<!-- Fin bouton devis/galerie -->

<!-- Debut bouton appel -->
<div style="margin-top:500px;position:absolute;z-index:6">
  <a  href="tel:+33659739475" >
    <button type="button"style="width:30vw;margin-left:35vw"><i class="fas fa-phone me-3"  style="font-size: 1.2em;">  06 59 73 94 75</i></button>
  </a>
</div>
<!-- Fin bouton appel -->

<!-- Debut du cadre gris -->
<div style="margin-top:700px;position:absolute;z-index:1;height:700px;width:100vw;background-color:grey; ">
</div>
    <cadre2 id="cd10" style="width:70vw;text-align:center; height:100px;">
        <!--LES AVIS GOOGLE-->
        <div style='position:absolute;z-index:6;margin-top:900px;text-align:center;width:70vw;margin-left:20vw;'>
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <div class="elfsight-app-daa2c6f8-cbab-4935-8fd5-3b8b5adca3e4" style=''></div>
</div>
        <!--FIN les AVIS GOOGLE-->
    </cadre2>

    <!--ICI CE TROUVE LE POP UP -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"> Devis / Contact</h5>




            </div>
            <div class="modal-body">
              <form method="POST" action="index.php?uc=env" id="formu" enctype="multipart/form-data">
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
                <div class="form-group">
                  <label for="avatar">Photo (facultative)</label>
                  <input type="file" class="form-control" id="photo" name="fil" accept="image/png, image/jpeg, image/jpg">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>-->
            <button  class=""style="width:10vw;height:70px;" type="button" onclick="alerte()" >Envoi</button>

            </div>
          </div>
        </div>
      </div>
      <!--ICI SE FINIT LE POP UP-->



<!-- Fin du cadre gris -->

<!-- Debut du cadre: A propos de nous -->
<div style="margin-top:1200px;position:absolute;z-index:4;height:500px;width:100vw;background-color:#FFFFFF;"></div>
  <div style='position:absolute;z-index:6;margin-top:1250px;text-align:center;width:70vw;margin-left:125px;'>
    <h1 style="text-align:center; text-shadow:2px 3px 1px black;color:grey; margin-top:5px;margin-left:300px;;">A propos de nous</h1>
    <div style='position:absolute;z-index:6;margin-top:0px;text-align:center;width:70vw;margin-left:125px;'>
     <h3 style="opacity:1; width:70vw; color:grey;text-shadow:2px 2px 1px black; ">En 2009, Angel a décidé de se lancer dans l'aventure de l'entreprenariat, grâce à ses 13ans d'expérience de parqueteur dans les entreprises les plus prestigieuses de l'héxagone, il satistfait tous ses clients même les plus exigeants.<br> <br>L'entreprise Angels Décor est spécialisée dans la pose, la réparation et l'entretien de tous les parquets.<br> <br> Notre savoir-faire, notre expérience et notre amour... le parquet. <br><br> Pose de parquet neuf, rénovation et restauration de planchers anciens, ainsi que raccords, poncage, vitrification et entretien de parquets.</h3>
    </div>
  </div>
<!-- Fin du cadre: A propos de nous -->
<script>navbar();</script>
