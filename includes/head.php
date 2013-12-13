<!DOCTYPE html>

<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Working Women Community Centre</title> 

  <link rel="shortcut icon" href="images/favicon.png"> 
  <link rel="apple-itouch-icon" href="images/favicon.png">

  <link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
  <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/main.css" type="text/css" media="screen" />
   
  <!-- Scripts -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
  <script src="js/hoverIntent.js" type="text/javascript"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVqWL3QJZSt7wRSDG_ik11zKpbrKq9jE8&sensor=false"></script>
  

  <script>

    $(document).ready(function() {
      
      //For mobile menu
      $(".menu-button").click(function(){
        $("nav").slideToggle();
      });

      $("#about-links").click(function(){
        $( "#about-links" ).find( "ul" ).slideToggle();
      });

      $("#program-links").click(function(){
        $( "#program-links" ).find( "ul" ).slideToggle();
      });

      $("#news-links").click(function(){
        $( "#news-links" ).find( "ul" ).slideToggle();
      });

      $("#associate-links").click(function(){
        $( "#associate-links" ).find( "ul" ).slideToggle();
      });


      //Checks which tab is active
      $('ul.tabs').each(function(){
        // For each set of tabs, we want to keep track of
        // which tab is active and it's associated content
        var $active, $content, $links = $(this).find('a');

        // If the location.hash matches one of the links, use that as the active tab.
        // If no match is found, use the first link as the initial active tab.
        $active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
        $active.parent('li').addClass('active');
        $content = $($active.attr('href'));

        // Hide the remaining content
        $links.not($active).each(function () {
          $($(this).attr('href')).hide();
        });

        // Bind the click event handler
        $(this).on('click', 'a', function(e){
          // Make the old tab inactive.
          $active.parent('li').removeClass('active');
          $content.hide();

          // Update the variables with the new link and content
          $active = $(this);
          $content = $($(this).attr('href'));

          // Make the tab active.
          $active.parent('li').addClass('active');
          $content.show();

          // Prevent the anchor's default click action
          e.preventDefault();
        });

        google.maps.event.addDomListener(document.getElementById("map-btn-a"), 'click', Initialize);

    });


    var loc = '{ "locations" : [' +
      '{"Id":"0","Name":"Bloor West/Main Office","Street":"533A Gladstone Avenue","PostalCode":"M6H 3J1","Extra":"","Latitude":"43.660037","Longitude":"-79.433747","Phone":"416-532-2824","Fax":"416-532-1065", "Email":"admin@workingwomencc.org"},' +
      '{"Id":"1","Name":"The Victoria Park Hub","Street":"1527 Victoria Park Ave East","PostalCode":"M1L 2T3","Extra":"2nd Floor","Latitude":"43.725036","Longitude":"-79.302743","Phone":"416-750-9600","Fax":"416-750-9606", "Email":"admin@victoriaparkhub.org"},'+
      '{"Id":"2","Name":"North York East Centre","Street":"5 Fairview Mall Drive","PostalCode":"M2J 2Z1","Extra":"Suite 478","Latitude":"43.779217","Longitude":"-79.348231","Phone":"416-494-7978","Fax":"416-494-5266", "Email":"admin@workingwomencc.org"},'+
      '{"Id":"3","Name":"North York West Centre","Street":"1 Yorkgate Blvd","PostalCode":"M3N 3A1","Extra":"Suite 206","Latitude":"43.756804","Longitude":"-79.520668","Phone":"416-491-5050 ext. 44795","Fax":"", "Email":"admin@workingwomencc.org"},'+
      ']}';

    var data = eval ("(" + loc + ")");

    var iconColour = "b51e52";

    function Initialize(){


      //Display name and address
      document.getElementById("location").innerHTML = "Select a location from the map for details.";
      document.getElementById("street").innerHTML = "";
      document.getElementById("extra").innerHTML = "";
      document.getElementById("city").innerHTML = "";
      document.getElementById("postalcode").innerHTML = "";
      document.getElementById("phone").innerHTML = "";
      document.getElementById("fax").innerHTML = "";
      document.getElementById("email").innerHTML = "";
      document.getElementById("directions").innerHTML = "";


      var latlng = new google.maps.LatLng(43.660037, -79.433747);
      var myOptions = {
          zoom: 10,
          center: latlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          mapTypeControl: true,
          navigationControl: true,
          scaleControl: true,
          streetViewControl: false
      };
      var gmap = new google.maps.Map(document.getElementById("map-view"), myOptions);

      
      var image = "http://chart.apis.google.com/chart?cht=mm&chs=32x32&chco=" + iconColour + "," + iconColour + ",000000&ext=.png";


      

      for(var i=0;i<4;i++){
        var coords = new google.maps.LatLng(data.locations[i].Latitude, data.locations[i].Longitude);
        var marker = new google.maps.Marker({
            position: coords,
            map: gmap,
            id: data.locations[i].Id,
            icon: image
        });

        //On mouse over, calls to change to highlight icon
        google.maps.event.addListener(marker, "mouseover", function () {
            changeMarker(this);
        });

        //On mouse out, calls to rest to original icon
        google.maps.event.addListener(marker, "mouseout", function () {
            resetMarker(this);
        });

        //On click, calls to get specific asset info by ID
        google.maps.event.addListener(marker, "click", function () {
            showInfo(marker.id);
        });


      }

      
    }

    //Changes to highlight icon
    function changeMarker(marker) {
        //marker.tooltip.show();
        
        marker.setIcon("http://chart.apis.google.com/chart?cht=mm&chs=32x32&chco=FFFFFF," + iconColour + "," + iconColour + "&ext=.png");
        
        //lastSelected = marker;
    }

    //Returns to original icon, based on asset type
    function resetMarker(marker) {
        //marker.tooltip.hide();
        
        marker.setIcon("http://chart.apis.google.com/chart?cht=mm&chs=32x32&chco=" + iconColour + "," + iconColour + ",000000&ext=.png");
    }

    //Populate panel with info on specific asset
    function showInfo(pos) {
        
        //Display name and address
        document.getElementById("location").innerHTML = data.locations[pos].Name;
        document.getElementById("street").innerHTML = data.locations[pos].Street;
        if(data.locations[pos].Extra != ""){
          document.getElementById("extra").innerHTML = data.locations[pos].Extra;
        }
        document.getElementById("city").innerHTML = "Toronto, Ontario";
        document.getElementById("postalcode").innerHTML = data.locations[pos].PostalCode;
        document.getElementById("phone").innerHTML = "T: "+data.locations[pos].Phone;
        if(data.locations[pos].Fax != ""){
          document.getElementById("fax").innerHTML = "F: "+data.locations[pos].Fax;
        }
        document.getElementById("email").innerHTML = "<a href='mailto:"+data.locations[pos].Email+"'>"+data.locations[pos].Email+"</a>";
        document.getElementById("directions").innerHTML = "<a href='https://maps.google.com/maps?daddr="+data.locations[pos].Street+" Toronto,ON,CA ("+data.locations[pos].Name+")' target='_blank'>GET DIRECTIONS</a>";

        var closeBtn = document.getElementById("btn-close");
        if(closeBtn.style.zIndex == 1){
          document.getElementById("map-results").style.zIndex=99999999;
          closeBtn.style.opacity = 1;
        }
            
    }

    function closeDir(){
      document.getElementById("map-results").style.zIndex=0;
      document.getElementById("btn-close").style.opacity=0;
    }


  </script>

  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <![endif]-->

</head>

<body>