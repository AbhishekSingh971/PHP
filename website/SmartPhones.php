<?php
session_start()
?>
<!doctype html>
<html lan="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadgets</title>
    <link rel="icon" type="image/x-icon" href=http://localhost/gadget%20photos/1260370.png>
    <link rel="stylesheet" href="styles.css">
</head>

<body bgcolor=rgb(0,200,204)>
    <h1 class="h1" style="border:10px solid rgb(13,153,127);"><B>Android Bazzar</B></h1>
    <div class="navigation">
        <a href="gadget.php">Home</a>
        <a class="activeli" href="SmartPhones.php">SmartPhones</a>
        <a href="Laptop.php">Laptop</a>
        <a href="#">Ipad</a>
        <a href="#">Television</a>
        <a href="#">Accessory</a>
        <a href="#">Camera</a>
        <a href="#">VR</a>
        <a href="#">Box</a>
        <a href="#">Home Threators</a>
        <?php
        if (count($_SESSION) > 0) {
            echo "<a href='Logout_page.php' style='float:right;background-color: rgb(241, 140, 15);'>Logout</a>";
        } else {
            echo "<style='display : none;'>";
        }
        ?>
        <a href='#' class='right' style='float:right;background-color: rgb(243, 138, 10);'>
            <?php
            // session_destroy();
            if (count($_SESSION) > 0) {
                echo $_SESSION['email'];
            } else {
                echo "<style='display : none;'>";
            }
            ?>
        </a>
    </div>
    <hr>
    <br>
    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src=http://localhost/gadget%20photos/iPhone-11-Pro.jpg style="width:100%;height:600px;">
            <div class="text">Apple</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src=http://localhost/gadget%20photos/oneplus-nord-ce2.jpg style="width:100%;height:600px;">
            <div class="text">One Plus</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src=http://localhost/gadget%20photos/ajohnson_220216_5032_0001.webp style="width:100%;height:600px;">
            <div class="text">samsung</div>
        </div>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
    <script src="styles.js"></script>
    <hr>
    <h2 class="h2">Apple</h2>
    <h3 font-color="black">The Best Phone to Buy </h3>
    <hr>
    <p>Prices for flagship phones are higher than ever, and it’s unlikely that they’ll ever come back down. The
        absolutely premium phones, like the Apple iPhone 13 Pro Max and Samsung Galaxy Z Fold 3 5G, now cost well over
        $1,000, or about the price of a good laptop. But, as the ceiling gets higher, devices in the more reasonable
        $600 to $800 range have gotten even more capable. In fact, our pick for the best overall phone is the $829 Apple
        iPhone 13, and two of Google’s Pixel phones included here lean toward midrange pricing rather than all-out
        flagship.</p>
    <br>
    <p>And if you want to get the best smartphone on a budget, you can find something really good for under $500 or even
        less. For those recommendations, you can check out our guide to budget smartphones.</p>
    <br>
    <p>It’s also possible to hang onto your phone for longer than ever as device manufacturers offer more years of
        software support and upgrade cycles slow down. And generally speaking, all of the devices featured here have
        great cameras, nice screens, good battery life, and are fast enough to keep up with your day to day. Picking the
        right phone is mostly a matter of preference. Find the one that suits you best, and you’ll be rewarded with many
        years of use before it’s time to start phone shopping again.</p>
    <h3>Apple iphone 13</h3>

    <div class="gallery">
        <div class="desc">In Just<br>$699</div>
        <a target="_blank" href="SmartPhones.html">
            <img src="A:\semester 1\abhi\Gadgets\vpavic_210916_4760_0323.webp" alt=Accessory.jpg width="200" height="200">
        </a>
        <a href="forms.php"><button class="btn">Buy now</button></a>
    </div>

    <div class="gallery">
        <div class="desc">In Just<br>$829</div>
        <a target="_blank" href="SmartPhones.html">
            <img src="A:\semester 1\abhi\Gadgets\vpavic_210916_4760_0069.webp" alt="iPhone.jpg" width="200" height="200">
        </a>
        <a href="forms.php"><button class="btn">Buy now</button></a>
    </div>

    <div class="gallery">
        <div class="desc">In Just<br>$999 </div>
        <a target="_blank" href="SmartPhones.html">
            <img src="A:\semester 1\abhi\Gadgets\Apple-iPhone-13-Pro-Smartphones-491997729-i-2-1200Wx1200H.jpeg" alt="iPhone.jpg" width="200" height="200">
        </a>
        <a href="forms.php"><button class="btn">Buy now</button></a>
    </div>

    <div class="gallery">
        <div class="desc">In Just<br>$1099</div>
        <a target="_blank" href="SmartPhones.html">
            <img src="A:\semester 1\abhi\Gadgets\iphone-13-pro-max-blue-select.png" alt="Ipads" width="200" height="200">
        </a>
        <a href="forms.php"><button class="btn">Buy now</button></a>
    </div>

    <br>
    <div class="clearfix"></div>
    <br>

    <hr>
    <h2 class="h22">One Plus</h2>
    <h3 font-color="black">The Best Phone to Buy </h3>
    <hr>
    <p>OnePlus Technology (Shenzhen) Co., Ltd. (一加科技) is a Chinese consumer electronics manufacturer headquartered in
        Shenzhen, Guangdong province, in the Tairan Building (泰然大厦) at the Chegong Temple (车公庙) subdistrict of Futian
        District.It was founded by Pete Lau and Carl Pei in December 2013, and is currently majority-owned by Oppo as
        its only shareholder, which is a subsidiary of BBK Electronics along with Vivo, Realme and iQOO. The company is
        best known for making smartphones, and officially serves 34 countries and regions around the world as of July
        2018.</p>
    <br>
    <p>And if you want to get the best smartphone on a budget, you can find something really good for under $15,000 or even
        less. For those recommendations, you can check out our guide to budget smartphones.</p>
    <br>
    <p>It’s also possible to hang onto your phone for longer than ever as device manufacturers offer more years of
        software support and upgrade cycles slow down. And generally speaking, all of the devices featured here have
        great cameras, nice screens, good battery life, and are fast enough to keep up with your day to day. Picking the
        right phone is mostly a matter of preference. Find the one that suits you best, and you’ll be rewarded with many
        years of use before it’s time to start phone shopping again.</p>
    <h3>One Plus series</h3>

    <div class="gallery">
        <div class="desc">In Just<br>₹24,999</div>
        <a target="_blank" href="SmartPhones.html">
            <img src="A:\semester 1\abhi\Gadgets\oneplus.jpg" alt=Oneplus.jpg width="200" height="200">
        </a>
        <a href="forms.php"><button class="btn">Buy now</button></a>
    </div>

    <div class="gallery">
        <div class="desc">In Just<br>₹46,999</div>
        <a target="_blank" href="SmartPhones.html">
            <img src="A:\semester 1\abhi\Gadgets\9rt.jpg" alt="oneplus.jpg" width="200" height="200">
        </a>
        <a href="forms.php"><button class="btn">Buy now</button></a>
    </div>

    <div class="gallery">
        <div class="desc">In Just<br>₹19,999 </div>
        <a target="_blank" href="SmartPhones.html">
            <img src="A:\semester 1\abhi\Gadgets\OnePlus-Nord-CE-2-Lite-2-1.webp" alt="oneplus.jpg" width="200" height="200">
        </a>
        <a href="forms.php"><button class="btn">Buy now</button></a>
    </div>

    <div class="gallery">
        <div class="desc">In Just<br>₹71,999</div>
        <a target="_blank" href="SmartPhones.html">
            <img src="A:\semester 1\abhi\Gadgets\OnePlus-10-Pro-Render-Leak-1.webp" alt="oneplus.jpg" width="200" height="200">
        </a>
        <a href="forms.php"><button class="btn">Buy now</button></a>
    </div>
    <br>
    <div class="clearfix"></div>
    <br>

    <hr>
    <h2 class="h22">Samsung Galaxy</h2>
    <h3 font-color="black">The Best Phone to Buy </h3>
    <hr>
    <p>Prices for flagship phones are higher than ever, and it’s unlikely that they’ll ever come back down. The
        absolutely premium phones, like the Apple iPhone 13 Pro Max and Samsung Galaxy Z Fold 3 5G, now cost well over
        $1,000, or about the price of a good laptop. But, as the ceiling gets higher, devices in the more reasonable
        $600 to $800 range have gotten even more capable. In fact, our pick for the best overall phone is the $829 Apple
        iPhone 13, and two of Google’s Pixel phones included here lean toward midrange pricing rather than all-out
        flagship.</p>
    <br>
    <p>And if you want to get the best smartphone on a budget, you can find something really good for under $500 or even
        less. For those recommendations, you can check out our guide to budget smartphones.</p>
    <br>
    <p>It’s also possible to hang onto your phone for longer than ever as device manufacturers offer more years of
        software support and upgrade cycles slow down. And generally speaking, all of the devices featured here have
        great cameras, nice screens, good battery life, and are fast enough to keep up with your day to day. Picking the
        right phone is mostly a matter of preference. Find the one that suits you best, and you’ll be rewarded with many
        years of use before it’s time to start phone shopping again.</p>
    <br>
    <hr>
    <h3>Samsung Galaxy series</h3>
    <div class="gallery">
        <div class="desc">In Just<br>$699</div>
        <a target="_blank" href="SmartPhones.html">
            <img src="A:\semester 1\abhi\Gadgets\ajohnson_220216_5032_0004sq.webp" alt=samsung.jpg width="200" height="200">
        </a>
        <a href="forms.php"><button class="btn">Buy now</button></a>
    </div>

    <div class="gallery">
        <div class="desc">In Just<br>$829</div>
        <a target="_blank" href="SmartPhones.html">
            <img src="A:\semester 1\abhi\Gadgets\vpavic_210916_4760_0069.webp" alt="iPhone.jpg" width="200" height="200">
        </a>
        <a href="forms.php"><button class="btn">Buy now</button></a>
    </div>

    <div class="gallery">
        <div class="desc">In Just<br>$999 </div>
        <a target="_blank" href="SmartPhones.html">
            <img src="A:\semester 1\abhi\Gadgets\Apple-iPhone-13-Pro-Smartphones-491997729-i-2-1200Wx1200H.jpeg" alt="iPhone.jpg" width="200" height="200">
        </a>
        <a href="forms.php"><button class="btn">Buy now</button></a>
    </div>

    <div class="gallery">
        <div class="desc">In Just<br>$1099</div>
        <a target="_blank" href="SmartPhones.html">
            <img src="A:\semester 1\abhi\Gadgets\iphone-13-pro-max-blue-select.png" alt="Ipads" width="200" height="200">
        </a>
        <a href="forms.php"><button class="btn">Buy now</button></a>
    </div>
    <br>
    <div class="clearfix"></div>
    <br>
    <hr>
    <br>

    <div class="footer">
        <a href="gadget.php">Home</a>
        <a href="#">News</a>
        <a href="#">Contact Us</a>
    </div>

    <div class="button" align="right">
        <a href="gadget.php"><button class="btn">Back</button></a>
        <a href="laptop.php"><button class="btn">Next</button></a>
    </div>
</body>

</html>