<!-- quick -->
<ul id="quick">
        <li>
                <a href="#" title="Products"><span class="normal">Đối tượng</span></a>
                <ul>
                        <li><a href="<?php echo BASE_URL.'tacgia'; ?>">Thêm dịch giả - tác giả</a></li>
                        <li><a href="<?php echo BASE_URL.'album_add'; ?>">Thêm album</a></li>
                        <li><a href="<?php echo BASE_URL.'phapam_add'; ?>">Thêm pháp âm</a></li>                        
                </ul>
        </li>
        <!--
        <li>
                <a href="#" title="Products"><span class="icon"><img src="resources/images/icons/application_double.png" alt="Products" /></span><span>Thư mục</span></a>
                <ul>
                        <li><a href="<?php echo BASE_URL.'thumuc_list'; ?>">Quản lý thư mục</a></li>
                        <li><a href="<?php echo BASE_URL.'thumuc'; ?>">Thêm thư mục</a></li>                       
                </ul>
        </li>
        -->
        <li>
                <a href="" title="Events"><span class="icon"><img src="resources/images/icons/calendar.png" alt="Events" /></span><span>Sách</span></a>
                <ul>
                        <li><a href="<?php echo BASE_URL.'sach_list'; ?>">Quản lý sách</a></li>
                        <li class="last"><a href="<?php echo BASE_URL.'sach_add'; ?>">Thêm sách</a></li>
                </ul>
        </li>        
        <li>
                <a href="" title="Links"><span class="icon"><img src="resources/images/icons/world_link.png" alt="Links" /></span><span>Mục lục</span></a>
                <ul>
                        <li><a href="<?php echo BASE_URL.'mucluc_list'; ?>">Quản lý mục lục</a></li>
                        <li class="last"><a href="<?php echo BASE_URL.'mucluc_add'; ?>">Thêm mục lục</a></li>
                </ul>
        </li>
        <li>
                <a href="" title="Pages"><span class="icon"><img src="resources/images/icons/page_white_copy.png" alt="Pages" /></span><span>Trang</span></a>
                <ul>
                        <li><a href="<?php echo BASE_URL.'trang_list'; ?>">Quản lý trang</a></li>
                        <li><a href="<?php echo BASE_URL.'trang_add'; ?>">Thêm trang</a></li>                          
                </ul>
        </li>
        <li>
                <a href="" title="Links"><span class="icon"><img src="resources/images/icons/user.png" alt="Links" /></span><span>Users</span></a>
                <ul>
                    <?php if($_SESSION['email'] == 'hoangnh@vnbet.vn') {?>
                        <li><a href="<?php echo BASE_URL.'user_list'; ?>">Manage users</a></li>
                        <li class="last"><a href="<?php echo BASE_URL.'user_add'; ?>">New user</a></li>
                    <?php } ?>    
                        <li class="last"><a href="<?php echo BASE_URL.'user_changepass'; ?>">Change password</a></li>
                </ul>
        </li>
        
</ul>