<x-layout>


<div class="containter">
    <div class="row">
        <div class="col-6 d-flex justify-content-center flex-column">
           
            <h1 class='text-center'>Registrati</h1>
            
            <form method='POST' action="{{route('register')}}" @csrf>
              
            
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Name</label>
                <input type="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
              </div>
            
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name='email'class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
              </div>
            
            
              <div class="mb-3">
                <label for="exampleInputPassword" class="form-label">Password</label>
                <input type="password" name='password' class="form-control" id="exampleInputPassword">
                
              </div>
            
            
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password Confirmation</label>
                <input type="password" name='password_confirmation' class="form-control" id="exampleInputPasswordConfirm">
              </div>
            
              <button type="submit" class="btn btn-success">Registrati</button>
            </form>
        </div>
    </div>
</div>


</x-layout>