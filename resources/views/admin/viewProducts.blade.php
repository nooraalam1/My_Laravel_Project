@include('admin.css')

@include('admin.header')


 <div>
 <div class="d-flex align-items-stretch">

     @include('admin.sidebar')
     <div class="page-content">

         @include('admin.pageheader')


<div class="">
    <div class="w-3/4 mx-auto">

        <h3 class="text-center">Total:{{$data->total()}}</h3>

      <table class="table ">
    <!-- head -->
    <thead>
      <tr class="text-white text-center">

        <th>SL</th>
        <th>Created At</th>
        <th>Product Title</th>
        <th>Description</th>
        <th>Price</th>
        <th>Category</th>
        <th>Quantity</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($data as $datam)

      <tr>
        <th>{{$loop->index +$data->firstItem()}}</th>
        <th>{{$datam->created_at}}</th>
        <th>{{$datam->title}}</th>
        <th>{{$datam->description}}</th>
        <th>{{$datam->price}}</th>
        <th>{{$datam->category}}</th>
        <th>{{$datam->quantity}}</th>
        <th class="flex justify-center items-center gap-4">

            <a href="{{route('editViewProducts',['data'=>$datam->id])}}" class="btn btn-secondary">Edit</a>
            <form method="post" action="{{route('deleteViewProducts',['data'=>$datam])}}">
                @csrf
                @method('DELETE')
                <button class="btn btn-info">Delete</button>
            </form>
        </th>
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
 <script src="{{ asset('admindash/vendor/jquery/jquery.min.js') }}"></script>
 <script src="{{ asset('admindash/vendor/popper.js/umd/popper.min.js') }}"></script>
 <script src="{{ asset('admindash/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
 <script src="{{ asset('admindash/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
 <script src="{{ asset('admindash/vendor/chart.js/Chart.min.js') }}"></script>
 <script src="{{ asset('admindash/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
 <script src="{{ asset('admindash/js/charts-home.js') }}"></script>
 <script src="{{ asset('admindash/js/front.js') }}"></script>
