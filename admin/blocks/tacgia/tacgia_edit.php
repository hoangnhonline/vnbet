﻿<?php 
$idTG = $_GET[idTG];settype($idTG,"int");
$chitiet = $tg->TacGia_ChiTiet($idTG);
$row = mysql_fetch_assoc($chitiet);
if(isset($_POST[btnSumit])){	
	$thanhcong = $tg->TacGia_Sua($idTG,$loi);	
	if($thanhcong==true){
		header("location:?com=tacgia_list");
	}
}
?>
<form action="" method="post" name="form_add_dm_ks">
<div>
	<div>
		<h3>Quản lý Dịch giả - Tác giả : cập nhật</h3>
    </div>   
    <div class="clr"></div>
</div>
<div id="main_admin">
	
	<div id="main_left">
    	
            	<table>
                   <tr class="left">
                        <td style="width: 150px">Tên dịch giả - tác giả</td>
                        <td><input type="text" name="TacGia" id="TacGia" class="tf" value="<?php echo $row['TacGia'] ?>" style="width: 400px;height: 25px" />
                            <span class="error"><?php echo $loi['TacGia']; ?></span>
                        </td>                        
                    </tr>  
                    <tr class="left">
                        <td>URL Details</td>
                        <td><input type="text" name="UrlDetail" id="UrlDetail" class="tf" value="<?php echo $row['UrlDetail'] ?>" style="width: 400px;height: 25px" />
                            <span class="error"><?php echo $loi['UrlDetail']; ?></span>
                        </td>                        
                    </tr>   
                    <tr>
                        <td colspan="2">
                            <div style="padding-left:200px">                           
                                <input type="submit" class="save" name="btnSumit" value="Save" onclick="return validate();"/>		                               

                                <input type="reset" class="cancel" name="btnCancel" value="Reset"/>                                                      

                            </div>
                        </td>

                    </tr>                
                </table>
     
    </div>

   
    <div class="clr"></div>
</div>
</form>