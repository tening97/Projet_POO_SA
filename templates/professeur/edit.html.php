<div class="container">

    <h1> Modifier Prof</h1>
    <form action="" method="POST">
        <div class="mb-3 mt-3">
            <label for="nom" class="form-label">Nom Complet</label>
            <input type="text" class="form-control" id="nom" placeholder="Entrez le nom complet" name="nom" value="<?= $prof->nom_complet ?>">
        </div>

        <div class="mb-3">
            <label for="grade" class="form-label">Grade:</label>
            <input type="text" class="form-control" id="grade" placeholder="Enter grade" name="grade" value="<?= $prof->grade ?>">
        </div>


        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>