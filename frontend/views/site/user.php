

<div class="container1">
  <h2 id="cim">USEREK</h2>
           
  <table class="table table-striped">
  <?php
  foreach($data as $user){
   echo" <thead>";
     echo" <tr>";
      echo"  <th>Username</th>";
      echo"  <th>Email</th>";
       echo" <th>Letrehozasi ido</th>";
      echo"</tr>";
echo "</thead>";
    echo"<tbody>";
    echo "  <tr>";
        echo"<td>$user[username]</td>";
        echo"<td>$user[email]</td>";
       echo" <td>$user[created_at]</td>";
     echo" </tr>";
    
   
  }
  


    

?>

</div>
 </body>
</table>
<button type="addpost">New Post!</button>