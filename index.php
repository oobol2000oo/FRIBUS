<?php
    include 'header.html';
?>

<!DOCTYPE html>
<html>
  <title>FRIBUS.TK</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <body>

    <!-- Side Navigation -->
    <!--<nav class="w3-sidenav w3-white w3-card-2 w3-animate-left" style="display:none" id="mySidenav">
      <h1 class="w3-xxxlarge w3-text-teal">Điều hướng</h1>
      <a href="javascript:void(0)" onclick="w3_close()" class="w3-closenav w3-xxxlarge w3-text-theme">Quay về <i class="fa fa-remove"></i></a>
      <a href="busmap.html">Tìm kiếm trạm xe buýt</a>
      <a href="cost.php">Tính chi phí dịch vụ</a>
      <a href="javascript:void(0)">Tính khoảng cách giữa các quận, huyện</a>
    </nav>-->
    <!-- Modal -->

    <div class="w3-row-padding w3-center w3-margin-top">
      <div class="w3-third">
        <div class="w3-card-2 w3-padding-top" style="min-height:460px">
          <h4>Tìm kiếm trạm xe buýt</h4><br>
          <a href="busmap.html">
            <i class="fa fa-map-marker w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
          </a>
          <p>Tìm kiếm trạm xe buýt gần nhất</p>
          <p>Đo độ dài lịch trình</p>
          <p>Hỗ trợ PC, Tablet, Smartphone</p>
        </div>
      </div>

      <div class="w3-third">
        <div class="w3-card-2 w3-padding-top" style="min-height:460px">
          <h4>Tính chi phí dịch vụ</h4><br>
          <a href="cost.php">
            <i class="fa fa-usd w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
          </a>
          <p>Dựa trên độ dài quảng đường</p>
        </div>
      </div>

      <div class="w3-third">
        <div class="w3-card-2 w3-padding-top" style="min-height:460px">
          <h4>Tính khoảng cách giữa các quận, huyện</h4><br>
          <i class="fa fa-map w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
          <p>Đo được khoảng cách 1 cách nhanh chóng, tiện lợi</p>
        </div>
      </div>
    </div>

    <!--Music
    <audio autoplay="autoplay" loop ="loop">
      <source src="http://data.chiasenhac.com/downloads/1725/3/1724807-8ccb2484/m4a/Canon%20-%20London%20Philharmonic%20Orchestra_Da%20%5BM4A%20500kbps%5D.m4a" type="audio/mp4" />
      <p>Your browser does not support HTML5 audio.</p>
    </audio>-->

<!--<div class="w3-container">
<hr>
<div class="w3-center">
  <h2>Color Classes</h2>
</div>

<div class="w3-row">
  <div class="w3-col w3-container m2 w3-red"><p>Red</p></div>
  <div class="w3-col w3-container m2 w3-blue"><p>Blue</p></div>
  <div class="w3-col w3-container m2 w3-blue-grey"><p>Blue Grey</p></div>
  <div class="w3-col w3-container m2 w3-teal"><p>Teal</p></div>
  <div class="w3-col w3-container m2 w3-yellow"><p>Yellow</p></div>
  <div class="w3-col w3-container m2 w3-orange"><p>Orange</p></div>
</div>

<hr>
<div class="w3-center">
  <h2>Built-In Responsiveness</h2>
  <p class="w3-large">Resize the page to see the effect!</p>
</div>
<br>

<div class="w3-row w3-border">
  <div class="w3-half w3-container w3-blue w3-border">
    <h5>w3-half</h5>
    <p>The w3-half class uses half (50%) of the screen window.</p>
    <p>On small screens (max 600 pixels) it automatically resizes to full screen width.</p>
  </div>
  <div class="w3-half w3-container">
    <h5>w3-half</h5>
  </div>
</div>
<br>

<div class="w3-row w3-border">
  <div class="w3-third w3-container w3-green">
    <h5>w3-third</h5>
    <p>The w3-third class uses one third (33.33%) of the screen widow.</p>
    <p>On small screens (max 600 pixels) it automatically resizes to full screen width.</p>
  </div>
  <div class="w3-third w3-container">
    <h5>w3-third</h5>
  </div>
  <div class="w3-third w3-container">
    <h5>w3-third</h5>
  </div>
</div>
<br>

<div class="w3-row w3-border">
  <div class="w3-quarter w3-container w3-red">
    <h5>w3-quarter</h5>
    <p>The w3-quarter class uses one quarter (25%) of the screen window.</p>
    <p>On small screens (max 600 pixels) it automatically resizes to full screen width.</p>
  </div>
  <div class="w3-quarter w3-container">
    <h5>w3-quarter</h5>
  </div>
  <div class="w3-quarter w3-container">
    <h5>w3-quarter</h5>
  </div>
  <div class="w3-quarter w3-container">
    <h5>w3-quarter</h5>
  </div>
</div>

<div class="w3-center">
  <h2>Containers</h2>
  <p>Use containers to create headers, sections and footers.</p>
</div>

<header class="w3-container w3-blue-grey">
  <h2>Header</h2>
</header>

<div class="w3-padding w3-white">
  <span onclick="this.parentElement.style.display='none'" class="w3-closebtn"><i class="fa fa-remove"></i></span>
  <h2>London</h2>
  <p>London is the capital city of England. It is the most populous city in the United Kingdom,
  with a metropolitan area of over 13 million inhabitants.</p>
  <p>Standing on the River Thames, London has been a major settlement for two millennia,
  its history going back to its founding by the Romans, who named it Londinium.</p>
  <p>By the way, you can add a close icon to all containers if you want the ability to hide them. Look to your right!</p>
</div>

<footer class="w3-container w3-blue-grey">
  <h5>Footer</h5>
  <p class="w3-opacity">Footer information goes here</p>
</footer>

<hr>
<div class="w3-center">
  <h2>Color Themes</h2>
  <p>The color themes have been designed to work harmoniously with each other.</p>
</div>
</div>

<div class="w3-row-padding">

<div class="w3-half">
<div class="w3-card white">
  <div class="w3-container w3-indigo">
    <h3>Theme Indigo</h3>
  </div>
  <div class="w3-container">
  <h3 class="w3-text-indigo">Movies 2014</h3>
  </div>
  <ul class="w3-ul w3-border-top">
    <li>
      <h3>Frozen</h3>
      <p>The response to the animations was ridiculous</p>
    </li>
    <li>
      <h3>The Fault in Our Stars</h3>
      <p>Touching, gripping and genuinely well made</p>
    </li>
    <li>
      <h3>The Avengers</h3>
      <p>A huge success for Marvel and Disney</p>
    </li>
  </ul>
  <div class="w3-container w3-indigo w3-large"><span class="w3-right">Next</span></div>
</div>
</div>

<div class="w3-half">
<div class="w3-card white">
  <div class="w3-container w3-theme">
    <h3>Theme</h3>
  </div>
  <div class="w3-container">
  <h3 class="w3-text-theme">Movies 2014</h3>
  </div>
  <ul class="w3-ul w3-border-top">
    <li>
      <h3>Frozen</h3>
      <p>The response to the animations was ridiculous</p>
    </li>
    <li>
      <h3>The Fault in Our Stars</h3>
      <p>Touching, gripping and genuinely well made</p>
    </li>
    <li>
      <h3>The Avengers</h3>
      <p>A huge success for Marvel and Disney</p>
    </li>
  </ul>
  <div class="w3-container w3-theme w3-large"><span class="w3-right">Next</span></div>
</div>
</div>
</div>

<div class="w3-container w3-center">
  <hr>
  <h3>Paper-like Cards with Shadows</h3>
</div>

<div class="w3-row-padding">

<div class="w3-third">
<div class="w3-card-2">
  <img src="img_car.jpg" alt="Car" style="width:100%">
  <div class="w3-container">
  <p>w3-card-2</p>
  </div>
</div>
</div>

<div class="w3-third">
<div class="w3-card-4">
  <img src="img_car.jpg" alt="Car" style="width:100%">
  <div class="w3-container">
  <p>w3-card-4</p>
  </div>
</div>
</div>

<div class="w3-third">
<div class="w3-card-8">
  <img src="img_car.jpg" alt="Car" style="width:100%">
  <div class="w3-container">
  <p>w3-card-8</p>
  </div>
</div>
</div>
</div>

<div class="w3-container">
  <hr>
  <div class="w3-center">
    <h2>Tables</h2>
    <p w3-class="w3-large">Don't worry. W3.CSS takes care of your tables.</p>
  </div>
<div class="w3-responsive w3-card-4">
<table class="w3-table w3-striped w3-bordered">
<thead>
<tr class="w3-theme">
  <th>First Name</th>
  <th>Last Name</th>
  <th>Points</th>
</tr>
</thead>
<tbody>
<tr>
  <td>Jill</td>
  <td>Smith</td>
  <td>50</td>
</tr>
<tr class="w3-white">
  <td>Eve</td>
  <td>Jackson</td>
  <td>94</td>
</tr>
<tr>
  <td>Adam</td>
  <td>Johnson</td>
  <td>67</td>
</tr>
</tbody>
</table>
</div>

<hr>
<h2 class="w3-center">Forms and Lists</h2>
</div>

<div class="w3-row-padding">

<div class="w3-half">
<form class="w3-container w3-card-4">

  <div class="w3-group">
    <input class="w3-input" type="text" required>
    <label class="w3-label w3-validate">Name</label>
  </div>
  <div class="w3-group">
    <input class="w3-input" type="text" required>
    <label class="w3-label w3-validate">Email</label>
  </div>
  <div class="w3-group">
    <input class="w3-input" type="text" required>
    <label class="w3-label">Subject</label>
  </div>

  <div class="w3-row">
  <div class="w3-half">
    <input id="milk" class="w3-check" type="checkbox" checked="checked">
    <label class="w3-validate">Milk</label>
    <br>
    <input id="sugar" class="w3-check" type="checkbox">
    <label class="w3-validate">Sugar</label>
    <br>
    <input id="lemon" class="w3-check" type="checkbox" disabled>
    <label class="w3-validate">Lemon (Disabled)</label>
    <br><br>
  </div>

  <div class="w3-half">
    <input id="male" class="w3-radio" type="radio" name="gender" value="male" checked>
    <label class="w3-validate">Male</label>
    <br>
    <input id="female" class="w3-radio" type="radio" name="gender" value="female">
    <label class="w3-validate">Female</label>
    <br>
    <input id="unknown" class="w3-radio" type="radio" name="gender" value="" disabled>
    <label class="w3-validate"> Don't know (Disabled)</label>
  </div>
  </div>

</form>
</div>
<div class="w3-half">
<div class="w3-card-4 w3-container">
<h2>Lists</h2>
<ul class="w3-ul w3-margin-bottom">
  <li>Jill</li>
  <li>Eve</li>
  <li>Adam</li>
</ul>
<br>
<ul class="w3-ul w3-border w3-hoverable">
  <li class="w3-theme">Jill</li>
  <li>Eve</li>
  <li>Adam</li>
  <li>Steve</li>
</ul>
<br>
</div>
</div>
</div>
<hr>

<h2 class="w3-center">Progress Bars</h2>
<div class="w3-container">
<p>The <strong><a href="w3css_progressbar.asp">w3-progressbar</a></strong>
class creates progress bars:</p>

<div class="w3-progress-container" style="height:30px;">
  <div id="myBar" class="w3-progressbar w3-theme" style="width:1%"></div>
</div><br>
<p class="w3-right" id="demoprgr">1%</p>
<button class="w3-btn w3-theme" onclick="move()">Click Me</button>
</div>
<hr>

<h2 class="w3-center">Slideshows</h2>
<div class="w3-content" style="max-width:800px;position:relative">

<img class="mySlides w3-animate-opacity" src="img_fjords.jpg" style="width:100%">
<img class="mySlides w3-animate-opacity" src="img_lights.jpg" style="width:100%">
<img class="mySlides w3-animate-opacity" src="img_mountains.jpg" style="width:100%">
<img class="mySlides w3-animate-opacity" src="img_forest.jpg" style="width:100%">

<a class="w3-btn-floating w3-hover-dark-grey" style="position:absolute;top:45%;left:0;" onclick="plusDivs(-1)">❮</a>
<a class="w3-btn-floating w3-hover-dark-grey" style="position:absolute;top:45%;right:0;" onclick="plusDivs(+1)">❯</a>
</div>

<div class="w3-container">
<hr>
<h2 class="w3-center">Navigation</h2>

<ul class="w3-navbar w3-theme">
  <li><a class="w3-dark-grey w3-padding-16" href="javascript:void(0)">Home</a></li>
  <li><a class="w3-padding-16" href="javascript:void(0)">Link 1</a></li>
  <li><a class="w3-padding-16" href="javascript:void(0)">Link 2</a></li>
  <li class="w3-dropdown-hover">
    <a class="w3-padding-16" href="javascript:void(0)">Dropdown <i class="fa fa-caret-down"></i></a>
    <div class="w3-dropdown-content w3-card-4">
      <a class="w3-padding-16" href="javascript:void(0)">Link 1</a>
      <a class="w3-padding-16" href="javascript:void(0)">Link 2</a>
      <a class="w3-padding-16" href="javascript:void(0)">Link 3</a>
    </div>
  </li>
  <li class="w3-right"><a class="w3-padding-16" href="javascript:void(0)"><i class="fa fa-search"></i></a></li>
</ul>

<hr>
<h2 class="w3-center">Accordions</h2>
<div class="w3-container">
<div class="w3-accordion">
  <button onclick="myAccFunc('Demo1')" class="w3-padding-16 w3-hover-dark-grey w3-btn-block w3-left-align">Open Section 1</button>
  <div id="Demo1" class="w3-accordion-content">
    <div class="w3-container">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
  <button onclick="myAccFunc('Demo2')" class="w3-padding-16 w3-hover-dark-grey w3-btn-block w3-left-align">Open Section 2</button>
  <div id="Demo2" class="w3-accordion-content">
    <a class="w3-text-black w3-padding-16" href="javascript:void(0)">Link 1</a>
    <a class="w3-text-black w3-padding-16" href="javascript:void(0)">Link 2</a>
    <a class="w3-text-black w3-padding-16" href="javascript:void(0)">Link 3</a>
  </div>
  <button onclick="myAccFunc('Demo3')" class="w3-padding-16 w3-hover-dark-grey w3-btn-block w3-left-align">Open Section 3</button>
  <div id="Demo3" class="w3-accordion-content w3-border">
    <div class="w3-container">
      <p>Accordion with Images:</p>
      <img src="img_fjords.jpg" style="width:30%;" class="w3-animate-zoom">
      <p>Trolltunga, Norway</p>
    </div>
  </div>
</div>
</div>

<hr>
<h2 class="w3-center">Tabs</h2>
<div class="w3-container">
<div class="w3-border">
<ul class="w3-navbar w3-light-grey">
  <li><a class="w3-btn testbtn" onclick="openCity(event, 'London')">London</a></li>
  <li><a class="w3-btn testbtn" onclick="openCity(event, 'Paris')">Paris</a></li>
  <li><a class="w3-btn testbtn" onclick="openCity(event, 'Tokyo')">Tokyo</a></li>
</ul>

<div id="London" class="w3-container city w3-animate-opacity">
  <h2>London</h2>
  <p>London is the capital city of England.</p>
  <p>It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
</div>

<div id="Paris" class="w3-container city w3-animate-opacity">
  <h2>Paris</h2>
  <p>Paris is the capital of France.</p>
  <p>The Paris area is one of the largest population centers in Europe, with more than 12 million inhabitants.</p>
</div>

<div id="Tokyo" class="w3-container city w3-animate-opacity">
  <h2>Tokyo</h2>
  <p>Tokyo is the capital of Japan.</p>
  <p>It is the center of the Greater Tokyo Area, and the most populous metropolitan area in the world.</p>
</div>
</div>
</div>

<hr>
<h2 class="w3-center">Buttons</h2>
<div class="w3-center">
  <br>
  <a class="w3-btn">Button</a>
  <a class="w3-btn w3-theme">Button</a>
  <a class="w3-btn w3-disabled">Button</a>
  <br><br>
  <a class="w3-btn-floating w3-teal"><i class="fa fa-plus"></i></a>
  <a class="w3-btn-floating w3-theme"><i class="fa fa-plus"></i></a>
  <a class="w3-btn-floating w3-disabled"><i class="fa fa-plus"></i></a>
  <br><br>
  <a class="w3-btn-floating-large w3-teal"><i class="fa fa-plus"></i></a>
  <a class="w3-btn-floating-large w3-theme"><i class="fa fa-plus"></i></a>
  <a class="w3-btn-floating-large w3-disabled"><i class="fa fa-plus"></i></a>
</div>
<br>
<div class="w3-center">
<div class="w3-dropdown-hover">
  <button class="w3-btn w3-theme w3-large">Dropdown <i class="fa fa-caret-down"></i></button>
  <div class="w3-dropdown-content w3-light-grey w3-grey w3-left-align">
    <a href="javascript:void(0)">Link 1</a>
    <a href="javascript:void(0)">Link 2</a>
    <a href="javascript:void(0)">Link 3</a>
  </div>
</div>
</div>

</div>

<hr>
<div class="w3-center">
  <h2>Pagination</h2>
  <ul class="w3-pagination w3-padding-32">
    <li><a href="javascript:void(0)">«</a></li>
    <li><a class="w3-theme" href="javascript:void(0)">1</a></li>
    <li><a href="javascript:void(0)">2</a></li>
    <li><a href="javascript:void(0)">3</a></li>
    <li><a href="javascript:void(0)">4</a></li>
    <li><a href="javascript:void(0)">5</a></li>
    <li><a href="javascript:void(0)">»</a></li>
  </ul>
</div>
<br>-->

    <!-- Script for Sidenav, Tabs, Accordions, Progress bars and slideshows -->
    <script>
      // Side navigation
      function w3_open() {
        var x = document.getElementById("mySidenav");
        x.style.width = "100%";
        x.style.textAlign = "center";
        x.style.fontSize = "50px";
        x.style.paddingTop = "10%";
        x.style.display = "block";
      }
      function w3_close() {
        document.getElementById("mySidenav").style.display = "none";
      }

      // Tabs
      function openCity(evt, cityName) {
        var i;
        var x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        var activebtn = document.getElementsByClassName("testbtn");
        for (i = 0; i < x.length; i++) {
            activebtn[i].className = activebtn[i].className.replace(" w3-dark-grey", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " w3-dark-grey";
      }

      var mybtn = document.getElementsByClassName("testbtn")[0];
      mybtn.click();

      // Accordions
      function myAccFunc(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
          x.className += " w3-show";
          x.previousElementSibling.className += " w3-dark-grey";
        } else {
          x.className = x.className.replace(" w3-show", "");
          x.previousElementSibling.className =
          x.previousElementSibling.className.replace(" w3-dark-grey", "");
        }
      }

      // Slideshows
      var slideIndex = 1;

      function plusDivs(n) {
        slideIndex = slideIndex + n;
        showDivs(slideIndex);
      }

      function showDivs(n) {
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length} ;
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
      }

      showDivs(1);

      // Progress Bars
      function move() {
        var elem = document.getElementById("myBar");
        var width = 1;
        var id = setInterval(frame, 10);
        function frame() {
          if (width == 100) {
            clearInterval(id);
          } else {
            width++;
            elem.style.width = width + '%';
            document.getElementById("demoprgr").innerHTML = width * 1  + '%';
          }
        }
      }
    </script>
  </body>
</html>

<?php
    include 'footer.html';
?>