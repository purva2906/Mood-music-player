<html>
<head>
    <title>Sign Up</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
     <!-- bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@800&display=swap" rel="stylesheet">

    <style>
 .card-header {

/* google font */
font-family: "Oswald", sans-serif;
font-size: 30px;

}
.card-body {

/* google font */
font-family: "Oswald", sans-serif;
font-size: 30px;

}
.card-footer {

/* google font */
font-family: "Oswald", sans-serif;
font-size: 30px;

}
.navbar-custom { 
    background-color: black; 
} 
a:link {
color: green;
background-color: transparent;
text-decoration: none;
}

a:hover {
color: red;
background-color: transparent;
text-decoration: underline;
}
a.h2{
font-family: "Oswald", sans-serif;
color: black;
}

    </style>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

<nav class="navbar navbar-custom"> 
    <img src="moodmusiclogo.jpg" style="margin-left:10px" width="65" height="65"></img>
    
    <div class="d-flex justify-content-end">
            <a href="Login.php" class="btn btn-outline-dark" style="margin-right:40px; border:0px">MEMBER LOGIN</a>
        </div>
</nav>

<div class="row">

    <div class="col-1">
    <!--blank column-->
    </div>

    <div class="col-6">

        <div class="card text-center" style="margin-top:40px;" >
            <div class="card-header text-white" style="background-color: #00AA9E;">
            Music is the strongest form of magic!
            </div>

                <div class="card-body">
                    
                    <form method="POST" action="Signup_back.php">
                        <input type="text" class="form-control" placeholder="Enter Username" name="username" required>
                        <br> 
                        <input type="text" class="form-control" placeholder="Enter Your Name" name="name" required>
                        <br>
                        <input type="email" class="form-control" placeholder="Enter Email id" name="emailid" required>
                        <br>
                        <input type="tel" class="form-control" placeholder="Enter Your Gender" name="gender" required>
                        <br>
                        <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
                        <br>
                        <button type="submit" name="submit" class="btn btn-info btn-lg btn-block">Sign Up</button>
                    </form>

                </div>

                <div class="card-footer text-muted">
                    <a href="Login.php" style="text-decoration: none;"> Already have an account? Log in </a>
                </div>

        </div>
    </div>

    <div class="col-5">
        <img src="login.png" style="margin-right:20px; margin-top:80;" width="500">
   </div>


</div>


</body>


</html>