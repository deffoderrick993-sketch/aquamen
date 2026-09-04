<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	 <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <title>edit-projet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	    <link
      rel="icon"
      href="img/aquamen.png"
      type="image/x-icon"
    />
</head>
<body>


    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <form method="POST" action="{{route('updateprojets',$oneproject->id)}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="d-flex justify-content-center align-items-center" >
           <h1>UPDATE PROJECT</h1>
        </div>
         @if('success')
         <div class="alert alert-success">{{session('success')}}</div>
         @endif
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">name</label>
                <input type="text" value="{{$oneproject->name}}" name="name" class="rounded-pill form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" placeholder="name" aria-describedby="emailHelp">
                @error('name')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" >description</label>
                <input name="descrition" value="{{$oneproject->description}}"  class="rounded-pill form-control @error('descrition') is-invalid @enderror"  placeholder="description">
                @error('name')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">image</label>
                <input type="file" value="{{$oneproject->image}}" name="image" class="rounded-pill form-control @error('image') is-invalid @enderror" id="exampleInputPassword1">
                @error('image')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
				<div class="mt-3">
				 <img class="img-fluid" src="{{asset('images/'.$oneproject->image)}}" width="100">
				</div>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
