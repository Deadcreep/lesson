<?php 
     mb_internal_encoding("utf-8");
    $db = mysql_connect("localhost","localhost","123");
    mysql_select_db("name", $db);
    $result = mysql_query("SELECT * FROM names", $db);
         
?>

<!DOCTYPE html>

<html lang="ru">    
    <head>
    	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <title>Table</title>
        <link rel='stylesheet' href='css/bootstrap.min.css' type='text/css' media='all'>
               <link rel='stylesheet' href='/css/creative.css' media='all'>
    </head>
    <body>    	
        <div id="table">
            <table class="table table-bordered table-striped">
              <thead>
                <tr class="success">
                  <th>Номер</th>
                  <th>Имя</th>          
                </tr>
              </thead>
              <tbody>
                  <?php mb_internal_encoding("UTF-8");
						while ($row = mysql_fetch_assoc($result)) {
							?>
							<tr>
                        <td><?php echo $row['ID']; ?></td>
                        <td><?php echo $row['name'] ?></td>
                    </tr> 			    	
                    <?php } ?>
              </tbody>
            </table>
        </div>        
    </body>
</html>