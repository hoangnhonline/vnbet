<?php 
$vitri=$_GET[vitri];
$vitri = $y -> processData($vitri);
if(isset($_POST[btnSumit])){	
	$y->Yahoo_Them();		
	header("location:?com=yahoo_list&vitri=$vitri");	
}
?>
<form action="" method="post" name="form_add_dm_tour">
<div id="admin_navigation">
	<div style="float:left;width:90%">
		<h3>Quản lý nick Yahoo :thêm mmới</h3>
    </div>
	<div style="float:left;width:5%;padding-top:5px">
    	<input type="submit" class="save" name="btnSumit" value=""/><br />		
        <span>Save</span>
    </div>
    <div style="float:left;width:5%;padding-top:5px">
    	<input type="reset" class="cancel" name="btnCancel" value=""/><br />		
        <span>Reset</span>
    </div>
    <div class="clr"></div>
</div>
<div id="main_admin">
	
	<div id="main_left">
    	<fieldset>
        	<legend>Thông tin chi tiết</legend>
            	<table>
					<?php if($vitri=='cap1'){?>
					<tr>
                   	  <td class="left">Loại</td>
                        <td>
							<select name='loai'>
								<option value='trongnuoc'>Trong nước</option>
								<option value='nuocngoai'>Nước ngoài</option>
								<option value='khachle'>Khách lẻ</option>
							</select>
                        </td>                        
                    </tr>
					<?php } ?>
					<?php if($vitri=='trangchu'){?>
					<tr>
                   	  <td class="left">Loại</td>
                        <td>
							<select name='loai'>
								<option value='trongnuoc'>Trong nước</option>
								<option value='nuocngoai'>Nước ngoài</option>
								<option value='vemaybay'>Vé máy bay</option>
							</select>
                        </td>                        
                    </tr>
					<?php } ?>
					<?php if($vitri=='thuexe'){?>
					<tr>
                   	  <td class="left">Loại</td>
                        <td>
							<select name='loai'>
								<option value='thuexe'>Thuê xe</option>
								<option value='visa'>Visa</option>
								<option value='team'>Teambuilding</option>
							</select>
                        </td>                        
                    </tr>
					<?php } ?>
                	<tr>
                   	  <td class="left">Tên hiển thị</td>
                        <td>
                            <input type="text" name="Ten" id="Ten" class="tf"  value="<?php echo $_POST[Ten]?>"/>
                        	<span class="error"><?php echo $loi[Ten];?></span>                 
                        </td>                        
                    </tr>                    
                    <tr class="left">
                    	<td>Nick </td>
                        <td><input type="text" name="Nick" id="Nick" class="tf" value="<?php echo $_POST[Nick]?>"/>
                        	<span class="error"><?php echo $loi[Nick];?></span>
                        </td>                        
                    </tr>
                    <tr>
                    <td>Điện thoại</td>
                    <td>
					<input type='hidden' name='vitri' value='<?php echo $vitri; ?>' />
					<input type="text" name="dienthoai" id="dienthoai" class="tf" value="<?php echo $_POST[dienthoai]?>" />
                       
                    </td>                        
                </tr>     
                     
                  
                    <tr>
                   	  <td class="left">&nbsp;</td>
                        <td>&nbsp;
                         
                        </td>                        
                    </tr>
                </table>
            
        </fieldset>
    </div>
	
  
    <div class="clr"></div>
</div>
</form>