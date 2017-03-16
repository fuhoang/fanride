$(function(){

   // jQuery methods go here...
  if($('#selectSports').length){
  	console.log('sports list------');

  	$('#selectSports').on('change', function() {

  		$sport_id = $('#selectSports').val();
  		console.log($sport_id);
		apiurl = 'http://fanride.local/leagues/' + $sport_id
		$.ajax({
	    	url: apiurl,
	        type: 'GET',
	        crossDomain: true,
	        success: function (returnData) {
	        	console.log(returnData);
	        	$('#selectLeagues').empty();

	        	var html = [];
                html.push('<option value="">Select a League</option>');
	        	
	        	$.each(returnData, function (key, value) {
	        		console.log(key);
	        		console.log(value);
	        		console.log(value.id);
	        		console.log(value.league);
	        		html.push('<option value=' + value.id + '>' + value.league + '</option>');
	        	});
	        	jQuery('#selectLeagues').html(html.join(''));
	        	$('#selectLeagues').selectpicker('refresh');

	        },
	        error: function (exception) {
	            console.log(exception);
	        }
	    });
  	});


  	$('#selectLeagues').on('change', function() {
  		$league_id = $('#selectLeagues').val();
  		
  		console.log('League ID: ' + $league_id);
  		apiurl = 'http://fanride.local/teams/' + $league_id
		$.ajax({
	    	url: apiurl,
	        type: 'GET',
	        crossDomain: true,
	        success: function (returnData) {
	        	console.log(returnData);
	        	$('#selectTeams').empty();

	        	var html = [];
                html.push('<option value="">Select a Team</option>');
	        	$.each(returnData, function (key, value) {
	        		console.log(key);
	        		console.log(value);
	        		console.log(value.id);
	        		console.log(value.team);
	        		html.push('<option value=' + value.id + '>' + value.team + '</option>');
	        	});
	        	jQuery('#selectTeams').html(html.join(''));
	        	jQuery('#selectTeams').selectpicker('refresh');

	        },
	        error: function (exception) {
	            console.log(exception);
	        }
	    });
  	});


  	$('#selectTeams').on('change', function() {
  		$team_id = $('#selectTeams').val();
  		
  		console.log('Team ID: ' + $team_id);
  		$('.fixtures-list').empty();
  		apiurl = 'http://fanride.local/fixtures/' + $team_id
		$.ajax({
	    	url: apiurl,
	        type: 'GET',
	        crossDomain: true,
	        success: function (returnData) {
	        	console.log(returnData);
	        	$.each(returnData, function (key, value) {
	        		console.log(key);
	        		console.log(value);
	        		console.log(value.id);
	        		console.log(value.fixture);

	        		
	        		var encodedResult = value.fixture;
	        		
	        		encodedResult = encodedResult.replace(/\s+/g, '-').toLowerCase();
	        		console.log(encodedResult);
	        		var urlResult = 'http://fanride.local/results/' + encodedResult;


	        		
	        		console.log(encodeURIComponent(value.fixture));
	        		jQuery('.fixtures-list').append('<a href="' + urlResult	 + '"  class="list-group-item">'+ value.fixture +'</a>');

	        	});
	        },
	        error: function (exception) {
	            console.log(exception);
	        }
	    });
  	});




  }

}); 
//# sourceMappingURL=app.js.map
