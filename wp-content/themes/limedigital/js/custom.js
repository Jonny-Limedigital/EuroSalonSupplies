jQuery(document).ready(function($){
    
    if ($(window).width() < 767) {
		$("body .logo_container img").attr("src","/wp-content/uploads/2021/03/logo-mobile-v2.png");
// 		$("body .home-service-row.river-adventure .text").insertBefore("body .home-service-row.river-adventure .image");
// 		$("body .home-service-row.unique-river-adventure .text").insertBefore("body .home-service-row.unique-river-adventure .image");
//  		$("body .cambridge .logo img").attr("src","/wp-content/uploads/2020/12/cambridge-mobi.png");
// 		$("body .aes .logo img").attr("src","/wp-content/uploads/2020/12/aes-mobi.png");
 		$("body #testimonialtitle").insertBefore("body .testimonial-section");
		//$("body .alternate .text-section").insertBefore("body .alternate .image-section");
		//$("body .alternate .image-section").insertBefore("body .alternate .text-section");
		 
	}
	else {
		//alert('More than 960');
	}
    
});