<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading Effects for Grid Items | Demo 1</title>
    <meta name="description" content="Loading Effects for Grid Items with CSS Animations" />
    <meta name="keywords" content="css animation, loading effect, google plus, grid items, masonry" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link href='http://fonts.googleapis.com/css?family=Martel:200' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="js/modernizr.custom.js"></script>
</head>
<body>
<nav role="navigation">
    <div class="nav-container clearfix">
        <h1><a href="#">Mojo</a></h1>
        <h2>Portfolio Website</h2>

        <ul class="menu-items">
            <li>
                <a href="" class="show-projects">Projects</a>
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
    <p>Hi, my name is Jane Doe. I am a Web Designer, Illustrator working in Vienna, Austria. My passion is to create beautiful, fun designs with a modern touch.
    I am currently looking for jobs in Vienna, Austria. Shoot me and email or contact me through one of my social media links.</p>
</div>
<div class="project-container">
    <div class="project-view">
        <div class="close-window"><i class="fa fa-times"></i></div>
        <div class="project-contents">

        </div>
    </div>
    <!-- Left Navigation -->

    <ul class="grid effect" id="grid">
        <li class="item">
            <a href="#/wineo">
                <img src="images/1.jpg">
                <div class="show-overlay">
                    <div class="details">
                        <h3>Wineo</h3>
                        View
                    </div>
                </div>
            </a>
        </li>
        <li class="item">
            <a href="#/alpha">
                <img src="images/2.jpg">
                <div class="show-overlay">
                    <div class="details">
                        <h3>Alpha Beat</h3>
                        View
                    </div>
                </div>
            </a>
        </li>
        <li class="item">
            <a href="#/theBlog">
                <img src="images/9.jpg">
                <div class="show-overlay">
                    <div class="details">
                        <h3>The Blog</h3>
                        View
                    </div>
                </div>
            </a>
        </li>
        <li class="item">
            <a href="#/vroom">
                <img src="images/8.jpg">
                <div class="show-overlay">
                    <div class="details">
                        <h3>The Blog</h3>
                        View
                    </div>
                </div>
            </a>
        </li>s

        <li class="item">
            <a href="#/bubbles">
                <img src="images/3.jpg">
                <div class="show-overlay">
                    <div class="details">
                        <h3>The Blog</h3>
                        View
                    </div>
                </div>
            </a>
        </li>

        <li class="item"><a href=""><img src="images/6.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/11.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/7.jpg"><div class="show-overlay"></div></a></li>
        <li class="item"><a href=""><img src="images/4.jpg"><div class="show-overlay"></div></a></li>
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
        var name = getProjectName();
        $.ajax({
            url: 'project/'+name+'.html',
            type: 'GET',
            success : function(data, status) {
                if (status === "success") {
                    showProject(data);
                }
            }
        });
    }

    function getProjectName() {
        var hashPath =  window.location.href;
        hashPath = hashPath.split('/');
        console.log(hashPath);
        var hashLength = hashPath.length - 1;
        console.log(hashLength);
        var name = hashPath[hashLength];
        return name;
    }

    function showProject(data) {
        $('.project-contents').html(data);
        var height = window.innerHeight;
        $('.project-contents').css('height', height);
        $('.project-contents .project-image').imgLiquid();
        $('.project-container').css('position', 'fixed');
        $('.project-view').addClass('project-show');
    }

    function hideProject() {
        window.location.href = "#";
        $('.project-container').css('position', 'relative');
        $('.project-view').removeClass('project-show');
    }

    $('.close-window').on('click', hideProject);

</script>
</body>
</html>