<html>

<head>
  <title>Form test</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

</head>
<body>

	<div style="margin-top: 10%">
		<h4 style="margin-left:500px;">Form</h4>
		<div class="container">
  
  <form method="post" autocomplete="off" name="hello-sheet"  id="uploadForm" action="upload.php"  >
    <div class="form-group" style="width:525px;margin-left:300px;">
      <label for="name">Door 1</label>
      <input type="text" class="form-control"  placeholder="Door 1" name="door1">
    </div>
	<div class="form-group"style="width:525px;margin-left:300px;"">
      <label for="name">Door 2</label>
      <input type="text" class="form-control"  placeholder="Door 2" name="door2">
    </div>

	<div class="form-group"style="width:525px;margin-left:300px;"">
      <label for="name">Door 3</label>
      <input type="text" class="form-control"  placeholder="Door 3" name="door3">
    </div>

	<div class="form-group"style="width:525px;margin-left:300px;"">
      <label for="name">Door 4</label>
      <input type="text" class="form-control"  placeholder="Door 4" name="door4">
    </div>

	<div class="form-group" style="width:525px;margin-left:300px;"">
      <label for="name">Door 5</label>
      <input type="text" class="form-control"  placeholder="Door 5" name="door5">
    </div>

	<div class="form-group" style="width:525px;margin-left:300px;"">
      <label for="name">Door 6</label>
      <input type="text" class="form-control"  placeholder="Door 6" name="door6">
    </div>

	<div class="form-group"style="width:525px;margin-left:300px;"">
      <label for="name">Video</label>
      <input type="text" class="form-control"  placeholder="Video URL" name="video">
    </div>
	<div class="form-group"style="width:525px;margin-left:300px;"">
      <label for="name">Door 1 URL</label>
      <input type="text" class="form-control"  placeholder="Door 1 URL" name="door1_url">
    </div>
<div class="form-group"style="width:525px;margin-left:300px;"">
      <label for="name">Door 2 URL</label>
      <input type="text" class="form-control"  placeholder="Door 2 URL" name="door2_url">
    </div>
<div class="form-group"style="width:525px;margin-left:300px;"">
      <label for="name">Door 3 URL</label>
      <input type="text" class="form-control"  placeholder="Door 3 URL" name="door3_url">
    </div>
<div class="form-group"style="width:525px;margin-left:300px;"">
      <label for="name">Door 4 URL</label>
      <input type="text" class="form-control"  placeholder="Door 4 URL" name="door4_url">
    </div>
<div class="form-group"style="width:525px;margin-left:300px;"">
      <label for="name">Door 5 URL</label>
      <input type="text" class="form-control"  placeholder="Door 5 URL" name="door5_url">
    </div>
<div class="form-group"style="width:525px;margin-left:300px;"">
      <label for="name">Door 6 URL</label>
      <input type="text" class="form-control"  placeholder="Door 6 URL" name="door6_url">
</div>

  
			
					<div class="form-group"style="width:525px;margin-left:300px;">
						<input name="userImage" type="file" class="inputFile" /><br/>
						
						
					</div>	
						
						
				<br>
					
<div class="form-group"style="width:525px;margin-left:300px;"">				
			<button type="submit" name="submit" value="Send message" class="btn btn-primary">Submit</button>
<div>
			</form>

		
  
  
</div>
<script>
            const scriptURL = 'https://script.google.com/macros/s/AKfycbxdkhtGzckUJR9WVcesYXCM76-AQHqIydq-LTTF87YHPVDtV1zvAFYAarqjDFskxgf_/exec'
            const form = document.forms['hello-sheet']
          
            form.addEventListener('submit', e => {
              e.preventDefault()
              fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => alert("Thanks for Contacting us..! We Will Contact You Soon..."))
                .catch(error => console.error('Error!', error.message))
            })
          </script>
		  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript">
$(document).ready(function (e) {
	$("#uploadForm").on('submit',(function(e) {
		e.preventDefault();  //If this method is called, the default action of the event will not be 							triggered.
		$.ajax({
        	url: "upload.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,     //when we send json file we write contentType: 'application/json'
    	    cache: false,
			processData:false,
			success: function(data)
		    {
			$("#targetLayer").html(data);
		    },
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});
</script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  

		</div>
	</div>
	
</body>
</html>
