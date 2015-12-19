$(function () {

    $("#accordion").accordion({
        collapsible: true,
        icons: null,
        heightStyle: "content", 
        active: false 
    });

    $(".changeLang").click(function(event){
        var $baseUrl = $("#baseUrl").attr("href");
        $.get( $baseUrl + "index/setlang/" + $(this).attr("data"), 
        function( data ) {
//            $( ".result" ).html( data );
//            alert( "Load was performed." );

            window.location.reload();
        });
        event.preventDefault();
    });
    
    $('.disabled a').on('click', function(e) {
        e.preventDefault();
    });
    
    $('#accordion').find(".expand").click()

});