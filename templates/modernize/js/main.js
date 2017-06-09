$(document).ready(function(){

function scrollDetect(){
  $(window).scroll(function(){

    scroll = $(window).scrollTop();
    // console.log(scroll);

    if(scroll >= $('#top').position().top && scroll <= $('#airDesign').position().top - 10){
      $('.smooth-nav ul li').removeClass('active');
      $('.smooth-nav ul li:nth-child(1)').addClass('active');

    }
     else if(scroll >= $('#airDesign').position().top && scroll <= $('#coreFramework').position().top - 10) {
       $('.smooth-nav ul li').removeClass('active');
       $('.smooth-nav ul li:nth-child(2)').addClass('active');

    } else if(scroll >= $('#coreFramework').position().top && scroll <= $('#REST').position().top - 10) {
       $('.smooth-nav ul li').removeClass('active');
       $('.smooth-nav ul li:nth-child(3)').addClass('active');
     }else{
       $('.smooth-nav ul li').removeClass('active');
       $('.smooth-nav ul li:nth-child(4)').addClass('active');
     }
  });
}


});
