<x-layout>
<div class="container">
<form action="/users/authenticate" method="post">
    @csrf

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email</label>
    <input value="{{old('email')}}" name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
    @error('email')
    <p class="text-danger pt-1">{{$message}}</p>
@enderror
</div>

<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Password</label>
    <input value="{{old('password')}}" name="password" type="password" class="form-control" id="exampleFormControlInput1" placeholder="Password">
    @error('password')
        <p class="text-danger pt-1">{{$message}}</p>
    @enderror
  </div>
 
  <div class="row">
    <div class="col">
        <button class="btn btn-dark mb-3" type="submit">Login</button>
    </div>
    <div class="col">
        Don't have have an account yet? <a href="/register">Register here</a>
    </div>
</div>
</form>
</div>
</x-layout>