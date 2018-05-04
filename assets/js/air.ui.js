$(document).ready(function () {

    wrapper = $('body');

    wrapper.click(function () {
        $('.ad-pie').removeClass('ad-show');
    });

    wrapper.on('click', '.ad-pie .ad-trigger', function (e) {
        e.stopPropagation();
        $(this).parent().toggleClass('ad-show');
        // console.log('yh');
    });



    wrapper.on('click', '.ad-rating i', function (e) {
        let rate = $(this).attr('number');
        let parent = $(this).parents('.ad-rating');

        console.log('Hello ', rate, parent.attr('label'));

        parent.find('.ad-content').css('width', (rate*20)+'px');
        $('input#' + parent.attr('label') + '').val(rate);
    });

});