<div id="content">
	<div id="leftcol">
		<div class="buffer">
			<p class="head dblue rw bold ctahead">Welcome to <span class="red namesake">Out.Spoken</span></p>
			<p class="subhead rw lblue ctasubhead">What will you discover today?</p>
			<p class="blurb brown subtext">A web app for you to create manage and share 
				<br/>your routes from your mobile to your desktop
				<br/>and everything in-between.
			</p>
			<div id="ctaimg"></div>
			<p class="followup brown bold"><span class="red bold">Powered by Google Maps</span><br/>
				Go out and discover something new today...</p>
			
			<p class="head lblue rw pointhead">Create an account to:</p>
			<ul class="ctareasons red blurb rw subtext">
				<li>Discover your City</li>
				<li>Create Bike Routes</li>
				<li>Track yourself with GPS</li>
				<li>Leave a Description</li>
				<li>Share with friends</li>
			</ul>
		</div>
	</div>
	<div id="rightcol">

		<form class="signinbox" method="post" action="index.php/site/register">
						
			<p class="dblue head rw">Existing User:</p></br>
			<input type="text" name="username" placeholder="username"></br>
			<input type="password" name="password" placeholder="Password"></br>
			<a class="lblue forgot rw">Forgot Password?</a>
			<input class="signinbtn rw" type="submit" value="Sign In">
		</form>
		
		<form class="signupbox" method="post" action="index.php/site/register">
			<p class="dblue head rw">New User?</p></br>
			<p class="lblue subhead rw">Takes a second to signup.</p></br>
			<input type="text" name="username" placeholder="username"></br>
			<input type="text" name="email" placeholder="Email"></br>
			<input type="password" name="password" placeholder="Password"></br>
			<input type="password" name="repassword" placeholder="Retype Password"></br>
			<input class="signupbtn rw" type="submit" value="Sign Up">
			
		</form>
	
	</div>
</div>