﻿<?php
if(isset($_GET['idDM'])){
	$idDM = $_GET['idDM'];settype($idDM,"int");
	$chitiet = $dm->DanhMuc_ChiTiet($idDM);
	$row_ct = mysql_fetch_assoc($chitiet);
}

if(isset($_POST['btnSumit'])){
	if(isset($_GET['idDM'])){
		$dm->DanhMuc_Sua($idDM,$loi);
	}else{
		$dm->DanhMuc_Them();
	}
    header("location:?com=mucluc_list&idSachs=".$_POST['idSach']);
}
?>
<script>
$(function(){
	$("#idML").change(function(){
		$("select[name=idSach]").load("blocks/ajax_laysach.php?idML="+ $(this).val());
	});
});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".linkxoa").live('click',function(){
			var flag = confirm("Bạn có chắc chắn xóa");
			if(flag == true){
				var idDM = $(this).attr("idDM");
				$.get('xoa.php',{loai:"danhmuc",id:idDM},function(data){
					window.location.reload();
				});
			}
		})

	})
</script>

<div>
	<div>
		<h3>Quản lý mục lục : <?php echo (isset($_GET['idDM']) ? "Cập nhật" : "Thêm mới")?></h3>
    </div>
    <div class="clr"></div>
</div>
<div id="main_admin">

	<div id="main_left">
        <form action="" method="post" name="form_add_dm_ks" id="mucluc_add_frm">
            	<table>
                	<tr class="left">
                    	<td>Thư mục</td>
                        <td>
							<select name='idML' id="idML">
								<option value='0'>Chọn thư mục</option>
								<?php $MucLuc = $ml->MucLuc_List();
								while($row =  mysql_fetch_assoc($MucLuc)){
								?>
								<option <?php if($row_ct['idML']==$row['idML']) echo "selected"; ?> value='<?php echo $row[idML]?>'><?php echo $row['TenMucLuc']; ?></option>
								<?php } ?>
							</select>
                        </td>
                    </tr>
					<tr class="left">
                    	<td>Tên sách</td>
                        <td>
							<select name='idSach' id="isSach">
								<option value='0'>Chọn sách</option>
								<?php $sachss = $s->Sach_List();
								while($row =  mysql_fetch_assoc($sachss)){
								?>
								<option <?php if($row_ct['idSach']==$row['idSach']) echo "selected"; ?> value='<?php echo $row['idSach']?>'><?php echo $row['TenSach']; ?></option>
								<?php } ?>
							</select>
                        </td>
                    </tr>
                    <tr class="left">
                    	<td>Tên mục lục</td>
                        <td><input type="text" name="DanhMuc" id="DanhMuc" class="tf" value="<?php echo $row_ct['DanhMuc']; ?>" style="width: 400px;height: 25px"  />
                        	<span class="error"><?php echo $loi['DanhMuc'];?></span>
                        </td>
                    </tr>
                     <tr>
                         <td colspan="2">
                         <div style="padding-left:200px">
                                <input type="submit" class="save" name="btnSumit" value="Save" id="btnSubmit" onclick="return validate();"/>

                                <input type="reset" class="cancel" name="btnCancel" value="Reset"/>

                        </div>
                             </td>

                    </tr>
                </table>
        </form>

    </div>

</div>
<script type="text/javascript">
    function validate(){
        if($('#idML').val()==0 || $('#isSach').val()==0){
           alert('Vui lòng chọn thư mục và sách!');
           return false;
       }
    }
</script>
