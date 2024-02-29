(function($){"use strict";$(window).on("load",function(){$("#preloader_status").fadeOut();$("#preloader").delay(350).fadeOut("slow");$("body").delay(350);$(window).scrollTop(0);});if($(window).width()>767){var allCourseArea=$(".show-all-course-area-wrap");var filter=$("#filter");var coursesGgrids=$(".courses-grids");var coursesSidebar=$(".coursesLeftSidebar");var grid=coursesGgrids.find(".col-xl-4");filter.on("click",function(){coursesSidebar.toggleClass("bang");allCourseArea.toggleClass("col-md-12 col-lg-12 col-sm-12 col-xl-12");if(grid.hasClass("col-xl-4")||grid.hasClass("col-lg-6")){grid.removeClass("col-xl-4").addClass("col-xl-3");grid.removeClass("col-lg-6").addClass("col-lg-4");}else{grid.addClass("col-xl-4").removeClass("col-xl-3");grid.addClass("col-lg-6").removeClass("col-lg-3");}});}
document.addEventListener("DOMContentLoaded",function(){document.querySelectorAll(".dropdown-menu").forEach(function(element){element.addEventListener("click",function(e){e.stopPropagation();});});if(window.innerWidth<992){document.querySelectorAll(".navbar .dropdown").forEach(function(everydropdown){everydropdown.addEventListener("hidden.bs.dropdown",function(){this.querySelectorAll(".submenu").forEach(function(everysubmenu){everysubmenu.style.display="none";});});});document.querySelectorAll(".dropdown-menu a").forEach(function(element){element.addEventListener("click",function(e){let nextEl=this.nextElementSibling;if(nextEl&&nextEl.classList.contains("submenu")){e.preventDefault();console.log(nextEl);if(nextEl.style.display=="block"){nextEl.style.display="none";}else{nextEl.style.display="block";}}});});}});if($(window).width()<=991){var flag=$(".menu-language-btn");var notification=$(".menu-notification-btn");var userBtn=$(".menu-user-btn");flag.find("> a").addClass("dropdown-toggle").attr("data-bs-toggle","dropdown");notification.find("> a").addClass("dropdown-toggle").attr("data-bs-toggle","dropdown");userBtn.find("> a").addClass("dropdown-toggle").attr("data-bs-toggle","dropdown");}
$(".counter").counterUp({delay:10,time:2000,});$("#myTab a").on("shown.bs.tab",function(){destroy_owl($(".owl-carousel"));initialize_owl($(".owl-carousel"));}),$("#myTab1 a").on("shown.bs.tab",function(){destroy_owl($(".owl-carousel"));initialize_owl($(".owl-carousel"));}),$(".category-tab-area ul li button").on("shown.bs.tab",function(){destroy_owl($(".owl-carousel"));initialize_owl($(".owl-carousel"));}),$(".latest-courses-slider").on("ready",function(){destroy_owl($(".owl-carousel"));initialize_owl($(".owl-carousel"));}),$(".selection-course-slider").on("ready",function(){destroy_owl($(".owl-carousel"));initialize_owl($(".owl-carousel"));}),$(".single-exten-slider").on("ready",function(){destroy_owl($(".owl-carousel"));initialize_owl($(".owl-carousel"));}),$(".extensive-product-all").on("ready",function(){destroy_owl($(".owl-carousel"));initialize_owl($(".owl-carousel"));}),$(".upcoming-all-slider").on("ready",function(){destroy_owl($(".owl-carousel"));initialize_owl($(".owl-carousel"));}),$(".training-slider-all").on("ready",function(){destroy_owl($(".owl-carousel"));initialize_owl($(".owl-carousel"));});function initialize_owl(el){$(".direction-ltr .course-slider-items").owlCarousel({items:4,loop:false,dots:false,autoplayHoverPause:true,autoplay:false,smartSpeed:1000,margin:30,rtl:false,nav:true,navText:['<span class="iconify" data-icon="la:angle-left"></span>','<span class="iconify" data-icon="la:angle-right"></span>',],responsive:{0:{items:1,},480:{items:1,},576:{items:1,},768:{items:2,},1200:{items:4,},},});$(".direction-rtl .course-slider-items").owlCarousel({items:4,loop:false,dots:false,autoplayHoverPause:true,autoplay:false,smartSpeed:1000,margin:30,rtl:true,nav:true,navText:['<span class="iconify" data-icon="la:angle-left"></span>','<span class="iconify" data-icon="la:angle-right"></span>',],responsive:{0:{items:1,},480:{items:1,},576:{items:1,},768:{items:2,},1200:{items:4,},},});$(".direction-ltr .selection-course-slider").owlCarousel({loop:false,dots:false,autoplayHoverPause:true,autoplay:false,smartSpeed:1000,margin:30,rtl:false,nav:true,navText:['<span class="iconify" data-icon="la:angle-left"></span>','<span class="iconify" data-icon="la:angle-right"></span>',],responsive:{0:{items:1,},480:{items:1,},576:{items:1,},768:{items:2,},1200:{items:2,},},});$(".direction-rtl .selection-course-slider").owlCarousel({loop:false,dots:false,autoplayHoverPause:true,autoplay:false,smartSpeed:1000,margin:30,rtl:true,nav:true,navText:['<span class="iconify" data-icon="la:angle-left"></span>','<span class="iconify" data-icon="la:angle-right"></span>',],responsive:{0:{items:1,},480:{items:1,},576:{items:1,},768:{items:2,},1200:{items:2,},},});$(".direction-ltr .latest-courses-slider").owlCarousel({loop:false,dots:false,autoplayHoverPause:true,autoplay:false,smartSpeed:1000,margin:30,rtl:false,nav:true,navText:['<span class="iconify" data-icon="la:angle-left"></span>','<span class="iconify" data-icon="la:angle-right"></span>',],responsive:{0:{items:1,},480:{items:1,},576:{items:1,},768:{items:2,},991:{items:3,},1200:{items:4,},},});$(".direction-rtl .latest-courses-slider").owlCarousel({loop:false,dots:false,autoplayHoverPause:true,autoplay:false,smartSpeed:1000,margin:30,rtl:true,nav:true,navText:['<span class="iconify" data-icon="la:angle-left"></span>','<span class="iconify" data-icon="la:angle-right"></span>',],responsive:{0:{items:1,},480:{items:1,},576:{items:1,},768:{items:2,},991:{items:3,},1200:{items:4,},},});$(".direction-ltr .single-exten-slider").owlCarousel({loop:false,dots:false,center:false,autoplayHoverPause:true,autoplay:false,smartSpeed:1000,margin:30,rtl:false,nav:true,navText:['<span class="iconify" data-icon="la:angle-left"></span>','<span class="iconify" data-icon="la:angle-right"></span>',],responsive:{0:{items:1,},480:{items:1,},576:{items:1,},768:{items:2,},991:{items:3,},1200:{items:3,},},});$(".direction-rtl .single-exten-slider").owlCarousel({loop:false,dots:false,center:false,autoplayHoverPause:true,autoplay:false,smartSpeed:1000,margin:30,rtl:true,nav:true,navText:['<span class="iconify" data-icon="la:angle-left"></span>','<span class="iconify" data-icon="la:angle-right"></span>',],responsive:{0:{items:1,},480:{items:1,},576:{items:1,},768:{items:2,},991:{items:3,},1200:{items:3,},},});$(".direction-ltr .tab-slider-landing").owlCarousel({loop:false,dots:false,autoplayHoverPause:true,autoplay:false,smartSpeed:1000,margin:30,rtl:false,nav:true,navText:['<span class="iconify" data-icon="la:angle-left"></span>','<span class="iconify" data-icon="la:angle-right"></span>',],responsive:{0:{items:1,},480:{items:1,},576:{items:1,},768:{items:2,},991:{items:3,},1200:{items:4,},},});$(".direction-rtl .tab-slider-landing").owlCarousel({loop:false,dots:false,autoplayHoverPause:true,autoplay:false,smartSpeed:1000,margin:30,rtl:true,nav:true,navText:['<span class="iconify" data-icon="la:angle-left"></span>','<span class="iconify" data-icon="la:angle-right"></span>',],responsive:{0:{items:1,},480:{items:1,},576:{items:1,},768:{items:2,},991:{items:3,},1200:{items:4,},},});$(".direction-ltr .extensive-product-all").owlCarousel({loop:false,dots:false,autoplayHoverPause:true,autoplay:false,smartSpeed:1000,margin:30,rtl:false,nav:true,items:1,navText:['<span class="iconify" data-icon="la:angle-left"></span>','<span class="iconify" data-icon="la:angle-right"></span>',],});$(".direction-rtl .extensive-product-all").owlCarousel({loop:false,dots:false,autoplayHoverPause:true,autoplay:false,smartSpeed:1000,margin:30,rtl:true,nav:true,navText:['<span class="iconify" data-icon="la:angle-left"></span>','<span class="iconify" data-icon="la:angle-right"></span>',],responsive:{0:{items:1,},480:{items:1,},576:{items:1,},768:{items:1,},1200:{items:1,},},});$(".direction-ltr .upcoming-all-slider").owlCarousel({loop:false,dots:false,autoplayHoverPause:true,autoplay:false,smartSpeed:1000,margin:30,rtl:false,nav:true,navText:['<span class="iconify" data-icon="la:angle-left"></span>','<span class="iconify" data-icon="la:angle-right"></span>',],responsive:{0:{items:1,},480:{items:1,},576:{items:1,},768:{items:2,},991:{items:2,},1200:{items:2,},},});$(".direction-rtl .upcoming-all-slider").owlCarousel({loop:false,dots:false,autoplayHoverPause:true,autoplay:false,smartSpeed:1000,margin:30,rtl:true,nav:true,navText:['<span class="iconify" data-icon="la:angle-left"></span>','<span class="iconify" data-icon="la:angle-right"></span>',],responsive:{0:{items:1,},480:{items:1,},576:{items:1,},768:{items:2,},991:{items:2,},1200:{items:2,},},});$(".direction-ltr .training-slider-all").owlCarousel({loop:false,dots:false,autoplayHoverPause:true,autoplay:false,smartSpeed:1000,margin:30,rtl:false,nav:true,navText:['<span class="iconify" data-icon="la:angle-left"></span>','<span class="iconify" data-icon="la:angle-right"></span>',],responsive:{0:{items:1,},480:{items:1,},576:{items:1,},768:{items:2,},991:{items:2,},1200:{items:3,},},});$(".direction-rtl .training-slider-all").owlCarousel({loop:false,dots:false,autoplayHoverPause:true,autoplay:false,smartSpeed:1000,margin:30,rtl:true,nav:true,navText:['<span class="iconify" data-icon="la:angle-left"></span>','<span class="iconify" data-icon="la:angle-right"></span>',],responsive:{0:{items:1,},480:{items:1,},576:{items:1,},768:{items:2,},991:{items:2,},1200:{items:3,},},});}
initialize_owl();function destroy_owl(el){el.trigger("destroy.owl.carousel");el.find(".owl-stage-outer").children(":eq(0)").unwrap();}
$(".direction-ltr .blog-slider-items-wrap").owlCarousel({loop:false,dots:false,autoplayHoverPause:true,autoplay:false,smartSpeed:1000,margin:30,rtl:false,nav:true,navText:['<span class="iconify" data-icon="la:angle-left"></span>','<span class="iconify" data-icon="la:angle-right"></span>',],responsive:{0:{items:1,},480:{items:1,},576:{items:1,},768:{items:1,},1200:{items:1,},},});$(".direction-rtl .blog-slider-items-wrap").owlCarousel({loop:false,dots:false,autoplayHoverPause:true,autoplay:false,smartSpeed:1000,margin:30,rtl:true,nav:true,navText:['<span class="iconify" data-icon="la:angle-left"></span>','<span class="iconify" data-icon="la:angle-right"></span>',],responsive:{0:{items:1,},480:{items:1,},576:{items:1,},768:{items:1,},1200:{items:1,},},});$(".direction-ltr .subscription-slider-items").owlCarousel({items:3,loop:false,dots:true,autoplayHoverPause:true,autoplay:false,smartSpeed:1000,margin:30,rtl:false,nav:false,navText:['<span class="iconify" data-icon="la:angle-left"></span>','<span class="iconify" data-icon="la:angle-right"></span>',],responsive:{0:{items:1,},480:{items:1,},576:{items:1,},768:{items:2,},1200:{items:3,},},});$(".direction-rtl .subscription-slider-items").owlCarousel({items:3,loop:false,dots:true,autoplayHoverPause:true,autoplay:false,smartSpeed:1000,margin:30,rtl:true,nav:false,navText:['<span class="iconify" data-icon="la:angle-left"></span>','<span class="iconify" data-icon="la:angle-right"></span>',],responsive:{0:{items:1,},480:{items:1,},576:{items:1,},768:{items:2,},1200:{items:3,},},});feather.replace();new VenoBox({selector:".venobox",});$(".barra-nivel").each(function(){var valorLargura=$(this).data("nivel");var valorNivel=$(this).html("<span class='valor-nivel'>"+valorLargura+"</span>");$(this).animate({width:valorLargura,});});var boxBgSetting=$(".box-bg-image");boxBgSetting.each(function(index){if($(this).attr("data-background")){$(this).css("background-image","url("+$(this).data("background")+")");}});$(".menu-has-children").on("click",function(){$(this).toggleClass("has-open");});$(".toggle").on("click",function(){if($(".password").attr("type")=="password"){$(".password").attr("type","text");$(this).removeClass("fa-eye");$(this).addClass("fa-eye-slash");}else{$(".password").attr("type","password");$(this).addClass("fa-eye");$(this).removeClass("fa-eye-slash");}});$(".add-question-form-btn").on("click",function(){$(".add-more-question-form-block").removeClass("d-none");});$(".start-conversation-btn-wrap > button").on("click",function(){$(".discussion-righ-wrap").toggleClass("show-editor");return false;});var current_fs,next_fs,previous_fs;var opacity;var current=1;var steps=$(".upload-course-step-item").length;setProgressBar(current);$(".next").on("click",function(){current_fs=$(this).parent();next_fs=$(this).parent().next();$("#progressbar li").eq($(".upload-course-step-item").index(next_fs)).addClass("active");next_fs.show();current_fs.animate({opacity:0},{step:function(now){opacity=1-now;current_fs.css({display:"none",position:"relative",});next_fs.css({opacity:opacity});},duration:500,});setProgressBar(++current);});$(".previous").on("click",function(){current_fs=$(this).parent();previous_fs=$(this).parent().prev();$("#progressbar li").eq($(".upload-course-step-item").index(current_fs)).removeClass("active");previous_fs.show();current_fs.animate({opacity:0},{step:function(now){opacity=1-now;current_fs.css({display:"none",position:"relative",});previous_fs.css({opacity:opacity});},duration:500,});setProgressBar(--current);});function setProgressBar(curStep){var percent=parseFloat(100/steps)*curStep;percent=percent.toFixed();}
$(".submit").on("click",function(){return false;});$(document).on("click",".deleteItem",function(){let form_id=this.dataset.formid;Swal.fire({title:deleteTitle,text:deleteText,icon:"warning",showCancelButton:true,confirmButtonColor:"#3085d6",cancelButtonColor:"#d33",confirmButtonText:deleteConfirmButton,}).then((result)=>{if(result.value){$("#"+form_id).submit();}else if(result.dismiss==="cancel"){Swal.fire("Cancelled","Your imaginary file is safe :)","error");}});});$(document).on("click","a.delete",function(){const selector=$(this);Swal.fire({title:deleteTitle,text:deleteText,icon:"warning",showCancelButton:true,confirmButtonColor:"#3085d6",cancelButtonColor:"#d33",confirmButtonText:deleteConfirmButton,}).then((result)=>{if(result.value){$.ajax({type:"GET",url:$(this).data("url"),success:function(data){location.reload();},});}});});var star_rating_width=$(".fill-ratings span").width();$(".star-ratings").width(star_rating_width);var maxField=50;var addButton=$(".add_button");var wrapper=$(".slot_field_wrap");var fieldHTML='<div class="col-sm-6 col-md-6"><div class="input-group add-slot-day-item mb-3"><input type="text" class="form-co'+
'ntrol" name="startTimes[]" placeholder="Ex. 9:00 AM"><span class="input-group-text bg-transparent border-0 cursor remove_button"'+
'><span class="iconify" data-icon="fluent:delete-48-filled"></span></span></div></div><div class="col-sm-6 col-md-6"><div class="input-group add-slot-da'+
'y-item mb-3"><input type="text" class="form-control" name="endTimes[]" placeholder="Ex. 10:00 AM"><span class="input-group-text bg-transparent border-0 cursor re'+
'move_button"><span class="iconify" data-icon="fluent:delete-48-filled"></span></span></div></div>';var fieldHTML='<div class="d-flex">\n'+
'                                    <div class="col-sm-5 col-md-5">\n'+
'                                        <div class="input-group add-slot-day-item mb-3">\n'+
'                                            <input type="time" class="form-control" name="starTimes[]" placeholder="Ex. 9:00 AM" required>\n'+
"                                        </div>\n"+
"                                    </div>\n"+
'                                    <div class="col-sm-5 col-md-5 ms-2">\n'+
'                                        <div class="input-group add-slot-day-item mb-3">\n'+
'                                            <input type="time" class="form-control" name="endTimes[]" placeholder="Ex. 10:00 AM" required>\n'+
"                                        </div>\n"+
"                                    </div>\n"+
'                                    <div class="col-sm-2 col-md-2">\n'+
'                                        <div class="input-group add-slot-day-item mb-3">\n'+
'                                            <span class="input-group-text bg-transparent border-0 cursor remove_button">\n'+
'                                                <span class="iconify" data-icon="fluent:delete-48-filled"></span>\n'+
"                                            </span>\n"+
"                                        </div>\n"+
"                                    </div>\n"+
"\n"+
"                                </div>";var x=1;$(addButton).click(function(){if(x<maxField){x++;$(wrapper).append(fieldHTML);}});$(wrapper).on("click",".remove_button",function(e){e.preventDefault();$(this).parent("div").parent("div").parent("div").remove();});})(jQuery);