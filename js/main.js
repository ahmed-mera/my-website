$(function(){

//add class box shadow
$(".card").addClass("box-shadow wow animated bounceInRight slow");

 //remove class mdb   
$(".navbar .nav-link").removeClass("waves-effect waves-light");
//assign to link color white
$('.navbar .nav-item > .nav-link').css('color','#fff');
//caching for this elements
var head = $('.head'),
    nav = $('.navbar'),
    navLink = $('.navbar .nav-link:not(".dropdown-toggle , .code")'),
    pharaoh = $('.head .sec .my-title'),
    topScroll = $('.top');

//assign to header height dynamic
head.css({
    'height' : $(window).innerHeight(),
    'width' :  $(window).width()
});

//for navbar
$(window).on('scroll', function(){

    let scrollHeight = (parseInt($(".my-title").height()) - $(".navbar").innerHeight());

    if($(this).scrollTop() >= scrollHeight ){
        nav.addClass('bg-dark navbar-dark').removeClass('navbar-light');
        nav.addClass('second-menu');

    }else{
        nav.removeClass('bg-dark navbar-dark').addClass('navbar-light');
        nav.removeClass('second-menu');

    }

    if ($(this).scrollTop() >= scrollHeight ) {
        topScroll.fadeIn(700);
    } else {
        topScroll.fadeOut(700);
    }
});

topScroll.click(function() {
    $('body , html').animate({
        scrollTop : 0
    },1000);
});

$('.navbar-toggler').click(function () {
    $('.navbar-toggler i').toggleClass('rotate');
    pharaoh.toggleClass('margin-to-top');
});

$(window).on('resize', function(){
    head.css({
        'height' : $(window).innerHeight(),
        'width' :  $(window).width()
    });
    if($(window).width() > 1000){
        if(pharaoh.hasClass('margin-to-top')){pharaoh.removeClass('margin-to-top')}
    }
});
//animation link & change the class active between link

navLink.click(function(e){
    e.preventDefault();
    if(!$(this).hasClass("cv")){
        $(this).parent().addClass('active').siblings().removeClass('active');
        let link = $($(this).attr('href'));
        $('html, body').animate({
            scrollTop: link.offset().top + 1 - 68.9 //height navbar
        },1000);
        if ($(window).width() <= 1000) {
            $('.navbar-toggler').click();
        }

    } else {
        const path = `../../index.php`

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
            confirmButton: 'btn btn-default p-0',
            cancelButton: 'btn btn-info p-0'
            },
            buttonsStyling: false
        })
        
        swalWithBootstrapButtons.fire({
            title: 'What do you want?',
            icon: 'question',
            showCancelButton: true,
            showCloseButton: true,

            confirmButtonText: 
            ` 
            <a class="nav-link download-cv text-white" href="./page3/cv/Ahmed-Mera.pdf" download="CV Ahmed Mera">
                Download CV
                <i class=" pl-1 fas fa-download "></i>            
            </a>
            `,

            cancelButtonText: 
            ` 
                <a class="nav-link demo-cv text-white" href="./page3/cv/Ahmed-Mera.pdf" target = "_blank">
                    Demo CV
                    <i class=" pl-1 fas fa-eye"></i>
                </a>
            `,

            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 5000,
                    timerProgressBar: true,
                    onOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                
                Toast.fire({
                    icon: 'success',
                    title: 'CV downloaded successfully'
                })

                mangeCv(path,"downloaded"); // send data for CV

                // $(".CV-D").text(parseInt($(".CV-D").text()) + 1)

            }else if ( result.dismiss === Swal.DismissReason.cancel) {

                mangeCv(path,"displayed"); // send data for CV

                // $(".CV-V").text(parseInt($(".CV-V").text()) + 1)
            }
        })
    }

});

let mangeCv = (path , action) =>{
    $.post(path,
    {
        cv : action
    },(data) =>{ /* as soon i will do anything */  });
}

//logo is link
$('.logo').click(function(e){
    e.preventDefault();
    $('html, body').animate({
        scrollTop: 0
    },1000);
});

//scrolling down
//caching for this elements
var buttonScrollDown =$('.scrolling-icon'),
    titleScroll = $('.scroll');
buttonScrollDown.on('click',function(){
    $('body , html').animate({
        scrollTop : (head.height() + 1 - nav.innerHeight() )
    },1000);
});

//animation icons
(function scroll(){

let timeAnimation = 10;//caching for time of animation
buttonScrollDown.animate({
    'bottom' : '+='+ timeAnimation + 'px'
    },300,function(){

        $(this).animate({
        'bottom' : '-='+ timeAnimation + 'px'
        },300);
    });

    titleScroll.animate({
    'bottom' : '+='+ timeAnimation + 'px'

    },300,function(){

        $(this).animate({
        'bottom' : '-='+ timeAnimation + 'px'
        },300,function(){scroll()});
    });
}());

//invio dati tramite ajax
$(document).ajaxStart(function(){ $('.sk-circle').css('display','block');});
$(document).ajaxComplete(function(){ $('.sk-circle').css('display','none');});
function check(input,length = 3){
    if(input.val().length < length){
        input.css('border','1.3px solid red').addClass('is-invalid').removeClass('is-valid').next().css('display','block');
        return false;
    }else{
        input.removeClass('is-invalid').addClass('is-valid').css('border','none').next().css('display','none');
    }
    return true;
}
function checkEmail(input,length = 9){
    var checkIt = input.val();
    if(checkIt.length < length){
        input.css('border','1.3px solid red').addClass('is-invalid').removeClass('is-valid').next().css('display','block');
        return false;
    }else{
        var c = checkIt.search('@'),
            pc = checkIt.search('.c'),
            pi = checkIt.search('.i');
            if (c !== -1 &&  (pc !== -1 || pi !== -1) ){
                input.removeClass('is-invalid').addClass('is-valid').css('border','none').next().css('display','none');
            }else{
                input.css('border','1.3px solid red').addClass('is-invalid').removeClass('is-valid').next().css('display','block');
                return false;
            }
    }
    return true;
}
$('.send').on('click',function(e){
    e.preventDefault();
    var fullName = $('#fullname').val(),
        email = $('#email').val(),
        tit = $('#titMess').val(),
        msg = $('#mess').val();
    if (fullName != '' && email != '' && tit != '' && msg != '' ) {
        if (check($('#fullname'),6) && checkEmail($('#email'),9) && check($('#titMess'),5) && check($('#mess'),10) ) {
    $.post('./page3/php/msg.php',
    {
        titMess : tit,
        email : email,
        mess : msg,
        fullName : fullName
    })
    .done(
        function (event){
            //azzero i valori
            $('#fullname').val('');
            $('#mess').val('');
            $('#titMess').val('');
            $('#email').val('');
            //tolgo i classi che non servono piu'
            $('#fullname').removeClass('is-valid');
            $('#mess').removeClass('is-valid');
            $('#titMess').removeClass('is-valid');
            $('#email').removeClass('is-valid');
    
    
            $('.contact .mes ').fadeIn(1000);
            $('.contact .form-row .mes').removeClass('alert-danger').addClass('alert alert-success ').html(`${event}.`);
            $('.contact .mes ').delay(9000).fadeOut(800);
        })
        .fail(
            function (event){
                $('.contact .mes ').fadeIn(1000);
                $('.contact .form-row .mes').removeClass("alert alert-success ").addClass('alert alert-danger').html(`${event}.`);
                $('.contact .mes ').delay(9000).fadeOut(800);
            });
  }  // $(this).click();
}else{
    $('.contact .mes ').fadeIn(1000);
    $('.contact .form-row .mes').addClass('alert alert-danger col-11').html("You must compiled <dfn><strong>all fields</strong></dfn>.");
    $('.contact .mes ').delay(9000).fadeOut(800);

}

});


//message cookie
var cookie = $('.cookie'),
    accept = $('.accept-cookie');
$(window).on ({
    load: function (){cookie.slideDown(1000);},
    scroll:function (){ 
        if ( $(window).scrollTop() > 500){cookie.slideUp(1000);}
    }
});
accept.click(function () {cookie.slideUp(1500);})
});


var heightCard = $(".work .card").innerHeight();


//accordion
$(".set > a").on("click", function(event) {
    event.preventDefault();
    $(".work .card").css("height",heightCard);
    $(this).parents(".card").css("height","auto");
    
if ($(this).hasClass("active")) {
    $(this).removeClass("active");
    $(this).siblings(".content").slideUp(200);
    $(".set > a i").removeClass("fa-minus").addClass("fa-plus");
} else {
    $(".set > a i").removeClass("fa-minus").addClass("fa-plus");
    $(this).find("i").removeClass("fa-plus").addClass("fa-minus");
    $(".set > a").removeClass("active");
    $(this).addClass("active");
    $(".content").slideUp(200);
    $(this).siblings(".content").slideDown(200);
}
});



//scrolling window and set class active

let section = document.querySelectorAll("section"),
    navLink = $('.navbar .nav-link:not(".dropdown-toggle , .code")'),
    noSection = 1;
$(window).on("scroll", () =>{
    if($(window).scrollTop()  < ( $(section[0]).offset().top - $(".navbar").innerHeight() ) )
        $(navLink[0]).parent().addClass("active").siblings().removeClass("active");

    else if ($(window).scrollTop()  >= ( $(section[section.length - 1]).offset().top - $(".navbar").innerHeight() ) )
        $(navLink[section.length]).parent().addClass("active").siblings().removeClass("active");

    else
        for(let i = 0; i < section.length - noSection; i++){
            
            if (( $(section[i]).offset().top  - $(".navbar").innerHeight()) <=  $(window).scrollTop() && ( $(section[i + 1]).offset().top - $(".navbar").innerHeight() ) > $(window).scrollTop() )
                $(navLink[i + 1]).parent().addClass("active").siblings().removeClass("active");
            
    }
})



//for my birthday :)
var missing
let happyBirthday = () => {
    let myDay = 1, myMonth = 9, myYear = 1998, myAge, 
        today = parseInt(new Date().getDate()), 
        month = parseInt(new Date().getMonth() + 1), 
        year = parseInt(new Date().getFullYear());
        myAge = year - myYear;
        missing = Math.round( ( (myMonth - month ) * 30.417 ) - today  );
     //check date   
    return (myDay == today && myMonth == month) ? myAge : false;
}

//check birthday and show alerts
let checkDay = () => {
    let author = "Ahmed"
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success py-2 px-5',
            cancelButton: 'btn btn-danger py-2 px-5'
        },
        buttonsStyling: false
    })
    
    if( myAge = happyBirthday() && ( ! localStorage.getItem("auguri") ) )
        swalWithBootstrapButtons.fire({
            title: `Auguri ${author}!`,
            html: `Oggi é il compleanno di <b>${author}</b>, ha compiuto <b class="h3">${myAge} anni.</b>  <br /> 
            fagli gli auguri di buon compleanno. `,
            imageUrl: './page3/images/white-cake.jpg',
            imageAlt: 'cake image',
            confirmButtonText: 'si, gli faccio',
            cancelButtonText: 'no, non gli faccio',
            showCancelButton: true,
            showCloseButton: true,
        }).then((result) => {
            if (result.value) {
                swalWithBootstrapButtons.fire(
                        `Grazie per gli auguri :)!`,
                        "",
                        'success'
                    )
                    localStorage.setItem("auguri","si")
                    document.cookie = "auguri :)"
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swalWithBootstrapButtons.fire(
                        'Vaffanculo!!',
                        "",
                        'error'
                    )
                    localStorage.setItem("auguri","no")
                }
        })
    else
        console.log(`missing for your birthday : ${missing} days`)
}



// reset value counter

let projects = document.querySelectorAll(".work > .row");
    projects =  projects.length * 3;
$(".project").attr("data-to" , projects);
$(".project").text(projects);

//counter
$('.counter').counterUp({ delay: 10, time: 1000});


$(window).on('load',function () {
    $('.loading').fadeOut(1500,function(){
        $('body').css('overflow','auto');
    });
    //init wow
    new WOW({mobile:false}).init();
    //for my birthday
    checkDay()
});


// counter
// $.fn.counter = function() {
//     const $this = $(this),
//     numberFrom = parseInt($this.attr('data-from')),
//     numberTo = parseInt($this.attr('data-to')),
//     delta = numberTo - numberFrom,
//     deltaPositive = delta > 0 ? 1 : 0,
//     time = parseInt($this.attr('data-time')),
//     changeTime = 10;
    
//     let currentNumber = numberFrom,
//     value = delta*changeTime/time;
//     var interval1;
//     const changeNumber = () => {
//     currentNumber += value;
//     //checks if currentNumber reached numberTo
//     (deltaPositive && currentNumber >= numberTo) || (!deltaPositive &&currentNumber<= numberTo) ? currentNumber=numberTo : currentNumber;
//     this.text(parseInt(currentNumber));
//     currentNumber == numberTo ? clearInterval(interval1) : currentNumber;  
//     }

//     interval1 = setInterval(changeNumber,changeTime);
// }


// $('.count-up').counter();
// $('.count1').counter();
// $('.CV-D').counter();
// $('.CV-V').counter();






