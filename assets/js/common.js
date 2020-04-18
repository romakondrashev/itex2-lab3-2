// HTML
function getRes1(e){
	var currentForm = $(e).parents('form');

	$.ajax({
	  type: "GET",
	  url: "forms/projects.php",
	  data: currentForm.serialize(),
	  dataType: 'json',
	  success: function(result){
	  	
	  	$('#result1 tbody').html('');
	  	for (var i = 0; i < result.length; i++) {
	  		$('#result1 tbody').append(
	  			'<tr>'+
	  			'<td>' + i + '</td>' +
	  			'<td>' + result[i] + '</td>' +
	  			'</tr>'
	  		);
	  	}
	  	localStorage.setItem('form1Result', JSON.stringify(result));
	  	localStorage.setItem('form1Data', currentForm.serialize());
	  }
	});
}

// XML
function getRes2(e){
	var currentForm = $(e).parents('form');

	$.ajax({
	  type: "GET",
	  url: "forms/leader-projects.php",
	  data: currentForm.serialize(),
	  success: function(result){
  		$('#result2 tbody').html(
  			'<tr>'+
  			'<td>' + result + '</td>' +
  			'</tr>'
  		);
  		localStorage.setItem('form2Result', result);
	  	localStorage.setItem('form2Data', currentForm.serialize());
	  }
	});
}

// JSON
function getRes3(e){
	var currentForm = $(e).parents('form');

	$.ajax({
	  type: "GET",
	  url: "forms/workers.php",
	  data: currentForm.serialize(),
	  dataType: "json",
	  success: function(result){
  		$('#result3 tbody').html('');
	  	for (var i = 0; i < result.length; i++) {
	  		$('#result3 tbody').append(
	  			'<tr>'+
	  			'<td>' + i + '</td>' +
	  			'<td>' + result[i] + '</td>' +
	  			'</tr>'
	  		);
	  	}
	  	localStorage.setItem('form3Result', JSON.stringify(result));
	  	localStorage.setItem('form3Data', currentForm.serialize());
	  }
	});
}




// LOCAL STORAGE



function getLocal1(e) {
	$('#result1 tbody').html('');
	var currentForm = $(e).parents('form');
	var result = JSON.parse(localStorage.getItem('form1Result'));
	var data = localStorage.getItem('form1Data');
	if (currentForm.serialize() === data) {
	  	for (var i = 0; i < result.length; i++) {
	  		$('#result1 tbody').append(
	  			'<tr>'+
	  			'<td>' + i + '</td>' +
	  			'<td>' + result[i] + '</td>' +
	  			'</tr>'
	  		);
	  	}
	} else {
		alert("Данные с такими параметрами отсутствуют!");
	}
}

function getLocal2(e) {
	$('#result2 tbody').html('');
	var currentForm = $(e).parents('form');
	var result = localStorage.getItem('form2Result');
	var data = localStorage.getItem('form2Data');
	if (currentForm.serialize() === data) {
	  	for (var i = 0; i < result.length; i++) {
	  		$('#result2 tbody').html(
	  			'<tr>'+
	  			'<td>' + result + '</td>' +
	  			'</tr>'
	  		);
		}
	} else {
		alert("Данные с такими параметрами отсутствуют!");
	}
}

function getLocal3(e) {
	$('#result3 tbody').html('');
	var currentForm = $(e).parents('form');
	var result = JSON.parse(localStorage.getItem('form3Result'));
	var data = localStorage.getItem('form3Data');
	if (currentForm.serialize() === data) {
	  	for (var i = 0; i < result.length; i++) {
	  		$('#result3 tbody').append(
	  			'<tr>'+
	  			'<td>' + i + '</td>' +
	  			'<td>' + result[i] + '</td>' +
	  			'</tr>'
	  		);
	  	}
	} else {
		alert("Данные с такими параметрами отсутствуют!");
	}
}