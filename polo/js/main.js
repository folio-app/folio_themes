





$(document).ready(function() {

  /*
  *
  * Init scroll animation
  *
  */
$(window).load(function() {

  new AnimOnScroll( document.getElementById( 'grid' ), {

  });
});




  var $aboutSection = $('.about'),
      $caret = $('.left-nav i'),
      $aboutButton = $('.left-nav');

  /*
  *
  * Initiate image-cover
  * on all .grid-item images
  *
  */
   $('.project-container').imgLiquid();


  /*
  *
  * Set grid element events
  *
  */
  $('.grid-item').on('click', function(e) {
    e.preventDefault();
    $aboutSection.slideUp();
    $aboutButton.removeClass('open');
    $caret.attr('class','fa fa-caret-down');
    project.show(this);
  });

  $('.close').on('click', function() {
    project.hide();
  });




  /*
  *
  * Set about page event
  *
  */
  $('.left-nav').on('click', function(){
    $aboutSection.slideToggle('fast');
    $aboutButton.toggleClass('open');
    $aboutSection.toggleClass('show');

    if($aboutButton.hasClass('open')) {
      $caret.attr('class','fa fa-caret-up');
    } else {
      $caret.attr('class','fa fa-caret-down');
    }
  });




  /*
  *
  * Grid to project view
  * animation controls.
  *
  */
  var project = {
    show: function(el) {
      $('body').addClass('fix-pos');

      var $el      = $(el),
        position   = $el.offset(),
        width      = $el.width(),
        height     = $el.height(),
        id         = $el.data('id');


      $clone = $el.clone();
      $clone.css('left', position.left);
      $clone.css('right', position.right);
      $clone.css('bottom', position.bottom);
      $clone.css('top', position.top - $(window).scrollTop());
      $clone.css('width', width);
      $clone.css('height', height);
      $clone.addClass('position-block');
      $clone.removeClass('grid-item');
      $el.after($clone);


      var $positionBlock = $('.position-block');

      $positionBlock.find('.overlay').remove();
      $positionBlock.attr('data-target', id);
      $positionBlock.animate({
        width: '60%',
        height: '97%',
        left: '0',
        right: '0',
        bottom: '0',
        top: '0',
        margin: '1%'
      }, 400);


      $('.overlay-view').removeClass('hidden');
      $positionBlock.on('click', function(e) { e.preventDefault();});
    },
    hide: function() {
      var $overlay = $('.overlay-view');
      var $positionBlock = $('.position-block');
      var targetId = $positionBlock.data('target');

      var $originalEl = $('[data-id="'+targetId+'"]');
      var position = $originalEl.offset();
      var elWidth = $originalEl.width();
      var elHeight = $originalEl.height();

      $positionBlock.animate({
        width: elWidth,
        height: elHeight,
        top: position.top - $(window).scrollTop(),
        left: position.left,
        right: position.right,
        bottom: position.bottom,
        margin: '0'
      }, 400);

      setTimeout(function() {
        $positionBlock.remove();
        $('body').removeClass('fix-pos');
      }, 1000);


      $('.overlay-view').addClass('hidden');

    }
  }





});