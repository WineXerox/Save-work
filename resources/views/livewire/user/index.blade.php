<div>
    @include('livewire.user.modal-add')
    @include('livewire.user.modal-edit')

    <button onclick="backdropRemove()" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCreate">
        เพิ่มผู้ใช้งาน
    </button>

    @include('livewire.user.list')
</div>


