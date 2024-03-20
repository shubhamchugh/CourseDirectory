@extends('edublink.layouts.master')


@section('content')

<!--=====================================-->
<!--=        Blog Area Start         =-->
<!--=====================================-->
<div class="edu-event-area event-area-1 section-gap-equal-60">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4 order-lg-2">
                <div class="course-sidebar-2">

                    <!-- Start Single Widget  -->
                    <div class="edu-blog-widget widget-search">
                        <div class="inner">
                            <h4 class="widget-title">Search</h4>
                            <div class="content">
                                <form class="blog-search" action="#">
                                    <button class="search-button"><i class="icon-2"></i></button>
                                    <input type="text" placeholder="Search">
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                    <!-- Start Single Widget  -->
                    <div class="edu-blog-widget widget-latest-post">
                        <div class="inner">
                            <h4 class="widget-title">Latest Post</h4>
                            <div class="content latest-post-list">
                                <div class="latest-post">
                                    <div class="thumbnail">
                                        <a href="blog-details.html">
                                            <img src="assets/images/blog/small-post-01.jpg" alt="Blog Images">
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h6 class="title"><a href="blog-details.html">Instructional Design &amp; Adult
                                                Learners</a></h6>
                                        <ul class="blog-meta">
                                            <li><i class="icon-27"></i>22 Nov, 2024</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="latest-post">
                                    <div class="thumbnail">
                                        <a href="blog-details.html">
                                            <img src="assets/images/blog/small-post-02.jpg" alt="Blog Images">
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h6 class="title"><a href="blog-details.html">Believe in Yourself! Have
                                                Faith!</a></h6>
                                        <ul class="blog-meta">
                                            <li><i class="icon-27"></i>22 Nov, 2024</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="latest-post">
                                    <div class="thumbnail">
                                        <a href="blog-details.html">
                                            <img src="assets/images/blog/small-post-03.jpg" alt="Blog Images">
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h6 class="title"><a href="blog-details.html">Live Online Lessons &
                                                eLearning</a></h6>
                                        <ul class="blog-meta">
                                            <li><i class="icon-27"></i>22 Nov, 2024</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                    <!-- Start Single Widget  -->
                    <div class="edu-blog-widget widget-categories">
                        <div class="inner">
                            <h4 class="widget-title">Categories</h4>
                            <div class="content">
                                <ul class="category-list">
                                    <li><a href="#">Business Studies <span>(3)</span></a></li>
                                    <li><a href="#">Computer Engineering <span>(7)</span></a></li>
                                    <li><a href="#">Medical &amp; Health<span>(2)</span></a></li>
                                    <li><a href="#">Software <span>(1)</span></a></li>
                                    <li><a href="#">Web Development <span>(3)</span></a></li>
                                    <li><a href="#">Uncategorized <span>(9)</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->

                    <!-- Start Single Widget  -->
                    <div class="edu-blog-widget widget-categories">
                        <div class="inner">
                            <h4 class="widget-title">Archives</h4>
                            <div class="content">
                                <ul class="category-list">
                                    <li><a href="#">2017 Nevember <span>(3)</span></a></li>
                                    <li><a href="#">2018 December <span>(7)</span></a></li>
                                    <li><a href="#">2019 January<span>(2)</span></a></li>
                                    <li><a href="#">2020 February <span>(1)</span></a></li>
                                    <li><a href="#">2024 March <span>(3)</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                    <!-- Start Single Widget  -->
                    <div class="edu-blog-widget widget-tags">
                        <div class="inner">
                            <h4 class="widget-title">Tags</h4>
                            <div class="content">
                                <div class="tag-list">
                                    <a href="#">Language</a>
                                    <a href="#">eLearn</a>
                                    <a href="#">Tips</a>
                                    <a href="#">Course</a>
                                    <a href="#">Motivation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                </div>
            </div>
            <div class="col-lg-8 order-lg-1 col-pr--35">
                <div class="row g-5">
                    <div class="col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-event-list event-list-2">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="{{ route('blog.post.index') }}">
                                        <img src="assets/images/event/event-14.jpg" alt="Event Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <ul class="event-meta">
                                        <li><i class="icon-27"></i>Oct 10, 2024</li>
                                        <li><i class="icon-33"></i>08:00AM-10:00PM</li>
                                    </ul>
                                    <h4 class="title"><a href="{{ route('blog.post.index') }}">Global Education Fall
                                            Meeting for
                                            Everyone</a></h4>
                                    <span class="event-location"><i class="icon-40"></i>Newyork City, USA</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor
                                        incididunt.</p>
                                    <div class="read-more-btn">
                                        <a class="edu-btn btn-medium btn-border"
                                            href="{{ route('blog.post.index') }}">Learn More <i class="icon-4"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-event-list event-list-2">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="{{ route('blog.post.index') }}">
                                        <img src="assets/images/event/event-15.jpg" alt="Event Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <ul class="event-meta">
                                        <li><i class="icon-27"></i>Oct 10, 2024</li>
                                        <li><i class="icon-33"></i>08:00AM-10:00PM</li>
                                    </ul>
                                    <h4 class="title"><a href="{{ route('blog.post.index') }}">Our excellence partner
                                            France
                                            Pavilion</a></h4>
                                    <span class="event-location"><i class="icon-40"></i>Newyork City, USA</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor
                                        incididunt.</p>
                                    <div class="read-more-btn">
                                        <a class="edu-btn btn-medium btn-border"
                                            href="{{ route('blog.post.index') }}">Learn More <i class="icon-4"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-event-list event-list-2">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="{{ route('blog.post.index') }}">
                                        <img src="assets/images/event/event-16.jpg" alt="Event Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <ul class="event-meta">
                                        <li><i class="icon-27"></i>Oct 10, 2024</li>
                                        <li><i class="icon-33"></i>08:00AM-10:00PM</li>
                                    </ul>
                                    <h4 class="title"><a href="{{ route('blog.post.index') }}">London International
                                            Conference</a>
                                    </h4>
                                    <span class="event-location"><i class="icon-40"></i>Newyork City, USA</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor
                                        incididunt.</p>
                                    <div class="read-more-btn">
                                        <a class="edu-btn btn-medium btn-border"
                                            href="{{ route('blog.post.index') }}">Learn More <i class="icon-4"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-event-list event-list-2">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="{{ route('blog.post.index') }}">
                                        <img src="assets/images/event/event-17.jpg" alt="Event Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <ul class="event-meta">
                                        <li><i class="icon-27"></i>Oct 10, 2024</li>
                                        <li><i class="icon-33"></i>08:00AM-10:00PM</li>
                                    </ul>
                                    <h4 class="title"><a href="{{ route('blog.post.index') }}">Explorations of New
                                            Approaches
                                            Works</a></h4>
                                    <span class="event-location"><i class="icon-40"></i>Newyork City, USA</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor
                                        incididunt.</p>
                                    <div class="read-more-btn">
                                        <a class="edu-btn btn-medium btn-border"
                                            href="{{ route('blog.post.index') }}">Learn More <i class="icon-4"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-event-list event-list-2">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="{{ route('blog.post.index') }}">
                                        <img src="assets/images/event/event-18.jpg" alt="Event Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <ul class="event-meta">
                                        <li><i class="icon-27"></i>Oct 10, 2024</li>
                                        <li><i class="icon-33"></i>08:00AM-10:00PM</li>
                                    </ul>
                                    <h4 class="title"><a href="{{ route('blog.post.index') }}">Digital Arts & Reshaping
                                            the Future
                                            with AI</a></h4>
                                    <span class="event-location"><i class="icon-40"></i>Newyork City, USA</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor
                                        incididunt.</p>
                                    <div class="read-more-btn">
                                        <a class="edu-btn btn-medium btn-border"
                                            href="{{ route('blog.post.index') }}">Learn More <i class="icon-4"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-event-list event-list-2">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="{{ route('blog.post.index') }}">
                                        <img src="assets/images/event/event-19.jpg" alt="Event Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <ul class="event-meta">
                                        <li><i class="icon-27"></i>Oct 10, 2024</li>
                                        <li><i class="icon-33"></i>08:00AM-10:00PM</li>
                                    </ul>
                                    <h4 class="title"><a href="{{ route('blog.post.index') }}">Online Presentation on
                                            PowerPoint
                                            2024</a></h4>
                                    <span class="event-location"><i class="icon-40"></i>Newyork City, USA</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor
                                        incididunt.</p>
                                    <div class="read-more-btn">
                                        <a class="edu-btn btn-medium btn-border"
                                            href="{{ route('blog.post.index') }}">Learn More <i class="icon-4"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-event-list event-list-2">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="{{ route('blog.post.index') }}">
                                        <img src="assets/images/event/event-19.jpg" alt="Event Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <ul class="event-meta">
                                        <li><i class="icon-27"></i>Oct 10, 2024</li>
                                        <li><i class="icon-33"></i>08:00AM-10:00PM</li>
                                    </ul>
                                    <h4 class="title"><a href="{{ route('blog.post.index') }}">Digital Arts & Reshaping
                                            the Future
                                            with AI</a></h4>
                                    <span class="event-location"><i class="icon-40"></i>Newyork City, USA</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor
                                        incididunt.</p>
                                    <div class="read-more-btn">
                                        <a class="edu-btn btn-medium btn-border"
                                            href="{{ route('blog.post.index') }}">Learn More <i class="icon-4"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <ul class="edu-pagination top-space-30 justify-content-start">
            <li><a href="#" aria-label="Previous"><i class="icon-west"></i></a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="more-next"><a href="#"></a></li>
            <li><a href="#">8</a></li>
            <li><a href="#" aria-label="Next"><i class="icon-east"></i></a></li>
        </ul>

    </div>
</div>

@endsection