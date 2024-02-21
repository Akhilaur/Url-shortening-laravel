<!DOCTYPE html>

<html>

<head>

    <title>Link shortener</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />

</head>

<body>

   

<div class="container">

    <h1>Link Shortener</h1>

   

    <div class="card">

      <div class="card-header">

        <form method="POST" action="{{route('ShortLink.store')}}">

            @csrf

            <div class="input-group mb-3">

              <input type="text" name="link" class="form-control" placeholder="Enter URL" aria-label="Recipient's username" aria-describedby="basic-addon2">

              <div class="input-group-append">

                <button class="btn btn-dark" type="submit">Generate Shorten Link</button>

              </div>

            </div>

        </form>

      </div>

      <div class="card-body">

   

            @if (Session::has('success'))

                <div class="alert alert-success">

                    <p>{{ Session::get('success') }}</p>

                </div>

            @endif

   

            <table class="table table-bordered table-sm">

                <thead>

                    <tr>

                        <th>ID</th>

                        <th>Short Link</th>

                        <th>Link</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($shortLinks as $row)

                        <tr>

                            <td>{{ $row->id }}</td>

                            <td><a href="{{ route('ShortLink.shortenLink', $row->code) }}" target="_blank">{{ route('ShortLink.shortenLink', $row->code) }}</a></td>

                            <td>{{ $row->link }}</td>
                            <td> 
                         <form method="get" action="{{route('ShortLink.edit',['link'=>$row])}}">
                         @csrf
                        <button class="btn btn-primary" type="submit">Edit</button>
                        </form>
                        </td>

                        <td>
                    <form method="post" action="{{route('ShortLink.delete',['link'=>$row])}}">
                        @csrf
                        @method("delete")
                        <button class="btn btn-primary" type="submit" value ="delete">Delete</button>
                    </form>
                        </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

      </div>

</div>

   

</div>

    

</body>

</html>