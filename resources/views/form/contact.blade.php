<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
</head>
<body>
    <h2>Contact form</h2>

    <form enctype="multipart/form-data" action="{{ route('form.post') }}" method="post">

        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Your name">

        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Your email">
        

        <label for="">File</label>
        <input type="file" name="profile_picture" id="file">
        <label for="">Price</label>

        <input type="number" name="price">
        <button type="submit">Submit</button>
       @if(session('Success'))
      <p>{{ session('Success') }}</p>
       @endif

       @if($errors->any())
         @foreach($errors->all() as $error)
          <p>{{ $error }}</p>
        @endforeach
      @endif

    </form>

</body>
</html>