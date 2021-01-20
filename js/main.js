$(document).ready(function(){
    var id='';
    $('#looks').change(function(e){
        $( "#witch" ).html('');
        id = e.target.value;
        var request = $.ajax({
            data:{
                witch_id : id,
            },
            url:'search_list.php',
            method:"POST",
            dataType: "html"
        });
        request.done(function( msg ) {
            var data = JSON.parse(msg);
            $('#witch').find('option').remove().end();
            data.forEach(element => {
                $("#witch" ).append( "<option value="+element.lookfor_id+" id='' class='wit'>"+element.witchone+"</option>" );
            });            
          });          
          request.fail(function( _jqXHR, textStatus ) {
            alert( "Request failed: " + textStatus );
          });   
    })
    
    $('#search_Func').bind('click',function(){
        var chk_val = $("#witch").val();
        var witch_val = $( "#witch option:selected" ).text();
        if (chk_val == '') alert("Please select option.");
        else{
            var request = $.ajax({
                data:{
                    lookfor_id : id,
                    witchone : witch_val,
                },
                url:'search_map.php',
                method:"POST",
                dataType: "html"
            });
            request.done(function( msg ) {
                var data = JSON.parse(msg);
                console.log(data[0].location_lat);
                var lat = parseFloat(data[0].location_lat);
                var lng = parseFloat(data[0].location_lng);
                initMap_serach(lat, lng);
                $('#des').html('<h5>'+data[0].witchone+'</h5>'+data[0].des);
                $('#location').val(data[0].location);
                $('#telehphone').val(data[0].tel);
                $('#website').val(data[0].website);
                $('#email').val(data[0].email);
              });             
              request.fail(function( _jqXHR, textStatus ) {
                alert( "Request failed: " + textStatus );
              });   

        }
    });
});

function initMap_serach(x,y) {
    const center = { lat: x, lng: y };
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 15,
        center
    });
    const marker = new google.maps.Marker({
        position: center,
        map: map,
    });
} 

function initMap() {
    const center = { lat: 25.3548, lng: 51.1839 };
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 9,
        center
    });
    const marker = new google.maps.Marker({
        position: center,
        map: map,
    });
}  
