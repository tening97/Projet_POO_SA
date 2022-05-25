<?php

use App\Core\HtmlProvider;
?>
<section class="text-center">

    <?= HtmlProvider::navInfo($titre, "info", 6, "", "", "") ?>

    <form action="" method="POST">
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="form-outline">
                    <label for="nom" class="form-label">Nom Complet</label>
                    <input type="text" class="form-control" id="nom" placeholder="Entrez le nom complet" name="nom">
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="form-outline">

                    <label for="matricule" class="form-label">Matricule:</label>
                    <input type="text" class="form-control" id="matricule" placeholder="Enter Le Matricule" name="matricule">
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="form-outline">
                    <label for="sexe" class="form-label">Sexe:</label>
                    <select name="sexe" class="form-select" aria-label="Default select example">
                        <option selected>Choisir le sexe</option>
                        <option value="f">F</option>
                        <option value="m">M</option>
                    </select>
                </div>
            </div>


            <div class="col-md-6 mb-4">
                <div class="form-outline">

                    <label for="classe" class="form-label">Classe</label>
                    <select name="classe" class="form-select" aria-label="Default select example">
                        <option selected>Choisir la classe</option>
                        <?php foreach ($classes as $classe) {

                        ?>


                            <option value="<?= $classe->id ?>"><?= $classe->libelle ?></option>

                        <?php } ?>
                    </select>
                </div>

            </div>

            <div class="col-md-6 mb-4">
                <div class="form-outline">
                    <label for="adresse" class="form-label">Adresse:</label>
                    <input type="text" class="form-control" id="adresse" placeholder="Entrer adresse" name="adresse">
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="form-outline">
                    <label for="login" class="form-label">Login:</label>
                    <input type="text" class="form-control" id="login" placeholder="Entrer login" name="login">
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="form-outline">
                    <label for="pwd" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Entrer pwd" name="pwd">
                </div>
            </div>
        </div>



        <!-- Submit button -->

        <button type="submit" class="btn btn-info mt-5"> Inscrire</button>


        <!-- Register buttons -->

    </form>

</section>