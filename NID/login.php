<?php
session_start();
if (isset($_SESSION["USER"]) && !empty($_SESSION["USER"])) {
    header("Location: nid_generator.php");
} else {
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="scss/mycss.css">
    <script src="https://kit.fontawesome.com/72a9c1090f.js" crossorigin="anonymous"></script>
    <title>NID Generator</title>

</head>

<body>

    <header>
        <div class="container-fluid pt-3 pt-sm-5">
            <div class="row signup-logo text-center">
                <div class="col-12">
                    <img src="images/logo2.png" class="main-logo img-fluid" alt="">
                </div>
                <div class="col-12 poweredby">
                    <span>powered by:</span><img src="images/high_com.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h5 class="signup-heading">Sign In and get your nid</h5>
                </div>
            </div>

            <div class="row my-3 py-5 justify-content-center">
                <div class="col-10 col-sm-5 form_input">
                    <form action="" id="loginForm">
                        <input type="text" class="myinput" name="email" placeholder="Email">
                        <input type="text" class="myinput" name="pass" placeholder="Password">
                        <div class="submit">
                            <input type="submit" value="Sign in">
                        </div>
                        <div class="row">
                            <div class="col-12 signup-with-google mt-4 text-center">
                                <img src="images/google-logo.png" class="img-fluid">
                                <span>Sign in with google account</span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $("#loginForm").on("submit", function(e) {
                e.preventDefault();
                let formData = new FormData(this);
                formData.append("act", "Login");
                $.ajax({
                    url: "./func.php",
                    method: "POST",
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(res) {
                        location.reload();
                    }
                })
            });
    </script>
</body>
</html>

<?php } ?>