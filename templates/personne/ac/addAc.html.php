<div class="container">
    <div class="card mx-4 mx-md-5 shadow-5-strong" style="
       
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
        <div class="card-body py-5 px-md-5">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-5">
                    <form action="addAc" method="POST">
                        <div class="mb-3 mt-3">
                            <label for="nom" class="form-label">Nom Complet</label>
                            <input type="text" class="form-control" id="nom" placeholder="Entrez le nom complet" name="nom">
                        </div>

                        <div class="mb-3">
                            <label for="login" class="form-label">Login:</label>
                            <input type="text" class="form-control" id="login" placeholder="Entrer login" name="login">
                        </div>

                        <div class="mb-3">
                            <label for="pwd" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Entrer pwd" name="pwd">
                        </div>



                        <button type="submit" class="btn btn-primary">Ajouter AC</button>
                    </form>
                </div>
            </div>
        </div>
    </div>