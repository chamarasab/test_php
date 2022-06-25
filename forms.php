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
    <title>Php Forms Test</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header">
                    Forms - Insert Data
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="txtName" class="form-label">Name</label>
                            <input type="text" class="form-control" name="txtName" id="txtName"
                                   aria-describedby="nameHelp">
                        </div>
                        <div class="mb-3">
                            <label for="txtAge" class="form-label">Age</label>
                            <input type="number" class="form-control" name="txtAge" id="txtAge"
                                   aria-describedby="ageHelp">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="card-footer">
                    <span class="text-danger">
                        <?php
                            if (isset($_POST["txtName"])) {
                                echo "Hello " . $_POST["txtName"];
                            }
                        ?>
                    </span>
                    <span class="text-primary">
                        <?php
                            if (isset($_POST["txtAge"])) {
                                echo "You're " . $_POST["txtAge"] . " years old.";
                            }
                        ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>