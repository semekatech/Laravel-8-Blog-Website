@extends('layouts.layout')
@section('content')
<!-- ##### Post Details Area Start ##### -->
  <div class="catagory-featured-post bg-overlay clearfix" style="background-image: url({{ asset('images/blogimages/' . $top->image) }})">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-lg-9">
                    <!-- Post Content -->
                    <div class="post-content">
                        <p class="tag"><span>{{ $top->category }} CATEGORY</span></p>
                        <a href="/blog-details/{{ $top->slug }}" class="post-title"><br>{{ $top->title }}</a>

                        <span class="post-date">{{ date('M d, Y',strtotime($top->created_at)); }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="intro-news-area section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Intro News Tabs Area -->
                <div class="col-12 col-lg-8">
                    <div class="intro-news-tab">

                        

                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav1">
                                <div class="row">
                                    <!-- Single News Area -->
                                   

                                    <!-- Single News Area -->
                                    @foreach($cat as $news)
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="/blog-details/{{ $news->slug }}"><img src="{{ asset('images/blogimages/' . $news->image) }}" style="height: 250px;" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="/blog-details/{{ $news->slug }}" class="post-title">{{ $news->slug }}</a>
                                                <a href="/blog-details/{{ $news->slug }}" class="post-author">By Admin</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                   

                                    
                                </div>
                            </div>

                  
                        </div>
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area">

                        <!-- Newsletter Widget -->
                        <div class="single-widget-area newsletter-widget mb-30">
                            <h4>Subscribe to our newsletter</h4>
                            <form action="#" method="post">
                                <input type="email" name="nl-email" id="nlemail" placeholder="Your E-mail">
                                <button type="submit" class="btn newsbox-btn w-100">Subscribe</button>
                            </form>
                            <p class="mt-30">Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh . volutpat lobortis.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Add Area End ##### -->
@endsection