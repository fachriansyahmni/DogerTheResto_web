@extends('deskapp.dashboard')

@section('main-content')
{{-- filter --}}
<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
    <div class="pd-20 card-box">
        <h5 class="h4 text-blue mb-20">Customtab Tab</h5>
        <div class="tab">
            <ul class="nav nav-tabs customtab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#harian" role="tab" aria-selected="true">Harian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#bulanan" role="tab" aria-selected="false">Bulanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tahunan" role="tab" aria-selected="false">Tahunan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#custom" role="tab" aria-selected="false">Custom</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="harian" role="tabpanel">
                    <div class="pd-20">
                        <form action="">
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Tanggal</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="tanggal" placeholder="Masukan Tanggal">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Cek</button>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="bulanan" role="tabpanel">
                    <div class="pd-20">
                        <form action="">
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Bulan</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="bulan" placeholder="Masukan Bulan">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Cek</button>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="tahunan" role="tabpanel">
                    <div class="pd-20">
                        <form action="">
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Tahun</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="tahun" placeholder="Masukan Tahun">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Cek</button>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="custom" role="tabpanel">
                    <div class="pd-20">
                        <form action="">
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Text</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" placeholder="Johnny Brown">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Cek</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- table --}}
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Data Table Simple</h4>
        <p class="mb-0">you can find more options <a class="text-primary" href="https://datatables.net/" target="_blank">Click Here</a></p>
    </div>
    <div class="pb-20">
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="-1">All</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="Search" aria-controls="DataTables_Table_0"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="data-table table stripe hover nowrap dataTable no-footer dtr-inline" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
            <thead>
                <tr role="row"><th class="table-plus datatable-nosort sorting_asc" rowspan="1" colspan="1" aria-label="Name">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Age</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending">Office</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending">Address</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start Date: activate to sort column ascending">Start Date</th><th class="datatable-nosort sorting_disabled" rowspan="1" colspan="1" aria-label="Action">Action</th></tr>
            </thead>
            <tbody>
            <tr role="row" class="odd">
                    <td class="table-plus sorting_1" tabindex="0">Andrea J. Cagle</td>
                    <td>30</td>
                    <td>Gemini</td>
                    <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                    <td>29-03-2018</td>
                    <td>
                        <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">1-10 of 12 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link"><i class="ion-chevron-left"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link"><i class="ion-chevron-right"></i></a></li></ul></div></div></div></div>
    </div>
</div>
@endsection