var ProductImgCounter = 0;
var CustomerExpCounter = 0;
var partiesCounter = 0;
var partiesCounterDecrease = 12;
var StyleSheet = {
	boxShadow: function (selector, index , valOne , valTwo , valThree , color)  {
		selector[index].style.boxShadow = valOne + " " + valTwo + " " + valThree + " " + color;
		selector[index].style.position = "relative";
		selector[index].style.transition = "linear .2s";

		if (index === 1) {
			selector[0].style.boxShadow = "none";
			selector[index].style.boxShadow = valOne + " " + valTwo + " " + valThree + " " + color;
		} else if (index === 2) {
			selector[1].style.boxShadow = "none";
			selector[index].style.boxShadow = valOne + " " + valTwo + " " + valThree + " " + color;
		} else if (index === 3) {
			selector[2].style.boxShadow = "none";
			selector[index].style.boxShadow = valOne + " " + valTwo + " " + valThree + " " + color;
		} else if (index === 4) {
			selector[3].style.boxShadow = "none";
			selector[index].style.boxShadow = valOne + " " + valTwo + " " + valThree + " " + color;
		} else if (index === 5) {
			selector[4].style.boxShadow  = "none";
			selector[index].style.boxShadow = valOne + " " + valTwo + " " + valThree + " " + color;
		} else if (index === 6) {
			selector[5].style.boxShadow  = "none";
			selector[index].style.boxShadow = valOne + " " + valTwo + " " + valThree + " " + color;
		} else if (index === 7) {
			selector[6].style.boxShadow  = "none";
			selector[index].style.boxShadow = valOne + " " + valTwo + " " + valThree + " " + color;
		} else if (index === 8) {
			selector[7].style.boxShadow  = "none";
			selector[index].style.boxShadow = valOne + " " + valTwo + " " + valThree + " " + color;
		} else if (index === 9) {
			selector[8].style.boxShadow  = "none";
			selector[index].style.boxShadow = valOne + " " + valTwo + " " + valThree + " " + color;
		} else if (index === 10) {
			selector[9].style.boxShadow  = "none";
			selector[index].style.boxShadow = valOne + " " + valTwo + " " + valThree + " " + color;
		} else if (index === 11) {
			selector[10].style.boxShadow  = "none";
			selector[index].style.boxShadow = valOne + " " + valTwo + " " + valThree + " " + color;
		} else if(index === 0) {
			selector[11].style.boxShadow  = "none";
			selector[index].style.boxShadow = valOne + " " + valTwo + " " + valThree + " " + color;
		}
	}
};

var images = {
	products :[
		"img/menus/Burgers and Sandwiches/chicken sandwhich.jpg",
		"img/menus/Burgers and Sandwiches/cheese burger.jpg",
		"img/menus/pizza/all meat lovers.jpg",
		"img/menus/main course/tocilog.jpg",
		"img/menus/main course/noksilog.jpg", 
		"img/menus/Hot Drinks/cafe latte.jpg",
		"img/menus/Hot Drinks/cappuccino.jpg",
		"img/menus/Hot Drinks/Cafe_Mocha.jpg",
		"img/dishes/cofftea/dessert/20171022_154948.jpg",
		"img/dishes/cofftea/dessert/20171022_155055.jpg",
		"img/dishes/cofftea/dessert/_MG_3736.JPG",
		"img/dishes/cofftea/dessert/_MG_3739.JPG"
	]
	// parties : [
	// ],
	// customerexp : [
	// ]
};
var changeImage = function (eventLeft , eventRight, imageZoom , imageHighlight , imagesList) {
	

	var SetAllDefaultImage = function() {
		imageZoom.src = images.products[0];
		StyleSheet.boxShadow(imageHighlight , 0 ,"0px" , "0px" , "30px" ,"lightgray");
	};
	/*products image manipulation*/
	var rightImage = function() {
		for (var ii = 0 ; ii < images.products.length ; ii++) {
			if(ProductImgCounter === ii || ProductImgCounter === ii
				|| ProductImgCounter === ii || ProductImgCounter === ii
				|| ProductImgCounter === ii || ProductImgCounter === ii
				|| ProductImgCounter === ii || ProductImgCounter === ii 
				|| ProductImgCounter === ii || ProductImgCounter === ii
				|| ProductImgCounter === ii || ProductImgCounter === ii
				|| ProductImgCounter === ii) {
				imageZoom.src = images.products[ProductImgCounter];
				StyleSheet.boxShadow(imageHighlight , ProductImgCounter ,"0px" , "0px" , "30px" ,"lightgray");
			} else if (ProductImgCounter > 11) {
				ProductImgCounter = 0;
				imageZoom.src = images.products[ProductImgCounter];
				StyleSheet.boxShadow(imageHighlight , ProductImgCounter ,"0px" , "0px" , "30px" ,"lightgray");
			}
		}
		ProductImgCounter++;
	};	

	var leftImage = function() {
		for (var ii = 0 ; ii < images.products.length ; ii++) {
			if(ProductImg === ii || ProductImgCounter === ii
				|| ProductImgCounter === ii || ProductImgCounter === ii
				|| ProductImgCounter === ii || ProductImgCounter === ii
				|| ProductImgCounter === ii || ProductImgCounter === ii 
				|| ProductImgCounter === ii || ProductImgCounter === ii
				|| ProductImgCounter === ii || ProductImgCounter === ii
				|| ProductImgCounter === ii) {
				imageZoom.src = images.products[ProductImgCounter];
				StyleSheet.boxShadow(imageHighlight , ProductImgCounter ,"0px" , "0px" , "30px" ,"lightgray");
			} else if (ProductImgCounter > 11) {
				ProductImgCounter = 0;
				imageZoom.src = images.products[ProductImgCounter];
				StyleSheet.boxShadow(imageHighlight , ProductImgCounter ,"0px" , "0px" , "30px" ,"lightgray");
			}
		}
	};
	SetAllDefaultImage();
	var EventInitializer = function() {
		eventRight.addEventListener("click" , rightImage ,false);
		eventLeft.addEventListener("click" , leftImage ,false);
	};

	// for right arrow slider
	for (var i = 0 ; i < imagesList.length ; i++) {
		switch(i) {
			case 0:
				EventInitializer();
			continue;
			case 1:
				EventInitializer();
			continue;
			case 2:
				EventInitializer();
			continue;
			case 3:
				EventInitializer();
			continue;
			case 4:
				EventInitializer();
			continue;
			case 5:
				EventInitializer();
			continue;
			case 6:
				EventInitializer();
			continue;
			case 7:
				EventInitializer();
			continue;
			case 8:
				EventInitializer();
			continue;
			case 9:
				EventInitializer();
			continue;
			case 10:
				EventInitializer();
			continue;
			case 11:
				EventInitializer();
			continue;
		}
	}
};


/*products animations functionality*/
var productsAnimation = function () {
	var productsZoom = document.getElementById('productsZoom');
	var leftArrowProduct = document.getElementById('leftarrowproduct');
	var rightArrowProduct = document.getElementById("rightarrowproduct");
	var productHighLight = document.getElementsByClassName("producthighlight");
	var imagesProduct = document.getElementsByClassName("imageproduct");

	// load the click Events for product images
	changeImage(leftArrowProduct , rightArrowProduct , productsZoom , productHighLight , imagesProduct);

};

/*parties animation functionality*/
var partiesAnimation = function () {
	//console.log("Hello world");
};
/*customer experience animations*/
var customerExpAnimation = function () {
	//console.log("Hello world");
};

window.onload = function () {
	// load all the neccesary animations Function after window document loaded
	customerExpAnimation();
	productsAnimation();
	partiesAnimation();
};