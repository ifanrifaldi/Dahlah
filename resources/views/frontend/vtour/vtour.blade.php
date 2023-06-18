@extends('frontend.layout.index')
@section('title', 'Beranda')
@section('content')

<div id="parent-content" class="clearfix">
    <section class="blog-content-title-wrap page-head-blog">
        <div class="blog-content-title-overlay"> </div>
        <div class="container">
            <div class="blog-content-title-inner block-center">
                <div class="block-center-inner">
                    <h1>V-TOUR</h1>
                    <ul class="breadcrumbs">
                        <li>
                            <a class="home" href="{{url ('/')}}" rel=""> <i class="fa fa-home"></i></a>
                        </li>
                        <li><span>V-TOUR</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <main role="main" class="site-content-archive">
        <div class="container clearfix">
            <div class="row clearfix">
                <div class="site-content-archive-inner col-md-12">
                    <div class="blog-wrap layout-container">
                        <div class="blog-inner clearfix">
                            @foreach($list_vtour as $vtour)
                            <article>
                                <div class="entry-wrap clearfix">
                                    <div class="entry-thumbnail-wrap">
                                        <div class="entry-thumbnail">
                                            <a class="entry-thumbnail_overlay" href="{{url ("public/$vtour->foto")}}" title="Madrids Photographer Marathon"> <img alt="Madrids Photographer Marathon" class="img-responsive" height="480" src="{{ url("public/$vtour->foto") }}" width="1170"  style="object-fit: cover; position: static; width: 100%; height: 500px;" /> </a>
                                            <a class="prettyPhoto" data-rel="prettyPhoto" href="{{url ("public/$vtour->foto")}}"> <i class="fa fa-expand"></i> </a>
                                        </div>
                                    </div>
                                    <div class="entry-c-wrap">
                                        <div class="entry-c-top-wrap clearfix">
                                            <div class="entry-p-format-icon"> <i class="fa fa-file-text-o">
                                                </i></div>
                                            <div class="entry-c-top-right">
                                                <h3 class="entry-title">
                                                    <a href="" rel="bookmark" title="Madrids Photographer Marathon">
                                                    {{$vtour->judul}}    
                                                </a>
                                                </h3>
                                                <div class="entry-p-meta-wrap">
                                                    <ul class="entry-m">
                                                        <!-- <li class="entry-m-author">
                                                            <a href="/author/admin/"> <i class="fa fa-user">
                                                                </i>admin</a>
                                                        </li> -->
                                                        <li class="entry-m-date">
                                                            <a href="/madrids-photographer-marathon/" rel="bookmark" title="Madrids Photographer Marathon"> <i class="fa fa-calendar">
                                                                </i>{{ $vtour->created_at->diffForHumans() }}</a>
                                                        </li>
                                                        <!-- <li class="entry-m-category"> <i class="fa fa-folder-open">
                                                            </i> <a href="/category/architecture/" rel="category tag">
                                                                Architecture</a>, <a href="/category/decoration/" rel="category tag">
                                                                Decoration</a> </li>
                                                        <li class="entry-m-comment">
                                                            <a href="/madrids-photographer-marathon/#respond"> <i class="fa fa-comments">
                                                                </i>1</a>
                                                        </li> -->
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="entry-excerpt">
                                            <p>
                                                {{$vtour->deskripsi}}
                                            </p>
                                        </div> <a class="darna-button style4 size-sm" href="{{url("view/$vtour->id")}}" rel="bookmark" title="Madrids Photographer Marathon">
                                            Play <i class="fa fa-play"></i></a>
                                    </div>
                                </div>
                            </article>
                           @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection