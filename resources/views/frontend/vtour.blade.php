@extends('frontend.layout.index')
@section('title', 'Beranda')
@section('content')

<div id="parent-content" class="clearfix">
    <section class="blog-content-title-wrap page-head-blog">
        <div class="blog-content-title-overlay"> </div>
        <div class="container">
            <div class="blog-content-title-inner block-center">
                <div class="block-center-inner">
                    <h1>Blog</h1>
                    <ul class="breadcrumbs">
                        <li>
                            <a class="home" href="/" rel=""> <i class="fa fa-home"></i></a>
                        </li>
                        <li><span>Blog</span></li>
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
                            <article>
                                <div class="entry-wrap clearfix">
                                    <div class="entry-thumbnail-wrap">
                                        <div class="entry-thumbnail">
                                            <a class="entry-thumbnail_overlay" href="/madrids-photographer-marathon/" title="Madrids Photographer Marathon"> <img alt="Madrids Photographer Marathon" class="img-responsive" height="480" src="{{url ('public/template')}}/images/44.jpg" width="1170"  style="object-fit: cover; position: static; width: 100%; height: 500px;" /> </a>
                                            <a class="prettyPhoto" data-rel="prettyPhoto" href="{{url ('public/template')}}/images/44.jpg"> <i class="fa fa-expand"></i> </a>
                                        </div>
                                    </div>
                                    <div class="entry-c-wrap">
                                        <div class="entry-c-top-wrap clearfix">
                                            <div class="entry-p-format-icon"> <i class="fa fa-file-text-o">
                                                </i></div>
                                            <div class="entry-c-top-right">
                                                <h3 class="entry-title">
                                                    <a href="/madrids-photographer-marathon/" rel="bookmark" title="Madrids Photographer Marathon">
                                                        Madrids Photographer
                                                        Marathon</a>
                                                </h3>
                                                <div class="entry-p-meta-wrap">
                                                    <ul class="entry-m">
                                                        <!-- <li class="entry-m-author">
                                                            <a href="/author/admin/"> <i class="fa fa-user">
                                                                </i>admin</a>
                                                        </li> -->
                                                        <li class="entry-m-date">
                                                            <a href="/madrids-photographer-marathon/" rel="bookmark" title="Madrids Photographer Marathon"> <i class="fa fa-calendar">
                                                                </i>July 24, 2015 </a>
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
                                            <p>In a professional context it often happens that private or corporate clients corder a publication to be made and presented with the actual content still not being ready. Think of a news blog that&#8217;s filled with content hourly on the day of going live. However, reviewers tend to be distracted by comprehensible content, say, a random text copied newspaper or the internet. The are to focus on the text, disregarding the layout and its elements. Besides, random text risks to be unintendedly humorous or offensive, an unacceptable risk in corporate environments.</p>
                                        </div> <a class="darna-button style4 size-sm" href="/madrids-photographer-marathon/" rel="bookmark" title="Madrids Photographer Marathon">
                                            Play <i class="fa fa-play"></i></a>
                                    </div>
                                </div>
                            </article>
                            <!-- <article>
                                <div class="entry-wrap clearfix">
                                    <div class="entry-thumbnail-wrap">
                                        <div class="entry-thumbnail">
                                            <a class="entry-thumbnail_overlay" href="/madrids-photographer-marathon/" title="Madrids Photographer Marathon"> <img alt="Madrids Photographer Marathon" class="img-responsive" height="480" src="{{url ('public/template')}}/images/44.jpg" width="1170" /> </a>
                                            <a class="prettyPhoto" data-rel="prettyPhoto" href="{{url ('public/template')}}/images/44.jpg"> <i class="fa fa-expand"></i> </a>
                                        </div>
                                    </div>
                                    <div class="entry-c-wrap">
                                        <div class="entry-c-top-wrap clearfix">
                                            <div class="entry-p-format-icon"> <i class="fa fa-file-text-o">
                                                </i></div>
                                            <div class="entry-c-top-right">
                                                <h3 class="entry-title">
                                                    <a href="/madrids-photographer-marathon/" rel="bookmark" title="Madrids Photographer Marathon">
                                                        Madrids Photographer
                                                        Marathon</a>
                                                </h3>
                                                <div class="entry-p-meta-wrap">
                                                    <ul class="entry-m">
                                                        <li class="entry-m-author">
                                                            <a href="/author/admin/"> <i class="fa fa-user">
                                                                </i>admin</a>
                                                        </li>
                                                        <li class="entry-m-date">
                                                            <a href="/madrids-photographer-marathon/" rel="bookmark" title="Madrids Photographer Marathon"> <i class="fa fa-calendar">
                                                                </i>July 24, 2015 </a>
                                                        </li>
                                                        <li class="entry-m-category"> <i class="fa fa-folder-open">
                                                            </i> <a href="/category/architecture/" rel="category tag">
                                                                Architecture</a>, <a href="/category/decoration/" rel="category tag">
                                                                Decoration</a> </li>
                                                        <li class="entry-m-comment">
                                                            <a href="/madrids-photographer-marathon/#respond"> <i class="fa fa-comments">
                                                                </i>1</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="entry-excerpt">
                                            <p>In a professional context it often happens that private or corporate clients corder a publication to be made and presented with the actual content still not being ready. Think of a news blog that&#8217;s filled with content hourly on the day of going live. However, reviewers tend to be distracted by comprehensible content, say, a random text copied newspaper or the internet. The are to focus on the text, disregarding the layout and its elements. Besides, random text risks to be unintendedly humorous or offensive, an unacceptable risk in corporate environments.</p>
                                        </div> <a class="darna-button style4 size-sm" href="/madrids-photographer-marathon/" rel="bookmark" title="Madrids Photographer Marathon">
                                            Read more</a>
                                    </div>
                                </div>
                            </article> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection