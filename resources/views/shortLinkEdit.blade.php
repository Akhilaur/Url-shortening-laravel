<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
</head>
<body>
    <h1>Update your Link</h1>
    <form  action="{{route('ShortLink.update',['link'=>$link])}}" method="post">
        @csrf
        @method('put')
        <div class="input-group mb-3">

<input type="text" name="link" class="form-control" placeholder="Enter URL" aria-label="Recipient's username" aria-describedby="basic-addon2">

<div class="input-group-append">

  <button class="btn btn-dark" type="submit">Update Shorten Link</button>

</div>

</div>

    </form>
</body>
</html>