<?php
session_start();
?>
<!doctype html>
<html lan="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gadgets</title>
  <link rel="icon" type="image/x-icon" href=http://localhost/gadget%20photos/1260370.png>
  <link rel="stylesheet" href=http://localhost/website/styles.css>
</head>

<body  id="body" bgcolor=rgb(0,200,204)>
  <h1><B>Gadgets</B></h1>
  <div class="navigation">
    <a class="activeli" href="gadget.php">Home</a>
    <a href="SmartPhones.php">SmartPhones</a>
    <a href="Laptop.html">Laptop</a>
    <a href="#">Ipad</a>
    <a href="#">Accessory</a>
    <a href="#">Television</a>
    <a href="#">Camera</a>
    <a href="#">VR-Box</a>
    <a href="#">Home Threators</a>
    <?php
    if (count($_SESSION) > 0) {
      echo "<a href='Logout_page.php' style='float:right;background-color: rgb(241, 140, 15);'>Logout</a>";
    } else {
      echo "<a href='signup_page.php' style='float:right;background-color: rgb(241, 140, 15);'>Signup</a>";
    }
    ?>
    <a href='http://localhost/website/Login_page.php' class='right' style='float:right;background-color: rgb(243, 138, 10);'>
      <?php
      // session_destroy();
      if (count($_SESSION) > 0) {
        echo $_SESSION['email'];
      } else {
        echo "Login";
      }
      ?>
    </a>
  </div>
  <hr>
  <br>

  <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src=http://localhost/gadget%20photos/vpavic_210916_untitled_0027.webp style="width:100%;height:600px;">
      <div class="text">SmartPhones</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src=http://localhost/gadget%20photos/joshua-woroniecki-lzh3hPtJz9c-unsplash.jpg style="width:100%;height:600px;">
      <div class="text">Laptops</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src=http://localhost/gadget%20photos/Apple-holiday-gift-guide.webp style="width:100%;height:600px;">
      <div class="text">Accessory</div>
    </div>

  </div>
  <br>

  <div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>
  
  <script src="styles.js"></script>
  <p>A gadget is a mechanical device or any ingenious article.Gadgets are sometimes referred to as gizmos.</p>

  <div class="mode" style="float:right;">
    <button onclick="document.getElementById('body').style='background-color:azure;color:black;'">Light Mode</button>
    <button onclick="document.getElementById('body').style='background-color: black;color: blanchedalmond;'">Dark mode</button>
  </div>

  <h3>HISTORY</h3>
  <hr>
  <img src=http://localhost/gadget%20photos/Gadgets.jpeg alt="gadget.img" style="float:right;width:40%;height:auto;padding:10px;">
  <div class="p">
    <p>The etymology of the word is disputed. The word first appears as reference to an 18th-century tool in glassmaking
      that was developed as a spring pontil.As stated in the glass dictionary published by the Corning Museum of
      Glass, a gadget is a metal rod with a spring clip that grips the foot of a vessel and so avoids the use of a
      pontil. Gadgets were first used in the late 18th century.According to the Oxford English Dictionary, there
      is anecdotal (not necessarily true) evidence for the use of "gadget" as a placeholder name for a technical item
      whose precise name one can't remember since the 1850s; with Robert Brown's 1886 book Spunyarn and Spindrift, A
      sailor boy's log of a voyage out and home in a China tea-clipper containing the earliest known usage in
      print.</p>

    <p> A widely circulated story holds that the word gadget was "invented" when Gaget, Gauthier & Cie, the company
      behind the repoussé construction of the Statue of Liberty (1886), made a small-scale version of the monument and
      named it after their firm; however this contradicts the evidence that the word was already used before in
      nautical circles, and the fact that it did not become popular, at least in the USA, until after World War I.
      Other sources cite a derivation from the French gâchette which has been applied to various pieces of a firing
      mechanism, or the French gagée, a small tool or accessory.</p>

    <p> The October 1918 issue of Notes and Queries contains a multi-article entry on the word "gadget" (12 S. iv. 187).
      H. Tapley-Soper of The City Library, Exeter, writes:</p>

    <blockquote cite="">A discussion arose at the Plymouth meeting of the Devonshire Association in 1916 when it was
      suggested that this
      word should be recorded in the list of local verbal provincialisms. Several members dissented from its inclusion
      on the ground that it is in common use throughout the country; and a naval officer who was present said that it
      has for years been a popular expression in the service for a tool or implement, the exact name of which is
      unknown or has for the moment been forgotten. I have also frequently heard it applied by motor-cycle friends to
      the collection of fitments to be seen on motor cycles. 'His handle-bars are smothered in gadgets' refers to such
      things as speedometers, mirrors, levers, badges, mascots, &c., attached to the steering handles. The 'jigger' or
      short-rest used in billiards is also often called a 'gadget'; and the name has been applied by local platelayers
      to the 'gauge' used to test the accuracy of their work. In fact, to borrow from present-day Army slang, 'gadget'
      is applied to 'any old thing.'</blockquote>

    <p>The usage of the term in military parlance extended beyond the navy. In the book "Above the Battle" by Vivian
      Drake, published in 1918 by D. Appleton & Co., of New York and London, being the memoirs of a pilot in the
      British Royal Flying Corps, there is the following passage: "Our ennui was occasionally relieved by new gadgets
      -- "gadget" is the Flying Corps slang for invention! Some gadgets were good, some comic and some
      extraordinary."</p>

    <p> By the second half of the twentieth century, the term "gadget" had taken on the connotations of compactness and
      mobility. In the 1965 essay "The Great Gizmo" (a term used interchangeably with "gadget" throughout the essay),
      the architectural and design critic Reyner Banham defines the item as:</p>

    <blockquote cite="">A characteristic class of US products--perhaps the most characteristic––is a small
      self-contained
      unit of high
      performance in relation to its size and cost, whose function is to transform some undifferentiated set of
      circumstances to a condition nearer human desires. The minimum of skills is required in its installation and
      use, and it is independent of any physical or social infrastructure beyond that by which it may be ordered from
      catalogue and delivered to its prospective user. A class of servants to human needs, these clip-on devices,
      these portable gadgets, have coloured American thought and action far more deeply––I suspect––than is commonly
      understood.</blockquote>
  </div>

  <h2>Choose a Gadget that is right for you</h2>
  <hr>
  <br>

  <div class="gallery">
    <a target="_blank" href="SmartPhones.php">
      <img src=http://localhost/gadget%20photos/iphone-13-pro-max-blue-select.png alt="SmartPhone.jpg" width="200" height="200">
    </a>
    <div class="desc">Exclusive deals on SmartPhone<br>Buy now,before it's to late</div>
  </div>

  <div class="gallery">
    <a target="_blank" href="latop.html">
      <img src=http://localhost/gadget%20photos/best_laptops_thumb1200_4-3.webp alt="Laptop.jpg" width="600" height="400">
    </a>
    <div class="desc">Buy new Exclusive laptop </div>
  </div>

  <div class="gallery">
    <a target="_blank" href="https://www.croma.com/campaign/new-at-croma/c/802?q=%3ALatestArrival%3Acategory%3A95%3Acategory%3A97%3AZAStatusFlag%3Atrue">
      <img src=http://localhost/gadget%20photos/120903-tablets-news-buyer-s-guide-best-tablets-image19-yjhe1oks3q.jpg alt="Ipads" width="200" height="200">
    </a>
    <div class="desc">Buy you new exclusive Ipad</div>
  </div>

  <div class="gallery">
    <a target="_blank" href="https://www.croma.com/campaign/new-at-croma/c/802?q=%3ALatestArrival%3Acategory%3A95%3Acategory%3A97%3AZAStatusFlag%3Atrue">
      <img src=http://localhost/gadget%20photos/best-Apple-gadgets-featured-image-1200x675.jpg alt=Accessory.jpg width="400" height="400">
    </a>
    <div class="desc">Buy new accessory of everythhing</div>
  </div>

  <div class="gallery">
    <a target="_blank" href="https://www.croma.com/campaign/new-at-croma/c/802?q=%3ALatestArrival%3Acategory%3A95%3Acategory%3A97%3AZAStatusFlag%3Atrue">
      <img src=http://localhost/gadget%20photos/3tQfZWCFCLVbkQ5ZyaPaTc.jpg alt="television.jpg" width="400" height="400">
    </a>
    <div class="desc">Exclusive deals on Televisions<br>Buy now,before it's to late</div>
  </div>

  <div class="gallery">
    <a target="_blank" href="https://www.croma.com/campaign/new-at-croma/c/802?q=%3ALatestArrival%3Acategory%3A95%3Acategory%3A97%3AZAStatusFlag%3Atrue">
      <img src=http://localhost/gadget%20photos/sony_alpha1.webp alt="Camera.jpg" width="200" height="200">
    </a>
    <div class="desc">Buy new Exclusive Camera </div>
  </div>

  <div class="gallery">
    <a target="_blank" href="https://www.croma.com/campaign/new-at-croma/c/802?q=%3ALatestArrival%3Acategory%3A95%3Acategory%3A97%3AZAStatusFlag%3Atrue">
      <img src=http://localhost/gadget%20photos/71XaBnna07L._AC_SL1500_.jpg alt="virtualrealty.jpg" width="600" height="400">
    </a>
    <div class="desc">Buy you new exclusive VR box</div>
  </div>

  <div class="gallery">
    <a target="_blank" href="https://www.croma.com/campaign/new-at-croma/c/802?q=%3ALatestArrival%3Acategory%3A95%3Acategory%3A97%3AZAStatusFlag%3Atrue">
      <img src=http://localhost/gadget%20photos/fc684f0d8a92e723d75636f9a012e05f.jpg width="200" height="200">
    </a>
    <div class="desc">Buy your new Home thriater</div>
  </div>

  <div class="clearfix"></div>
  <hr>
  <h3>Application gadgets</h3>
  <hr>
  <img src=http://localhost/gadget%20photos/galaxy-tab-s8-ultra-lead.jpg alt="gadget.img" style="float:right;width:40%;height:auto;padding:10px;">

  <div class="p">
    <p>In the software industry, "Gadget" refers to computer programs that provide services without needing an independent application to be launched for each one, but instead run in an environment that manages multiple gadgets. There are several implementations based on existing software development techniques, like JavaScript, form input, and various image formats. Proprietary formats include Google Desktop, Google Gadgets, Microsoft Gadgets, the AmigaOS Workbench and dashboard software Apple Widgets.</p>
    <p>The earliest[citation needed] documented use of the term gadget in context of software engineering was in 1985 by the developers of AmigaOS, the operating system of the Amiga computers (intuition.library and also later gadtools.library). It denotes what other technological traditions call GUI widget—a control element in graphical user interface. This naming convention remains in continuing use (as of 2008) since then.</p>
    <p>The X11[8] windows system 'Intrinsics'[9] also defines gadgets and their relationship to widgets (buttons, labels etc.). The gadget was a windowless widget which was supposed to improve the performance of the application by reducing the memory load on the X server. A gadget would use the Window id of its parent widget and had no children of its own</p>
    <p>It is not known whether other software companies are explicitly drawing on that inspiration when featuring the word in names of their technologies or simply referring to the generic meaning. The word widget is older in this context. In the movie "Back to School" from 1986 by Alan Metter, there is a scene where an economics professor Dr. Barbay, wants to start for educational purposes a fictional company that produces "widgets: It's a fictional product."</p>
  </div>
  <hr>

  <div class="footer">
    <a href="gadget.php">Home</a>
    <a href="#">News</a>
    <a href="#">Contact Us</a>
  </div>

  <div class="button" align="right">
    <a href="http://google.com"><button class="btn">Back</button></a>
    <a href="SmartPhones.php"><button class="btn">Next</button></a>
  </div>
</body>

</html>