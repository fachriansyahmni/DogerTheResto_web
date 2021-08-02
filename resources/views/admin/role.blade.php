@extends('admin.index')

@section('second-card')
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Data Role</h4>
        <p class="mb-0">Halaman Manajemen Role</p>
        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#bd-example-modal-lg"> Tambah Role</a>
    </div>
    <div class="pb-20">
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="-1">All</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="Search" aria-controls="DataTables_Table_0"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="data-table table stripe hover nowrap dataTable no-footer dtr-inline" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
            <thead>
                <tr role="row">
                    <th class="table-plus datatable-nosort sorting_asc" rowspan="1" colspan="1" aria-label="Name">No</th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Role</th>
                    {{-- <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending">Office</th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending">Address</th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start Date: activate to sort column ascending">Start Date</th> --}}
                    <th class="datatable-nosort sorting_disabled" rowspan="1" colspan="1" aria-label="Action">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1;?>
                <?php foreach ($roles as $role) {?>
                    <tr role="row" class="odd">
                        <td class="table-plus sorting_1" tabindex="0"><?= $i; ?></td>
                        <td><?= $role->name; ?></td>
                        {{-- <td>Gemini</td>
                        <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                        <td>29-03-2018</td> --}}
                        <td>
                            <div class="dropdown">
                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <i class="dw dw-more"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit-{{ $role->id }}"><i class="dw dw-edit2"></i> Edit</a>
                                    <a class="dropdown-item" href="/admin/role/delete/{{ $role->id }}" ><i class="dw dw-delete-3"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php $i++;?>

                    {{-- modal edit --}}
                    <div class="modal fade bs-example-modal-lg" id="edit-{{ $role->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Tambah Role</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <form action="/admin/role/edit/{{ $role->id }}" method="POST">
                                    @method("POST")
                                    @csrf
                                    <div class="modal-body">
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-md-2 col-form-label">Role</label>
                                                <div class="col-sm-12 col-md-10">
                                                    <input class="form-control" name="name" type="text" placeholder="Masukan Role" value="{{ $role->name }}" required>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php }; ?>
            </tbody>
        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">1-10 of 12 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link"><i class="ion-chevron-left"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link"><i class="ion-chevron-right"></i></a></li></ul></div></div></div></div>
    </div>
</div>

{{-- modal tambah --}}
<div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Tambah Role</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form action="/admin/role" method="POST">
                @csrf
                <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Role</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" name="name" type="text" placeholder="Masukan Role" required>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection