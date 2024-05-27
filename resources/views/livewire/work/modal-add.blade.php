<div>
    <div wire:ignore.self class="modal fade modal-lg" id="modalCreate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">เพิ่มงานใหม่</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form wire:submit="createWork">
                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-3 col-lg-6 col-md-6">
                                <label><span class="text-danger me-1">*</span>ชื่อลูกค้า</label>
                                <input wire:model="name" type="text" class="form-control">

                                @error('name')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6">
                                <label><span class="text-danger me-1">*</span>เบอร์โทรลูกค้า</label>
                                <input wire:model="phone" type="text" class="form-control">

                                @error('phone')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6">
                                <label><span class="text-danger me-1">*</span>อุปกรณ์ที่นำมาซ่อม</label>
                                <input wire:model="device" type="text" class="form-control">

                                @error('device')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6">
                                <label><span class="text-danger me-1">*</span>ราคาซ่อม</label>
                                <input wire:model="price" type="text" class="form-control">

                                @error('price')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3 col-12">
                                <label><span class="text-danger me-1">*</span>สาเหตุที่ต้องการซ่อม</label>
                                <textarea wire:model="cause" rows="3" class="form-control"></textarea>

                                @error('cause')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3 col-12">
                                <label>หมายเหตุ</label>
                                <textarea wire:model="note" rows="3" class="form-control"></textarea>
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


