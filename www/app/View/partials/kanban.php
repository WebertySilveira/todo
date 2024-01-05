<div class="row lanes">
    <?php use App\Entity\Enum\Lane;

    $kanban = (new \App\Model\Kanban())->list(Lane::TODO); ?>

    <div class="col dropzone swim-lane" data-lane="<?= (Lane::TODO->value); ?>">
        <h3 class="heading">TODO</h3>

        <?php
        foreach ($kanban

                 as $item):
            $complete = $item['complete'] == 1 ? "complete" : "";
            ?>
            <form method="POST" class="card task card-update-form" data-id="<?= $item['id']; ?>"
                  draggable="true">
                <div class="card-body <?= $complete ?>">
                    <input type="text" name="title" id="title" class="card-title h5" value="<?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8'); ?>"
                           placeholder="title">
                    <textarea name="description" id="description"
                              class="card-text" placeholder="description"><?= htmlspecialchars($item['description'], ENT_QUOTES, 'UTF-8'); ?></textarea>
                    <div>
                        <button type="submit" class="material-icons card-update" data-id="<?= $item['id']; ?>">
                            <i class="material-icons">save</i>
                        </button>
                        <span class="material-icons card-remove" data-id="<?= $item['id']; ?>">delete_outline</span>
                    </div>
                </div>
            </form>
        <?php endforeach; ?>
    </div>

    <?php $kanban = (new \App\Model\Kanban())->list(Lane::DOING); ?>

    <div class="col dropzone swim-lane" data-lane="<?= (Lane::DOING->value); ?>">

        <h3 class="heading">DOING</h3>

        <?php
        foreach ($kanban

                 as $item):
            $complete = $item['complete'] == 1 ? "complete" : "";
            ?>
            <form method="POST" class="card task card-update-form" data-id="<?= $item['id']; ?>"
                  draggable="true">
                <div class="card-body <?= $complete ?>">
                    <input type="text" name="title" id="title" class="card-title h5" value="<?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8'); ?>"
                           placeholder="title">
                    <textarea name="description" id="description"
                              class="card-text" placeholder="description"><?= htmlspecialchars($item['description'], ENT_QUOTES, 'UTF-8'); ?></textarea>
                    <div>
                        <button type="submit" class="material-icons card-update" data-id="<?= $item['id']; ?>">
                            <i class="material-icons">save</i>
                        </button>
                        <span class="material-icons card-remove" data-id="<?= $item['id']; ?>">delete_outline</span>
                    </div>
                </div>
            </form>
        <?php endforeach; ?>
    </div>

    <?php $kanban = (new \App\Model\Kanban())->list(Lane::DONE); ?>

    <div class="col dropzone swim-lane" data-lane="<?= (Lane::DONE->value); ?>">

        <h3 class="heading">DONE</h3>

        <?php
        foreach ($kanban

                 as $item):
            $complete = $item['complete'] == 1 ? "complete" : "";
            ?>
            <form method="POST" class="card task card-update-form" data-id="<?= $item['id']; ?>"
                  draggable="true">
                <div class="card-body <?= $complete ?>">
                    <input type="text" name="title" id="title" class="card-title h5" value="<?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8'); ?>"
                           placeholder="title">
                    <textarea name="description" id="description"
                              class="card-text" placeholder="description"><?= htmlspecialchars($item['description'], ENT_QUOTES, 'UTF-8'); ?></textarea>
                    <div>
                        <button type="submit" class="material-icons card-update" data-id="<?= $item['id']; ?>">
                            <i class="material-icons">save</i>
                        </button>
                        <span class="material-icons card-remove" data-id="<?= $item['id']; ?>">delete_outline</span>
                    </div>
                </div>
            </form>
        <?php endforeach; ?>
    </div>
</div>