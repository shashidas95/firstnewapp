<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div>
            <h1>Form Validation</h1>
        </div>
        <div class="row">
          <div class="col-md-6">


              <form  action="{{ route('store.contact') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label  class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"  value="{{ old('name') }}">
                         @error('name')
                            <strong class="text-danger">{{ $message }}</strong>
                         @enderror

                  </div>
                <div class="mb-3">
                  <label  class="form-label">Email address</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" >
                        @error('email')
                        <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                </div>
                <div class="mb-3">
                  <label  class="form-label">Password</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}">
                        @error('password')
                        <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>


