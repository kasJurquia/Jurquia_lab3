<!DOCTYPE html>
<html lang="en">

<head>
    <title>SignUp</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f0f0f0; /* Light gray background color */
            font-family: 'Roboto', sans-serif;
        }

        .card {
            margin-top: 100px;
            border: none;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 30px;
            color: #333; /* Dark gray title text color */
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btn-login {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
        }

        .btn-login:hover {
            background-color: #0056b3;
            border-color: #0049a0;
        }

        .btn-home {
            background-color: #6c757d;
            border-color: #6c757d;
            color: #fff;
        }

        .btn-home:hover {
            background-color: #555e68;
            border-color: #4d545c;
        }

        .text-muted {
            color: #333; /* Dark gray text color */
        }

        .text-muted:hover {
            color: #555e68;
        }
    </style>
</head>

<body>
    <?php if (session()->getFlashdata('msg')): ?>
        <div class="alert alert-warning">
            <?= session()->getFlashdata('msg') ?>
        </div>
    <?php endif; ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Admin Login</h5>
                        <form action="/authlog" method="post">
                            <div class="form-group">
                                <label for="username">User Name</label>
                                <input class="form-control" type="text" name="username" id="username" placeholder="Enter your username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" name="password" id="password" placeholder="Enter your password">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block btn-login" name="save">Login</button>
                            </div>
                            <div class="form-group text-center">
                                <a href="/home" class="btn btn-secondary btn-sm btn-home" name="save">
                                    <i class="fa fa-home"></i> Home
                                </a>
                            </div>
                            <div class="text-center">
                                <span class="text-muted">Forgot</span>
                                <a class="text-muted" href="#">Username / Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="text-muted" href="/register">Create your Account <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
