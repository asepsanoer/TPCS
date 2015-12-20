<html>
<head>
<title>Homepage</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style>
	body {
		 height:100%;
		 margin:0;
		 padding:0;
	}
	input{
		background:transparent;
	}
	.tahu{
		visibility: hidden;
	}
	#overlay {
		 visibility: hidden;
		 position: absolute;
		 left: 0px;
		 top: 0px;
		 width:100%;
		 height:100%;
		 text-align:center;
		z-index: 1000;
	}
	#overlay div {
		width: 400px;
		position: relative;
		margin: 10% auto;
		padding: 5px 20px 13px 20px;
		border-radius: 10px;
		background: #fff;
		background: -moz-linear-gradient(#fff, red);
		background: -webkit-linear-gradient(#fff, red);
		background: -o-linear-gradient(#fff, red);
	}
	.close {
		background: red;
		color: #FFFFFF;
		line-height: 25px;
		position: absolute;
		right: -12px;
		text-align: center;
		top: -10px;
		width: 24px;
		text-decoration: none;
		font-weight: bold;
		-webkit-border-radius: 12px;
		-moz-border-radius: 12px;
		border-radius: 12px;
		-moz-box-shadow: 1px 1px 3px #000;
		-webkit-box-shadow: 1px 1px 3px #000;
		box-shadow: 1px 1px 3px #000;
	}

	.close:hover { background: #00d9ff; }
</style>
<script>
	function overlay() {
	el = document.getElementById("overlay");
	el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
	}
</script>
</head>
<body bgcolor="#FFFFFF" marginwidth="0" marginheight="0" style=" margin:auto; background: center top no-repeat; width:720; height:1101;">
<!-- Save for Web Slices (Homepage.psd) -->
<table id="Table_01" width="720" height="1101" border="0" cellpadding="0" cellspacing="0" style="position:absolute;">
	<tr>
		<td colspan="19">&nbsp;</td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/spacer.gif" width="1" height="14" alt=""></td>
	</tr>
	<tr>
		<td rowspan="13">&nbsp;</td>
		<td>
			<a href="#" onclick='overlay()'><img <?php if($status) echo 'class="tahu"'; ?> src="<?php echo base_url('assets'); ?>/images/index_03.png" alt="" name="login" width="90" height="46" id="login"></a></td>
		<td colspan="2">
			<a href="#"><img <?php if($status) echo 'class="tahu"'; ?> src="<?php echo base_url('assets'); ?>/images/index_04.png" alt="" name="register" width="121" height="46" id="register"></a></td>
		<td colspan="9" rowspan="2">&nbsp;</td>
		<td colspan="3">
			<a href="<?php echo site_url('c_menu/logout'); ?>"><img <?php if(!$status) echo 'class="tahu"'; ?> src="<?php echo base_url('assets'); ?>/images/index_06.png" alt="" name="logout" width="98" height="46" id="logout"></a></td>
		<td colspan="3" rowspan="9">&nbsp;</td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/spacer.gif" width="1" height="46" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">&nbsp;</td>
		<td colspan="3">&nbsp;</td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/spacer.gif" width="1" height="441" alt=""></td>
	</tr>
	
	<!---------------------------------------------------------------------------------------------------------------------------------->
	<!---------------------------------------------------------------------------------------------------------------------------------->
<form method="post" action="<?php echo site_url('c_menu/showRoutes');?>">
	<tr>
		<td colspan="2" rowspan="11">&nbsp;</td>
		<td width="314" height="27" colspan="8">
			<input type="text" name="halte1" style="width:314; height:27; border:none;"></td>
		<td rowspan="11">&nbsp;</td>
		<td colspan="2" rowspan="3">
			<button type="submit"><img src="<?php echo base_url('assets'); ?>/images/index_13.png" alt="" name="find" width="82" height="66" id="find"></button></td>
		<td colspan="2" rowspan="7">&nbsp;</td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/spacer.gif" width="1" height="27" alt=""></td>
	</tr>
	<tr>
		<td colspan="8">&nbsp;</td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/spacer.gif" width="1" height="38" alt=""></td>
	</tr>
	<tr>
		<td width="314" height="29" colspan="8" rowspan="2">
			<input type="text" name="halte2" style="width:314; height:29; border:none;"></td></td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/spacer.gif" width="1" height="1" alt=""></td>
	</tr>
</form>
	<!---------------------------------------------------------------------------------------------------------------------------------->
	<!---------------------------------------------------------------------------------------------------------------------------------->
	
	<tr>
		<td colspan="2" rowspan="8">&nbsp;</td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/spacer.gif" width="1" height="28" alt=""></td>
	</tr>
	<tr>
		<td colspan="8">&nbsp;</td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/spacer.gif" width="1" height="81" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="6">&nbsp;</td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/index_20.png" alt="" name="bus" width="52" height="64" id="bus"></td>
		<td rowspan="6">&nbsp;</td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/index_22.png" alt="" name="find_me" width="51" height="64" id="find_me"></td>
		<td rowspan="6">&nbsp;</td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/index_24.png" alt="" name="poi" width="51" height="64" id="poi"></td>
		<td rowspan="6">&nbsp;</td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/spacer.gif" width="1" height="64" alt=""></td>
	</tr>
	<tr>
		<td rowspan="5">&nbsp;</td>
		<td rowspan="5">&nbsp;</td>
		<td rowspan="5">&nbsp;</td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/spacer.gif" width="1" height="125" alt=""></td>
	</tr>
	<tr>
		<td rowspan="4">&nbsp;</td>
		<td colspan="3">
			<img src="<?php echo base_url('assets'); ?>/images/index_30.png" alt="" name="zoom_plus" width="53" height="52" id="zoom_plus"></td>
		<td rowspan="4">&nbsp;</td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/spacer.gif" width="1" height="52" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">&nbsp;</td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/spacer.gif" width="1" height="10" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="<?php echo base_url('assets'); ?>/images/index_33.png" alt="" name="zoom_minus" width="52" height="51" id="zoom_minus"></td>
		<td rowspan="2">&nbsp;</td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/spacer.gif" width="1" height="51" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/spacer.gif" width="1" height="122" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/spacer.gif" width="55" height="1" alt=""></td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/spacer.gif" width="90" height="1" alt=""></td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/spacer.gif" width="31" height="1" alt=""></td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/spacer.gif" width="90" height="1" alt=""></td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/spacer.gif" width="19" height="1" alt=""></td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/spacer.gif" width="52" height="1" alt=""></td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/spacer.gif" width="14" height="1" alt=""></td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/spacer.gif" width="51" height="1" alt=""></td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/spacer.gif" width="14" height="1" alt=""></td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/spacer.gif" width="51" height="1" alt=""></td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/spacer.gif" width="23" height="1" alt=""></td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/spacer.gif" width="27" height="1" alt=""></td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/spacer.gif" width="41" height="1" alt=""></td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/spacer.gif" width="41" height="1" alt=""></td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/spacer.gif" width="30" height="1" alt=""></td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/spacer.gif" width="27" height="1" alt=""></td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/spacer.gif" width="25" height="1" alt=""></td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/spacer.gif" width="1" height="1" alt=""></td>
		<td>
			<img src="<?php echo base_url('assets'); ?>/images/spacer.gif" width="38" height="1" alt=""></td>
		<td></td>
	</tr>
</table>
<!-- End Save for Web Slices -->
<img src="<?php echo base_url('assets'); ?>/Images/bg.jpg" style="float:none; margin-top:5px;">

<div id="overlay">
     <div>
		<a class="close" href='#' onclick='overlay()'>X</a>
          <p>Login</p>
			<form method="post" action="<?php echo site_url('c_menu/login'); ?>">
			  <input type="text" name="username" placeholder="username" />
			  <input type="password" name="password" placeholder="password" />
			  <input type="submit" name="submit" placeholder="submit" />
			</form>
     </div>
</div>
</body>
</html>