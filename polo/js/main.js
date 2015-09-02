
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
    $aboutSection.slideUp().removeClass('show');
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

      var $newImage  = $('.project-image div');

      $cssStyles = {
        'left': position.left + 'px',
        'top': position.top - $(window).scrollTop() + 'px',
        'width': width + 'px',
        'height': height + 'px',
      };
      addCss($cssStyles);

      $clone = $el.clone();
      $clone.addClass('position-block');
      $clone.removeClass('animate');
      $clone.removeClass('grid-item');
      $el.after($clone);
      var $positionBlock = $('.position-block');


      $positionBlock.find('.overlay').remove();

      window.setTimeout(function() {
      $positionBlock.addClass("stretch");
      }, 100)


      $('.overlay-view').removeClass('hidden');
      $('.project-image div').removeClass('hidden');
      window.setTimeout(function() {
        $positionBlock.remove();
      }, 1000)
      $positionBlock.on('click', function(e) { e.preventDefault();});

    },

    hide: function() {

      var $overlay       = $('.overlay-view'),
          $newImage      = $('.project-image div');

      $('body').removeClass('fix-pos');
      $overlay.addClass('hidden');
      $newImage.addClass('hidden');

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
              console.log("in");
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
      console.log("ses");
        var $data    = data,
            $project = $data.project[id],
            $projectDetails = $('.project-details');
            $projectTitle = $projectDetails.find('h3');
            $projectDescription = $projectDetails.find('.project-description');
            $projectLink = $('.project-link a');
            $projectImage = $('.project-image img');


        $projectTitle.html($project.title);
        $projectDescription.html($project.description);
        $projectLink.attr('href', $project.link);
        $projectLink.html($project.link);
        $projectImage.attr('src', 'images/'+$project['cover-image']);
        $('.image-container').imgLiquid();

        $projectDetails.addClass('show');


    }

  }



  /*
  *
  * Send ajax request if # is in url
  *
  */
  addEventListener('hashchange', function () {
      console.log("hi");
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
        console.log("test");
          var id = projectData.getId();


          var el = $('.grid-item[data-id="' + id + '"]');

          project.show(el);
          projectData.get();
      }
  });


  function addCss(css) {
    var cssStyles = '<style> ul .position-block { ';
    var $styleContainer = $('style');

    $.each(css, function(el, i) {
      cssStyles += el+": "+i+";";
    });

    if($styleContainer.length == 1) {
        $styleContainer.after(cssStyles + '}');
    } else {
        $styleContainer[1].remove();
        $styleContainer.after(cssStyles + '}');

    }

  };



});