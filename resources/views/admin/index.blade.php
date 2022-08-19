@extends('admin.layouts.app')
@section('section')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Dashboard</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Default </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row second-chart-list third-news-update">
            <div class="col-xl-12 col-lg-12 col-12  morning-sec box-col-12">
                <div class="card o-hidden profile-greeting w-100">
                    <div class="card-body">
                        <div class="media">
                            <div class="badge-groups w-100">
                                <div class="badge f-12"><i class="me-1"
                                        data-feather="clock"></i><span id="txt"></span></div>
                                <div class="badge f-12"><i class="fa fa-spin fa-cog f-14"></i></div>
                            </div>
                        </div>
                        <div class="greeting-user text-center">
                            <div class="profile-vector"><img class="img-fluid"
                                    src="../assets/images/dashboard/welcome.png" alt=""></div>
                            <h4 class="f-w-600"><span id="greeting">Good Morning</span> <span
                                    class="right-circle"><i
                                        class="fa fa-check-circle f-14 middle"></i></span></h4>
                            <p><span> Welcome to the dashboard</span></p>
                            <div class="whatsnew-btn"><a class="btn btn-primary">Whats New !</a></div>
                            <div class="left-icon"><i class="fa fa-bell"> </i></div>
                        </div>
                    </div>
                </div>
            </div>
            <iframe src="http://localhost/lasmetaico/public/" style="height:700px;margin-bottom:5rem" title="description"></iframe>
          
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection
