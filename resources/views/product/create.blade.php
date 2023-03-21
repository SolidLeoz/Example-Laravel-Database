<x-layout>


<form method="post" action="{{route('store')}}" @csrf>




<div class="mb-3">
    <label for="exampleInputText1" class="form-label">Nome Prodotto</label>
    <input name="name" type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp">
    <div id="textHelp" class="form-text"></div>
  </div>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Prezzo</label>
    <input type="text" name="price" class="form-control" id="exampleInputPassword1">
  </div>
  
  
  <div class="mb-3">
    <label for="exampleInputDescription1" class="form-label">Descrizione</label>
    <input type="text" name="description" class="form-control" id="exampleInputDescription1">
  </div>
  

  
  <button type="submit" class="btn btn-primary">Submit</button>

  
</form>


</x-layout>