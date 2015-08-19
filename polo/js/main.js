$(document).ready(function() {

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
  $('li').on('click', function(e) {
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

      var position = $(el).offset();
      var width = $(el).width();
      var height = $(el).height();
      var id = $(el).data('id');

      $clone = $(el).clone(true);
      $clone.css(position);
      $clone.css('width', width);
      $clone.css('height', height);
      $clone.addClass('position-block');
      $clone.removeClass('grid-item');
      $(el).append($clone);


      var $positionBlock = $('.position-block');
      $positionBlock.attr('data-target', id);
      $positionBlock.animate({
        width: '60%',
        height: '100%',
        left: '0',
        right: '0',
        bottom: '0',
        top: '0'
      }, 400);


      $('.overlay-view').removeClass('hidden');
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
        top: position.top,
        left: position.left,
        right: position.right,
        bottom: position.bottom
      }, 400);

      setTimeout(function() {
        $positionBlock.remove();
      }, 500);

      $('.overlay-view').addClass('hidden');

    }
  }





});