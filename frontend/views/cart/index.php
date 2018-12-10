<html>
<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use common\models\Country;
?>





<table class="blueTable">
<thead>
<tr>
<th>Termék</th>
<th>Mennyiség</th>
<th>Ár</th>
<th>Kép</th>
<th>Termék leadás/felvétel</th>
</tr>
</thead>
<tfoot>
<tr>
<td colspan="5">
<div class="links"><a href="#">&laquo;</a> <a class="active" href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">&raquo;</a></div>
</td>
</tr>
</tfoot>
<?php
if($items){
foreach($items as $ssskey =>  $row){

    
 


echo "<tbody>";
echo "<tr>";
echo "<td>";
echo $row["name"];
echo "</td>";
echo "<td>";
        echo $row["quantity"];
echo "</td>";  echo "<td>";
         echo $row['price'] ;   
echo "</td>"; 
echo "<td>";
            echo $row['image'] ;
 echo "</td>";
 echo "<td>";
        echo "<a href='http://localhost/webshop/cart/remove/$ssskey' class='btn btn-default'>Delete</a>";
        echo "<a href='http://localhost/webshop/category/list' class='btn btn-default'>Felvétel</a>";
        echo "</td>";
echo"</tr>";

echo"</tbody>";
}}
    else{
        echo " A kosár üres, kérem vállaszon ki egy terméket!";
    }

?>
</table> 


<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Vásárol mind!</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" >
    <div class="modal-dialog" >
      
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 >Köszöni vásárlását az InnoShop.</h4>
          <a href='http://localhost/webshop/' class='btn btn-default'>Vissza a főoldalra!</a>
        </div>
    </div>  
    </div>
    </div>
    <a href='http://localhost/webshop/cart/reset' button type="button" class="btn btn-info btn-lg pull-right">Törlés mind!</button> </a>
