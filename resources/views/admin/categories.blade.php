 @include('admin.header')

 <div>
 <div class="d-flex align-items-stretch">

     @include('admin.sidebar')
     <div class="page-content">

         @include('admin.pageheader')
<div>

         <form class="p-5" method="POST" action="{{route('create')}}">
            @csrf
            @method('POST')
                <h2 class="mb-4">Add Category</h2>
             <div>
                 <input type="text" name="category_name" placeholder="Enter Category Name">
                 <input class="btn btn-primary" type="submit" value="Add Category">
             </div>
         </form>

</div>

<div class="overflow-x-auto">
  <table class="table">
    <!-- head -->
    <thead>
      <tr>

        <th>ID</th>
        <th>Category Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($data as $data)

      <tr>
        <th>{{$data->id}}</th>
        <th>{{$data->category_name}}</th>
        <th>

            <a href="{{route('edit',['data'=>$data])}}" class="bt btn-primary">Edit</a>

            <div>

                <form action="{{route('delete',['data'=>$data])}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button class="bt btn-warning">Delete</button>
                </form>
            </div>

        </th>
      </tr>
              @endforeach
    </tbody>
  </table>
</div>
     </div>

     @include('admin.css')
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
