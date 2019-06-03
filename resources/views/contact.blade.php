<!-- Contact Section -->
@extends('index')

@section('content')

<section id="contact" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-12">
                    <div class="contact-form">
                         <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                              <h1 class="color-white">Say hello..</h1>
                              <p class="color-white"></p>
                         </div>

                         <div id="contact-form">
                              @if (Session :: has('flash_message'))
                                <div class ="alter alter-success">{{Session::get('flash_message')}}</div>
                              @endif
                              <form action="{{route('contact')}}" method="post">
                                   {{csrf_field()}}
                                   <div class="wow fadeInUp" data-wow-delay="1s">
                                        <input name="fullname" type="text" class="form-control" id="fullname" placeholder="Your full Name">
                                        @if ($errors->has('fullname'))
                                        <small class="form-text invalid-feedback">{{$errors -> first('fullname')}}</small>
                                        @endif
                                   </div>
                                   <div class="wow fadeInUp" data-wow-delay="1.2s">
                                        <input name="email" type="email" class="form-control" id="email" placeholder="Your Email">
                                         @if ($errors->has('email'))
                                        <small class="form-text invalid-feedback">{{$errors -> first('email')}}</small>
                                        @endif
                                   </div>
                              
                                   <div class="wow fadeInUp" data-wow-delay="1.2s">
                                        <input name="phon" type="text" class="form-control" id="phone" placeholder="Your number">
                                   </div>
                                   <div  class="wow fadeInUp" data-wow-delay="1.2s" >
                                        <p style="color:white";>Select Category</p>
                                        <select name="deal" class="wow fadeInUp" data-wow-delay="1.4s">
                                             <option>economic</option>
                                             <option>educational</option>
                                             <option>sport</option>
                                             <option>fashion</option>
                                             <option>marketing</option>
                                             <option>artistic</option>
                                        </select>
                                        <hr>
                                        <p style="color:white";>Select Type of platform website</p>
                                        <select name="type" class="wow fadeInUp" data-wow-delay="1.4s">
                                             <option>WordPress</option>
                                             <option>Laravel</option>
                                             <option>Wix</option>
                                             <option>Shopify</option>
                                             <option>Asp.net</option>
                                             
                                        </select>
                                        <hr>

                                   </div>
                                   <div class="wow fadeInUp" data-wow-delay="1.4s">
                                        <textarea name="message" rows="5" class="form-control" id="message" placeholder="Write your message..."></textarea>
                                         @if ($errors->has('message'))
                                        <small class="form-text invalid-feedback">{{$errors -> first('message')}}</small>
                                        @endif
                                   </div>
                                   <div class="wow fadeInUp col-md-6 col-sm-8" data-wow-delay="1.6s">
                                        <input name="submit" type="submit" class="form-control" id="submit" value="Send">
                                   </div>
                              </form>
                         </div>

                    </div>
               </div>

               <div class="col-md-3 col-sm-6">
                    <div class="background-image contact-img"></div>
               </div>

               <div class="bg-dark col-md-3 col-sm-6">
                    <div class="contact-thumb">
                         <div class="wow fadeInUp contact-info" data-wow-delay="0.6s">
                              <h3 class="color-white"></h3>
                              <p></p>
                         </div>

                         <div class="wow fadeInUp contact-info" data-wow-delay="0.8s">
                              <h3 class="color-white">Contact.</h3>
                              <p><i class="fa fa-phone"></i> 01-0110-0220</p>
                              <p><i class="fa fa-envelope-o"></i> <a href="amenasamra94@gmail.com">hello@company.co</a></p>
                              <p><i class="fa fa-globe"></i> <a href="#">company.co</a></p>
                         </div>

                    </div>
               </div>

          </div>
     </div>
</section>
@stop