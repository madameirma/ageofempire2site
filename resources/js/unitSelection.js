import $ from 'jquery';

export default class UnitSelection {

	constructor() {
		this.initEvents();
	}

	initEvents() {
		this.selection();
		this.activation();
		this.deployement();
		this.closeDeployement();
	}

	deployement() {

		$(document).ready( function() {
			$('body').on('click', '#firstUnit', function() {
				$('#firstSelector').addClass('deployed');
			});

			$('body').on('click', '#secondUnit', function() {
				$('#secondSelector').addClass('deployed');
			});
		});
	}

	closeDeployement() {

		$(document).mouseup((e) => {
		    let container = $('div');

		    if (!container.is(e.target) && container.has(e.target).length === 0) {
		        $('ul').removeClass('deployed');
		    }

		});

	}

	selection() {

		$(document).ready( function() {

			var id1, id2 = 0;

			$('body').on('click', '#firstSelector li', function() {
				id1 = $(this).attr('data-id');

				if(id2 > 0) {
					window.location += '/' +id1+ '/' +id2;
				}	
			});

			$('body').on('click', '#secondSelector li', function() {
				id2 = $(this).attr('data-id');

				if(id1 > 0) {
					window.location += '/' +id1+ '/' +id2;
				}	
			});

		});

	}

	activation() {

		$(document).ready( function() {

			$('body').on('click', '#firstSelector li', function() {
				let civ = $(this).text();
				$('#firstUnit').val(civ);
			});

			$('body').on('click', '#secondSelector li', function() {
				let civ = $(this).text();
				$('#secondUnit').val(civ);
			});

		})
	}

}

