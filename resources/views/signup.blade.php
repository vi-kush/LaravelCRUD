<x-header/>

<div class="container" style="width:40%; margin-top: 10%;">

    <form action='signup' method='POST'>
    @csrf
    <div>
    <h4> Registration </h4>
    </div>
    <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="name" value="{{old('name')}}">
  <label for="floatingInput">Name</label>
  <span style="color:red"> @error('name') {{$message}} @enderror </span>
    </div>
    <div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="{{old('email')}}">
  <label for="floatingInput">Email address</label>
  <span style="color:red"> @error('email') {{$message}} @enderror </span>
    </div>
    <div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
  <label for="floatingPassword">Password</label>
  <span style="color:red"> @error('password') {{$message}} @enderror </span>
    </div>
    <div class="mt-3">
    <button class="btn btn-outline-secondary"> Submit </button>
    </div>
    <br>
    <small > Already have account </small>
    <a href="login" class="btn btn-sm btn-outline-warning"> Login </a>
    </form>

</div>




<x-footer/>

    


 