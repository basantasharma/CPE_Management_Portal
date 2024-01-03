@extends('./layouts/base')
@section('title', 'Timeline-Telnet')
@section('headerLeft', 'Timeline')
@section('timeline', 'active')


@section('body')

    <div class="row">
        <div class="col-md-12"><!-- The time line -->
            <div class="timeline"><!-- timeline time label -->
                <div class="time-label"><span class="text-bg-dark">10 Sep. 2023</span></div><!-- /.timeline-label --><!-- timeline item -->
                <div>
                    <i class="timeline-icon fa-regular fa-envelope text-bg-dark"></i>
                    <div class="timeline-item">
                        <span class="time text-bg-dark"><i class="fa-solid fa-clock"></i> 12:05</span>
                        <h3 class="timeline-header bg-dark text-light"><a class="text-light" href="#">Support Team</a> sent you an email
                        </h3>
                        <div class="timeline-body">
                            Dear user we ar glad to announce you that our team has lunched a new application for mobile devices which will
                            help you control your devices more dynamic way. the new app is available for android users in play store and IOS version will be lunched soon.
                            Hope you will enjoy the experience and do not forget to share your thoughts on new app.
                        </div>
                        <div class="timeline-footer"><a class="btn btn-primary btn-sm">Learn more</a><a class="btn btn-danger btn-sm">Delete</a></div>
                    </div>
                </div><!-- END timeline item -->
                <!-- timeline item -->
                <div class="time-label"><span class="text-bg-dark">13 Jan. 2022</span></div><!-- /.timeline-label --><!-- timeline item -->
                <div><i class="timeline-icon fa-regular fa-clock text-bg-dark"></i></div>
            </div>
        </div><!-- /.col -->
    </div><!-- /.row -->




@endsection