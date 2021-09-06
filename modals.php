
<div class="modal fade" tabindex="-1" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Изменение записи</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="dbinsert.php" method="post">
                    <div class="mb-3">
                        <label for="InputAuto" class="form-label">Марка автомобиля</label>
                        <input type="text" class="form-control" name="avto" id="avto" aria-describedby="emailHelp">
                        <div id="InputAutoHelp" class="form-text">Введите марку автомобиля.</div>
                    </div>
                    <div class="mb-3">
                        <label for="InputDriver" class="form-label">Фамилия водителя</label>
                        <input type="text" class="form-control" name="driver" id="driver">
                        <div id="InputDriverHelp" class="form-text">Введите фамилию автомобиля.</div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary change">Save changes</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="modals.js"></script>

