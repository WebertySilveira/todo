<div class="row lanes">
    <?php use App\Entity\Enum\Lane;

    $kanban = (new \App\Model\Kanban())->list(Lane::TODO); ?>

    <div class="col dropzone swim-lane" data-lane="<?= (Lane::TODO->value); ?>">
        <h3 class="heading">TODO</h3>

        <?php foreach ($kanban as $item): ?>
            <div class="card task" draggable="true" data-id="<?= $item['id']; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $item['title']; ?></h5>
                    <p class="card-text"><?= $item['description']; ?></p>
                </div>
                <div>
                    <span class="material-icons" data-id="<?= $item['id']; ?>" id="card-remove">delete_outline</span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <?php $kanban = (new \App\Model\Kanban())->list(Lane::DOING); ?>

    <div class="col dropzone swim-lane" data-lane="<?= (Lane::DOING->value); ?>">

        <h3 class="heading">DOING</h3>

        <?php foreach ($kanban as $item): ?>
            <div class="card task" draggable="true" data-id="<?= $item['id']; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $item['title']; ?></h5>
                    <p class="card-text"><?= $item['description']; ?></p>
                </div>
                <div>
                    <span class="material-icons" data-id="<?= $item['id']; ?>" id="card-remove">delete_outline</span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <?php $kanban = (new \App\Model\Kanban())->list(Lane::DONE); ?>

    <div class="col dropzone swim-lane" data-lane="<?= (Lane::DONE->value); ?>">

        <h3 class="heading">DONE</h3>

        <?php foreach ($kanban as $item): ?>
            <div class="card task" draggable="true" data-id="<?= $item['id']; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $item['title']; ?></h5>
                    <p class="card-text"><?= $item['description']; ?></p>
                </div>
                <div>
                    <span class="material-icons" data-id="<?= $item['id']; ?>" id="card-remove">delete_outline</span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>