<ul>
	<li>
		<a href="index.php?content=homepage">home</a>
	</li>
	<?php 
		if (isset($_SESSION['userrole']))
		{
			echo "<li>
					<a href='index.php?content=logout'>uitloggen</a>
				  </li>";
			switch ($_SESSION['userrole'])
			{
				case 'customer':
					echo "<li>
							<a href='index.php?content=downloadpage'>downloads</a>					
						  </li>";
						  echo "<li>
							<a href='index.php?content=customer_homepage'>user home</a>					
						  </li>"; 
						  echo "<li>
							<a href='index.php?content=faqpage'>faq</a>				
						  </li>";
						  echo "<li>
						  			<a href='index.php?content=opdracht'>
						  				plaats opdracht
						  			</a>
						  		</li>"; 
						  echo "<li>
						  			<a href='index.php?content=bekijk_opdracht'>
						  				bekijk opdrachten
						  			</a>
						  		</li>"; 
				break;
				case 'administrator':
					echo "<li>
							<a href=''>admin-link</a>
						  </li>";
				break;
				case 'root':
					echo "<li>
							<a href='index.php?content=developer_homepage'>dev-home</a>
						  </li>";
				case 'developer':
					echo "<li>
							<a href='index.php?content=developerzone/selectors'>selectors</a>
						  </li>";
					echo "<li>
							<a href='index.php?content=developerzone/filters'>filters</a>
						  </li>";
					echo "<li>
							<a href='index.php?content=developerzone/image-attributes'>image-attributes</a>
						  </li>";
				    echo "<li>
							<a href='index.php?content=developerzone/textinsertion'>textinsertion</a>
						  </li>";
					echo "<li>
							<a href='index.php?content=developerzone/addclass'>add class</a>
						  </li>";
					echo "<li>
							<a href='index.php?content=developerzone/show-hide'>show-hide</a>
						  </li>";
					echo "<li>
							<a href='index.php?content=developerzone/fading'>fading</a>
						  </li>";
					echo "<li>
							<a href='index.php?content=developerzone/sliding'>sliding</a>
						  </li>";
					echo "<li>
							<a href='index.php?content=developerzone/animation'>animation</a>
						  </li>";					
					echo "<li>
							<a href='index.php?content=developerzone/datepicker'>datepicker</a>
						  </li>";
					echo "<li>
							<a href='index.php?content=developerzone/accordion'>accordion</a>
						  </li>";
					echo "<li>
							<a href='index.php?content=developerzone/simple_overlay'>simple overlay</a>
						  </li>";						
				break;
				case 'photographer':
					echo "<li>
							<a href='index.php?content=upload'>upload</a>
						  </li>";
					echo "<li>
						    <a href='index.php?content=bekijk_opdracht_photographer'>
						  				bekijk opdrachten
						  	</a>
						  </li>"; 
				break;				
			}
		}
		else
		{
			echo "<li>
					<a href='index.php?content=login_form'>inloggen</a>
				  </li>
				  <li>
					<a href='index.php?content=register_form'>registratie</a>
				  </li>";
		}
	?>	
</ul>