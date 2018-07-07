<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- style luar -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- style local -->
    <link href="styles/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css" rel="stylesheet">

    <title>Medica</title>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <a href="#" class="navbar-brand">Medica</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a href="#" class="nav-link">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a href="regist.php" class="nav-link">Pendaftaran</a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="navbarDrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Laporan</a>
                <div class="dropdown-menu" aria-labelledby="navbarDrop">
                    <a href="#" class="dropdown-item">drop1</a>
                    <a href="#" class="dropdown-item">drop2</a>
                    <a href="#" class="dropdown-item">drop3</a>                    
                </div>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto" style="padding-right: 20px">
            <li class="nav-item">
                <a href="index.php" class="nav-link">Logout</a>
            </li>
        </ul>
    </div>
</nav>

<main role="main" class="container">
    <div class="jumbotron">
        <h1>Welcome</h1>
    </div>
</main>

<!-- javascript -->
<section class="script">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="styles/bootstrap/js/bootstrap.min.js"></script>
    <script src="scripts/script.js"></script>
</section>
</body>
</html>