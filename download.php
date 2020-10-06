
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Shreyanshi Shah">
	<title>Conversion Of text to Handwritten PDF - Shreyanshi Shah</title>


	<link href="index.css" rel="stylesheet">
	<link rel="icon" href="icon.ico">
	
	
</head>

<body> 

	<div class="container">
		<div>
			<div class="center">
				<div class="title" id="title">
					<h1>Your PDF has been generated</h1>
				</div>

				<!-- <div class="dropzone">
					<img src="http://100dayscss.com/codepen/upload.svg" class="upload-icon" />
					<input type="file" name="upload" id="upload" class="upload-input" />
				</div>

				<button type="button" class="btn" onclick="addfile()" name="uploadbutton">Upload file</button> -->

				<a href="final_output.pdf">
					<button type="button" class="btn"> Download here </button>
				</a>

				<a href="index.html">
					<button type="button" class="btn"> Back To Home </button>
				</a>

			</div> <!-- center -->
		</div> <!-- frame -->

	</div> <!-- container -->	

  <footer>
    <div class="container footer">
    	<p >Developed By: "Shreyanshi Shah"</p>
      <p >Copyright &copy; 2020</p>
    </div>
  </footer>



	<script type="text/javascript">
		function addfile() {
				document.getElementById("title").innerHTML=document.getElementById("upload").name;
				}
	</script>

</body>

</html>
