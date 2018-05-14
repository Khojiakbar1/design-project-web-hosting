(function($){

$.fn.azFilter=function() {

$(this).each(function(){

var $thisis = $(this),
    $filters = $thisis.find('[data-filter]'),
    $filterAc = $thisis.find('[data-filter].active').attr('data-filter');
    $boxes = $filters.parent().next().find('[data-tag]');

    $boxes.addClass('is-animated').fadeIn(); 


  $filters.on('click', function(e) {
    e.preventDefault();
    var $this = $(this),
        $filterContainer = $(this).parent().next().find('[data-tag]');  
    
    $filters.removeClass('active');
    $this.addClass('active');

    var $filterTag = $this.attr('data-filter');
    
    if($filterTag != 'all'){
      $filterContainer.removeClass('is-animated').fadeOut().promise().done(function() {
        $filterContainer.filter('[data-tag = "' + $filterTag + '"]').addClass('is-animated').fadeIn();
      });
    } else {
      $filterContainer.addClass('is-animated').fadeIn();  
    }
    
  });

});



  }

})(jQuery)
