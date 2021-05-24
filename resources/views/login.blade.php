<x-header/>

<div class="container" style="width:40%; margin-top: 10%;">

    <form action='login' method='POST'>
    @csrf
    <div>
    <span style="color:red; padding:2px;"><small> {{session('login_error')}} </small> </span>
    <h4> Login </h4> 
    <div class="form-floating mb-3">
  <input type="email" class="form-control " id="floatingInput" placeholder="name@example.com" name="email" value="{{old('email')}}" required>
  <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
  <label for="floatingPassword">Password</label>
    </div>
    <div class="mt-3">
    <button class="btn btn-outline-secondary"> Login </button>
    </div>
    <br>
    <small > Don't have account </small>
    <a href="register" class="btn btn-sm btn-outline-warning"> Register </a>
    </form>

</div>




<x-footer/>

    


 