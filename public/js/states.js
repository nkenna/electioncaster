function showLGA(lga) {
	var lgaSelect = '';

	if (lga == 'Yobe') {
		lgaSelect = '<select name="lga" id="lga" onchange="document.getElementById(\'stateValue\').innerHTML = this.value;">'.
		'<option value="Bade">Bade</option>'.
		'<option value="Bursari">Bursari</option>'.
		'<option value="Damaturu">Damaturu</option>'.
		'<option value="Fika">Fika</option>'.
		'<option value="Fune">Fune</option>'.
		'</select>';
}
else{
	lgaSelect = '<select name="lga" id="lga">'.
	'<option value=""></option>'.
	'</select>';
	}

	document.getElementById(lgaSelect).innerHTML = lgaSelect;
	document.getElementById(stateValue).innerHTML = document.getElementById('resident').value;
	document.getElementById(lgaValue).innerHTML = document.getElementById('residentlga').value;


	}



