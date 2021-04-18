@extends("layout.auth")
@section('title')
    Course
@endsection
@section('content')
    <div class="course-player">
      <div class="container">
          <div class="video-js-responsive-container vjs-hd">
            <video class="video-js course-video" data-setup="{}" controls poster="{{ asset('images/thumb.png') }}">
              <source src="{{ asset('images/video/react-1.mp4') }}" type="video/mp4" />
            </video>
          </div>

            <div class="course-player-title">1. The Quickest Guide to React Hooks</div>
            <div class="course-player-paragraph">
                <p>Get started with React in this crash course. We will be building a task
                    tracker app and look at components, props, state, hooks, working with an API and more.</p>

                <p>Code:https://github.com/bradtraversy/react...​</p>

                <ul style="list-style-type: none">
                    <li>Timestamps</li>
                    <li>0:00​ - Intro & Slides​</li>
                    <li>0:30​ - Intro & Slides​</li>
                    <li>1:00​ - Intro & Slides​</li>
                    <li>2:30​ - Intro & Slides​</li>
                    <li>3:50​ - Intro & Slides​</li>
                    <li>4:20​ - Intro & Slides​</li>
                    <li>4:50​ - Intro & Slides​</li>
                    <li>0:00​ - Intro & Slides​</li>
                    <li>0:00​ - Intro & Slides​</li>
                    <li>0:00​ - Intro & Slides​</li>
                    <li>0:00​ - Intro & Slides​</li>
                    <li>0:00​ - Intro & Slides​</li>
                    <li>0:00​ - Intro & Slides​</li>
                    <li>0:00​ - Intro & Slides​</li>
                    <li>0:00​ - Intro & Slides​</li>
                </ul>
            </div>
            <div class="button-group button-group-margin">
                <button type="submit" class="btn btn-secondary">Previous</button>
                <button type="submit" class="btn btn-primary">Next</button>
            </div>
            <div class="button-group">
                <div class="course-player-links">0. Introduction</div>
                <div class="course-player-links">1. Styled Components</div>
            </div>
        </div>
    </div>
@endsection
