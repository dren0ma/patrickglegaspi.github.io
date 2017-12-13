var string;
var string2;
var item;
var item2;
var total;






function addThis() {
	var test = document.getElementById("optionpizza");
	string = (test.options[test.selectedIndex].value);
	var test2 = document.getElementById("optionpizza2");
	string2 = (test2.options[test2.selectedIndex].value);
	item = parseInt(string);
	item2 = parseInt(string2);


total = item + item2;

document.getElementById("pizzaoutput").innerHTML = item + item2;
}