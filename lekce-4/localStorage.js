if (typeof(Storage) !== "undefined") {
	document.getElementById('db-uloz').addEventListener('click', function () {
		let jm = document.getElementById('jmeno').value;
		let pr = document.getElementById('prijmeni').value;
		let wsw = document.getElementById('text').value;

		localStorage.setItem("jmeno", jm);
		localStorage.setItem("prijmeni", pr);
		localStorage.setItem("text", wsw);
	});

	window.console.log(localStorage.getItem("jmeno"));

	if(localStorage.getItem("jmeno")) {
		// TODO
	}
} else {
	alert('Není podpora LocalStorage')
}

