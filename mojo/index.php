<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mojo</title>
    <meta name="portfolio" content="Portfolio website" />
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link href='http://fonts.googleapis.com/css?family=Martel:200' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="js/modernizr.custom.js"></script>
</head>
<body>
<nav role="navigation">
    <div class="nav-container clearfix">
        <h1>{{ portfolio.title }}</h1>
        <h2>Portfolio Website</h2>

        <ul class="menu-items">
            <li>
                <a href="/about" class="show-projects">Projects</a>
            </li>
            <li>
                <a href="" class="about-user">About</a>
            </li>
        </ul>

        <ul class="media-icons">
            <li>
                <a href=""><i class="fa fa-facebook"></i></a>
            </li>
            <li>
                <a href=""><i class="fa fa-twitter"></i></a>
            </li>
            <li>
                <a href=""><i class="fa fa-linkedin"></i></a>
            </li>
            <li>
                <a href=""><i class="fa fa-behance"></i></a>
            </li>
        </ul>
    </div>
</nav>
<div class="about-section fade-out remove">
    <p>
        {{ portfolio.details }}
    </p>
</div>
<div class="project-container">
    <!-- Hidden Project View -->
    <div class="project-view">
        <div class="close-window"><i class="fa fa-times"></i></div>
        <div class="project-contents">
            <div class="project-view-container">
                <div class="project-image">
                    <img src="">
                </div>
                <div class="project-details">
                    <h2></h2>
                    <P></P>
                    <div class="project-link">
                        <a href=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Left Navigation -->
    <ul class="grid effect" id="grid">
        {{#each project}}
        {{ this }}
            <li class="item">
                <a href="#/{{ id }}">
                    <img src="images/{{ image }}">
                    <div class="show-overlay">
                        <div class="details">
                            <h3>{{ title }}</h3>
                            View
                        </div>
                    </div>
                </a>
            </li>
        {{/each}}


        <li class="item"><a href=""><img src="images/10.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/5.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/8.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/1.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/9.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/1.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/3.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/4.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/5.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/6.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/7.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/8.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/9.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/2.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/3.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/10.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/11.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/2.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/4.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/1.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/3.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/4.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/5.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/6.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/7.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/8.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/9.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/4.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/3.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/10.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/11.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/2.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/5.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/1.jpg"><div class="show-overlay"></div></a></li>
    </ul>
</div>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/imagesloaded.js"></script>
<script src="js/classie.js"></script>
<script src="js/AnimOnScroll.js"></script>
<script src="js/carousel.min.js"></script>
<script src="js/imgLiquid-min.js"></script>
<script>
    $(window).load(function() {


        new AnimOnScroll( document.getElementById( 'grid' ), {
            minDuration : 0.4,
            maxDuration : 0.7,
            viewportFactor : 0.2
        } );


        var aboutUser = document.querySelector('.about-user');
        var projects = document.querySelector('.show-projects');
        var projectItem = document.querySelectorAll('.item a');
        var projectView = document.querySelector('.project-view');
        var aboutSection = document.querySelector('.about-section');
        var gridContainer = document.querySelector('.project-container');
        var $projectData = "";


        aboutUser.addEventListener('click', function(e) {
            e.preventDefault();
            hideProject();
            gridContainer.classList.add("slide-right");
            setTimeout(function(){
                aboutSection.classList.remove("fade-out");
                aboutSection.classList.remove("remove");
                gridContainer.classList.remove("float-right");
            }, 500);
        });

        projects.addEventListener('click', function(e) {
            e.preventDefault();
            hideProject();
            aboutSection.classList.add("fade-out");
            setTimeout(function(){
                aboutSection.classList.add("remove");
                gridContainer.classList.remove("slide-right");
            }, 500);
        });

        $(document).on('ready', function() {
            var path = window.location.href;
            if(path.indexOf("#") >= 0) {
                getProject();
            }
        });

        addEventListener('hashchange', function () {
            getProject();
        });

        function getProject() {
            var id = getProjectId();
            if($projectData == "") {
                $.ajax({
                    url: 'data.json',
                    type: 'GET',
                    success: function (data, status) {
                        if (status === "success") {
                            $projectData = data;
                            showProject($projectData, id);
                        }
                    }
                });
            } else {
                showProject($projectData, id);
            }
        }

        function getProjectId() {
            var hashPath =  window.location.href;
            hashPath = hashPath.split('/');
            var hashLength = hashPath.length - 1;
            var id = hashPath[hashLength];
            return id;
        }

        function showProject(data, id) {
            var $data = JSON.parse(data);
            jQuery.each($data.project, function(i, val) {
                if(i == id) {
                    $('.project-image img').attr('src', './images/'+val.image);
                    $('.project-details h2').html(val.title);
                    $('.project-details p').html(val.description);
                    $('.project-link a').attr('href', val.link);
                    $('.project-link a').html(val.link);
                }
            });

            var height = window.innerHeight;
            $('.project-contents').css('height', height);
            $('.project-contents .project-image').imgLiquid();
            if($(window).width() > 1025) {
                $('.project-container').css('position', 'fixed');
            } else {
                $("html, body").animate({ scrollTop: 200 }, "slow");
            }
            $('.project-view').addClass('project-show');
        }

        function hideProject() {
            window.history.pushState('', '', 'index.php');
            $('.project-container').css('position', 'relative');
            $('.project-view').removeClass('project-show');
        }

        $('.close-window').on('click', hideProject);

        $( window ).resize(function() {
            if($(window).width() < 1025) {
                $('.project-container').css('position', 'relative');
            }
        });

    });

</script>
</body>
</html>