@include('admin.css')

@include('admin.header')


 <div>
 <div class="d-flex align-items-stretch">

     @include('admin.sidebar')
     <div class="page-content">

         @include('admin.pageheader')


<div class="">
    <div class="w-3/4 mx-auto">


      <table class="table ">
    <!-- head -->
    <thead>
      <tr class="text-white">

        <th>SL</th>
        <th>Product ID</th>
        <th>Product Title</th>
        <th>Description</th>
        <th>Price</th>
        <th>Category</th>
        <th>Quantity</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($data as $datam)

      <tr>
        <th>{{$loop->index +$data->firstItem()}}</th>
        <th>{{$datam->id}}</th>
        <th>{{$datam->title}}</th>
        <th>{{$datam->description}}</th>
        <th>{{$datam->price}}</th>
        <th>{{$datam->category}}</th>
        <th>{{$datam->quantity}}</th>
      </tr>
              @endforeach
    </tbody>
  </table>
</div>


<div class="flex justify-center items-center mt-4">
    <div class="join">
  <button class="join-item btn btn-xl"> {{ $data->links() }} </button>
</div>
</div>
</div>



              </div>

 </div>

 </div>
