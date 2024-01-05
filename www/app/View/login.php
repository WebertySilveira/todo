<?php require_once "partials/head.php"; ?>


<section>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div>
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    Login
                    <div class="card-body p-5 text-center">
                        <form method="POST" id="login-user-form">
                            <div class="form-group row">
                                <div class="col">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" required/>
                                </div>
                                <div class="col">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="password" required/>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary">Adicionar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center">
            <div>
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    Register
                    <div class="card-body p-5 text-center">
                        <form method="POST" id="insert-user-form">
                            <div class="form-group row">
                                <div class="col">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" required/>
                                </div>
                                <div class="col">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="password" required/>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary">Adicionar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once "partials/footer.php"; ?>
