<div class="d-flex gap-2 mb-3 justify-content-center flex-wrap">
    <a wire:navigate href="{{ route('work') }}" class="btn btn-{{ $route == 'work' ? 'primary' : 'secondary' }}">ทั้งหมด</a>
    <a wire:navigate href="{{ route('work.new') }}" class="btn btn-{{ $route == 'work.new' ? 'primary' : 'secondary' }}">ใหม่</a>
    <a wire:navigate href="{{ route('work.proceed') }}" class="btn btn-{{ $route == 'work.proceed' ? 'primary' : 'secondary' }}">ดำเนินการ</a>
    <a wire:navigate href="{{ route('work.success') }}" class="btn btn-{{ $route == 'work.success' ? 'success' : 'secondary' }}">สำเร็จ</a>
    <a wire:navigate href="{{ route('work.cancel') }}" class="btn btn-{{ $route == 'work.cancel' ? 'danger' : 'secondary' }}">ยกเลิก</a>
</div>




