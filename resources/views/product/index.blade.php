<x-layout>

<h1>i prodotti</h1>
<section class="container-fluid">
  <div class="row">
    @foreach ($products as $product)
    <div class="col-12 col-md-4 col-lg-4">
      <div class="card" style="width: 18rem;">
        <!-- <img src="..." class="card-img-top" alt="..."> -->
        <div class="card-body">
          <h5 class="card-title">{{$product->name}}</h5>
          <a href="{{route('show', compact('product'))}}" class="btn btn-success">Dettagli</a>
        </div>
      </div>
      
    </div>
    @endforeach
  </div>
</section>





</x-layout>