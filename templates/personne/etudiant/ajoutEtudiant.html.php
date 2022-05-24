<div class="container">

    <h1> Ajouter Etudiant</h1>
    <form action="ajoutEtudiant" method="POST">
        <div class="mb-3 mt-3">
            <label for="nom" class="form-label">Nom Complet</label>
            <input type="text" class="form-control" id="nom" placeholder="Entrez le nom complet" name="nom">
        </div>

        <div class="mb-3">
            <label for="matricule" class="form-label">Matricule:</label>
            <input type="text" class="form-control" id="matricule" placeholder="Enter Le Matricule" name="matricule">
        </div>


        <div class="mb-3">
            <label for="sexe" class="form-label">Sexe:</label>
            <input type="text" class="form-control" id="sexe" placeholder="Enter grade" name="sexe">
        </div>

        <div class="mb-3">
            <label for="adresse" class="form-label">Adresse:</label>
            <input type="text" class="form-control" id="adresse" placeholder="Entrer adresse" name="adresse">
        </div>

        <div class="mb-3">
            <label for="login" class="form-label">Login:</label>
            <input type="text" class="form-control" id="login" placeholder="Entrer login" name="login">
        </div>

        <div class="mb-3">
            <label for="pwd" class="form-label">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Entrer pwd" name="pwd">
        </div>



        <button type="submit" class="btn btn-primary">Ajouter Etudiant</button>
    </form>
</div>

<h4><a href="<?= $Constantes::WEB_ROOT . 'accueil' ?>">Retour</a></h4>