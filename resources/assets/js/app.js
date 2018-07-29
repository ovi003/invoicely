
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */



require('./bootstrap');

$(document).ready(function(){
	
	shrinkSidebar();

	$(window).resize(function(){

		shrinkSidebar();
	})


	$(document).on("click",".preview-link",function(){
		var image = $(this).data('src');

		$("body").addClass("fixed");
		$(".preview-image").attr("src",image);

		$(".download-link").attr("href",image);
	});

	$(document).on("click",".btn-close",function(){
		$("body").removeClass("fixed");
	})

});

function shrinkSidebar(){
	if($(window).width() < 992){
		$(".admin-layout").addClass("responsive");
	}else{
		$(".admin-layout").removeClass("responsive");
	}
}