@extends('layouts.website.sidebar-contact')


@php
    $pageData = config("sourcefli.siteData");
    $qouteNav = config("sourcefli.siteData.nav.quote");
    $teamData = config("sourcefli.asbTeam");
    $bestTime = config("sourcefli.formData.contact.bestTime");
    $selections = config("sourcefli.formData.contact.selections");
    $referredBy = config("sourcefli.formData.contact.referredBy");
@endphp

@section('title')
    Contact Us
@endsection

@section('hero')
    @include('partials/website/_hero-slim')
@endsection


@section('content')
    <div class="section section-blog section-pad">
        <div class="container">
            <div class="content row">

                <div class="row">
                    <div class="col-md-8">
                        <!-- Blog Post Loop -->
                        <div class="row">
                            <ul class="blog-posts post-col2">
                        
                            <li class="post post-loop col-md-6">
                                <div class="post-thumbs">
                                    <a href="news-details.html"><img alt="" src="image/news-a.jpg"></a>
                                </div>
                                <div class="post-entry">
                                    <div class="post-meta">
                                        <span class="pub-date"><em class="fa fa-calendar" aria-hidden="true"></em> 22 Sep, 2017 </span>
                                    </div>
                                    <h2><a href="news-details.html">Time To Review Your Universal Life Policy</a></h2>
                                    <p>You had a plan and you amet consectetur adipiscing elit sed do eiusmod tempor. Dolore magna aliqua enim ad minim veniam nostrud exercitation...</p>
                                    <a class="btn-link link-arrow-sm" href="news-details.html">Read More</a>
                                </div>
                            </li>
                            
                            <li class="post post-loop col-md-6">
                                <div class="post-thumbs">
                                    <a href="news-details.html"><img alt="" src="image/news-b.jpg"></a>
                                </div>
                                <div class="post-entry">
                                    <div class="post-meta">
                                        <span class="pub-date"><em class="fa fa-calendar" aria-hidden="true"></em> 12 Sep, 2017 </span>
                                    </div>
                                    <h2><a href="news-details.html">Home Improvement: Contractor Vs. Do-It-Yourself</a></h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor. Dolore magna aliqua enim ad minim veniam nostrud exercitation...</p>
                                    <a class="btn-link link-arrow-sm" href="news-details.html">Read More</a>
                                </div>
                            </li>
                            
                            <li class="post post-loop col-md-6">
                                <div class="post-thumbs">
                                    <a href="news-details.html"><img alt="" src="image/news-c.jpg"></a>
                                </div>
                                <div class="post-entry">
                                    <div class="post-meta">
                                        <span class="pub-date"><em class="fa fa-calendar" aria-hidden="true"></em> 29 Aug, 2017 </span>
                                    </div>
                                    <h2><a href="news-details.html">5 Tips For A More Secure Workplace</a></h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor. Dolore magna aliqua enim ad minim veniam nostrud exercitation...</p>
                                    <a class="btn-link link-arrow-sm" href="news-details.html">Read More</a>
                                </div>
                            </li>
                            
                            <li class="post post-loop col-md-6">
                                <div class="post-thumbs">
                                    <a href="news-details.html"><img alt="" src="image/news-d.jpg"></a>
                                </div>
                                <div class="post-entry">
                                    <div class="post-meta">
                                        <span class="pub-date"><em class="fa fa-calendar" aria-hidden="true"></em> 17 Jul, 2017 </span>
                                    </div>
                                    <h2><a href="news-details.html">4 Ways To Save On Your Homeowner Insurance Premiums</a></h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor. Dolore magna aliqua enim ad minim veniam nostrud exercitation...</p>
                                    <a class="btn-link link-arrow-sm" href="news-details.html">Read More</a>
                                </div>
                            </li>

                            <li class="post post-loop col-md-6">
                                <div class="post-thumbs">
                                    <a href="news-details.html"><img alt="" src="image/news-b.jpg"></a>
                                </div>
                                <div class="post-entry">
                                    <div class="post-meta">
                                        <span class="pub-date"><em class="fa fa-calendar" aria-hidden="true"></em> 15, May 2017 </span>
                                    </div>
                                    <h2><a href="news-details.html">Mariano Rivera Teaches Fire Safety to Student</a></h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor. Dolore magna aliqua enim ad minim veniam nostrud exercitation...</p>
                                    <a class="btn-link link-arrow-sm" href="news-details.html">Read More</a>
                                </div>
                            </li>
                            
                            <li class="post post-loop col-md-6">
                                <div class="post-thumbs">
                                    <a href="news-details.html"><img alt="" src="image/news-a.jpg"></a>
                                </div>
                                <div class="post-entry">
                                    <div class="post-meta">
                                        <span class="pub-date"><em class="fa fa-calendar" aria-hidden="true"></em> 26, Apr 2017 </span>
                                    </div>
                                    <h2><a href="news-details.html">Why Do I Need Insurance After I Close My Business?</a></h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor. Dolore magna aliqua enim ad minim veniam nostrud exercitation...</p>
                                    <a class="btn-link link-arrow-sm" href="news-details.html">Read More</a>
                                </div>
                            </li>
                            
                        </ul>
                        </div>
                        <div class="clear"></div>
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a></li>
                        </ul>
                        <!-- End Blog Post -->
                    </div>
                    
                    <!-- Sidebar -->
                    <div class="col-md-4">
                        <div class="sidebar-right">
                            <div class="wgs-box wgs-search">
                                <div class="wgs-content">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Search...">
                                        <button class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>

                            <div class="wgs-box wgs-recents">
                                <h3 class="wgs-heading">Recent Posts</h3>
                                <div class="wgs-content">
                                    <ul class="blog-recent">
                                        <li>
                                            <a href="#">
                                                <img alt="" src="image/news-thumb-d.jpg">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit volup accus antium doloremque laudantiu...</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="" src="image/news-thumb-c.jpg">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit volup accus antium doloremque laudantiu...</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="" src="image/news-thumb-b.jpg">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit volup accus antium doloremque laudantiu...</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="" src="image/news-thumb-a.jpg">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit volup accus antium doloremque laudantiu...</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="wgs-box wgs-tags">
                                <h3 class="wgs-heading">Tags</h3>
                                <div class="wgs-content">
                                    <ul class="tag-list clearfix">
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Life</a></li>
                                        <li><a href="#">Personal</a></li>
                                        <li><a href="#">Safe</a></li>
                                        <li><a href="#">Fast</a></li>
                                        <li><a href="#">Autos</a></li>
                                        <li><a href="#">Benefits</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="wgs-box boxed boxed-flat wgs-contact-info">
                                <div class="wgs-content">
                                    <h5>Contact Information</h5>
                                    <p><strong>Insurify Inc.</strong><br>
                                    34 South Franklin Road <br>Santa Ana, CA 8975, USA.</p>
                                    <p><strong>Contact Number</strong> <br>
                                    Phone: 781-123-9865<br>
                                    Toll Free: 800-123-5689</p>
                                    <p><a href="claims.html" class="btn-link link-arrow-sm">Insurance Claim</a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Sidebar #end -->

                </div>

            </div>
        </div>
    </div>
@endsection

@section('sidebar')
    @include('partials/website/_sidebar-contact')    
@endsection

@section('belowMain')
    @include('partials/website/_team-contact-details')
@endsection

@section('preFooter')
    @include('components/_blue-bg-cta')    
@endsection
