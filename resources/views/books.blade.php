<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

@if(session('success'))
 <div class="alert alert-success">
    {{sessions('success')}}
</div>
@endif
    <h1 style="margin-left:400px">Booking Form</h1>

    <section>
        <div style="margin-left:400px">
            <form action="{{route('submit-form')}}" method="post">
                @csrf
                <div>
                <Label for "">Name</Label>
                <br>
          <input type="text" name="name">
          <br>
          <Label for "">Pages</Label>
          <br>
          <input type="number" name="pages">
          <br>
          <Label for "">IBN</Label>
          <br>
          <input type="text" name="IBN">
          <br>
          <Label for "">category</Label>
          <br>
          <input type="text" name="category">
          <br>
          <Label for "">publisher</Label>
          <br>
          <input type="text" name="publisher">
          <br>
          <Label for "">Year of Publication</Label>
          <br>
          <input type="number" name="yearofPublication">
          <br>
         
          <Label for "">user_id</Label>
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
                <br><br>
                
          

            </form>
        </div>
    </section>
</body>
</html>