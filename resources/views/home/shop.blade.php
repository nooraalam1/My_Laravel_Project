<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>
      <div class="">


        @foreach($products as $product)

        <p>{{$product->title}}</p> <br>
        @endforeach



      </div>

    </div>
  </section>
