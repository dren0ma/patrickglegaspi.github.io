var result;
var dec;
var afterans;
var newnum;
var mos;


function display(val) {
	document.getElementById("head").innerHTML = "Magic Calculator!";
	document.getElementById("head").style.color = "lightgrey";
	if (afterans == 1){
		newnum = val;
		document.getElementById("heading").innerHTML = '';
		document.getElementById("line").innerHTML = '';
		document.getElementById("heading").innerHTML = newnum;
		document.getElementById("line").innerHTML = newnum;
		afterans = 0;

	}
	else {
		document.getElementById("heading").innerHTML += val;
		document.getElementById("line").innerHTML += val;	
	}
	
}

function decimal(val) {
	document.getElementById("head").innerHTML = "Magic Calculator!";
	document.getElementById("head").style.color = "lightgrey";
	if (dec >= 1) {
		document.getElementById("heading").innerHTML = document.getElementById("heading").innerHTML;
		document.getElementById("line").innerHTML = document.getElementById("line").innerHTML;
	}
	else {
		document.getElementById("heading").innerHTML += val;
		document.getElementById("line").innerHTML += val;
		dec++;
	}
}

function erase() {
	document.getElementById("head").innerHTML = "Magic Calculator!";
	document.getElementById("head").style.color = "lightgrey";
	document.getElementById("heading").innerHTML = '';
	document.getElementById("line").innerHTML = '';
	dec = 0;
	afterans = 0;
}

function ans() {
	document.getElementById("head").innerHTML = "Magic Calculator!";
	document.getElementById("head").style.color = "lightgrey";
	result = eval(document.getElementById("line").innerHTML);
	document.getElementById("heading").innerHTML = result;
	afterans = 1;
}

function operation(val) {
	document.getElementById("head").innerHTML = "Magic Calculator!";
	document.getElementById("head").style.color = "lightgrey";
	document.getElementById("line").innerHTML += val;
	document.getElementById("heading").innerHTML = "";
	dec = 0;
	afterans = 0;
}

function oddeven(){
	var num = document.getElementById("heading").innerHTML;
	if ((num % 2 != 0)){
		document.getElementById("head").innerHTML = "Odd Number!"
		document.getElementById("head").style.color = "red";
	}
	else {
		document.getElementById("head").innerHTML = "Even Number!"
		document.getElementById("head").style.color = "blue";
	}

}

function month() {
	var mos2 = document.getElementById("month");
	mos = mos2.options[mos2.selectedIndex].id;
	document.getElementById("head").innerHTML = mos;
	document.getElementById("head").style.color = "green";

}


/*
var num = 1;
var	name = "Tuitt";

alert(num);
alert(name);

var	even = [0,2,4,6,8];
var	vowels = ["a","e","i","o","u"];

alert(even[4]);
alert(vowels[0]);

x = x + 2;
x += 2;
-=
*=
/=
%=
++
--

&& and
|| or
!  not

num to string
num + ""

string to num
var string = ""
var num = string + 0


******* if *******
if() {
}


******* if/else ********

if(){
	
}
else{
	
}

******* if/else if/else ********

if(){
	
}

else if(){
	
}

else{
	
}


*/
