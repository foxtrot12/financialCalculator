<title>Home Loan Emi</title>
<link rel="stylesheet" type="text/css" href="homel.css">
  <link rel="stylesheet" href="backbtn.css">
</head>
<body style ="display: contents;">
<button onclick="location.href='Hpage.html'" type="button" class="btn1 btn1-6 btn1-6c">Back</button>
   

<h1>HOME LOAN EMI CALCULATOR</h1>
<div class ="home">

</div>
<div class="home-loan-emi">
<form id="home loan emi calculation" method="post"style="border-bottom: inset;" >

<label for="loan">enter your loan amount:</label>
<input type="number"  min="0" oninput="if(value.length>16)value=value.slice(0,16)"class="form-control" name=" loan"  value style="
   color:blue;display: table-header-group; ="<?php if(isset($_POST['loan'])){echo $_POST['loan'];}?>" />
<br>
<label for="interest">enter your interest rate:</label>
<input type = "number" min="0" onchange="validateNum(this);"oninput="if(value.length>16)value=value.slice(0,16)" class="form-control" step = "0.01" name = "interest"  value style="
   
   color:green;table-header-group; = "<?php if(isset($_POST['interest'])){echo $_POST['interest'];}?>" />
<br>
<label for="months">enter your time period:</label>
<input type = "number" min="0" oninput="if(value.length>16)value=value.slice(0,16)"class="form-control" name = "months"  value style="
    
  color:gzcompress;table-header-group;="<?php if(isset($_POST['months'])){echo $_POST ['months'];}?>" /> 
<br>
   <input type="hidden" name="action" value=""/>
<input type = "submit"  class="form-control submit" name ="submit" value = "submit" /><br/>

</form>
<script>
 function validateNum(input)
 {
	if (input.value < 0) 
		input.value = 0;
    if (input.value > 100)
		input.value = 100;
		
	
 }
 </script>
</div>
</body>
</html>

<div class="form-control">

<?php

if(isset($_POST['action']))
{
	
		$p=$_POST['loan'];
		$r=$_POST['interest']/1200;
		$t=$_POST['months'];
		
		
	function calcemi()
	{
		//execute the calculation2wq1qa`
		global $p,$r,$t;
		$base=1+$r;
		$exp=$t;
		$power= pow($base,$exp);
		//try catch block for division by 0 not allowed
		$calc=$p * $r * ($power/($power-1));
		
		
		return ($calc);
		
	}
	$emi=calcemi();
echo ' EMI is: ' , number_format($emi,2) ; 
}	

?>
</div>
<div class ="text-data">
<h1>Frequently Asked Questions</h1>
<hr>
<h3>What is home loan EMI calculator?</h3>
<p>Home Loan EMI Calculator assists in calculation of the loan installment i.e. EMI towards your home loan. It an easy to use calculator and acts as a financial planning tool for a home buyer.</p>
<br>
<h3>How is EMI calculated?</h3>
<p>The mathematical formula for calculating EMIs is = [P x R x (1+R)^N]/[(1+R)^N-1] where:

‘P’ represents the loan amount or principal
‘N’ is the number of monthly instalments
‘R’ is the interest rate per month. Therefore, if the rate of interest per annum is 11%, then the value of ‘R’ will be 11/(12 x 100)</p>
<br><br>
<h3>Who can apply for a home loan?</h3>
<li>Salaried individuals (working in government and private sector)</li>
<li>Professionals (i.e. doctors, engineers, dentists, architects, chartered accountants, cost accountants, company secretary, management consultants, etc.)</li>
<li>Self-employed in business and filing Income-Tax Returns</li>
<li>Individuals over 21 years of age and ideally not over 60-65 years.</li>
<br><br>
<h3>How is my EMI calculated?</h3>
<p>Equated Monthly Installments or EMI are the monthly payments that you make to your home loan lender. Your EMI has two components: Principal Component and Interest Component. The Principal Component goes towards repaying your outstanding principal amount. Over the tenure of the loan, the principal component reduces your outstanding principal until it is completely repaid. The interest component does not help repay the principal, it only goes towards paying the interest charged by the lender on the loan.</p>
<br><br>
<h3>Am I paying too much EMI?</h3>
<p>The higher your interest rate, the higher your EMI. Your lender might be charging you a much higher interest rate than other lenders in the market. You might be stuck with a 11.5% interest rate while your next-door neighbour is only paying 9.45%. So not only are you paying a high EMI, you are also paying a tremendous interest amount over the loan tenure.</p>
<br><br>
<h3>But I don't want to pay so much interest and EMI. What do I do?</h3>
<p>Aah. You are not the only one who is facing this problem. You are paying a high EMI and a higher Interest Amount because the lender decided to increase your interest rate. And well, why should you pay more? Here's how you can cut down your EMI and interest repayment:</p>
<br><br>

</div>
<div class="col-md-4 col-xs-12">
<h3 class ="
