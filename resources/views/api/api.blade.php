<x-header/>

<div class="container mt-4">
    <div class="row" style="height: 93%">

    <div class="col innerdiv" id="token">
        <span style="display: flex; flex-direction: row; justify-content: space-around;">
            <button class="btn btn-sm btn-outline-dark mt-1 " type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample1" role="button">Register</button>
            <button class="btn btn-sm btn-outline-dark mt-1 " type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2">Generate token</button>
            <button class="btn btn-sm btn-outline-dark mt-1 " type="button" id="remove">Revoke Token</button>
            <input type="hidden" id="authtoken" value=" ">
        </span>
          <div class="row">
            <div class="col">
              <div class="collapse multi-collapse" id="multiCollapseExample1">
                <div class="card card-body">
                    <div class="input-group mb-1">
                        <span class="input-group-text" id="basic-addon1">Name</span>
                        <input type="text" class="form-control" placeholder="name" id="registername">
                      </div>
                      
                      <div class="input-group mb-1">
                        <span class="input-group-text" id="basic-addon2">Email</span>
                        <input type="text" class="form-control" placeholder="Email" id="registeremail">
                      </div>

                      <div class="input-group mb-1">
                        <span class="input-group-text" id="basic-addon2">Password</span>
                        <input type="password" class="form-control" placeholder="Password" id='registerpassword'>
                      </div>
                      <button class="btn btn-sm btn-outline-dark" id="register">submit</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="collapse multi-collapse" id="multiCollapseExample2">
                <div class="card card-body">
                    <div class="input-group mb-1">
                        <span class="input-group-text" id="basic-addon2">Email</span>
                        <input type="text" class="form-control" placeholder="Email" id="generatetokenemail" >
                      </div>

                      <div class="input-group mb-1">
                        <span class="input-group-text" id="basic-addon2">Password</span>
                        <input type="password" class="form-control" placeholder="Password" id="generatetokenpassword">
                      </div>
                      <button class="btn btn-sm btn-outline-dark" id="generatetoken">submit</button>
                </div>
              </div>
            </div>
          </div>
        
        
    </div>

    <div class="col innerdiv" id="request">

        <span style="display: flex; flex-direction: row; justify-content: space-around;">
            <button class="btn btn-sm btn-outline-dark mt-1 " type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapse1" role="button">Add</button>
            <button class="btn btn-sm btn-outline-dark mt-1 " type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapse2">Status</button>
        </span>
          <div class="row">
            <div class="col">
              <div class="collapse multi-collapse" id="multiCollapse1">
                <div class="card card-body">
                    <div class="input-group mb-1">
                        <span class="input-group-text" id="basic-addon1">Task</span>
                        <input type="text" class="form-control" placeholder="Task" id="task">
                      </div>
                      
                      <div class="input-group mb-1">
                        <span class="input-group-text" id="basic-addon2">ID</span>
                        <input type="text" class="form-control" placeholder="Id" id="user_id">
                      </div>

                      <button class="btn btn-sm btn-outline-dark" id="add">add</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="collapse multi-collapse" id="multiCollapse2">
                <div class="card card-body">
                    <div class="input-group mb-1">
                        <span class="input-group-text" id="basic-addon2">task_id</span>
                        <input type="text" class="form-control" placeholder="Task Id" id="task_id" >
                      </div>

                      <div class="input-group mb-1">
                        <span class="input-group-text" id="basic-addon2">status</span>
                        <input type="text" class="form-control" placeholder="status" id="status">
                      </div>
                      <button class="btn btn-sm btn-outline-dark" id="update">submit</button>
                </div>
              </div>
            </div>
          </div>


    </div>
    </div>
</div>
<br>
<div class="container" style="background:rgba(255, 237, 237, 0.1); overflow: auto;">

    <div class="col-12 innerdiv" id="response" >


    </div>

</div>
<script src="{{  asset('js/token.js')  }}" ></script>
<script src="{{  asset('js/crud.js')  }}" ></script>

<x-footer/>