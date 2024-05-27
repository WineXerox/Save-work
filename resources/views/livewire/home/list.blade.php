<div class="p-3 border rounded mt-4">
    <div class="table-overflow-x overflow-x-scroll">
        <div class="pe-1 pt-1">
            <h6>งานซ่อมใหม่ล่าสุด</h6>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>อุปกรณ์</th>
                    <th>ชื่อ</th>
                    <th>เบอร์โทร</th>
                    <th>สถานะ</th>
                    <th class="text-center">วันที่เพิ่มงาน</th>
                    <th class="text-end">รายละเอียด</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($new as $value)
                    <tr>
                        <td>{{ $value->device }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->phone }}</td>
                        <td>
                            <div
                                class="
                                    alert
                                    {{
                                        match($value->status) {
                                            'new' => 'alert-warning',
                                            'proceed' => 'alert-primary',
                                            'cancel' => 'alert-danger',
                                            'success' => 'alert-success',
                                            default => 'alert-success'
                                        }
                                    }}
                                    p-0 px-2 w-fit-content w-fit my-auto space-nowrap"
                                >
                                {{
                                    match($value->status) {
                                        'new' => 'ใหม่',
                                        'proceed' => 'ดำเนินการ',
                                        'cancel' => 'ยกเลิก',
                                        'success' => 'สำเร็จ',
                                        default => 'ใหม่'
                                    }
                                }}
                            </div>
                        </td>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($value->created_at)->locale('th')->timezone('Asia/Bangkok')->addYears(543)->format('d/m/Y') }}
                        </td>

                        <td class="text-end">
                            <a wire:navigate href="{{ route('work.detail', $value->id) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-primary bi bi-layout-text-window-reverse" viewBox="0 0 16 16">
                                    <path d="M13 6.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5m0 3a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5m-.5 2.5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1z"/>
                                    <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zM2 1a1 1 0 0 0-1 1v1h14V2a1 1 0 0 0-1-1zM1 4v10a1 1 0 0 0 1 1h2V4zm4 0v11h9a1 1 0 0 0 1-1V4z"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if($new->count() < 1)
            <div class="fs-4 py-3 text-center bg-secondary text-white" style="opacity: 0.7;">ไม่พบข้อมูล</div>
        @endif
    </div>
</div>
