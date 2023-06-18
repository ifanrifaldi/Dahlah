<!-- <div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-6 tb-left">
                <ul class="list-inline text-uppercase">
                    <li><i class="fa fa-phone"></i>Call Us Now 0100 843 1112</li>
                    <li><i class="fa fa-envelope"></i> <a href="mailto:darna@company.com">darna@company.com</a> </li>
                </ul>
            </div>
            <div class="col-md-6 tb-right">
                <ul class="top-social list-inline pull-right">
                    <li><a href="#" target="_blank"><i class="fa fa-facebook">
                            </i></a> </li>
                    <li><a href="#" target="_blank"><i class="fa fa-twitter">
                            </i></a> </li>
                    <li>
                        <a href="#" target="_blank"> <i class="fa fa-google-plus"></i></a>
                    </li>
                    <li><a href="#" target="_blank"><i class="fa fa-behance">
                            </i></a> </li>
                </ul>
            </div>
        </div>
    </div>
</div> -->

@php
function checkRouteActive($route)
{
if (Route::current()->uri == $route) {
return 'active';
}
}
@endphp

<header>
    <div class="container">
        <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
               NAVIGATION STARTS
               -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
        <div class="navbar-header">
            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                  BURGR MENU STARTS
                  -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
            <button class=" burger-menu easy-sidebar-toggle"></button>
            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                  BURGR MENU END
                  -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                  LOGO START
                  -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
            <a class="navbar-brand" href="home_1.html"> <img alt="" src="{{url ('public/template') }}/images/brands/logo.png" style="height: 50px;"></a>
            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                  LOGO END
                  -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
        </div>
        <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
               MENU START
               -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
        <nav class="navbar navbar-default">
            <div class="container">
                <div id="navbar" class="navbar-collapse ">
                    <ul class="nav navbar-nav navbar-right ">
                        <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                           MENU HOME START
                           -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                        <li class="nav-item {{ checkRouteActive('/') }} ">
                            <a class="nav-link " href="{{ url('/') }}">Beranda</a>
                        </li>
                        <li class="nav-item {{ checkRouteActive('vtour') }} ">
                            <a class="nav-link " href="{{ url('vtour') }}">V-tour</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link " href="{{ url('profil') }}">Vtour</a>
                        </li> -->
                        <li class="dropdown {{ checkRouteActive('foto') }} {{ checkRouteActive('video') }} "> <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                                Galery<span class="x-caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-left">
                                <li><a href="{{ url('foto') }}">Foto</a></li>
                                <li><a href="{{ url('video') }}">Video</a></li>
                            </ul>
                        </li>

                        <!-- <li class="header-customize">
                            <div class="get-a-quote-wrapper header-customize-item">
                                <a class="get-a-quote-button" href="#quote"> <i class="fa fa-eye"></i><span>Vtour</span></a>
                            </div>
                        </li> -->
                        <!-- <li class="header-customize">
                            <div class="search-button-wrapper header-customize-item">
                                <a class="icon-search-menu" data-search-type="standard" href="#search"> <i class="fa fa-search"></i></a>
                            </div>
                            <div class="shopping-cart-wrapper header-customize-item">
                                <div class="widget_shopping_cart_content">
                                    <div class="widget_shopping_cart_icon"> <i class="fa fa-shopping-cart"></i><span>0</span> </div>
                                    <div class="cart_list_wrapper ">
                                        <ul class="cart_list product_list_widget ">
                                            <li class="empty">
                                                <h4>An empty cart</h4>
                                                <p>You have no item in your shopping cart</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="get-a-quote-wrapper header-customize-item">
                                <a class="get-a-quote-button" href="#quote"> <i class="fa fa-envelope"></i><span>Get a quote</span></a>
                            </div>
                        </li> -->
                        <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                           SHOPCART, SEARCH AND GET QUOTE AREA END
                           -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                MENU  END
               -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
        <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
               NAVIGATION END
               -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    </div>
</header>