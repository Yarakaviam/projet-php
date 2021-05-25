<?php
require __DIR__ . '/partials/themeStart.php';
?>

<h1>Contact</h1>




    
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="form-group">
            <label for="formGroupExampleInput">Prenom</label>
            <input type="text" class="form-control" name="prenom" placeholder="John">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Nom</label>
            <input type="text" class="form-control" name="nom" placeholder="Doe">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput3">Email</label>
            <input type="mail" class="form-control" name="mail" placeholder="example@live.fr">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput4">Telephone</label>
            <input type="phone" class="form-control" name="phone" placeholder="+33...">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput5">Ville</label>
            <input type="city" class="form-control" name="city" placeholder="New York">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput6">Commentaire</label>
            <textarea type="text" class="form-control" name="poste" placeholder="blabla"></textarea>
        </div>

        <div class="form-group">
            <input type="submit" value="Envoyer vos infos">

        </div>
    </form>
    
    <?php
require __DIR__ . '/partials/themeEnd.php';
?>