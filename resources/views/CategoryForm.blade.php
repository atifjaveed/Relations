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
                <form method="post" action="{{route('category.store')}}">
                    @csrf

                    <div>
                        <label class="form-check-label" for="exampleCheck1">name</label>
                        <input type="text" class="form-control"  name="name"  id="exampleCheck1">
                    </div>
                    <div>
                        <label class="form-check-label" for="exampleCheck1">description</label>
                        <input type="text" class="form-control"  name="description"  id="exampleCheck1">
                    </div>
                    {{-- <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" value="Health" name="category[]"  id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Health</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" value="Politics"  name="category[]" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Politics</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" value="Weather"  name="category[]" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Weather</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" value="Suports"  name="category[]" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Suports</label>
                    </div> --}}
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

