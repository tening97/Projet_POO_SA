<div class="container >

    <h1> Ajouter Classe</h1>
    <form action=" ajoutClasse" method="POST">
    <div class="mb-3 mt-3">
        <label for="libelle" class="form-label">libelle</label>
        <input type="text" class="form-control" id="libelle" placeholder="Entrez le libelle complet" name="libelle">
    </div>

    <div class="mb-3 mt-3">
        <label for="niveau" class="form-label">Niveau</label>
        <select name="niveau" class="form-select" aria-label="Default select example">
            <option selected>Choisir le niveau</option>
            <option value="licence1">Licence 1</option>
            <option value="licence2">Licence 2</option>
            <option value="licence3">Licence 3</option>
            <option value="master1">Master 1</option>
            <option value="master2">Master 2</option>


        </select>
    </div>

    <div class="mb-3">
        <label for="filiere" class="form-label">Filiere:</label>
        <input type="text" class="form-control" id="filiere" placeholder="Enter filiere" name="filiere">
    </div>



    <button type="submit" class="btn btn-primary">Ajoutez</button>
    </form>
</div>

<!-- Section: Design Block -->
