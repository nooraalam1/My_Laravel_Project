@include('admin.css')

@include('admin.header')

 <div>
 <div class="d-flex align-items-stretch">

     @include('admin.sidebar')
     <div class="page-content">

         @include('admin.pageheader')

  <div style="background: #fff; padding: 25px; border-radius: 12px; box-shadow: 0px 4px 12px rgba(0,0,0,0.1); width: 350px;">
    <h1 style="text-align: center; margin-bottom: 20px; font-size: 22px; color: #333;">Add A Product</h1>
    <form style="display: flex; flex-direction: column;" method="POST" action="{{route('storeProduct')}}">
        @csrf
        @method('POST')
      <label for="title" style="font-size: 14px; margin-bottom: 5px; color: #555;">Title</label>
      <input type="text" id="title" name="title" placeholder="Enter product title"
             style="padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 6px; font-size: 14px;">

      <label for="description" style="font-size: 14px; margin-bottom: 5px; color: #555;">Description</label>
      <input type="text" id="description" name="description" placeholder="Enter product description"
             style="padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 6px; font-size: 14px;">

      <label for="img" style="font-size: 14px; margin-bottom: 5px; color: #555;">Image</label>
      <input type="file" id="img" name="img"
             style="padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 6px; font-size: 14px;">

      <label for="price" style="font-size: 14px; margin-bottom: 5px; color: #555;">Price</label>
      <input type="text" id="price" name="price" placeholder="Enter price"
             style="padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 6px; font-size: 14px;">

      <label for="category" style="font-size: 14px; margin-bottom: 5px; color: #555;">Category</label>
      <select id="category" name="category"
              style="padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 6px; font-size: 14px;">
        <option value="">Select category</option>

        @foreach ($category as $category)

        <option value="{{$category->category_name}}">{{$category->category_name}}</option>
        @endforeach

      </select>

      <label for="quantity" style="font-size: 14px; margin-bottom: 5px; color: #555;">Quantity</label>
      <input type="number" id="quantity" name="quantity" placeholder="Enter quantity"
             style="padding: 10px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 6px; font-size: 14px;">

      <input type="submit" value="Submit"
             style="background: #4a90e2; color: white; font-weight: bold; cursor: pointer; border: none; border-radius: 6px; padding: 12px; font-size: 15px;">
    </form>
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
