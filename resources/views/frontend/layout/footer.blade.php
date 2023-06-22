<footer class="overlay-wrap">
    <div class="overlay"> </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-push-3 text-center">
                <div class="footer-logo ">
                    <a href="./index.html"> <img alt="" src="{{url ('public/template') }}/images/brands/logo2.png" style="height: 50px;"></a>
                    <div class="clear"> </div>
                    <p>Keanekaragaman adalah tentang kita semua, dan tentang kita harus mencari cara untuk berjalan melalui dunia ini bersama-sama.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 ">
                <div class="footer-widget">
                    <h5>Politeknik Negeri Ketapang </h5>
                    <ul class="footer-contact">
                    <li>Jalan Rangge Sentap, Dalong, Sukaharja, </li>
                        <li>Kec. Delta Pawan, Kabupaten Ketapang,</li>
                        <li> Kalimantan Barat 78112 </li>
                        <li><a href="https://www.google.com/maps/place/Politeknik+Negeri+Ketapang/@-1.8168375,109.9864423,17z/data=!3m1!4b1!4m6!3m5!1s0x2e0518e6aef713bf:0xe05ee65e3627ba6c!8m2!3d-1.8168375!4d109.988631!16s%2Fg%2F11c3k2twm0?entry=ttu"> <i class="fa fa-map-marker"></i> </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="footer-widget">
                    <h5>Makam Tanjung Pura</h5>
                    <ul class="footer-contact">
                        <!-- <li><i class="fa fa-map-marker"></i> <a href="http://themes.g5plus.net/">Visit our themes <br>    Visit our themes</a></li> -->
                        <li>Tj. Pura, Kec. Muara Pawan,</li>
                        <li>Kabupaten Ketapang, Kalimantan Barat </li>
                        <li>78821</li>
                        <li><a href="https://www.google.com/maps/place/Makam+Raja+Tanjungpura/@-1.7242576,110.2057323,17z/data=!3m1!4b1!4m6!3m5!1s0x2e050273ce331479:0x75ee7212911e95c8!8m2!3d-1.7242576!4d110.207921!16s%2Fg%2F11g01vgyqr?entry=ttu"> <i class="fa fa-map-marker"></i> </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="footer-widget">
                    <h5>Keraton Matan</h5>
                    <ul class="footer-contact">
                        <!-- <li><i class="fa fa-map-marker"></i> <a href="http://themes.g5plus.net/">Visit our themes <br>    Visit our themes</a></li> -->
                        <li>Mulia Kerta, Kec. Benua Kayong, </li>
                        <li>Kabupaten Ketapang, Kalimantan Barat </li>
                        <li>78821</li>
                        <li><a href="https://www.google.com/maps/place/Keraton+Kerajaan+Matan+Tanjungpura/@-1.8617181,109.9787346,17z/data=!3m1!4b1!4m6!3m5!1s0x2e0518246fcc8edf:0x452050502a61bd02!8m2!3d-1.8617181!4d109.9809233!16s%2Fg%2F11c3k569sg?entry=ttu"> <i class="fa fa-map-marker"></i> </a></li>
                    </ul>
                </div>
            </div>
            <!-- <div class="col-md-3 col-sm-6">
                <div class="footer-widget">
                    <h5>Twitter Feeds</h5>
                    <div id="tweecool"> </div>
                </div>
            </div> -->
            <!-- <div class="col-md-3 col-sm-6">
                <div class="footer-widget">
                    <h5>Mailing List</h5>
                    <div class="footer-newsletter">
                        <p>Enter your email address for our mailing list to keep your self our lastest updated.</p>
                        <form>
                            <input placeholder="Email Address" required="" type="email">
                            <button type="submit"><i class="fa fa-paper-plane">
                                </i></button>
                        </form>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="footer-copyright">
            <div class="row">
                <div class="col-md-6">
                    <ul class="footer-menu list-inline text-uppercase">
                        <li class="{{ checkRouteActive('/') }}"> <a href="{{url ('/')}}">Beranda</a></li>
                        <li class="{{ checkRouteActive('vtour') }}"><a href="{{url ('vtour')}}">V-Tour</a></li>
                        <li class="{{ checkRouteActive('foto') }}"><a href="{{url ('foto')}}">Foto</a></li>
                        <li class="{{ checkRouteActive('video') }}"><a href="{{url ('video')}}">Video</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <p class="pull-right text-uppercase">Copyright &copy; 2023 @if(date("Y") > '2023') - {{date("Y")}} @endif <a href="#">All rights reserved </a></p>
                </div>
            </div>
        </div>
    </div>
</footer>