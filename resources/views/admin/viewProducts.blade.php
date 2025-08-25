@include('admin.css')

@include('admin.header')


 <div>
 <div class="d-flex align-items-stretch">

     @include('admin.sidebar')
     <div class="page-content">

         @include('admin.pageheader')


<div class="overflow-x-auto">
      <table class="table">
    <!-- head -->
    <thead>
      <tr>

        <th>ID</th>
        <th>Product Title</th>
        <th>Description</th>
        <th>Price</th>
        <th>Category</th>
        <th>Quantity</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($data as $data)

      <tr>
        <th>{{$data->id}}</th>
        <th>{{$data->title}}</th>
        <th>{{$data->description}}</th>
        <th>{{$data->price}}</th>
        <th>{{$data->category}}</th>
        <th>{{$data->quantity}}</th>
      </tr>
              @endforeach
    </tbody>
  </table>
</div>



              </div>

 </div>

 </div>
