@extends('app')

@section('content')
<div class="row">
    <div class="col-lg-8">
        
        @include('components.post')
    </div>
    <div class="col-lg-4 py-5">
        @include('components.search')
        @include('components.category')
    </div>
</div>

@endsection