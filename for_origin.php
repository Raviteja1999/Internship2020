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
        <meta name="viewport" content="width=1024">
        <title>Title Page</title>

    
    </head>
    <style>

    .content{
       padding:20px;
        word-spacing: 3px ;
       line-height: 1.5;
    }
    </style>
    </head>

    <body>
    <div class="content">

    <h5 style="color:blue; text-align:left;"><a href="index.php" style="color:blue;">Home</a>&gt;For Farmers &gt;Origin of the Crop</h5>		
    <input type="button" id="btn" class="btn btn-primary" value="Print" onclick="printdiv();" style="float:right">

    <div id="content">

    

    <h3 style="text-align: center; ">
    
        <span style="color: rgb(165, 42, 42); "><strong>ORIGIN OF THE CROP</strong></span></h3>
    
    <p>
        The information available on the origin and history of tobacco goes generally from ambiguity and contradictions. Plant geneticists have established that tobacco&#39;s centre of origin i.e the meeting place between a species&#39; genetic origin and the area in which it was first cultivated, is located in the Peruvian/Ecuadoraen Andes. Estimates for its first date of cultivation range from 5000-3000 BC. According to one source, tobacco was in existence in Asia even during the 12th century, when it was not known elsewhere. It was not only used as an intoxicant but also as a cure for all kinds of ills and paying homage to deities. However, it was Christopher Columbus who discovered the narcotic qualities of tobacco by accident in the course of his American voyage in 1492. On landing in the Islands of Tobago, Columbus and his men were taken by surprise to find the natives either sniffing a powdered dry leaf with evident pleasure or smoking roughly made roll of dried-up leaves. On trying these themselves, Columbus and his men were satisfied with the intoxicant produced. They took along with them some quantity of dried leaves as well as that of the seeds and that was how tobacco got introduced into Europe.<br />
    
    <br>
    The Red Indians according to another version, used tobacco for both medicinal and ceremonial purposes. They used to inhale its smoke from burning leaf through the nostrils by means of a hollow forked cane and the name of the instrument was given to the plant which came to be known as `Tobaco' in Spanish and `Tobacco' in English. The plant was first introduced into Europe in the year 1560 by a Spanish physician sent to Mexico. About this time Jean Nicot, the French Ambassador to Portugal came to know of tobacco in Lisbon and introduced it to the French Court. The botanical name of the plant Nicotiana and the word nicotine have been derived from his name. The habit of smoking spread in several countries during the 17th century.<br />
    <br>
    Tobacco is said to have been introduced into India in the beginning of 17th century. As elsewhere in the world, it has thrived in spite of considerable neglect and social disapproval.<br />
    
        &nbsp;</p>
    <h3 style="text-align: center; ">
        <span style="color:#b22222 ;"><strong>History of Indian Tobacco</strong></span></h3>
    <ul>
        <li>
            Tobacco cultivation in India was introduced by Portuguese in 1605.</li>
        <li style="">
            Initially tobacco was grown in Kaira and Mehsana districts of Gujarat and later spread to other areas of the country.</li>
        <li style="">
            Attempt to improve Indian tobacco has begun with the establishment of the Calcutta Botanical gardens in Howrah in 1787.</li>
        <li style="">
            In 1814, seven species of Nicotiana imported from America were cultivated in botanical gardens of Calcutta.</li>
        <li style="">
            In 1875, a model farm was established at Pusa, Bihar for growing and curing tobacco. The farm was given under operational lease to Begg Dunlop &amp; Co. in 1873, for continuation of tobacco trials. (1875 to 1903 virginia tobacco was grown on the leased farm by M/s Dunlop Co. to meet the requirements of UK cigarette factories.</li>
        <li style="">
            Imperial Agricultural Research Institute, established in 1903, carried out botanical and genetic studies of tobacco.</li>
        <li style="">
            The first Director of Imperial Agricultural Research Institute (IARI), Dr. Howard isolated 52 lines of tobacco. Later Shaw and Kashiram added 18 more lines in the series. Among those lines NP-28, NP-58 and NP-63 were found most promising. (They worked on both <i>N.tabacum</i> and <i>N.rustica</i>)</li>
        <li style="">
            In 1940, Dr. B.P. Paul, the Royal Economic Botanist of IARI identified a selection NP-70, which became very popular among the tobacco growing area of North Bihar due to its superior quality and the said variety continued to be popular among the farmers till 1960s.</li>
        <li style="">
            Virginia tobacco cultivation and experiments were initiated in Pusa and Ghazipur (UP).</li>
        <li style="">
            Commercial cultivation of virginia tobacco in India in black soils was commenced in the year 1920.</li>
        <li style="">
            Flue curing was first successfully done in 1928 at Guntur, Andhra Pradesh.</li>
        <li style="">
            After 1930, India found a place on the world tobacco map.</li>
        <li style="">
            IARI established a Cigarette Tobacco Research Station at Guntur during 1936.</li>
        <li style="">
            During 1943-44, the excise duty on tobacco was introduced and since then tobacco remained as the important source of excise revenue.</li>
        <li style="">
            Realising the importance of tobacco in National economy, the Govt. of India constituted Indian Central Tobacco Committee (ICTC) in 1945.</li>
        <li style="">
            The Central Tobacco Research Institute was established in 1947 under the aegis of ICTC, Madras.</li>
        <li style="">
            The function of CTRI was taken over by Indian Council of Agricultural Research (ICAR) in 1965.</li>
        <li style="">
            CTRI has seven regional Research Stations located at Guntur, Kandukur, Jeelugumilli, Hunsur, Vedasandur, Dinhata and Pusa and a research centre at Jeddangi (presently shifted to Kalvacherla).</li>
        <li style="">
            Recently CTRI Research Station, Pusa was merged with newly established ICAR Research Complex for Eastern Region, Patna during 2001.</li>
    </ul>
        
     <p>
        &nbsp;</p>
    
    </div>
        
    </div>

    
       <br class="clear" />

    
    </div><!-- Class Content End -->
</body>


        <?php
include "footerreader.php";
?>
            <script>
         function printdiv() 
       {

       var divToPrint=document.getElementById('content');

       var newWin=window.open('','Print-Window');

       newWin.document.open();
       newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');
       newWin.document.close();
       setTimeout(function(){newWin.close();},10);

       }
      </script>

</html>
