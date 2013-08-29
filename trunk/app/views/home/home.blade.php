<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>

    <title>ADR India - Mera Vote, Mera Desh </title>
    <meta name="fragment" content="!"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

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
            <a style="background: none" href="#" class="header-logo"><img
                    src="<% URL::to('img/logo/adr_left_logo.png') %>" alt=""></a>
        </div>
        <!-- /Logo -->

        <div class="layout-50p-right">

            <div style="background: none;padding-right: 0px" class="header-phone">
                <a href="#"><img src="<% URL::to('img/logo/right_logo.png') %>" alt=""></a>
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

    <h1 class="margin-bottom-0">Mera Vote, Mera Desh</h1>


    <p class="subtitle-paragraph margin-top-20 margin-bottom-50 clear-fix">
        Let’s reclaim our democracy, let’s reclaim our country
        <!--        <span class="bold">Libero lacus semper massa at sollicitudin dolor magna nulla velit.</span>-->
    </p>

    <a href="#about" class="button-black">About Competition</a>

    <a href="#submitEntry" class="button-black clear-fix">
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
                <h3>Monoscope</h3>

                <div>
                    <a href="<% URL::to('theme/image/_sample/img1.jpg') %>"
                       class="preloader overlay-image fancybox-image" rel="gallery-1">
                        <img src="<% URL::to('theme/image/_sample/img1.jpg') %>" alt=""/>
                        <span></span>
                    </a>

                    <p>Phasellus urna nulla</p>
                </div>
            </li>
            <!-- /Image -->

            <!-- Image -->
            <li>
                <h3>Praesent</h3>

                <div>
                    <a href="<% URL::to('theme/image/_sample/img3.jpg') %>"
                       class="preloader overlay-image fancybox-image" rel="gallery-1">
                        <img src="<% URL::to('theme/image/_sample/img3.jpg') %>" alt=""/>
                        <span></span>
                    </a>

                    <p>Sed in nisl tellus</p>
                </div>
            </li>
            <!-- /Image -->

            <!-- Image -->
            <li>
                <h3>Suspendisse</h3>

                <div>
                    <a href="<% URL::to('theme/image/_sample/img4.jpg') %>"
                       class="preloader overlay-image fancybox-image" rel="gallery-1">
                        <img src="<% URL::to('theme/image/_sample/img4.jpg') %>" alt=""/>
                        <span></span>
                    </a>

                    <p>Praesent in augue</p>
                </div>
            </li>
            <!-- /Image -->

            <!-- Image -->
            <li>
                <h3>Curabitur</h3>

                <div>
                    <a href="<% URL::to('theme/image/_sample/img6.jpg') %>"
                       class="preloader overlay-image fancybox-image" rel="gallery-1">
                        <img src="<% URL::to('theme/image/_sample/img6.jpg') %>" alt=""/>
                        <span></span>
                    </a>

                    <p>Nam nisi mauris</p>
                </div>
            </li>
            <!-- /Image -->

            <!-- Video -->
            <li>
                <h3>Aenean</h3>

                <div>
                    <a href="http://www.youtube.com/embed/Zln9I9IttLA"
                       class="preloader overlay-video fancybox-video-youtube">
                        <img src="<% URL::to('theme/image/_sample/img7.jpg') %>" alt=""/>
                        <span></span>
                    </a>

                    <p>Quam vitae pretium</p>
                </div>
            </li>
            <!-- /Video -->

            <!-- Video -->
            <li>
                <h3>Scelerisque</h3>

                <div>
                    <a href="http://www.youtube.com/embed/6v2L2UGZJAM"
                       class="preloader overlay-video fancybox-video-youtube">
                        <img src="<% URL::to('theme/image/_sample/img8.jpg') %>" alt=""/>
                        <span></span>
                    </a>

                    <p>Quam vitae blandit</p>
                </div>
            </li>
            <!-- /Video -->

            <!-- Video -->
            <li>
                <h3>Elementum</h3>

                <div>
                    <a href="http://player.vimeo.com/video/1084537"
                       class="preloader overlay-video fancybox-video-vimeo">
                        <img src="<% URL::to('theme/image/_sample/img10.jpg') %>" alt=""/>
                        <span></span>
                    </a>

                    <p>Fusce nisl sem</p>
                </div>
            </li>
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

        <h3><a href="#">Theme</a></h3>

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

                        <p>By entering the contest, the winner grants National Election Watch and Association for
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


<!-- Contact -->
<li id="submitEntry">

    <h2>Submit Entries</h2>


    <div class="clear-fix layout-50">

        <!-- Left column -->
        <div class="layout-50-left">

            <h3>Online Entries</h3>

            <div class="contact-details-wrapper">

                <!-- Contact form -->
                <form name="contact-form" id="contact-form" method="post" enctype="multipart/form-data"
                      action="<% URL::to('/campaign/add') %>" class="clear-fix">

                    <div class="clear-fix">

                        <ul class="no-list form-line">

                            <li class="clear-fix block">
                                <label for="name">Your Name (required)</label>
                                <input type="text" name="name" id="name" value=""/>
                            </li>
                            <li class="clear-fix block">
                                <label for="email">Your Email (required)</label>
                                <input type="text" name="email" id="email" value=""/>
                            </li>
                            <li class="clear-fix block">
                                <label for="mobile">Your Mobile (required)</label>
                                <input type="text" name="mobile" id="mobile" value=""/>
                            </li>
                            <li class="clear-fix block">
                                <label for="address">Your Address</label>
                                <textarea name="address" id="address" rows="1"
                                          cols="1"></textarea>
                            </li>
                            <li class="clear-fix block">
                                <label for="state">Your State</label>
                                <input type="text" name="state" id="state" value=""/>
                            </li>
                            <li class="clear-fix block">
                                <label for="city">Your City</label>
                                <input type="text" name="city" id="city" value=""/>
                            </li>
                            <li class="clear-fix block" style="width: 100%">
                                <!--                                <label for="contact-form-mail">Your e-mail</label>-->
                                <select name="category" style="width: 100%">
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
                            <li class="clear-fix">
                                <!--                                <button class="button-black" id="addMore" data-count=1 type="button">Add More Files</button>-->
                                <a href="#" class="button-black add_more_button" id="addMore"
                                   data-count=1 type="button">Add More
                                    Files</a>

                            </li>
                            <li class="clear-fix block" style="width: 100%">
                                <input type="submit" class="button" style="width: 100%"
                                       value="Send"/>
                            </li>

                        </ul>

                    </div>

                </form>
                <!-- /Contact form -->
            </div>

        </div>
        <!-- /Left column -->

        <!-- Right column -->
        <div class="layout-50-right">

            <h3>Offline Entries</h3>
            <br/>
            <h5>To submit your entries offline, mail at</h5>

            <p style="padding-bottom: 0px;">Association For Democratic Reforms </p>

            <p style="padding-bottom: 0px;padding-top:0px">Kiwanis Centre Building</p>

            <p style="padding-bottom: 0px;padding-top:0px">4th Floor, B-35</p>

            <p style="padding-bottom: 0px;padding-top:0px">Qutub Institutional Area</p>

            <p style="padding-bottom: 0px;padding-top:0px">New Delhi-110016</p>

            <p style="padding-bottom: 0px;padding-top:0px">Landmark: Near Rockland Hospital</p>
            <br/>
            <h6>For more information or queries call us at</h6>

            <p style="padding-bottom: 0px">Helpline No. : 91-80103-94248</p>

            <p style="padding-bottom: 0px;padding-top:0px">Or Email us at: <a href="mailto:adr@adrindia.org">adr@adrindia.org</a>
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
    <div class="layout-50-left">

        <h3>Network With Us</h3>

        <!-- Latest tweets -->
        <div id="latest-tweets"></div>
        <!-- /Latest tweets -->
        <!-- Social icons list -->
        <ul class="no-list social-list clear-fix">
            <li><a href="http://twitter.com/#!/adrspeaks" target="_blank" class="social-list-twitter"></a></li>
            <li><a href="http://www.facebook.com/adr.new" target="_blank" class="social-list-facebook"></a></li>
            <li><a href="http://www.youtube.com/user/adrspeaks" class="social-list-googleplus"></a></li>
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
                        <input type="submit" id="newsletter-form-send" name="newsletter-form-send" class="button"
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
        setTimeout(function () {
            $('#message').hide();
        }, 10000);

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


    });


</script>
<div id="addFileInput" style="display: none">
    <br/>

    <input type="file" class="file_input" id="campaignFiles" name="campaignFiles[]">
</div>
</body>

</html>