<?php 
include 'heading1.html';
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
#navigation{
    position:relative;
}
  #sidenavbar {
  width: 250px;
  position: absolute;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #3257EF;
  overflow-x: hidden;
  padding:10px;
}
#sidenavbar>ul>li{
padding:5px;
border-bottom:2px solid black;
}
#sidenavbar>ul>li.active{
    background-color:#90F6F9;
}
#sidenavbar>ul>li:hover{
    background-color:gray;
}

#sidenavbar>ul>li>a{
    color:black;
    font-weight:bold;
}

#sidenavbar>ul>li>a:hover{
    color:white;
}
.content{
    position:relative;
    margin-left:260px;
    padding :10px;
    
}

/* home content */
#slide{
  text-align:center;
   padding-left:25%;
  padding-right:25%; 
    }
    .carousel-item>img{
      width:100%;
      height: 350px;
    }
    #about-content{
      padding:20px;
    }
    #right-content>h3{
           font-weight:bold;
            width:auto;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            background-color: rgb(29, 165, 211); 
            padding: 5px;
            
    }
/* end of home content */

.instrument>h2{
    text-align: center;
    background-color:  rgb(29, 165, 211);
}
.instimage{
    text-align: center;
}


    
    
    </style>
    <body>
    <h1 style="text-align: center;">Sophisticated Analytical Instrument Facility</h1>
  
<div id="navigation">

    <div id="sidenavbar">
        <ul class="list-unstyled components mb-5">
            <li class="active"  onclick="fun(0)">
             <a href="#home_SAIF" >Home - SAIF </a>
            </li>
            <li onclick="fun(1)">
	              <a href="#">Auto-Analyser</a>
	          </li>
	          <li onclick="fun(2)">
              <a href="#">Smoke Machine</a>
              
	          </li>
	          <li onclick="fun(3)">
              <a href="#">Gas Chromatograph Mass Spectrometry</a>
	          </li>
	          <li onclick="fun(4)">
              <a href="#">High Performance Liquid Chromatograph</a>
	          </li>
              <li onclick="fun(5)">
              <a href="#">Atomic Absorption Spectrophotometer</a>
	          </li>
              <li onclick="fun(6)">
              <a href="#">Total Organic Carbon Analyser</a>
	          </li>
              <li onclick="fun(7)">
              <a href="#">Spectro Photometer</a>
	          </li>
              <li onclick="fun(8)">
              <a href="#">Master Cycler</a>
	          </li>
              <li onclick="fun(9)">
              <a href="#">Centrifuge (Table top)</a>
	          </li>
              <li onclick="fun(10)">
              <a href="#">Ultra Centrifuge</a>
	          </li>
              <li onclick="fun(11)">
              <a href="#">Vaccum Concentrator</a>
	          </li>
              <li onclick="fun(12)">
              <a href="#">pH meter</a>
	          </li>

  <br>
  <br>
        </ul>

    </div>
    </div>
<div class="content"> 

    <section>
     <div id="slide">

            <div id="carouselId" class="carousel slide" data-ride="carousel"  style="height: 350px;" >
            <ol class="carousel-indicators">
                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                <li data-target="#carouselId" data-slide-to="1"></li>
                <li data-target="#carouselId" data-slide-to="2"></li>
                <li data-target="#carouselId" data-slide-to="3"></li>
                <li data-target="#carouselId" data-slide-to="4"></li>
                <li data-target="#carouselId" data-slide-to="5"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                <img src="ica_final\images\R1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                <img src="ica_final\images\r2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img src="ica_final\images\r3.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                <img src="ica_final\images\r4.jpg" alt="Fourth slide">
                </div>
                <div class="carousel-item">
                <img src="ica_final\images\r5.jpg" alt="fifth slide">
                </div>
                <div class="carousel-item">
                <img src="ica_final\images\r6.jpg" alt="sixth slide">
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </div>

        <br>

        <div id="about-content">
        <h4> About SAIF:-</h4><br>
        Sophisticated Analytical Instruments were placed mainly at CTRI, Rajahmundry to cater the requirements for all the regional stations. With the help of the analytical facility, it is possible to analyse the soil fertility parameters, leaf quality parameters (nicotine’s, sugars and chlorides), leaf nutrient composition (N,P,K, Ca, Mg, S, micro nutrients), smoke quality parameters, pesticide residues, estimation of the seed oil, etc.  Analytical requirements of all the regional stations, AINPT centres were fulfilled by the sophisticated analytical facility located at Rajahmundry. In addition to that the SAIF cater the needs of tobacco board, trade, industry and universities.  The description of the different instruments, working principles, etc. were given below. 


        </div>

        <div id="right-content" >
            <h3>Services</h3>
            <p align="justify"><font face="helvetica">
            <h5>
            <ol>
            <li> To carry out analysis of Soil and leaf samples received from CTRI research stations, AINPT centres, Tobacco Board and trade industry. </li><br>
            <li> To train technicians from time to time on sophisticated instruments. </li>
            </ol>
            </h5>

        </div>

</section>

    <section>
             <div class="instrument">  
              <h2> Auto-Analyser </h2> <br>
             <div class="instimage" > <img  src="saif_facilities/imagesfolder/r1.jpg" width="400" height="200" ></img> </div>

                  <p align="justify"><font  face="helvetica"><h4>Make: Bran+Lubbe, Germany</h4>
                <h4>Model: AAIII, 2001 </h4>
                <h4 style="color:Red;">Specification: </h4>
                <li>High reproducibility</li>
                <li>Ultra low detection limits</li>
                <li>High Resolution (HR) Digital Photometers standard</li>
                <li>Up to 100 samples per hour</li>
                <li>Stable LED light source</li>
                <li>Glass coils: chemically inert and easy visual checks</li>
                <h4 style="color:Red;">Accessories</h4>

                Modular unit includes Sampler, Pump, Chemical Manifold, Detector and Computer.

                <h4 style="color:Red;">Description</h4>
                The AutoAnalyzer is an automated analyzer using a flow technique called continuous flow analysis (CFA). The design is based on separating a continuously flowing stream with air bubbles.
                <h4 style="color:Red;">Principle</h4>
                In continuous flow analysis (CFA) a continuous stream of material is divided by air bubbles into discrete segments in which chemical reactions occur. The continuous stream of liquid samples and reagents are combined and transported in tubing and mixing coils. An essential principle of the system is the introduction of air bubbles. The air bubbles segment each sample into discrete packets and act as a barrier between packets to prevent cross contamination as they travel down the length of the tubing. Samples and standards are treated in an exactly identical manner as they travel the length of the tubing, eliminating the necessity of a steady state signal. Continuous flow analyzer depends on color reactions with the principle of colorimetry using a flow through photometer. 
                <h4 style="color:Red;">Applications</h4>
                The following parameters in tobacco can be estimated
                <li>Nicotine</li>
                <li>Reducing Sugars</li> 
                <li>Chlorides</li>
                <li>Total Nitrogen</li>
                <h4 style="color:Red;">User instructions</h4>
                <li>Clearly mention the name of the character for which analysis is required is to be mentioned clearly</li>
                <li>A minimum 0.5-1.0 kg leaf or 100-200g powder is to be provided</li>

                
                
                <h4 style="color:Red;">Analysis Charges :</h4>
                <p align="justify"><font  face="helvetica">For each parameter Rs.650/-+GST per sample</p>
                
                
                       
                </p>
            </div>
    </section>

    <section>
            <div class="instrument">  
              <h2> Smoke Machine</h2> <br>
             <div class="instimage" > <img  src="saif_facilities/imagesfolder/r2.jpg" width="400" height="200" ></img> </div>

                <p align="justify"><font  face="helvetica"><h4>Make:- CERULEAN, U.K</h4>
                <h4>Model: SM 450, 2010  </h4>
                <h4 style="color:Red;">Specification: </h4>

                <li>Conforms to     :   ISO 3308 and ISO 4387</li> 
                <li>Cigarette sample length :   50 – 120 mm</li>
                <li>Cigarette butt length*  :   20 – 45 mm (over whole product length range)</li>
                <li>Cigarette sample diameter :   7.5 to 9 mm</li> 
                <li>Air       :   5.75 bar at a rate of 120 l /min</li> 
                <li>Required Extraction   :   Extraction rate to exceed 47 l /sec</li> 
                <li>Ambient operating temperature:  15 – 30° C Humidity: 40 to 70% RH non condensing</li> 
                <li>Puff volume     :     10 to 70 ml in steps of 0.1ml</li> 
                <li>Puff duration     :     1.0 second to 5.0 seconds in 0.1 second intervals</li> 
                <li>Puff interval     :   10 seconds to 999 seconds in 1 second intervals</li> <li>Profile Lighter adjustment    :   User-selectable variable delay, warm-up duration and relights </li>

                <h4 style="color:red;">Accessories</h4>
                SM 450, QTM-3, QTM-5, QTM-8.
                <h4 style="color:red;">Description</h4>
                The Smoke Machine, SM450 is a manually operated 20 port linear smoking machine complying with the design requirements of ISO3308. It is capable of smoking ISO and Canadian methods without reduction in smoking throughput or efficiency. A wide variety of cigarettes or bidis can be smoked using the appropriate holders.
                <h4 style="color:red;">Principle</h4>
                Carbon monoxide generated during smoking can be collected in bags for analysis via the built-in optional gas analyzer through NDIR technique.
                Particulate matter is captured using the supplied Cambridge filter pad holders. The difference of initial and final mass of the filter pad is total particulate matter. Nicotine and water shall be determined by GC-FID and GC-TCD. Eliminating these two parameters from TPM leads to the estimation of Tar or Nicotine Free Dry Particulate matter.

                <h4 style="color:red;">Applications</h4>
                Cigarette and Bidi analysis for 
                <li>Total Nicotine Free Dry Particulate Matter 
                <li>Carbonmonoxide

                <h4 style="color:red;">User instructions</h4>
                Provide minimum 100 -200 No. of Cigarettes or Bidis for Analysis
                
                
                <h4 style="color:red;">Analysis Charges </h4>
                <p align="justify"><font  face="helvetica">Rs.11,000/-+GST per sample</p>
                
                
                
                </p>

 
             </div>           
    </section>

    <section>
             <div class="instrument">  
              <h2> Gas Chromatograph Mass Spectrometry </h2> <br>
             <div class="instimage" > <img  src="saif_facilities/imagesfolder/r3.jpg" width="400" height="200" ></img> </div>


                                <p align="justify"><font  face="helvetica"><h4>Make: SHIMADZU, JAPAN</h4>
                <h4>GC-MS QP 2010Plus, 2009  </h4>

                <h4 style="color:red;">Specification: </h4>

                <li>Sensitivity : Scan: S/N>160/1(RMS) for 1pg octaflouronaphthalene molecular ion at  m/z 272
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SIM: S/N>160/1(RMS) for 100pg octaflouronaphthalene molecular ion at m/z 272
                <li>Mass Range   : m/z 1.5-1090 
                <li> GC    : Oven temperature: Max 450&#176;C
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Linear temperature elevation rate: 70&#176;C /min up to 200&#176;C
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;50&#176;C /min up to 300&#176;C
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;30&#176;C /min up to 400&#176;C
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :Injection port temperature: Max 450&#176;C
                <br>
                <br>
                <li> GC/Ms interface: Temperature: Room temp. - 350&#176;C<br>
                <br><li>Ion source  : EI ionization<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Temperature: 100-300&#176;C<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Filament: Dual filament, Automatic Switching
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Electron Voltage Setting range: 10-200 V
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Electron current setting range: 5-250µA
                <br><br>
                <li> Detector  : Secondary electron multiplier with conversion dynode

                <h4 style="color:red;">Accessories</h4>
                <li>GC-2010 high performance Gas chromatograph
                <li> Vacuum differential pumping by the Turbo molecular pump with rotary backing pump
                <li> Vacuum gauge for chamber pressure monitoring
                <li> Direct coupled GC-MS interface
                <li> EI ion source with independent temperature control
                <li> Filament ion source
                <li> Quadrupole mass filter with pre-rods<br>
                <li> Detector with conversion dynode
                <h4 style="color:red">Description</h4>
                The Gas Chromatograph–Mass Spectrometer (GC-MS) is composed of two major building blocks: the gas chromatograph and the mass spectrometer. The gas chromatograph utilizes a capillary column which depends on the column's dimensions (length, diameter, film thickness) as well as the phase properties (e.g. 5% phenyl polysiloxane). The difference in the chemical properties between different molecules in a mixture and their relative affinity for the stationary phase of the column will promote separation of the molecules as the sample travels the length of the column. The molecules are retained by the column and then elute (come off) from the column at different times (called the retention time), and this allows the mass spectrometer downstream to capture, ionize, accelerate, deflect, and detect the ionized molecules separately. The mass spectrometer does this by breaking each molecule into ionized fragments and detecting these fragments using their mass-to-charge ratio.
                <h4 style="color:red">Principle</h4>
                The molecules travel the length of the column, pass through the transfer line and enter into the mass spectrometer they are ionized by various methods with typically only one method being used at any given time. Once the sample is fragmented it will then be detected, usually by an electron multiplier diode, which essentially turns the ionized mass fragment into an electrical signal that is then detected. The ionization technique chosen is independent of using full scan or SIM.
                <h4 style="color:red">Electron ionization</h4> By far the most common and perhaps standard form of ionization is electron ionization (EI). The molecules enter into the MS (the source is a quadrupole or the ion trap itself in an ion trap MS) where they are bombarded with free electrons emitted from a filament, not unlike the filament one would find in a standard light bulb. The electrons bombard the molecules, causing the molecule to fragment in a characteristic and reproducible way. This "hard ionization" technique results in the creation of more fragments of low mass-to-charge ratio (m/z) and few, if any, molecules approaching the molecular mass unit. The molecular fragmentation pattern is dependent upon the electron energy applied to the system, typically 70 eV (electron Volts). The use of 70 eV facilitates comparison of generated spectra with library spectra using manufacturer-supplied software or software developed by the National Institute of Standards (NIST-USA). Spectral library searches employ matching algorithms such as Probability Based Matching and dot-product matching that are used with methods of analysis written by many method standardization agencies. Sources of libraries include NIST, Wiley etc.
                <h4 style="color:red">Applications</h4>
                Determination of following parameters in Tobacco:
                <li> Organochlorine pesticide residues(11 pesticides)
                <br>&nbsp;&nbsp;&nbsp;&nbsp;(alpha BHC, beta BHC, gamma BHC, delta BHC, chlorpyrifos, endrin, endosulphan-I, <br>&nbsp;&nbsp;&nbsp;&nbsp;endosulphan-II, op’ DDT, pp’ DDT, endosulphate)
                <br>
                <br>
                1.  Clearly mention the name of the character for which analysis is required<br>
                2.  Provide minimum 0.5-1.0 kg leaf or 100-200g powder.
                
                <h4 style="color:red;">Analysis Charges :</h4>
                <p align="justify"><font  face="helvetica">For 11 Organo Chlorine pesticides Rs.10,500/-+GST per sample<br>

                </p>
                
                
                
                
                
                </p>

            </div>
    </section>
           


    <section>
             <div class="instrument">  
              <h2> High Performance Liquid Chromatograph </h2> <br>
             <div class="instimage" > <img  src="saif_facilities/imagesfolder/r4.jpg" width="400" height="200" ></img> </div>

                                    
                    <p align="justify"><font  face="helvetica"><h4>Make: SHIMADZU, JAPAN</h4>
                    <h4>Model: LC-8A, 1995  </h4>
                    <h4 style="color:red;">Specification: </h4>
                    <li>	Flow rate accuracy: 2% (0.5-150 mL/min)
                    <li>	Flow rate stability: 0.5% (0.5-150 mL/min)
                    <li>	Wet parts material: Stainless steel, Hastelloy C, Vespel, Sappire
                    <li>	Suction filter: 10 um
                    <li>	Dimensions (mm): 350(w) x 450(d) x 210(h)

                    <h4 style="color:red;">Accessories</h4>
                    User-friendly single point control from an SCL-10A controller.
                    <h4 style="color:red;">Description</h4>
                    High-Performance Liquid Chromatograph (HPLC) is an analytical instrument used to separate, identify, and quantify each component in a mixture. It relies on pumps to pass a pressurized liquid solvent containing the sample mixture through a column filled with a solid adsorbent material. Each component in the sample interacts slightly differently with the adsorbent material, causing different flow rates for the different components and leading to the separation of the components as they flow out the column. 
                    <h4 style="color:red">Principle</h4>
                    The sample is being injected through analytical port into the mobile phase stream which carries it into the column. The pumps deliver the desired flow and composition of the mobile phase through the column. Chromatography can be described as a mass transfer process involving adsorption. The active component of the column, the adsorbent, is typically a granular material made of solid particles (e.g. silica, polymers, etc.), 2–50 μm in size. The components of the sample mixture are separated from each other due to their different degrees of interaction with the adsorbent particles. The detector generates a signal proportional to the amount of sample component emerging from the column, hence allowing for quantitative analysis of the sample components. A digital microprocessor and user software control the HPLC instrument and provide data analysis. 


                    <h4 style="color:red;">Applications</h4>
                    Determination of following parameters in Tobacco:
                    <li>	Solanesol
                    <li>	Imidacloprid

                    <h4 style="color:red;">User instructions</h4>
                    <li>Clearly mention the name of the character for which analysis is required
                    <li>Provide minimum 0.5-1.0 kg leaf or 100-200g powder

                    
                    <h4 style="color:red;">Analysis Charges :</h4>
                    <p align="justify"><font  face="helvetica"><li>Rs.2500/- +GST per sample for Solanesol
                    <li>	Rs.7000/- +GST per sample for Imidacloprid
                    </p>
                    
                    
                    
                    </p>

             </div>
    </section>


    <section>
             <div class="instrument">  
              <h2> Atomic Absorption Spectrophotometer </h2> <br>
             <div class="instimage" > <img  src="saif_facilities/imagesfolder/r5.jpg" width="400" height="200" ></img> </div>

            
                    <p align="justify"><font  face="helvetica"><h4>Make:Perkinelmer, USA</h4>
                    <h4>Model: AA700, 2006  </h4>
                    <h4 style="color:red;">Specification: </h4>

                    <li>Monochromator: Littrow design with motorized drive for automatic wavelength selection and &nbsp;&nbsp;&nbsp;&nbsp;peaking.  
                    <li>Wavelength range  : 190 - 900 nm   
                    <li>Diffraction grating : 1800 lines/mm blazed at 236 nm and 597 nm  
                    <li>Grating area    : 64 x 72 mm   
                    <li>Reciprocal linear dispersion:  1.6 nm/mm (nominal)   Focal length:  267 mm   
                    <li>Spectral bandwidths  : 0.2, 0.7 and 2.0 nm, dual height; motorized slit drive for automatic slit &nbsp;&nbsp;&nbsp;&nbsp; selection  

                    <h4 style="color:red">Accessories</h4>
                    <li> Monochromator
                    <li> Detector
                    <li> Lamp Assembly
                    <h4 style="color:red;">Description</h4>
                    Atomic Absorption Spectrophotometer (AAS) is a spectroanalytical instrument for the quantitative determination of chemical elements using the absorption of optical radiation (light) by free atoms in the gaseous state. In analytical chemistry the instrument is used for determining the concentration of a particular element (the analyte) in a sample to be analyzed. AAS can be used to determine over 70 different elements in solution or directly in solid samples.
                    <h4 style="color:red;">Principle</h4>
                    The technique makes use of absorption spectrometry to assess the concentration of an analyte in a sample. It requires standards with known analyte content to establish the relation between the measured absorbance and the analyte concentration and relies therefore on the Beer-Lambert Law. In short, the electrons of the atoms in the atomizer can be promoted to higher orbitals (excited state) for a short period of time (nanoseconds) by absorbing a defined quantity of energy (radiation of a given wavelength). This amount of energy, i.e., wavelength, is specific to a particular electron transition in a particular element. In general, each wavelength corresponds to only one element, and the width of an absorption line is only of the order of a few picometers (pm), which gives the technique its elemental selectivity. The radiation flux without a sample and with a sample in the atomizer is measured using a detector, and the ratio between the two values (the absorbance) is converted to analyte concentration or mass using the Beer-Lambert.
                    <h4 style="color:red">Applications</h4>
                    Determination of following elements in Soil and Tobacco.
                    <li> Copper
                    <li> Zinc
                    <li> Iron
                    <li> Manganese

                    <h4 style="color:red">User instructions</h4>
                    <li>Clearly mention the name of the character for which analysis is required
                    <li>Provide minimum 0.5-1.0 kg leaf or 100-200g powdered tobacco 
                    <li>Provide minimum 1Kg soil


                    
                    
                    <h4 style="color:red">Analysis Charges </h4>
                    <p align="justify"><font  face="helvetica">• Rs.500/-+GST per sample for element

                    </p>
                    
                    
                    
                    </p>


             </div>
    </section>



    <section>
              <div class="instrument">  
              <h2> Total Organic Carbon Analyser  </h2> <br>
             <div class="instimage" > <img  src="saif_facilities/imagesfolder/r6.jpg" width="400" height="200" ></img> </div>


             <p align="justify"><font  face="helvetica"><h4>Make: Elementar, Germany</h4>
                <h4>Model:Vario TOC Select, 2011  </h4>
                <h4 style="color:red">Specification: </h4>
                Measuring range:  C 0-60,000 mg/L in liquids
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 0-100% in solids
                <br> Detection limits:&nbsp;&nbsp; C 6 µg/L (ppb)
                <br>Precision (RSD):      < 1% at > 5mg/L     C 


                <h4 style="color:red">Description</h4>
                TOC analyzer is for the determination of organically and inorganically bound carbon in liquids, slurries and solids.
                <h4 style="color:red">Principle</h4>
                The measuring principle is based on the high temperature digestion of the sample in an air/O2 stream at 850 0c to 950 0c.Totally bound carbon is converted into CO2 which is quantitatively determined by means of a NDIR detector. 
                <h4 style="color:red">Applications</h4>
                Determination of following parameters in Soil 
                <li> Total organic carbon


                <h4 style="color:red">User instructions</h4>
                <li> Provide minimum 0.5-1.0 Kg soil 
 
 
 
                </p>



             </div>
    </section>


    <section>
             <div class="instrument">  
              <h2> SPECTROPHOTOMETER</h2> <br>
             <div class="instimage" > <img  src="saif_facilities/imagesfolder/r7.jpg" width="400" height="200" ></img> </div>



                 <p align="justify"><font  face="helvetica"><h4>Make: Thermo scientific</h4>
                <h4>Model:: ND1000  </h4>
                <h4 style="color:red">Specification: </h4>
                • Sample Size: 1microliter<br>
                • Path Length: 1mm (with auto-ranging to 0.2mm)<br>
                • Light Source: Xenon flash lamp<br>
                • Detector Type: 2048- element linear silicon CCD array<br>
                • Wavelength Range: 220-750nm<br>
                • Wavelength Accuracy:1nm<br>
                • Detection Limit : 2ng/microliter(ds DNA)<br>
                • Maximum Concentration : 3700ng/microliter(ds DNA)<br>
                • Measurement Cycle Time:10seconds<br>
                • Dimensions:14cmX20cm
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                

                <h4 style="color:red">Description</h4>
                The Thermo Scientific NanoDrop™1000 Spectrophotometer measures 1µl samples with high accuracy and reproducibility. The full spectrum (220nm-750nm) spectrophotometer utilize sap tented sample retention technology that employs surface tension alone to hold the sample in place. This eliminates the need for cumbersome cuvette sand other sample containment devices and allows for cleanup in seconds. 
                <h4 style="color:red">Applications</h4>
                UV/VIS spectrophotometry is simple for samples as small as1µl using the NanoDrop1000 Spectrophotometer.<br> 
                • Nucleic acid concentration and purity of nucleic acid samples upto 3700 µg/ul (ds DNA) without dilution<br>
                • Purified protein analysis (A280) upto100mg/ml (BSA)<br>
                • Bradford Assay analysis of protein<br>
                • BCA Assay analysis of protein<br>
                • Lowry Assay analysis of protein<br>
                • Pierce Protein 660nm Protein Assay<br>
                • Cell density measurements<br>
                • General UV-Vis spectrophotometry<br>

                <h4 style="color:red">User instructions:</h4>
                1. Apply 5µl of d H20 solution on to each bottom pedestal.<br>
                2. Lower the up pedestal arm to form a liquid column; let it sit for approximately 2-3 minutes.<br>
                3. Wipe away the water from both the upper and lower pedestal with a clean lab wipe and 1µl  of sample can be    loaded for measurement<br>
                <h4 style="color:red">Analysis Charges: </h4>
                <li> Contact the in-charge 
                
                 </p>


             </div>
    </section>


    


    <section>
             <div class="instrument">  
              <h2> MASTER CYCLER </h2> <br>
             <div class="instimage" > <img  src="saif_facilities/imagesfolder/r8.jpg" width="400" height="200" ></img> </div>

                    <p align="justify"><font  face="helvetica"><h4>Make: Eppendorf</h4>
                        <h4>Model:Master cycler 5345000.515 with gradient option </h4>

                        <h4 style="color:red">Principle</h4>
                        The polymerase chain reaction (PCR) is a laboratory technique for DNA replication that allows a “target” DNA sequence to be selectively amplified. PCR can use the smallest sample of the DNA to be cloned and amplify it to millions of copies in just a few hours. 

                        <h4 style="color:red">Applications</h4>
                        Can be utilized in the following applications
                        • Amplification of specified genomic regions<br>
                        • Analysis of allelic sequence variations<br>
                        • Cloning of genomic DNA or cDNA<br>
                        • Mutagenesis or modification of DNA<br>
                        • Assays for the presence of pathogens<br>
                        • Detection of mutations<br>
                        • Genetic fingerprinting of forensic samples<br>

                        <h4 style="color:red">User instructions</h4>
                        •  All the PCR components should be  handled in icebox/cooler box<br>
                        • Short spin of PCR tubes with the components before loading in to the machine will ensure that the components to settle at the bottom of the tube.<br>
                        <h4 style="color:red">Analysis Charges: </h4>
                        <li> Contact the in-charge

                        </p>
                                        
                
             </div>
    </section>


    <section>
            <div class="instrument">  
              <h2> CENTRIFUGE (Table top)   </h2> <br>
             <div class="instimage" > <img  src="saif_facilities/imagesfolder/r9.jpg" width="400" height="200" ></img> </div>

                 <p align="justify"><font  face="helvetica"><h4>Make : Eppendorf </h4>
                <h4>Model:5430R<br><br>
                Centrifuge 5430 R has an additional temperature control function for centrifugation between -11ºC and +40ºC use the Fast Temp function to start a temperature control run without samples to adjust the rotor chamber incl. rotor, buckets and adapters quickly to the set target temperature. This temperature control run also be started automatically at specified times using the Fast Temp pro function.
                </h4>

                <h4 style="color:red">Principle:</h4>
                The particles get separated according to their size, shape, density, viscosity of the medium and rotor speed. The centrifuge involves principle of sedimentation, where the acceleration at centripetal force causes denser substances to separate out along the radial direction at the bottom of the tube
                <h4 style="color:red">Applications:</h4>
                The versatile e centrifuge 5430/5430 R has a capacity of 30 × 2.0 ml and reaches max. 30.130 × g/17,000 rpm. The versatility is reflected in the available rotor options. One can select among different rotors to centrifuge the following tubes for various applications:
                <br>
                • Micro test tubes ( 0.2 to 2.0 ml )<br>
                • PCR strips<br>
                • Falcon tubes (15 / 50 ml )<br>
                • Micro test plates<br>
                • PCR plates<br>
                • Deep well plates ( max. height 29 mm )
                <h4 style="color:red">Analysis Charges:</h4>
                <li> Contact the in-charge  
 
                </p>
             </div>
    </section>

    <section>
              <div class="instrument">  
              <h2>ULTRA CENTRIFUGE</h2> <br>
             <div class="instimage" > <img  src="saif_facilities/imagesfolder/r10.jpg" width="400" height="200" ></img> </div>

                     <p align="justify"><font  face="helvetica"><h4>Make: Thermo scientific</h4>
                    <h4>Model:<br>WX Ultra 90
                    The instrument has following features 
                    • Maximum speed – 90,000 rpmt<br>
                    • Maximum RCF – 692.149 * g (T-890)<br>
                    • Speed control accuracy - ±10 rpm (1,000 rpm to maximum speed)<br>
                    • Acceleration/ deceleration control  - about 5 minutes from 0 to 100,000 rpm or vice versa <br>
                    • Rotor temperature /display accuracy -  ±0.5ºC set temperature is from 0ºC to 40ºC<br>
                    • Set speed – 1000 rpm to maximum speed in increments of 100 rpm<br>
                    </h4>
                    <h4 style="color:red">Principle:</h4>
                    The particles get separated according to their size, shape, density, viscosity of the medium and rotor speed. The centrifuge involves principle of sedimentation, where the acceleration at centripetal force causes denser substances to separate out along the radial direction at the bottom of the tube
                    <h4 style="color:red">User instructions:</h4>
                    <li> In order to ensure safe operation of the instrument, the following general safety regulations must be followed: <br>
                    • Use only rotors and accessories for this centrifuge which have been approved by Thermo Fisher Scientific. Exceptions to this rule are commercially available glass or plastic centrifuge tubes, provided they have been approved for the speed or the RCF value of the rotor.<br>
                    • Do not move the centrifuge while it is running.<br>
                    • Do not lean on the centrifuge <br>
                    • Do not use rotors which show any signs of corrosion and / or cracks.<br>
                    • Use only with rotors which have been loaded properly. Follow the instructions given in the rotor manual.<br>
                    • Never over load the rotor. Follow the instructions given in the rotor manual.<br>
                    • Never start the centrifuge when the lid is open.<br>
                    • Never open the lid until the rotor has come to a complete stop and this has been confirmed in the display.<br> 
                    • Rotor installation: make sure the rotor is locked properly into place before operating the centrifuge.<br>
                    • Always balance the samples. Centrifuging hazardous substances:<br>
                    • Do not centrifuge explosive or flammable materials or substances which could react violently with one another.<br>

                    
                    <h4 style="color:red">Analysis Charges: </h4>
                    <li> Contact the in-charge 
                    
                    
                    </p>

             </div>
    </section>



    <section>
              <div class="instrument">  
              <h2> VACCUM CONCENTRATOR </h2> <br>
             <div class="instimage" > <img  src="saif_facilities/imagesfolder/r12.jpg" width="400" height="200" ></img> </div>
            
             <p align="justify"><font  face="helvetica"><h4>Make:Scanvac</h4>
            <h4>Model:32speed </h4>

            <h4 style="color:red">Principle</h4>
            Vacuum concentrator comprises of a vacuum chamber with a closure which may be sealed in an airtight manner. This will aid in concentrating and drying the samples using a vacuum pump, tempering device and pressure sensor. <br>
            Max. RPM-200 rpm~2,000rpm<br>
            Max Capacity-1.5mlx120tubes<br>
            Vacuum Pressure-1,013mbar~1mbar<br>

            <h4 style="color:red">Applications</h4>
            Speed Vac Systems are suitable for a wide range of applications including drying down DNA precipitates with 100% recovery, typically from methanol and water.


            <h4 style="color:red">Analysis Charges: </h4>
            <li> Contact the in-charge
            </p>

             </div>
    </section>

    <section>
              <div class="instrument">  
              <h2>pH METER</h2> <br>
             <div class="instimage" > <img  src="saif_facilities/imagesfolder/r13.jpg" width="400" height="200" ></img> </div>


                <p align="justify"><font  face="helvetica"><h4>Make: Systronics</h4>
                <h4>Model:pH meter 361  </h4>
                <h4 style="color:red">Specification: </h4>
                pH Range: 0 to 14.00 pH
                        <h4 style="color:red">Principle</h4>
                A pH meter provides a value as to how acidic or alkaline a liquid is. The basic principle of the pH meter is to measure the concentration of hydrogen ions. Acids dissolve in water forming positively charged hydrogen ions (H+). The greater this concentration of hydrogen ions, the stronger the acid is. Similarly alkali or bases dissolve in water forming negatively charged hydrogen ions (OH-). The stronger a base is the higher the concentration of negatively charged hydrogen ions there are. 
                <h4 style="color:red">Application</h4>
                To check the pH value of different solutions.

                <h4 style="color:red">User instructions</h4>
                <li> 1.	Electrode shall be rinsed between samples with distilled – ionized water.
                <li> 2.	Never WIPE or RUB the electrode with tissue paper ---wiping can cause erroneous readings due to static charge. Just blot the end of the electrode with lint free paper.
                <h4 style="color:red">Analysis Charges:</h4>
                <li> Contact the in-charge  
                
                
                </p>

             </div>
    </section>

   

    </div>

    </body>


    <script>
    
    const fun = (id) => {
       // console.log(id);
        let sections = document.querySelectorAll("section")
       // console.log(sections);
        let navItems = document.querySelectorAll("ul.list-unstyled li")
     //   console.log(navItems);
        for(let i=0;i<sections.length;i++){
          sections[i].style.display = "none"
          navItems[i].classList.remove("active")
        }
        sections[id].style.display = "block" 
        navItems[id].classList.add("active")
      }
      fun(0)
    </script>
</html>
<?php

include "footerreader.php";
?>