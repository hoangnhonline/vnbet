<?php 
$sql = "SELECT * FROM dvt_quangcao";
$rs = mysql_query($sql);

?>
<style>
#bao_nick  {padding:10px}
#bao_nick a {color:#FFF;background-color:#06F;margin-right:20px;padding:7px;text-decoration:none}
#bao_nick a:hover, #bao_nick a.chon{background-color:#CCC;color:#00F}

</style>
<div id="admin_navigation">
	<div style="float:left;width:90%">
		<h3>Quản lý quảng cáo 2 bên</h3>
    </div>
   
    <div class="clr"></div>
</div>
<div id="main_admin">
	
    	<fieldset>
        	<legend>++ Danh sách ++</legend>
            	<div style="text-align: center">                     
                    <table id="rounded-corners" summary="2007 Major IT Companies&#39; Profit">
                        <thead>
                        	
                            <tr class="tieudetable">
                            
                                <th scope="col" class="rounded-company"></th>      
                                
                                <th scope="col" class="rounded">Vị trí</th>  
                                <th scope="col">Hình</th> 
                                
                                <th scope="col" class="rounded">Link</th>                                 

                                <th scope="col" class="rounded-q4">Sửa</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php 
                      
						$i=0;
                       while($row = mysql_fetch_assoc($rs)){                      
					   $i++;
                        ?>	
                            <tr <?php if($i%2==0) echo "bgcolor='#CCC'" ; ?>>
                                <td><input type="checkbox" name="chon" idEmail=<?php echo $row[idYahoo]?>></td>                                         
                                <td align="left"><?php if($i==1) echo "Trái" ;else echo "Phải"; ?></td>    
                               
                                      <?php 
								$hinh = $qt->layUrlHinh($row['UrlHinh']);
								 ?>                       
                                <td  align="left"><img src="..<?php echo $hinh;?>" width="80" /></td>
                                <td align="left"><?php echo $row[link];?></td>
                                
                               
                               <td><a href="index.php?com=qc_sua&idQC=<?php echo $row[idQC]?>"><img src="../img/icons/user_edit.png" alt="" title="" border="0"></a></td>
                            </tr>
                        <?php } ?>
                       
                        </tbody>
                    </table>
                    </div>
        </fieldset>
    </div>

   
    <div class="clr"></div>
</div>
