<?php 
require_once "../lib/class.sach.php";
$s = new sach;
$idML = $_GET[idML];settype($idML,"int");
$sach  = $s-> List_Sach_All($idML);
echo "<option value=0>Chọn sách</option>";
while($row = mysql_fetch_assoc($sach)){
?>    
    <option <?php if($_GET[idSach]==$row['idSach']) echo "selected" ;?>  value="<?php echo $row[idSach]; ?>">
        <?php echo $row[TenSach]; ?>
    </option>
      
<?php } ?>

