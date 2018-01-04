var num;
var oddeven;

var bmi;
var weight;
var height;

function checkNum() {
	num = parseInt(document.getElementById("inputBox").value);
	if (num % 2 == 0) {
		oddeven = "Even";
	}else {
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
	var ow = document.getElementById("weight");
	var oh = document.getElementById("height");
	var selw = ow.options[ow.selectedIndex].id;
	var selh = oh.options[oh.selectedIndex].id;
	
	if (selw == "lbs") {
		weight = 0.4536 * parseFloat(document.getElementById("inputWeight").value); //lbs to kgs	
	}else {
		weight = parseFloat(document.getElementById("inputWeight").value);
	}

	if (selh == "feet") {
		height = 0.3048 * parseFloat(document.getElementById("inputHeight").value); //feet to meters
	}else {
		height = parseFloat(document.getElementById("inputHeight").value);
	}
	
	bmi = weight / (height*height);


	if (bmi < 18.5) {
		document.getElementById("headbmi").innerHTML = "You are underweight"
	}else if ((bmi >= 18.5) && (bmi <=24.9)) {
		document.getElementById("headbmi").innerHTML = "Your weight is normal"
	}else if ((bmi >= 25) && (bmi <=29.9)) {
		document.getElementById("headbmi").innerHTML = "You are overweight"
	}else {
		document.getElementById("headbmi").innerHTML = "You are Obese!"
	}
}

var	x = 0;
var sumodd = 0;
var sumeven = 0;


while (x <= 50) {
	if (x % 2 == 0){
		sumeven += x;
	}else {
		sumodd += x;
	}
	x++;
}
console.log("sum of even nos.: " + sumeven + "\nsum of odd nos.: " + sumodd);


var colors = [
	"Red",
	"Orange",
	"Yellow",
	"Green",
	"Violet",
	"Indigo",
	"Blue"
];

var y = colors.length - 1;
while (y >= 0){
	console.log(colors[y]);
	y--;
}

for (y = 0; y < colors.length; y++) {
	console.log(colors[y]);
}

var astrsk = "";
for (z = 0; z < 30; z++){
	for (w = 0; w < 30; w++){
		astrsk += "* ";
	}
	astrsk += "\n";
}
console.log(astrsk);


function goLoop(){
	var astrsk2 = "";
	var loopNum = parseInt(document.getElementById("loop").value);
	for (zz = 0; zz < loopNum; zz++){
		for (ww = 0; ww < loopNum; ww++){
			document.getElementById("asterisk").innerHTML += " *"
		}
		document.getElementById("asterisk").innerHTML += "<br>"
	}

}








