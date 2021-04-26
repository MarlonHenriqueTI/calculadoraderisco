$(function(){
	$("#wizard").steps({
        headerTag: "h4",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        onStepChanging: function (event, currentIndex, newIndex) { 
            if ( newIndex === 1 ) {
                $('.wizard > .steps ul').addClass('step-1');
            } else {
                $('.wizard > .steps ul').removeClass('step-1');
            }
            if ( newIndex === 2 ) {
                $('.wizard > .steps ul').addClass('step-2');
            } else {
                $('.wizard > .steps ul').removeClass('step-2');
            }
            if ( newIndex === 3 ) {
                $('.wizard > .steps ul').addClass('step-3');
            } else {
                $('.wizard > .steps ul').removeClass('step-3');
            }
            if ( newIndex === 4 ) {
                $('.wizard > .steps ul').addClass('step-4');
            } else {
                $('.wizard > .steps ul').removeClass('step-4');
            }
            if ( newIndex === 5 ) {
                $('.wizard > .steps ul').addClass('step-5');
            } else {
                $('.wizard > .steps ul').removeClass('step-5');
            }
            if ( newIndex === 6 ) {
                $('.wizard > .steps ul').addClass('step-6');
            } else {
                $('.wizard > .steps ul').removeClass('step-6');
            }
            if ( newIndex === 7 ) {
                $('.wizard > .steps ul').addClass('step-7');
            } else {
                $('.wizard > .steps ul').removeClass('step-7');
            }
            if ( newIndex === 8 ) {
                $('.wizard > .steps ul').addClass('step-8');
            } else {
                $('.wizard > .steps ul').removeClass('step-8');
            }
            if ( newIndex === 9 ) {
                $('.wizard > .steps ul').addClass('step-9');
            } else {
                $('.wizard > .steps ul').removeClass('step-9');
            }
            if ( newIndex === 10 ) {
                $('.wizard > .steps ul').addClass('step-10');
            } else {
                $('.wizard > .steps ul').removeClass('step-10');
            }
            if ( newIndex === 11 ) {
                $('.wizard > .steps ul').addClass('step-11');
            } else {
                $('.wizard > .steps ul').removeClass('step-11');
            }
            if ( newIndex === 12 ) {
                $('.wizard > .steps ul').addClass('step-12');
            } else {
                $('.wizard > .steps ul').removeClass('step-12');
            }
            if ( newIndex === 13 ) {
                $('.wizard > .steps ul').addClass('step-13');
            } else {
                $('.wizard > .steps ul').removeClass('step-13');
            }
            if ( newIndex === 14 ) {
                $('.wizard > .steps ul').addClass('step-14');
            } else {
                $('.wizard > .steps ul').removeClass('step-14');
            }
            if ( newIndex === 15 ) {
                $('.wizard > .steps ul').addClass('step-15');
            } else {
                $('.wizard > .steps ul').removeClass('step-15');
            }
            if ( newIndex === 16 ) {
                $('.wizard > .steps ul').addClass('step-16');
            } else {
                $('.wizard > .steps ul').removeClass('step-16');
            }
            if ( newIndex === 17 ) {
                $('.wizard > .steps ul').addClass('step-17');
            } else {
                $('.wizard > .steps ul').removeClass('step-17');
            }
            if ( newIndex === 18 ) {
                $('.wizard > .steps ul').addClass('step-18');
            } else {
                $('.wizard > .steps ul').removeClass('step-18');
            }
            if ( newIndex === 19 ) {
                $('.wizard > .steps ul').addClass('step-19');
            } else {
                $('.wizard > .steps ul').removeClass('step-19');
            }
            if ( newIndex === 20 ) {
                $('.wizard > .steps ul').addClass('step-20');
            } else {
                $('.wizard > .steps ul').removeClass('step-20');
            }
            if ( newIndex === 21 ) {
                $('.wizard > .steps ul').addClass('step-21');
            } else {
                $('.wizard > .steps ul').removeClass('step-21');
            }
            if ( newIndex === 22 ) {
                $('.wizard > .steps ul').addClass('step-22');
            } else {
                $('.wizard > .steps ul').removeClass('step-22');
            }
            if ( newIndex === 23 ) {
                $('.wizard > .steps ul').addClass('step-23');
            } else {
                $('.wizard > .steps ul').removeClass('step-23');
            }



            

            return true; 
        },
        labels: {
            finish: "Me mostre meu diagnostico",
            next: "Próximo",
            previous: "Anterior"
        }
    });
    // Custom Button Jquery Steps
    $('.forward').click(function(){
    	$("#wizard").steps('next');
    })
    $('.backward').click(function(){
        $("#wizard").steps('previous');
    })

    $('#finish').click(function(){
        $("#formulario").submit();
    })
    // Date Picker
    var dp1 = $('#dp1').datepicker().data('datepicker');
    dp1.selectDate(new Date());
})


