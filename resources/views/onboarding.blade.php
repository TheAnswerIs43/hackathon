@extends('layouts.app')

@section('content')
<div class="container">
    ONBOARDING
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="btn-special" class="btn btn-red" style="background-color:red"">mio bottone</div>
            <div>{{$user["name"]}}</div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    @vite('resources/js/onboarding.js')
@endpush
