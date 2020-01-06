$(document).ready(function(){
        var url="https://api.spacexdata.com/v3/rockets/";
        $.getJSON(url, function(data) { 
                // Show all rockets img and info 
                $.each(data,function(index){
                        $('#all-rocket').append('<div class="all-card"> <img class="all-img img-responsive" src="' + data[index].flickr_images[0] + 
                        '" /><h5 class="card-title">'+data[index].rocket_name+'</h5><ul><li> FIRST FLIGHT WAS IN :'+ data[index].first_flight +
                        '</span></li><li> SUCCESS RATE PCT : <span>'+ data[index].success_rate_pct +
                        '</span></li><li> COST PER LAUNCH : <span>' + data[index].cost_per_launch + 
                        '</span></li><li> COUNTRY : <span>' + data[index].country +
                        '</span></li><li>COMPANY : <span>' + data[index].company + '</span></li></ul></div>')
                }); 
        });
});