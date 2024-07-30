@extends('main.layouts')

@section('content')
    <div class=" container-fluid ">
        <nav aria-label="breadcrumb" class="my-2 p-2 container ">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url()->previous() }}">  Go back</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $product->p_name }}</li>
                
            </ol>
        </nav>
    </div>
    @livewire('single-product-detail-page', ['id' => $product->id])
@endsection

@section('script')
    <script>
        function changeMainImage($this) {
            $('#main-image').fadeOut('fast', function() {
                $(this).attr('src', $this.src).fadeIn();
            });
        }
    </script>
@endsection
