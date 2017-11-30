var db;
var verze = 2;
var i = 1;

var indexedDB = window.indexedDB || window.mozIndexedDB || window.webkitIndexedDB || window.msIndexedDB || window.shimIndexedDB;
var request = indexedDB.open("wwwapp", verze);
window.console.log("db request");
	// upgrade/vytvoreni database
request.onupgradeneeded = function(event) {
	window.console.log("db upgrade");
	var db = request.result;

	var zaznamyStore = db.createObjectStore("zaznamy", { keyPath: "poradi" });
	zaznamyStore.createIndex("mujIndex", "jmeno.prijmeni", { unique: false });
};

request.onsuccess = function(ev) {
	window.console.log("db success");

	db = request.result;
	var objStore = db.transaction("zaznamy", "readwrite").objectStore("zaznamy");
	var index = objStore.index("mujIndex");

	objStore.openCursor().onsuccess = function(event) {
		var cursor = event.target.result;
		if (cursor) {
			i++;
			window.console.log("Poradi " + cursor.key + ", jmeno " + cursor.value.jmeno.krestni);
			cursor.continue();
		}
		else {
			window.console.log("vše!");
		}
	};
/*
	var count = objStore.count();

	count.onsuccess = function() {
		i = count.result;
		window.console.log("i : " + i);
	}
*/
	db.onerror = function(ev) {
		console.log("db error", arguments);
	};
};

var tlac = document.getElementById("db-uloz");
tlac.addEventListener('click', function () {
	i++;
	let kr = document.getElementById('jmeno').value;
	let pr = document.getElementById('prijmeni').value;
	let wsw = document.getElementById('text').value;
	window.console.log(i, kr, pr, wsw);
	var objStore = db.transaction("zaznamy", "readwrite").objectStore("zaznamy");
	let request = objStore.put({poradi: i, jmeno : {krestni : kr, prijmeni : pr}, text: wsw});
	request.onsuccess = function(ev) {
		objStore.index("mujIndex").get(pr).onsuccess = function(ev) {
			window.console.log("Krestni jmeno: " + ev.target.result.jmeno.krestni);
		}
	}
});



