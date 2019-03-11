<?php include("../header.php") ?>
<section class="main">
       <h2>Nous contacter</h2> 
    <div class="container row " style= "margin-top: 35px;">
        <div class="contactPage1">
            <form action="" method="post">
            <p>
                <label for="name">Nom :</label><br>
                <input type="text" id="name" name="user_name">
            </p>
            <p>
                <label for="mail">E-mail :</label><br>
                <input type="email" id="mail" name="user_mail">
            </p>
            <p>
                <label for="msg">Message :</label><br>
                <textarea id="msg" name="user_message"></textarea>
            </p>
            <input class="submit"type="submit" value="Envoyer" />
        </form>
        </div>
    

    <div class=" contactPage2">
           <p class="contactTxt">Vous pouvez également nous contacter par courrier postal : </p><br>
           <p class="contactTxt" style="color:black;">Groupe HSS</p>
           <p class="contactTxt" style="color:black;">3 rue de la gare</p>
           <p class="contactTxt" style="color:black;">68100 Mulhouse</p><br>

           <p class="contactTxt">Ou par courrier électronnique : </p><br>
           <p class="contactTxt" style="color:black;">contact@hss.com</p><br>

           <p class="contactTxt">Si vous souhaitez en savoir plus sur le groupe, vous pouvez télécharger notre dossier de presse sur la page <a href="#" style="color: #E9E84C;">documents de presse</a></p>

    </div>

    </div>
</section>
<?php include("../footer.php"); ?>
