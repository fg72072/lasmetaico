@extends('layouts.app')
@section('section')
<div class="container">

    <div class="row  justify-content-center ">

        <div class="col-lg-12">
            <div class="custom-section">
                <div class="sale-box" style="text-align: left;">
                    <div class="detail-first">
                        <div class="d-j-flex">
                            <div>
                                <div class="d-flex align-items-center">
                                    <h3><span class="name"></span> <span class="symbol">(Ft)</span></h3>
                                    <span class=" status"></span>
                                </div>
                                <h4>Token Price: <span class="price"></span></h4>
                            </div>
                            <div>
                                <h5>Buy Time</h5>
                                <div class="count-down ">
                                    <div>
                                        <span class="text-white " id="buy_days"></span>
                                        <span class="text-white">Days</span>
                                    </div>
                                    <div>
                                        <span class="text-white " id="buy_hours"></span>
                                        <span class="text-white">Hours</span>
                                    </div>
                                    <div>
                                        <span class="text-white " id="buy_minutes"></span>
                                        <span class="text-white">Minutes</span>
                                    </div>

                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="manager">

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="d-j-flex">
                            <div class="contract-section">
                                <h5>Contract:</h5>
                                <h5 class="sale_contract_address"></h5>
                                <div class="mt-3">
                                    <h5>Token:</h5>
                                    <h5 class="token_address"></h5>
                                </div>
                            </div>
                            <div>
                                <h5 class="mt-4">Lock Time</h5>
                                <div class="count-down">
                                    <div>
                                        <span class="text-white" id="lock_days"></span>
                                        <span class="text-white">Days</span>
                                    </div>
                                    <div>
                                        <span class="text-white" id="lock_hours"></span>
                                        <span class="text-white">Hours</span>
                                    </div>
                                    <div>
                                        <span class="text-white" id="lock_minutes"></span>
                                        <span class="text-white">Minutes</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="submit" onclick="claim()" value="Claim" class="custom-btn mt-2"
                                        name="submit">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="detail-second mt-5">
                        <div class="d-flex box-section">
                            <div class="box">
                                <span>Ammount For Sale:</span>
                                <br>
                                <span class="ammount-for-sale"></span>
                            </div>
                            <div class="box">
                                <span>Ammount Raised:</span>
                                <br>
                                <span class="ammount-raised"></span>
                            </div>


                        </div>
                        <div class="mt-5">
                            <div class="d-j-flex">
                                <div>
                                    <h4>Token Sold</h4>
                                    <span class="token-sold"></span>
                                </div>
                                <div>
                                    <h4>Max Available</h4>
                                    <span class="max-available"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 newsletter mt-4">
                                <h1 class="">Buy Token</h1>
                                <input type="text" placeholder="Enter Ammount in BNB" name="value" value="">
                                <input type="submit" onclick="icoaddress()" value="Buy" class="custom-btn mt-4"
                                    name="submit">
                            </div>
                        </div>
                    </div>
                </div>


            </div>


        </div>

    </div>

</div>
@endsection