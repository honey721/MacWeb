signup_form = document.getElementById('signup-form');
signup_form.addEventListener('submit', (e) => {
    var XHR = new XMLHttpRequest();


    e.preventDefault();

    var form_data = new FormData(signup_form);

    XHR.open("POST", "php/signup.php", true);

    XHR.send(form_data);
    console.log('hello');

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