
    <div class="row lanes">
        <div class="col swim-lane">
            <h3 class="heading">TODO</h3>

            <?php $kanban = (new \App\Model\Kanban())->list(\App\Entity\Enum\Column::TODO); ?>

            <?php foreach ($kanban as $item): ?>
            <div class="card task" draggable="true">
                <div class="card-body">
                    <h5 class="card-title"><?= $item['title']; ?></h5>
                    <p class="card-text"><?= $item['description']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
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
        </div>
    </div>
</div>