<!DOCTYPE html>
<html lang="en">
<head>
  <title>Car Loan EMI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="backbtn.css">
  <style>

body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    /*background-color: gainsboro;*/
    background-color: white;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    text-align: inherit;
    font-size: 40px;
    font-weight: 500;
    color: black;
    /*padding-top: 40px;*/
    /*padding-bottom: 40px;
    margin-bottom: 40px;
    margin-top: 40px;*/
    
}

*{
    box-sizing: border-box; 
    margin: 0px;
    
}

    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {
        height: 100%;
    }





    .row.content.first {
      background-color: yellow;
  color: black;
  border-bottom: 1px solid black;
  text-align: center;
  font-size: 90px;
    }

    .row.content .first .p {
    color: black;
  margin-top: 1px;
  font-size: 80px;
  font-style: bold;
  text-align: center;

    }


.row.content form {
    
   /* border: 1px solid white;*/
    color: black;
    background-color: honeydew;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 35px;
    font-weight: 450;
    margin: auto 0;
    margin-left: 25%;
    margin-right: 25%;

    padding: 1px 2px;
    font-style: bold;
    text-align: auto;
    
    

}


.icon {
    height: 80px;
    width: 80px;
    background-color: teal;
    margin: 20px auto 20px;
    border-radius: 50%;
    text-align: center;
}

.icon .fa{
    font-size: 50px;
    color: white;
    line-height: 60px;
}


.row.content form input {
    text-align: center;
  width: 40%;
  height: 5%;
  padding: 10px;
  border-radius: 4px;
  border: 1px solid silver;
  color: black;
}

form input[type=submit] {
    width: 30%;
    background-color: green;
    color: lightblue;
    padding: 10px 40px;
    margin: 10px 0;
    margin-left: 10%;
    border: 2px solid white;
    border-radius: 8px;
    cursor: pointer;
  }
  
  input[type=submit]:hover {
    background-color: #454545;
    box-align: center;
    text-align: center;
  }

.row.content form .app-form-control {
    background-color: white;
    max-width: 100%;
}

.row.content form .app-form-control::before{
    content: '';
    height: 5px;
    background-color: whitesmoke;
    position: absolute;
    bottom: 5px;
    width: 50px;
    left: 0;
    right: 0;
    margin: auto;
    transition: all .5s ease;
}

.row.content form .app-form-control:hover::before{
    width: 100%;

}

.row.content form .app-form-button {
    flex: 0 0 100%;
    max-width: 250%;
    font-size: 20px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    text-align: center;
    border-radius: 4px;
    color: white;
    border: 1px solid #ffffff;
    padding: 17px 28px;
    text-decoration: none;
    display: inline-block;
    text-transform: uppercase;
    font-weight: 600;
    font-weight: bold;
    background-color: green;
    width: 50%;
}

.row.content form .app-form-button:hover {
    background-color: #ffffff;
    color: black;
}

.row.content form .strong {
    text-align: center;
}
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: honeydew;
      height: 100%;
      margin-top: 18%;
      color: black;
      font-style: bold;
    }
    
    hr {
        border-color: black;
    }

    h1 {
      text-align: start;
    }
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">

  <div class="container-fluid">

    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>

      <a class="navbar-brand" href="#">Calculator</a>

    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
    </div>
  </div>
</nav>
 <button onclick="location.href='Hpage.html'" type="button" class="btn1 btn1-6 btn1-6c">Back</button>
<div class="container-fluid text-center">   

  <div class="row content">

    <div class="col-sm-2 sidenav">
            <?php  


if(isset($_POST['submit']))
{


    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

          echo nl2br("Required Loan Amount:");
          echo nl2br("\n").$_POST['num1'];
          echo nl2br("\n");
          echo nl2br("\n");

          echo nl2br("Total intrest payable:");
          echo nl2br("\n").$_POST['num2'];
          echo nl2br("\n");
          echo nl2br("\n");

          echo nl2br("Months required:");
          echo nl2br("\n").$_POST['num3'];
}
            ?>


    </div>

<div class="col-sm-8 text-center"> 
      

    <div class="first" style="background-color: transparent;padding:40px;margin-bottom: 40px;text-align:center;">
  <strong>Car Loan EMI Calculator</strong><br/>
  <h3> The online calculator will provide you with the answer in a split second!</h3>
</div>


  <form method="POST">


<div class="icon">
<i class="fa fa-calculator"></i>
</div>

<label for="lamount">
            <h7>Loan Amount : </t></t></h7>
</label>
            <input type="text" id="lamount" name="num1" class="app-form-control" placeholder="Loan in RS.">
            <br/><br/>

            <label for="iloan">
            <h7>
            Intrest on Loan :
            </h7>
            </label>

            <input type="text" id="iloan" name="num2" class="app-form-control" placeholder="in %">
            <br/><br/>

            <label for="month">
            <h7>
            Month :    
            </h7>
            </label>

            <input type="text" id="month" name="num3" class="app-form-control" placeholder="Month">
            <br/><br/>
            
            <input type="submit" name="submit" value="Calculate" onClick="" class="app-form-button">
            <br/><br/>
<strong> Calculate Your EMI </strong>

</form>
<br/>
      <hr>
      <br>
      <strong>Frequently asked Question ?</strong><br><br><hr/>

    <strong> What is Car Loan ?</strong><br>
    <h1>
      <ul>
        <li>
          A car loan is a fixed amount of money borrowed at a fixed rate and repaid over a fixed amount of time.
</li>
</ul>
</h1> <br/><hr/>

    <strong>How is my Car Loan EMI calculated?</strong><br>
    <h1>
      <ul>
        <li>
          Your car loan EMI can be calculated with an online car loan calculator.</li> <br/>
        <li>The EMI for the loan is calculated using the formula,</br>
        
        EMI = [P x R x (1+R)^N]/[(1+R)^N-1]</li><br/>
        <li>
        Where,<br/>
        P = Principal loaned amount<br/>
        R = Rate of Interest<br/>
        N = Tenure (in months)<br/>
</li>
</ul>
</h1>

<hr/>
    <strong>How to use an EMI calculator?</strong><br>
<h1>
    Follow this simple 3-step process to use the online personal loan EMI calculator:<br/><br/>
        
        Enter the principal amount: Choose between the minimum and maximum principal amount and enter it in the calculator.<br/>
        Enter the intrest : Enter the rate of interest that you can afford against the loan. Banks assign a minimum interest rate against personal loans.<br/>
        Enter the tenure/ Month: Enter the Months by choosing between the minimum and maximum months to repay the loan<br/>
        Once you enter all the above mentioned figures, the personal loan calculator will compute the payable EMI amount.
</h1><hr/>
    </div>

    <div class="col-sm-2 sidenav">
      

    <span> EMI </span>
<p>(Equated Monthly EMI is)</p><br>
<i class="fa fa-inr" aria-hidden="true"></i>

<div class="second">

<p>
<?php

if(isset($_POST['submit']))
{

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    function emi_calculator($p, $r, $t) 
{ 
$emi; 

// one month interest 
$r = $r / (12 * 100); 

// one month period 
$t = $t * 12;  

$emi = ($p * $r * pow(1 + $r, $t)) /  
          (pow(1 + $r, $t) - 1); 
        
return ($emi); 


} 

$emi = emi_calculator($num1, $num2, $num3); 
echo " " .$emi; 
return ($num1>10);


}   

?>
</P>


    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Car Loan EMI Calculator</p>
</footer>

</body>
</html>
