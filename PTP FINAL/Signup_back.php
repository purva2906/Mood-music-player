
<?php
 
 include('./Connect.php');
 
 if(isset($_POST['submit']))
  {  $id=uniqid();
     $username= $_POST['username'];
     $name=$_POST['name'];
     $phone=$_POST['gender'];
     $email=$_POST['emailid'];                                                                                          
     $password=$_POST['password'];
     
     $query1 = " SELECT * FROM `user` WHERE `username` = '$username' ";
     $res1 = mysqli_query($Connect,$query1);
     $data = mysqli_fetch_assoc($res1);
 
     if(strcmp($data['username'],$username)==0)
     {
       echo("<script>alert('Username or Email  is Already Registred!')</script>");
       echo("<script>window.location = 'Signup.php'</script>");
     }
     else if(strcmp($data['emailid'],$email)==0)      
     {
       echo("<script>alert('Username or Email is Already Registred!')</script>");
       echo("<script>window.location = 'Signup.php'</script>");
     }
     else
     {
       $query1 = "INSERT INTO `user`(`username`, `name`, `email`, `gender`, `password`) VALUES ('$username','$name','$email','$gender','$password')";
       $res1 = mysqli_query($Connect,$query1);
   
       echo("<script>alert('You have Sucessfully Registred!')</script>");
       echo("<script>window.location = 'login.php?id=$id'</script>");
     }
  }
  else
  {
     echo("<script>alert('Undefined action!')</script>");
     echo("<script>window.location = 'Home.html'</script>");
  }
 
 
 
 
 ?>