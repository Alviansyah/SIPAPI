$(document).ready(function(){
    $('.collapsible').collapsible(); // Script to allow the use of collapsible feature
    $(".button-collapse").sideNav(); // Script to allow the use of side navigation feature
    $('select').material_select(); // Script to allow the use of option select feature
    $('.target').pushpin({
        top: 0,
        bottom: 1000,
        offset: 0
    });

});
