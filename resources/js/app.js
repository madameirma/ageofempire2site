import CivSelection from './civSelection.js';
import Searchbar from './searchbar.js';
import UnitSelection from './unitSelection.js';


class App {
	
    constructor() {
    	this.initApp();
    }

    initApp() {
      // Start application
    	new CivSelection();
    	new Searchbar();
    	new UnitSelection();

    }
}

new App();
