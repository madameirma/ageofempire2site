import $ from 'jquery';

export default class Searchbar {

	constructor() {
		this.initEvents();
	}

	initEvents() {
		this.searchbarForUnits();
		this.searchbarForCivs();
	}

	searchbarForUnits() {	

		$(document).ready( () => {

			$('body').on('keyup', '#firstUnit', function() {
			    var value = $(this).val().toLowerCase();
			    $('#firstSelector li').filter(function() {
			    	$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
			    });
		  	});

			$('body').on('keyup', '#secondUnit', function() {
			    var value = $(this).val().toLowerCase();
			    $('#secondSelector li').filter(function() {
			    	$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
			    });
		  	});

		});
	}

	searchbarForCivs() {

		$(document).ready( () => {

			$('body').on('keyup', '#firstCiv', function() {
			    var value = $(this).val().toLowerCase();
			    $('#firstList li').filter(function() {
			    	$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
			    });
		  	});

			$('body').on('keyup', '#secondCiv', function() {
			    var value = $(this).val().toLowerCase();
			    $('#secondList li').filter(function() {
			    	$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
			    });
		  	});

	  		$('body').on('keyup', '#thirdCiv', function() {
	  		    var value = $(this).val().toLowerCase();
	  		    $('#thirdList li').filter(function() {
	  		    	$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
	  		    });
	  	  	});

		});
	}
}