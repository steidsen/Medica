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
    <link rel="stylesheet" href="styles/style.css">

    <title>Medica</title>
</head>
<body class="text-center login-body">

    <form action="home.php" class="form-signin">
        <h1 class="h3 mb-3 font-weight-normal">Sign in</h1>
        <label for="ID" class="sr-only">ID</label>
        <input type="label" class="form-control" id="ID" placeholder="ID" autofocus> 
        <!-- pada inputny nanti diberikan required -->
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
    </form>
        
<!-- javascript -->
<section class="script">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="styles/bootstrap/js/bootstrap.min.js"></script>
    <script src="scripts/script.js"></script>
</section>
</body>
</html>