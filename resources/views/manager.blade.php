@extends('layouts.app')
@section('section')
<section class="manager-section">

    <div class="container">



        <div class="newsletter-main">



            <div class="row h-100 justify-content-center">

                <div class="col-lg-6 main-column-one  d-flex justify-content-center flex-column">
                    <div class="current-balance mt-5 text-center">
                    </div>

                    <div class="sale-box form-section">
                        <div class="section-title mt-1" data-aos="fade-up" data-aos-duration="1000">


                            <h2 class="pt-5">Release</h2>


                        </div>

                        <div class="newsletter mt-4" data-aos="fade-up" data-aos-duration="1000">
                            <div class="detail-first">
                                <div class="d-j-flex">
                                    <h5>Locked Balance :</h5>
                                    <h5 class="balanceOf"></h5>
                                </div>
                                <div class="text-center">
                                <div class="count-down justify-content-center">
                                    <div>
                                        <span class="text-white " id="release_days"></span>
                                        <span class="text-white">Days</span>
                                    </div>
                                    <div>
                                        <span class="text-white " id="release_hours"></span>
                                        <span class="text-white">Hours</span>
                                    </div>
                                    <div>
                                        <span class="text-white " id="release_minutes"></span>
                                        <span class="text-white">Minutes</span>
                                    </div>
                                    <div>
                                        <span class="text-white " id="release_seconds"></span>
                                        <span class="text-white">Seconds</span>
                                    </div>

                                </div>
                                <div class="d-flex justify-content-center">
                  
                                </div>
                                <div class="col-lg-12 d-flex justify-content-center mt-3">
                                    <input type="submit" value="Release" onclick="releasePayment();" class="custom-btn" name="submit">
                                </div>
                            </div>
                            </div>


                        </div>

                    </div>
                </div>

            </div>



        </div>
        <div class="newsletter-main">



            <div class="row h-100 justify-content-center">

                <div class="col-lg-6 main-column-one  d-flex justify-content-center flex-column">

                    <div class="sale-box form-section">
                        <div class="section-title mt-5" data-aos="fade-up" data-aos-duration="1000">


                            <h2 class="pt-5">Transfer</h2>


                        </div>

                        <div class="newsletter mt-4" data-aos="fade-up" data-aos-duration="1000">


                                <div class="row justify-content-center gy-3">



                                    <div class="col-lg-12">
                                        <input type="text" placeholder="Address Recipient" name="transferrecipient"
                                            value="">
                                    </div>

                                    <div class="col-lg-12">
                                        <input type="text" placeholder="Ammount" name="transferammount" value="">
                                    </div>


                                    <div class="col-lg-12 d-flex justify-content-end mt-3">
                                        <input type="submit" value="Submit" class="custom-btn" onclick="transfer()" name="submit">
                                    </div>



                                </div>


                        </div>

                    </div>
                </div>

            </div>



        </div>

        <div class="newsletter-main">



            <div class="row h-25 justify-content-center">

                <div class="col-lg-6 main-column-one  d-flex justify-content-center flex-column">

                    <div class="sale-box form-section">
                        <div class="section-title " data-aos="fade-up" data-aos-duration="1000">


                            <h2 class="pt-5">Token Sale</h2>


                        </div>

                        <div class="newsletter " data-aos="fade-up" data-aos-duration="1000">


                            <div class="row justify-content-center gy-3">



                                <div class="col-lg-12">
                                    <input type="text" placeholder="Lock Time" name="lockTime" value="">
                                </div>

                                <div class="col-lg-12">
                                    <select name="rate" id="rate">
                                        <option value="0">0.035 BUSD</option>
                                        <option value="1">0.040 BUSD</option>
                                        <option value="2">0.045 BUSD</option>
                                    </select>
                                </div>

                                <div class="col-lg-12">
                                    <input type="text" placeholder="Ammount" name="percent" value="">
                                </div>


                                <div class="col-lg-12">
                                    <input type="text" placeholder="min" name="min" value="">
                                </div>



                                <div class="col-lg-12 d-flex justify-content-end mt-3">
                                    <input type="submit" onclick="manager()" value="Submit" class="custom-btn"
                                        name="submit">
                                </div>



                            </div>


                        </div>
                    </div>

                </div>

            </div>



        </div>






    </div>

</section>
@endsection