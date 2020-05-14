import $ from 'jquery';

export default class CivSelection {

	constructor() {
		this.initEvents();
	}

	initEvents() {
		this.deployement();
		this.closeDeployement();
		this.activation();
	}

	deployement() {

		$(document).ready( function() {
			$('body').on('click', '#firstCiv', function() {
				$('ul').removeClass('deployed');
				$('#firstList').addClass('deployed');
			});

			$('body').on('click', '#secondCiv', function() {
				$('ul').removeClass('deployed');
				$('#secondList').addClass('deployed');
			});

			$('body').on('click', '#thirdCiv', function() {
				$('ul').removeClass('deployed');
				$('#thirdList').addClass('deployed');
			});
		});
	}

	closeDeployement() {

		$(document).mouseup((e) => {
		    let container = $('section');

		    if (!container.is(e.target) && container.has(e.target).length === 0) {
		        $('ul').removeClass('deployed');
		    }

		});

	}

	activation() {

		$(document).ready( function() {

			$('body').on('click', '#firstList li', function() {
				let civ = $(this).text();
				$('#firstCiv').val(civ);
			});

			$('body').on('click', '#secondList li', function() {
				let civ = $(this).text();
				$('#secondCiv').val(civ);
			});

			$('body').on('click', '#thirdList li', function() {
				let civ = $(this).text();
				$('#thirdCiv').val(civ);
			});

		})
	}

}

