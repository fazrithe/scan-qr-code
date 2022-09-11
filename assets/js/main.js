//main.js file
const app = (() => {

	// var here

	let ls = document.querySelectorAll('.vertical-nav li');
	let ns = document.querySelector('.nav-aside');
	let mb = document.querySelector('main');

	// -----------------



	// Auto Run Type Here

	function runItHere() {
		tes()
		activeLink()
	}

	// -----------------


	
	// All Function Here

	function tes() {
		console.log("Done!");
	}

	function setActiveLink(e) {
		e.preventDefault();
		ls.forEach(item => {
			item.classList.remove('active');
			this.classList.add('active');
		})
	}

	function activeLink() {
		ls.forEach(item => {
			item.addEventListener('click', setActiveLink)
		})
	}

	function toggle() {
		ns.classList.toggle('roll')
		mb.classList.toggle('roll')
	}

	// -----------------


	
	// Auto Run Call Here

	runItHere();

	// -----------------


	
	// Callback Function Here

	return {
		toggle
	}
	
	// -----------------

})()