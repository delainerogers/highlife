<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">HighLife</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/highlife/personalInfo.php">Profile</a></li>
        <li><a href="/highlife/dashboard.php">Dashboard</a></li>
      </ul>
    </div>
  </div>
</nav>
    <div class="col-sm-9">
      



<h1>Profile</h1>
	 <p>
          <label>Name:</label>
          <input type = "Your Name"
                 id = "myName"
                 value = "Your Name Here" />
   </p>

    <p>
             <label>Gender</label>
             <select id = "myList">
                <option value = "1">Male</option>
               <option value = "2">Female</option>
               <option value = "3">Other</option>
             </select>
          </p>
   <p>
          <label>Age:</label>
          <input type = "Age"
                 id = "myAge"
                 value = "Your Age Here" />
   </p>
  
  <p>
          <label>Height:</label>
          <input type = "Your Height"
                 id = "myHeight"
                 value = "Your Height Here" />
   </p>
  <p>
          <label>Weight(lbs):</label>
          <input type = "Your Weight"
                 id = "myWight"
                 value = "Your Weight Here" />
   </p>
  <p>
             <label>Amount of exercise/week</label>
             <select id = "myList">
               <option value = "0-1">0-1</option>
               <option value = "2-3">2-3</option>
               <option value = "4">4</option>
               <option value = "5">5</option>
               <option value = "6">6</option>
               <option value = "7">7</option>
             </select>
          </p>
  
  <button>Submit</button> 



<?php include('footer.php'); ?>