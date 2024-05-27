@extends('components.layouts.app')
@section('content')

    <div class="container">
        @livewire('work.detail', ['id' => $id])
    </div>

@endsection




