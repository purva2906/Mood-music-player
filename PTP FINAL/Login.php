<html>
<head>
    <title>Log In</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">

     <!-- bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">

 

</head>
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

.card{
    margin-left:90px; 
    margin-top:70px;
}

.img1{
    margin-left:125px; 
    margin-top:45px; 
    width: 75%;
}

@media(max-width: 1075px) {
    .card {
        text-align: center;
    }
    .img1{
        position: static;
        margin-top: 350%;
        margin-bottom: 10%;
        width: 70%;
    }
}
    </style>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
<nav class="navbar navbar-custom"> 
    <img src="moodmusiclogo.jpg" style="margin-left:10px" width="65" height="65"></img>
      
        <div class="d-flex justify-content-end">
          <h6>  <a href="Home.html" class="btn btn-outline-dark" style="margin-right:40px; border:0px;">Home</a> </h6>

        </div>
</nav>

<div  class="row">

        <div class="col-6">

            <div class="card text-center">

                <div class="card-header text-white" style="background-color: #00AA9E;">
                    MEMBER LOGIN
                </div>
                <br>
            

                <div class="card-body">
                   <?php echo '<form method="POST" action="Login_back.php?">'; ?>
                        <input type="text" class="form-control" placeholder="Username" name="username" required>
                        <br>
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                        <br>
                        <button type="submit" class="btn btn-info btn-lg btn-block" name="submit">Log In</button>
                    </form>
                </div>

                <div class="card-footer ; text-muted">
                    <a href="Signup.php"> Don't have an account? Sign up here</a>           
                </div>
               
            </div>
            
        </div>
        <div class="col-5">
            <img class= "img1" src="login.png">
        </div>
        <div class="col-1">
        </div>


</div>

</body>

</html>