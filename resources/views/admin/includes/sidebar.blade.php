
  <div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light"
                    src="{{asset('front/images/ddlogo.png')}}" alt=""><img class="img-fluid for-dark"
                    src="" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle"
                    data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid"
                    src="../assets/images/logo/logo-icon.png" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="index.html"><img class="img-fluid"
                                src="../assets/images/logo/logo-icon.png" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i
                                class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-list">
                        {{-- <label class="badge badge-success">2</label><a class="sidebar-link sidebar-title"
                            href="#"><i data-feather="home"></i><span class="lan-3">Dashboard
                            </span></a>
                        <ul class="sidebar-submenu">
                            <li><a class="lan-4" href="index.html">Default</a></li>
                            <li><a class="lan-5" href="dashboard-02.html">Ecommerce</a></li>
                        </ul> --}}
                    </li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{url('admin/dashboard')}}" data-bs-original-title="" title=""><i data-feather="home"></i><span>Dashboard</span><div class="according-menu"><i class="fa fa-angle-right"></i></div></a></li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{url('admin/home-section')}}" data-bs-original-title="" title=""><i data-feather="layers"></i><span>Home Section</span><div class="according-menu"><i class="fa fa-angle-right"></i></div></a></li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{url('admin/how-to-buy')}}" data-bs-original-title="" title=""><i data-feather="layers"></i><span>How to Buy Section</span><div class="according-menu"><i class="fa fa-angle-right"></i></div></a></li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{url('admin/our-tokens')}}" data-bs-original-title="" title=""><i data-feather="layers"></i><span>Our Tokens Section</span><div class="according-menu"><i class="fa fa-angle-right"></i></div></a></li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{url('admin/tokenomics')}}" data-bs-original-title="" title=""><i data-feather="layers"></i><span>Tokenomics Section</span><div class="according-menu"><i class="fa fa-angle-right"></i></div></a></li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{url('admin/features')}}" data-bs-original-title="" title=""><i data-feather="layers"></i><span>Features Section</span><div class="according-menu"><i class="fa fa-angle-right"></i></div></a></li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{url('admin/roadmap')}}"  data-bs-original-title="" title=""><i data-feather="layers"></i><span>Roadmap Section</span><div class="according-menu"><i class="fa fa-angle-right"></i></div></a></li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{url('admin/team')}}"  data-bs-original-title="" title=""><i data-feather="layers"></i><span>Team Section</span><div class="according-menu"><i class="fa fa-angle-right"></i></div></a></li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{url('admin/faq')}}"  data-bs-original-title="" title=""><i data-feather="layers"></i><span>FAQs Section</span><div class="according-menu"><i class="fa fa-angle-right"></i></div></a></li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{url('admin/subscription')}}"  data-bs-original-title="" title=""><i data-feather="layers"></i><span>Subscription Section</span><div class="according-menu"><i class="fa fa-angle-right"></i></div></a></li>
                        
                        
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{url('manager')}}" target="_blank" data-bs-original-title="" title=""><i data-feather="layers"></i><span>Manager</span><div class="according-menu"><i class="fa fa-angle-right"></i></div></a></li>
                
                    </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>