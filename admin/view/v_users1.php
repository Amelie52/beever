<html>
<head>
	<title>Users List</title>
</head>
<body>
<h1>Users list</h1>




              <table>
                
            <tr>
                <th>ID</th>
                <th>Name</th>           
                <th>Firstname</th>
                <th>Mail</th>
            </tr>
    <?php 
                   foreach ($Users as $Users):
                   echo " <tr> 
                            <td>" .$Users['user_id'] ."</td> 
                            <td>" .$Users['user_name'] ."</td>
                            <td>" .$Users['user_firstname'] ."</td>
                            <td>" .$Users['user_mail'] ."</td>
                            <td><a href='delete_users.php?id=".$Users['user_id'] ."'>Delete</a></td>
                          </tr>";
                   endforeach;
            


?>
              </table>

</body>
</html>