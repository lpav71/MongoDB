<?php include "header.php" ?>
    <div class="container">
        <form id="insert">
            <div class="mb-3">
                <label for="InputAuto" class="form-label">Марка автомобиля</label>
                <input type="text" class="form-control" name="avto" id="InputAuto" aria-describedby="emailHelp">
                <div id="InputAutoHelp" class="form-text">Введите марку автомобиля.</div>
            </div>
            <div class="mb-3">
                <label for="InputDriver" class="form-label">Фамилия водителя</label>
                <input type="text" class="form-control" name="driver" id="InputDriver">
                <div id="InputDriverHelp" class="form-text">Введите фамилию автомобиля.</div>
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
    </div>
<?php include "footer.php"; ?>