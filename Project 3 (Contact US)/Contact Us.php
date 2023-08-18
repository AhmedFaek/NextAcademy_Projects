
<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

$emailTo="ahmed@gmail.com";
$subject=$_POST ["subject"];
$body=$_POST ["content"];
$headers= "From: ".$_POST['email'];


    if(mail($emailTo,$subject,$body,$headers)){
        echo "Email sent successfully " ;
    }else{
        echo "Try again later...";
    }


    }
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/256c2a56b5.js" crossorigin="anonymous"></script>
    <title>Contact Us</title>
</head>
<style> 
body{
    background-color: #D8D9DA;
    color: black;
}
</style>
<body>

<div class="container">
    <form method="post">
    <h1>Contact Us</h1>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Subject</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Subject" name="subject">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Content</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" style="background-color: #FFF6E0; color: black;">Submit</button>

    </form>
</div>









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.0.0.js" integrity="sha256-iW43nTNM8LFseNmWKhV5FHFW1KcjVQMvzg3l9nPU4oc="
    crossorigin="anonymous"></script>
</body>
</html>