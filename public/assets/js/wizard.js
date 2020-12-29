$("#wizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
    //alert("You are on step "+stepNumber+" now");
    if(stepPosition === 'first'){
        $("#prev-btn").addClass('disabled');
    }else if(stepPosition === 'final'){
        $("#next-btn").addClass('disabled');
    }else{
        $("#prev-btn").removeClass('disabled');
        $("#next-btn").removeClass('disabled');
    }
 });

// Smart Wizard
$('#wizard').smartWizard({
    selected: 0,
    theme: 'arrows',
    enableURLhash: false,
    transition: {
        animation: 'slide-horizontal', // Effect on navigation, none/fade/slide-horizontal/slide-vertical/slide-swing
    },
    toolbarSettings: {
        toolbarPosition: 'bottom', // both bottom
        toolbarButtonPosition: 'right', // both bottom
    }
});

$("#prev-btn").on("click", function() {
    // Navigate previous
    $('#wizard').smartWizard("prev");
    return true;
});

$("#next-btn").on("click", function() {
    // Navigate next
    $('#wizard').smartWizard("next");
    return true;
});
