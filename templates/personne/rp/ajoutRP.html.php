<div class="container">

    <h1> Ajouter RP</h1>
    <form action="ajoutRP" method="POST">
        <div class="mb-3 mt-3">
            <label for="nom" class="form-label">Nom Complet</label>
            <input type="text" class="form-control" id="nom" placeholder="Entrez le nom complet" name="nom">
        </div>

        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="login">
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>



        <button type="submit" class="btn btn-primary">Ajoutez</button>
    </form>
</div>