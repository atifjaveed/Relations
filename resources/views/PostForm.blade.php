<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <form method="post" action="{{url('user/'.$user_id.'/posts')}}">
                    @csrf
                    @foreach ($data as $item)
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" value="{{$item->id}}" name="category[]"  id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">{{$item->name}}</label>
                    </div>
                    @endforeach

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">title</label>
                        <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        {{-- <label for="exampleInputPassword1" class="form-label">User</label> --}}
                        <input type="hidden" class="form-control" name="user_id" value="{{$user_id}}" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">description</label>
                        <input type="text" class="form-control" name="description" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
