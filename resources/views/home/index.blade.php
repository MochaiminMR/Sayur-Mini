@extends('layout.template')

@section('content')
<div class="mx-auto px-16 mt-28">
    @include('component.hero')
</div>
@include('component.promo')
<div class="mx-auto px-16 mb-28">
    @include('component.card')
</div>
<div class="mx-auto px-16 mb-28">
    @include('component.product')
</div>
<div class="mx-auto px-16 mb-28">
    @include('component.testimonial')
</div>
<div class="mx-auto px-16 mb-28">
    @include('component.article')
</div>
@endsection
