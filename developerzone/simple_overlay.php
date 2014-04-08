<style>
.simple_overlay
{
	display:none;	
	z-index:10000;
	background-color:#333;
	width:775px;
	min-height:200px;
	border:1px solid #666;
	
	-moz-box-shadow:0 0 90px 5px #000;
	-webkit-box-shadow:0 0 90px #000;		
}
.simple_overlay .close
{
	background-image:url('../images/drop.png.);
	position:absolute;
	right:-15px;
	top:-15px;
	cursor:pointer;
	height:35px;
	width:35px;
}	

.details
{
	position:absolute;
	top:15px;
	right:15px;
	font-size:11px;
	color:#fff;
	width:150px;
}

.details h3
{
	color:#aba;
	font-size:15px;	
}	
</style>

<script>
	$(window).ready(function(){
		//Geeft alle vergrote foto's een width van 600px
		$('div.simple_overlay img').css('width', '600px');
		
		$('img[rel]').overlay();	
	})	
</script>



<img src='./fotos/1/30/thumbnail/tn_Desert.jpg' rel='#test1'/>

<img src='./fotos/1/30/thumbnail/tn_Komodo_dragon_stalking_deer.png' rel='#test2' />

<div class='simple_overlay' id='test1'>
	<img src='./fotos/1/30/Desert.jpg' />
	
	<div class='details'>
		<h3>De Woestijn</h3>
		<h4>Colorado, California</h4>
		<p>In de woestijn in Colorado is erg weinig water. Daarom zie je weinig watervogels. Want zij hebben water nodig om in te zwemmen en dat is er niet in de woestijn. Raadsel: wat voor dier wordt het schip van de woestijn genoemd..
		</p>		
	</div>	
</div>

<div class='simple_overlay' id='test2'>
	<img src='./fotos/1/30/Komodo_dragon_stalking_deer.png' />
	
	<div class='details'>
		<h3>De Komodo Draak</h3>
		<h4>Zuid Indonesie, Eiland Komodo</h4>
		<p>Op het Eiland wonen veel Komodo varanen. Ze hebben het daar heel gezellig. Er is veel zon en veel te eten.
		</p>		
	</div>	
</div>
