<!DOCTYPE html>
<html>
  <head>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <style>
      body {
        padding: 1em;
      }
      .error {
        color: red;
      }
      form {
        padding: 0.5em;
      }
      .button {
        margin: 2em 0;
      }
    </style>
    <script>
$( "#registerform" ).validate({
	  debug: true,

	  rules: {
	    "teach_subjectid[]": {
      	require_from_group: [1, ".subject-group"]
    	},
			"research_subjectid[]": {
      	require_from_group: [1, ".subject-group"]
    	}
	  }, // end rules
  	groups: {
      'subject-group': "teach_subjectid[] research_subjectid[]"
  	},
  	messages: {
			'subject-group': {
				required: 'Choose at least one subject'
			},
      "research_subjectid[]": {
				required: 'Choose at least one subject'
			}
		},	// end messages
	  errorPlacement: function(error, element) {
		    if(element.attr("name") == "teach_subjectid[]"  || 
        element.attr("name") == "research_subjectid[]") {
		    	error.insertAfter("#subject_error");
		    } else {
		      error.insertAfter(element);
		    }
		} // end error placement
		
 }); // end validate
      //https://codepen.io/lunaman/pen/AcCHd
    </script>
  </head>
<body>
  
    <h2>Subjects</h2>
    <form class="mgm_form" name="registerform" id="registerform">
    <label for="subjects" id="subject_error"></label>
    <table class="tableBorder">
        <tr>  
          <th width="400" valign="top">SUBJECT</th>  
          <th width="75" class="question"><p>Teach</p></th>
          <th width="75" class="question"><p>Research</p></th>
        </tr>
        <tr valign="top">
          <td class="cat"><p><strong>1 Bible and Related Literature</strong></p></td>
          <td class="cat"><p><input name="teach_categoryid[]" class="subject-group" type="checkbox" value="1"></p></td>
          <td class="cat"><p><input name="research_categoryid[]" class="subject-group" type="checkbox" value="1"></p></td>
        </tr>
        <tr valign="top">
          <td width="400"><p>1.01 Hebrew Bible</p></td> 
          <td><input name="teach_subjectid[]" class="subject-group" type="checkbox" value="2"></td>
          <td><input name="research_subjectid[]" class="subject-group" type="checkbox" value="2"></td>
        </tr>
        <tr valign="top">
          <td width="400"><p>1.02 Bible translations</p></td> 
          <td><input name="teach_subjectid[]" class="subject-group" type="checkbox" value="3"></td>
          <td><input name="research_subjectid[]" class="subject-group" type="checkbox" value="3"></td>
        </tr>
        <tr valign="top">
          <td width="400"><p>1.03 Bible versions</p></td> 
          <td><input name="teach_subjectid[]" class="subject-group" type="checkbox" value="4"></td>
          <td><input name="research_subjectid[]" class="subject-group" type="checkbox" value="4"></td>
        </tr>
    </table>
    <input class="button mgm-register-button" type="submit" name="wp-submit" id="wp-submit" value="Apply" />
  </form>
  
  </body>
</html>
