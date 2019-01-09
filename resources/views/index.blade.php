@extends('layout2.default')

@section('content')
    <style>
        .float-button {
            position: absolute;
            z-index: 10;
            position: fixed;
            height: 6%;
            width: 70%;
            bottom: 90px;
            text-align: center;
            right: 13%;
        }
    </style>

        <form action="/qrcode/reader" method="GET">
            {{ csrf_field() }}
            <button type="submit" class="float-button btn btn-warning" type="button">點我開始購物~</button>
        </form>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($carousel_ads as $c_var)
                @if($c_var->id ===1)
                    <div class="carousel-item active">
                        <a href={{route('carousel.ad',['id'=>$c_var->id])}} title="slider1">
                        <img class="d-block w-100 " src={{URL::asset($c_var->img_src)}} alt="Firstslide"></a>
                    </div>
                @else
                    <div class="carousel-item">
                        <a href={{route('carousel.ad',['id'=>$c_var->id])}} title="slider2">
                        <img class="d-block w-100" src={{URL::asset($c_var->img_src)}} alt="Secondslide"></a>
                    </div>
                @endif
            @endforeach
        </div>

        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    {{--<hr class="featurette-divider">--}}

    <div class="inner">
        <h2 class="title" >近期活動快訊 Activity</h2>
        <div class="row">
            <div class="col">
                <ul id = 'none' class="mx-auto ">
                    {{--{{$on_sales}}--}}
                    @foreach ($on_sales as $var)
                        <li class="mx-auto">
                            <a href={{route('on_sale.ad',['id'=>$var->id])}} title="activity1">

                            <img src={{URL::asset($var->img_src)}}>
                            <div class="content">{{$var->name}}</div>
                            </a>
                        </li>
                    @endforeach
                    {{--<li class="mx-auto">--}}
                        {{--<a href="待加入activity 1" title="activity 1"></a>--}}
                        {{--<img src="images/mid autumn.jpg">--}}
                        {{--<div class="content"  >大顆中秋月餅</div>--}}
                    {{--</li>--}}
                </ul>
            </div>
        </div>
        <div class="wecare">
            <h1 data-i18n="Home.WeCare">Store IS</h1>
            <div class="border"></div>
            <p class="carecontent">
                <span data-i18n="Home.WeCareContent01">「無人商店」用科技創造雙贏：一方面讓客戶省去排隊之苦，另一方面讓自己收集更多顧客行為數據，期待具國際觀、內部創業精神、有企圖心兼具實踐力的你快快加入我們！</span>
            </p>
            <div class="morebtn"><a href="待加入about">了解更多</a></div>
        </div>
    </div>

    <div class="bottom">
        <ul>
            <li>    </li>
            <il >國立勤益科技大學National Chin-Yi University of Technology</il>
            <li>地址：<a href="#" title="交通資訊">41170臺中市太平區坪林里中山路二段 57號 (交通資訊)</a>  </li>
            <li>No.57, Sec.2, Zhongshan Rd.,Taiping Dist.,Taichung 41170, Taiwan (R.O.C.)</li>
            <li>電話: <a href="#">(04)23924505 (分機表)</a> | FAX:(04) 23923363 <a href="#" title="網路電話">TANet 98110000 </a><br></li>
        </ul>
    </div>
    <footer></footer>
    @endsection
