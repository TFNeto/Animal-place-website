{include file='common/header.tpl'}
	

    <div class="home">
	    <div class="signupbut">
		
			<p>Don´t have an account yet? Just sign up and choose your new friend!</p>
			<p>Click on the button below to sign up</p>
			<button type="button" onclick="window.location.href='{$BASE_URL}pages/users/registeruser.php'" name="signup">Sign Up</button>
	    </div>
	
	    <div class="signupbut">
		
			<p>Or just continue to our website and see the friends you can make</p>
			<p>Click on the button below to see the animals</p>
			<button type="button" onclick="window.location.href='{$BASE_URL}pages/animals/animals.php'" name="continuetoweb">Continue To Website</button>
		</div>
    </div>

{include file='common/footer.tpl'}