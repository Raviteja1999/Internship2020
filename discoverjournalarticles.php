    <?php
        include "heading1.html";
        echo "<br>";
        include "navfinal.html";
        echo "<br>"
        ?>

    <!DOCTYPE html>
    <html lang="">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Title Page</title>

        
        </head>
        <body>

        
    <div class="moduletable" style="margin-top:6%;margin-bottom:6%" >

    <h3 class="text-center" >Discover Journal Articles</h3>

    <ul class="menu">
                            

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
    </script> 
    <script src="https://jgateplus.com/cdn/js/jgateplussearch.js"></script>
    <div style="border: thin solid #c1cdd1; width: 90%; height: auto;">
    <div id="searchBody">

    <div class="row1" style="width: 80%; margin-left: 1%; margin-top: 1%;">
    <div class="form-wrapper">
    <table style="background-color: #c1cdd1; border-radius: 3px;">
    <tr><td><input type="text" id="search" style="width:100px;"
        onkeypress="if (event.keyCode == 13) { searchFunction(); }"
        placeholder="Search-in-Journals" /></td><td>
    <div id="submit" onclick="searchFunction()">
        <img src=" https://jgateplus.com/cdn/images/jsearch3.png">
    </div></td></tr></table>
    </div>
    </div>


    <div class="row1" style="margin-left: 3%;">
    <span style="font-size: 10px;" class="searchBoxText"> 
    <a href="https://jgateplus.com/search//?spage=advancedsearch#advancedsearch"
        target="_blank"> Advanced Search </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
    <a href="https://jgateplus.com/search/journalFinder/" target="_blank"> 
    Browse Journals A-Z</a>
    </span>
    </div>
    </div>
    </div>



    </ul>
    </div>

        
        </body>
        <?php
        include "footer.php";
        ?>
    </html>

