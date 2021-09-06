$(function () {
    $('#insert').submit(function (e) {
        var avto = $('#InputAuto').val();
        var driver = $('#InputDriver').val();
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "dbinsert.php",
            data: {
                "avto": avto,
                "driver": driver
            },
            success: function (result){
                window.location.href = "/";
            },
            error: function (error) {
                alert(error.responseText);
            }
        });
    });
})