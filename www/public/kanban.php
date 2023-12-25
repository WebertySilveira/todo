<div class="container board">
    <form>
        <div class="form-group row">
            <div class="col">
                <input type="text" id="title" class="form-control" placeholder="Título" />
            </div>
            <div class="col">
                <input type="text" id="description" class="form-control" placeholder="Descrição" />
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Adicionar</button>
            </div>
        </div>
    </form>

    <div class="row lanes">
        <div class="col swim-lane">
            <h3 class="heading">TODO</h3>

            <div class="card task" draggable="true">
                <div class="card-body">
                    <h5 class="card-title">Título1</h5>
                    <p class="card-text">Tarefa que precisa ser realizada</p>
                </div>
            </div>

            <div class="card task" draggable="true">
                <div class="card-body">
                    <h5 class="card-title">Título2</h5>
                    <p class="card-text">Tarefa que precisa ser realizada</p>
                </div>
            </div>
        </div>

        <div class="col swim-lane">
            <h3 class="heading">DOING</h3>

            <div class="card task" draggable="true">
                <div class="card-body">
                    <h5 class="card-title">Título3</h5>
                    <p class="card-text">Tarefa que precisa ser realizada</p>
                </div>
            </div>
        </div>

        <div class="col swim-lane">
            <h3 class="heading">DONE</h3>

            <div class="card task" draggable="true">
                <div class="card-body">
                    <h5 class="card-title">Título4</h5>
                    <p class="card-text">Tarefa que precisa ser realizada</p>
                </div>
            </div>
            <div class="card task" draggable="true">
                <div class="card-body">
                    <h5 class="card-title">Título5</h5>
                    <p class="card-text">Tarefa que precisa ser realizada</p>
                </div>
            </div>
        </div>
    </div>
</div>