<?php
if(isset($_SESSION['login_user']))
echo '<a class="page-scroll" href="#upload">About</a>';
else
	echo'<a class="page-scroll" data-toggle="modal" data-target="#myModalHorizontal">Analytics</a>';
  ?>