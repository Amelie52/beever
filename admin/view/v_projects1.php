<html>
<head>
	<title>Projects List</title>
</head>

<style>
	table tr td {
		border:1px solid black;
	}
</style>
<body>
<h1>Projects list</h1>

              <table>
                
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Photo</th>           
                <th>Category</th>           
                <th>Presentation</th>
                <th>Statut</th>
            </tr>
    <?php 
                   foreach ($Projects as $Projects):
                   echo " <tr> 
                            <td>" .$Projects['proj_id'] ."</td> 
                            <td>" .$Projects['proj_name'] ."</td>
                            <td> <img width='150px;' src='../../projects/upload/" .$Projects['proj_photo'] ."'</td>
                            <td>" .$Projects['proj_catego'] ."</td>
                            <td>" .$Projects['proj_present'] ."</td>
                            <td>" .$Projects['proj_statut'] ."</td>
                            <td><a href='delete_proj.php?id=".$Projects['proj_id'] ."'>Delete</a></td>
                            <td> <form method='POST' action='update_proj.php?id=".$Projects['proj_id'] ."'>
                            	<select name='proj_statut'>
	                            	<option value='required validation'> required validation</option>
	                            	<option value='in progress'> in progress </option>
	                            	<option value='ended'> ended </option>
								</select>

                            <input type='submit' name='Update' value='Update'></td>
                          </tr>";
                   endforeach;
            


?>
              </table>

</body>
</html>