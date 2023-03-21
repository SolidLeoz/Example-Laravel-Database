<x-layout>

<h1>i prodotti</h1>
<section class="container-fluid">
  <div class="row">
    <div class="col-12 col-md-4 col-lg-4">
      <div class="card" style="width: 18rem;">
        <!-- <img src="..." class="card-img-top" alt="..."> -->
        <div class="card-body">


          <h5 class="card-title">{{$product->name}}</h5>
            
          <p>{{$product->price}}</p>
          <p>{{$product->description}}</p>
          
          
          <a href="{{route('index')}}" class="btn btn-success">torna indietro</a>
        </div>
      </div>
      
    </div>
  </div>
</section>





</x-layout>