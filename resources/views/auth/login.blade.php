<x-layout>

<div class="container d-flex flex-column">

 <h1 class='text-center'>Log In</h1>
    <div class="row">


        <div class="col-6">
            <form action="POST" action="{{route('login')}}" @csrf>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name='email'class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
              </div>
            
              
              <div class="mb-3">
                  <label for="exampleInputPassword" class="form-label">Password</label>
                <input type="password" name='password' class="form-control" id="exampleInputPassword">
              </div>
              
              
          </form>   

        </div>
    </div>
</div>

</x-layout>