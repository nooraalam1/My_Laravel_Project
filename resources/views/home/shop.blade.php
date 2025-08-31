<section class="shop_section layout_padding">
    <div class="container">
        <div class="">
            <h2 class="flex justify-center items-center">
                Latest Products: <div class="text-green-600 font-semibold">{{ $products->total() }} </div>
            </h2>
        </div>
        <div class="lg:grid grid-cols-3 gap-4">


            @foreach ($products as $product)
                <div class="">
                    <div class="card bg-base-100 shadow-lg h-80 ">
                        <figure class="px-10 pt-10">
                            <img src="{{ asset('images/' . $product->img) }}" alt="Shoes" class="rounded-xl" />
                        </figure>
                        <div class="card-body items-center text-center">
                            <h2 class="card-title">{{ $product->title }}</h2>
                            <p>{{ $product->description }}</p>
                            <p>Price: <span class="text-orange-500">{{ $product->price }} BDT</span></p>
                            <div class="card-actions">
                                <button class="btn btn-primary">Buy Now</button>
                                <button class="btn btn-secondary">Add To Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach




        </div>

    </div>
    <div class="flex justify-center items-center my-4">
                <div class="">
                    {{ $products->links() }}
                </div>

            </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
