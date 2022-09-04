<?php include 'connection.php' ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
    <script>
        function formValidation() {
            var uid = document.forms["myForm"]["txtId"].value;
            var uname = document.forms["myForm"]["txtName"].value;

            if (uid.length == 0) {
                alert("UID cannot be empty");
                uid.focus();
            } else if (uid.length <= 5 || uid.length >= 12) {
                alert("UID length should be between 5 and 12");
            }

            if (uname.length == 0) {
                alert("Name cannot be empty");
                uname.focus();
            } else if (uname.length <= 5 || uname.length >= 12) {
                alert("Name length Should be between 5 and 12");
            }
        }
    </script>
    <title>Php Forms Test</title>
</head>
<body style="background-image: url('https://img.freepik.com/free-vector/hand-painted-watercolor-pastel-sky-background_23-2148902771.jpg?w=2000');">
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-12 mt-3 text-center">
            <h2>Registration Form</h2>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col col-md-3">

        </div>
        <div class="col-md-6">
            <div class="card my-3 opacity-100">
                <div class="card-header">
                    Form Validation
                </div>
                <div class="card-body">
                    <form action="" name="myForm" method="post" class="m-3" onsubmit="return formValidation()">

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="txtId" id="txtId"
                                   aria-describedby="idHelp">
                            <label for="txtId">User Id</label>
                        </div>
                        <!--
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="txtPassword" id="floatingPassword"
                                   placeholder="Password" required>
                            <label for="floatingPassword">Password</label>
                        </div>
                        -->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="txtName" id="txtName"
                                   placeholder="name@example.com">
                            <label for="txtName">Name</label>
                        </div>
                        <!--
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInputEmail" name="txtEmail"
                                   placeholder="name@example.com" required>
                            <label for="floatingInputEmail">Email address</label>
                        </div>
                        <div class="mb-3">
                            <label for="cboGender" class="form-label">Gender</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="cboGender" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="cboGender" id="flexRadioDefault2"
                                       checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Female
                                </label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="txtEmail" class="form-label">Language</label>
                            <div class="form-check">
                                <input class="form-check-input" name="cboEn" type="checkbox" value=""
                                       id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    English
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="cboNonEn" type="checkbox" value=""
                                       id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Non English
                                </label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Type about your self" id="floatingTextarea2"
                                          style="height: 100px"></textarea>
                                <label for="floatingTextarea2">About</label>
                            </div>
                        </div>
                        -->
                        <div class="d-grid mx-1 mb-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <div class="col col-md-3">

        </div>
    </div>
</div>
</body>
</html>

