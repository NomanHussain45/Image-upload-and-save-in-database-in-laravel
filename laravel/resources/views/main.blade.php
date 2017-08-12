<!DOCTYPE html>
<html>
<head>
	<title>Image</title>
</head>
<body>

<form action="/upload" method="post" enctype="multipart/form-data">

	<label for="name">Name</label>
	<input type="text" name=""><br><br>


	<label for="image">Image</label>
	<input type="file" name="name"><br><br>


	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<button type = "submit"> Submit</button>
	
</form>
<br>
<br>

<div class="box-body">
              <table class="table table-bordered table-striped ">
                <thead>
               
             
                <tr>
                  <th>Name</th>
                 
                </tr>
                </thead>
                <tbody>
           
                <?php foreach($dat as $a):?>
                <tr>
                  
                  <td><img src="/uploads/<?php echo $a->name?>"></td>
                </tr>
              <?php endforeach?>
             
                  
                </tbody>
              </table>
            



            </div>

</body>
</html>