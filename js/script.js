$("#findMyPostcode").click(function (event) {

    $(".alert").hide();
    event.preventDefault();
    
    var result = 0;
    $.ajax({
        type: "GET",
        url: "https://maps.googleapis.com/maps/api/geocode/xml?address="+encodeURIComponent($('#address').val())+"&sensor=false&key=YourKeyGoesHere",
        dataType: "xml",
        success: processXML,
        error: error
    });

    function error(){
        $("#fail2").fadeIn();
    }
    function processXML(xml)
    {
        $(xml).find("address_component").each(function(){
            if($(this).find("type").text() == "postal_code")
            {
                $("#success").html("The postcode you need is "+ $(this).find('long_name').text()).fadeIn();
                result = 1;
            }
        });
        if(result == 0)
        {
            $("#fail").fadeIn();
        }
    }
    

});
