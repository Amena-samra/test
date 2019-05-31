<!-- About Section -->
@extends('index')

@section('content')

<section id="about" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-12">
                    <div class="about-thumb">
                         <div class="wow fadeInUp section-title" data-wow-delay="0.4s">
                              <h1>IT Eng</h1>
                              <p class="color-yellow">I am a recently graduated from Information Technology Engineering college.</p>
                         </div>
                         <div class="wow fadeInUp" data-wow-delay="0.8s">
                              
                         </div>
                    </div>
               </div>

               <div class="col-md-3 col-sm-6">
                    <div class="background-image about-img"></div>
               </div>

               <div class="bg-yellow col-md-3 col-sm-6">
                    <div class="skill-thumb">
                         <div class="wow fadeInUp section-title color-white" data-wow-delay="1.2s">
                              <h1>My Skills</h1>
                              <p class="color-white">  HTML CSS php . Web developer</p>
                         </div>

                         <div class=" wow fadeInUp skills-thumb" data-wow-delay="1.6s">
                         <strong></strong>
                              <span class="color-white pull-right">90%</span>
                                   <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                   </div>

                         <strong>Backend processing</strong>
                              <span class="color-white pull-right">50%</span>
                                   <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                   </div>

                         <strong>HTML5 & CSS3</strong>
                              <span class="color-white pull-right">80%</span>
                                   <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                   </div>
                         </div>

                    </div>
               </div>

          </div>
     </div>
</section>
@stop