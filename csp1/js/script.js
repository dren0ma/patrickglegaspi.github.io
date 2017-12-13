var item;
var item2;
var total;


var test = document.getElementById("optionpizza");
item = test.options[test.selectedIndex].value;
var test2 = document.getElementById("optionpizza2");
item2 = test2.options[test2.selectedIndex].value;
total = item + item2;

document.getElementById("pizzaoutput").innerHTML = total;