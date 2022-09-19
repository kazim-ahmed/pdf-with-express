

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

    <!-- start-header -->
    <header class="header-generator">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="images/logo1.png" class="img-fluid mlogo">
                    <span class="powerby">Powered by:
                        <img src="images/high_com.png" class="img-fluid mx-2">
                    </span>
                </a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav ms-auto align-items-center mb-2 mb-lg-0 menu-style">
                        <li class="nav-item">
                            <a class="nav-link logout-btn" aria-current="page" href="#">Log out</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <!-- <img href="images/bars-staggered-solid.svg"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="22px" height="22px">
                                    <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM64 256c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H96c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" fill="#fff" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- end-header -->

    <!-- start-upload-section -->
    <div class="container mt-4 py-5 d-none">

        <div class="row">
            <div class="col-12">
                <h1 class="create-heading">Create, Upload and Get NID</h1>

                <div class="file-drop-area">
                    <div class="text-center">
                        <img src="images/isolated-icon.jpg" class="img-fluid">
                    </div>
                    <span class="choose-file-button">Choose files</span><br><br>
                    <span class="file-message">Upload or drag your file here</span>
                    <input class="file-input" type="file" multiple>
                </div>

            </div>
        </div>
    </div>
    <!-- end-upload-section -->

    <!-- start-preview-div -->
    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-12 col-sm-6 text-center">
                <h4>Your PDF</h4>
                <img src="images/yourpdf.PNG" class="img-fluid" alt="">
            </div>
            <div class="col-12 col-sm-6 py-5 py-sm-2 mt-sm-0 mt-4 shadow">
                <h3 class="text-center mb-4">Ready to download your NID</h3>
                <div class="w-25 select-width float-end">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select Formate</option>
                    </select>
                </div>
                <div class="w-100 mt-5 text-center float-start">
                    <img src="images/nid.PNG" class="img-fluid" alt="">
                </div>
                <div class="row justify-content-center pt-5 mt-4 text-center">
                    <button class="btn theme-btn">Download</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end-preview-div -->


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
        $(document).on('change', '.file-input', function() {


            var filesCount = $(this)[0].files.length;

            var textbox = $(this).prev();

            if (filesCount === 1) {
                var fileName = $(this).val().split('\\').pop();
                textbox.text(fileName);
            } else {
                textbox.text(filesCount + ' files selected');
            }
        });
    </script>
</body>

</html>


