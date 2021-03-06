<!-- Student/Teacher Singup & Login selection page -->

@extends('doublelayout') 

@section('content')
    <div class="column">
        <div class="p-2">
            <a href="signup.php" class="booton btn btn-success shadow">Student signup</a> <!-- Upon clicking the button,
            The user will be redirected to the correct pages -->
        </div>
        <hr class="thin-line">
        <div class="p-2">
            <a href="teachersignup.php" class="booton btn btn-success shadow">Teacher signup</a>
        </div>
    </div>

    <div class="column">
        <div class="p-2">
            <a href="login.php" class="booton btn btn-primary shadow">Student login</a>
        </div>
        <hr class="style1">
        <div class="p-2">
            <a href="teacherlogin.php" class="booton btn btn-primary shadow">Teacher login</a>
        </div>
    </div>

@endsection

<!-- Student/Teacher Signup & Login selection page -->