var num;
var oddeven;

var bmi;
var weight;
var height;

function checkNum() {
	num = parseInt(document.getElementById("inputBox").value);
	if (num % 2 == 0) {
		oddeven = "Even";
	}
	else {
		oddeven = "Odd";
	}


	if ((num % 3 == 0) && (num % 5 == 0)) {
		document.getElementById("head").innerHTML = "Number is a multiple of 3 and 5, and is an "
		 + oddeven + " number";
	}
	else if (num % 3 == 0) {
		document.getElementById("head").innerHTML = "Number is a multiple of 3, and is an "
		 + oddeven + " number";
	}
	else if (num % 5 == 0) {
		document.getElementById("head").innerHTML = "Number is a multiple of 5, and is an "
		 + oddeven + " number";
	}
	else if ((num % 2 != 0) && (num % 3 != 0) && (num % 4 != 0) && (num % 5 != 0) && (num % 6 != 0) && 
		(num % 7 != 0) && (num % 8 != 0) && (num % 9 != 0)) {
		document.getElementById("head").innerHTML = "Number is a Prime number"
	}	
	else {
		document.getElementById("head").innerHTML = "Number is not a multiple of 3 or 5, and is an "
		 + oddeven + " number";
	}

}

function checkWeight() {
	weight = (0.453592 * parseInt(document.getElementById("inputWeight").value)); //lbs to kgs
	height = (0.3048000097536 * parseInt(document.getElementById("inputHeight").value)); //feet to meters
	bmi = weight / (height*height);

	if (bmi < 18.5) {
		document.getElementById("headbmi").innerHTML = "You are underweight"
	}
	else if ((bmi >= 18.5) && (bmi <=24.9)) {
		document.getElementById("headbmi").innerHTML = "Your weight is normal"
	}
	else if ((bmi >= 25) && (bmi <=29.9)) {
		document.getElementById("headbmi").innerHTML = "You are overweight"
	}
	else {
		document.getElementById("headbmi").innerHTML = "You are Obese!"
	}
}






