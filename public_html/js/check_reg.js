function valid(event){
    var pas = document.getElementById('password').value
    var cpas = document.getElementById('password_c').value
    for(i=0;i < cpas.length; i++)
    {
        document.getElementById("check_p").innerText = "";

        if(pas[i] != cpas[i] && event.keyCode != 8)
        {
            document.getElementById("check_p").innerText = "Пароли не совпадают";
            break;
        }
    }
}