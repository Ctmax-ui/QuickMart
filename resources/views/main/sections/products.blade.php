@extends('main.layouts')


@section('products_sect')
    <section class="container my-5 px-5">
        <div class="d-flex justify-content-between mb-4">
            <h4 class=" mb-4 ms-4 fs-3">See our Latest Product's.</h4>
        </div>
        @livewire('products-table')

    </section>
@endsection
