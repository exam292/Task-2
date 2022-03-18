@extends('doublelayout')

@section('content')
<div class="column">
<div class="p-2">
    <a href="signup.php" class="booton btn btn-success">Student signup</a>
</div>
<hr class="style1">
<div class="p-2">
    <a href="teachersignup.php" class="booton btn btn-success">Teacher signup</a>
</div>
</div>

<div class="column">
    <div class="p-2">
        <a href="login.php" class="booton btn btn-warning">Student login</a>
    </div>
    <hr class="style1">
    <div class="p-2">
        <a href="teacherlogin.php" class="booton btn btn-warning">Teacher login</a>
    </div>
    </div>

@endsection