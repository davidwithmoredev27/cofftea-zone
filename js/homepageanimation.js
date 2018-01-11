
/*var sliderarr = document.getElementsByTagName("sliderarr");*/
var buttons = document.getElementsByClassName("button");
var bannerimg = document.getElementById("bannerimg");
var bestsellerdevider = document.getElementsByClassName("bestsellerdevider");
var bestsellertitle = document.getElementsByClassName("bestsellertitle");
// for buttons if click and hovering manually
var buttonOne = buttons[0];
var buttonTwo = buttons[1];
var buttonThree = buttons[2];
var buttonFour = buttons[3];
var buttonFive = buttons[4];
var bestsellerdeviderCofftea = bestsellerdevider[0];
var bestsellerdeviderLago = bestsellerdevider[1];

var bestsellertitleCofftea = bestsellertitle[0];
var bestsellertitleLago = bestsellertitle[1];

var transitionFunction = function(transitionProperty , value) {
	transitionProperty.style.WebkitTransition = value;
	transitionProperty.style.MozTransition = value;
	transitionProperty.style.Transition = value;
};
var clear;
var counter = 0;
var btnimgList = [
	"url('4th banner.jpg')",
	"url('_MG_3565.JPG')",
	"url('5th banner.jpg ')",
	"url('martinas venue.JPG')",
	"url('ktv venue.JPG')",
];
var arrayofImg = [];
var changeImg = function (img) {
	for (var i = 0 ; i < arrayofImg.length ; i++) {

	}
};

var btnClickColor = function () {
	
	var buttonLength = buttons.length;
	
	for (var init = 0; init < buttonLength ; init++) {
		arrayofImg.push();
		// buttons[init].addEventListener("mouseover" , function() {
		// 	this.style.backgroundColor = "brown";

		// }, false);
		// buttons[init].addEventListener("mouseout" , function () {
		// 	this.style.backgroundColor = "white";
		// },false);


		if (init == 0) {
			buttons[init].onmouseover = function () {
				this.style.backgroundColor = "brown";
				bannerimg.style.transition = "linear .2s";
				bannerimg.style.backgroundImage = btnimgList[0];
			};
		} else if (init == 1) {
			buttons[init].onmouseover = function () {
				this.style.backgroundColor = "brown";
				bannerimg.style.transition = "linear .2s";
				bannerimg.style.backgroundImage = btnimgList[1];
			};
		} else if (init == 2) {
			buttons[init].onmouseover = function ()  {
				this.style.backgroundColor = "brown";
				bannerimg.style.transition = "linear .2s";
				bannerimg.style.backgroundImage = btnimgList[2];
			};
		} else if (init == 3) {
			buttons[init].onmouseover = function () {
				this.style.backgroundColor = "brown";
				bannerimg.style.transition = "linear .2s";
				bannerimg.style.backgroundImage = btnimgList[3];
			};
		} else if (init == 4) {
			buttons[init].onmouseover = function () {
				this.style.backgroundColor = "brown";
				bannerimg.style.transition = "linear .2s";
				bannerimg.style.backgroundImage = btnimgList[4];
			};
		}

		if (init == 0) {
			buttons[init].onmouseout = function () {
				this.style.backgroundColor = "white";

			};
		} else if (init == 1) {
			buttons[init].onmouseout = function () {
				this.style.backgroundColor = "white";
				
			};
		} else if (init == 2) {
			buttons[init].onmouseout = function () {
				this.style.backgroundColor = "white";
							
			};
		} else if (init == 3) {
			buttons[init].onmouseout = function () {
				this.style.backgroundColor = "white";
				
			};
		} else if (init == 4) {
			buttons[init].onmouseout = function () {
				this.style.backgroundColor = "white";
				
			};
		}
	}
};

btnClickColor();
changeImg();
bannerimg.onmouseover = function () {
	clearInterval(clear);
}
bannerimg.onmouseout = function () {
	carousel();
}
// this function will change the buttons color
var changeButtonColor = function (index , color) {
	buttons[index].style.backgroundColor = color;
};
bannerimg.style.backgroundImage = "url('4th banner.jpg')";
buttons[0].style.backgroundColor = "brown";
var carousel = function() {
	
	var imagesList = [
		"url('4th banner.jpg')",
		"url('_MG_3565.JPG')",
		"url('5th banner.jpg ')",
		"url('martinas venue.JPG')",
		"url('ktv venue.JPG')",
	];
	
	var ImageChanger = function () {
		console.log(counter);
		if (counter === 0 )
			changeButtonColor(0 , "brown");	
		else if (counter === 1) 
			changeButtonColor(0 , "white");
		else if (counter === 2) 
			changeButtonColor(1 , "white");
		else if (counter === 3) 
			changeButtonColor(2 , "white");
		else if (counter === 4)
			changeButtonColor(3, "white");
		else if (counter === 5)
			changeButtonColor(4, "white");
		else if (counter > 5)
			changeButtonColor(0 , "brown");

		
		for (var xx = 0 ; xx < imagesList.length ; xx++) {
			if (counter < imagesList.length) {
				buttons[counter].style.backgroundColor = "brown";
				bannerimg.style.transition = "linear 2s";
				bannerimg.style.backgroundImage = imagesList[counter];

				counter++;
				break;
			} else if (counter >= imagesList.length) {
				counter = 0;
				bannerimg.style.transition = "linear 2s";
				bannerimg.style.backgroundImage = imagesList[counter];
				break;
			}
		}
	};
	clear = setInterval(ImageChanger , 5000);
};


// bannerimg.style.backgroundImage = "url('4th banner.jpg')";
// var changeColor = function () {
// 	this.style.transition = "linear .3s all";
// 	if (this === buttonOne) {
// 		console.log("this is buttonOne");
// 		transitionFunction(bannerimg , "linear .3s all");
// 		bannerimg.style.transition = "linear .3s all";
// 		bannerimg.style.backgroundImage = "url('_MG_3565.JPG')";
// 		this.style.backgroundColor = "brown";
// 	} else if (this === buttonTwo) {
// 		console.log("this is buttonTwo");
// 		transitionFunction(bannerimg , "linear .3s all");
// 		bannerimg.style.backgroundImage = "url('5th banner.jpg ')";
// 		this.style.backgroundColor = "brown";
// 	} else if (this === buttonThree) {
// 		console.log("this is buttonThree");
// 		transitionFunction(bannerimg , "linear .3s all");
// 		bannerimg.style.backgroundImage = "url('_MG_3565.JPG')";
// 		this.style.backgroundColor = "brown";
// 	} else if (this === buttonFour) {
// 		console.log("this is buttonFour");
// 		transitionFunction(bannerimg , "linear .3s all");	
// 		bannerimg.style.backgroundImage = "url('martinas venue.JPG')";
// 		this.style.backgroundColor = "brown";
// 	} else if (this === buttonFive) {
// 		console.log("this is buttonFive");
// 		transitionFunction(bannerimg , "linear .3s all");
// 		bannerimg.style.backgroundImage = "url('ktv venue.JPG')";
// 		this.style.backgroundColor = "brown";
// 	}
// };

// var revertColor = function () {
// 	this.style.transition = "linear .3s";
// 	this.style.backgroundColor = "white";
// };


// buttonOne.onmouseover = changeColor;
// buttonTwo.onmouseover = changeColor;
// buttonThree.onmouseover = changeColor;
// buttonFour.onmouseover = changeColor;
// buttonFive.onmouseover = changeColor;

// buttonOne.onmouseout = revertColor;
// buttonTwo.onmouseout = revertColor;
// buttonThree.onmouseout = revertColor;
// buttonFour.onmouseout = revertColor;
// buttonFive.onmouseout = revertColor;


		// para sa carousel functionality
		/*var index = 0;
		var buttonIndex = 0;
		function carousel() {
			var i, ii;
			var images = [
			"_MG_3461.JPG" , "_MG_3574.JPG" , 
			"_MG_3587.JPG" , "_MG_3601.JPG" , 
			"_MG_3618.JPG"
			];
			var transitionImageFunction = function (transitionAnimation , value , image) {
				bannerimg.style.backgroundImage = "url(" + image + ")";
				bannerimg.style.MozTransition = transitionAnimation + value;
				bannerimg.style.WebkitTransition = transitionAnimation + value;
				bannerimg.style.transition = transitionAnimation + value;	
			};
			var transitionButtons = function (transitionbtn , btn ) {
				bannerimg.style.MozTransition =  + btnval;
				bannerimg.style.WebkitTransition = transitionbtn + btnval;
				bannerimg.style.transition = transitionbtn + btnval;
			};
			var animateButtons = function() {
				for (ii  = 0 ; buttonIndex < buttons.length ; ii++ ) {
					buttons[ii].style.transition = "linear .3s";
					buttons[ii].style.backgroundColor = "brown";
					if(ii === buttonIndex) {
						buttons[ii].style.backgroundColor = "white";
					} else if (ii === 5) {
					}
				}
			};
			buttonIndex++;
			for (i  = 0 ; index < images.length ; i++) {
				transitionImageFunction("linear" , ".3s" , images[i]);
				animateButtons("linear" , ".3s");
				/*if (i >= index) {
				} else if (i === 5) {

				}*/
			//}
			//index++;

		//}
		/*setTimeInterval(carousel,2000);*/
var sellerclick = document.getElementsByClassName("sellerclick");
var sellerClickMax = sellerclick.length;
var overlay = document.getElementById("overlay");
var overlaybutton = document.getElementById("overlaybutton");
var overlayimg = document.getElementsByClassName("overlayimg");
var imgoverlay = document.getElementById("imgoverlay");
var description = document.getElementsByClassName("description");
		/*sellerclick.onclick = function () {
			overlay.style.display = "block";

		};*/
overlaybutton.onclick = function () {
	overlay.style.transition = "ease all 2s";
	overlay.style.display = "none";
	for(var x = 0 ; x < description.length ; x++) {
		description[x].style.display = "none";
	}
};
var images = [
	"_MG_3461.JPG" , "_MG_3461.JPG",
	"_MG_3461.JPG" , "_MG_3461.JPG",
	"_MG_3461.JPG" , "_MG_3461.JPG",
	"_MG_3461.JPG" , "_MG_3461.JPG",
	"_MG_3461.JPG" , "_MG_3461.JPG",
	"_MG_3461.JPG" , "_MG_3461.JPG"
];
		/*for (var ii = 0 ; ii < sellerClickMax; ii++) {
			overlayimg[ii].style.backgroundImage = images[ii];
		}*/

// set all description text display to none
for (var iii = 0 ; iii < description.length ; iii++) {
	description[iii].style.display = "none";
}

var changeColor = function() {
	if (this === sellerclick[0]) {
		overlay.style.display = "block";
		imgoverlay.src = "img/menus/Burgers and Sandwiches/midnight cheesy burger.jpg";
		description[0].style.display = "block";
	} else if (this === sellerclick[1]) {
		overlay.style.display = "block";
		imgoverlay.src = "img/menus/main course/butter lemon tanigue.jpg";
		description[1].style.display = "block";
	} else if (this === sellerclick[2]) {
		overlay.style.display = "block";
		imgoverlay.src = "img/menus/pizza/tree cheese.jpg";
		description[2].style.display = "block";
	} else if (this === sellerclick[3]) {
		overlay.style.display = "block";
		imgoverlay.src = "img/menus/Hot Drinks/hot chocolate.jpg";
		description[3].style.display = "block";
	} else if(this === sellerclick[4]) {
		overlay.style.display = "block";
		imgoverlay.src = "img/bestseller/cofftea/green apple soda.jpg";
		description[4].style.display = "block";
	} else if (this === sellerclick[5]) {
		overlay.style.display = "block";
		imgoverlay.src = "img/menus/platter/mexicano sisig.jpg";
		description[5].style.display = "block";
	} else if (this === sellerclick[6]) {
		overlay.style.display = "block";
		imgoverlay.src = "img/bestseller/cofftea/bonless bangus.jpg";
		description[6].style.display = "block";
	}  else if (this === sellerclick[7]) {
		overlay.style.display = "block";
		imgoverlay.src = "img/bestseller/cofftea/crispy pata.jpg";
		description[7].style.display = "block";
	} else if (this === sellerclick[8]) {
		overlay.style.display = "block";
		imgoverlay.src = "img/bestseller/cofftea/sisig pizza.jpg";
		description[8].style.display = "block";
	} else if (this === sellerclick[9]) {
		overlay.style.display = "block";
		imgoverlay.src = "img/menus/Hot Drinks/Cafe_Mocha.jpg";
		description[9].style.display = "block";
	}
};
for (var i = 0; i < sellerClickMax ; i++) {
	if (i === 0) {
		sellerclick[0].addEventListener('click', changeColor , false);
	} else if (i === 1) {
		sellerclick[1].addEventListener('click', changeColor , false);
	} else if (i === 2) {
		sellerclick[2].addEventListener('click', changeColor , false);
	} else if (i === 3) {
		sellerclick[3].addEventListener('click', changeColor , false);
	} else if (i === 4) {
		sellerclick[4].addEventListener('click', changeColor , false);
	} else if (i === 5) {
		sellerclick[5].addEventListener('click' , changeColor , false);
	} else if (i === 6) {
		sellerclick[6].addEventListener('click', changeColor , false);
	} else if (i === 7) {
		sellerclick[7].addEventListener('click', changeColor , false);
	} else if (i === 8) {
		sellerclick[8].addEventListener('click', changeColor , false);
	} else if (i === 9) {
		sellerclick[9].addEventListener('click' , changeColor , false);
	} 
}

carousel();