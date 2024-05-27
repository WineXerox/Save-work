<div>
    <div wire:ignore.self class="modal fade" id="modalCreate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">เพิ่มผู้ใช้งาน</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form wire:submit="createUser">
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

                            <div class="mb-3 col-12">
                                <label><span class="text-danger me-1">*</span>รหัสผ่าน</label>
                                <input wire:model="password" type="password" class="form-control input-password">

                                @error('password')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3 col-12">
                                <label><span class="text-danger me-1">*</span>ยืนยันรหัสผ่าน</label>
                                <input wire:model="password_confirmation" type="password" class="form-control input-password">

                                @error('password')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label for="view-password" class="pointer">
                                    <input onchange="viewPassword(event)" id="view-password" type="checkbox">
                                    <span>ดูรหัสผ่าน</span>
                                </label>
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





