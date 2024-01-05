<div class="row lanes">
    <?php use App\Entity\Enum\Lane;

    $kanban = (new \App\Model\Kanban())->list(Lane::TODO); ?>

    <div class="col dropzone swim-lane" data-lane="<?= (Lane::TODO->value); ?>">
        <h3 class="heading">TODO</h3>

        <?php foreach ($kanban as $item): ?>
            <form method="POST" class="card task card-update-form" data-id="<?= $item['id']; ?>" draggable="true">
                <div class="card-body">
                    <input type="text" name="title" id="title" class="card-title h5" value="<?= $item['title']; ?>"
                           placeholder="title">
                    <textarea name="description" id="description"
                              class="card-text" placeholder="description"><?= $item['description']; ?></textarea>
                </div>
                <div>
                    <span class="material-icons card-remove" data-id="<?= $item['id']; ?>">delete_outline</span>
                    <button type="submit" class="material-icons card-update" data-id="<?= $item['id']; ?>">
                        <i class="material-icons">save</i>
                    </button>
                </div>
            </form>
        <?php endforeach; ?>
    </div>

    <?php $kanban = (new \App\Model\Kanban())->list(Lane::DOING); ?>

    <div class="col dropzone swim-lane" data-lane="<?= (Lane::DOING->value); ?>">

        <h3 class="heading">DOING</h3>

        <?php foreach ($kanban as $item): ?>
            <form method="POST" class="card-update-form" data-id="<?= $item['id']; ?>">
                <div class="card task" draggable="true" data-id="<?= $item['id']; ?>">
                    <div class="card-body">
                        <input type="text" name="title" id="title" class="card-title h5" value="<?= $item['title']; ?>"
                               placeholder="title">
                        <textarea name="description" id="description"
                                  class="card-text" placeholder="description"><?= $item['description']; ?></textarea>
                    </div>
                    <div>
                        <span class="material-icons card-remove" data-id="<?= $item['id']; ?>">delete_outline</span>
                        <button type="submit" class="material-icons card-update" data-id="<?= $item['id']; ?>">
                            <i class="material-icons">save</i>
                        </button>
                    </div>
                </div>
            </form>
        <?php endforeach; ?>
    </div>

    <?php $kanban = (new \App\Model\Kanban())->list(Lane::DONE); ?>

    <div class="col dropzone swim-lane" data-lane="<?= (Lane::DONE->value); ?>">

        <h3 class="heading">DONE</h3>

        <?php foreach ($kanban as $item): ?>
            <form method="POST" class="card-update-form" data-id="<?= $item['id']; ?>">
                <div class="card task" draggable="true" data-id="<?= $item['id']; ?>">
                    <div class="card-body">
                        <input type="text" name="title" id="title" class="card-title h5" value="<?= $item['title']; ?>"
                               placeholder="title">
                        <textarea name="description" id="description"
                                  class="card-text" placeholder="description"><?= $item['description']; ?></textarea>
                    </div>
                    <div>
                        <span class="material-icons card-remove" data-id="<?= $item['id']; ?>">delete_outline</span>
                        <button type="submit" class="material-icons card-update" data-id="<?= $item['id']; ?>">
                            <i class="material-icons">save</i>
                        </button>
                    </div>
                </div>
            </form>
        <?php endforeach; ?>
    </div>
</div>