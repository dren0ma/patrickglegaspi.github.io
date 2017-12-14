var pizza = [
	"Neapolitan",
	"Greek",
	"Mushroom Truffle",
	"Eggplant Parmesan",
	"Hawaiian",
	"Sicilian Pepperoni",
	"Pepperoni",
	"Manhattan",
	"Pesto Chicken",
	"Philly Cheese Steak",
	"All Meat",
	"Roasted Garlic",
	"Monaco",
	"Cheese Puddle",
	""
];

var pasta = [
	"Pomodoro",
	"Pesto",
	"Carbonara",
	"Spaghetti and Meatballs",
	"Spaghetti Bolognese",
	"Fettucine Puttanesca",
	"Boscaiola",
	"Romana",
	"Stella",
	"Spinach",
	"Spirali Calabrese",
	"Positano",
	""
];

var salad = [
	"Caesar",
	"Greek",
	"Garden",
	"Chop Chop",
	"Italian Salami",
	"Navona",
	"Chicken",
	"Avocado and Asparagus",
	"Ravioli",
	"Green",
	"Mean Green",
	""
];

var drinks = [
	"Beer",
	"Iced Tea",
	"Lemonade",
	"Bottled Water",
	"Softdrinks",
	"Milkshake",
	""
];

var price = [0, 0, 0, 0];
var total;

function totalItems() {
	var getpizza = document.getElementById("optionpizza");
	price[0] = parseInt(getpizza.options[getpizza.selectedIndex].value);
	pizzaindex = parseInt(getpizza.options[getpizza.selectedIndex].id);
	document.getElementById("order-item0").innerHTML = "Pizza: " + pizza[pizzaindex];
	
	var getpasta = document.getElementById("optionpasta");
	price[1] = parseInt(getpasta.options[getpasta.selectedIndex].value);
	pastaindex = parseInt(getpasta.options[getpasta.selectedIndex].id);
	document.getElementById("order-item1").innerHTML = "Pasta: " + pasta[pastaindex];
	
	var getsalad = document.getElementById("optionsalad");
	price[2] = parseInt(getsalad.options[getsalad.selectedIndex].value);
	saladindex = parseInt(getsalad.options[getsalad.selectedIndex].id);
	document.getElementById("order-item2").innerHTML = "Salad: " + salad[saladindex];
	
	var getdrinks = document.getElementById("optiondrinks");
	price[3] = parseInt(getdrinks.options[getdrinks.selectedIndex].value);
	drinksindex = parseInt(getdrinks.options[getdrinks.selectedIndex].id);
	document.getElementById("order-item3").innerHTML = "Drinks: " + drinks[drinksindex];

	total = price[0] + price[1] + price[2] + price[3];

	document.getElementById("order-total").innerHTML = "Total Price: " + total;
};