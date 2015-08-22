
$(document).ready(function() {




  /*
  *
  * Set variables
  *
  */
  var $aboutSection = $('.about'),
      $caret        = $('.left-nav i'),
      $aboutButton  = $('.left-nav'),
      $projectJson  = "";



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

      var $overlay       = $('.overlay-view'),
          $positionBlock = $('.position-block'),
          targetId       = $positionBlock.data('target'),
          $originalEl    = $('[data-id="'+targetId+'"]'),
          position       = $originalEl.offset(),
          elWidth        = $originalEl.width(),
          elHeight       = $originalEl.height();

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

      window.history.pushState('', '', 'index.html');
    }
  }



  /*
  *
  * Show project functions
  *
  */
  var projectData = {
    get: function() {
      var id = projectData.getId();
      if($projectJson === "") {
        $.ajax({
            url: 'data/data.json',
            type: 'GET',
            dataType: 'json',
            success: function (data, status) {
                if (status === "success") {
                    $projectJson = data;
                    projectData.insert($projectJson, id);
                }
            }
        });
      } else {
        projectData.insert($projectJson, id);
      }

    },
    getId: function() {
        var hashPath   =  window.location.href;
        hashPath       = hashPath.split('/');
        var hashLength = hashPath.length - 1,
            id         = hashPath[hashLength];
        return id;
    },
    insert: function(data, id) {
        var $data    = data,
            $project = $data.project[id],
            $projectDetails = $('.project-details');
            $projectTitle = $projectDetails.find('h3');
            $projectDescription = $projectDetails.find('.project-description');
            $projectLink = $('.project-link a');


        $projectTitle.html($project.title);
        $projectDescription.html($project.description);
        $projectLink.attr('href', $project.link);
        $projectLink.html($project.link);

        $projectDetails.addClass('show');

    }

  }



  /*
  *
  * Send ajax request if # is in url
  *
  */
  addEventListener('hashchange', function () {
      projectData.get();
  });


/*
  *
  * Init scroll animation
  *
  */
  $(window).load(function() {

    new AnimOnScroll( document.getElementById( 'grid' ), {

    });



      /*
    *
    * Send ajax request if # is in url
    * on pageload.
    *
    */
      var path = window.location.href;
      if(path.indexOf("#") >= 0) {
          var id = projectData.getId(),
              el = $('.grid-item[data-id="' + id + '"]');

          project.show(el);
          projectData.get();
      }
  });



});