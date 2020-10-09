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
        <title>TOBACCO | CTRI,Rajahmundry</title>

      
    </head>
   
    <style>
    .content{
        padding:20px;
        line-height:1.4;
        word-spacing:0.2em;
    }
    </style>
    </head>
    <body>
    <div class="content">

    <h5 style="color:blue; text-align:left;"><a href="home.php" style="color:blue;">Home</a>&gt;For Farmers &gt;Indian Tobacco econamy</h5>		
      <input type="button" id="btn" class="btn btn-primary" value="Print" onclick="printdiv();" style="float:right">

 <div id="content">
	    
    <h2 style="text-align: center; "><span style="color: rgb(165, 42, 42); "><strong>TOBACCO IN INDIAN ECONOMY</strong></span></h2>
    
    <p>
        Tobacco is one of the most economically significant agricultural crops in the world. It is a drought tolerant, hardy and short duration crop which can be grown on soils where other crops cannot be cultivated profitably. In India, Tobacco crop is grown in an area of 0.45 M ha (0.27% of the net cultivated area) producing ~ 750 M kg of tobacco leaf. India is the 2nd largest producer and exporter after China and Brazil respectively. The production of flue-cured Virginia (FCV) tobacco is about 300 million kg from an area of 0.20 M ha while 450 M kg non-FCV tobacco is produced from an area of 0.25 M ha. In the global scenario, Indian tobacco accounts for 10% of the area and 9% of the total production.</p>
    <p>
        Unique feature of tobacco production in India is that varied styles of Flue-cured Virginia (FCV) and different types of non-FCV tobacco are produced under diverse agro-ecological situations spread all over the country. About 15 states in the country grow tobacco, significantly influencing the economy and prosperity of the farming community. FCV, Bidi, Hookah, Chewing, Cigar-wrapper, Cheroot, Burley, Oriental, HDBRG, Lanka, Pikka, Natu, Motihari, Jati etc. are the different types of tobacco grown in the country. FCV, Burley and Oriental tobacco are the major exportable types.</p>
    <p>
        Tobacco provides livelihood security to 36 million people including 6 million farmers and 20 million farm labour engaged in tobacco farming besides 10 million people working in processing, manufacturing and exports, in India. Bidi rolling alone provides employment to 4.4 million people and 2.2 million tribals are involved in tendu leaf collection. The main beneficiaries are the small and marginal farmers, rural women, tribal youth and weaker sections of the society. Annually, tobacco contributes ` 4,400/- crores towards foreign exchange earnings accounting for 4% of the country&rsquo;s total agri-exports and ` 14,000 crores to excise revenue which is more than 10% of the total excise revenue collection from all sources.</p>
    <p>
        India enjoys an edge over the leading tobacco producing countries in terms of low production cost, average farm and export prices. Thus, Indian tobacco is considered as &lsquo;value for money&rsquo;. India is one of the leading exporters of tobacco and occupies second place after Brazil. The country accounts for 6% by volume and 0.7% by value of the world tobacco trade and 80-85% of our exports continue to be FCV alone. During the past five years, exports of tobacco and tobacco products increased by 76% and 209% in quantity and value terms, respectively. UK, Germany, Belgium, the erstwhile USSR, South Korea and South Africa are the major importers of Indian FCV tobacco accounting for more than 60% of our exports. At present, Brazil, Zimbabwe, Turkey, China and Indonesia are the competitors to India in the export market. India&rsquo;s share in the world cigarette exports is less than 1% only. However, the exports of scented Bidis, Hookah tobacco paste, scented chewing tobacco and Zarda are noteworthy and there is a scope for augmenting the exports of these products in the near future.</p>
    <p>
    <span style="font-size:20px;"> <span style="color: rgb(165, 42, 42);" > <strong>POSITIVE FEATURES OF INDIAN TOBACCO</strong></span></span></p>
    <p>
        The distinctive and positive features of Indian tobacco include the lower levels of heavy metals, very low levels of Tobacco Specific Nitrosamines (TSNAs) and pesticide residues compared to the other tobacco producing countries in the world. Further, endowed with varied agro-climatic conditions, India has the capacity to produce different styles of tobacco ranging from coloury neutral filler to flavourful leaf catering to the needs of a wide variety of customers globally. In addition, production and processing costs of tobacco are also quite low in India, thus making the Indian tobacco price-competitive and value for money.</p>
    <p>
    <span style="font-size:20px;"><span style="color: rgb(165, 42, 42);"> <strong>IMPACT OF TOBACCO RESEARCH</strong></span></span></p>
    <p>
        Sustained research and developmental efforts by the scientists of CTRI have resulted in evolving 90 high yielding varieties (HYV) and appropriate agro-technologies, which have made a significant impact on tobacco production, marketing and export earnings. As a result of adoption of HYV and proven production and protection technologies, there has been a quantum jump in the average productivity levels in FCV and non-FCV tobacco types.</p>
    <p>
        Improvement in physical and chemical quality attributes of the tobacco leaf including lower levels of harmful constituents like TSNA, tar etc. has made the place of Indian tobacco secure in the international market as &lsquo;quality filler&rsquo;. Significant reduction in cost of production achieved through the adoption of HYV and improved crop management strategies gave a competitive edge to Indian tobacco in the international market.</p>
    <p>
        Adoption of recommended IPM strategies for pest management has considerably brought down the pesticide residue levels much below the International Guidance Residue Levels (GRLs), thus enhancing the acceptability and saleability of our tobacco in the international market. Refined fertilizer management practices developed and propagated by the Institute involving Integrated Nutrient Management (INM), withdrawal of potash application in northern and central black soils and reducing the phosphorus dose in NBS, NLS and KLS have contributed to considerable saving in foreign exchange and conserving soil health. The micro-irrigation and fertigation systems have resulted in considerable saving in water and nutrients thereby preventing percolation and leaching losses.</p>
    
    
    </div>
    
       <br class="clear" />
    
    </div><!-- Class Content End -->
</body>

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

        <?php
include "footerreader.php";
?>
</html>
