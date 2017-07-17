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