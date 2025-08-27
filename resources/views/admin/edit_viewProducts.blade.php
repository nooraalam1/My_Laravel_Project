@include('admin.css')

@include('admin.header')

<div>
    <div class="d-flex align-items-stretch">
        @include('admin.sidebar')

        <div class="page-content">

            @include('admin.pageheader')
            <div>
                <form method="post" action="{{ route('updateViewProducts', ['data' => $data]) }}">
                    @csrf
                    @method('PUT')

                    <input type="text"  name="title" value="{{ $data->title }}"> <br>
                    <input type="text" name="description" value="{{ $data->description }}"> <br>
                    <input type="file"  name="img"> <br>
                    <input type="text" name="price" value="{{ $data->price }}"> <br>
                    <input type="text" name="category" value="{{ $data->category }}"> <br>
                    <input type="text" name="quantity" value="{{ $data->quantity }}"> <br>
                    <input type="submit" value="Submit">

                </form>
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
