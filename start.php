<div class="container">
    <button class="btn btn-info" style="top: 10px;margin-top: 30px;"><a href="insert.php">Добавить</a></button>
    <p></p>
    <table class="table">
        <?php foreach ($cursor as $document) { ?>
            <tr>
                <td class="avto"><?= $document->model ?></td>
                <td class="driver"><?= $document->driver ?></td>
                <td>
                    <button type="button" class="btn btn-primary update">Изменить</button>
                    <button type="button" class="btn btn-danger delete">Удалить</button>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
