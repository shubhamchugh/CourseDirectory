@foreach ($courses as $course)

<div class="edu-course course-style-4 course-style-14">
    <div class="inner">
        <div class="thumbnail">
            <a href="{{ route('course.details.index') }}">
                <img src="{{ asset('assets/images/course/course-12.jpg') }}" alt="Course Meta">
            </a>
            <div class="time-top">
                <span class="duration"><i class="icon-61"></i>3 Weeks</span>
            </div>
        </div>
        <div class="content">
            <div class="course-price">$29.00</div>
            <h6 class="title">
                <a href="{{ route('course.detail.show',$course->slug) }}">{{ $course->title }}</a>
            </h6>
            <div class="course-rating">
                <div class="rating">
                    <i class="icon-23"></i>
                    <i class="icon-23"></i>
                    <i class="icon-23"></i>
                    <i class="icon-23"></i>
                    <i class="icon-23"></i>
                </div>
                <span class="rating-count">(5.0 /7 Rating)</span>
            </div>
            <p>Lorem ipsum dolor sit amet consectur elit sed eiusmod tempor incidid unt labore dolore
                magna.</p>
            <ul class="course-meta">
                <li><i class="icon-24"></i>8 Lessons</li>
                <li><i class="icon-25"></i>20 Students</li>
            </ul>
        </div>
    </div>
</div>

@endforeach