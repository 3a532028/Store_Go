@extends('ad_page.activity_ad_default')
{{--title--}}
{{--活動名稱--}}
{{--活動日期--}}
{{--活動海報--}}
@section('content')
        <div class="maincontent">
            <div class="container">
                <h1>{{$on_sale_ads[0]->name}}</h1>
                <div class="tool">
                    <div class="date">
                        <span data-i18n="Activity.Activity_Time">活動日期：</span>
                        <span class="dateText">{{$on_sale_ads[0]->start_date}}　－　{{$on_sale_ads[0]->end_date}}</span>
                    </div>
                    <div class="share">－
                        <span data-i18n="Activity.ShareText">分享┤</span>
                        <span class="fb-share" id="shareFbBtn">
                                <img src={{URL::asset("images/social/facebook-share.png")}} alt="facebookShare">
                            </span>
                        <span class="line-share">
                                <img src={{URL::asset("images/social/line-share.png")}} alt="lineShare">
                        </span>
                    </div>
                </div>
                <div class="contentbox">
                    <div class="pic">
                        <img src={{URL::asset($on_sale_ads[0]->img_src)}} class="rwd-img">
                    </div>
                </div>
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

