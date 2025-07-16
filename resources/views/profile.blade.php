@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            IL MIO PROFILO
            <div>{{$user["name"]}}</div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    @vite('resources/js/onboarding.js')
@endpush
