<?php 
    $arr = Array('1' => 'Антоний', 'Гай', 'Тиберий', 'Юлий', 'Марк', 'Корнелий', 'Брут', 'Троян', 'Аврелий');     
?>

<!DOCTYPE html>

<html lang="en">    
    <head>
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
                  <?php foreach(array_keys($arr) as $key): ?>
                    <tr>
                        <td><?php echo $key; ?></td>
                        <td><?php echo $arr[$key] ?></td>
                    </tr>
                  <?php endforeach;?>
              </tbody>
            </table>
        </div>       
    </body>
</html>

