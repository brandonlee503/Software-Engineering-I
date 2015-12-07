<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>paying</title>
        <link href="paycss.css" rel="stylesheet" type="text/css" />
        
        
    	<style type="text/css">
.auto-style1 {
	color: #F3EFEF;
			margin-left: 120px;
		}
.auto-style2 {
	color: #F3EFEF;
	font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
}
.auto-style3 {
	font-size: large;
			margin-left: 120px;
		}
.auto-style4 {
	font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
	font-size: large;
}
.auto-style5 {
	color: #F3EFEF;
	font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
	font-size: large;
}
		.auto-style6 {
			margin-left: 40px;
		}
		.auto-style7 {
			color: #F3EFEF;
			font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
			font-size: large;
			margin-left: 80px;
		}
		.auto-style8 {
			margin-left: 120px;
		}
		.auto-style9 {
			color: #F3EFEF;
			font-size: x-large;
			font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
			margin-left: 120px;
		}
		.auto-style10 {
			font-size: x-large;
			margin-left: 120px;
		}
		</style>
    </head>

<body background="1.jpg">

<div id="p">
	<form method="POST" id="paying" style="width: 1298px" action="payment.php">
		<div id="paying_input">
			<h1 class="auto-style1">&nbsp;PAYING FOR YOUR PARKING&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</h1>
			<p class="auto-style9"><strong>1.paying method</strong></p>
			<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="card_holder" id="holder" autocomplete="on" name="holder" placeholder="Name" class="focus" style="width: 426px; height: 29px"><div id="cardholder" class="auto-style2">
				<h3 class="auto-style3">&nbsp;&nbsp; Card Holder</h3>
			</div>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="card_holder" id="holder0" autocomplete="on" name="number" placeholder="Number" class="focus" style="width: 426px; height: 29px">
			<div id="number">
				<p class="auto-style6"><span class="auto-style7"><strong>Card Number&nbsp;</strong></span><span class="auto-style4">&nbsp;&nbsp;
					</span></p>
			</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="carddatem" id="cdm" autocomplete="on" name="cdm" placeholder="Month" class="focus" style="width: 158px; height: 30px">
			<input type="carddated" id="cdd" autocomplete="on" name="cdd" placeholder="Date" class="focus" style="width: 158px; height: 30px">
			<div id="Month" class="auto-style5">
				<p class="auto-style8"><strong>Card Expired Date(Month)/(Date)</strong></p>
			</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="CVV" id="cvv" autocomplete="on" name="cvvnnumber" placeholder="CVV number" class="focus" style="width: 152px; height: 26px">
			<div id="pwddiv2" class="auto-style5">
				<p class="auto-style8"><strong>Card CVV number</strong></p>
				<p class="auto-style8">&nbsp;</p>
				<p class="auto-style10"><strong>2.paying address</strong></p>
				<p class="auto-style8">
				&nbsp;<input type="address" id=address" autocomplete="on" name="address1" placeholder="Address" class="focus" style="width: 426px; height: 29px">
				</p>
				<p class="auto-style8">
				&nbsp;<input type="address" id=address&quot;0 autocomplete="on" name="address2" placeholder="Address" class="focus" style="width: 426px; height: 29px"></p>
				<p class="auto-style8"><strong>Address</strong>&nbsp; <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</strong></p>
				<p class="auto-style8">&nbsp;
				<input type="city" id="City" autocomplete="on" name="city" placeholder="City Name" class="focus" style="width: 115px; height: 29px">&nbsp;&nbsp;&nbsp;&nbsp;
				<select style="height: 40px; width: 126px">
				<option value="AL">Alabama</option>
				<option value="AK">Alaska</option>
				<option value="AZ">Arizona</option>
				<option value="AR">Arkansas</option>
				<option value="CA">California</option>
				<option value="CO">Colorado</option>
				<option value="CT">Connecticut</option>
				<option value="DE">Delaware</option>
				<option value="DC">District Of Columbia</option>
				<option value="FL">Florida</option>
				<option value="GA">Georgia</option>
				<option value="HI">Hawaii</option>
				<option value="ID">Idaho</option>
				<option value="IL">Illinois</option>
				<option value="IN">Indiana</option>
				<option value="IA">Iowa</option>
				<option value="KS">Kansas</option>
				<option value="KY">Kentucky</option>
				<option value="LA">Louisiana</option>
				<option value="ME">Maine</option>
				<option value="MD">Maryland</option>
				<option value="MA">Massachusetts</option>
				<option value="MI">Michigan</option>
				<option value="MN">Minnesota</option>
				<option value="MS">Mississippi</option>
				<option value="MO">Missouri</option>
				<option value="MT">Montana</option>
				<option value="NE">Nebraska</option>
				<option value="NV">Nevada</option>
				<option value="NH">New Hampshire</option>
				<option value="NJ">New Jersey</option>
				<option value="NM">New Mexico</option>
				<option value="NY">New York</option>
				<option value="NC">North Carolina</option>
				<option value="ND">North Dakota</option>
				<option value="OH">Ohio</option>
				<option value="OK">Oklahoma</option>
				<option value="OR">Oregon</option>
				<option value="PA">Pennsylvania</option>
				<option value="RI">Rhode Island</option>
				<option value="SC">South Carolina</option>
				<option value="SD">South Dakota</option>
				<option value="TN">Tennessee</option>
				<option value="TX">Texas</option>
				<option value="UT">Utah</option>
				<option value="VT">Vermont</option>
				<option value="VA">Virginia</option>
				<option value="WA">Washington</option>
				<option value="WV">West Virginia</option>
				<option value="WI">Wisconsin</option>
				<option value="WY">Wyoming</option>
				</select>&nbsp;&nbsp;
				<input type="Zip" id="Zipcode" autocomplete="on" name="Zipcode" placeholder="Zip code" class="focus" style="width: 97px; height: 29px"></p>
				<p class="auto-style8"><strong>&nbsp;City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Zip&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</strong>&nbsp; </p>
			</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input id="regbtn" type="submit" value="Pay">
			<br><br></div>
	</form>
</div>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="2.jpg" height="104" width="211"></p>
</body>
</html>
