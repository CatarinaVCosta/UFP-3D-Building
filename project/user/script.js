document.querySelector(".qtd.btn.Plus").addEventListener("click", function (e) {
    var val = document.querySelector(".qtd[type='text']").value;
    val = parseInt(val, 10);
    if (val < 999)
        document.querySelector(".qtd[type='text']").value = val + 1;
    else
        document.querySelector(".qtd[type='text']").value = 0;
});

document.querySelector(".qtd.btn.Minus").addEventListener("click", function (e) {
    var val = document.querySelector(".qtd[type='text']").value;
    val = parseInt(val, 10);
    if (val > 0)
        document.querySelector(".qtd[type='text']").value = val - 1;
    else
        document.querySelector(".qtd[type='text']").value = 0;
});

document.querySelector("#fForm").addEventListener("submit", function (e) {
    var val = document.querySelector(".qtd[type='text']").value;
    val = parseInt(val, 10);
    if (val < 0) {
        alert("only positive numbers");
        document.querySelector(".qtd[type='text']").value = 0;
        e.preventDefault();
    }
});



$(".TabContent").on("click", function () {
    //get the form values
    var id = $('#id').val();
    var user_id = $('#user_id').val();
    var start_hour = $('#start').val();
    var duration = $('#duration').val();
    var data = $('#date').val();

    var choosen = this;

    var room = $(this).find(".dentro-dentro h2").text();

    var myData = {"room": room, "start": start_hour, "duration": duration, "date": data, "submit": "1", "reservaSubmit": "1"};


    $.ajax({
        type: "POST",
        data: myData,
        success: function (result) {
            var dialog = $('<p>Are you sure you want to confirm reservation?</p>').dialog({
                buttons: {
                    "Confirm": function () {
                        $(choosen).addClass("reservado");
                        alert('Wait for admin\'s approval');window.location.href = '../map/index.php';
                        dialog.dialog('close');
                    },
                    "Cancel": function () {
                        dialog.dialog('close');
                    }
                }
            });
        },
        error: function (result) {
            alert("erro");
        }

    }
    );

});

