// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

$(window).on('scroll', () => {
    if ($(this).scrollTop() >= 600) {
        $('#return-to-top').fadeIn(300);
    } else {
        $('#return-to-top').fadeOut(300);
    }
});

$('#return-to-top').on('click', () => {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});

$(() => {
    $('#cta_slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
    });

    $('.loans-slider-wrapper ul li.slide').width($('.loans-slider-wrapper ul li:nth-child(1)').width());

    let loanSlider = $('#loans_slider').slick({
        slidesToShow: 1,
        arrows: false,
        slidesToScroll: 1,
        dots: true
    });

    $('.loan-slider-btn').on('click', function () {
        $(this).parents('li').siblings().removeClass("active");
        $(this).parents('li').addClass('active');

        $('.loans-slider-wrapper ul li:nth-child(1).active ~ .slide').width($('.loans-slider-wrapper ul li:nth-child(1)').width());
        $('.loans-slider-wrapper ul li:nth-child(1).active ~ .slide').css('left', 0);
        $('.loans-slider-wrapper ul li:nth-child(2).active ~ .slide').width($('.loans-slider-wrapper ul li:nth-child(2)').width());
        $('.loans-slider-wrapper ul li:nth-child(2).active ~ .slide').css('left', $('.loans-slider-wrapper ul li:nth-child(1)').width() + 9);

        loanSlider.slick('slickGoTo', $(this).attr('slideTarget'));
    });
});

let formSlick = $("#form_slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    infinite: false,
    draggable: false,
    // dots: true,
    // appendDots: $('.slick-slider-dots'),
    responsive: [
        {
            breakpoint: 540,
            settings: {
                slidesToShow: 1,
                draggable: false,
                touchMove: false,
                dots: false,
            }
        }
    ]
});

let currentTab = 0;
showTab(currentTab);

function showTab(n) {
    formSlick.slick('slickGoTo', n);

    let x = document.getElementsByClassName("tab");

    if (n == 0) {
        $("#prevBtn").css('display', 'none');
    } else if (n == (x.length)) {
        $('.buttons').removeClass('d-flex').addClass('d-none');
    } else if (n == (x.length - 1)) {
        $("#nextBtn").html('Submit');
    } else {
        $("#nextBtn").html('Next');
        $("#nextBtn").removeClass('btn-white').removeClass('text-primary').addClass('border-white').addClass('text-white');
        $("#prevBtn").css('display', 'inline');
        $('.form .title').removeClass('d-none').addClass('d-block');
        $('.buttons').removeClass('d-none').addClass('d-flex');
    }
}

function nextPrev(n) {
    var x = document.getElementsByClassName("tab");

    if (n == 1 && !validateForm()) return false;
    currentTab = currentTab + n;

    if (currentTab >= x.length) {
        document.getElementById("slider-form").submit();

        return false;
    }

    showTab(currentTab);
}

function validateForm() {
    var x, y, i, valid = true;

    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByClassName('form-control required');

    for (i = 0; i < y.length; i++) {
        if (y[i].value == "") {
            $(y[i]).removeClass('invalid');
            y[i].className += " invalid";
            $(y[i]).next('.invalid-feedback').remove();
            $(y[i]).after('<div class="invalid-feedback d-block">Please fill in this field.</div>');
            valid = false;
        }
        else {
            $(y[i]).removeClass('invalid');
            $(y[i]).next('.invalid-feedback').remove();
        }
    }

    return valid;
}

let loanCap = 50000;

$('#borrowSlider').on('input', function () {
    let value = $("#borrowSlider").val();
    let formattedVal = value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    $('#borrowAmount').html(formattedVal);
    $('.sliderThumb').css('left', (value * (95 / loanCap)) + "%");
    $('.progressBar').css('width', (value * (98 / loanCap)) + "%");
});