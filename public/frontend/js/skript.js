(function($) {
    "use strict"

// slick slider 
$('.jpp_left_form_sliders').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    // infinite: true,
    slidesToShow: 1,
    dots: true,
    arrows: false,

   

});
// car slider 
$('.car_slider_area_start').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    // infinite: true,
    slidesToShow: 1,
    dots: true,
    arrows: false,

   

});

// end slick slider 

//  slick chat box  
const chat_btn = $("#chat-bot .icon");
const chat_box = $("#chat-bot .messenger");

chat_btn.click(() => {
//   chat_btn.toggleClass("expanded");
  chat_btn.toggleClass("expanded");
  setTimeout(() => {
    chat_box.toggleClass("expanded");
  }, 100);
});

// end slick chat box  
// quantity box for product 
$(function() {

    (function quantityProducts() {
      var $quantityArrowMinus = $(".quantity-arrow-minus");
      var $quantityArrowPlus = $(".quantity-arrow-plus");
      var $quantityNum = $(".quantity-num");
  
      $quantityArrowMinus.click(quantityMinus);
      $quantityArrowPlus.click(quantityPlus);
  
      function quantityMinus() {
        if ($quantityNum.val() > 1) {
          $quantityNum.val(+$quantityNum.val() - 1);
        }
      }
  
      function quantityPlus() {
        $quantityNum.val(+$quantityNum.val() + 1);
      }
    })();
  
  });
// quantity box for product 
// single poroduct image slider image 
$('.product_img_slider_on').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider_nav_f_s_p'
});
$('.slider_nav_f_s_p').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.product_img_slider_on',
  dots: false,
  centerMode: false,
  focusOnSelect: true
});
// end slignel product image slider 
// end single product  zoom image
// $('.target').izoomify(); 
// $('.target').izoomify({
//   // url: "hi-res/hover.jpg",
//   magnify: 1.75,
//   duration: 400,
//   touch: true,

// });
// end single product  zoom image 

})(jQuery);

// for select style 
var x, i, j, l, ll, selElmnt, a, b, c;
/* Look for any elements with the class "custom-select": */
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /* For each element, create a new DIV that will act as the selected item: */
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /* For each element, create a new DIV that will contain the option list: */
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /* For each option in the original select element,
    create a new DIV that will act as an option item: */
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /* When an item is clicked, update the original select box,
        and the selected item: */
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
    /* When the select box is clicked, close any other select boxes,
    and open/close the current select box: */
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}

function closeAllSelect(elmnt) {
  /* A function that will close all select boxes in the document,
  except the current select box: */
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

/* If the user clicks anywhere outside the select box,
then close all select boxes: */
document.addEventListener("click", closeAllSelect);
// end for select style 
/*
jQuery(document).ready(function($) {

    var menuTrigger = "<span class='caret caret-up'></span>";

    var hasSubmenu = $('ul li').has('ul').addClass('hasSubmenu').find('>a').prepend(menuTrigger);

    $('.caret').on('click', function() {

        $(this).toggleClass('caret-down').closest('li').siblings().find('.caret').removeClass('caret-down');

        $(this).closest('li').find('>ul').stop(true, true).slideToggle();


    });
    
});
*/