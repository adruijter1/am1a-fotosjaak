<style>
#imagerotator div
{
	position:absolute;
	z-index:0;
}

#imagerotator .huidigeFoto
{
	z-index:2;
}

#imagerotator .vorigeFoto
{
	z-index:1;
}

#imagerotator img
{
	border:3px solid black;
	height:165px;
	border-radius:25px
}

</style>

<script>
  $(document).ready(function(){ 	
  
  	// Maak een javascript timer
    setInterval("veranderFoto()", 1000);	
  });
  
  function veranderFoto()
  {
  	var huidigeFoto = $("#imagerotator div.huidigeFoto");
  	var volgendeFoto = huidigeFoto.next();
  	
  	if (volgendeFoto.length == 0)
  	{
  		volgendeFoto = $("#imagerotator div:first");
  	}
  	huidigeFoto.removeClass("huidigeFoto").addClass("vorigeFoto");
  	volgendeFoto.addClass("huidigeFoto");
  	huidigeFoto.removeClass("vorigeFoto");
  	
  }	
</script>

<div id='imagerotator'>
	<div class='huidigeFoto'>
	  <img src='./images/imagerotator/koala-300x200.jpg'
	  	   alt='Koalabeer danger!' />
	</div>
	<div>
	  <img src='./images/imagerotator/leeuw+tijger-300x200.jpg'
	  	   alt='Koalabeer danger!' />
	</div>
	<div>
	  <img src='./images/imagerotator/witte-haai-300x200.png'
	  	   alt='Koalabeer danger!' />
	</div>
	<div>
	  <img src='./images/imagerotator/siberian_husky.jpg'
	  	   alt='Koalabeer danger!' />
	</div>
</div>