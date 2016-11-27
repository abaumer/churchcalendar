<?php 
  include_once("API/seasons.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>One Church Calendar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="We are in <?php echo get_seasons('current', 2, $this_year); ?> until <?php echo date("M d, Y", strtotime(get_seasons('current', 1, $this_year))); ?>.  -  One simple Seasons of the Church Calendar. Read about each season and find dates.">
    <meta name="author" content="Austin Baum">
    <link href="favicon.png" rel="icon" type="image/png">

  <!-- Facebook Open Tags -->
    <meta property="og:title" content="One Church Calendar" />
    <meta property="og:type" content="activity" />
    <meta property="og:url" content="http://1cal.cc" />
    <meta property="og:image" content="http://1cal.cc/img/1cal.jpg" />
    <meta property="og:site_name" content="One Church Calendar" />
    <meta property="og:description" content="We are in <?php echo get_seasons('current', 2, $this_year); ?> until <?php echo date("M d, Y", strtotime(get_seasons('current', 1, $this_year))); ?>.  -  One Church Calendar. Read about each season and find dates." />
    <meta property="fb:admins" content="825568655" />

    <!-- hide iOS address bar 
    ================================================== -->
    <script type="text/javascript">
      window.addEventListener("load",function() {
        // Set a timeout...
        setTimeout(function(){
          // Hide the address bar!
          window.scrollTo(0, 1);
        }, 0);
      });
    </script>

    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Javascript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="js/chart.min.js"></script>
    <!-- Our Scripts -->
    <script src="js/theScripts.js"></script>

    <!-- Google Analytics
    ================================================== -->
    <script type="text/javascript">
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-19722253-26', '1cal.cc');
      ga('send', 'pageview');

    </script>


  </head>

  <body>


    <!-- Part 1: Wrap all page content here -->
    <div class="page">
      <header class="sitetitle">
        <div class="row">
          <div class="col-xs-4">
            <h2>1cal</h2>
          </div>
          <div class="col-xs-8 text-right">
            <ul class="list-unstyled list-inline">
              <li>calendar</li>
              <li>about</li>
            </ul>
          </div>
        </div>
      </header>
      <div id="theseason" class="wrap season" data-season="<?php echo get_seasons('current', 3, $this_year); ?>">
        <div class="container">
          <div class="row">
            <div class="span12">
              <div id="chartBox"></div>
              <div class="seasontitle">
                <p>It is the season of</p>
                <h1 itemprop="text"><span class="name"><?php echo get_seasons('current', 2, $this_year); ?></span><br/>
                <small><span class="startdate"><?php echo date("M d, Y", strtotime(get_seasons('current', 0, $this_year))); ?></span> - <span class="enddate"><?php echo date("M d, Y", strtotime(get_seasons('current', 1, $this_year))); ?></span></small></h1>
              </div>
            </div>
          </div>

        </div>
      </div>
      
      <div class="calBlocks">
        <a id="block1" class="s1a" href="#advent">Advent</a>
        <a id="block2" class="s2c" href="#christmas">Christmas</a>
        <a id="block3" class="s3e" href="#epiphany">Epiphany</a>
        <a id="block4" class="s4o" href="#ordinary1">Ordinary</a>
        <a id="block5" class="s5l" href="#lent">Lent</a>
        <a id="block6" class="s6e" href="#easter">Easter</a>
        <a id="block7" class="s7p" href="#pentecost">Pentecost</a>
        <a id="block8" class="s8o" href="#ordinary2">Ordinary</a>
      </div>

      <!-- <div class="wrap share">
          <div class="shareblocks">
            <a href="//pinterest.com/pin/create/button/?url=http%3A%2F%2F1cal.cc&media=http%3A%2F%2F1cal.cc%2Fimg%2F1cal.jpg&description=One%20Church%20Calendar" data-pin-do="buttonPin" data-pin-config="none" class="b-right"><img src="img/_40-pinterest.png" alt="Like" /></a>            
            <a href="https://plus.google.com/share?url=http://1cal.cc" class="b-right"><img src="img/_40-google.png" alt="Like" /></a>
            <a href="https://www.facebook.com/sharer/sharer.php?u=1cal.cc" target="_blank" class="b-right"><img src="img/_40-facebook.png" alt="Like" /></a>
            <a href="https://twitter.com/share?text=We+are+in+<?php echo str_replace(" ", "+", get_seasons('current', 2, $this_year)); ?>.+-+via+@abaumer&amp;hashtags=1Cal&amp;url=http://1cal.cc" target="_blank" ><img src="img/_40-twitter.png" alt="Tweet" /></a>

          </div>
      </div> -->

      <div class="wrap content">
        <section id="advent">
          <div>
            <h2>Advent<br/>
                <small><span class="startdate"><?php echo date("M d, Y", strtotime(get_seasons('advent', 0, $this_year))); ?></span> - <span class="enddate"><?php echo date("M d, Y", strtotime(get_seasons('advent', 1, $this_year))); ?></span></small></h2>
            <p><i>Begins 4 Sundays before Christmas - Ends Christmas Eve</i></p>
            <p>The first season of the Christian Calendar, Advent originated in what is now Western Europe sometime around the 4th centuery as a period of fasting in reparation for the Feast of the Nativity (Christmas Day).  It is a season of waiting and inward preparation, a call to reflection.  After a long season of Ordinary Time, Advent is a time to rimend us that we are still waiting on Christ's expected return; it reminds us to be attentive, to be ready.  It is also a time to love and support one another as we we remember that we are the face, voice, hands & feet of Jesus.</p>
            <p><b>The Sundays of Advent</b>
              <br/>1st Sunday - Wait - Isaiah 7:14
              <br/>2nd Sunday - Prepare - Luke 3:4
              <br/>3rd Sunday - Rejoice - Luke 1:46
              <br/>4th Sunday - Love - John 3:16</p>
            <p><b>Colors:</b> Purple (color of repentence & reflection), Pink (joy), Blue (hope)
              <br/><b>Purpose:</b>   Preparation for the Celebration of Christ's Nativity
              <br/><b>Tags:</b> reflect, repent, wait, prepare, hope</p>
          </div>
        </section>
        <section id="christmas">
          <div>
            <h2>Christmas<br/>
                <small><span class="startdate"><?php echo date("M d, Y", strtotime(get_seasons('christmas', 0, $this_year))); ?></span> - <span class="enddate"><?php echo date("M d, Y", strtotime(get_seasons('christmas', 1, $this_year))); ?></span></small></h2>
            <p><i>Begins on Christmas - Ends the 12th day after Christmas (Jan. 5th)</i></p>
            <p>Celebrated in December since the fourth century when the date was selected to coincide with pagan holidays surrounding the winter solstice.  Christmas is not a single day, but 12 days beginning on Christmas day.  The twelve days are meant to be a season of feasting following the fasting season of Advent.</p>
            <p><b>Colors:</b> White (Christ, purity, innocence, joy), Gold (royalty, triumph)
              <br/><b>Purpose:</b>   Celebration of Christ's Birth
              <br/><b>Tags:</b> Nativity, Christ, Birth</p>
          </div>
        </section>
        <section id="epiphany">
          <div>
            <h2>Epiphany<br/>
                <small><span class="startdate"><?php echo date("M d, Y", strtotime(get_seasons('epiphany', 0, $this_year))); ?></span> - <span class="enddate"><?php echo date("M d, Y", strtotime(get_seasons('epiphany', 1, $this_year))); ?></span></small></h2>
            <p><i>Begins and ends on January 6th.  A single day season.</i></p>
            <p>Originally one of three major feasts, along with Easter and Pentecost, Epiphany is the culmination of the season of Christmas.  It has become a celebration recognizing the coming of the Magi, though it was a celebration of Christ's birth and baptism in the early church.  The Magi, whether really kings or not, were Gentiles and represent all non-jewish people.  The importance is in the story of how these pagan people could not help but follow a star in the sky to come and see Jesus.  They represent God extending his convenental relationship with Israel, to all people.  Epiphany is a time of extravagent gift giving, with great love without counting the costs.  It is also a season of Call & Response, and many people use this day to bless their homes.</p>
            <p><b>Colors:</b> White (purity, joy)
              <br/><b>Purpose:</b>   Celebrate the coming of the Magi, A season of giving, The official end of Christmas
              <br/><b>Tags:</b> Magi, Baptism, gifts, giving, home</p>
          </div>
        </section>
        <section id="ordinary1">
          <div>
            <h2>Ordinary Time 1<br/>
                <small><span class="startdate"><?php echo date("M d, Y", strtotime(get_seasons('ordinary1', 0, $this_year))); ?></span> - <span class="enddate"><?php echo date("M d, Y", strtotime(get_seasons('ordinary1', 1, $this_year))); ?></span></small></h2>
            <p><i>Begins on January 7th - Ends the Tuesday before Ash Wednesday, the start of Lent.</i></p>
            <p>The first cycle of Ordinary Time, the two seasons in which we live most of our daily, regular lives during the year.  Ordinary Time draws attention to the Holiness of our daily rhythm of life.  Recognizing Ordinary Time is recognizing that God is present in our regular lives just as much as in seasons of celebration.  It is a time of growth as we live day to day, performing tasks that seem pointless.  Ordinary Time reminds us to live with patient expectation of seeing God in the everyday.  </p>
            <p><b>Colors:</b> Green (growth)
              <br/><b>Purpose:</b>  A time to recognize the presence of God in our day to day routines, and grow.
              <br/><b>Tags:</b> Growth, patience, slow, rhythm, present</p> 
          </div>
        </section>
        <section id="lent">
          <div>
            <h2>Lent<br/>
                <small><span class="startdate"><?php echo date("M d, Y", strtotime(get_seasons('lent', 0, $this_year))); ?></span> - <span class="enddate"><?php echo date("M d, Y", strtotime(get_seasons('lent', 1, $this_year))); ?></span></small></h2>
            <p><i>Begins on Ash Wednesday (40 days before Easter, excluding Sundays) - Ends the day before Easter</i></p>
            <p>Lent is a Season of dying, cleansing, giving up.  It originated as a 40 hours fast before Easter representing the time Christ was in the grave, the 40 hours between Christ's death and resurrection.  It grew to 40 days and it's meaning grew to reflect not just on His death but on the reason for His death, our sin.  It's a reminder of the 40 days of the flood when God purified the world, the 40 years of wandering when God purified Israel, the 40 days of Christ's fasting in the desert.  Lent is commonly associated with fasting.  Fasting is meant to provide space in our lives to recognize God, which often leads to repentence and charity.  The practice of fasting during Lent is not meant to earn God favor, but rather to concisously make space in our lives for our relationship with God.  We have many things, not just food, that fill up our lives.  Lent is a time to remove the some of these things so that God may fill in that space in our lives.</p>
            <p><b>Colors:</b> Purple (repentence), Black (death, mourning)
              <br/><b>Purpose:</b>  A time to make space in our lives for God, to repent and reflect, and to be charitable.
              <br/><b>Tags:</b> repent, fast, reflect, charity</p>
          </div>
        </section>
        <section id="easter">
          <div>
            <h2>Easter<br/>
                <small><span class="startdate"><?php echo date("M d, Y", strtotime(get_seasons('easter', 0, $this_year))); ?></span> - <span class="enddate"><?php echo date("M d, Y", strtotime(get_seasons('easter', 1, $this_year))); ?></span></small></h2>
            <p><i>Begins on Easter Sunday, the Sunday after the Full Moon on/after the Vernal Equinox - Ends 50 days later</i></p>
            <p>The celebration of Christ's resurrection.  Easter is the reason we traditionally have church worship on Sundays, the Lord's day.  Originally celebarated in conjunction with Passover, at the council of Nicea in 325AD, leaders decided Easter was to be celebrated on a Sunday.  Since then Easter is on the first Sunday after the first full moon on or after the Vernal Equinox (which is what makes finding the date of Easter programmatically so difficult!)  The Easter season lasts 50 days, and is a time for us to reflect on the depth of the meaning of Christ's death for us and resurrection.  It reminds us that Christ intercedes for us, forgives sins, purifys us, transforms us into His likeness and this is true cause for joy.</p>
            <p><b>Colors:</b> White (purity, joy), Gold (royalty, triumph)
              <br/><b>Purpose:</b>  A time to recognize and celebrate Christ's death and resurrection.
              <br/><b>Tags:</b> resurrection, life, triumph, joy, majesty</p>
          </div>
        </section>
        <section id="pentecost">
          <div>
            <h2>Pentecost<br/>
                <small><span class="startdate"><?php echo date("M d, Y", strtotime(get_seasons('pentecost', 0, $this_year))); ?></span> - <span class="enddate"><?php echo date("M d, Y", strtotime(get_seasons('pentecost', 1, $this_year))); ?></span></small></h2>
            <p><i>Begins on the seventh (7th) Sunday after Easter - Ends the following Sunday, 8 days later.</i></p>
            <p>Pentecost was originally associated with Shavouth, a Jewish holiday that celebrated the harvest and the giving of the Torah to Moses.  Like the giving of the Law to the Israelites represented the birth the nation of Israel, Pentecost also became associated with the outpouring of the Holy Spirit and the birth of the Church.  It grew to become one of the most celebrated days in the Christian calendar, and increased from a single day to eight, ending on Whit Sunday or Trinity Sunday.  It's a time to reflect and celebrate the Holy Trinity.  Pentecost is also a time to recognize the Church, our need to belong to the body of Christ and our need for each other.  </p>
            <p><b>Colors:</b> Red (fire)
              <br/><b>Purpose:</b>  A celebration of the gift of the Holy Spirit, and time to recognize the Trinity and the Church.
              <br/><b>Tags:</b> joy, delight, trinity, holy spirit</p>
          </div>
        </section>
        <section id="ordinary2">
          <div>
            <h2>Ordinary Time 2<br/>
                <small><span class="startdate"><?php echo date("M d, Y", strtotime(get_seasons('ordinary2', 0, $this_year))); ?></span> - <span class="enddate"><?php echo date("M d, Y", strtotime(get_seasons('ordinary2', 1, $this_year))); ?></span></small></h2>
            <p><i>Begins the Monday after Pentecost - Ends the Saturday before Advent begins.</i></p>
            <p>The second cycle of ordinary time, it's also the longest season of the year.  Like the first cycle of Ordinary Time, this season is also a time to recognize God in our normal, day to day lives.  It's a time to reflect on the mystery of our faith.  It's a time to grow and thus many attempt to have a time of daily devotion or reading in order to sustain them through this long season.  It is a time to find ordinary ways in our ordinary lives to recognize God and His presence in the daily routines we live. </p>
            <p><b>Colors:</b> Green (growth)
              <br/><b>Purpose:</b>  A time to reflect on God's presence in our day to day lives.
              <br/><b>Tags:</b> growth, routine, rhythm, faith</p>
          </div>
        </section>
      </div>

      <div class="wrap content dark">
        <section id="about">
        <h2>About</h2>
        <p><i>This simple tool is meant to share information, in order to serve and unite us.</i></p>
        
        <br/>
        <h3>Why</h3>
        <p>Recently I took interest in knowing the Seasons of the Church Calendar.  Some people always seemed to celebrate Ash Wednesday and Lent, but I assumed it was a Catholic observance only and not necessarily something that had significance for all Christians.  After speaking with my pastor and doing some reading I discovered the seasons of the Church Calendar.  It fascinated me and I wondered why I never knew about them.  It seemed to me that many people didn't know of them and so I decided to create this tool in order to share the knowledge</p>
        
        <h3>How</h3>
        <p>There was some difficulty in figuring out the dates.  As Easter is a "moveable feast", or a holiday without a particular date that is set based on the phase of the moon.  It can be extremely difficult to accurately figure the date of this holiday in the future or past programmatically.  There are many approaches to mathematically finding the phase of the moon on any given date, the problem being that each approach uses slightly different versions of time and calendars.  Therefore I do not claim this tool to be accurate forever.  I've checked the dates of Easter until 2018 and they appear accurate with Western Calendars.  After that, we'll see how well the code holds up.  If you have any experience finding the date of Easter I'd love to have your input.  Find me on Github.</p>
        </section>
      </div>

    </div>

    <footer>
      <div class="container">
        <p class="muted credit right">
          <a href="https://github.com/abaumer/churchcalendar" class="btn "><i class="icon-star"></i> github</a> &nbsp; A project by <a href="https://twitter.com/abaumer">Austin</a></p>
      </div>
    </footer>


    <SCRIPT TYPE="text/javascript">

      var currentSeason = "";

      if (document.documentElement.clientWidth < 600) {
        document.getElementById("chartBox").innerHTML = "<canvas id='seasonsChart' width='240' height='240'></canvas>";
      } else {
        document.getElementById("chartBox").innerHTML = "<canvas id='seasonsChart' width='400' height='400'></canvas>";
      }

      function addChart() {
        var ctx = document.getElementById("seasonsChart").getContext("2d");
        // Season Chart Arrays 
        // order:  epiphany, OT, lent, easter, pente, ot, advnt, christmas
        var s1=[{value:22,color:"#FFFFD5"},{value:20,color:"#87A999"},{value:18,color:"#444"},{value:20,color:"#E9B955"},{value:22,color:"#EF5A6E"},{value:24,color:"#87A999"},{value:30,color:"#454056"},{value:24,color:"#E9B955"}],
            s2=[{value:24,color:"#FFFFD5"},{value:22,color:"#87A999"},{value:20,color:"#444"},{value:18,color:"#E9B955"},{value:20,color:"#EF5A6E"},{value:22,color:"#87A999"},{value:24,color:"#454056"},{value:30,color:"#E9B955"}],
            s3=[{value:30,color:"#FFFFD5"},{value:24,color:"#87A999"},{value:22,color:"#444"},{value:20,color:"#E9B955"},{value:18,color:"#EF5A6E"},{value:20,color:"#87A999"},{value:22,color:"#454056"},{value:24,color:"#E9B955"}],
            s4=[{value:24,color:"#FFFFD5"},{value:30,color:"#87A999"},{value:24,color:"#444"},{value:22,color:"#E9B955"},{value:20,color:"#EF5A6E"},{value:18,color:"#87A999"},{value:20,color:"#454056"},{value:22,color:"#E9B955"}],
            s5=[{value:22,color:"#FFFFD5"},{value:24,color:"#87A999"},{value:30,color:"#444"},{value:24,color:"#E9B955"},{value:22,color:"#EF5A6E"},{value:20,color:"#87A999"},{value:18,color:"#454056"},{value:20,color:"#E9B955"}],
            s6=[{value:20,color:"#FFFFD5"},{value:22,color:"#87A999"},{value:24,color:"#444"},{value:30,color:"#E9B955"},{value:24,color:"#EF5A6E"},{value:22,color:"#87A999"},{value:20,color:"#454056"},{value:18,color:"#E9B955"}],
            s7=[{value:18,color:"#FFFFD5"},{value:20,color:"#87A999"},{value:22,color:"#444"},{value:24,color:"#E9B955"},{value:30,color:"#EF5A6E"},{value:24,color:"#87A999"},{value:22,color:"#454056"},{value:20,color:"#E9B955"}],
            s8=[{value:20,color:"#FFFFD5"},{value:18,color:"#87A999"},{value:20,color:"#444"},{value:22,color:"#E9B955"},{value:24,color:"#EF5A6E"},{value:30,color:"#87A999"},{value:24,color:"#454056"},{value:22,color:"#E9B955"}];
        // Set chart array for current Season
        var data = <?php echo "s" . get_seasons('current', 3, $this_year); ?>;
        // Set Current Season ID
        currentSeason = "<?php echo get_seasons('current', 3, $this_year); ?>";

        new Chart(ctx).PolarArea(data,{
                scaleShowLabels : false,
                scaleShowLine : false,
                segmentShowStroke : true,
                segmentStrokeColor : "rgba(0,0,0,.2)",
                animationEasing : "easeOutExpo"
        });
      }

      addChart();
     
    </SCRIPT>
  </body>
</html>
