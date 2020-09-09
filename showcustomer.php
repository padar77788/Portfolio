<?php
 if(isset($_GET['q'])){
   $name=$_GET['q'];
   $servername='localhost';
   $username='root';
   $password='';
   $dbname='block';
   $connect =new mysqli($servername,$username,$password,$dbname);
   $sql = "SELECT * FROM table_customer WHERE name='$name'";
   $data=$connect->query($sql);
}
 
  

?> 
<table>
     <tr>
     <td>
       Comapny Name
     </td>
     <td>
        Name
     </td>
     <td>
     Address
     </td>
     <td>
     City
     <td>
     PostalCode
     </td>
     <td>
     Country
     </td>
     </tr>
   

  
   <?php


   if(isset($data) && $data==true){

 
       while($result=mysqli_fetch_assoc($data)){
          ?>
           <tr>
  <td><?php echo $result['cname']?></td>
  <td><?php echo $result['name']?></td>
  <td><?php echo $result['adr']?></td>
  <td><?php echo $result['city']?></td>
 <td><?php echo $result['pcode']?></td>
  <td><?php echo $result['country']?></td>
      
   </tr>
   <?php }}?>
   </table>

