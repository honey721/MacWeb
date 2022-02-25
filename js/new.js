login_form = document.getElementById('login-form');
login_form.addEventListener('submit', (e) => {
    var XHR = new XMLHttpRequest();
    

    e.preventDefault();

    var form_data = new FormData(login_form);

    XHR.open("POST", "php/login.php", true);

    XHR.send(form_data);
    
     
    XHR.addEventListener("load", function (e) {
        var response = JSON.parse(XHR.responseText);
        if (response.success) {
            alert(response.message);
            window.location.href = "php/dashboard.php";
        } else {
            alert(response.message);
            window.location.href = "index.html";
        }
    });
});