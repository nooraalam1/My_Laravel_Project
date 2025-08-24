<div>

         <form class="p-5" method="POST" action="{{route('update',['data'=>$data])}}">
            @csrf
            @method('put')
                <h2 class="mb-4">Add Category</h2>
             <div>
                 <input type="text" name="category_name" value="{{$data->category_name}}">
                 <input class="btn btn-primary" type="submit" value="Add Category">
             </div>
         </form>


</div>