$(function () {
    var myModal = new bootstrap.Modal(document.getElementById('myModal'), {
        keyboard: false
    });
    var driver;
    var avto;
    $('.delete').click(function () {
        var driver = $(this).closest('tr').find('.driver').text();
        $.ajax({
            type: "POST",
            url: "db.php",
            data: {
                "field": driver,
            },
            success: function (result){
                location.reload();
            }
        })
    });
    $('.update').click(function () {
        driver = $(this).closest('tr').find('.driver').text();
        avto = $(this).closest('tr').find('.avto').text();
        $('#driver').val(driver);
        $('#avto').val(avto);
        myModal.show();
    });

    $('.change').click(function () {
        var drivernew = $('#driver').val();
        var avtonew = $('#avto').val();
        $.ajax({
            type: "POST",
            url: "dbupdate.php",
            data: {
                "drivernew": drivernew,
                "avtonew": avtonew,
                "driver": driver
            },
            success: function (result){
                location.reload();
            }
        });
        myModal.hide();
    });
})