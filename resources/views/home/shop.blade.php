<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>
      <div class="row">
        
        
        @foreach($products as $product)

        <h2>{{$product->title}}</h2>
        @endforeach

     

      </div>

    </div>
  </section>