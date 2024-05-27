<div>
    <div wire:ignore.self class="modal fade" id="modalEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">แก้ไข</h1>
                    <button wire:click="formClear" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form wire:submit="updateUser">
                    <input type="hidden" wire:model="id">

                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-3 col-12">
                                <label><span class="text-danger me-1">*</span>ชื่อ</label>
                                <input wire:model="name" type="text" class="form-control">

                                @error('name')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3 col-12">
                                <label><span class="text-danger me-1">*</span>อีเมล</label>
                                <input wire:model="email" type="text" class="form-control">

                                @error('email')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


<script>
    function viewPassword(event) {
        if(event.target.checked) {
            $('.input-password').attr('type', 'text');
        }
        else {
            $('.input-password').attr('type', 'password');
        }
    }
</script>


