@extends('components.layouts.app')
@section('content')

    <div class="container">
        @livewire('work.index', ['status' => 'new'])
    </div>

@endsection




