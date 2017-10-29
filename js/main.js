jQuery(document).ready(function($) {

    var ssRegex = '^([1-37-8])([0-9]{2})(0[0-9]|[2-35-9][0-9]|[14][0-2])((0[1-9]|[1-8][0-9]|9[0-69]|2[abAB])(00[1-9]|0[1-9][0-9]|[1-8][0-9]{2}|9[0-8][0-9]|990)|(9[78][0-9])(0[1-9]|[1-8][0-9]|90))(00[1-9]|0[1-9][0-9]|[1-9][0-9]{2})(0[1-9]|[1-8][0-9]|9[0-7])$';
    var telRegex = '/([0]{1})([1-9]{1})*[-. (]*(([0-9]{2})[. ]?){4}|(\+)([3]{2})*[-. (]*([1-9]{1})*[-. (]*(([0-9]{2})[. ]?){4}|([0]{2})*[-. (]*([3]{2})*[-. (]*([1-9]{1})*[-. (]*(([0-9]{2})[. ]?){4}/';
    var submitLoader = '<div id="loader"><span class="color2"></span><span class="color2"></span><span class="color2"></span></div>';
    $('.socialsecurity input').attr('pattern', ssRegex);
    $('.telephone input').attr('pattern', telRegex);
    $('.form-group--rules br').remove();
    $('#conditions').unwrap();
    $('.direct-stripe button').css('display', 'none');
    $('.wpcf7-submit').after(submitLoader);

    // INIT
    function step1()  {
        $(window).scrollTop(0);
        $('.view--welcome').css('display', 'initial');
        $('.view--form, .view--confirmation').css('display', 'none');
    };

    function step2()  {
        $(window).scrollTop(0);
        $('.view--form').css('display', 'initial');
        $('.view--welcome, .view--confirmation').css('display', 'none');
    };

    function step3()  {
        $(window).scrollTop(0);
        $('.view--confirmation').css('display', 'initial');
        $('.view--welcome, .view--form').css('display', 'none');
    };

    step1();

    // Tel input masker
    $('input[type=tel]').keydown(function() {
        VMasker($(this)).maskPattern('99 99 99 99 99');
    });

    $('input[type=file]').on('change', function() {
        var elem = $(this);
        if ($(this).val().length > 0) {
            var path = $(this).val();
            var extension = path.split('.').pop();
            var array = ['jpg', 'jpeg', 'pdf', 'png', 'JPG', 'JPEG'];
            elem.css('border-bottom', '2px solid #c31a1a');
            $.each(array, function(i, val) {
                if (extension == array[i]) {
                    elem.css('border-bottom', '2px solid green');
                }
            });
        }
    });

    // EMAIL CHECK
    $('.emailcheck--true').submit(function(e) {
        $('.emailcheck--true').validate();
        if (($('.emailcheck--true input[type=email]').val().length != 0) && ($('.emailcheck--true input[type=email]').valid() == true)) {
            $('.basicInformation input[type=email]').val($('.emailcheck--true').find('input[type=email]').val());
            $('label[for="conditions"] a').attr('href', $('.hidden-rules').attr('data-href'));
            $('label[for="conditions"] span').text($('h1').text());
            step2();
            $('.emailcheck--true').validate().destroy();
        }
        e.preventDefault();
    });
    $('.emailcheck--false').submit(function(e) {
        $('label[for="conditions"] a').attr('href', $('.hidden-rules').attr('data-href'));
        $('label[for="conditions"] span').text($('h1').text());
        step2();
        e.preventDefault();
    });

    document.addEventListener('wpcf7submit', function(event) {
        console.log('submit');
        event.preventDefault();
    }, false);

    document.addEventListener('wpcf7mailsent', function(event) {
        console.log('sent');
        event.preventDefault();
        $('.direct-stripe button').trigger('click');
        $('#loader').addClass('is-loading');
    }, false);

    // $("body").on('DOMSubtreeModified', ".directStripe_answer", function() {
    //     $('#loader').removeClass('is-loading');
    //     step3();
    // });

    var target = document.querySelector('.directStripe_answer');
    var observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            $('#loader').removeClass('is-loading');
            step3();
            observer.disconnect();
        });
    });
    var config = { attributes: true, childList: true, characterData: true };
    observer.observe(target, config);
});