$(function () {

    //Advanced form with validation
    var form = $('#wizard_with_validation').show();
    form.steps({
        headerTag: 'h3',
        bodyTag: 'fieldset',
        transitionEffect: 'slideLeft',
        onInit: function (event, currentIndex) {
            $.AdminBSB.input.activate();

            //Set tab width
            var $tab = $(event.currentTarget).find('ul[role="tablist"] li');
            var tabCount = $tab.length;
            $tab.css('width', (100 / tabCount) + '%');

            //set button waves effect
            setButtonWavesEffect(event);
            console.log($('#optgroup')[0])
            if($('#optgroup')[0]){
                $('#optgroup').multiSelect();

            }

            if($("input[name='vrsta_prevoza']" )[0]){
                var a = $( "input[name='vrsta_prevoza']" );
                a.tagsinput({
                });
                a.css("display","none");
            }
            if($("input[name='obroci']" )[0]){
                var a = $( "input[name='obroci']" );
                a.tagsinput({
                });
            }
            if($("input[name='grupa']" )[0]){
                var a = $( "input[name='grupa']" );
                a.tagsinput({
                });
            }
            if($("input[name='vrsta_soba']" )[0]){
                var a = $( "input[name='vrsta_soba']" );
                a.tagsinput({
                });
                a.css("display","none");
            }
            if($("input[name='tip_soba']" )[0]){
                var a = $( "input[name='tip_soba']" );
                a.tagsinput({
                });
                a.css("display","none");
            }
            if($("input[name='struktura_sobe']" )[0]){
                var a = $( "input[name='struktura_sobe']" );
                a.tagsinput({
                });
                a.css("display","none");
            }
            if($("input[name='sadrzaj_sobe']" )[0]){
                var a = $( "input[name='sadrzaj_sobe']" );
                a.tagsinput({
                });
                a.css("display","none");
            }
            console.log($('.datepicker').length)
            if ($('.datepicker').length){
                $('.datepicker').bootstrapMaterialDatePicker({
                    format: 'DD/MM/YYYY',
                    clearButton: true,
                    weekStart: 1,
                    time: false
                });
            }

        },
        onStepChanging: function (event, currentIndex, newIndex) {
            if (currentIndex > newIndex) { return true; }

            if (currentIndex < newIndex) {
                form.find('.body:eq(' + newIndex + ') label.error').remove();
                form.find('.body:eq(' + newIndex + ') .error').removeClass('error');
            }

            form.validate().settings.ignore = ':disabled,:hidden';
            return form.valid();
        },
        onStepChanged: function (event, currentIndex, priorIndex) {
            setButtonWavesEffect(event);
        },
        onFinishing: function (event, currentIndex) {
            form.validate().settings.ignore = ':disabled';
            return form.valid();
        },
        onFinished: function (event, currentIndex) {
            swal("Good job!", "Submitted!", "success");
            form.submit();
        }
    });

    form.validate({
        highlight: function (input) {
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.form-group').append(error);
        },
        rules: {
            'confirm': {
                equalTo: '#password'
            }
        }
    });
});

function setButtonWavesEffect(event) {
    $(event.currentTarget).find('[role="menu"] li a').removeClass('waves-effect');
    $(event.currentTarget).find('[role="menu"] li:not(.disabled) a').addClass('waves-effect');
}