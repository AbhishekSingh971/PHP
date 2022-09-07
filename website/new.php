<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            user-select: none;
            background-color: black;
            color: blanchedalmond;
        }

        .p {
            text-align: justify;
        }

        div>p {
            text-indent: 50px;
            letter-spacing: 2px;
            line-height: 30px;
            word-spacing: 10px;
        }

        .space {
            line-height: 1.5;
            padding: 10px;
            margin-bottom: 20px;
            height: 80px;
            width: 77%;
        }

        h1 {
            position: fixed;
            opacity: 0.8;
            animation-name: head;
            animation-duration: 20s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
            background-color: darkcyan;
            color: darkorange;
            font-size: 30px;
            width: 80%;
            font-weight: 400;
            line-height: 1.5;
            padding: 10px;
            margin-bottom: 25px;
            border: 1px solid blanchedalmond;
            border-radius: 20px;
            text-align: center;
            font-family: monospace;
            box-shadow: 0.6em 10px 20px;
        }

        .user {
            white-space: nowrap;
            float: right;
            flex-direction: column-reverse;
            width: 15%;
            text-align: center;
            font-size: large;
            outline: 5px solid darkturquoise;
        }

        .user a {
            padding: 10px;
            margin: 10px;
            border-radius: 10px;
            border: 2px solid darkorange;
        }

        .navigation a,
        .user {
            display: inline-flex;
            padding-right: 10px;
            /* flex-direction: row; */
            text-decoration: none;
            margin-right: 10px;
        }

        .navigation {
            margin-bottom: 20px;
            white-space: nowrap;
            height: 55px;
            overflow: auto;
            width: 82%;
            font-size: larger;
            display: block;
            border-bottom: 5px double dodgerblue;
        }

        .activeli {
            border: 2px solid wheat;
            background-color: whitesmoke;
            color: black;
            padding: 5px;
            border-radius: 10px;
        }

        a:hover:not(.activeli) {
            border: 2px dotted darkcyan;
            color: whitesmoke;
            padding: 5px;
        }

        @keyframes head {
            0% {
                background-color: darkcyan;
                color: darkorange;
            }

            50% {
                background-color: coral;
                color: darkorchid;
            }

            100% {
                background-color: darkcyan;
                color: darkorange;
            }
        }

        div.circule {
            height: 70px;
            width: 110px;
            float: right;
            border-radius: 50px;
            border: 2px solid wheat;
            animation-name: right;
            animation-timing-function: linear;
            animation-duration: 5s;
            animation-iteration-count: infinite;
            animation-direction: alternate;
            opacity: 1.2;
        }

        @keyframes right {
            25% {
                margin-top: 10px;
                border-top: 10px solid darkblue;
                width: 15%;
            }

            50% {
                border-right: 5px solid darkcyan;
            }

            75% {
                border-bottom: 10px solid darkred;
            }

            100% {
                border-left: 10px solid darkseagreen
            }
        }
        div.mode button{
            border:2px solid darkorange;
            border-radius:20px;
            margin:10px;
            padding:10px;
        }
        .backbtn{
            flex:left;
        }
        .nextbtn{
            flex:right;
        }
        .btn button{
            padding:10px;
            font-size:large;
            border:2px solid black;
            border-radius:20px;
            background-color: black;
        }
    </style>
</head>

<body id="body">
    <div class=circule></div>
    <h1>Gadgets</h1>
    <div class="space"></div>

    
    <div class="user" style="float:right">
        <?php
        if (count($_SESSION) > 0) {
            echo "<a href='Logout_page.php'>Logout</a>";
        } else {
            echo "<a href='signup_page.php'>Signup</a>";
        }
        ?>
        <a href='http://localhost/website/other/website_session_on_diff_page.php'>
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
    <div class="navigation">
        <a class="activeli" href="gadget.php">Home</a>
        <a href="SmartPhones.html">SmartPhones</a>
        <a href="Laptop.html">Laptop</a>
        <a href="#">Ipad</a>
        <a href="#">Accessory</a>
        <a href="#">Television</a>
        <a href="#">Camera</a>
        <a href="#">VR-Box</a>
        <a href="#">Home Threators</a>
    </div>
    
    <div class="mode" style="float:right;">
        <button onclick="document.getElementById('body').style='background-color:azure;color:black;'">Light Mode</button>
        <button onclick="document.getElementById('body').style='background-color: black;color: blanchedalmond;'">Dark mode</button>
    </div>

    <p style="text-indent: 50px;letter-spacing: 2px;line-height:30px;">A gadget is a mechanical device or any ingenious article.Gadgets are sometimes referred to as gizmos.</p>
    <h3>HISTORY</h3>
    <hr>
    <img src="https://cdn.vox-cdn.com/thumbor/HOBzegwV2CJRJDWJyh71nYq8gEE=/0x0:2625x1907/1200x800/filters:focal(1103x744:1523x1164)/cdn.vox-cdn.com/uploads/chorus_image/image/52187575/jbareham_160418_0931_0086_FINAL_NO_BUFFER_5MB_02.0.0.jpeg" alt="gadget.img" style="float:right;width:40%;height:auto;padding:10px;">
    <div class="p">
        <p>The etymology of the word is disputed. The word first appears as reference to an 18th-century tool in glassmaking
            that was developed as a spring pontil.As stated in the glass dictionary published by the Corning Museum of
            Glass, a gadget is a metal rod with a spring clip that grips the foot of a vessel and so avoids the use of a
            pontil. Gadgets were first used in the late 18th century.According to the Oxford English Dictionary, there
            is anecdotal (not necessarily true) evidence for the use of "gadget" as a placeholder name for a technical item
            whose precise name one can't remember since the 1850s; with Robert Brown's 1886 book Spunyarn and Spindrift, A
            sailor boy’s log of a voyage out and home in a China tea-clipper containing the earliest known usage in
            print.</p>
            
            <p> A widely circulated story holds that the word gadget was "invented" when Gaget, Gauthier & Cie, the company
                behind the repoussé construction of the Statue of Liberty (1886), made a small-scale version of the monument and
                named it after their firm; however this contradicts the evidence that the word was already used before in
                nautical circles, and the fact that it did not become popular, at least in the USA, until after World War I.
            Other sources cite a derivation from the French gâchette which has been applied to various pieces of a firing
            mechanism, or the French gagée, a small tool or accessory.</p>

        <p> The October 1918 issue of Notes and Queries contains a multi-article entry on the word "gadget" (12 S. iv. 187).
            H. Tapley-Soper of The City Library, Exeter, writes:</p>

        <blockquote cite="" style="text-indent: 50px;letter-spacing: 2px;line-height:30px;">A discussion arose at the Plymouth meeting of the Devonshire Association in 1916 when it was
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

        <blockquote cite="" style="text-indent: 50px;letter-spacing: 2px;line-height:30px;">A characteristic class of US products––perhaps the most characteristic––is a small
            self-contained
            unit of high
            performance in relation to its size and cost, whose function is to transform some undifferentiated set of
            circumstances to a condition nearer human desires. The minimum of skills is required in its installation and
            use, and it is independent of any physical or social infrastructure beyond that by which it may be ordered from
            catalogue and delivered to its prospective user. A class of servants to human needs, these clip-on devices,
            these portable gadgets, have coloured American thought and action far more deeply––I suspect––than is commonly
            understood.</blockquote>
    </div>
    <br>
    <h3 align="center">APPLICATION GADGETS</h3>
    <hr>
    <div class="p">
        <p>In the software industry, "Gadget" refers to computer programs that provide services without needing an independent application to be launched for each one, but instead run in an environment that manages multiple gadgets. There are several implementations based on existing software development techniques, like JavaScript, form input, and various image formats. Proprietary formats include Google Desktop, Google Gadgets, Microsoft Gadgets, the AmigaOS Workbench and dashboard software Apple Widgets.
            The earliest[citation needed] documented use of the term gadget in context of software engineering was in 1985 by the developers of AmigaOS, the operating system of the Amiga computers (intuition.library and also later gadtools.library). It denotes what other technological traditions call GUI widget—a control element in graphical user interface. This naming convention remains in continuing use (as of 2008) since then.</p>
        <p>The X11 windows system 'Intrinsics' also defines gadgets and their relationship to widgets (buttons, labels etc.). The gadget was a windowless widget which was supposed to improve the performance of the application by reducing the memory load on the X server. A gadget would use the Window id of its parent widget and had no children of its own
            It is not known whether other software companies are explicitly drawing on that inspiration when featuring the word in names of their technologies or simply referring to the generic meaning. The word widget is older in this context. In the movie "Back to School" from 1986 by Alan Metter, there is a scene where an economics professor Dr. Barbay, wants to start for educational purposes a fictional company that produces "widgets: It's a fictional product."</p>
    </div>
    <div class="btn">
    <button class="backbtn" ><a href="#">Back</a></button>
    <button class="nextbtn" ><a href="#">Next</a></button>
    </div>
</body>

</html>