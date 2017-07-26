<!DOCTYPE html>
<html>
<head>
    <title>Luke Taylor</title>
    <meta charset="UTF-8">
    <meta name="description" content="My Online Portfolio">
    <meta name="keywords" content="Website, HTML, CSS, Laravel, PHP">
    <meta name="author" content="Luke Taylor">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    {{--CSS--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel = "stylesheet" href = "css/styles.css" type = "text/css">
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.css" type = "text/css">
</head>

<body>
{{--Navbar--}}
<nav id = "top">
    <div id = "nav_wrapper">
        <div class = "row">
            <div class = "col-md-6">
                <div id = "nav_header">
                    {{--<h1><a data-scroll href = "#top">LT</a></h1>--}}
                    <a data-scroll href = "#top"><img src = "images/logo.png"></a>
                </div>
            </div>
            <div class = "col-md-6">
                <div id = "nav_menu">
                    <ul>
                        <li><a data-scroll href="#about">About</a></li>
                        <li><a data-scroll href="#portfolio">Portfolio</a></li>
                        <li><a data-scroll href = "#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
{{--Intro Section--}}
<section id = "intro">
    <div id = "intro-text">
        <h1>Luke Taylor</h1>
        <h3>Web Developer</h3>
    </div>
</section>

<section id = "about">
        <div class = "container">
            <h1 class = "line-through"><span class = "white">My Story</span></h1><br>
            <p>Since I was very young I have always had a passion for technology. My love for code started to grow when I first took computer science classes at Durham Sixth Form Centre. Since then
                I have constantly been trying to improve my skills by creating my own projects, participating in online courses, and doing any work I can get my hands on.</p>
            <p>I personally think that I would be a great asset to any employer as I am reliable, hardworking and very optimistic towards what I do. I am currently 18 years of age
            and have been working in the website industry since April 2016. I completed my level 3 Apprenticeship in May 2017 and although I have only been working for {{$months}} months, I am certain
            I can be of high value to any company and I know I have an exciting career ahead of me!</p>
            <a href = "Luke Taylor CV.docx" download><button class = "btn btn-primary">Download CV</button></a>
        </div>
</section>


<section id = "portfolio">
    <div class = "container">
        {{--<h1 class = "inline">My Portfolio</h1> &nbsp;<h3 class = "inline">(so far...)</h3>--}}
        <h1 class = "line-through"><span class = "grey">My Portfolio</span></h1>
        <br>
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                    <div class = "thumbnail-image">
                        <img src = "images/thought_website.png">
                    </div>
                    <div class="caption">
                        <h3>Thought Foundation</h3>
                        <p>This was my first big project whilst working at Cedrec. After I finished my learning and finally had a good understanding
                        of web development, I got asked to create a website for an art gallery from scratch. I got given a photoshop file to copy
                        using HTML and CSS and got tasked with many hard challenges such as creating an inventory tracking system and an event booking system. The creation of this
                        website really helped my skills develop very quickly.</p>
                        <p><a href="http://www.thoughtfoundation.co.uk" target = "_blank" class="btn btn-primary" role="button">View Website</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                    <div class = "thumbnail-image">
                        <img src = "images/simple_music_website.png">
                    </div>
                    <div class="caption">
                        <h3>Simple Music</h3>
                        <p>This was my first big personal project which took quite a lot of my time. I got the idea to build this website when both me and other friends
                            wanted to play different songs at a party, but none of them knew how to queue the songs properly resulting in songs being cut off half way through.
                            I then decided to make this site which pulls audio from youtube using their API and automatically adds it to the end of the queue.</p>
                        <p><a href="http://www.simplemusic.co.uk" target = "_blank" class="btn btn-primary" role="button">View Website</a></p>
                    </div>
                </div>
            </div>
        </div><br>
        <h2>Skills</h2>
        <hr>
        <div class = "row">
            <div class = "col-md-6">
                <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>Javascript</li>
                    <li>Jquery</li>
                </ul>
            </div>
            <div class = "col-md-6">
                <ul>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>Laravel</li>
                </ul>
            </div>
        </div><br>
        <h2 class = "inline">Tasks I've done</h2> &nbsp; <h4 class = "inline">(some examples...)</h4><hr>
        <div class = "row">
            <div class = "col-md-12">
                <div class="well">
                    <h3>Inventory Tracking System</h3>
                    <p>This was a system for controlling our stock in the backend of the Thought Foundation Website. I isntalled a plugin called Stevebauman Inventory to help me with the development. Once it was possible to
                    add products, categories, companies and SKU codes I added barcode scanner functionality. I done this by configuring the barcode scanner to add a unique prefix before sending the code, this meant
                    that my javascript could listen for that prefix and then send an ajax call to find the product the code matches. This then prompts the user and questions if they want to sell one of the products, which will
                        reduce the stock by one.</p>
                </div>
            </div>
            <div class = "col-md-12">
                <div class="well">
                    <h3>Social Media Integration and Sharing</h3>
                    <p>On the social media page of the website, I used three different jQuery plguins to display our facebook, instagram and twitter. I set it up to link to our accounts and modfied the CSS slightly. I then used the youtube
                        API to get the three most recent videos and added an iPlayer for each one. I have also used a plugin called AddThis to create social media sharing buttons for both blog posts and event posts. This takes the URL of the page
                        and displays the information in a user-friendly format.</p>
                </div>
            </div>
            <div class = "col-md-12">
                <div class="well">
                    <h3>Automated Email Campaigns</h3>
                    <p>I setup gmails SMTP on our server so we can send out emails whenever required and I also synced our mailing list to a mailchimp list. I done this by calling the mailchimp API whenever a user accepted their
                        email cofirmation. I also made sure that whenever a user was updated in the backend, it sends an API call to also update them on mailchimp. I then assigned each user to certain categories making it easy
                        to target specific groups of users and then when an email campaign needs to be sent I can create that campaign by sending all user ID's which belong to a specific group to mailchimp. I have also set up a webhook
                        so that if a user unsubscribes through a mailchimp email it sets them inactive on our database to prevent spam and keep both lists in sync.</p>
                </div>
            </div>
            <div class = "col-md-12">
                <div class="well">
                    <h3>User Logins and Permissions</h3>
                    <p>When first creating the backend, the first thing I did was setup user profiles so that only employees could login. Then I created permisssions which are read, write, edit, and admin. When a user logs in,
                        the permissions are taken from the database and stored in the current session. Now whenever a user tries to make an action on the site, the permissions trait I created tells the system whether they have
                        the correct permission required to do so.</p>
                </div>
            </div>
            <div class = "col-md-12">
                <div class="well">
                    <h3>Artist Submissions System</h3>
                    <p>There is a submissions page on the website which allows any artists or companies to request to submit their work either in the gallery, or in our shop. This was a simple form which used dropzone to allow
                        the user to upload multiple images at once. Once the form is submitted, an email is sent out to Thought Foundation and the submission can be accessed on the backend of the website. Once viewing the submission,
                        employees can then write facebook-style comments to discuss whether they want to accept the artwork. If they choose to reject the submission, the website sends out an automated email letting the user down gently, and if they
                        accept the submission an employee of the company will write them a personalised email letting them know what happens next.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section id = "contact">
    <div class = "container">
        <h1 class = "line-through"><span class = "white">Contact Me</span></h1>
        <br>
        <div class="row">
            <div class = "col-md-6 centered">
                <i class = "glyphicon glyphicon-earphone"></i>
                <h3>+44 7532 701359</h3>
            </div>
            <a href = "mailto:luke.taylor11@hotmail.com"><div class = "col-md-6 centered">
                <i class = "glyphicon glyphicon-envelope glyphicon-responsive"></i>
                <h3>luke.taylor11@hotmail.com</h3>
            </div></a>
        </div><br>
        <div id = "contact-form">
            <form action = "/" method = "POST">
                {{csrf_field()}}
                <div class = "form-group">
                    <label>Name</label>
                    <input type = "text" class = "form-control" name = "name">
                </div>
                <div class = "form-group">
                    <label>Email</label>
                    <input type = "text" class = "form-control" name = "email">
                </div>
                <div class = "form-group">
                    <label>Message</label>
                    <textarea class = "form-control" name = "message" rows = "10"></textarea>
                </div>
                <div class = "form-group">
                    <input class = "btn btn-success" type = "submit" value = "Send">
                </div>
            </form>
        </div>
    </div>
</section>

<footer>
    <p>&copy; Luke Taylor 2017</p>
</footer>
</body>
{{--JS--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.common.min.js"></script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.common.min.js.map"></script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.min.js"></script>
<script src = "js/smooth-scroll.min.js"></script>
<script>
    /*Initialise smooth scroll*/
    smoothScroll.init({
        speed: 1500
    });

    $(document).ready(function(){
        @if ($status == "success") swal('Message Sent!', 'I will get back to you shortly', 'success'); @endif
    })
</script>

</html>

