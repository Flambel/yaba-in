<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<script src="https://maps.google.com/maps/api/js?key=[AJOUTEZ_VOTRE_CLE_API_ICI]" type="text/javascript"></script>
		<script async type="text/javascript">
			// On initialise la latitude et la longitude de Paris (centre de la carte)
			var lat = 48.852969;
			var lon = 2.349903;
			var map = null;
			// Fonction d'initialisation de la carte
			function initMap() {
				// Créer l'objet "map" et l'insèrer dans l'élément HTML qui a l'ID "map"
				map = new google.maps.Map(document.getElementById("map"), {
					// Nous plaçons le centre de la carte avec les coordonnées ci-dessus
					center: new google.maps.LatLng(lat, lon), 
					// Nous définissons le zoom par défaut
					zoom: 11, 
					// Nous définissons le type de carte (ici carte routière)
					mapTypeId: google.maps.MapTypeId.ROADMAP, 
					// Nous activons les options de contrôle de la carte (plan, satellite...)
					mapTypeControl: true,
					// Nous désactivons la roulette de souris
					scrollwheel: false, 
					mapTypeControlOptions: {
						// Cette option sert à définir comment les options se placent
						style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR 
					},
					// Activation des options de navigation dans la carte (zoom...)
					navigationControl: true, 
					navigationControlOptions: {
						// Comment ces options doivent-elles s'afficher
						style: google.maps.NavigationControlStyle.ZOOM_PAN 
					}
				});
			}
			window.onload = function(){
				// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
				initMap(); 
			};
		</script>
		<style type="text/css">
		</style>
		<title>Carte</title>
	</head>
	<body>

	<div class="info">
		<div class="container">
			<div class="row">
				
				<iframe 
				    width="1500" 
				    height="600" 
				    frameborder="0" 
				    scrolling="no" 
				    marginheight="0" 
				    marginwidth="0" 
				    src="http://maps.google.fr/?ie=UTF8&ll=5.1385853,10.5232003&spn=0.003098,0.006942&z=15&om=1&layer=c&output=embed&s=AARTsJqaq7rV0B9cs4JBrvPKbCnu0GGTnA">
				</iframe>


				</div>
			</div>
		</div>

	</body>
</html>