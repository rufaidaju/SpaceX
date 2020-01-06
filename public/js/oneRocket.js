$(document).ready(function(){
     $('#search').click(function(event){
        var inputVal=$('#input').val();
        if(inputVal=='') {
            $('#input').attr("placeholder","Please fill out this field!'");
            return false;
        }else {
            $("#main-card").hide();
            $("#making-history").hide();
            $("#url").hide();
            $("#rocket-info").show();
            $("#back").show();
            var myurl='https://api.spacexdata.com/v3/rockets/'+$('#input').val() ;
            // Getting data from url
            $.ajax({
                url: myurl,
                type:'get',
                success: function(data) {
                    if($.isEmptyObject(data.error)){
                        // getting Rocket name and description 
                        $("h1").text(data.rocket_name);
                        $(".description").text(data.description);
                        $(".first-flight").text('FIRST FLIGHT WAS IN : ' + data.first_flight);
                        // getting images
                        content=data.flickr_images[4];
                        $.each(data.flickr_images,function(index){
                            content=(data.flickr_images[index]);
                            $('#rocket-images').append('<img class="rocket-img img-responsive" src="' + content + '" />'); 
                        });     
                        // getting more info about the rocket
                        $('.more-info').append('<ul id="more-info"><span>MORE INFORMATION</span>'); 
                        $('#more-info').append('<li> SUCCESS RATE PCT : <span >' + data.success_rate_pct + '</span></li>'); 
                        $('#more-info').append('<li> COST PER LAUNCH : <span >' + data.cost_per_launch + '</span></li>'); 
                        $('#more-info').append('<li> COUNTRY : <span>' + data.country + '</span></li>'); 
                        $('#more-info').append('<li>COMPANY : <span>' + data.company + '</span></li></ul>');    
                    }    
                },error: function(xhr, status, error) {
                    var err = JSON.parse(xhr.responseText);
                    $(".description").text("404 NOT FOUND"); 
                } 
            }) 
         }
     });
});