(function ($) {

	var blankWP = new Object();

	$(window).resize(function() {		
		//resize function go here
	});

	$(document).ready(function (){

		//call your custom functions like this
		blankWP.testFunction()

	});

	blankWP.testFunction = function()
		{
			//add functions like this
		}

}(window.jQuery || window.$));