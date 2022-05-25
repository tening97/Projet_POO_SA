<div class="container ">

    <form action="ajoutP" method="POST">
        <h3 class="fw-normal mb-3 " style="letter-spacing: 1px;">Add Professeur</h3>

        <div class="mb-3 mt-3">
            <label for="nom" class="form-label">Nom Complet</label>
            <input type="text" class="form-control" id="nom" placeholder="Entrez le nom complet" name="nom">
        </div>

        <div class="form-outline mb-4">
            <label for="grade" class="form-label">Grade </label>
            <input type="text" class="form-control" id="grade" placeholder="Enter grade" name="grade">
        </div>

        <div class="pt-1 mb-4">
            <button class="btn btn-success btn-lg btn-block" type="submit">Ajouter</button>
        </div>

    </form>