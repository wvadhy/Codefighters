// List of sentences
var _CONTENT = [
	">Objective: destroy your enemy",
	">Solve the problems before they do",
	">Deal damage based on its difficulty",
	">Save mana to use abilities",
  ">Matchmaking is elo dependant",
  ">Check the leaderboards",
  ">Earn wins to climb the ladder",
  ">Be king",
	">Good luck have fun!"
];

var _PART = 0;

var _PART_INDEX = 0;

var _INTERVAL_VAL;

var _ELEMENT = document.querySelector("#text");

function Type() {

	var text =  _CONTENT[_PART].substring(0, _PART_INDEX + 1);
	_ELEMENT.innerHTML = text;
	_PART_INDEX++;

	if(text === _CONTENT[_PART]) {

		clearInterval(_INTERVAL_VAL);
		setTimeout(function() {
			_INTERVAL_VAL = setInterval(Delete, 50);
		}, 1000);
	}
}

function Delete() {

	var text =  _CONTENT[_PART].substring(0, _PART_INDEX - 1);
	_ELEMENT.innerHTML = text;
	_PART_INDEX--;

	if(text === '>') {
		clearInterval(_INTERVAL_VAL);

		if(_PART == (_CONTENT.length - 1))
			_PART = 0;
		else
			_PART++;

		_PART_INDEX = 0;

		setTimeout(function() {
			_INTERVAL_VAL = setInterval(Type, 100);
		}, 200);
	}
}

_INTERVAL_VAL = setInterval(Type, 100);
