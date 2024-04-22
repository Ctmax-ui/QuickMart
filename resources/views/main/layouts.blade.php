@include("main.inc.header")
@yield('hero_section')

{{-- @section("itemAddedAlert")
<div class="container mt-4">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
</div>
@endsection --}}

@yield('itemAddedAlert')
@yield('content')
@yield('products_sect')
@yield('short_product_cl')
@yield('short_tranding_pr')
@yield('short_about')


@include("main.inc.footer")
@yield('script')