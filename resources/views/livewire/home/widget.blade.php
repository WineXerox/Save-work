<div>
    <div class="row row-gap-4">
        <a wire:navigate href="{{ route('work.new') }}" class="col-lg-3 col-md-6 col-sm-6">
            <div class="border rounded p-3">
                <h5 class="mb-3">งานใหม่</h5>
                <div>{{ $newCount }}</div>
            </div>
        </a>

        <a wire:navigate href="{{ route('work.proceed') }}" class="col-lg-3 col-md-6 col-sm-6">
            <div class="border rounded p-3">
                <h5 class="mb-3">ดำเนินการ</h5>
                <div>{{ $proceedCount }}</div>
            </div>
        </a>

        <a wire:navigate href="{{ route('work.success') }}" class="col-lg-3 col-md-6 col-sm-6">
            <div class="border rounded p-3">
                <h5 class="mb-3">สำเร็จ</h5>
                <div>{{ $successCount }}</div>
            </div>
        </a>

        <a wire:navigate href="{{ route('work.cancel') }}" class="col-lg-3 col-md-6 col-sm-6">
            <div class="border rounded p-3">
                <h5 class="mb-3">ยกเลิก</h5>
                <div>{{ $cancelCount }}</div>
            </div>
        </a>
    </div>
</div>
