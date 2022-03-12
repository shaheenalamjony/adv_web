

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    
    <div class="container" style="margin: 100px;">
        <h1 class="text-center">
            LOGIN
        </h1>
        <form style="border: 2px solid black; padding:20px;" action="{{url('/')}}/login" method="post">
        @csrf
        <!-- <pre>
            @php
                print_r($errors->all());
            @endphp
        </pre> -->
        
        <!-- <div class="form-group">
            <label for="">
                Name
            </label>
            <input type="text" name="name" class="form-control" id="" aria-describedby="helpId" value="{{old('name')}}">
            <span class="text-danger">
                @error('name')
                {{$message}}
                @enderror
            </span>
        </div> -->
        <div class="form-group">
            <label for="">
                Email
            </label>
            <input type="email" name="email" class="form-control" id="" aria-describedby="helpId" value="{{old('email')}}">
            <span class="text-danger">
                @error('email')
                {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="">
                Password
            </label>
            <input type="password" name="password" class="form-control" id="" aria-describedby="helpId">
            <span class="text-danger">
                @error('password')
                {{$message}}
                @enderror
            </span>
        </div>
        <!-- <div class="form-group">
            <label for="">
               Confirm Password
            </label>
            <input type="password" name="password_confirmation" class="form-control" id="" aria-describedby="helpId">
            <span class="text-danger">
                @error('password_confirmation')
                {{$message}}
                @enderror
            </span>
        </div> -->
        <br>
        <button type="submit" class="btn btn-primary">
            Submit
        </button>
    </div>

    </form>


  </body>
</html>