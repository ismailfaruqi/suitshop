/*******************************************************************************

    Title :  SuitShop
    Date  :  June 2013
    Author:  Suitmedia (http://www.suitmedia.com)

********************************************************************************/

var Site = {

    /**
     * Init Function
     */
    init: function() {
        $('html').removeClass('no-js');
        Site.zoomImage();
        // Site.featureSlide();
    },
    
    /**
     * Zoom Image
     */
    zoomImage: function() {
        $("#img_01").elevateZoom({gallery:'gal1', cursor: 'pointer', galleryActiveClass: 'active'}); 

        $("#img_01").bind("click", function(e) {  
          var ez =   $('#zoom_03').data('elevateZoom'); 
            $.fancybox(ez.getGalleryList());
          return false;
        }); 
    },

    /**
     * Feature Slide
     */
    featureSlide: function() {
       // $('#featureSlide').carousel();
    },



}


$(function() {
    Site.init();
});
