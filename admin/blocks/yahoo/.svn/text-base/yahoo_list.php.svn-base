<?php 
$vitri=$_GET[vitri];
$vitri = $y -> processData($vitri);
$link = "index.php?com=yahoo_list&vitri=$vitri";
$limit = LIMIT;
$page_show=PAGE_SHOW;

$baiviets = $y->Yahoo_List($vitri,'',-1,-1);
$total_record = mysql_num_rows($baiviets);

$total_page = ceil($total_record/$limit);

if(isset($_GET[page])==false){
	$page = 1;
}
else{ 
	$page=$_GET[page];
	settype($page,"int");
}

$offset = $limit * ($page - 1);
$baiviet = $y->Yahoo_List($vitri,'',$offset,$limit);

?>
<script type="text/javascript">
	$(document).ready(function(){		
		$(".linkxoa").live("click",function(){		
			var flag = confirm("Bạn có chắc chắn xóa ?");
			if(flag==true){                           
				var idEmail = $(this).attr("idEmail");
				$.get('xoa.php',{loai:"email_khachhang",id:idEmail},function(data){
						window.location.reload();			
				});	
			}
		})
        $(".anhien").live("click",function(){		
			var src = $(this).attr('src');
            var idYahoo = $(this).attr('idYahoo');
            if(src=='../img/enable.png'){
                $(this).attr('src','../img/disabled.png');
                $.post('an.php',{idYahoo:idYahoo},function(){
					window.location.reload();		
				});
            }else{
                $(this).attr('src','../img/disabled.png');
                $.post('hien.php',{idYahoo:idYahoo},function(){
					window.location.reload();		
				});
            }
			if(flag==true){                           
				var idEmail = $(this).attr("idEmail");
				$.get('xoa.php',{loai:"email_khachhang",id:idEmail},function(data){
						window.location.reload();			
				});	
			}
		})
	})
</script>
<style>
#bao_nick  {padding:10px}
#bao_nick a {color:#FFF;background-color:#06F;margin-right:20px;padding:7px;text-decoration:none}
#bao_nick a:hover, #bao_nick a.chon{background-color:#CCC;color:#00F}
#rounded-corners{font-weight:bold}
</style>
<div id="admin_navigation">
	<div style="float:left;width:90%">
		<h3>Quản lý Nick Yahoo</h3>
    </div>
   <div style="float:left;width:5%;padding-top:5px">
        <a href="index.php?com=yahoo_add&vitri=<?php echo $vitri; ?>"><input type="button" class="new" name="btnNew" value=""/></a><br />		
        <span>New</span>
    </div>
    <div class="clr"></div>
</div>
<div id="main_admin">
	<div>
    <form method="get">
        	<input type="hidden"  name="com" value="team"/>
    	<fieldset>
        	<legend>++ Theo trang ++</legend>
            
            	<div style="text-align: left" id="bao_nick"> 
                	<a href="index.php?com=yahoo_list&vitri=trangchu" <?php if($_GET[vitri]=="trangchu") echo 'class=chon' ;?>> Trang chủ </a>
                	<a href="index.php?com=yahoo_list&vitri=cap1" <?php if($_GET[vitri]=="cap1") echo 'class=chon' ;?>> Trang cấp 1 </a>
                    <a href="index.php?com=yahoo_list&vitri=thuexe" <?php if($_GET[vitri]=="thuexe") echo 'class=chon' ;?>> Trang thuê xe/visa </a>         
                
                </div>
        </fieldset>
        <br />
    	<fieldset>
        	<legend>++ Danh sách ++</legend>
            	<div style="text-align: center">                     
                    <table id="rounded-corners" summary="2007 Major IT Companies&#39; Profit">
                        <thead>
                        	<tr>
                                <td colspan="5"><?php echo $visa->phantrang($page,$page_show,$total_page,$link);?></td>
                            </tr>
                            <tr class="tieudetable">
                            
                                <th scope="col" class="rounded-company"></th>      
                                
                                <th scope="col" class="rounded">Tên</th>  
                                <th scope="col">Nick</th> 
                                
                                <th scope="col" class="rounded">Điện thoại</th>                                 
                                <th scope="col">Loai</th>
                                <th scope="col">Status</th>
                                <th scope="col" class="rounded-q4">Sửa</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php 
                      
						$i=0;
                       while($row = mysql_fetch_assoc($baiviet)){                      
					   $i++;
                        ?>	
                            <tr <?php if($i%2==0) echo "bgcolor='#CCC'" ; ?>>
                                <td><input type="checkbox" name="chon" idEmail=<?php echo $row[idYahoo]?>></td>                                         
                                <td align="left"><?php echo $row[Ten];?></td>    
                               
                                                         
                                <td  align="left"><?php echo $row[Nick];?></td>
                                <td><?php echo $row[dienthoai];?></td>
                                <td><?php echo $row[loai];?></td>
                                <td><?php if($row[anhien]==1) $src ="../img/enable.png" ;else $src = '../img/disabled.png'?>
                                <img class="anhien" idYahoo="<?php echo $row[idYahoo]; ?>" src="<?php echo $src; ?>"  />
                                </td>
                               
                               <td><a href="index.php?com=yahoo_sua&idYahoo=<?php echo $row[idYahoo]?>&vitri=<?php echo $_GET[vitri];?>"><img src="../img/icons/user_edit.png" alt="" title="" border="0"></a></td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <td colspan="5"><?php echo $visa->phantrang($page,$page_show,$total_page,$link);?></td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
        </fieldset>
    </div>

   
    <div class="clr"></div>
</div>
