<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- <link rel="stylesheet" type="text/css" href="js/bootstrap.js"> -->
        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->
        
    </head>
    <body>
        <div class="containr"></div>
        <h2>Register form welcome</h2>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div>
  <h2>Get request</h2>
  <button type="button" class="btn btn-warning" id ="getRequest">grt req</button>
</div>
<div id="success"></div>
<!-- <script type="text/javascript" src="js/app.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- <script src="{{ asset('js/app.js') }}"></script> -->
<script type="text/javascript">
$(document).ready(function(){
    $('#getRequest').click(function(event){
        $.getJSON('https://api.spacexdata.com/v3/rockets', function(data) { 
            console.log(data);
            $.each(data,function(index){
             content=(data[index].flickr_images[1]);
             $('#success').append('<img src="' + content + '" />'); 
            })          
                }); 
    });
});
</script>

   </body>
</html>
