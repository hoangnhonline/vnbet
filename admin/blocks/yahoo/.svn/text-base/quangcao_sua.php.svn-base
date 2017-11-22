<?php 
$idQC = $_GET[idQC ];settype($idQC ,"int");
$chitiet = $y->QuangCao_ChiTiet($idQC );
$row= mysql_fetch_assoc($chitiet);
if(isset($_POST[btnSumit])){	
	$y->QuangCao_Sua($idQC );		
	header("location:?com=qc_list");
	
}
?>
<form action="" method="post" name="form_add_dm_tour">
<div id="admin_navigation">
	<div style="float:left;width:90%">
		<h3>Quản lý quảng cáo: cập nhật</h3>
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
                	<tr>
                   	  <td class="left">Link</td>
                        <td>
                            <input type="text" name="link" id="link" class="tf"  value="<?php echo $row[link]?>"/>
                        	<span class="error"><?php echo $loi[link];?></span>                 
                        </td>                        
                    </tr>                    
                    <tr class="left">
                    	<td>UrlHinh </td>
                         <td><input type="text" name="UrlHinh" id="UrlHinh" class="tf" value="<?php echo $row[UrlHinh]?>"/>
                        <input type="button" name="btnChonFile" value="Chọn hình" onclick="BrowseServer('Images:/','UrlHinh')"  />
                        <div id="preview">
                            <div id="thumbnails"></div>
                        </div>   
                        <span class="error"><?php echo $loi[UrlHinh];?></span>
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