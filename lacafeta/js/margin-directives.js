(function(){
	var app = angular.module('pageControl', ['ngStorage']);

	/* ticketFood = [
		{
			nav = X
			prod = Y
		},
		...
	] */

	/* ticketDrink = [
		{
			nav = X
			prod = Y
			drink = Z
		}
	]
	*/

	menu1 = [];


	app.directive('headDefault', function(){
		return {
			restrict: 'E',
			templateUrl: '../public/directives/header.html'
		};
	});

	app.directive('footDefault', function(){
		return {
			restrict: 'E',
			templateUrl: '../public/directives/footer.html'
		};
	});
	
		app.controller('menuDisplayController', function($scope, $sessionStorage, $http){
	

		$http.get("../json/menu.json").then(function (response) {
		    menu1 = response.data;
		});

		this.getMenu = function(){
			return menu1;
		}
		//Utilizar el JSON menu.json para obtener todos los menus

		//this.menu = menu1;

		this.ticketFood = [];
		this.ticketDrink = [];

		this.navSel = 0;

		this.addingPosition = 0;

		this.navSelected = function(index){
			this.navSel = index;
		}

		this.prodSelected = function(index){
			this.prodSel = index;
		}

		this.foodAdd = function(item){

			for (var punto = 0; punto < this.getMenu()[item[0]].platillos[item[1]].ingredientes.length; punto++) {
				var push = true;
				for (var i = 0; i < this.ingredientes.length; i++) {
					if (punto == this.ingredientes[i].pos) {
						push = false;
						break;
					}
				}
				if(push){ 
					this.ingredientes.push({"pos":punto, "value":false});
				}
			}

			this.ticketFood.push({
				"nav": item[0],
				"prod": item[1],
				"ing": this.ingredientes
			});
			alert("Cambios guardados, ¡revisa tu ticket para ver tu pedido!");
			this.saveData();
			this.ingredientes = [];
		}

		this.drinkAdd = function(item){
			if(item[3] > 0){
				if(!this.drinkInTicket(item[1], item[2])){
					this.ticketDrink.push({
						"nav": item[0],
						"prod": item[1],
						"drink": item[2],
						"cant": item[3]
					});
				} else {
					this.ticketDrink[this.addingPosition].cant = item[3];
				}
				this.saveData();
				alert("Cambios guardados, ¡revisa tu ticket para verlos!");
			} else {
				alert("Ingrese una cantidad antes de hacer su pedido");
			}
		}

		this.drinkInTicket = function(number1, number2){
			for (var i = 0; i < this.ticketDrink.length; i++) {
				if(this.ticketDrink[i].prod == number1 && this.ticketDrink[i].drink == number2){
					this.addingPosition = i;
					return true;
				}
			}
			return false;
		}

		this.saveData = function(){
			var aux = [];
			if(sessionStorage.getItem('ticketFood')){
				aux = JSON.parse(sessionStorage.getItem("ticketFood"));
			}
			for (var i = 0; i < this.ticketFood.length; i++) {
				aux.push({
					"nav": this.ticketFood[i].nav,
					"prod": this.ticketFood[i].prod,
					"ing": this.ticketFood[i].ing
				});
			}
			sessionStorage.setItem("ticketFood", JSON.stringify(aux));

			sessionStorage.setItem("ticketDrink", JSON.stringify(this.ticketDrink));
		}

		this.initializeDrink = function(){
			this.ticketDrink = JSON.parse(sessionStorage.getItem("ticketDrink"));
			if(this.ticketDrink == null){
				this.ticketDrink = [];
			}
		}

		this.ingredientes = [];

		this.updateIng = function(value, pos){
			var enter = true;
			for (var i = this.ingredientes.length - 1; i >= 0; i--) {
				if(this.ingredientes[i].pos == pos){ 
					enter = false;
					this.ingredientes[i].value = value;
					break;
				}
			}
			if(enter){ 
				this.ingredientes.push({pos, value});
			}
		}

		this.close = function(){ 
			this.ingredientes = [];
		}

		this.initializeDrink();
	});

	app.controller('showTicketController', function($scope, $http, $window){

		var tickets = [];
		var menu = [];
		var database = [];

		$http.get("../json/tickets.json").then(function (response) {
	    	tickets = response.data;
		});

		this.getTickets = function(){
			return tickets;
		}

		$http.get("../json/menu.json").then(function (response) {
	    	menu = response.data;
		});

		this.getMenu = function(){
			return menu;
		}
		

		this.test = function(){
			alert("4 segundos");
		}

		setInterval(function(){
			$http.get("../json/version.json").then(function(response){
				var version = response.data;
				if(version[0].ver>1){
					$http.get("../json/version.json").then(function(response){
						var version = response.data;
						version[0].ver = 1;
						$http({
							method: 'POST',
							url: '/php/updateVer.php',
							data: version,
							headers: {'Content-Type': 'application/json'}
						}).then(function(){
						});
					});
					$window.location.reload();
				}
			});
		}, 10000);

	});

	app.controller('ticketDisplayController', function($scope, $sessionStorage, $http, $window){

		$http.get("../json/menu.json").then(function (response) {
		    menu1 = response.data;
			
		});

		this.getMenu = function(){
			return menu1;
		}

		this.ticketFood = [];
		this.ticketDrink = [];

		this.loadData = function(){
			this.ticketDrink = JSON.parse(sessionStorage.getItem("ticketDrink"));
			this.ticketFood = JSON.parse(sessionStorage.getItem("ticketFood"));
		}

		this.loadData();

		this.total = function(){
			m = this.getMenu();
			this.totalCost = 0;
			if(this.ticketFood){
				for (var i = 0; i < this.ticketFood.length; i++) {
					this.totalCost = this.totalCost + m[this.ticketFood[i].nav].platillos[this.ticketFood[i].prod].precio * 1;
				}
			}
			if (this.ticketDrink) {
				for (var i = 0; i < this.ticketDrink.length; i++) {
					this.totalCost = this.totalCost + m[this.ticketDrink[i].nav].platillos[this.ticketDrink[i].prod].precio * this.ticketDrink[i].cant;
				}
			}
			return this.totalCost;
		}

		this.foodDelete = function(nav,prod){
			for (var i = 0; i < this.ticketFood.length; i++) {
				if(this.ticketFood[i].nav == nav && this.ticketFood[i].prod == prod){
					this.ticketFood.splice(i,1);
					break;
				}
			}

			sessionStorage.setItem("ticketFood", JSON.stringify(this.ticketFood));
			this.total();
		}

		this.drinkDelete = function(nav,prod, drink){
			for (var i = 0; i < this.ticketDrink.length; i++) {
				if(this.ticketDrink[i].nav == nav && this.ticketDrink[i].prod == prod && this.ticketDrink[i].drink == drink){
					this.ticketDrink.splice(i,1);
					break;
				}
			}

			sessionStorage.setItem("ticketDrink", JSON.stringify(this.ticketDrink));
			this.total();
		}

		this.saveToKitchen = function(){ 

			var vals = [];
			var food = this.ticketFood;
			var drinks = this.ticketDrink;
			var database = this.total();
			if(this.ticketFood.length > 0 || this.ticketDrink > 0){
				
				$.ajax({
					url: "../php/orden.php?variable=" + database
				}).done();
			
				$http.get("../json/tickets.json").then(function(response){
					vals = response.data;
					vals.push({food,drinks});
					$http({
						method: 'POST',
						url: '/php/model.php',
						data: vals,
						headers: {'Content-Type': 'application/json'}
					}).then(function(){
					});
				});

				$http.get("../json/version.json").then(function(response){
					var version = response.data;
					version[0].ver += 1;
					$http({
						method: 'POST',
						url: '/php/updateVer.php',
						data: version,
						headers: {'Content-Type': 'application/json'}
					}).then(function(){
					});
				});
				

				sessionStorage.setItem("ticketFood", JSON.stringify([]));

				sessionStorage.setItem("ticketDrink", JSON.stringify([]));
				$window.location.reload();

			} else {
				alert("Seleccione un platillo del menu antes de enviarlo a cocina");
			}

		}
	});

	app.controller('contentController', function(){
		this.show = false;

		this.toggle = function(){
			this.show = !this.show;
			if(this.show){
				document.getElementById("btnCaloria").innerHTML = "Ocultar contenido calorico";
			} else {
				document.getElementById("btnCaloria").innerHTML = "Mostrar contenido calorico";
			}
		}
	});
})();