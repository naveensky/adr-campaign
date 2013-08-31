<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>

    <title>ADR India - Mera Vote, Mera Desh </title>
    <meta name="fragment" content="!"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <style type="text/css">
        .progress {
            position: relative;
            width: 400px;
            border: 1px solid #ddd;
            padding: 1px;
            border-radius: 3px;
        }

        .bar {
            background-color: #B4F5B4;
            width: 0%;
            height: 20px;
            border-radius: 3px;
        }

        .percent {
            position: absolute;
            display: inline-block;
            top: 3px;
            left: 48%;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="<% URL::to('theme/style/jquery.qtip.css') %>"/>
    <link rel="stylesheet" type="text/css" href="<% URL::to('theme/style/jquery-ui/jquery-ui.css') %>"/>
    <link rel="stylesheet" type="text/css" href="<% URL::to('theme/style/supersized/supersized.css') %>"/>
    <link rel="stylesheet" type="text/css" href="<% URL::to('theme/style/supersized/supersized.shutter.css') %>"/>
    <link rel="stylesheet" type="text/css" href="<% URL::to('theme/style/fancybox/jquery.fancybox.css') %>"/>
    <link rel="stylesheet" type="text/css" href="<% URL::to('theme/style/base.css') %>"/>

    <link rel="stylesheet" type="text/css" media="screen and (max-width:969px)"
          href="<% URL::to('theme/style/responsive/width-0-969.css') %>"/>
    <link rel="stylesheet" type="text/css" media="screen and (max-width:767px)"
          href="<% URL::to('theme/style/responsive/width-0-767.css') %>"/>

    <link rel="stylesheet" type="text/css" media="screen and (min-width:480px) and (max-width:969px)"
          href="<% URL::to('theme/style/responsive/width-480-969.css') %>"/>
    <link rel="stylesheet" type="text/css" media="screen and (min-width:768px) and (max-width:969px)"
          href="<% URL::to('theme/style/responsive/width-768-969.css') %>"/>
    <link rel="stylesheet" type="text/css" media="screen and (min-width:480px) and (max-width:767px)"
          href="<% URL::to('theme/style/responsive/width-480-767.css') %>"/>
    <link rel="stylesheet" type="text/css" media="screen and (max-width:479px)"
          href="<% URL::to('theme/style/responsive/width-0-479.css') %>"/>

    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Voces"/>
    <link rel="stylesheet" type="text/css"
          href="http://fonts.googleapis.com/css?family=Dosis:400,300,200,500,600,700,800"/>
    <link rel="shortcut icon" href="<% URL::to('img/favicon.ico') %>" type="image/x-icon" />
    <script type="text/javascript" src="<% URL::to('theme/script/linkify.js') %>"></script>
    <script type="text/javascript" src="<% URL::to('theme/script/jquery.min.js') %>"></script>
    <script type="text/javascript" src="<% URL::to('theme/script/jquery-ui.min.js') %>"></script>
    <script type="text/javascript" src="<% URL::to('theme/script/jquery.easing.js') %>"></script>
    <script type="text/javascript" src="<% URL::to('theme/script/jquery.blockUI.js') %>"></script>
    <script type="text/javascript" src="<% URL::to('theme/script/jquery.qtip.min.js') %>"></script>
    <script type="text/javascript" src="<% URL::to('theme/script/jquery.fancybox.js') %>"></script>
    <script type="text/javascript" src="<% URL::to('theme/script/jquery.scrollTo.min.js') %>"></script>
    <script type="text/javascript" src="<% URL::to('theme/script/jquery.supersized.min.js') %>"></script>
    <script type="text/javascript" src="<% URL::to('theme/script/jquery.elastic.source.js') %>"></script>
    <script type="text/javascript" src="<% URL::to('theme/script/jquery.infieldlabel.min.js') %>"></script>
    <script type="text/javascript" src="<% URL::to('theme/script/jquery.carouFredSel.packed.js') %>"></script>
    <script type="text/javascript" src="<% URL::to('theme/script/jquery.supersized.shutter.min.js') %>"></script>
    <script type="text/javascript" src="<% URL::to('js/jquery.smooth-scroll.js') %>"></script>
    <script type="text/javascript" src="<% URL::to('scrollup-master/js/jquery.scrollUp.min.js') %>"></script>
    <!--    <script src="http://malsup.github.com/jquery.form.js"></script>-->

    <script type="text/javascript" src="<% URL::to('theme/script/script.js') %>"></script>
    <script type="text/javascript" src="<% URL::to('theme/script/main.js') %>"></script>

    <%HTML::script('js/jquery.validate.min.js')%>
    <%HTML::script('js/additional-methods.min.js')%>

</head>

<body>

<div class="main main-body">

<!-- Header -->
<div class="header clear-fix">

    <div class="layout-50p clear-fix">

        <!-- Logo -->
        <div class="layout-50p-left clear-fix">
            <a style="background: none" href="http://adrindia.org/" class="header-logo" target="_blank"><img
                    src="<% URL::to('img/logo/adr_left_logo.png') %>" alt=""></a>
        </div>
        <!-- /Logo -->

        <div class="layout-50p-right">

            <div style="background: none;padding-right: 0px" class="header-phone">
                <a href="http://myneta.info/" target="_blank"><img src="<% URL::to('img/logo/right_logo.png') %>"
                                                                   alt=""></a>
            </div>

        </div>

    </div>

</div>
<!-- /Header -->

<!-- Content -->
<div class="content clear-fix">

<ul class="no-list clear-fix section-list">

<!--start message-->
@if(Session::has('message'))
<li id="message" class="text-center clear-fix">
    <h4>
        <% Session::get('message') %>
    </h4>
</li>
<!--end message-->
@endif
<!-- Main -->
<li class="text-center clear-fix">

    <h1 style="" class="margin-bottom-0">Mera Vote, Mera Desh</h1>


    <p class="subtitle-paragraph margin-top-20 margin-bottom-50 clear-fix">
        Participate in our National Competition!

        <span class="bold">Let’s reclaim our democracy, let’s reclaim our country</span>

    </p>

    <a href="#about" id="aboutCompetition" class="button-black">About Competition</a>

    <a href="#submitEntry" id="submitEntryLink" class="button-black clear-fix">
        Submit Entry
    </a>

</li>
<!-- /Main -->


<!-- Gallery -->
<li class="padding-0 no-background position-relative">

    <div class="main overflow-hidden">

        <!-- Image list -->
        <ul class="no-list image-list image-list-carousel">

            <!-- Image -->
            <li>
                <h3>CRIME</h3>

                <div>
                    <a href="<% URL::to('img/slides/crime slide.jpg') %>"
                       class="preloader overlay-image fancybox-image" rel="gallery-1">
                        <img src="<% URL::to('img/slides/Crime Small.png') %>" alt=""/>
                        <span></span></a>

                    <p>Phasellus urna nulla</p>
                </div>
            </li>
            <!-- /Image -->

            <!-- Image -->
            <li>
                <h3>Money</h3>

                <div>
                    <a href="<% URL::to('img/slides/Money slide.jpg') %>"
                       class="preloader overlay-image fancybox-image" rel="gallery-1">
                        <img src="<% URL::to('img/slides/money small.png') %>" alt=""/>
                        <span></span>
                    </a>


                    <p>Sed in nisl tellus</p>
                </div>
            </li>
            <!-- /Image -->

            <!-- Image -->
            <li>
                <h3>Representation</h3>

                <div>
                    <a href="<% URL::to('img/slides/Representation.JPG') %>"
                       class="preloader overlay-image fancybox-image" rel="gallery-1">
                        <img src="<% URL::to('img/slides/represntation.png') %>" alt=""/>
                        <span></span>
                    </a>

                    <p>Nam nisi mauris</p>
                </div>
            </li>
            <!-- /Image -->

            <!-- Image -->
            <li>
                <h3>Video</h3>

                <div>
                    <a href="http://adrindia.org/media/video-gallery/adr-sabji-hindi" target="_blank"
                       class="preloader overlay-video ">
                        <img src="<% URL::to('img/slides/AMIR KHAN VIDEOS JPEG.PNG') %>" alt=""/>
                        <span></span>
                    </a>

                    <p>Quam vitae pretium</p>
                </div>
            </li>
            <!-- /Image -->

            <!-- Video -->
            <li>
                <h3>Milestone</h3>

                <div>
                    <a href="<% URL::to('img/slides/Milestones.JPG') %>"
                       class="preloader overlay-video fancybox-video-youtube">
                        <img src="<% URL::to('img/slides/milestone small.png') %>" alt=""/>
                        <span></span>
                    </a>

                    <p>Quam vitae blandit</p>
                </div>
            </li>
            <!-- /Video -->

            <!-- Video -->

            <!-- /Video -->

            <!-- Video -->

            <!-- /Video -->

        </ul>
        <!-- /Image list -->

        <!-- Navigation -->
        <a href="#" class="image-list-carousel-navigation-prev"></a>
        <a href="#" class="image-list-carousel-navigation-next"></a>
        <!-- /Navigation -->

    </div>

</li>
<!-- /Gallery -->


<!-- Features -->
<li id="about">

<h2>About</h2>

<p class="subtitle-paragraph">
    We invite entries for a nationwide competition. We are looking for entries with a positive can-do message, with
    a dash of humour and an earthy touch that would appeal to the common voter.

</p>

<div class="layout-50 clear-fix">

<!-- Left column -->
<div class="layout-50-left clear-fix">

    <!-- Features list -->
    <ul class="about-list no-list  clear-fix">


        <!-- /Item -->

        <!-- Item -->
        <li>
            <h3>Language</h3>

            <p>
                Entries are welcome in any Indian language with English/Hindi translation.
            </p>
        </li>
        <!-- /Item -->

        <!-- Item -->
        <li>
            <h3>Prizes</h3>

            <p>
                Get a chance to be a part of our national campaign against crime and money in politics and win a
                prize and a certificate from an eminent jury. YOUR entries may be used in the campaign!
            </p>
        </li>
        <!-- /Item -->

        <!-- Item -->
        <li>
            <h3>LAST DATE</h3>

            <p>
                September 30th, 2013
            </p>
        </li>
        <!-- /Item -->

    </ul>
    <!-- /Features list -->

</div>
<!-- /Left column -->

<!-- Right column -->
<div class="layout-50-right">

    <!-- Accordion -->
    <div class="nostalgia-accordion clear-fix">

        <h3><a aria-selected="true" href="#">Theme</a></h3>

        <div style="padding-left: 20px;padding-top: 20px">
            <h4>Let’s reclaim our democracy, let’s reclaim our country</h4>
            <br/>
            <h5>Your creative input should aim:</h5>

            <div>

                <ul class="no-list list-1 clear-fix">

                    <li>
                        <span>1</span>

                        <p>To empower each voter to stand up against crime and money in elections,</p>
                    </li>
                    <li>
                        <span>2</span>

                        <p>To impress upon each voter that selling your vote is equal to selling your
                            future.</p>
                    </li>
                    <li>
                        <span>3</span>

                        <p>To inspire fellow citizens to vote for clean candidates who can be better leaders for
                            a better government.</p>
                    </li>
                    <li>
                        <span>4</span>

                        <p>To call upon all citizens to be informed, to vote, to question, to demand
                            accountability, to participate in reclaiming our democracy and country.</p>
                    </li>

                </ul>

            </div>

        </div>

        <h3><a href="#">Categories</a></h3>

        <div>

            <div>

                <ul class="no-list list-1 clear-fix">

                    <li>
                        <span>1</span>

                        <p>Slogans</p>


                    </li>
                    <li>
                        <span>2</span>

                        <p>Videos</p>


                    </li>
                    <li>
                        <span>3</span>

                        <p>Songs</p>


                    </li>
                    <li>
                        <span>4</span>

                        <p>Cartoons</p>


                    </li>
                    <li>
                        <span>5</span>

                        <p>Photographs</p>


                    </li>


                </ul>

            </div>

        </div>

        <h3><a href="#">Rules</a></h3>

        <div>

            <div>

                <ul class="no-list list-1 clear-fix">

                    <li>
                        <span>1</span>

                        <p>There is no participation fee.</p>


                    </li>
                    <li>
                        <span>2</span>

                        <p>Submissions can be made online or sent to the ADR address. Entrants are entitled to
                            submit at a maximum of three creative inputs at one time. Additional entries can be
                            submitted through re-registration.</p>


                    </li>
                    <li>
                        <span>3</span>

                        <p>Selection of the best entries will be made by a jury. The jury will evaluate entries
                            based on relevance to the theme and purpose of the campaign, the power of the message,
                            creativity, and originality.</p>


                    </li>
                    <li>
                        <span>4</span>

                        <p>The entries should be fully original and any plagiarism of material used in the entries
                            will result in immediate disqualification of the participant</p>


                    </li>
                    <li>
                        <span>5</span>

                        <p>By entering the contest, the participant grants National Election Watch and Association for
                            Democratic Reforms exclusive rights to the winning creative input for use in any
                            format.</p>


                    </li>


                </ul>

            </div>

        </div>

    </div>
    <!-- /Accordion -->

</div>
<!-- /Right column -->

</div>

</li>
<!-- /Features -->

<?php $name = Input::old('name');
$mobile = Input::old('mobile');
$email = Input::old('email');
$address = Input::old('address');
$category = Input::old('category', "");
$state = Input::old('state', "");
?>
<!-- Contact -->
<li id="submitEntry">

    <h2>Submit Entries</h2>


    <div class="clear-fix layout-50">

        <!-- Left column -->
        <div class="layout-50-left">

            <h3>Online Entries</h3>

            <div class="contact-details-wrapper">

                <!-- Contact form -->
                <form name="contact-form" id="campaignForm" method="post" enctype="multipart/form-data"
                      action="<% URL::to('/campaign/add') %>" class="clear-fix">

                    <div class="clear-fix">

                        <ul class="no-list form-line">
                            @if(Session::has('errorMessage'))
                            <li id="message" class=" clear-fix" style="padding-bottom: 10px;">
                                <h4 style="color: white">
                                    <% Session::get('errorMessage') %>
                                </h4>
                            </li>
                            <!--end message-->
                            @endif
                            <li class="clear-fix block">
                                <label for="name">Your Name (required)</label>
                                <input type="text" name="name" id="name" value="<% $name %>"/>
                            </li>
                            <li class="clear-fix block">
                                <label for="email">Your Email (required)</label>
                                <input type="text" name="email" id="email" value="<% $email %>"/>
                            </li>
                            <li class="clear-fix block">
                                <label for="mobile">Your Mobile (required)</label>
                                <input type="text" name="mobile" id="mobile" value="<% $mobile %>"/>
                            </li>
                            <li class="clear-fix block">
                                <label for="address">Your Address</label>
                                <textarea name="address" id="address" rows="1"
                                          cols="1"><% $address %></textarea>
                            </li>
                            <li class="clear-fix block" style="width: 100%">
                                <select id="state" name="state"
                                        style="width: 100%;font-family: Dosis, Arial;font-size: 16px;">
                                    <option value="" selected="">Select State</option>
                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                    <option value="Daman and Diu">Daman and Diu</option>
                                    <option value="NCT-Delhi">NCT-Delhi</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Orissa">Orissa</option>
                                    <option value="Puducherry">Puducherry</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="West Bengal">West Bengal</option>
                                </select>

                            </li>

                            <li class="clear-fix block" style="width: 100%">
                                <!--                                <label for="contact-form-mail">Your e-mail</label>-->
                                <select id="category" name="category"
                                        style="width: 100%;font-family: Dosis, Arial;font-size: 16px;">
                                    <option value="">Select Category</option>
                                    <option value="Slogans">Slogans</option>
                                    <option value="Videos">Videos</option>
                                    <option value="Songs">Songs</option>
                                    <option value="Cartoons">Cartoons</option>
                                    <option value="Photographs">Photographs</option>
                                </select>
                            </li>
                            <li class="clear-fix block" style="width: 100%">
                                <div id="addFilesDiv">
                                    <input style="width: 100%" type="file" id="campaignFiles" class="file_input"
                                           name="campaignFiles[]">

                                </div>


                            </li>
                            <li class="clear-fix" style="padding-bottom: 5px;">
                                <!--                                <button class="button-black" id="addMore" data-count=1 type="button">Add More Files</button>-->
                                <a href="#" class="button-black add_more_button" id="addMore"
                                   data-count=1 type="button">Add More
                                    Files</a>

                            </li>
                            <li class="clear-fix block" style="width: 100%">
                                <% Form::captcha()%>
                            </li>
                            <li class="clear-fix block" style="width: 100%">
                                <input id="campaignSubmit" type="submit" class="button" style="width: 100%"
                                       value="Send"/>
                            </li>

                            <li class="clear-fix block" style="width: 100%">
                                <div style="display: none;width: 100%" class="progress">
                                    <div class="bar"></div>
                                    <div class="percent">0%</div>
                                </div>
                            </li>
                            <li class="clear-fix block" style="width: 100%">
                                <div style="display: none;width: 100%" id="errorMessage">

                                </div>
                            </li>
                        </ul>

                    </div>

                </form>
                <!-- /Contact form -->
            </div>

        </div>
        <!-- /Left column -->

        <!-- Right column -->
        <div class="layout-50-right offline-entries">

            <h3>Offline Entries</h3>
            <br/>
            <h4>To submit your entries offline, mail at</h4>

            <p style="padding-bottom: 0px;">Association For Democratic Reforms </p>

            <p style="padding-bottom: 0px;padding-top:0px">Kiwanis Centre Building</p>

            <p style="padding-bottom: 0px;padding-top:0px">4th Floor, B-35</p>

            <p style="padding-bottom: 0px;padding-top:0px">Qutub Institutional Area</p>

            <p style="padding-bottom: 0px;padding-top:0px">New Delhi-110016</p>

            <p style="padding-bottom: 0px;padding-top:0px">Landmark: Near Rockland Hospital</p>
            <br/>
            <h4>For more information or queries call us at</h4>

            <p style="padding-bottom: 0px">Helpline No. : 91-80103-94248</p>

            <p style="padding-bottom: 0px;padding-top:0px">Or Email us at: <a href="mailto:campaign@adrindia.org">campaign@adrindia.org</a>
            </p>

        </div>
        <!-- /Right column -->

    </div>

</li>
<!-- Contact -->

</ul>

</div>
<!-- /Content -->


<!-- Footer -->
<div class="footer layout-50 clear-fix">

    <!-- Left column -->
    <div class="layout-50-left" id="twitter-div" >

        <h3>Network With Us</h3>

        <!-- Latest tweets -->
        <div id="latest-tweets"></div>
        <!-- /Latest tweets -->
        <!-- Social icons list -->
        <ul class="no-list social-list clear-fix">
            <li><a href="http://twitter.com/#!/adrspeaks" target="_blank" class="social-list-twitter"></a></li>
            <li><a href="http://www.facebook.com/adr.new" target="_blank" class="social-list-facebook"></a></li>
            <li><a href="http://www.youtube.com/user/adrspeaks" target="_blank" class="social-list-googleplus"></a></li>
        </ul>
        <!-- /Social icons list -->

    </div>
    <!-- /Left column -->

    <!-- Right column -->
    <div class="layout-50-right">

        <h3>Subscribe to Google Groups</h3>

        <p>
            To receive latest information about political reforms and our various reports, please enter your email-id
            below
        </p>
        <!-- Newsletter form -->
        <form id="newsletter-form" action="http://groups.google.com/group/national-election-watch/boxsubscribe"
              class="clear-fix" target="_blank">
            <div class="clear-fix">
                <ul class="no-list form-line">
                    <li class="clear-fix block">
                        <label for="newsletter-form-mail">Your e-mail</label>
                        <input name="email" type="text" id="newsletter-form-mail" value=""/>
                        <input style="border-color: #000000;height: 100%;" type="submit" id="newsletter-form-send"
                               name="newsletter-form-send"
                               class=""
                               value="Join"/>
                    </li>

                </ul>

            </div>

        </form>
        <!-- /Newsletter form -->

    </div>
    <!-- /Right column -->

</div>
<!-- /Footer -->

</div>

<!-- Background overlay -->
<div id="background-overlay"></div>
<!-- /Background overlay -->
<script type="text/javascript" xmlns="http://www.w3.org/1999/html">

    //code for adding
    $(document).ready(function () {

        $.scrollUp({
            scrollName: 'scrollUp', // Element ID
            topDistance: '300', // Distance from top before showing element (px)
            topSpeed: 300, // Speed back to top (ms)
            animation: 'fade', // Fade, slide, none
            animationInSpeed: 200, // Animation in speed (ms)
            animationOutSpeed: 200, // Animation out speed (ms)
            scrollText: '', // Text for element
            activeOverlay: false // Set CSS color to display scrollUp active point, e.g '#00FFFF'
        });


        setTimeout(function () {
            $('#message').hide();
        }, 10000);
        var state = "<%$state%>";
        var category = "<%$category%>";
        $("#state").val(state);
        $("#category").val(category);
        $('#addMore').click(function (e) {
            e.preventDefault();
            var count = $(this).data('count');
            if ($(this).data('count') == 3) {
                alert('Only three files are allowed')
                return false;
            }

            $(this).data('count', count + 1);
            var text = $('#addFileInput').html();
            $('#addFilesDiv').append(text);
        });

        $(".file_input").change(function () {
            var iSize = ($(this)[0].files[0].size / 1024);


            iSize = (Math.round((iSize / 1024) * 100) / 100);

            if (iSize > 100) {
                console.log('File size exceeded');

            } else {
                console.log(iSize);
            }

        });

        $('#campaignSubmit').click(function (e) {
            $(this).hide();
            var errorDiv = $('$errorMessage');
            errorDiv.show();
            errorDiv.html('<p>' + "Please Wait" + '</p>')

        });

        $('#aboutCompetition').click(function (e) {

            e.preventDefault();
            $.smoothScroll({scrollTarget: '#about'});
        });
        $('#submitEntryLink').click(function (e) {

            e.preventDefault();
            $.smoothScroll({scrollTarget: '#submitEntry'});
        });


    })



</script>
<div id="addFileInput" style="display: none">
    <br/>

    <input type="file" class="file_input" id="campaignFiles" name="campaignFiles[]">
</div>
</body>

</html>