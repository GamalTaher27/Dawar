@extends('visitorPage')

@section('content')

 <!-- start cover-->
 <section class="coverpic">
    <div class="container">

      
       <section class="testimonial text-center">
       <div class="container news">
           <div id="carosel-testimonial" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">

                  <span>first</span>
                     <p class="lead">hello 
                     </p>
                     
                     
                </div>
                @foreach($news as $new)
                <div class="item">
                  
                  <span>{{$new->title}}</span>
                     <p class="lead">{{$new->news_content}}
                     </p>
                     
                     
                </div>
                @endforeach
             </div>
           </div>
       </div>
      </section>
      
        
    </div>
 </section>
 <!-- End cover-->
 
  
 
 <!--Start Total found items-->
 <section class="totalfound">
    <div class="totalfounditem">
        <div class="container">
                <h2 class="TFI text-center">TOTAL FOUND ITEMS</h2>
                <?php $count = 0; ?>
                @foreach($posts as $post)
                @if($post->is_active === 1)
                <?php $count++; ?>

                @endif
                @endforeach
                <h1 class="TFINumber text-center">{{$count + 1000}}</h1> 
        </div>
        </div>
 </section>
 <!-- End Total found items -->

 <!-- start benifits of registration section-->
 <section class="reg">
    <div class="regdiv">
        <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="bor">WHY TO REGISTER IN OUR SITE</h2>
                
                <ul class="liststyle">
                    <li>DAWWAR is system that helps people to find their lost things.</li>
                    <li>In Egypt, on accounting of increasing in
                    number of cases and Incidents of theft people
                    harry to call or contact the police to save their holdings.</li>
                    <li>According to studies, the police delay in returning
                    the property to their owners until they complete the investigation
                    and search for the missing or stolen.
                     We thought of OUR SITE to help solving this problem. </li>
                    <li>IT is a service aims to help people and save time and alot of money. 
                        IT also aims to raise the level of awareness of threats and how to deal with it, 
                        also it aims to raise the level of care and insurance knowledge. 
                        IT contributes to connect many people and make people help each other’s.</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img src="/images/reg.jpeg" class="reg-img">
            </div>
        </div>
        </div>
    </div>
 </section>
 <!-- End benifits of registration section-->
 
 <!-- start Success stories section-->
 <section class="success">
    <div class="succ">
        
        
        <!-- start testimonial section -->

      <section class="testimonial text-center">
       <div class="container news">
           <h1>SUCCESS STORIES</h1>
           <div id="carosel-testimonial" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                     <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                     </p>
                     <span>Waheed</span>
                </div>
                <div class="item">
                    <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    </p>
                    <span>Asmaa</span>
                </div>
                <div class="item ">
                    <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    </p>
                      <span>Gamal</span>
                  </div>
             </div>
           </div>
       </div>
      </section>
<!-- end testimonial srction-->
    </div>
 </section>
 <!-- End Success stories section-->

 @endsection