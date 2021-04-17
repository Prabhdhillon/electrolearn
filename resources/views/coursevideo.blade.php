@extends("layout.auth")
@section('title')
    Course
@endsection
@section('content')
    <div class="course-player">
        <div class="container">
            <video class="video" preload="auto" controls>
                <source src="{{ asset('images/video/react-1.mp4') }}" type="video/mp4" />
            </video>
            <div class="course-player-title">1. The Quickest Guide to React Hooks</div>
            <div class="course-player-paragraph">Get started with React in this crash course. We will be building a task
                tracker app and look at components, props, state, hooks, working with an API and more.<br><br>

                Code:
                https://github.com/bradtraversy/react...​<br><br>

                Timestamps:<br>
                0:00​ - Intro & Slides<br>
                12:37​ - Create a React app<br>
                14:52​ - Files & folders<br>
                18:54​ - App component & JSX<br>
                22:39​ - Expressions in JSX<br>
                23:49​ - Creating a component<br>
                27:18​ - Component Props<br>
                28:50​ - PropTypes<br>
                30:42​ - Styling<br>
                34:17​ - Button Component<br>
                37:46​ - Events<br>
                40:18​ - Tasks Component<br>
                41:03​ - Create a list with .map()<br>
                43:07​ - State & useState Hook<br>
                44:55​ - Global state<br>
                46:52​ - Task Component<br>
                49:30​ - Icons with react-icons<br>
                51:41​ - Delete task & prop drilling<br>
                55:50​ - Optional message if no tasks<br>
                56:58​ - Toggle reminder & conditional styling<br>
                1:03:13​ - Add Task Form<br>
                1:06:16​ - Form input state (controlled components)<br>
                1:09:18​ - Add task submit<br>
                1:14:36​ - showAddTask state<br>
                1:15:58​ - Button toggle<br>
                1:19:33​ - Build for production<br>
                1:21:51​ - JSON Server<br>
                1:25:53​ - useEffect Hook & Fetch tasks from server<br>
                1:30:13​ - Delete task from server<br>
                1:31:51​ - Add task to server<br>
                1:35:15​ - Toggle reminder on server<br>
                1:39:15​ - Routing, footer & about
            </div>
            <div class="button-group">
                <button type="submit" class="btn btn-secondary">Previous</button>
                <button type="submit" class="btn btn-primary">Next</button>
            </div>
            <div class="title-group">
                <div class="course-player-title">0. Introduction</div>
                <div class="course-player-title">1. Styled Components</div>
            </div>

        </div>
    </div>
@endsection
