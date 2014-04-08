<style>
td
{
	text-align:left;
}
table
{
	border:2px solid white;
	padding:1em;
	border-radius:25px;
}

table td 
{
	border:0px solid black;
}
input[type='submit']
{
	width:100px;
	height:50px;
	padding:1em;
}
input[type='email'], input[type='password']
{
	width:200px;
	height:12px;
	padding:1em;
	background-color:white;
}
</style>


<table class='simple'>
	<form action='./index.php?content=checklogin' method='post'>
		<tr>
			<td>emailadres</td>
		</tr>
		<tr>
			<td><input type='email' name='email' /></td>
		</tr>
		<tr>
			<td>wachtwoord</td>
		</tr>
		<tr>
			<td><input type='password' name='password' /></td>
		</tr>
		<tr>
			<td><input type='submit' value='inloggen' name='submit' /></td>
		</tr>
	</form>
</table>
