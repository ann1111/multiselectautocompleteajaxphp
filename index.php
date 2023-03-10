<!DOCTYPE html>
<html>
<head>
	<title>Autocomplete multiselect jquery Example</title>
	<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"/>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
	<script src="autocomplete.multiselect.js"></script>
</head>
<body>

<div class="main-div">
	<h2>Autocomplete multiselect jquery Ajax PHP Example</h2>
	<input id="myAutocompleteMultiple" type="text" />
</div>

<script type="text/javascript">
	$(function(){
		var availableTags = [
		    "Laravel",
		    "Bootstrap",
		    "Server",
		    "JavaScript",
		    "JQuery",
		    "Perl",
		    "PHP",
		    "Python",
		    "Ruby",
		    "API",
		    "Scheme"
		];
		 function split(val) {
                return val.split(/,\s*/);
            }

            function extractLast(term) {
                return split(term).pop();
            }


		$('#myAutocompleteMultiple').autocomplete({
			//source: availableTags,
			source: function (request, response) {
	                $.getJSON('search.php', {
	                    term: extractLast(request.term)
	                }, response);
	            },
			multiselect: true
		});
	});
</script>
</body>
</html>