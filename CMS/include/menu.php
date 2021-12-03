<?php
if($_SESSION['user_type'] == 'customer'){
?>
<div id="ddblueblockmenu">
	  <div class="menutitle">Customer Menu</div>
		  <ul>
			<li><a href="<?php echo WEB_ROOT; ?>">Welcome,&nbsp;<?=$_SESSION['user_name'];?></a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=customer&view=makeComplain">Make Complains</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=customer&view=compDetails">View Complain Details</a></li>
			<li><a href="logout.php">Logout</a></li>
		  </ul>
	  <div class="menutitle">&nbsp;</div>	  
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php 
}else if($_SESSION['user_type'] == 'employee'){
?>
<div id="ddblueblockmenu">
	  <div class="menutitle">Engineers Menu</div>
		  <ul>
			<li><a href="<?php echo WEB_ROOT; ?>">Welcome,&nbsp;<?=$_SESSION['user_name'];?></a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=employee&view=viewComplain">View Assign Complains</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=employee&view=viewComplainClose">Close Complain</a></li>
			<li><a href="logout.php">Logout</a></li>
		  </ul>
	  <div class="menutitle">&nbsp;</div>	  
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
	 
<?php 
}else if($_SESSION['user_type'] == 'admin'){
?>
<div id="ddblueblockmenu">
	  <div class="menutitle">Admin Menu</div>
		  <ul>
			<li><a href="<?php echo WEB_ROOT; ?>">Welcome,&nbsp;<?=$_SESSION['user_name'];?></a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=compDetails">View Assign Complains</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=vDetails">View Working Complains</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=compCloseDetails">View Close Complain</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=enggDetails">Engineer Details</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=custDetails">Customer Details</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=reports">Reports</a></li>
			<li><a href="logout.php">Logout</a></li>
		  </ul>
	  <div class="menutitle">&nbsp;</div>	  
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php 
}
?>