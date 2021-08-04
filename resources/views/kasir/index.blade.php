@extends('deskapp.dashboard')

@section('main-content')
<div class="row">
				<div class="col-md-3 col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div class="">
                                    <span class="font-30"><i class="icon-copy dw dw-analytics-12"></i></span>
                                </div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">{{$TotalTransaksiToday}}</div>
								<div class="weight-600 font-14 fa-lg">Transaksi Hari Ini</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
                                <span class="font-30"><i class="icon-copy dw dw-analytics-12"></i></span>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">{{$TotalTransaksiMonthToday}}</div>
								<div class="weight-600 font-14 fa-lg">Transaksi Bulan Ini</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<span class="font-30"><i class="icon-copy dw dw-money-2 fa-lg"></i></span>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">{{$pendapatanToday}}</div>
								<div class="weight-600 font-14">Estimasi Pendapatan Hari Ini</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<span class="font-30"><i class="icon-copy dw dw-money-2 fa-lg"></i></span>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">{{$pendapatanMonth}}</div>
								<div class="weight-600 font-14">Estimasi Pendapatan Bulan Ini</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection