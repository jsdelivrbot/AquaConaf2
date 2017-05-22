<!DOCTYPE html>
<html>
<head>

<?php

$c=Request::segment(1); //metodo para recuperar el nombre del controlador
$m=Request::segment(2); //metodo para recuperar el metodo del controlador
if($c=="pruebas" and $m=="mapa")
{   

       //recupero la direccion 
	$direccion=$usuarios[0]["direccion"]; 
		
	//realizamos el proceso llamado codificación geográfica
	$xml="http://maps.googleapis.com/maps/api/geocode/xml?address={$direccion}&sensor=true";
 
	//ocupo DOMDocument que es para manipular un documento xml  
     
	$doc=new DOMDocument();
	$doc->load($xml);
	$mapas=$doc->getElementsByTagName("result");

	foreach($mapas as $mapa)
	{
		$latitud=$mapa->getElementsByTagName("lat");
		$latitud=$latitud->item(0)->nodeValue;
		$longitud=$mapa->getElementsByTagName("lng");
		$longitud=$longitud->item(0)->nodeValue;
	}
  
?>

<script type="text/javascript"
    src="https://maps.google.com/maps/api/js?sensor=true">
</script>

<script type="text/javascript">

   function cargar_mapa()
    {   
    	//configura las opciones que tendra el mapa
        var myOptions = {
          scaleControl: true,
          center: new google.maps.LatLng(<?php echo $latitud?>, <?php echo $longitud?>),
          zoom: 12,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        //crea un nuevo mapa dentro del div
        var map = new google.maps.Map(document.getElementById('map_canvas'),
            myOptions);



       //coloco marcas de ubicacion en el mapa
        var marker = new google.maps.Marker({
           map: map,
           title: "<?php echo $direccion?>",
           position: map.getCenter()
        });
        



        var infowindow = new google.maps.InfoWindow();
        infowindow.setContent('<b>Mapahghgh</b>');

        google.maps.event.addListener(marker, 'click', function() 
        {
            infowindow.open(map, marker);
        });
        
      }

   //carga el mapa despues que la pagina se haya cargado completamente
      google.maps.event.addDomListener(window, 'load', cargar_mapa);

</script>
	<?php
}
?>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	


<?php echo $usuarios[0]["direccion"] ?>

//el mapa se carga dentro de este div tiene el id= map_canvas , donde se invocará del metodo cargar_mapa  
<div id="map_canvas" style="width:400px;height:400px;"></div>

</body>
</html>