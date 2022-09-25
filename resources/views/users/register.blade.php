<x-layout>
<div class="container">
<form action="/users" method="post">
    @csrf
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input value="{{old('name')}}" name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name">
    @error('name')
        <p class="text-danger pt-1">{{$message}}</p>
    @enderror
  </div>
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
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
    <input value="{{old('password_confirmation')}}" name="password_confirmation" type="password" class="form-control" id="exampleFormControlInput1" placeholder="Confirm Password">
    @error('password_confirmation')
    <p class="text-danger pt-1">{{$message}}</p>
@enderror
</div>

<div class="row">
    <div class="col">
        <button class="btn btn-dark mb-3" type="submit">Register</button>
    </div>
    <div class="col">
        Already have an account? <a href="/login">Login</a>
    </div>
</div>
 
</form>
</div>
</x-layout>