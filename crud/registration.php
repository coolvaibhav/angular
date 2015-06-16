<?php include "header.php" ?>
	<div>
		<form name="frm_reg" id="frm_reg" novalidate  method="post"> 
			Enter First Name<input type="text" required="required" ng-model="first_name" id="first_name" name="first_name" ng-pattern="/^[a-zA-Z]*$/" /> <br>
			
			<div ng-show="frm_reg.first_name.$invalid" ng-hide="frm_reg.first_name.$pristine || frm_reg.first_name.$valid">  
		   				    Value must be valid 
		    </div> <br>
			
			Enter Last Name<input type="text" id="last_name" required="required" ng-model="last_name" ng-minlength="4" ng-maxlength="10" ng-pattern="/^[a-zA-Z]*$/" name="last_name" /> <br>
			
			<div ng-show="frm_reg.last_name.$invalid" ng-hide="frm_reg.last_name.$pristine || frm_reg.last_name.$valid">  
		   				  Last name must be between 4-10 characters. 
		    </div> <br>
			
			Enter Your Email<input type="email" required="required" id="user_email" ng-model="user_email" name="user_email" /> <br>
			<div ng-show="frm_reg.user_email.$invalid" ng-hide="frm_reg.user_email.$pristine ||  frm_reg.user_email.$valid">  
		   				  Invalid Email ID
		    </div> <br>
						
			Enter password<input type="password" required="required" id="user_password" ng-model="user_password" name="user_password" ng-minlength="5" ng-maxlength="10" /> <br>		
			<div ng-show="frm_reg.user_password.$invalid" ng-hide=" frm_reg.user_email.$pristine || frm_reg.user_password.$valid">  
		   				    Password must be between 4-10 characters Invalid Password 
		    </div> <br>

	{{my_data}}		    
	
	
		
		
		
		    
			
			<input ng-disabled="frm_reg.$invalid" type="submit" name="btn_submit" value="SignIn" ng-click="ragisterMe()"  />
		</form>
            </div>
		
	<?php include"footer.php"?>