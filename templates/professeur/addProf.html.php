<div class="container">
    <div class="d-flex align-items-center justify-content-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

        <form style="width: 23rem;" action="<?= 'ajoutP' ?>" method="POST">
            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Add Professeur</h3>

            <div class="form-outline mb-4">
                <label for="nom" class="form-label">Nom Complet</label>
                <input type="text" class="form-control" id="nom" placeholder="Entrez le nom complet" name="nom">
            </div>

            <div class="form-outline mb-4">
                <label for="grade" class="form-label">Grade:</label>
                <input type="text" class="form-control" id="grade" placeholder="Enter grade" name="grade">
            </div>

            <div class="pt-1 mb-4">
                <button class="btn btn-success btn-lg btn-block" type="submit">Ajouter</button>
            </div>
     </form>

    </div>