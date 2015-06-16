<section data-ng-controller="login" data-ng-init="hideTopNav()">
		<form id="frm_login" name="frm_login" novalidate="">
			Enter your email<input type="email" id="user_email" ng-model="user_email" name="user_email" required="" /> <br>
			<div ng-show="frm_login.user_email.$invalid" ng-hide="frm_login.user_email.$pristine ||  frm_login.user_email.$valid">  
		   				  Invalid Email ID
		    </div> <br>
			
			Enter your password<input required="" type="password" id="user_password" ng-model="user_password" name="user_password" ng-minlength="5" ng-maxlength="10" /> <br>
			<div ng-show="frm_login.user_password.$invalid" ng-hide=" frm_login.user_email.$pristine || frm_login.user_password.$valid">  
		   				    Password must be between 4-10 characters Invalid Password 
		    </div> <br>
			
			<input ng-disabled="frm_login.$invalid" type="submit" name="btn_submit" ng-click="loginMe()" value="SignIn" />
		</form>
</section>