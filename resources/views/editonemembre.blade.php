<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>editonemembre</title>
</head>
<body>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <form method="POST" action="{{route('updatemembre',$onemembre->id)}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="d-flex justify-content-center align-items-center mt-3" >
            <h1>UPDATE MEMBRES</h1>
        </div>
         @if('success')
         <div class="alert alert-success">{{session('success')}}</div>
         @endif
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">nom</label>
                <input type="text" value="{{$onemembre->nom}}" name="nom" class="form-control @error('nom') is-invalid @enderror" id="exampleInputEmail1" placeholder="nom" aria-describedby="emailHelp">
                @error('nom')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">prenom</label>
                <input type="text" value="{{$onemembre->prenome}}" name="prenom" class="form-control @error('prenom') is-invalid @enderror" id="exampleInputEmail1" placeholder="prenom" aria-describedby="emailHelp">
                @error('prenom')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tel</label>
                <input type="number" value="{{$onemembre->tel}}" name="tel" class="form-control @error('tel') is-invalid @enderror" id="exampleInputEmail1" placeholder="tel" aria-describedby="emailHelp">
                @error('tel')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" >Info</label>
                <input value="{{$onemembre->info}}" name="info" class="form-control @error('info') is-invalid @enderror" id="" placeholder="description">
                @error('info')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" >Position</label>
                <select class="form-select @error('position') is-invalid @enderror" aria-label="Default select example" name="position">
                    <option selected>BE</option>
                    <option selected>Comité technique</option>
                    <option selected>CONSEILLERS</option>
                  </select>
                @error('position')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">image</label>
                <input type="file" value="{{$onemembre->image}}" name="image" class="form-control @error('image') is-invalid @enderror" id="exampleInputPassword1">
                @error('image')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <div class="d-flex justify-content-center align-items-center mt-3" >
                    <img class="img-fluid rounded" src="{{asset('profiles/'.$onemembre->image)}}" width="100">
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
