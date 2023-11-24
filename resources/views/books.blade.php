<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<h1 style="text-align:center">Book Form</h1>
<br>

<div style="margin-left:400px">
    <form action="{{route('submit') }}" method="post">
        @csrf
        
        <div>
            <label for="name">Name</label>
            <br>
            <input type="text" name="name">
            <br>
            <label for="pages">Pages</label>
            <br>
            <input type="number" name="pages">
            <br>
            <label for="IBN">IBN</label>
            <br>
            <input type="text" name="IBN">
            <br>
            <label for="category">Category</label>
            <br>
            <input type="text" name="category">
            <br>
            <label for="Publisher">Publisher</label>
            <br>
            <input type="text" name="publisher">
            <br>
            <label for="year_of_publication">Year of Publication</label>
            <br>
            <input type="text" name="yop">
            <br>
            <label for="user_id">User ID</label>
            <br>
           <select name="user_id" id="">
            @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
           </select>
            <br><br>
            <button type="submit">Submit</button>
            <br><br>
            <button type="reset">Reset</button>
        </div>
    </form>
</div>

</body>
</html>