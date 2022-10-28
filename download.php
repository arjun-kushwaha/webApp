<?php
include('header.php');
?>

<script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
        <head>
                <meta charset="utf-8">
                <title>CKEditor</title>
                <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
                <style>
				body {
				  background-color: lightblue;
				        }
				</style>
		        </head>
        <body>


	<div class="container-fluid mt-3" style="width:1000px;">
		<div class="row">
			<h3 class="text-center my-4">Create PDF</h3>
			<div class="col-lg-12 bg-white pt-4" style="border-radius:25px;">
				<form method="post" action="pdf_gen.php" enctype='multipart/form-data'>
					
					<div class="form-group m-4">

		                <textarea name="editor1"></textarea>
		                <script>
		                        CKEDITOR.replace( 'editor1' );
		                </script>
						
						</div>

					<div class="form-group">				
						<input type="submit" name='submit' value="Download pdf" class="btn btn-success m-4 text-center" required>
					</div>	
					
				</form>
				
			</div>

			
		</div>

		
	</div>

        </body>
</html>