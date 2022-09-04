
<?php include 'connection.php'?>

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
<body style="background-image: url('https://img.freepik.com/free-vector/hand-painted-watercolor-pastel-sky-background_23-2148902771.jpg?w=2000');">
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3 text-center">
            <h2>Bank Customers</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card mt-3 opacity-100" >
                <div class="card-header">
                    Forms - Insert Customer
                </div>
                <div class="card-body">
                    <form action="http://localhost/test/insert.php" method="post">
                        <div class="mb-3">
                            <label for="txtId" class="form-label">Id</label>
                            <input type="number" class="form-control" name="txtId" id="txtId"
                                   aria-describedby="idHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="txtName" class="form-label">Name</label>
                            <input type="text" class="form-control" name="txtName" id="txtName"
                                   aria-describedby="nameHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="txtAge" class="form-label">Age</label>
                            <input type="number" class="form-control" name="txtAge" id="txtAge"
                                   aria-describedby="ageHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="txtAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" name="txtAddress" id="txtAddress"
                                   aria-describedby="addressHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="txtSalary" class="form-label">Salary</label>
                            <div class="input-group">

                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rs.</span>
                                </div>
                                <input type="number" name="txtSalary" id="txtSalary" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>

                        <div class="d-grid mx-1 mb-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-header">
                    Forms - Retrieve Customers
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="table-primary">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Address</th>
                            <th scope="col">Salary</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php while ($record = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <th scope="row"><?php echo $record['id']; ?></th>
                                <td><?php echo $record['customer_name']; ?></td>
                                <td><?php echo $record['age']; ?></td>
                                <td><?php echo $record['address']; ?></td>
                                <td><?php echo $record['salary']; ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>