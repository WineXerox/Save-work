<div class="p-3 border rounded mt-3">
    <div class="table-overflow-x overflow-x-scroll">
        <div class="d-flex flex-wrap justify-content-between pe-1 pt-1 mb-3">
            <h6 class="mb-3">ผู้ใช้งาน</h6>
            <div class="d-flex gap-2 align-items-center">
                <div class="d-flex gap-1 align-items-center">
                    <span>แถว</span>
                    <select wire:model.live="paginate" class="form-control w-fit">
                        <option value="5" selected>5</option>
                        <option value="10">10</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        <option value="200">200</option>
                    </select>
                </div>
                <input type="search" wire:model.live="search" class="form-control" placeholder="ค้นหา">
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>ชื่อ</th>
                    <th>อีเมล</th>
                    <th>ประเภท</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $value)

                    <tr>
                        <td class="space-nowrap">{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
                        <td>
                            <div class="alert alert-primary py-0 px-2 w-fit my-auto space-nowrap">
                                {{ $value->usertype == 'admin' ? 'แอดมิน' : '' }}
                            </div>
                        </td>
                        <td>
                            @if($value->id != 9)
                                <div class="d-flex justify-content-end gap-3">
                                    <span wire:click="deleteThis({{ $value->id }})" id="delete{{ $value->id }}" class="span-delete"></span>

                                    <svg for="edit" onclick="backdropRemove()" wire:click="editUser({{ $value->id }})" data-bs-toggle="modal" data-bs-target="#modalEdit" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-success pointer bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                    </svg>

                                    <svg for="delete" onclick="confirmDelete({{ $value->id }})" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-danger pointer bi bi-trash3-fill" viewBox="0 0 16 16">
                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                                    </svg>
                                </div>
                            @endif
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>

        @if($users->count() < 1)
            <div class="fs-4 py-3 text-center bg-secondary text-white" style="opacity: 0.7;">ไม่พบข้อมูล</div>
        @endif

        <div class="d-flex justify-content-end">
            {{ $users->links('vendor.livewire.bootstrap') }}
        </div>
    </div>
</div>


