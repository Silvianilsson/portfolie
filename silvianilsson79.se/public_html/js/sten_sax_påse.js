var verktyg = ['Sten', 'Sax', 'Påse'];
var användarens_poäng = 0;
var datorns_poäng = 0;

function AnvändarenVinner()
{
	var spelresultat = document.getElementById('spelresultat');
	spelresultat.innerHTML = 'Vinst';
	användarens_poäng += 1;

}

function DatornVinner()
{
	var spelresultat = document.getElementById('spelresultat');
	spelresultat.innerHTML = 'Förlust';
	datorns_poäng += 1;
}

function Lika()
{
	var spelresultat = document.getElementById('spelresultat');
	spelresultat.innerHTML = 'Lika';
}

function BestämVinnare(Användarens_val, Datorns_val)
{
	if (Användarens_val == Datorns_val)
	{
		Lika();
		return;
	}

	if (Användarens_val == 'Sten')
	{
		if (Datorns_val == 'Sax')
			AnvändarenVinner(); 
		else if (Datorns_val == 'Påse')
			DatornVinner();
	}
	else if (Användarens_val == 'Sax')
	{
		if (Datorns_val == 'Sten')
			DatornVinner();
		else if (Datorns_val == 'Påse')
			AnvändarenVinner();
	}
	else if (Användarens_val == 'Påse')
	{
		if (Datorns_val == 'Sten')
			AnvändarenVinner();
		else if (Datorns_val == 'Sax')
			DatornVinner();
	}
}

function Spela(Användarens_val)
{
	var slumptal = Math.floor((Math.random()*3));
	var Datorns_val = verktyg[slumptal];
	
	var Datorns_val_element = document.getElementById('Datorns_val');
	Datorns_val_element.innerHTML = Datorns_val; 

	BestämVinnare(Användarens_val, Datorns_val);

	var användarens_poäng_element = document.getElementById('användarens_poäng');
	användarens_poäng_element.innerHTML = användarens_poäng;

	var datorns_poäng_element = document.getElementById('datorns_poäng');
	datorns_poäng_element.innerHTML = datorns_poäng;

	var slutresultat = document.getElementById('slutresultat');
	if (användarens_poäng == 3)
	{
		slutresultat.innerHTML = "Grattis! du vann över datorn med " + (användarens_poäng - datorns_poäng)+ " poäng";
		document.getElementById('Sten').disabled=true;
		document.getElementById('Sax').disabled=true;
		document.getElementById('Påse').disabled=true;
	}
	else if (datorns_poäng == 3)
	{
		slutresultat.innerHTML = "Tyvärr du förlorade! Datorn slog dig med " + (datorns_poäng - användarens_poäng) +  " poäng";
		document.getElementById('Sten').disabled=true;
		document.getElementById('Sax').disabled=true;
		document.getElementById('Påse').disabled=true;
	}
}

var Sten = document.getElementById('Sten');
Sten.onclick = function(event)
{
	var Användarens_val = document.getElementById('Användarens_val');
	Användarens_val.innerHTML = 'Sten';
	Spela('Sten')
}

var Sax = document.getElementById('Sax');
Sax.onclick = function(event)
{
	var Användarens_val = document.getElementById('Användarens_val');
	Användarens_val.innerHTML = 'Sax';

	Spela('Sax')
}

var Påse = document.getElementById('Påse');
Påse.onclick = function(event)
{
	var Användarens_val = document.getElementById('Användarens_val');
	Användarens_val.innerHTML = 'Påse';

	Spela('Påse')
}

var börja_om = document.getElementById('börja_om');
börja_om.onclick = function(event)
{
	användarens_poäng = 0;
	datorns_poäng = 0;

	document.getElementById('användarens_poäng').innerHTML = användarens_poäng;
	document.getElementById('datorns_poäng').innerHTML = datorns_poäng;
	document.getElementById('slutresultat').innerHTML = '';
	document.getElementById('Sten').disabled=false;
	document.getElementById('Sax').disabled=false;
	document.getElementById('Påse').disabled=false;
	document.getElementById('Användarens_val').innerHTML = '';
	document.getElementById('Datorns_val').innerHTML = '';
	document.getElementById('spelresultat').innerHTML = '';
}