(function () {
    'use strict';

    console.log("send");

    function sendForm(event) {
        event.preventDefault();

        let form_data = new FormData(this);
        console.log(form_data);

        let xhr = new XMLHttpRequest();
        xhr.open("POST", this.action, true);
        xhr.send(form_data);

        xhr.onload = function (oEvent) {
            if (xhr.status == 200) {
                console.log("xhr response", xhr.responseText);
                responseHandler(xhr.responseText);
            }
        };
    }

    function responseHandler(response) {
        if (response === "USER_ADDED") {
            window.location.href = "/users";
            console.log('reg');
        } else if (response === "USER_AUTH"){
            window.location.href = "/showaccount";
        } else if (response === "USER_EXISTS"){
            console.log('user exists');
            window.location.href = "/index";
        } else if (response === "PWD_ERROR"){
            window.location.href = "/";
        }
        else {
            window.location.href = "/games";
        }
    }

    function addFormListener() {
        for (let i = 0; i < document.forms.length; i++) {
            document.forms[i].addEventListener('submit', sendForm);
        }
    }

    addFormListener();

}());