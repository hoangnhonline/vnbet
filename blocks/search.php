Thư mục
<select name='idDM' id='idDM_loc'>
    <option value='0'>Chọn thư mục</option>
    <?php
    $mulu = $tc->MucLuc_List();

    while ($row_ml = mysql_fetch_assoc($mulu)) {
        ?>
        <option value='<?php echo $row_ml['idML'] ?>'><?php echo $row_ml['TenMucLuc']; ?></option>
<?php } ?>
</select>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;			
Tên sách
<select name='idSach' id='idSach_loc'>
    <option value='0'>Chọn sách</option>								
</select>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;			
Mục lục
<select name='idML' id='idML_loc'>
    <option value='0'>Chọn mục lục</option>								
</select>

<input type='button' id="btnLoc" value = 'Xem' name='btnSumit' />
