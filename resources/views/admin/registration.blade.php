@extends('deskapp.dashboard')

@section('main-content')
    {{-- kotak 4 --}}
    <div class="row">
        <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p widget-style1">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="progress-data" style="position: relative;">
                        <div id="chart" style="min-height: 102.7px;"><div id="apexcharts379b44" class="apexcharts-canvas apexcharts379b44 apexcharts-theme-light" style="width: 70px; height: 102.7px;"><svg id="SvgjsSvg1869" width="70" height="102.69999999999999" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1871" class="apexcharts-inner apexcharts-graphical" transform="translate(-15, 0)"><defs id="SvgjsDefs1870"><clipPath id="gridRectMask379b44"><rect id="SvgjsRect1872" width="106" height="102" x="-3" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask379b44"><rect id="SvgjsRect1873" width="102" height="102" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1879"><stop id="SvgjsStop1880" stop-opacity="1" stop-color="rgba(242,242,242,1)" offset="0"></stop><stop id="SvgjsStop1881" stop-opacity="1" stop-color="rgba(27,0,255,1)" offset="1"></stop><stop id="SvgjsStop1882" stop-opacity="1" stop-color="rgba(27,0,255,1)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1889"><stop id="SvgjsStop1890" stop-opacity="1" stop-color="rgba(236,240,244,1)" offset="0"></stop><stop id="SvgjsStop1891" stop-opacity="1" stop-color="rgba(27,0,255,1)" offset="1"></stop><stop id="SvgjsStop1892" stop-opacity="1" stop-color="rgba(27,0,255,1)" offset="1"></stop></linearGradient></defs><g id="SvgjsG1875" class="apexcharts-radialbar"><g id="SvgjsG1876"><g id="SvgjsG1877" class="apexcharts-tracks"><g id="SvgjsG1878" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 49.99489704041412 20.762195567268446" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.524268292682928" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 49.99489704041412 20.762195567268446"></path></g></g><g id="SvgjsG1884"><g id="SvgjsG1888" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1893" d="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 22.193195148565476 40.965021414464175" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient1889)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.695121951219512" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="288" data:value="80" index="0" j="0" data:pathOrig="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 22.193195148565476 40.965021414464175"></path></g><circle id="SvgjsCircle1885" r="21.47567073170732" cx="50" cy="50" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1886" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1887" font-family="Helvetica, Arial, sans-serif" x="50" y="55" text-anchor="middle" dominant-baseline="auto" font-size="15px" font-weight="400" fill="#333333" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">80%</text></g></g></g></g><line id="SvgjsLine1894" x1="0" y1="0" x2="100" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1895" x1="0" y1="0" x2="100" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g></svg><div class="apexcharts-legend"></div></div></div>
                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 81px; height: 104px;"></div></div><div class="contract-trigger"></div></div></div>
                    <div class="widget-data">
                        <div class="h4 mb-0">2020</div>
                        <div class="weight-600 font-14">Pegawai</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p widget-style1">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="progress-data" style="position: relative;">
                        <div id="chart2" style="min-height: 102.7px;"><div id="apexcharts379b50" class="apexcharts-canvas apexcharts379b50 apexcharts-theme-light" style="width: 70px; height: 102.7px;"><svg id="SvgjsSvg1896" width="70" height="102.69999999999999" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1898" class="apexcharts-inner apexcharts-graphical" transform="translate(-15, 0)"><defs id="SvgjsDefs1897"><clipPath id="gridRectMask379b50"><rect id="SvgjsRect1899" width="106" height="102" x="-3" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask379b50"><rect id="SvgjsRect1900" width="102" height="102" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1906"><stop id="SvgjsStop1907" stop-opacity="1" stop-color="rgba(242,242,242,1)" offset="0"></stop><stop id="SvgjsStop1908" stop-opacity="1" stop-color="rgba(0,150,136,1)" offset="1"></stop><stop id="SvgjsStop1909" stop-opacity="1" stop-color="rgba(0,150,136,1)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1916"><stop id="SvgjsStop1917" stop-opacity="1" stop-color="rgba(236,240,244,1)" offset="0"></stop><stop id="SvgjsStop1918" stop-opacity="1" stop-color="rgba(0,150,136,1)" offset="1"></stop><stop id="SvgjsStop1919" stop-opacity="1" stop-color="rgba(0,150,136,1)" offset="1"></stop></linearGradient></defs><g id="SvgjsG1902" class="apexcharts-radialbar"><g id="SvgjsG1903"><g id="SvgjsG1904" class="apexcharts-tracks"><g id="SvgjsG1905" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 49.99489704041412 20.762195567268446" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.524268292682928" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 49.99489704041412 20.762195567268446"></path></g></g><g id="SvgjsG1911"><g id="SvgjsG1915" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1920" d="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 22.193195148565476 59.03497858553581" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient1916)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.695121951219512" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="252" data:value="70" index="0" j="0" data:pathOrig="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 22.193195148565476 59.03497858553581"></path></g><circle id="SvgjsCircle1912" r="21.47567073170732" cx="50" cy="50" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1913" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1914" font-family="Helvetica, Arial, sans-serif" x="50" y="55" text-anchor="middle" dominant-baseline="auto" font-size="15px" font-weight="400" fill="#333333" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">70%</text></g></g></g></g><line id="SvgjsLine1921" x1="0" y1="0" x2="100" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1922" x1="0" y1="0" x2="100" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g></svg><div class="apexcharts-legend"></div></div></div>
                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 81px; height: 104px;"></div></div><div class="contract-trigger"></div></div></div>
                    <div class="widget-data">
                        <div class="h4 mb-0">400</div>
                        <div class="weight-600 font-14">Pendapatan</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p widget-style1">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="progress-data" style="position: relative;">
                        <div id="chart3" style="min-height: 102.7px;"><div id="apexcharts379b54" class="apexcharts-canvas apexcharts379b54 apexcharts-theme-light" style="width: 70px; height: 102.7px;"><svg id="SvgjsSvg1923" width="70" height="102.69999999999999" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1925" class="apexcharts-inner apexcharts-graphical" transform="translate(-15, 0)"><defs id="SvgjsDefs1924"><clipPath id="gridRectMask379b54"><rect id="SvgjsRect1926" width="106" height="102" x="-3" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask379b54"><rect id="SvgjsRect1927" width="102" height="102" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1933"><stop id="SvgjsStop1934" stop-opacity="1" stop-color="rgba(242,242,242,1)" offset="0"></stop><stop id="SvgjsStop1935" stop-opacity="1" stop-color="rgba(245,103,103,1)" offset="1"></stop><stop id="SvgjsStop1936" stop-opacity="1" stop-color="rgba(245,103,103,1)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1943"><stop id="SvgjsStop1944" stop-opacity="1" stop-color="rgba(236,240,244,1)" offset="0"></stop><stop id="SvgjsStop1945" stop-opacity="1" stop-color="rgba(245,103,103,1)" offset="1"></stop><stop id="SvgjsStop1946" stop-opacity="1" stop-color="rgba(245,103,103,1)" offset="1"></stop></linearGradient></defs><g id="SvgjsG1929" class="apexcharts-radialbar"><g id="SvgjsG1930"><g id="SvgjsG1931" class="apexcharts-tracks"><g id="SvgjsG1932" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 49.99489704041412 20.762195567268446" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.524268292682928" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 49.99489704041412 20.762195567268446"></path></g></g><g id="SvgjsG1938"><g id="SvgjsG1942" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1947" d="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 20.762195121951216 50.00000000000001" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient1943)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.695121951219512" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="270" data:value="75" index="0" j="0" data:pathOrig="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 20.762195121951216 50.00000000000001"></path></g><circle id="SvgjsCircle1939" r="21.47567073170732" cx="50" cy="50" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1940" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1941" font-family="Helvetica, Arial, sans-serif" x="50" y="55" text-anchor="middle" dominant-baseline="auto" font-size="15px" font-weight="400" fill="#333333" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">75%</text></g></g></g></g><line id="SvgjsLine1948" x1="0" y1="0" x2="100" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1949" x1="0" y1="0" x2="100" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g></svg><div class="apexcharts-legend"></div></div></div>
                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 81px; height: 104px;"></div></div><div class="contract-trigger"></div></div></div>
                    <div class="widget-data">
                        <div class="h4 mb-0">350</div>
                        <div class="weight-600 font-14">Meja</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p widget-style1">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="progress-data" style="position: relative;">
                        <div id="chart4" style="min-height: 102.7px;"><div id="apexcharts379b57" class="apexcharts-canvas apexcharts379b57 apexcharts-theme-light" style="width: 70px; height: 102.7px;"><svg id="SvgjsSvg1950" width="70" height="102.69999999999999" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1952" class="apexcharts-inner apexcharts-graphical" transform="translate(-15, 0)"><defs id="SvgjsDefs1951"><clipPath id="gridRectMask379b57"><rect id="SvgjsRect1953" width="106" height="102" x="-3" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask379b57"><rect id="SvgjsRect1954" width="102" height="102" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1960"><stop id="SvgjsStop1961" stop-opacity="1" stop-color="rgba(242,242,242,1)" offset="0"></stop><stop id="SvgjsStop1962" stop-opacity="1" stop-color="rgba(41,121,255,1)" offset="1"></stop><stop id="SvgjsStop1963" stop-opacity="1" stop-color="rgba(41,121,255,1)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1970"><stop id="SvgjsStop1971" stop-opacity="1" stop-color="rgba(236,240,244,1)" offset="0"></stop><stop id="SvgjsStop1972" stop-opacity="1" stop-color="rgba(41,121,255,1)" offset="1"></stop><stop id="SvgjsStop1973" stop-opacity="1" stop-color="rgba(41,121,255,1)" offset="1"></stop></linearGradient></defs><g id="SvgjsG1956" class="apexcharts-radialbar"><g id="SvgjsG1957"><g id="SvgjsG1958" class="apexcharts-tracks"><g id="SvgjsG1959" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 49.99489704041412 20.762195567268446" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.524268292682928" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 49.99489704041412 20.762195567268446"></path></g></g><g id="SvgjsG1965"><g id="SvgjsG1969" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1974" d="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 26.346118975439797 32.814449483278" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient1970)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.695121951219512" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="306" data:value="85" index="0" j="0" data:pathOrig="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 26.346118975439797 32.814449483278"></path></g><circle id="SvgjsCircle1966" r="21.47567073170732" cx="50" cy="50" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1967" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1968" font-family="Helvetica, Arial, sans-serif" x="50" y="55" text-anchor="middle" dominant-baseline="auto" font-size="15px" font-weight="400" fill="#333333" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">85%</text></g></g></g></g><line id="SvgjsLine1975" x1="0" y1="0" x2="100" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1976" x1="0" y1="0" x2="100" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g></svg><div class="apexcharts-legend"></div></div></div>
                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 81px; height: 104px;"></div></div><div class="contract-trigger"></div></div></div>
                    <div class="widget-data">
                        <div class="h4 mb-0">$6060</div>
                        <div class="weight-600 font-14">Menu</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
        <div class="clearfix">
            <div class="pull-left">
                <h4 class="text-blue h4">Employee Registration</h4>
                <p class="mb-30">All bootstrap element classies</p>
            </div>
        </div>
            
        <form method="POST" action="/admin/registration">
            @method('POST')
            @csrf
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Username</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" name="username" placeholder="Username">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Name</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="name" placeholder="name" type="text">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Password</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="password" type="password" placeholder="Password" >
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Role</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12" name="role">
                        <option selected="">Choose...</option>
                        @foreach (App\Role::get() as $role)
                            <option value={{$role->id}}>{{$role->name}}</option>
                            
                        @endforeach
                        {{-- <option value=5>Kasir</option>
                        <option value=4>Koki</option>
                        <option value=6>Owner</option> --}}
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Registration</button>
        </form>
    </div>
    
    <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
        <div class="clearfix">
            <div class="pull-left">
                <h4 class="text-blue h4">Employee</h4>
                <p class="mb-30">All bootstrap element classies</p>
            </div>
        </div>

        
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Username</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $i }}</th>
                    <th scope="row">{{ $user->name }}</th>
                    <th scope="row">{{ $user->username }}</th>
                    <th scope="row">{{ $user->role }}</th>
                    <th scope="row">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal-{{ $user->id }}">
                            Edit
                        </button>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#passwordModal-{{ $user->id }}">
                            Reset Password
                        </button>
                        <form action="/admin/registration/delete/{{ $user->id }}" method="POST">
                            @method("PUT")
                            @csrf
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </th>
                </tr>
                <?php $i++; ?>
                
                {{--Edit Modal --}}
                <div class="modal fade" id="editModal-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit Employee Data</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="/admin/registration/edit/{{ $user->id }}" method="POST">
                                @method("POST")
                                @csrf
                              <div class="form-group row">
                                  <label class="col-sm-12 col-md-2 col-form-label">Username</label>
                                  <div class="col-sm-12 col-md-10">
                                      <input class="form-control" type="text" name="username" placeholder="Username" value="{{ $user->username }}">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="col-sm-12 col-md-2 col-form-label">Name</label>
                                  <div class="col-sm-12 col-md-10">
                                      <input class="form-control" type="text" name="name" placeholder="Name" value="{{ $user->name }}">
                                  </div>
                              </div>
                              <?php
                                if ($user->role == "pelayan" ) {
                                    $user->role = 3;
                                } else if ($user->role == "kasir") {
                                    $user->role = 5;
                                } else if ($user->role == "koki") {
                                    $user->role = 4;
                                } else if ($user->role == "owner") {
                                    $user->role = 6;
                                }
                                
                              ?>
                              <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Role</label>
                                <div class="col-sm-12 col-md-10">
                                    <select class="custom-select col-12" name="role">
                                        <option selected="{{ $user->role }}">
                                            <?php
                                                if ($user->role == 3) {
                                                    echo "Pelayan";
                                                } else if($user->role == 5) {
                                                    echo "Kasir";
                                                } else if($user->role == 4) {
                                                    echo "Koki";
                                                } else if($user->role == 6) {
                                                    echo "owner";
                                                }
                                            ?>
                                        </option>
                                        <option value=3>Pelayan</option>
                                        <option value=5>Kasir</option>
                                        <option value=4>Koki</option>
                                        <option value=6>Owner</option>
                                    </select>
                                </div>
                            </div>
                              <div class="modal-footer">
                                <button class="btn btn-primary" type="submit">Edit</button>
                              </div>
                          </form>
                        </div>
                        
                      </div>
                    </div>
                  </div>

                  {{--Reset Password Modal --}}
                    <div class="modal fade" id="passwordModal-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Reset Password</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            <form action="/admin/registration/reset/{{ $user->id }}" method="POST">
                                @method("POST")
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Password</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" type="password" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" type="submit">Reset</button>
                                  </div>
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>
            @endforeach
        
        </tbody>
    </table>
                                
    </div>
    


    
@endsection


