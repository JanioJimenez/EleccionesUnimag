$(document).ready(function($) {

	  $('.modal').modal({
	      dismissible: true, // Modal can be dismissed by clicking outside of the modal
	      opacity: .5, // Opacity of modal background
	      inDuration: 300, // Transition in duration
	      outDuration: 200, // Transition out duration
	      startingTop: '10%', // Starting top style attribute
	      endingTop: '30%', // Ending top style attribute
	      ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
			$('h1').animate({paddingTop:20})
	      },
	      complete: function() { 
	      	$('h1').animate({paddingTop:300})
	      } // Callback for Modal close
	    }
	  );

});