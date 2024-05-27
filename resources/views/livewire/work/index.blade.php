<div>
    @include('livewire.work.modal-add')
    @include('livewire.work.tab')

    @if(Route::is('work') || Route::is('work.new') || 'livewire.update')
        <button onclick="backdropRemove()" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCreate">
            เพิ่มงานใหม่
        </button>
    @endif

    @include('livewire.work.list')
</div>


@if(session('success'))
    <script>
        success();
    </script>

    @php
        session(['success' => false])
    @endphp
@endif




