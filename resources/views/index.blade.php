@extends('layouts.app')
@section('title')
Home
@endsection
@section('section')
<section id="main">

    <div class="main">

        <div class="container-fluid h-100">

            <div class="row h-100 position-relative align-md">

                <div class="col-lg-8 main-column-one">

                    <h1 class="dual-heading-primary">{{json_decode($home->content)->heading}}</h1>

                    <p>
                        {{json_decode($home->content)->subheading}}

                    </p>

                    <div class="feature" id="">

                        <!-- <h5 class="mb-4">Club features:</h5> -->

                        <div class="watch-teaser">
                            <a href="#" class="custom-btn" data-bs-toggle="modal"
                                data-bs-target="#video-teaser">Watch Teaser</a>
                        </div>



                        <div class="modal fade" id="video-teaser" tabindex="-1" aria-labelledby="video-teaserLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content model-content-custom">
                                    <div class="modal-header">

                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close">X</button>

                                    </div>
                                    <div class="modal-body">
                                        <iframe webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""
                                            class="fr-content-element"
                                            src="https://www.youtube.com/embed/{{json_decode($home->content)->teaser}}"
                                            height="503.99999999999994" width="100%" frameborder="0"></iframe>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="feature-list">

                            <div class="feature-item">

                                <img src="{{asset('front/images/feature1.png')}}">
                                <p>PLAY-WIN</p>

                            </div>

                            <div class="feature-item">

                                <img src="{{asset('front/images/feature1.png')}}">
                                <p>HOLD-WIN</p>

                            </div>

                            <div class="feature-item">

                                <img src="{{asset('front/images/feature1.png')}}">
                                <p>OWN-WIN</p>

                            </div>




                        </div>


                    </div>

                </div>

                <div class="col-lg-4 main-column-two">

                    <img src="{{asset('front/images/'.json_decode($home->content)->image)}}" class="img-absolute">

                </div>

            </div>

        </div>

    </div>

</section>


<section id="main-body">

    <div class="container">


        <!-- HOW TO BUY SECTION START -->




        <div class="section-title mt-5" id="how-to-buy" data-aos="fade-up" data-aos-duration="1000">


            <h2>{{json_decode($buy_title->content)->heading}}</h2>

        </div>

        <div class="row my-5 gy-5" data-aos="fade-up" data-aos-duration="1000">

            @foreach($buy as $buy_section)
            <div class="col-lg-6 col-md-6">

                <div class="steps">


                    <h3>{{json_decode($buy_section->content)->heading . ' ' .$loop->iteration}}</h3>

                    <h5>{{json_decode($buy_section->content)->subheading}}</h5>

                    <p>{{json_decode($buy_section->content)->description}}</p>


                </div>

            </div>
            @endforeach
        </div>

        <br>

        <!-- HOW TO BUY SECTION END -->


        <!-- TOKEN PRICE SECTION START -->

        <div class="section-title mt-5" id="tokenomics" data-aos="fade-up" data-aos-duration="1000">


            <h2>{{json_decode($our_token_title->content)->heading}}</h2>

        </div>

        <div class="row my-5 justify-content-center token-rounds" data-aos="fade-up" data-aos-duration="1000">

            <div class="col-lg-3 col-md-6">

                <div class="price-box">

                    <p>Round 1</p>
                    <!-- <h2>0.035$</h2> -->
                    <p>1 LASM = 0.035 USD</p>
                    <h5>7,200,000 Tokens</h5>


                    <div class="price-bonus" onclick="loadWeb3()">

                        <h5>Locked for 6 Months</h5>

                    </div>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">


                <div class="price-box">

                    <p>Round 2</p>
                    <!-- <h2>0.035$</h2> -->
                    <p>1 LASM = 0.040 USD</p>
                    <h5>7,200,000 Tokens</h5>


                    <div class="price-bonus" onclick="loadWeb3()">

                        <h5>Locked for 5 Months</h5>

                    </div>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="price-box">

                    <p>Round 3</p>
                    <!-- <h2>0.035$</h2> -->
                    <p>1 LASM = 0.045 USD</p>
                    <h5>9.600.000 Tokens</h5>



                    <div class="price-bonus" onclick="loadWeb3()">

                        <h5>Locked for 3 Months</h5>

                    </div>

                </div>


            </div>

            <!-- <div class="col-lg-3 col-md-6">


                <div class="price-box">

                    <p>Round 4</p>
                    <h2>0.050$</h2>

                    <h5>15,000,000 Token</h5>


                    <div class="price-bonus">




                    </div>

                </div>

            </div> -->

        </div>

        <br>

        <!-- TOKEN PRICE SECTION END -->



        <!-- TOKEN SALES SECTION START -->

        <br>

        <div class="row my-5 justify-content-center" data-aos="fade-up" data-aos-duration="1000">

            <div class="col-lg-8">

                <div class="sale-box">

                    <h2 class="mb-4">TOKEN SALE ENDS IN</h2>

                    <div id="countdown">

                        <ul>
                            <li><span id="latestdays">00</span>days</li>
                            <li><span id="latesthours">00</span>Hours</li>
                            <li><span id="latestminutes">00</span>Minutes</li>
                            <li><span id="latestseconds">00</span>Seconds</li>
                        </ul>

                    </div>


                    <div class="sale-progress">


                        <div class="sale-value">
                            <p>0</p>
                            <p>33m</p>
                        </div>


                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                aria-valuemax="100" style="width: 75%;"></div>
                        </div>

                        <div class="soft-cap">

                            <p>Token Hardcap</p>
                        </div>

                    </div>

                    <a href="javascript:void(0)" class="custom-btn">Buy More Tokens</a>


                </div>

            </div>

        </div>

        <br>

        <!-- TOKEN SALES SECTION END -->

        <div id="tokenomics"></div>

        <div class="section-title my-5" id="tokenomics" data-aos="fade-up" data-aos-duration="1000">

            <h2>{{json_decode($tokenomics->content)->heading}}</h2>

        </div>


        <div class='row' data-aos="fade-up" data-aos-duration="1000">
            <div class='col-md-6'>
                <img src="{{asset('front/images/'.json_decode($tokenomics->content)->tokenomics)}}" style="max-width:100%">
            </div>
            <div class='col-md-6'>
                <img src="{{asset('front/images/'.json_decode($tokenomics->content)->tax)}}" style="max-width:100%">
            </div>
        </div>
        <br>

        <!-- FEATURES SECTION START -->

        <div class="section-title mt-5" id="feature" data-aos="fade-up" data-aos-duration="1000">

            <p>{{json_decode($feature_title->content)->subheading}}</p>
            <h2>{{json_decode($feature_title->content)->heading}}</h2>

        </div>



        <div class="row mt-5" data-aos="fade-up" data-aos-duration="1000">

            @foreach ($features as $feature)
            <div class="col-lg-3 col-md-6">

                <div class="card-item">

                    <h5 class="mb-4">{{json_decode($feature->content)->heading}}</h5>
                    <p>{{json_decode($feature->content)->description}}
                    </p>

                </div>

            </div>
            @endforeach

        </div>


        <br>
  
        <div class="row mt-5" data-aos="fade-up" data-aos-duration="1000">

            @foreach ($feature_second as $feature )
            <div class="col-lg-4 col-md-4">

                <div class="icon-box text-center">

                    <img src="{{asset('front/images/'.json_decode($feature->content)->icon)}}">

                    <h4>{{json_decode($feature->content)->heading}}</h4>

                    <p>{{json_decode($feature->content)->description}}</p>

                </div>

            </div>
            @endforeach

        </div>


        <!-- FEATURES SECTION END -->




        <!-- PARTNERS LOGO PRICE SECTION START -->

        <!-- <div class="section-title mt-5" id="partner" data-aos="fade-up" data-aos-duration="1000">


            <h2 class="pt-5">Our Partners</h2>


        </div>

        <div class="partners-logo" data-aos="fade-up" data-aos-duration="1000">

            <img src="images/solsealogo.png">
            <img src="images/solriselogo.png">


        </div> -->

        <!-- PARTNERS LOGO SECTION END -->



        <!-- TOKEN PRICE SECTION START -->

        <div class="section-title mt-5" id="roadmap" data-aos="fade-up" data-aos-duration="1000">


            <h2 class="pt-5">{{json_decode($roadmap_title->content)->heading}}</h2>


        </div>


        <div class="roadmap" data-aos="fade-up" data-aos-duration="1000">

            @foreach ($roadmap as $road)
            <div class="roadmap-item">

                <div class="roadmap-circle @if ($loop->first)
                    circle-active
                @endif">
                    {{$loop->iteration}}
                </div>



                <p><b>{{json_decode($road->content)->heading.' '.$loop->iteration}} </b> <br>
                    {!!json_decode($road->content)->description!!}
                    {{-- Website Launch<br>
                    Smart Contracts & Interaction Setup<br>
                    Announce Channels<br>
                    5000 Community Members<br>
                    Seed Sale<br>
                    ICO Sale<br>
                    Marketing Push<br> --}}
                </p>

            </div>

            @if (!$loop->last)
            <hr class="roadmap-hr">
            @endif
            @endforeach




        </div>

        <br>

        <!-- ROADMAP SECTION END -->





        <!-- TEAM SECTION START -->

        <div class="section-title mt-5" id="team">


            <h2 class="pt-5">{{json_decode($team_title->content)->heading}}</h2>


        </div>


        <div class="team">

            <ul class="team-list">
                @foreach ($teams as $team)
                <li class="team-item">
                    <img src="{{asset('front/images/'.json_decode($team->content)->image)}}">
                    <div class="team-info">

                        <h4>{{json_decode($team->content)->name}}</h4>
                        <p>{{json_decode($team->content)->description}}</p>

                    </div>
                </li>
                @endforeach
            </ul>







        </div>

        <!-- TEAM SECTION END -->


        <!-- FAQ SECTION START -->


        <div class="section-title mt-5" id="" data-aos="fade-up" data-aos-duration="1000">


            <h2 class="pt-5">{{json_decode($faq_title->content)->heading}}</h2>
            <h5>{{json_decode($faq_title->content)->subheading}} <a href="mailto:{{json_decode($faq_title->content)->email}}" target="_blank" class="mail-link">{{json_decode($faq_title->content)->email}}</a>
            </h5>


        </div>

        <div class="my-5 position-relative">



            <ol class="faq-list">
                @foreach ($faqs as $faq)
                    
                <li data-aos="fade-up" data-aos-duration="1000">{{json_decode($faq->content)->heading}}
                    <br>
                    {{json_decode($faq->content)->description}}
                </li>
                @endforeach

            </ol>


            <div class="faq-image" data-aos="fade-up" data-aos-duration="1000">
                <img src="{{asset('front/images/image050.png')}}">
            </div>

        </div>










        <!-- FAQ SECTION END -->


        <!-- NEWSLETTER SECTION START -->

        <div class="newsletter-main">



            <div class="row position-relative h-100">

                <div class="col-lg-8 main-column-one  d-flex justify-content-center flex-column">

                    <div class="section-title mt-5" data-aos="fade-up" data-aos-duration="1000">

                        
                        <h2 class="pt-5">{{json_decode($subscription_title->content)->heading}}</h2>


                    </div>

                    <div class="newsletter mt-4" data-aos="fade-up" data-aos-duration="1000">

                        <form>

                            <div class="row justify-content-center">

                                <div class="col-lg-8 col-12">

                                    <input type="email" placeholder="email address">

                                </div>


                                <div class="col-lg-2 col-12 d-flex justify-content-end">

                                    <input type="submit" value="Subscribe" class="custom-btn">

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

                <div class="col-lg-4 main-column-two column-two-footer">

                    <img src="{{asset('front/images/'.json_decode($subscription_title->content)->image)}}" class="img-footer">


                </div>

            </div>

        </div>

        <!-- NEWSLETTER SECTION END -->





    </div>

</section>
@endsection