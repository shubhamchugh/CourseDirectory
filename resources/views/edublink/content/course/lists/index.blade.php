@extends('edublink.layouts.master')

@section('content')

<!--=====================================-->
<!--=        Courses Area Start         =-->
<!--=====================================-->
<div class="edu-course-area course-area-1 section-gap-equal-60">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-3">
                <div class="edu-course-sidebar">
                    <div class="edu-course-widget widget-category">
                        <div class="inner">
                            <h5 class="widget-title">Filter by Categories</h5>
                            <div class="content">
                                <div class="edu-form-check">
                                    <input type="checkbox" id="cat-check1" checked>
                                    <label for="cat-check1">Art &amp; Design <span>(7)</span></label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="cat-check2">
                                    <label for="cat-check2">Development <span>(2)</span></label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="cat-check3">
                                    <label for="cat-check3">Business <span>(3)</span></label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="cat-check4">
                                    <label for="cat-check4">Marketing <span>(6)</span></label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="cat-check5">
                                    <label for="cat-check5">Academics <span>(2)</span></label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="cat-check6">
                                    <label for="cat-check6">Data Science <span>(9)</span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="edu-course-widget widget-instructor">
                        <div class="inner">
                            <h5 class="widget-title">Instructor</h5>
                            <div class="content">
                                <div class="edu-form-check">
                                    <input type="checkbox" id="inst-check1">
                                    <label for="inst-check1">Madge Alvarez <span>(2)</span></label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="inst-check2">
                                    <label for="inst-check2">Tyler Hardy <span>(14)</span></label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="inst-check3">
                                    <label for="inst-check3">Dabiv Matina <span>(10)</span></label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="inst-check4">
                                    <label for="inst-check4">Robbin Lee <span>(5)</span></label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="inst-check5">
                                    <label for="inst-check5">Donald Logan <span>(2)</span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="edu-course-widget widget-level">
                        <div class="inner">
                            <h5 class="widget-title">Level</h5>
                            <div class="content">
                                <div class="edu-form-check">
                                    <input type="checkbox" id="level-check1">
                                    <label for="level-check1">All Levels <span>(23)</span></label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="level-check2">
                                    <label for="level-check2">Beginner <span>(7)</span></label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="level-check3">
                                    <label for="level-check3">High <span>(10)</span></label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="level-check4">
                                    <label for="level-check4">Intermediate <span>(13)</span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="edu-course-widget widget-language">
                        <div class="inner">
                            <h5 class="widget-title">Language</h5>
                            <div class="content">
                                <div class="edu-form-check">
                                    <input type="checkbox" id="lang-check1">
                                    <label for="lang-check1">English <span>(12)</span></label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="lang-check2">
                                    <label for="lang-check2">Spanish <span>(7)</span></label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="lang-check3">
                                    <label for="lang-check3">German <span>(5)</span></label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="lang-check4">
                                    <label for="lang-check4">Russian <span>(3)</span></label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="lang-check5">
                                    <label for="lang-check5">Korean <span>(2)</span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="edu-course-widget widget-price">
                        <div class="inner">
                            <h5 class="widget-title">Price</h5>
                            <div class="content">
                                <div class="edu-form-check">
                                    <input type="checkbox" id="price-check1">
                                    <label for="price-check1">All Price</label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="price-check2">
                                    <label for="price-check2">Free</label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="price-check3">
                                    <label for="price-check3">Low to High</label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="price-check4">
                                    <label for="price-check4">High to Low</label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="price-check5">
                                    <label for="price-check5">Paid</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="edu-course-widget widget-rating">
                        <div class="inner">
                            <h5 class="widget-title">Rating</h5>
                            <div class="content">
                                <div class="edu-form-check">
                                    <input type="checkbox" id="rating-check1">
                                    <label for="rating-check1">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <span>(7)</span>
                                    </label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="rating-check2">
                                    <label for="rating-check2">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="off icon-23"></i>
                                        <span>(2)</span>
                                    </label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="rating-check3">
                                    <label for="rating-check3">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="off icon-23"></i>
                                        <i class="off icon-23"></i>
                                        <span>(3)</span>
                                    </label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="rating-check4">
                                    <label for="rating-check4">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="off icon-23"></i>
                                        <i class="off icon-23"></i>
                                        <i class="off icon-23"></i>
                                        <span>(6)</span>
                                    </label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="rating-check5">
                                    <label for="rating-check5">
                                        <i class="icon-23"></i>
                                        <i class="off icon-23"></i>
                                        <i class="off icon-23"></i>
                                        <i class="off icon-23"></i>
                                        <i class="off icon-23"></i>
                                        <span>(2)</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-pl--35">

                <div class="edu-sorting-area">
                    <div class="sorting-left">
                        <h6 class="showing-text">We found <span>71</span> courses available for you</h6>
                    </div>
                    <div class="sorting-right">
                        <div class="layout-switcher">
                            <label>Grid</label>
                            <ul class="switcher-btn">
                                <li><a href="course-one.html" class=""><i class="icon-53"></i></a></li>
                                <li><a href="course-four.html" class="active"><i class="icon-54"></i></a></li>
                            </ul>
                        </div>
                        <div class="edu-sorting">
                            <div class="icon"><i class="icon-55"></i></div>
                            <select class="edu-select">
                                <option>Filters</option>
                                <option>Low To High</option>
                                <option>High Low To</option>
                                <option>Last Viewed</option>
                            </select>
                        </div>
                    </div>
                </div>

                @include('edublink.content.course.lists.loop')

            </div>
        </div>


        <ul class="edu-pagination ">
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
<!-- End Course Area -->

@endsection