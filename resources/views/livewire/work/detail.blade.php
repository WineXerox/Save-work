<div>
    @include('livewire.work.tab')

    <label class="mb-3">
        วันที่เพิ่มงาน:
        <span class="text-danger">
            {{ \Carbon\Carbon::parse($detail->created_at)->locale('th')->timezone('Asia/Bangkok')->addYears(543)->format('d/m/Y H:i:s') }}
        </span>
    </label>
    <div class="row row-gap-4">
        <div class="col-lg-3 col-md-6">
            <div class="border rounded p-3">
                <h5 class="mb-3">ชื่อลูกค้า</h5>
                <div>{{ $detail->name }}</div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="border rounded p-3">
                <h5 class="mb-3">อุปกรณ์ที่นำมาซ่อม</h5>
                <div>{{ $detail->device }}</div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="border rounded p-3">
                <h5 class="mb-3">เบอร์โทรลูกค้า</h5>
                <div>{{ $detail->phone }}</div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="border rounded p-3">
                <h5 class="mb-3">ราคาซ่อม (บาท)</h5>
                <div>{{ number_format($detail->price, 0) }}</div>
            </div>
        </div>

        <div class="col-12">
            <div class="border rounded p-3">
                <h5 class="mb-3">สาเหตุที่ต้องการซ่อม</h5>
                <div>{{ $detail->cause }}</div>
            </div>
        </div>

        <div class="col-12">
            <div class="border rounded p-3">
                <h5 class="mb-3">หมายเหตุ</h5>
                <div>{{ $detail->note != '' ? $detail->note : '-' }}</div>
            </div>
        </div>

        <form wire:submit="updateStatusWork" class="row">
            <div class="col-lg-5 col-md-8">
                <h5>สถานะการซ่อม</h5>
                <div class="d-flex gap-3">
                    <select wire:model="status" class="form-control" required>
                        <option value="" hidden selected>
                            {{
                                match($detail->status) {
                                    'new' => 'ใหม่',
                                    'proceed' => 'ดำเนินการ',
                                    'success' => 'สำเร็จ',
                                    'cancel' => 'ยกเลิก',
                                    default => 'ใหม่'
                                }
                            }}
                        </option>
                        <option value="proceed">ดำเนินการ</option>
                        <option value="success">สำเร็จ</option>
                        <option value="cancel">ยกเลิก</option>
                    </select>

                    <button type="submit" class="btn btn-primary">บันทึก</button>
                </div>

                @error('status')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <span>
                    อัพเดทล่าสุด:
                    <label class="text-danger">
                        {{ \Carbon\Carbon::parse($detail->updated_at)->locale('th')->timezone('Asia/Bangkok')->addYears(543)->format('d/m/Y H:i:s') }}
                    </label>
                </span>
            </div>
        </form>

        <div class="text-end">
            <span wire:click="deleteThis({{ $detail->id }})" id="delete{{ $detail->id }}" class="span-delete">aaa</span>
            <button onclick="confirmDelete({{ $detail->id }})" class="btn btn-danger">ลบ</button>
        </div>
    </div>
</div>


