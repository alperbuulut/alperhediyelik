@extends('layouts.app-admin')

@section('content')

    <div class="panel panel-headline">
        <div class="panel-heading">
            <h3 class="panel-title">Genel Bakış</h3>
            <p class="panel-subtitle">Alper Hediyelik</p>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="metric">
                        <span class="icon"><i class="fa fa-paste"></i></span>
                        <p>
{{--                            <span class="number">{{ mysqli_num_rows($data[0]) }}</span>--}}
                            <span class="number">{{ count($data[0]) }}</span>
                            <span class="title">Toplam Ürün</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="metric">
                        <span class="icon"><i class="fa fa-align-justify"></i></span>
                        <p>
                            <span class="number">{{ count($data[1]) }}</span>
                            <span class="title">Toplam Kategori</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="metric">
                        <span class="icon"><i class="fa fa-eye"></i></span>
                        <p>
                            <span class="number">274,678</span>
                            <span class="title">Visits</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="metric">
                        <span class="icon"><i class="fa fa-bar-chart"></i></span>
                        <p>
                            <span class="number">35%</span>
                            <span class="title">Conversions</span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-9">
                    <div id="headline-chart" class="ct-chart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="300" class="ct-chart-line" style="width: 100%; height: 300;"><g class="ct-grids"><line y1="265" y2="265" x1="50" x2="748.5" class="ct-grid ct-vertical"></line><line y1="229.28571428571428" y2="229.28571428571428" x1="50" x2="748.5" class="ct-grid ct-vertical"></line><line y1="193.57142857142856" y2="193.57142857142856" x1="50" x2="748.5" class="ct-grid ct-vertical"></line><line y1="157.85714285714286" y2="157.85714285714286" x1="50" x2="748.5" class="ct-grid ct-vertical"></line><line y1="122.14285714285714" y2="122.14285714285714" x1="50" x2="748.5" class="ct-grid ct-vertical"></line><line y1="86.42857142857142" y2="86.42857142857142" x1="50" x2="748.5" class="ct-grid ct-vertical"></line><line y1="50.71428571428572" y2="50.71428571428572" x1="50" x2="748.5" class="ct-grid ct-vertical"></line><line y1="15" y2="15" x1="50" x2="748.5" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M50,265L50,172.143L166.417,129.286L282.833,165L399.25,50.714L515.667,157.857L632.083,165L748.5,86.429L748.5,265Z" class="ct-area"></path></g><g class="ct-series ct-series-b"><path d="M50,265L50,236.429L166.417,157.857L282.833,207.857L399.25,93.571L515.667,129.286L632.083,65L748.5,22.143L748.5,265Z" class="ct-area"></path></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="270" width="116.41666666666667" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 116px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Mon</span></foreignObject><foreignObject style="overflow: visible;" x="166.41666666666669" y="270" width="116.41666666666667" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 116px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Tue</span></foreignObject><foreignObject style="overflow: visible;" x="282.83333333333337" y="270" width="116.41666666666666" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 116px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Wed</span></foreignObject><foreignObject style="overflow: visible;" x="399.25" y="270" width="116.41666666666669" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 116px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Thu</span></foreignObject><foreignObject style="overflow: visible;" x="515.6666666666667" y="270" width="116.41666666666669" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 116px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Fri</span></foreignObject><foreignObject style="overflow: visible;" x="632.0833333333334" y="270" width="116.41666666666663" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 116px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Sat</span></foreignObject><foreignObject style="overflow: visible;" x="748.5" y="270" width="30" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 30px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Sun</span></foreignObject><foreignObject style="overflow: visible;" y="229.28571428571428" x="10" height="35.714285714285715" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">10</span></foreignObject><foreignObject style="overflow: visible;" y="193.57142857142856" x="10" height="35.714285714285715" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">15</span></foreignObject><foreignObject style="overflow: visible;" y="157.85714285714283" x="10" height="35.71428571428571" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">20</span></foreignObject><foreignObject style="overflow: visible;" y="122.14285714285714" x="10" height="35.71428571428572" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">25</span></foreignObject><foreignObject style="overflow: visible;" y="86.42857142857142" x="10" height="35.71428571428572" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">30</span></foreignObject><foreignObject style="overflow: visible;" y="50.71428571428572" x="10" height="35.714285714285694" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">35</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="35.71428571428572" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">40</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">45</span></foreignObject></g></svg></div>
                </div>
                <div class="col-md-3">
                    <div class="weekly-summary text-right">
                        <span class="number">2,315</span> <span class="percentage"><i class="fa fa-caret-up text-success"></i> 12%</span>
                        <span class="info-label">Total Sales</span>
                    </div>
                    <div class="weekly-summary text-right">
                        <span class="number">$5,758</span> <span class="percentage"><i class="fa fa-caret-up text-success"></i> 23%</span>
                        <span class="info-label">Monthly Income</span>
                    </div>
                    <div class="weekly-summary text-right">
                        <span class="number">$65,938</span> <span class="percentage"><i class="fa fa-caret-down text-danger"></i> 8%</span>
                        <span class="info-label">Total Income</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
