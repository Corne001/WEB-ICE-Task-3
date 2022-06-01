<body>  
<h1>Welcome</h1><br>  


<?php
    //include ("connect.php");
include("dataTable.php");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr><th>ID</th>
         <th>Email</th>
         <th>Password</th>
         <th>Username</th>
         <th>Mobile Number</th>
    </thead>
</body>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['email']??''; ?></td>
      <td><?php echo $data['password']??''; ?></td>
      <td><?php echo $data['Name']??''; ?></td>
      <td><?php echo $data['mobile']??''; ?></td>
       
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="5">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>
       













<h1><a href="Logout.php">Logout here</a> </h1>  
</body>

