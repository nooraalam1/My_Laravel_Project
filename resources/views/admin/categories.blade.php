 @include('admin.header')

 <div>
 <div class="d-flex align-items-stretch">

     @include('admin.sidebar')
     <div class="page-content">

         @include('admin.pageheader')

         <form action="{{route('admin.create.category')}}" method="POST" class="p-5">
            @csrf
                <h2 class="mb-4">Add Category</h2>
             <div>
                 <input type="text" name="category_name" placeholder="Enter Category Name">
                 <input class="btn btn-primary" type="submit" value="Add Category">
             </div>
         </form>

<div class="overflow-x-auto">
  <table class="table">
    <!-- head -->
    <thead>
      <tr>

        <th>ID</th>
        <th>Category Name</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($data as $data)



      <tr>
        <th>{{$data->id}}</th>
        <th>{{$data->category_name}}</th>
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
