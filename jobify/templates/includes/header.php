<!DOCTYPE html>
<html lang="en">
<head>
<title>Jobify</title>
<link rel="icon" href="https://react-jobs-app.netlify.app/favicon.ico"/>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/3.4/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="css/styles.css">
     <style>
a {
  background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(21,56,121,1) 55%, rgba(25,25,94,1) 79%, rgba(20,67,121,1) 100%, rgba(0,212,255,1) 100%);
margin-top:15px;
color: white;
}
body {
  background-image:url("home-bg.jpg");
  background-repeat:no-repeat;
  background-size:100% 100%;
  z-index:-1;
}
       </style>
</head>
<body>
    <div class="container" id="header">
       <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="index.php">Home</a></li>
            <li role="presentation"><a href="create.php" style="color:white;">Create Job</a></li>
          </ul>
        </nav>
        <h1 class="text-muted" id style="color:midnightblue;font-weight:bolder;" ><?php echo SITE_TITLE; ?></h1></center>
      </div>
