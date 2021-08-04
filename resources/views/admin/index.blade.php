@extends('deskapp.dashboard')

@section('main-content')
<div class="row">
    <div class="col-md-3 col-xl-3 mb-30">
        <div class="card-box height-100-p widget-style1">
            <div class="d-flex flex-wrap align-items-center">
                <div class="progress-data">
                    <div class="">
                        <span class="font-30"><i class="icon-copy dw dw-user-12 fa-lg"></i></span>
                    </div>
                </div>
                <div class="widget-data">
                    <div class="h4 mb-0">{{count(App\User::get())}}</div>
                    <div class="weight-600 font-14 fa-lg">Pegawai</div>
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
                    <div class="weight-600 font-14 fa-lg">Pendapatan Bulan Ini</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-xl-3 mb-30">
        <div class="card-box height-100-p widget-style1">
            <div class="d-flex flex-wrap align-items-center">
                <div class="progress-data">
                    <span class="font-30"><i class="icon-copy dw dw-monitor fa-lg"></i></span>
                </div>
                <div class="widget-data">
                    <div class="h4 mb-0">{{count(App\Meja::get())}}</div>
                    <div class="weight-600 font-14">Meja</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-xl-3 mb-30">
        <div class="card-box height-100-p widget-style1">
            <div class="d-flex flex-wrap align-items-center">
                <div class="progress-data">
                    <span class="font-30"><i class="icon-copy dw dw-notepad fa-lg"></i></span>
                </div>
                <div class="widget-data">
                    <div class="h4 mb-0">{{count(App\Menu::get())}}</div>
                    <div class="weight-600 font-14">Menu</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8 mb-20">
        <div class="bg-white pd-20 card-box mb-30">
            <h4 class="h4 text-blue">Menu Terlaris Bulan ${bulan}</h4>
            <div id="chartMenuTerlaris"></div>
        </div>
    </div>
    <div class="col-md-4 mb-20">
        <div class="card-box min-height-200px pd-20 mb-20" data-bgcolor="#455a64" style="background-color: rgb(69, 90, 100);">
            <div class="d-flex justify-content-between pb-20 text-white">
                <div class="icon h1 text-white">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <!-- <i class="icon-copy fa fa-stethoscope" aria-hidden="true"></i> -->
                </div>
                <div class="font-14 text-right">
                    <div><i class="icon-copy ion-arrow-up-c"></i> {{$presentaseMenu}}%</div>
                    <div class="font-12">Dari Bulan Lalu</div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-end">
                <div class="text-white">
                    <div class="font-14">Menu Terjual Hari Ini</div>
                    <div class="font-24 weight-500">{{$TotalMenuTerjual}}</div>
                </div>
                <div class="max-width-150" style="position: relative;">
                    <div id="appointment-chart" style="min-height: 70px;"><div id="apexcharts7fb333" class="apexcharts-canvas apexcharts7fb333 apexcharts-theme-light" style="width: 150px; height: 70px;"><svg id="SvgjsSvg1299" width="150" height="70" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1301" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1300"><linearGradient id="SvgjsLinearGradient1304" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1305" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1306" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1307" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMask7fb333"><rect id="SvgjsRect1309" width="154" height="70" x="-2" y="0" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask7fb333"><rect id="SvgjsRect1310" width="152" height="72" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><rect id="SvgjsRect1308" width="5.357142857142857" height="70" x="0" y="0" rx="0" ry="0" fill="url(#SvgjsLinearGradient1304)" opacity="1" stroke-width="0" stroke-dasharray="3" class="apexcharts-xcrosshairs" y2="70" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1322" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1323" class="apexcharts-xaxis-texts-g" transform="translate(0, 2.75)"></g></g><g id="SvgjsG1325" class="apexcharts-grid"><g id="SvgjsG1326" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1328" x1="0" y1="0" x2="150" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1329" x1="0" y1="17.5" x2="150" y2="17.5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1330" x1="0" y1="35" x2="150" y2="35" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1331" x1="0" y1="52.5" x2="150" y2="52.5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1332" x1="0" y1="70" x2="150" y2="70" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1327" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1334" x1="0" y1="70" x2="150" y2="70" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1333" x1="0" y1="1" x2="0" y2="70" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1312" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1313" class="apexcharts-series" rel="1" seriesName="Week" data:realIndex="0"><path id="SvgjsPath1315" d="M 8.035714285714285 70L 8.035714285714285 18.839285714285715Q 10.714285714285714 16.16071428571429 13.392857142857142 18.839285714285715L 13.392857142857142 70L 8.035714285714285 70" fill="rgba(0,143,251,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7fb333)" pathTo="M 8.035714285714285 70L 8.035714285714285 18.839285714285715Q 10.714285714285714 16.16071428571429 13.392857142857142 18.839285714285715L 13.392857142857142 70L 8.035714285714285 70" pathFrom="M 8.035714285714285 70L 8.035714285714285 70L 13.392857142857142 70L 13.392857142857142 70L 8.035714285714285 70" cy="17.5" cx="29.46428571428571" j="0" val="21" barHeight="52.5" barWidth="5.357142857142857"></path><path id="SvgjsPath1316" d="M 29.46428571428571 70L 29.46428571428571 16.339285714285715Q 32.14285714285714 13.660714285714286 34.82142857142857 16.339285714285715L 34.82142857142857 70L 29.46428571428571 70" fill="rgba(0,227,150,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7fb333)" pathTo="M 29.46428571428571 70L 29.46428571428571 16.339285714285715Q 32.14285714285714 13.660714285714286 34.82142857142857 16.339285714285715L 34.82142857142857 70L 29.46428571428571 70" pathFrom="M 29.46428571428571 70L 29.46428571428571 70L 34.82142857142857 70L 34.82142857142857 70L 29.46428571428571 70" cy="15" cx="50.89285714285714" j="1" val="22" barHeight="55" barWidth="5.357142857142857"></path><path id="SvgjsPath1317" d="M 50.89285714285714 70L 50.89285714285714 46.339285714285715Q 53.57142857142857 43.660714285714285 56.24999999999999 46.339285714285715L 56.24999999999999 70L 50.89285714285714 70" fill="rgba(254,176,25,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7fb333)" pathTo="M 50.89285714285714 70L 50.89285714285714 46.339285714285715Q 53.57142857142857 43.660714285714285 56.24999999999999 46.339285714285715L 56.24999999999999 70L 50.89285714285714 70" pathFrom="M 50.89285714285714 70L 50.89285714285714 70L 56.24999999999999 70L 56.24999999999999 70L 50.89285714285714 70" cy="45" cx="72.32142857142857" j="2" val="10" barHeight="25" barWidth="5.357142857142857"></path><path id="SvgjsPath1318" d="M 72.32142857142857 70L 72.32142857142857 1.3392857142857142Q 75 -1.3392857142857142 77.67857142857143 1.3392857142857142L 77.67857142857143 70L 72.32142857142857 70" fill="rgba(255,69,96,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7fb333)" pathTo="M 72.32142857142857 70L 72.32142857142857 1.3392857142857142Q 75 -1.3392857142857142 77.67857142857143 1.3392857142857142L 77.67857142857143 70L 72.32142857142857 70" pathFrom="M 72.32142857142857 70L 72.32142857142857 70L 77.67857142857143 70L 77.67857142857143 70L 72.32142857142857 70" cy="0" cx="93.75" j="3" val="28" barHeight="70" barWidth="5.357142857142857"></path><path id="SvgjsPath1319" d="M 93.75 70L 93.75 31.339285714285715Q 96.42857142857143 28.66071428571429 99.10714285714286 31.339285714285715L 99.10714285714286 70L 93.75 70" fill="rgba(119,93,208,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7fb333)" pathTo="M 93.75 70L 93.75 31.339285714285715Q 96.42857142857143 28.66071428571429 99.10714285714286 31.339285714285715L 99.10714285714286 70L 93.75 70" pathFrom="M 93.75 70L 93.75 70L 99.10714285714286 70L 99.10714285714286 70L 93.75 70" cy="30" cx="115.17857142857143" j="4" val="16" barHeight="40" barWidth="5.357142857142857"></path><path id="SvgjsPath1320" d="M 115.17857142857143 70L 115.17857142857143 18.839285714285715Q 117.85714285714286 16.16071428571429 120.53571428571429 18.839285714285715L 120.53571428571429 70L 115.17857142857143 70" fill="rgba(0,143,251,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7fb333)" pathTo="M 115.17857142857143 70L 115.17857142857143 18.839285714285715Q 117.85714285714286 16.16071428571429 120.53571428571429 18.839285714285715L 120.53571428571429 70L 115.17857142857143 70" pathFrom="M 115.17857142857143 70L 115.17857142857143 70L 120.53571428571429 70L 120.53571428571429 70L 115.17857142857143 70" cy="17.5" cx="136.60714285714286" j="5" val="21" barHeight="52.5" barWidth="5.357142857142857"></path><path id="SvgjsPath1321" d="M 136.60714285714286 70L 136.60714285714286 38.839285714285715Q 139.28571428571428 36.160714285714285 141.96428571428572 38.839285714285715L 141.96428571428572 70L 136.60714285714286 70" fill="rgba(0,227,150,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7fb333)" pathTo="M 136.60714285714286 70L 136.60714285714286 38.839285714285715Q 139.28571428571428 36.160714285714285 141.96428571428572 38.839285714285715L 141.96428571428572 70L 136.60714285714286 70" pathFrom="M 136.60714285714286 70L 136.60714285714286 70L 141.96428571428572 70L 141.96428571428572 70L 136.60714285714286 70" cy="37.5" cx="158.03571428571428" j="6" val="13" barHeight="32.5" barWidth="5.357142857142857"></path></g><g id="SvgjsG1314" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1335" x1="0" y1="0" x2="150" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1336" x1="0" y1="0" x2="150" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1337" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1338" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1339" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1324" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 143, 251);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 151px; height: 71px;"></div></div><div class="contract-trigger"></div></div></div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
	<script src="{{asset('vendor/deskapp/src/plugins/apexcharts/apexcharts.min.js')}}"></script>
	<script src="{{asset('vendor/deskapp/vendors/scripts/apexcharts-setting.js')}}"></script>
    <script>
        var listMenu = <?php echo json_encode($ListMenu); ?>; 
        // console.log(listMenu);
        console.log(listMenu);
        var serisData = [];
        listMenu.forEach(element => {
            // console.log(element);
            serisData.push({name: element.tgl, data: [element.total_menu]});
        });
        // for(var i = 1; i <= listMenu.length)
        console.log(serisData);
        var optionsmtl = {
            series: 
            // [{
            //     name: 'Net Profit',
            //     data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
            // }, {
            //     name: 'Revenue',
            //     data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
            // }, {
            //     name: 'Free Cash Flow',
            //     data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
            // }],
            serisData,
            chart: {
                type: 'bar',
                height: 350,
                toolbar: {
                    show: false,
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '25%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            // xaxis: {
            //     categories: listMenu,
            // },
            yaxis: {
                title: {
                    text: 'Total Menu'
                }
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return "$" + val + "thousands"
                    }
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#chartMenuTerlaris"), optionsmtl);
        chart.render();
    </script>
@endpush