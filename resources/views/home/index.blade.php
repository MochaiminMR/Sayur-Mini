@extends('layout.template')

@section('content')
<div class="mx-auto lg:px-16 px-2 lg:mt-28 mt-20">
    @include('component.hero')
</div>
<div class="lg:mt-0 mt-8">
    @include('component.promo')
</div>
<div class="mx-auto lg:px-16 px-3 lg:mb-28 mb-16 lg:mt-0 mt-8">
    @include('component.card')
</div>
<div class="mx-auto lg:px-16 px-3 lg:mb-28 mb-16 lg:mt-0 mt-8">
    @include('component.product')
</div>
<div class="mx-auto lg:px-16 px-3 lg:mb-28 mb-16 lg:mt-0 mt-8">
    @include('component.testimonial')
</div>
<div class="mx-auto lg:px-16 px-3 lg:mb-28 mb-16 lg:mt-0 mt-8">
    @include('component.article')
</div>
@endsection
