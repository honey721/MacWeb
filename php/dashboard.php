<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mystyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/mac.jpg" alt="" class="img-mac"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="contact.html">Contact Us</a>
                    </li>
                </ul>
                <div class="rightnav" style="display: flex; flex-direction: row;">
                    <h6 style="margin: 20px;">
                        <?php
                        echo "<b> Hi </b>" . $_SESSION['name'];
                        ?>
                    </h6>
                    <a href="logout.php"><button class="btn btn-sm btn-outline-danger" type="submit" style="margin: 14px;">Logout</button></a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div>
            <h1><b><?php
                    echo $_SESSION['name'];
                    ?></b></h1>
            <p>
                <?php
                echo $_SESSION['email'];
                ?></p>
        </div>
        <div class="alert alert-secondary" role="alert">
            only you can see this information!
        </div>
        <div class="privacy">
            <h4>Your privacy</h4>
            <p>You can make privacy choices that are right for you. The info
                saved in your account helps make your MacWeb experience
                more helpful and relevant.</p>
        </div>


    </div>
</body>

</html>