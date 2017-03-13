$(function(){

   // jQuery methods go here...
  if($('#sports-category').length){
  	console.log('sports list------');

  	$('#sports-category').on('change', function() {

  		$sport_id = $('#sports-category').val();
  		console.log($sport_id);
		apiurl = 'http://fanride.local/leagues/' + $sport_id
		jQuery.ajax({
	    	url: apiurl,
	        type: 'GET',
	        crossDomain: true,
	        success: function (returnData) {
	        	console.log(returnData);
	        },
	        error: function (exception) {
	            console.log(exception);
	        }
	    });
  	});
  }

}); 
//# sourceMappingURL=app.js.map
