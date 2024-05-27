<div class="d-flex align-items-center justify-content-center vh-100">
    <form wire:submit="login" class="col-lg-5 col-md-6 col-sm-10 col-12 p-5 border rounded">
        <h3 class="text-center">เข้าสู่ระบบบันทึกงานซ่อม</h3>

        <h5 wire:click="autoAccount" class="text-primary pointer">ทดลอง</h5>

        <div class="mb-3">
            <label>อีเมล</label>
            <input wire:model="email" type="email" class="form-control">

            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label>รหัสผ่าน</label>
            <input wire:model="password" type="password" class="form-control input-password">

            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="view-password" class="pointer">
                <input id="view-password" onchange="viewPassword(event)" type="checkbox">
                <span>ดูรหัสผ่าน</span>
            </label>
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-primary">ตกลง</button>
        </div>
    </form>
</div>
