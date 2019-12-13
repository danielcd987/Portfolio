//Board is an adaptation of the checker board created by Professor Michael Sabal
//Amount of spaces each ship takes
//submarine 3
//carrier 5
//battleship 4
//cruiser 3
/********************************* */
//static board This contains the coordinates of the ship positions of the human and the CPU board
//human ships
staticD = ["I6","I7"];
staticCR = ["E3","F3","G3"];
staticS = ["J2","J3","J4"];
staticA = ["A2","A3","A4","A5","A6"];
staticB = ["H4","H5","H6","H7"];

//comp ships
cpustaticD = ["J4","J5"];
cpustaticCR = ["H6","I6","J6"];
cpustaticS = ["C4","C5","C6"];
cpustaticA = ["A1","B1","C1","D1","E1"];
cpustaticB = ["G2","G3","G4","G5"];

function grids(){ //loads functions on the page
	humanboard();
	cpuboard();
	gennum();
	
}//grids
//create the game board
/*********************************************** */
//human board
var boardPieces = []; //first dimension of array

function humanboard() {
	var boardDiv = document.getElementById("hboard"); //this displays the board 
	var tableHTML = "<TABLE border=5>"; //thickness of the grid
	for (var row=0;row<11;row++) { //creates 11 rows
		tableHTML += "<TR>";
		switch (row) {
            //this shows the positions of the alive or dead members when it begins
			case 0: boardPieces.push([0,13,14,15,16,17,18,19,20,21,22]);
			case 0: boardPieces.push([2,0,26,26,26,26,26,0]);  //2nd dimension of array
			case 1: boardPieces.push([3,0,0,0,0,0,0,0]); //each number is a cell. 0 is dead and 1 is alive
			case 2: boardPieces.push([4,0,0,0,0,0,0,0]); 
			case 3: boardPieces.push([5,0,0,0,0,0,0,0]); 
			case 4: boardPieces.push([6,0,0,24,0,0,0,0]); 
			case 5: boardPieces.push([7,0,0,24,0,0,0,0]); 
			case 6: boardPieces.push([8,0,0,24,0,0,0,0]); 
            case 7: boardPieces.push([9,0,0,0,27,27,27,27]);
            case 8: boardPieces.push([10,0,0,0,0,0,23,23]);
            case 9: boardPieces.push([11,0,25,25,25,0,0,0]);
            //case 10: boardPieces.push([12,0,0,0,0,0,0,0]);
            
		} 
		
		for (var col=0;col<11;col++) { //loop statement that creates the columns
			tableHTML += "<TD id=\"r"+row+"c"+col+"\" width=25 style=\"background: "; //this shows the width of the boxes and the background color
			if ((col+row)%2==0) tableHTML += "white;";
			else tableHTML += "white;";
			tableHTML += " color: black;\">"; //colors the text in the boxes
			switch (boardPieces[row][col]) {
				case 0: tableHTML += "&nbsp;"; break; //&nbsp-this creates a blank space in the grid
				case 1: tableHTML += "0"; break;
				case 2: tableHTML += "A"; break;
				case 3: tableHTML += "B"; break;
				case 4: tableHTML += "C"; break;
				case 5: tableHTML += "D"; break;
				case 6: tableHTML += "E"; break;
				case 7: tableHTML += "F"; break;
				case 8: tableHTML += "G"; break;
				case 9: tableHTML += "H"; break;
				case 10: tableHTML += "I"; break;
				case 11: tableHTML += "J"; break;
				case 12: tableHTML += "K"; break;
				case 13: tableHTML += 1; break;
				case 14: tableHTML += 2; break;
				case 15: tableHTML += 3; break;
				case 16: tableHTML += 4; break;
				case 17: tableHTML += 5; break;
				case 18: tableHTML += 6; break;
				case 19: tableHTML += 7; break;
				case 20: tableHTML += 8; break;
				case 21: tableHTML += 9; break;
				case 22: tableHTML += 10; break;
				//ships
				case 23: tableHTML += "D"; break;
				case 24: tableHTML += "CR";break;
				case 25: tableHTML += "S";break;
				case 26: tableHTML += "A";break;
				case 27: tableHTML += "B";break;
				//case 2: tableHTML += "X"; break; 
			} //goes with switch
			tableHTML += "</TD>";
		} //goes with loop statement creates columns
			tableHTML += "</TR>";
	} //for loop that goes with row line 20
			tableHTML += "</TABLE>";
			boardDiv.innerHTML = tableHTML;
} //main 
/************************************************************* */
//computer board

var gridPieces = []; //first dimension of array
function cpuboard() {
	var cpuboardDiv = document.getElementById("cpuboard"); //this displays the board 
	var cputableHTML = "<TABLE border=5>"; //thickness of the grid
	for (var rows=0;rows<11;rows++) { //creates 11 rows
		cputableHTML += "<TR>";
		switch (rows) {
			//this shows the positions of the alive or dead members when it begins
			case 0: gridPieces.push([0,13,14,15,16,17,18,19,20,21,22]);
			case 0: gridPieces.push([2,26,0,0,0,0,0,0]);  //2nd dimension of array
			case 1: gridPieces.push([3,26,0,0,0,0,0,0]); //each number is a cell. 0 is dead and 1 is alive
			case 2: gridPieces.push([4,26,0,0,25,25,25,0]); 
			case 3: gridPieces.push([5,26,0,0,0,0,0,0]); 
			case 4: gridPieces.push([6,26,0,0,0,0,0,0]); 
			case 5: gridPieces.push([7,0,0,0,0,0,0,0]); 
			case 6: gridPieces.push([8,0,27,27,27,27,0,0]); 
            case 7: gridPieces.push([9,0,0,0,0,0,24,0]);
            case 8: gridPieces.push([10,0,0,0,0,0,24,0]);
            case 9: gridPieces.push([11,0,0,0,23,23,24,0]);
            case 10: gridPieces.push([12,0,0,0,0,0,0,0]);
            
		} 
		
		for (var cols=0;cols<11;cols++) { //loop statement that creates the columns
			cputableHTML += "<TD id=\"r"+rows+"c"+cols+"\" width=25 style=\"background: "; //this shows the width of the boxes and the background color
			if ((cols+rows)%2==0) cputableHTML += "black;"; //change box color
			else cputableHTML += "black;"; //change box color
			cputableHTML += " color: white;\">"; //colors the text in the boxes
			switch (gridPieces[rows][cols]) {
				case 0: cputableHTML += "&nbsp;"; break; 	//&nbsp-this creates a blank space in the grid
				case 1: cputableHTML += "O"; break; 
				case 2: cputableHTML += "A"; break;
				case 3: cputableHTML += "B"; break;
				case 4: cputableHTML += "C"; break;
				case 5: cputableHTML += "D"; break;
				case 6: cputableHTML += "E"; break;
				case 7: cputableHTML += "F"; break;
				case 8: cputableHTML += "G"; break;
				case 9: cputableHTML += "H"; break;
				case 10: cputableHTML += "I"; break;
				case 11: cputableHTML += "J"; break;
				case 12: cputableHTML += "K"; break;
				case 13: cputableHTML += 1; break;
				case 14: cputableHTML += 2; break;
				case 15: cputableHTML += 3; break;
				case 16: cputableHTML += 4; break;
				case 17: cputableHTML += 5; break;
				case 18: cputableHTML += 6; break;
				case 19: cputableHTML += 7; break;
				case 20: cputableHTML += 8; break;
				case 21: cputableHTML += 9; break;
				case 22: cputableHTML += 10; break;
				//ships
				case 23: cputableHTML += "D"; break;
				case 24: cputableHTML += "CR";break;
				case 25: cputableHTML += "S";break;
				case 26: cputableHTML += "A";break;
				case 27: cputableHTML += "B";break;

			} //goes with switch
			cputableHTML += "</TD>";
		} //goes with loop statement creates columns
			cputableHTML += "</TR>";
	} //for loop that goes with row line 20
			cputableHTML += "</TABLE>";
			cpuboardDiv.innerHTML = cputableHTML;
} //cpu board
/********************************************************* */
//this function takes the input and checks to see if its a coordinate
function humanshot(){
	var coord = document.getElementById("coordinates").value; //takes the coordinate entered and displays it in an alert
	if(coord.length > 3){
		alert("Value is too long. Use a coordinate value that contains one letter and one number that is no more than 10.")}
	else if(coord.length < 2){ //takes the value and alerts if its too short
		alert("Value is too short. Use a coordinate value that contains one letter and one number that is no more than 10.")}

	//else if(coord == ships){alert("yes")} //gets the array ships which has the boats stored and checks if the stored value matches the value in the array.
	else{shot()}
}
//human shot
//this loops through the arrays and checks if the value inputed matches the human input.
function shot(){ 
	var coord = document.getElementById("coordinates").value; //takes the coordinate entered and displays it in an alert
		//destroyer
		for (var i = 0; i < cpustaticD.length; i++) {
			if (cpustaticD [i] === coord) {
				alert("Destroyer Hit " + coord);
				if(coord == "J4"){
				cpustaticD.splice(0,1);
				cpustaticD.splice(0,0,"HIT");
				}
				else if (coord == "J5"){
					cpustaticD.splice(1,1);
					cpustaticD.splice(1,0,"HIT");
					}
			}
			else{alert("Destroyer Miss")};
		}
		//cruiser
		for (var k = 0; k < cpustaticCR.length; k++) {
			if (cpustaticCR [k] === coord) {
				alert("Cruiser Hit " + coord);
				if(coord == "H6"){
					cpustaticCR.splice(0,1);
					cpustaticCR.splice(0,0,"HIT");
					}
					else if (coord == "I6"){
						cpustaticCR.splice(1,1);
						cpustaticCR.splice(1,0,"HIT");
						}
						else if (coord == "J6"){
							cpustaticCR.splice(2,1);
							cpustaticCR.splice(2,0,"HIT");
							}							
			}
			else{alert("Cruiser Miss")};
		}
		//aircraft
		for (var l = 0; l < cpustaticA.length; l++) {
			if (cpustaticA [l] === coord) {
				alert("Aircraft Hit " + coord);
				if(coord == "A1"){
					cpustaticA.splice(0,1);
					cpustaticA.splice(0,0,"HIT");
					}
					else if (coord == "B1"){
						cpustaticA.splice(1,1);
						cpustaticA.splice(1,0,"HIT");
						}
						else if (coord == "C1"){
							cpustaticA.splice(2,1);
							cpustaticA.splice(2,0,"HIT");
							}	
							else if (coord == "D1"){
								cpustaticA.splice(3,1);
								cpustaticA.splice(3,0,"HIT");
								}	
								else if (coord == "E1"){
									cpustaticA.splice(3,1);
									cpustaticA.splice(3,0,"HIT");
									}						
			}
			else{alert("Aircraft Miss")};
		}
		//submarine
		for (var b = 0; b < cpustaticS.length; b++) {
			if (cpustaticS [b] === coord) {
				alert("Submarine Hit " + coord);
				if(coord == "C4"){
					cpustaticS.splice(0,1);
					cpustaticS.splice(0,0,"HIT");
					}
					else if (coord == "C5"){
						cpustaticS.splice(1,1);
						cpustaticS.splice(1,0,"HIT");
						}
						else if (coord == "C6"){
							cpustaticS.splice(2,1);
							cpustaticS.splice(2,0,"HIT");
							}	
							else if (coord == "D1"){
								cpustaticS.splice(3,1);
								cpustaticS.splice(3,0,"HIT");
								}	
		}
			else{alert("Submarine Miss")}
	}
		//battleship
		for (var h = 0; h < cpustaticB.length; h++) {
			if (cpustaticB [h] === coord) {
				alert("battleship Hit " + coord);
				if(coord == "G2"){
					cpustaticB.splice(0,1);
					cpustaticB.splice(0,0,"HIT");
					}
					else if (coord == "G3"){
						cpustaticB.splice(1,1);
						cpustaticB.splice(1,0,"HIT");
						}
						else if (coord == "G4"){
							cpustaticB.splice(2,1);
							cpustaticB.splice(2,0,"HIT");
							}	
							else if (coord == "G5"){
								cpustaticB.splice(3,1);
								cpustaticB.splice(3,0,"HIT");
								}						
			}
			else{alert("Battleship Miss")};
		}	
} //shot
/*************************************************** */
//create a separate sheet to compare the grid values and see if they are correct refrence spell check
//comp shot
//this generates a random number. can be used for CPU shot
var newnum;					//this var is a global var which means that it generates the number when you load the page or hit "play again" button.

	function gennum(){
		var highnumber = 10; //this is the max 

		var lownumber = 1; // this is the min

		newnum = Math.floor(Math.random() * (highnumber - lownumber)+1); //this generates a random number, math.floor rounds the number to a whole number

		console.log(newnum);                                  //shows random number in console

	};

/****************************************************** */
//original storing function for values 
/*
var ships = [];
//placing ships 
//console.log(storeships());
function storeships(){
var placeships = document.getElementById("urships");
ships.push(placeships.value);
console.log(ships); 
alert(ships);
} */
/*************************************************** */
//Placing Ships in dynamic board
	var destroyership = [];
function destroy_pos(){
	var placeDships = document.getElementById("Dships");
	destroyership.push(placeDships.value);
	console.log(destroyership); 
	alert( "Destroyer Positions: " + destroyership);
	}
	
	var cruiser = [];
function cruiser_pos(){
	var placeCships = document.getElementById("Cships");
	cruiser.push(placeCships.value);
	console.log(cruiser); 
	alert( "Cruiser Positions: "+ cruiser);
	}

	var submarine = [];
function submarine_pos(){
	var placeSships = document.getElementById("Sships");
	submarine.push(placeSships.value);
	console.log(submarine); 
	alert( "Submarine Positions: "+ submarine);
	}

	var Aircraft = [];
function aircraft_pos(){
	var placeAships = document.getElementById("Aships");
	Aircraft.push(placeAships.value);
	console.log(Aircraft); 
	alert("Aircraft Carrier Positions: "+ Aircraft);
	}

	var battleship = [];
function battleship_pos(){
	var placeBships = document.getElementById("Bships");
	battleship.push(placeBships.value);
	console.log(battleship); 
	alert("Battleship Positions: "+ battleship);
	}
/*********************************************************** */
/*
function testshot(){
	var shot = (document.getElementById("submit")).value;
	//alert(battleship[]);
	if (shot == battleship.indexOf(battleship))
		{alert("HIT")}
	else{alert("Miss")}
}*/
/************************************************************** */
//clears the elements in the arrays
function cleard(){
	destroyership = [];
	alert("Destroyer positions cleared" + destroyership);
}
function clearcr(){
	cruiser = [];
	alert("Cruiser positions cleared" + cruiser);
}
function clearS(){
	submarine = [];
	alert("Submarine positions cleared" + submarine);
}
function clearA(){
	Aircraft = [];
	alert("Aircraft positions cleared" + Aircraft);
}
function clearb(){
	battleship = [];
	alert("Battleship positions cleared" + battleship);
}


