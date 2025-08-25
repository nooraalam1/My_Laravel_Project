@include('admin.css')
@include('admin.header')

 <div class="d-flex align-items-stretch">
 @include('admin.sidebar')
     <div class="page-content">

         @include('admin.pageheader')

         <h1>Edit</h1>


<form action="{{route('admin.update_category',['category' =>$data])}}" method="POST">
    @csrf
    @method('PUT')
        <input type="text" name="category_name" value="{{$data->category_name}}">
        <input type="submit">
</form>

 </div>

 </div>

