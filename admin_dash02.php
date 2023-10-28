<?php
require 'dbconn.php';

$sql = "SELECT * FROM pets";
$result = $conn->query($sql);

if (!$result) {
    die("Error : " . $conn->$conn_error);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>PetVilla</title>
    <link rel="stylesheet" href="meowstyle.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&family=Kanit:wght@200&family=Noto+Sans+Thai:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="icon" href="img/cat_icon01.png" >

</head>
<body>

<!--------------------------  Navigation Bar  ---------------------------------->

    <nav>
        <a id="MeowVilla" href="admin_dashboard.php"><img src="img/PetVilla_Logo.png" alt=""></a>       
        <a href="#">รายชื่อสัตว์เลี้ยง</a>
        <a href="login.php">รายการห้องพัก</a>
        <a href="login.php">กล้องวงจรปิด</a>
        <a href="admin_dash02.php">DashBoard</a>
                         
        <a href="index.php" id="loginbtn" class="logout">ออกจากระบบ</a>

    </nav>
    <div class="bottom-stroke">
        <br>
    </div>
<!---------------------------Main---------------------------------->

<div class="app-main__outer">
<div class="app-main__inner">
<div class="app-page-title">
<div class="page-title-wrapper">
<div class="page-title-heading">
<div class="page-title-icon">
<i class="pe-7s-car icon-gradient bg-mean-fruit"></i>
</div>
<div>Analytics Dashboard
<div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div>
</div>
</div>
<div class="page-title-actions">
<button type="button" data-toggle="tooltip" title="" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark" data-original-title="Example Tooltip">
<i class="fa fa-star"></i>
</button>
<div class="d-inline-block dropdown">
<button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
<span class="btn-icon-wrapper pr-2 opacity-7">
<i class="fa fa-business-time fa-w-20"></i>
</span>
Buttons
</button>
<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
<ul class="nav flex-column">
<li class="nav-item">
<a class="nav-link">
<i class="nav-link-icon lnr-inbox"></i>
<span> Inbox</span>
<div class="ml-auto badge badge-pill badge-secondary">86</div>
</a>
</li>
<li class="nav-item">
<a class="nav-link">
<i class="nav-link-icon lnr-book"></i>
<span> Book</span>
<div class="ml-auto badge badge-pill badge-danger">5</div>
</a>
</li>
<li class="nav-item">
<a class="nav-link">
<i class="nav-link-icon lnr-picture"></i>
<span> Picture</span>
</a>
</li>
<li class="nav-item">
<a disabled="" class="nav-link disabled">
<i class="nav-link-icon lnr-file-empty"></i>
<span> File Disabled</span>
</a>
</li>
</ul>
</div>
</div>
</div> </div>
</div> <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
<li class="nav-item">
<a role="tab" class="nav-link active" href="index.html">
<span>Variation 1</span>
</a>
</li>
<li class="nav-item">
<a role="tab" class="nav-link" href="analytics-variation.html">
<span>Variation 2</span>
</a>
</li>
</ul>
<div class="tabs-animation">
<div class="mb-3 card">
<div class="card-header-tab card-header">
<div class="card-header-title font-size-lg text-capitalize font-weight-normal">
<i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
Portfolio Performance
</div>
<div class="btn-actions-pane-right text-capitalize">
<button class="btn-wide btn-outline-2x mr-md-2 btn btn-outline-focus btn-sm">View All</button>
</div>
</div>
<div class="no-gutters row">
<div class="col-sm-6 col-md-4 col-xl-4">
<div class="card no-shadow rm-border bg-transparent widget-chart text-left">
<div class="icon-wrapper rounded-circle">
<div class="icon-wrapper-bg opacity-10 bg-warning"></div>
<i class="lnr-laptop-phone text-dark opacity-8"></i>
</div>
<div class="widget-chart-content">
<div class="widget-subheading">Cash Deposits</div>
<div class="widget-numbers">1,7M</div>
<div class="widget-description opacity-8 text-focus">
<div class="d-inline text-danger pr-1">
<i class="fa fa-angle-down"></i>
<span class="pl-1">54.1%</span>
</div>
less earnings
</div>
</div>
</div>
<div class="divider m-0 d-md-none d-sm-block"></div>
</div>
<div class="col-sm-6 col-md-4 col-xl-4">
<div class="card no-shadow rm-border bg-transparent widget-chart text-left">
<div class="icon-wrapper rounded-circle">
<div class="icon-wrapper-bg opacity-9 bg-danger"></div>
<i class="lnr-graduation-hat text-white"></i>
</div>
<div class="widget-chart-content">
<div class="widget-subheading">Invested Dividents</div>
<div class="widget-numbers"><span>9M</span></div>
<div class="widget-description opacity-8 text-focus">
Grow Rate:
<span class="text-info pl-1">
<i class="fa fa-angle-down"></i>
<span class="pl-1">14.1%</span>
</span>
</div>
</div>
</div>
<div class="divider m-0 d-md-none d-sm-block"></div>
</div>
<div class="col-sm-12 col-md-4 col-xl-4">
<div class="card no-shadow rm-border bg-transparent widget-chart text-left">
<div class="icon-wrapper rounded-circle">
<div class="icon-wrapper-bg opacity-9 bg-success"></div>
<i class="lnr-apartment text-white"></i>
</div>
<div class="widget-chart-content">
<div class="widget-subheading">Capital Gains</div>
<div class="widget-numbers text-success"><span>$563</span></div>
<div class="widget-description text-focus">
Increased by
<span class="text-warning pl-1">
<i class="fa fa-angle-up"></i>
<span class="pl-1">7.35%</span>
</span>
</div>
</div>
</div>
</div>
</div>
<div class="text-center d-block p-3 card-footer">
<button class="btn-pill btn-shadow btn-wide fsize-1 btn btn-primary btn-lg">
<span class="mr-2 opacity-7">
<i class="icon icon-anim-pulse ion-ios-analytics-outline"></i>
</span>
<span class="mr-1">View Complete Report</span>
</button>
</div>
</div>
<div class="row">
<div class="col-sm-12 col-lg-6">
<div class="mb-3 card">
<div class="card-header-tab card-header">
<div class="card-header-title font-size-lg text-capitalize font-weight-normal">
<i class="header-icon lnr-cloud-download icon-gradient bg-happy-itmeo"></i>
Technical Support
</div>
<div class="btn-actions-pane-right text-capitalize actions-icon-btn">
<div class="btn-group dropdown">
<button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
<i class="pe-7s-menu btn-icon-wrapper"></i>
</button>
<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
<h6 tabindex="-1" class="dropdown-header">Header</h6>
<button type="button" tabindex="0" class="dropdown-item">
<i class="dropdown-icon lnr-inbox"> </i><span>Menus</span>
</button>
<button type="button" tabindex="0" class="dropdown-item">
<i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span>
</button>
<button type="button" tabindex="0" class="dropdown-item">
<i class="dropdown-icon lnr-book"> </i><span>Actions</span>
</button>
<div tabindex="-1" class="dropdown-divider"></div>
<div class="p-3 text-right">
<button class="mr-2 btn-shadow btn-sm btn btn-link">View Details</button>
<button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
</div>
</div>
</div>
</div>
</div>
<div class="p-0 card-body">
<div class="p-1 slick-slider-sm mx-auto">
<div class="slick-slider slick-initialized slick-dotted"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 3969px; transform: translate3d(-567px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 567px;"><div><div style="width: 100%; display: inline-block;">
<div class="widget-chart widget-chart2 text-left p-0">
<div class="widget-chat-wrapper-outer">
<div class="widget-chart-content widget-chart-content-lg pb-0">
<div class="widget-chart-flex">
<div class="widget-title opacity-5 text-muted text-uppercase"> Helpdesk Tickets</div>
</div>
<div class="widget-numbers">
<div class="widget-chart-flex">
<div>
<span class="text-warning">34</span>
</div>
<div class="widget-title ml-2 font-size-lg font-weight-normal text-dark">
<span class="opacity-5 text-muted pl-2 pr-1">5%</span>
increase
</div>
</div>
</div>
</div>
<div class="widget-chart-wrapper he-auto opacity-10 m-0">
<div id="" style="min-height: 152px;"><div id="" class="apexcharts-canvas apexcharts0epa0njc" style="width: 567px; height: 152px;"><svg id="" width="567" height="152" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id=""><clipPath id=""><rect id="" width="572" height="157" x="-2.5" y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id=""><rect id="" width="581" height="166" x="-7" y="-7" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="" x1="0" y1="0" x2="0" y2="1"><stop id="" stop-opacity="0.7" stop-color="rgba(247,185,36,0.7)" offset="0"></stop><stop id="" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="0.9"></stop><stop id="" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="1"></stop></linearGradient></defs><rect id="" width="1" height="152" x="0" y="0" rx="0" ry="0" fill="#b1b9c4" opacity="1" stroke-width="0" stroke-dasharray="0" class="apexcharts-xcrosshairs" filter="none" fill-opacity="0.9"></rect><g id="" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="" class="apexcharts-grid"><line id="" x1="0" y1="152" x2="567" y2="152" stroke="transparent" stroke-dasharray="0"></line><line id="" x1="0" y1="1" x2="0" y2="152" stroke="transparent" stroke-dasharray="0"></line></g><g id="" class="apexcharts-area-series apexcharts-plot-series"><g id="" class="apexcharts-series series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="" d="M7.265886213661398 104.6320979737622C12.600406926185313 104.6320979737622 17.172853251205815 86.4911993254158 22.50737396372973 86.4911993254158C27.841894676253645 86.4911993254158 45.34446703754442 95.56164864958899 50.67898775006833 95.56164864958899C56.01350846259225 95.56164864958899 68.96946703754442 120.75734121673676 74.30398775006833 120.75734121673676C79.63850846259226 120.75734121673676 92.59446703754442 116.72603040599313 97.92898775006833 116.72603040599313C103.26350846259226 116.72603040599313 116.21946703754442 106.64775337913402 121.55398775006833 106.64775337913402C126.88850846259226 106.64775337913402 139.8444670375444 98.58513175764674 145.17898775006833 98.58513175764674C150.51350846259226 98.58513175764674 163.4694670375444 97.57730405496082 168.80398775006833 97.57730405496082C174.13850846259226 97.57730405496082 187.0944670375444 127.81213513553814 192.42898775006833 127.81213513553814C197.76350846259226 127.81213513553814 210.7194670375444 124.78865202748041 216.05398775006833 124.78865202748041C221.38850846259226 124.78865202748041 234.3444670375444 108.66340878450583 239.67898775006833 108.66340878450583C245.01350846259226 108.66340878450583 257.9694670375444 110.67906418987765 263.30398775006836 110.67906418987765C268.63850846259226 110.67906418987765 281.5944670375444 114.7103750006213 286.92898775006836 114.7103750006213C292.26350846259226 114.7103750006213 305.2194670375444 97.57730405496082 310.55398775006836 97.57730405496082C315.88850846259226 97.57730405496082 328.8444670375444 89.51468243347352 334.17898775006836 89.51468243347352C339.51350846259226 89.51468243347352 352.4694670375444 58.2720236502103 357.80398775006836 58.2720236502103C363.13850846259226 58.2720236502103 376.0944670375444 124.78865202748041 381.42898775006836 124.78865202748041C386.76350846259226 124.78865202748041 399.7194670375444 90.52251013615944 405.05398775006836 90.52251013615944C410.38850846259226 90.52251013615944 423.3444670375444 105.6399256764481 428.67898775006836 105.6399256764481C434.01350846259226 105.6399256764481 446.9694670375444 112.69471959524947 452.30398775006836 112.69471959524947C457.63850846259226 112.69471959524947 470.5944670375444 113.70254729793538 475.92898775006836 113.70254729793538C481.26350846259226 113.70254729793538 494.2194670375444 132.8512736489677 499.55398775006836 132.8512736489677C504.8885084625922 132.8512736489677 517.8444670375444 100.60078716301854 523.1789877500684 100.60078716301854C528.5135084625922 100.60078716301854 541.4694670375444 116.72603040599313 546.8039877500684 116.72603040599313C546.8039877500684 116.72603040599313 555.1875 116.72603040599313 555.1875 116.72603040599313 " fill="none" fill-opacity="1" stroke="#f7b924" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask0epa0njc)" pathTo="M 11.8125 78.5775950668037C 20.081249999999997 78.5775950668037 27.168750000000003 50.45837615621788 35.4375 50.45837615621788C 43.70625 50.45837615621788 50.79375 64.51798561151078 59.0625 64.51798561151078C 67.33125 64.51798561151078 74.41875 103.57245632065775 82.6875 103.57245632065775C 90.95625 103.57245632065775 98.04375 97.32374100719424 106.3125 97.32374100719424C 114.58125 97.32374100719424 121.66875 81.70195272353546 129.9375 81.70195272353546C 138.20625 81.70195272353546 145.29375 69.20452209660843 153.5625 69.20452209660843C 161.83125 69.20452209660843 168.91875 67.64234326824254 177.1875 67.64234326824254C 185.45625 67.64234326824254 192.54375 114.5077081192189 200.8125 114.5077081192189C 209.08125 114.5077081192189 216.16875 109.82117163412127 224.4375 109.82117163412127C 232.70625 109.82117163412127 239.79375 84.82631038026722 248.0625 84.82631038026722C 256.33125 84.82631038026722 263.41875 87.95066803699896 271.6875 87.95066803699896C 279.95625 87.95066803699896 287.04375 94.19938335046248 295.3125 94.19938335046248C 303.58125 94.19938335046248 310.66875 67.64234326824254 318.9375 67.64234326824254C 327.20625 67.64234326824254 334.29375 55.144912641315514 342.5625 55.144912641315514C 350.83125 55.144912641315514 357.91875 6.717368961973278 366.1875 6.717368961973278C 374.45625 6.717368961973278 381.54375 109.82117163412127 389.8125 109.82117163412127C 398.08125 109.82117163412127 405.16875 56.70709146968139 413.4375 56.70709146968139C 421.70625 56.70709146968139 428.79375 80.13977389516957 437.0625 80.13977389516957C 445.33125 80.13977389516957 452.41875 91.07502569373072 460.6875 91.07502569373072C 468.95625 91.07502569373072 476.04375 92.6372045220966 484.3125 92.6372045220966C 492.58125 92.6372045220966 499.66875 122.3186022610483 507.9375 122.3186022610483C 516.20625 122.3186022610483 523.29375 72.32887975334017 531.5625 72.32887975334017C 539.83125 72.32887975334017 546.91875 97.32374100719424 555.1875 97.32374100719424" pathFrom="M -1 152L -1 152L 35.4375 152L 59.0625 152L 82.6875 152L 106.3125 152L 129.9375 152L 153.5625 152L 177.1875 152L 200.8125 152L 224.4375 152L 248.0625 152L 271.6875 152L 295.3125 152L 318.9375 152L 342.5625 152L 366.1875 152L 389.8125 152L 413.4375 152L 437.0625 152L 460.6875 152L 484.3125 152L 507.9375 152L 531.5625 152L 555.1875 152"></path><path id="" d="M7.265886213661398 152L7.265886213661398 104.6320979737622C12.600406926185313 104.6320979737622 30.102979287476085 86.4911993254158 35.4375 86.4911993254158C40.77202071252391 86.4911993254158 53.72797928747609 95.56164864958899 59.0625 95.56164864958899C64.39702071252391 95.56164864958899 77.35297928747609 120.75734121673676 82.6875 120.75734121673676C88.02202071252391 120.75734121673676 100.97797928747609 116.72603040599313 106.3125 116.72603040599313C111.64702071252391 116.72603040599313 124.60297928747609 106.64775337913402 129.9375 106.64775337913402C135.27202071252393 106.64775337913402 148.22797928747607 98.58513175764674 153.5625 98.58513175764674C158.89702071252393 98.58513175764674 171.85297928747607 97.57730405496082 177.1875 97.57730405496082C182.52202071252393 97.57730405496082 195.47797928747607 127.81213513553814 200.8125 127.81213513553814C206.14702071252393 127.81213513553814 219.10297928747607 124.78865202748041 224.4375 124.78865202748041C229.77202071252393 124.78865202748041 242.72797928747607 108.66340878450583 248.0625 108.66340878450583C253.39702071252393 108.66340878450583 266.3529792874761 110.67906418987765 271.6875 110.67906418987765C277.0220207125239 110.67906418987765 289.9779792874761 114.7103750006213 295.3125 114.7103750006213C300.6470207125239 114.7103750006213 313.6029792874761 97.57730405496082 318.9375 97.57730405496082C324.2720207125239 97.57730405496082 337.2279792874761 89.51468243347352 342.5625 89.51468243347352C347.8970207125239 89.51468243347352 360.8529792874761 58.2720236502103 366.1875 58.2720236502103C371.5220207125239 58.2720236502103 384.4779792874761 124.78865202748041 389.8125 124.78865202748041C395.1470207125239 124.78865202748041 408.1029792874761 90.52251013615944 413.4375 90.52251013615944C418.7720207125239 90.52251013615944 431.7279792874761 105.6399256764481 437.0625 105.6399256764481C442.3970207125239 105.6399256764481 455.3529792874761 112.69471959524947 460.6875 112.69471959524947C466.0220207125239 112.69471959524947 478.9779792874761 113.70254729793538 484.3125 113.70254729793538C489.6470207125239 113.70254729793538 502.6029792874761 132.8512736489677 507.9375 132.8512736489677C513.2720207125238 132.8512736489677 526.2279792874762 100.60078716301854 531.5625 100.60078716301854C536.8970207125238 100.60078716301854 549.8529792874762 116.72603040599313 555.1875 116.72603040599313C555.1875 116.72603040599313 555.1875 116.72603040599313 555.1875 152M357.82010446523304 116.72603040599313C357.82010446523304 116.72603040599313 357.82010446523304 116.72603040599313 357.82010446523304 116.72603040599313 " fill="url(#SvgjsLinearGradient1050)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask0epa0njc)" pathTo="M 11.8125 152L 11.8125 78.5775950668037C 20.081249999999997 78.5775950668037 27.168750000000003 50.45837615621788 35.4375 50.45837615621788C 43.70625 50.45837615621788 50.79375 64.51798561151078 59.0625 64.51798561151078C 67.33125 64.51798561151078 74.41875 103.57245632065775 82.6875 103.57245632065775C 90.95625 103.57245632065775 98.04375 97.32374100719424 106.3125 97.32374100719424C 114.58125 97.32374100719424 121.66875 81.70195272353546 129.9375 81.70195272353546C 138.20625 81.70195272353546 145.29375 69.20452209660843 153.5625 69.20452209660843C 161.83125 69.20452209660843 168.91875 67.64234326824254 177.1875 67.64234326824254C 185.45625 67.64234326824254 192.54375 114.5077081192189 200.8125 114.5077081192189C 209.08125 114.5077081192189 216.16875 109.82117163412127 224.4375 109.82117163412127C 232.70625 109.82117163412127 239.79375 84.82631038026722 248.0625 84.82631038026722C 256.33125 84.82631038026722 263.41875 87.95066803699896 271.6875 87.95066803699896C 279.95625 87.95066803699896 287.04375 94.19938335046248 295.3125 94.19938335046248C 303.58125 94.19938335046248 310.66875 67.64234326824254 318.9375 67.64234326824254C 327.20625 67.64234326824254 334.29375 55.144912641315514 342.5625 55.144912641315514C 350.83125 55.144912641315514 357.91875 6.717368961973278 366.1875 6.717368961973278C 374.45625 6.717368961973278 381.54375 109.82117163412127 389.8125 109.82117163412127C 398.08125 109.82117163412127 405.16875 56.70709146968139 413.4375 56.70709146968139C 421.70625 56.70709146968139 428.79375 80.13977389516957 437.0625 80.13977389516957C 445.33125 80.13977389516957 452.41875 91.07502569373072 460.6875 91.07502569373072C 468.95625 91.07502569373072 476.04375 92.6372045220966 484.3125 92.6372045220966C 492.58125 92.6372045220966 499.66875 122.3186022610483 507.9375 122.3186022610483C 516.20625 122.3186022610483 523.29375 72.32887975334017 531.5625 72.32887975334017C 539.83125 72.32887975334017 546.91875 97.32374100719424 555.1875 97.32374100719424C 555.1875 97.32374100719424 555.1875 97.32374100719424 555.1875 152M 555.1875 97.32374100719424z" pathFrom="M -1 152L -1 152L 35.4375 152L 59.0625 152L 82.6875 152L 106.3125 152L 129.9375 152L 153.5625 152L 177.1875 152L 200.8125 152L 224.4375 152L 248.0625 152L 271.6875 152L 295.3125 152L 318.9375 152L 342.5625 152L 366.1875 152L 389.8125 152L 413.4375 152L 437.0625 152L 460.6875 152L 484.3125 152L 507.9375 152L 531.5625 152L 555.1875 152"></path><g id="" class="apexcharts-series-markers-wrap hidden"><g class="apexcharts-series-markers"><circle id="" r="0" cx="0" cy="0" class="apexcharts-marker wyvnxskrl no-pointer-events" stroke="#ffffff" fill="#f7b924" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="" class="apexcharts-datalabels"></g></g></g><line id="" x1="0" y1="0" x2="567" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="" x1="0" y1="0" x2="567" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="" class="apexcharts-yaxis-annotations hidden"></g><g id="" class="apexcharts-xaxis-annotations hidden"></g><g id="" class="apexcharts-point-annotations hidden"></g></g><g id="" class="apexcharts-yaxis" rel="0" transform="translate(-35, 0)"><g id="" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(247, 185, 36);"></span><div class="apexcharts-tooltip-text"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
<div class="resize-triggers"><div class="expand-trigger"><div style="width: 568px; height: 153px;"></div></div><div class="contract-trigger"></div></div></div>
</div>
</div>
</div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" role="tabpanel" id="slick-slide00" style="width: 567px;"><div><div style="width: 100%; display: inline-block;">
<div class="widget-chart widget-chart2 text-left p-0">
<div class="widget-chat-wrapper-outer">
<div class="widget-chart-content widget-chart-content-lg pb-0">
<div class="widget-chart-flex">
<div class="widget-title opacity-5 text-muted text-uppercase"> New Accounts since 2018</div>
</div>
<div class="widget-numbers">
<div class="widget-chart-flex">
<div>
<span class="opacity-10 text-success pr-2">
<i class="fa fa-angle-up"></i>
</span>
<span>78</span>
<small class="opacity-5 pl-1">%</small>
</div>
<div class="widget-title ml-2 font-size-lg font-weight-normal text-muted">
<span class="text-success pl-2">+14</span>
</div>
</div>
</div>
</div>
<div class="widget-chart-wrapper he-auto opacity-10 m-0">
<div id="dashboard-sparkline-3" style="min-height: 152px;"><div id="apexcharts4nn09g6g" class="apexcharts-canvas apexcharts4nn09g6g" style="width: 567px; height: 152px;"><svg id="SvgjsSvg1068" width="567" height="152" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1070" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1069"><clipPath id="gridRectMask4nn09g6g"><rect id="SvgjsRect1073" width="572" height="157" x="-2.5" y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask4nn09g6g"><rect id="SvgjsRect1074" width="581" height="166" x="-7" y="-7" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1081" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1082" stop-opacity="0.7" stop-color="rgba(58,196,125,0.7)" offset="0"></stop><stop id="SvgjsStop1083" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="0.9"></stop><stop id="SvgjsStop1084" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="1"></stop></linearGradient></defs><rect id="SvgjsRect1072" width="1" height="152" x="0" y="0" rx="0" ry="0" fill="#b1b9c4" opacity="1" stroke-width="0" stroke-dasharray="0" class="apexcharts-xcrosshairs" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1086" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1087" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1090" class="apexcharts-grid"><line id="SvgjsLine1092" x1="0" y1="152" x2="567" y2="152" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1091" x1="0" y1="1" x2="0" y2="152" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1076" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1077" class="apexcharts-series series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="apexcharts-area-0" d="M11.8125 103.57245632065775C20.081249999999997 103.57245632065775 27.168750000000003 81.70195272353546 35.4375 81.70195272353546C43.70625 81.70195272353546 50.79375 94.19938335046248 59.0625 94.19938335046248C67.33125 94.19938335046248 74.41875 78.5775950668037 82.6875 78.5775950668037C90.95625 78.5775950668037 98.04375 109.82117163412127 106.3125 109.82117163412127C114.58125 109.82117163412127 121.66875 84.82631038026722 129.9375 84.82631038026722C138.20625 84.82631038026722 145.29375 67.64234326824254 153.5625 67.64234326824254C161.83125 67.64234326824254 168.91875 97.32374100719424 177.1875 97.32374100719424C185.45625 97.32374100719424 192.54375 67.64234326824254 200.8125 67.64234326824254C209.08125 67.64234326824254 216.16875 56.70709146968139 224.4375 56.70709146968139C232.70625 56.70709146968139 239.79375 87.95066803699896 248.0625 87.95066803699896C256.33125 87.95066803699896 263.41875 50.45837615621788 271.6875 50.45837615621788C279.95625 50.45837615621788 287.04375 91.07502569373072 295.3125 91.07502569373072C303.58125 91.07502569373072 310.66875 109.82117163412127 318.9375 109.82117163412127C327.20625 109.82117163412127 334.29375 6.717368961973278 342.5625 6.717368961973278C350.83125 6.717368961973278 357.91875 55.144912641315514 366.1875 55.144912641315514C374.45625 55.144912641315514 381.54375 64.51798561151078 389.8125 64.51798561151078C398.08125 64.51798561151078 405.16875 92.6372045220966 413.4375 92.6372045220966C421.70625 92.6372045220966 428.79375 72.32887975334017 437.0625 72.32887975334017C445.33125 72.32887975334017 452.41875 122.3186022610483 460.6875 122.3186022610483C468.95625 122.3186022610483 476.04375 97.32374100719424 484.3125 97.32374100719424C492.58125 97.32374100719424 499.66875 80.13977389516957 507.9375 80.13977389516957C516.20625 80.13977389516957 523.29375 114.5077081192189 531.5625 114.5077081192189C539.83125 114.5077081192189 546.91875 69.20452209660843 555.1875 69.20452209660843C555.1875 69.20452209660843 555.1875 69.20452209660843 555.1875 69.20452209660843 " fill="none" fill-opacity="1" stroke="#3ac47d" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask4nn09g6g)" pathTo="M 11.8125 103.57245632065775C 20.081249999999997 103.57245632065775 27.168750000000003 81.70195272353546 35.4375 81.70195272353546C 43.70625 81.70195272353546 50.79375 94.19938335046248 59.0625 94.19938335046248C 67.33125 94.19938335046248 74.41875 78.5775950668037 82.6875 78.5775950668037C 90.95625 78.5775950668037 98.04375 109.82117163412127 106.3125 109.82117163412127C 114.58125 109.82117163412127 121.66875 84.82631038026722 129.9375 84.82631038026722C 138.20625 84.82631038026722 145.29375 67.64234326824254 153.5625 67.64234326824254C 161.83125 67.64234326824254 168.91875 97.32374100719424 177.1875 97.32374100719424C 185.45625 97.32374100719424 192.54375 67.64234326824254 200.8125 67.64234326824254C 209.08125 67.64234326824254 216.16875 56.70709146968139 224.4375 56.70709146968139C 232.70625 56.70709146968139 239.79375 87.95066803699896 248.0625 87.95066803699896C 256.33125 87.95066803699896 263.41875 50.45837615621788 271.6875 50.45837615621788C 279.95625 50.45837615621788 287.04375 91.07502569373072 295.3125 91.07502569373072C 303.58125 91.07502569373072 310.66875 109.82117163412127 318.9375 109.82117163412127C 327.20625 109.82117163412127 334.29375 6.717368961973278 342.5625 6.717368961973278C 350.83125 6.717368961973278 357.91875 55.144912641315514 366.1875 55.144912641315514C 374.45625 55.144912641315514 381.54375 64.51798561151078 389.8125 64.51798561151078C 398.08125 64.51798561151078 405.16875 92.6372045220966 413.4375 92.6372045220966C 421.70625 92.6372045220966 428.79375 72.32887975334017 437.0625 72.32887975334017C 445.33125 72.32887975334017 452.41875 122.3186022610483 460.6875 122.3186022610483C 468.95625 122.3186022610483 476.04375 97.32374100719424 484.3125 97.32374100719424C 492.58125 97.32374100719424 499.66875 80.13977389516957 507.9375 80.13977389516957C 516.20625 80.13977389516957 523.29375 114.5077081192189 531.5625 114.5077081192189C 539.83125 114.5077081192189 546.91875 69.20452209660843 555.1875 69.20452209660843" pathFrom="M -1 152L -1 152L 35.4375 152L 59.0625 152L 82.6875 152L 106.3125 152L 129.9375 152L 153.5625 152L 177.1875 152L 200.8125 152L 224.4375 152L 248.0625 152L 271.6875 152L 295.3125 152L 318.9375 152L 342.5625 152L 366.1875 152L 389.8125 152L 413.4375 152L 437.0625 152L 460.6875 152L 484.3125 152L 507.9375 152L 531.5625 152L 555.1875 152"></path><path id="apexcharts-area-0" d="M11.8125 152L11.8125 103.57245632065775C20.081249999999997 103.57245632065775 27.168750000000003 81.70195272353546 35.4375 81.70195272353546C43.70625 81.70195272353546 50.79375 94.19938335046248 59.0625 94.19938335046248C67.33125 94.19938335046248 74.41875 78.5775950668037 82.6875 78.5775950668037C90.95625 78.5775950668037 98.04375 109.82117163412127 106.3125 109.82117163412127C114.58125 109.82117163412127 121.66875 84.82631038026722 129.9375 84.82631038026722C138.20625 84.82631038026722 145.29375 67.64234326824254 153.5625 67.64234326824254C161.83125 67.64234326824254 168.91875 97.32374100719424 177.1875 97.32374100719424C185.45625 97.32374100719424 192.54375 67.64234326824254 200.8125 67.64234326824254C209.08125 67.64234326824254 216.16875 56.70709146968139 224.4375 56.70709146968139C232.70625 56.70709146968139 239.79375 87.95066803699896 248.0625 87.95066803699896C256.33125 87.95066803699896 263.41875 50.45837615621788 271.6875 50.45837615621788C279.95625 50.45837615621788 287.04375 91.07502569373072 295.3125 91.07502569373072C303.58125 91.07502569373072 310.66875 109.82117163412127 318.9375 109.82117163412127C327.20625 109.82117163412127 334.29375 6.717368961973278 342.5625 6.717368961973278C350.83125 6.717368961973278 357.91875 55.144912641315514 366.1875 55.144912641315514C374.45625 55.144912641315514 381.54375 64.51798561151078 389.8125 64.51798561151078C398.08125 64.51798561151078 405.16875 92.6372045220966 413.4375 92.6372045220966C421.70625 92.6372045220966 428.79375 72.32887975334017 437.0625 72.32887975334017C445.33125 72.32887975334017 452.41875 122.3186022610483 460.6875 122.3186022610483C468.95625 122.3186022610483 476.04375 97.32374100719424 484.3125 97.32374100719424C492.58125 97.32374100719424 499.66875 80.13977389516957 507.9375 80.13977389516957C516.20625 80.13977389516957 523.29375 114.5077081192189 531.5625 114.5077081192189C539.83125 114.5077081192189 546.91875 69.20452209660843 555.1875 69.20452209660843C555.1875 69.20452209660843 555.1875 69.20452209660843 555.1875 152M555.1875 69.20452209660843C555.1875 69.20452209660843 555.1875 69.20452209660843 555.1875 69.20452209660843 " fill="url(#SvgjsLinearGradient1081)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask4nn09g6g)" pathTo="M 11.8125 152L 11.8125 103.57245632065775C 20.081249999999997 103.57245632065775 27.168750000000003 81.70195272353546 35.4375 81.70195272353546C 43.70625 81.70195272353546 50.79375 94.19938335046248 59.0625 94.19938335046248C 67.33125 94.19938335046248 74.41875 78.5775950668037 82.6875 78.5775950668037C 90.95625 78.5775950668037 98.04375 109.82117163412127 106.3125 109.82117163412127C 114.58125 109.82117163412127 121.66875 84.82631038026722 129.9375 84.82631038026722C 138.20625 84.82631038026722 145.29375 67.64234326824254 153.5625 67.64234326824254C 161.83125 67.64234326824254 168.91875 97.32374100719424 177.1875 97.32374100719424C 185.45625 97.32374100719424 192.54375 67.64234326824254 200.8125 67.64234326824254C 209.08125 67.64234326824254 216.16875 56.70709146968139 224.4375 56.70709146968139C 232.70625 56.70709146968139 239.79375 87.95066803699896 248.0625 87.95066803699896C 256.33125 87.95066803699896 263.41875 50.45837615621788 271.6875 50.45837615621788C 279.95625 50.45837615621788 287.04375 91.07502569373072 295.3125 91.07502569373072C 303.58125 91.07502569373072 310.66875 109.82117163412127 318.9375 109.82117163412127C 327.20625 109.82117163412127 334.29375 6.717368961973278 342.5625 6.717368961973278C 350.83125 6.717368961973278 357.91875 55.144912641315514 366.1875 55.144912641315514C 374.45625 55.144912641315514 381.54375 64.51798561151078 389.8125 64.51798561151078C 398.08125 64.51798561151078 405.16875 92.6372045220966 413.4375 92.6372045220966C 421.70625 92.6372045220966 428.79375 72.32887975334017 437.0625 72.32887975334017C 445.33125 72.32887975334017 452.41875 122.3186022610483 460.6875 122.3186022610483C 468.95625 122.3186022610483 476.04375 97.32374100719424 484.3125 97.32374100719424C 492.58125 97.32374100719424 499.66875 80.13977389516957 507.9375 80.13977389516957C 516.20625 80.13977389516957 523.29375 114.5077081192189 531.5625 114.5077081192189C 539.83125 114.5077081192189 546.91875 69.20452209660843 555.1875 69.20452209660843C 555.1875 69.20452209660843 555.1875 69.20452209660843 555.1875 152M 555.1875 69.20452209660843z" pathFrom="M -1 152L -1 152L 35.4375 152L 59.0625 152L 82.6875 152L 106.3125 152L 129.9375 152L 153.5625 152L 177.1875 152L 200.8125 152L 224.4375 152L 248.0625 152L 271.6875 152L 295.3125 152L 318.9375 152L 342.5625 152L 366.1875 152L 389.8125 152L 413.4375 152L 437.0625 152L 460.6875 152L 484.3125 152L 507.9375 152L 531.5625 152L 555.1875 152"></path><g id="SvgjsG1078" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1098" r="0" cx="0" cy="0" class="apexcharts-marker ws4aodg1x no-pointer-events" stroke="#ffffff" fill="#3ac47d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1079" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1093" x1="0" y1="0" x2="567" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1094" x1="0" y1="0" x2="567" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1095" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1096" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1097" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1088" class="apexcharts-yaxis" rel="0" transform="translate(-35, 0)"><g id="SvgjsG1089" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(58, 196, 125);"></span><div class="apexcharts-tooltip-text"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
<div class="resize-triggers"><div class="expand-trigger"><div style="width: 568px; height: 153px;"></div></div><div class="contract-trigger"></div></div></div>
</div>
</div>
</div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide01" style="width: 567px;"><div><div style="width: 100%; display: inline-block;">
<div class="widget-chart widget-chart2 text-left p-0">
<div class="widget-chat-wrapper-outer">
<div class="widget-chart-content widget-chart-content-lg pb-0">
<div class="widget-chart-flex">
<div class="widget-title opacity-5 text-muted text-uppercase"> Last Year Total Sales</div>
</div>
<div class="widget-numbers">
<div class="widget-chart-flex">
<div>
<small class="opacity-3 pr-1">$</small>
<span>629</span>
<span class="text-primary pl-3">
<i class="fa fa-angle-down"></i>
</span>
</div>
</div>
</div>
</div>
<div class="widget-chart-wrapper he-auto opacity-10 m-0">
<div id="dashboard-sparkline-1" style="min-height: 152px;"><div id="apexchartsufnaw8z9" class="apexcharts-canvas apexchartsufnaw8z9" style="width: 567px; height: 152px;"><svg id="SvgjsSvg1006" width="567" height="152" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1008" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1007"><clipPath id="gridRectMaskufnaw8z9"><rect id="SvgjsRect1011" width="572" height="157" x="-2.5" y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskufnaw8z9"><rect id="SvgjsRect1012" width="581" height="166" x="-7" y="-7" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1019" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1020" stop-opacity="0.7" stop-color="rgba(63,106,216,0.7)" offset="0"></stop><stop id="SvgjsStop1021" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="0.9"></stop><stop id="SvgjsStop1022" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="1"></stop></linearGradient></defs><rect id="SvgjsRect1010" width="1" height="152" x="0" y="0" rx="0" ry="0" fill="#b1b9c4" opacity="1" stroke-width="0" stroke-dasharray="0" class="apexcharts-xcrosshairs" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1024" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1025" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1028" class="apexcharts-grid"><line id="SvgjsLine1030" x1="0" y1="152" x2="567" y2="152" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1029" x1="0" y1="1" x2="0" y2="152" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1014" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1015" class="apexcharts-series series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="apexcharts-area-0" d="M11.8125 109.82117163412127C20.081249999999997 109.82117163412127 27.168750000000003 67.64234326824254 35.4375 67.64234326824254C43.70625 67.64234326824254 50.79375 91.07502569373072 59.0625 91.07502569373072C67.33125 91.07502569373072 74.41875 87.95066803699896 82.6875 87.95066803699896C90.95625 87.95066803699896 98.04375 81.70195272353546 106.3125 81.70195272353546C114.58125 81.70195272353546 121.66875 50.45837615621788 129.9375 50.45837615621788C138.20625 50.45837615621788 145.29375 84.82631038026722 153.5625 84.82631038026722C161.83125 84.82631038026722 168.91875 122.3186022610483 177.1875 122.3186022610483C185.45625 122.3186022610483 192.54375 103.57245632065775 200.8125 103.57245632065775C209.08125 103.57245632065775 216.16875 109.82117163412127 224.4375 109.82117163412127C232.70625 109.82117163412127 239.79375 72.32887975334017 248.0625 72.32887975334017C256.33125 72.32887975334017 263.41875 55.144912641315514 271.6875 55.144912641315514C279.95625 55.144912641315514 287.04375 97.32374100719424 295.3125 97.32374100719424C303.58125 97.32374100719424 310.66875 80.13977389516957 318.9375 80.13977389516957C327.20625 80.13977389516957 334.29375 6.717368961973278 342.5625 6.717368961973278C350.83125 6.717368961973278 357.91875 94.19938335046248 366.1875 94.19938335046248C374.45625 94.19938335046248 381.54375 56.70709146968139 389.8125 56.70709146968139C398.08125 56.70709146968139 405.16875 67.64234326824254 413.4375 67.64234326824254C421.70625 67.64234326824254 428.79375 69.20452209660843 437.0625 69.20452209660843C445.33125 69.20452209660843 452.41875 114.5077081192189 460.6875 114.5077081192189C468.95625 114.5077081192189 476.04375 92.6372045220966 484.3125 92.6372045220966C492.58125 92.6372045220966 499.66875 97.32374100719424 507.9375 97.32374100719424C516.20625 97.32374100719424 523.29375 78.5775950668037 531.5625 78.5775950668037C539.83125 78.5775950668037 546.91875 64.51798561151078 555.1875 64.51798561151078C555.1875 64.51798561151078 555.1875 64.51798561151078 555.1875 64.51798561151078 " fill="none" fill-opacity="1" stroke="#3f6ad8" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskufnaw8z9)" pathTo="M 11.8125 109.82117163412127C 20.081249999999997 109.82117163412127 27.168750000000003 67.64234326824254 35.4375 67.64234326824254C 43.70625 67.64234326824254 50.79375 91.07502569373072 59.0625 91.07502569373072C 67.33125 91.07502569373072 74.41875 87.95066803699896 82.6875 87.95066803699896C 90.95625 87.95066803699896 98.04375 81.70195272353546 106.3125 81.70195272353546C 114.58125 81.70195272353546 121.66875 50.45837615621788 129.9375 50.45837615621788C 138.20625 50.45837615621788 145.29375 84.82631038026722 153.5625 84.82631038026722C 161.83125 84.82631038026722 168.91875 122.3186022610483 177.1875 122.3186022610483C 185.45625 122.3186022610483 192.54375 103.57245632065775 200.8125 103.57245632065775C 209.08125 103.57245632065775 216.16875 109.82117163412127 224.4375 109.82117163412127C 232.70625 109.82117163412127 239.79375 72.32887975334017 248.0625 72.32887975334017C 256.33125 72.32887975334017 263.41875 55.144912641315514 271.6875 55.144912641315514C 279.95625 55.144912641315514 287.04375 97.32374100719424 295.3125 97.32374100719424C 303.58125 97.32374100719424 310.66875 80.13977389516957 318.9375 80.13977389516957C 327.20625 80.13977389516957 334.29375 6.717368961973278 342.5625 6.717368961973278C 350.83125 6.717368961973278 357.91875 94.19938335046248 366.1875 94.19938335046248C 374.45625 94.19938335046248 381.54375 56.70709146968139 389.8125 56.70709146968139C 398.08125 56.70709146968139 405.16875 67.64234326824254 413.4375 67.64234326824254C 421.70625 67.64234326824254 428.79375 69.20452209660843 437.0625 69.20452209660843C 445.33125 69.20452209660843 452.41875 114.5077081192189 460.6875 114.5077081192189C 468.95625 114.5077081192189 476.04375 92.6372045220966 484.3125 92.6372045220966C 492.58125 92.6372045220966 499.66875 97.32374100719424 507.9375 97.32374100719424C 516.20625 97.32374100719424 523.29375 78.5775950668037 531.5625 78.5775950668037C 539.83125 78.5775950668037 546.91875 64.51798561151078 555.1875 64.51798561151078" pathFrom="M -1 152L -1 152L 35.4375 152L 59.0625 152L 82.6875 152L 106.3125 152L 129.9375 152L 153.5625 152L 177.1875 152L 200.8125 152L 224.4375 152L 248.0625 152L 271.6875 152L 295.3125 152L 318.9375 152L 342.5625 152L 366.1875 152L 389.8125 152L 413.4375 152L 437.0625 152L 460.6875 152L 484.3125 152L 507.9375 152L 531.5625 152L 555.1875 152"></path><path id="apexcharts-area-0" d="M11.8125 152L11.8125 109.82117163412127C20.081249999999997 109.82117163412127 27.168750000000003 67.64234326824254 35.4375 67.64234326824254C43.70625 67.64234326824254 50.79375 91.07502569373072 59.0625 91.07502569373072C67.33125 91.07502569373072 74.41875 87.95066803699896 82.6875 87.95066803699896C90.95625 87.95066803699896 98.04375 81.70195272353546 106.3125 81.70195272353546C114.58125 81.70195272353546 121.66875 50.45837615621788 129.9375 50.45837615621788C138.20625 50.45837615621788 145.29375 84.82631038026722 153.5625 84.82631038026722C161.83125 84.82631038026722 168.91875 122.3186022610483 177.1875 122.3186022610483C185.45625 122.3186022610483 192.54375 103.57245632065775 200.8125 103.57245632065775C209.08125 103.57245632065775 216.16875 109.82117163412127 224.4375 109.82117163412127C232.70625 109.82117163412127 239.79375 72.32887975334017 248.0625 72.32887975334017C256.33125 72.32887975334017 263.41875 55.144912641315514 271.6875 55.144912641315514C279.95625 55.144912641315514 287.04375 97.32374100719424 295.3125 97.32374100719424C303.58125 97.32374100719424 310.66875 80.13977389516957 318.9375 80.13977389516957C327.20625 80.13977389516957 334.29375 6.717368961973278 342.5625 6.717368961973278C350.83125 6.717368961973278 357.91875 94.19938335046248 366.1875 94.19938335046248C374.45625 94.19938335046248 381.54375 56.70709146968139 389.8125 56.70709146968139C398.08125 56.70709146968139 405.16875 67.64234326824254 413.4375 67.64234326824254C421.70625 67.64234326824254 428.79375 69.20452209660843 437.0625 69.20452209660843C445.33125 69.20452209660843 452.41875 114.5077081192189 460.6875 114.5077081192189C468.95625 114.5077081192189 476.04375 92.6372045220966 484.3125 92.6372045220966C492.58125 92.6372045220966 499.66875 97.32374100719424 507.9375 97.32374100719424C516.20625 97.32374100719424 523.29375 78.5775950668037 531.5625 78.5775950668037C539.83125 78.5775950668037 546.91875 64.51798561151078 555.1875 64.51798561151078C555.1875 64.51798561151078 555.1875 64.51798561151078 555.1875 152M555.1875 64.51798561151078C555.1875 64.51798561151078 555.1875 64.51798561151078 555.1875 64.51798561151078 " fill="url(#SvgjsLinearGradient1019)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskufnaw8z9)" pathTo="M 11.8125 152L 11.8125 109.82117163412127C 20.081249999999997 109.82117163412127 27.168750000000003 67.64234326824254 35.4375 67.64234326824254C 43.70625 67.64234326824254 50.79375 91.07502569373072 59.0625 91.07502569373072C 67.33125 91.07502569373072 74.41875 87.95066803699896 82.6875 87.95066803699896C 90.95625 87.95066803699896 98.04375 81.70195272353546 106.3125 81.70195272353546C 114.58125 81.70195272353546 121.66875 50.45837615621788 129.9375 50.45837615621788C 138.20625 50.45837615621788 145.29375 84.82631038026722 153.5625 84.82631038026722C 161.83125 84.82631038026722 168.91875 122.3186022610483 177.1875 122.3186022610483C 185.45625 122.3186022610483 192.54375 103.57245632065775 200.8125 103.57245632065775C 209.08125 103.57245632065775 216.16875 109.82117163412127 224.4375 109.82117163412127C 232.70625 109.82117163412127 239.79375 72.32887975334017 248.0625 72.32887975334017C 256.33125 72.32887975334017 263.41875 55.144912641315514 271.6875 55.144912641315514C 279.95625 55.144912641315514 287.04375 97.32374100719424 295.3125 97.32374100719424C 303.58125 97.32374100719424 310.66875 80.13977389516957 318.9375 80.13977389516957C 327.20625 80.13977389516957 334.29375 6.717368961973278 342.5625 6.717368961973278C 350.83125 6.717368961973278 357.91875 94.19938335046248 366.1875 94.19938335046248C 374.45625 94.19938335046248 381.54375 56.70709146968139 389.8125 56.70709146968139C 398.08125 56.70709146968139 405.16875 67.64234326824254 413.4375 67.64234326824254C 421.70625 67.64234326824254 428.79375 69.20452209660843 437.0625 69.20452209660843C 445.33125 69.20452209660843 452.41875 114.5077081192189 460.6875 114.5077081192189C 468.95625 114.5077081192189 476.04375 92.6372045220966 484.3125 92.6372045220966C 492.58125 92.6372045220966 499.66875 97.32374100719424 507.9375 97.32374100719424C 516.20625 97.32374100719424 523.29375 78.5775950668037 531.5625 78.5775950668037C 539.83125 78.5775950668037 546.91875 64.51798561151078 555.1875 64.51798561151078C 555.1875 64.51798561151078 555.1875 64.51798561151078 555.1875 152M 555.1875 64.51798561151078z" pathFrom="M -1 152L -1 152L 35.4375 152L 59.0625 152L 82.6875 152L 106.3125 152L 129.9375 152L 153.5625 152L 177.1875 152L 200.8125 152L 224.4375 152L 248.0625 152L 271.6875 152L 295.3125 152L 318.9375 152L 342.5625 152L 366.1875 152L 389.8125 152L 413.4375 152L 437.0625 152L 460.6875 152L 484.3125 152L 507.9375 152L 531.5625 152L 555.1875 152"></path><g id="SvgjsG1016" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1036" r="0" cx="0" cy="0" class="apexcharts-marker wq8ckgd6hl no-pointer-events" stroke="#ffffff" fill="#3f6ad8" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1017" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1031" x1="0" y1="0" x2="567" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1032" x1="0" y1="0" x2="567" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1033" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1034" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1035" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1026" class="apexcharts-yaxis" rel="0" transform="translate(-35, 0)"><g id="SvgjsG1027" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(63, 106, 216);"></span><div class="apexcharts-tooltip-text"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
<div class="resize-triggers"><div class="expand-trigger"><div style="width: 568px; height: 153px;"></div></div><div class="contract-trigger"></div></div></div>
</div>
</div>
</div></div></div><div class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide02" style="width: 567px;"><div><div style="width: 100%; display: inline-block;">
<div class="widget-chart widget-chart2 text-left p-0">
<div class="widget-chat-wrapper-outer">
<div class="widget-chart-content widget-chart-content-lg pb-0">
<div class="widget-chart-flex">
<div class="widget-title opacity-5 text-muted text-uppercase"> Helpdesk Tickets</div>
</div>
<div class="widget-numbers">
<div class="widget-chart-flex">
<div>
<span class="text-warning">34</span>
</div>
<div class="widget-title ml-2 font-size-lg font-weight-normal text-dark">
<span class="opacity-5 text-muted pl-2 pr-1">5%</span>
increase
</div>
</div>
</div>
</div>
<div class="widget-chart-wrapper he-auto opacity-10 m-0">
<div id="dashboard-sparkline-2" style="min-height: 152px;"><div id="apexcharts0epa0njc" class="apexcharts-canvas apexcharts0epa0njc" style="width: 567px; height: 152px;"><svg id="SvgjsSvg1037" width="567" height="152" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1039" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1038"><clipPath id="gridRectMask0epa0njc"><rect id="SvgjsRect1042" width="572" height="157" x="-2.5" y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask0epa0njc"><rect id="SvgjsRect1043" width="581" height="166" x="-7" y="-7" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1050" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1051" stop-opacity="0.7" stop-color="rgba(247,185,36,0.7)" offset="0"></stop><stop id="SvgjsStop1052" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="0.9"></stop><stop id="SvgjsStop1053" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="1"></stop></linearGradient></defs><rect id="SvgjsRect1041" width="1" height="152" x="0" y="0" rx="0" ry="0" fill="#b1b9c4" opacity="1" stroke-width="0" stroke-dasharray="0" class="apexcharts-xcrosshairs" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1055" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1056" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1059" class="apexcharts-grid"><line id="SvgjsLine1061" x1="0" y1="152" x2="567" y2="152" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1060" x1="0" y1="1" x2="0" y2="152" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1045" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1046" class="apexcharts-series series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="apexcharts-area-0" d="M11.8125 78.5775950668037C20.081249999999997 78.5775950668037 27.168750000000003 50.45837615621788 35.4375 50.45837615621788C43.70625 50.45837615621788 50.79375 64.51798561151078 59.0625 64.51798561151078C67.33125 64.51798561151078 74.41875 103.57245632065775 82.6875 103.57245632065775C90.95625 103.57245632065775 98.04375 97.32374100719424 106.3125 97.32374100719424C114.58125 97.32374100719424 121.66875 81.70195272353546 129.9375 81.70195272353546C138.20625 81.70195272353546 145.29375 69.20452209660843 153.5625 69.20452209660843C161.83125 69.20452209660843 168.91875 67.64234326824254 177.1875 67.64234326824254C185.45625 67.64234326824254 192.54375 114.5077081192189 200.8125 114.5077081192189C209.08125 114.5077081192189 216.16875 109.82117163412127 224.4375 109.82117163412127C232.70625 109.82117163412127 239.79375 84.82631038026722 248.0625 84.82631038026722C256.33125 84.82631038026722 263.41875 87.95066803699896 271.6875 87.95066803699896C279.95625 87.95066803699896 287.04375 94.19938335046248 295.3125 94.19938335046248C303.58125 94.19938335046248 310.66875 67.64234326824254 318.9375 67.64234326824254C327.20625 67.64234326824254 334.29375 55.144912641315514 342.5625 55.144912641315514C350.83125 55.144912641315514 357.91875 6.717368961973278 366.1875 6.717368961973278C374.45625 6.717368961973278 381.54375 109.82117163412127 389.8125 109.82117163412127C398.08125 109.82117163412127 405.16875 56.70709146968139 413.4375 56.70709146968139C421.70625 56.70709146968139 428.79375 80.13977389516957 437.0625 80.13977389516957C445.33125 80.13977389516957 452.41875 91.07502569373072 460.6875 91.07502569373072C468.95625 91.07502569373072 476.04375 92.6372045220966 484.3125 92.6372045220966C492.58125 92.6372045220966 499.66875 122.3186022610483 507.9375 122.3186022610483C516.20625 122.3186022610483 523.29375 72.32887975334017 531.5625 72.32887975334017C539.83125 72.32887975334017 546.91875 97.32374100719424 555.1875 97.32374100719424C555.1875 97.32374100719424 555.1875 97.32374100719424 555.1875 97.32374100719424 " fill="none" fill-opacity="1" stroke="#f7b924" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask0epa0njc)" pathTo="M 11.8125 78.5775950668037C 20.081249999999997 78.5775950668037 27.168750000000003 50.45837615621788 35.4375 50.45837615621788C 43.70625 50.45837615621788 50.79375 64.51798561151078 59.0625 64.51798561151078C 67.33125 64.51798561151078 74.41875 103.57245632065775 82.6875 103.57245632065775C 90.95625 103.57245632065775 98.04375 97.32374100719424 106.3125 97.32374100719424C 114.58125 97.32374100719424 121.66875 81.70195272353546 129.9375 81.70195272353546C 138.20625 81.70195272353546 145.29375 69.20452209660843 153.5625 69.20452209660843C 161.83125 69.20452209660843 168.91875 67.64234326824254 177.1875 67.64234326824254C 185.45625 67.64234326824254 192.54375 114.5077081192189 200.8125 114.5077081192189C 209.08125 114.5077081192189 216.16875 109.82117163412127 224.4375 109.82117163412127C 232.70625 109.82117163412127 239.79375 84.82631038026722 248.0625 84.82631038026722C 256.33125 84.82631038026722 263.41875 87.95066803699896 271.6875 87.95066803699896C 279.95625 87.95066803699896 287.04375 94.19938335046248 295.3125 94.19938335046248C 303.58125 94.19938335046248 310.66875 67.64234326824254 318.9375 67.64234326824254C 327.20625 67.64234326824254 334.29375 55.144912641315514 342.5625 55.144912641315514C 350.83125 55.144912641315514 357.91875 6.717368961973278 366.1875 6.717368961973278C 374.45625 6.717368961973278 381.54375 109.82117163412127 389.8125 109.82117163412127C 398.08125 109.82117163412127 405.16875 56.70709146968139 413.4375 56.70709146968139C 421.70625 56.70709146968139 428.79375 80.13977389516957 437.0625 80.13977389516957C 445.33125 80.13977389516957 452.41875 91.07502569373072 460.6875 91.07502569373072C 468.95625 91.07502569373072 476.04375 92.6372045220966 484.3125 92.6372045220966C 492.58125 92.6372045220966 499.66875 122.3186022610483 507.9375 122.3186022610483C 516.20625 122.3186022610483 523.29375 72.32887975334017 531.5625 72.32887975334017C 539.83125 72.32887975334017 546.91875 97.32374100719424 555.1875 97.32374100719424" pathFrom="M -1 152L -1 152L 35.4375 152L 59.0625 152L 82.6875 152L 106.3125 152L 129.9375 152L 153.5625 152L 177.1875 152L 200.8125 152L 224.4375 152L 248.0625 152L 271.6875 152L 295.3125 152L 318.9375 152L 342.5625 152L 366.1875 152L 389.8125 152L 413.4375 152L 437.0625 152L 460.6875 152L 484.3125 152L 507.9375 152L 531.5625 152L 555.1875 152"></path><path id="apexcharts-area-0" d="M11.8125 152L11.8125 78.5775950668037C20.081249999999997 78.5775950668037 27.168750000000003 50.45837615621788 35.4375 50.45837615621788C43.70625 50.45837615621788 50.79375 64.51798561151078 59.0625 64.51798561151078C67.33125 64.51798561151078 74.41875 103.57245632065775 82.6875 103.57245632065775C90.95625 103.57245632065775 98.04375 97.32374100719424 106.3125 97.32374100719424C114.58125 97.32374100719424 121.66875 81.70195272353546 129.9375 81.70195272353546C138.20625 81.70195272353546 145.29375 69.20452209660843 153.5625 69.20452209660843C161.83125 69.20452209660843 168.91875 67.64234326824254 177.1875 67.64234326824254C185.45625 67.64234326824254 192.54375 114.5077081192189 200.8125 114.5077081192189C209.08125 114.5077081192189 216.16875 109.82117163412127 224.4375 109.82117163412127C232.70625 109.82117163412127 239.79375 84.82631038026722 248.0625 84.82631038026722C256.33125 84.82631038026722 263.41875 87.95066803699896 271.6875 87.95066803699896C279.95625 87.95066803699896 287.04375 94.19938335046248 295.3125 94.19938335046248C303.58125 94.19938335046248 310.66875 67.64234326824254 318.9375 67.64234326824254C327.20625 67.64234326824254 334.29375 55.144912641315514 342.5625 55.144912641315514C350.83125 55.144912641315514 357.91875 6.717368961973278 366.1875 6.717368961973278C374.45625 6.717368961973278 381.54375 109.82117163412127 389.8125 109.82117163412127C398.08125 109.82117163412127 405.16875 56.70709146968139 413.4375 56.70709146968139C421.70625 56.70709146968139 428.79375 80.13977389516957 437.0625 80.13977389516957C445.33125 80.13977389516957 452.41875 91.07502569373072 460.6875 91.07502569373072C468.95625 91.07502569373072 476.04375 92.6372045220966 484.3125 92.6372045220966C492.58125 92.6372045220966 499.66875 122.3186022610483 507.9375 122.3186022610483C516.20625 122.3186022610483 523.29375 72.32887975334017 531.5625 72.32887975334017C539.83125 72.32887975334017 546.91875 97.32374100719424 555.1875 97.32374100719424C555.1875 97.32374100719424 555.1875 97.32374100719424 555.1875 152M555.1875 97.32374100719424C555.1875 97.32374100719424 555.1875 97.32374100719424 555.1875 97.32374100719424 " fill="url(#SvgjsLinearGradient1050)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask0epa0njc)" pathTo="M 11.8125 152L 11.8125 78.5775950668037C 20.081249999999997 78.5775950668037 27.168750000000003 50.45837615621788 35.4375 50.45837615621788C 43.70625 50.45837615621788 50.79375 64.51798561151078 59.0625 64.51798561151078C 67.33125 64.51798561151078 74.41875 103.57245632065775 82.6875 103.57245632065775C 90.95625 103.57245632065775 98.04375 97.32374100719424 106.3125 97.32374100719424C 114.58125 97.32374100719424 121.66875 81.70195272353546 129.9375 81.70195272353546C 138.20625 81.70195272353546 145.29375 69.20452209660843 153.5625 69.20452209660843C 161.83125 69.20452209660843 168.91875 67.64234326824254 177.1875 67.64234326824254C 185.45625 67.64234326824254 192.54375 114.5077081192189 200.8125 114.5077081192189C 209.08125 114.5077081192189 216.16875 109.82117163412127 224.4375 109.82117163412127C 232.70625 109.82117163412127 239.79375 84.82631038026722 248.0625 84.82631038026722C 256.33125 84.82631038026722 263.41875 87.95066803699896 271.6875 87.95066803699896C 279.95625 87.95066803699896 287.04375 94.19938335046248 295.3125 94.19938335046248C 303.58125 94.19938335046248 310.66875 67.64234326824254 318.9375 67.64234326824254C 327.20625 67.64234326824254 334.29375 55.144912641315514 342.5625 55.144912641315514C 350.83125 55.144912641315514 357.91875 6.717368961973278 366.1875 6.717368961973278C 374.45625 6.717368961973278 381.54375 109.82117163412127 389.8125 109.82117163412127C 398.08125 109.82117163412127 405.16875 56.70709146968139 413.4375 56.70709146968139C 421.70625 56.70709146968139 428.79375 80.13977389516957 437.0625 80.13977389516957C 445.33125 80.13977389516957 452.41875 91.07502569373072 460.6875 91.07502569373072C 468.95625 91.07502569373072 476.04375 92.6372045220966 484.3125 92.6372045220966C 492.58125 92.6372045220966 499.66875 122.3186022610483 507.9375 122.3186022610483C 516.20625 122.3186022610483 523.29375 72.32887975334017 531.5625 72.32887975334017C 539.83125 72.32887975334017 546.91875 97.32374100719424 555.1875 97.32374100719424C 555.1875 97.32374100719424 555.1875 97.32374100719424 555.1875 152M 555.1875 97.32374100719424z" pathFrom="M -1 152L -1 152L 35.4375 152L 59.0625 152L 82.6875 152L 106.3125 152L 129.9375 152L 153.5625 152L 177.1875 152L 200.8125 152L 224.4375 152L 248.0625 152L 271.6875 152L 295.3125 152L 318.9375 152L 342.5625 152L 366.1875 152L 389.8125 152L 413.4375 152L 437.0625 152L 460.6875 152L 484.3125 152L 507.9375 152L 531.5625 152L 555.1875 152"></path><g id="SvgjsG1047" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1067" r="0" cx="0" cy="0" class="apexcharts-marker wyvnxskrl no-pointer-events" stroke="#ffffff" fill="#f7b924" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1048" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1062" x1="0" y1="0" x2="567" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1063" x1="0" y1="0" x2="567" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1064" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1065" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1066" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1057" class="apexcharts-yaxis" rel="0" transform="translate(-35, 0)"><g id="SvgjsG1058" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(247, 185, 36);"></span><div class="apexcharts-tooltip-text"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
<div class="resize-triggers"><div class="expand-trigger"><div style="width: 568px; height: 153px;"></div></div><div class="contract-trigger"></div></div></div>
</div>
</div>
</div></div></div><div class="slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" tabindex="-1" style="width: 567px;"><div><div style="width: 100%; display: inline-block;">
<div class="widget-chart widget-chart2 text-left p-0">
<div class="widget-chat-wrapper-outer">
<div class="widget-chart-content widget-chart-content-lg pb-0">
<div class="widget-chart-flex">
<div class="widget-title opacity-5 text-muted text-uppercase"> New Accounts since 2018</div>
</div>
<div class="widget-numbers">
<div class="widget-chart-flex">
<div>
<span class="opacity-10 text-success pr-2">
<i class="fa fa-angle-up"></i>
</span>
<span>78</span>
<small class="opacity-5 pl-1">%</small>
</div>
<div class="widget-title ml-2 font-size-lg font-weight-normal text-muted">
<span class="text-success pl-2">+14</span>
</div>
</div>
</div>
</div>
<div class="widget-chart-wrapper he-auto opacity-10 m-0">
<div id="" style="min-height: 152px;"><div id="" class="apexcharts-canvas apexcharts4nn09g6g" style="width: 567px; height: 152px;"><svg id="" width="567" height="152" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id=""><clipPath id=""><rect id="" width="572" height="157" x="-2.5" y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id=""><rect id="" width="581" height="166" x="-7" y="-7" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="" x1="0" y1="0" x2="0" y2="1"><stop id="" stop-opacity="0.7" stop-color="rgba(58,196,125,0.7)" offset="0"></stop><stop id="" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="0.9"></stop><stop id="" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="1"></stop></linearGradient></defs><rect id="" width="1" height="152" x="0" y="0" rx="0" ry="0" fill="#b1b9c4" opacity="1" stroke-width="0" stroke-dasharray="0" class="apexcharts-xcrosshairs" filter="none" fill-opacity="0.9"></rect><g id="" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="" class="apexcharts-grid"><line id="" x1="0" y1="152" x2="567" y2="152" stroke="transparent" stroke-dasharray="0"></line><line id="" x1="0" y1="1" x2="0" y2="152" stroke="transparent" stroke-dasharray="0"></line></g><g id="" class="apexcharts-area-series apexcharts-plot-series"><g id="" class="apexcharts-series series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="" d="M7.241797915912459 120.84838801411415C12.560772863596448 120.84838801411415 17.119894247325586 106.77991808500441 22.438869195009577 106.77991808500441C27.757844142693568 106.77991808500441 45.31559633141313 114.8190437587814 50.634571279097116 114.8190437587814C55.95354622678111 114.8190437587814 68.94059633141313 104.77013666656016 74.25957127909712 104.77013666656016C79.5785462267811 104.77013666656016 92.56559633141313 124.86795085100265 97.88457127909712 124.86795085100265C103.2035462267811 124.86795085100265 116.19059633141313 108.78969950344866 121.50957127909712 108.78969950344866C126.82854622678111 108.78969950344866 139.81559633141313 97.7359017020053 145.13457127909712 97.7359017020053C150.45354622678113 97.7359017020053 163.44059633141313 116.82882517722565 168.75957127909712 116.82882517722565C174.07854622678113 116.82882517722565 187.06559633141313 97.7359017020053 192.38457127909712 97.7359017020053C197.70354622678113 97.7359017020053 210.69059633141313 90.70166673745041 216.00957127909712 90.70166673745041C221.32854622678113 90.70166673745041 234.31559633141313 110.7994809218929 239.63457127909712 110.7994809218929C244.95354622678113 110.7994809218929 257.94059633141313 86.68210390056193 263.25957127909714 86.68210390056193C268.5785462267811 86.68210390056193 281.56559633141313 112.80926234033716 286.88457127909714 112.80926234033716C292.2035462267811 112.80926234033716 305.19059633141313 124.86795085100265 310.50957127909714 124.86795085100265C315.8285462267811 124.86795085100265 328.81559633141313 58.54516404234245 334.13457127909714 58.54516404234245C339.4535462267811 58.54516404234245 352.44059633141313 89.6967760282283 357.75957127909714 89.6967760282283C363.0785462267811 89.6967760282283 376.06559633141313 95.72612028356104 381.38457127909714 95.72612028356104C386.7035462267811 95.72612028356104 399.69059633141313 113.81415304955928 405.00957127909714 113.81415304955928C410.3285462267811 113.81415304955928 423.31559633141313 100.75057382967165 428.63457127909714 100.75057382967165C433.9535462267811 100.75057382967165 446.94059633141313 132.90707652477963 452.25957127909714 132.90707652477963C457.5785462267811 132.90707652477963 470.56559633141313 116.82882517722565 475.88457127909714 116.82882517722565C481.2035462267811 116.82882517722565 494.19059633141313 105.77502737578229 499.50957127909714 105.77502737578229C504.8285462267811 105.77502737578229 517.8155963314132 127.88262297866902 523.1345712790971 127.88262297866902C528.4535462267811 127.88262297866902 541.4405963314132 98.74079241122742 546.7595712790971 98.74079241122742C546.7595712790971 98.74079241122742 555.1875 98.74079241122742 555.1875 98.74079241122742 " fill="none" fill-opacity="1" stroke="#3ac47d" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask4nn09g6g)" pathTo="M 11.8125 103.57245632065775C 20.081249999999997 103.57245632065775 27.168750000000003 81.70195272353546 35.4375 81.70195272353546C 43.70625 81.70195272353546 50.79375 94.19938335046248 59.0625 94.19938335046248C 67.33125 94.19938335046248 74.41875 78.5775950668037 82.6875 78.5775950668037C 90.95625 78.5775950668037 98.04375 109.82117163412127 106.3125 109.82117163412127C 114.58125 109.82117163412127 121.66875 84.82631038026722 129.9375 84.82631038026722C 138.20625 84.82631038026722 145.29375 67.64234326824254 153.5625 67.64234326824254C 161.83125 67.64234326824254 168.91875 97.32374100719424 177.1875 97.32374100719424C 185.45625 97.32374100719424 192.54375 67.64234326824254 200.8125 67.64234326824254C 209.08125 67.64234326824254 216.16875 56.70709146968139 224.4375 56.70709146968139C 232.70625 56.70709146968139 239.79375 87.95066803699896 248.0625 87.95066803699896C 256.33125 87.95066803699896 263.41875 50.45837615621788 271.6875 50.45837615621788C 279.95625 50.45837615621788 287.04375 91.07502569373072 295.3125 91.07502569373072C 303.58125 91.07502569373072 310.66875 109.82117163412127 318.9375 109.82117163412127C 327.20625 109.82117163412127 334.29375 6.717368961973278 342.5625 6.717368961973278C 350.83125 6.717368961973278 357.91875 55.144912641315514 366.1875 55.144912641315514C 374.45625 55.144912641315514 381.54375 64.51798561151078 389.8125 64.51798561151078C 398.08125 64.51798561151078 405.16875 92.6372045220966 413.4375 92.6372045220966C 421.70625 92.6372045220966 428.79375 72.32887975334017 437.0625 72.32887975334017C 445.33125 72.32887975334017 452.41875 122.3186022610483 460.6875 122.3186022610483C 468.95625 122.3186022610483 476.04375 97.32374100719424 484.3125 97.32374100719424C 492.58125 97.32374100719424 499.66875 80.13977389516957 507.9375 80.13977389516957C 516.20625 80.13977389516957 523.29375 114.5077081192189 531.5625 114.5077081192189C 539.83125 114.5077081192189 546.91875 69.20452209660843 555.1875 69.20452209660843" pathFrom="M -1 152L -1 152L 35.4375 152L 59.0625 152L 82.6875 152L 106.3125 152L 129.9375 152L 153.5625 152L 177.1875 152L 200.8125 152L 224.4375 152L 248.0625 152L 271.6875 152L 295.3125 152L 318.9375 152L 342.5625 152L 366.1875 152L 389.8125 152L 413.4375 152L 437.0625 152L 460.6875 152L 484.3125 152L 507.9375 152L 531.5625 152L 555.1875 152"></path><path id="" d="M7.241797915912459 152L7.241797915912459 120.84838801411415C12.560772863596448 120.84838801411415 30.11852505231601 106.77991808500441 35.4375 106.77991808500441C40.75647494768399 106.77991808500441 53.74352505231601 114.8190437587814 59.0625 114.8190437587814C64.38147494768398 114.8190437587814 77.36852505231602 104.77013666656016 82.6875 104.77013666656016C88.00647494768398 104.77013666656016 100.99352505231602 124.86795085100265 106.3125 124.86795085100265C111.63147494768398 124.86795085100265 124.61852505231602 108.78969950344866 129.9375 108.78969950344866C135.256474947684 108.78969950344866 148.243525052316 97.7359017020053 153.5625 97.7359017020053C158.881474947684 97.7359017020053 171.868525052316 116.82882517722565 177.1875 116.82882517722565C182.506474947684 116.82882517722565 195.493525052316 97.7359017020053 200.8125 97.7359017020053C206.131474947684 97.7359017020053 219.118525052316 90.70166673745041 224.4375 90.70166673745041C229.756474947684 90.70166673745041 242.743525052316 110.7994809218929 248.0625 110.7994809218929C253.381474947684 110.7994809218929 266.368525052316 86.68210390056193 271.6875 86.68210390056193C277.006474947684 86.68210390056193 289.993525052316 112.80926234033716 295.3125 112.80926234033716C300.631474947684 112.80926234033716 313.618525052316 124.86795085100265 318.9375 124.86795085100265C324.256474947684 124.86795085100265 337.243525052316 58.54516404234245 342.5625 58.54516404234245C347.881474947684 58.54516404234245 360.868525052316 89.6967760282283 366.1875 89.6967760282283C371.506474947684 89.6967760282283 384.493525052316 95.72612028356104 389.8125 95.72612028356104C395.131474947684 95.72612028356104 408.118525052316 113.81415304955928 413.4375 113.81415304955928C418.756474947684 113.81415304955928 431.743525052316 100.75057382967165 437.0625 100.75057382967165C442.381474947684 100.75057382967165 455.368525052316 132.90707652477963 460.6875 132.90707652477963C466.006474947684 132.90707652477963 478.993525052316 116.82882517722565 484.3125 116.82882517722565C489.631474947684 116.82882517722565 502.618525052316 105.77502737578229 507.9375 105.77502737578229C513.256474947684 105.77502737578229 526.243525052316 127.88262297866902 531.5625 127.88262297866902C536.881474947684 127.88262297866902 549.868525052316 98.74079241122742 555.1875 98.74079241122742C555.1875 98.74079241122742 555.1875 98.74079241122742 555.1875 152M356.7744373351462 98.74079241122742C356.7744373351462 98.74079241122742 356.7744373351462 98.74079241122742 356.7744373351462 98.74079241122742 " fill="url(#SvgjsLinearGradient1081)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask4nn09g6g)" pathTo="M 11.8125 152L 11.8125 103.57245632065775C 20.081249999999997 103.57245632065775 27.168750000000003 81.70195272353546 35.4375 81.70195272353546C 43.70625 81.70195272353546 50.79375 94.19938335046248 59.0625 94.19938335046248C 67.33125 94.19938335046248 74.41875 78.5775950668037 82.6875 78.5775950668037C 90.95625 78.5775950668037 98.04375 109.82117163412127 106.3125 109.82117163412127C 114.58125 109.82117163412127 121.66875 84.82631038026722 129.9375 84.82631038026722C 138.20625 84.82631038026722 145.29375 67.64234326824254 153.5625 67.64234326824254C 161.83125 67.64234326824254 168.91875 97.32374100719424 177.1875 97.32374100719424C 185.45625 97.32374100719424 192.54375 67.64234326824254 200.8125 67.64234326824254C 209.08125 67.64234326824254 216.16875 56.70709146968139 224.4375 56.70709146968139C 232.70625 56.70709146968139 239.79375 87.95066803699896 248.0625 87.95066803699896C 256.33125 87.95066803699896 263.41875 50.45837615621788 271.6875 50.45837615621788C 279.95625 50.45837615621788 287.04375 91.07502569373072 295.3125 91.07502569373072C 303.58125 91.07502569373072 310.66875 109.82117163412127 318.9375 109.82117163412127C 327.20625 109.82117163412127 334.29375 6.717368961973278 342.5625 6.717368961973278C 350.83125 6.717368961973278 357.91875 55.144912641315514 366.1875 55.144912641315514C 374.45625 55.144912641315514 381.54375 64.51798561151078 389.8125 64.51798561151078C 398.08125 64.51798561151078 405.16875 92.6372045220966 413.4375 92.6372045220966C 421.70625 92.6372045220966 428.79375 72.32887975334017 437.0625 72.32887975334017C 445.33125 72.32887975334017 452.41875 122.3186022610483 460.6875 122.3186022610483C 468.95625 122.3186022610483 476.04375 97.32374100719424 484.3125 97.32374100719424C 492.58125 97.32374100719424 499.66875 80.13977389516957 507.9375 80.13977389516957C 516.20625 80.13977389516957 523.29375 114.5077081192189 531.5625 114.5077081192189C 539.83125 114.5077081192189 546.91875 69.20452209660843 555.1875 69.20452209660843C 555.1875 69.20452209660843 555.1875 69.20452209660843 555.1875 152M 555.1875 69.20452209660843z" pathFrom="M -1 152L -1 152L 35.4375 152L 59.0625 152L 82.6875 152L 106.3125 152L 129.9375 152L 153.5625 152L 177.1875 152L 200.8125 152L 224.4375 152L 248.0625 152L 271.6875 152L 295.3125 152L 318.9375 152L 342.5625 152L 366.1875 152L 389.8125 152L 413.4375 152L 437.0625 152L 460.6875 152L 484.3125 152L 507.9375 152L 531.5625 152L 555.1875 152"></path><g id="" class="apexcharts-series-markers-wrap hidden"><g class="apexcharts-series-markers"><circle id="" r="0" cx="0" cy="0" class="apexcharts-marker ws4aodg1x no-pointer-events" stroke="#ffffff" fill="#3ac47d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="" class="apexcharts-datalabels"></g></g></g><line id="" x1="0" y1="0" x2="567" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="" x1="0" y1="0" x2="567" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="" class="apexcharts-yaxis-annotations hidden"></g><g id="" class="apexcharts-xaxis-annotations hidden"></g><g id="" class="apexcharts-point-annotations hidden"></g></g><g id="" class="apexcharts-yaxis" rel="0" transform="translate(-35, 0)"><g id="" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(58, 196, 125);"></span><div class="apexcharts-tooltip-text"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
<div class="resize-triggers"><div class="expand-trigger"><div style="width: 568px; height: 153px;"></div></div><div class="contract-trigger"></div></div></div>
</div>
</div>
</div></div></div><div class="slick-slide slick-cloned" data-slick-index="4" id="" aria-hidden="true" tabindex="-1" style="width: 567px;"><div><div style="width: 100%; display: inline-block;">
<div class="widget-chart widget-chart2 text-left p-0">
<div class="widget-chat-wrapper-outer">
<div class="widget-chart-content widget-chart-content-lg pb-0">
<div class="widget-chart-flex">
<div class="widget-title opacity-5 text-muted text-uppercase"> Last Year Total Sales</div>
</div>
<div class="widget-numbers">
<div class="widget-chart-flex">
<div>
<small class="opacity-3 pr-1">$</small>
<span>629</span>
<span class="text-primary pl-3">
<i class="fa fa-angle-down"></i>
</span>
</div>
</div>
</div>
</div>
<div class="widget-chart-wrapper he-auto opacity-10 m-0">
<div id="" style="min-height: 152px;"><div id="" class="apexcharts-canvas apexchartsufnaw8z9" style="width: 567px; height: 152px;"><svg id="" width="567" height="152" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id=""><clipPath id=""><rect id="" width="572" height="157" x="-2.5" y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id=""><rect id="" width="581" height="166" x="-7" y="-7" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="" x1="0" y1="0" x2="0" y2="1"><stop id="" stop-opacity="0.7" stop-color="rgba(63,106,216,0.7)" offset="0"></stop><stop id="" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="0.9"></stop><stop id="" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="1"></stop></linearGradient></defs><rect id="" width="1" height="152" x="0" y="0" rx="0" ry="0" fill="#b1b9c4" opacity="1" stroke-width="0" stroke-dasharray="0" class="apexcharts-xcrosshairs" filter="none" fill-opacity="0.9"></rect><g id="" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="" class="apexcharts-grid"><line id="" x1="0" y1="152" x2="567" y2="152" stroke="transparent" stroke-dasharray="0"></line><line id="" x1="0" y1="1" x2="0" y2="152" stroke="transparent" stroke-dasharray="0"></line></g><g id="" class="apexcharts-area-series apexcharts-plot-series"><g id="" class="apexcharts-series series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="" d="M11.8125 109.82117163412127C20.081249999999997 109.82117163412127 27.168750000000003 67.64234326824254 35.4375 67.64234326824254C43.70625 67.64234326824254 50.79375 91.07502569373072 59.0625 91.07502569373072C67.33125 91.07502569373072 74.41875 87.95066803699896 82.6875 87.95066803699896C90.95625 87.95066803699896 98.04375 81.70195272353546 106.3125 81.70195272353546C114.58125 81.70195272353546 121.66875 50.45837615621788 129.9375 50.45837615621788C138.20625 50.45837615621788 145.29375 84.82631038026722 153.5625 84.82631038026722C161.83125 84.82631038026722 168.91875 122.3186022610483 177.1875 122.3186022610483C185.45625 122.3186022610483 192.54375 103.57245632065775 200.8125 103.57245632065775C209.08125 103.57245632065775 216.16875 109.82117163412127 224.4375 109.82117163412127C232.70625 109.82117163412127 239.79375 72.32887975334017 248.0625 72.32887975334017C256.33125 72.32887975334017 263.41875 55.144912641315514 271.6875 55.144912641315514C279.95625 55.144912641315514 287.04375 97.32374100719424 295.3125 97.32374100719424C303.58125 97.32374100719424 310.66875 80.13977389516957 318.9375 80.13977389516957C327.20625 80.13977389516957 334.29375 6.717368961973278 342.5625 6.717368961973278C350.83125 6.717368961973278 357.91875 94.19938335046248 366.1875 94.19938335046248C374.45625 94.19938335046248 381.54375 56.70709146968139 389.8125 56.70709146968139C398.08125 56.70709146968139 405.16875 67.64234326824254 413.4375 67.64234326824254C421.70625 67.64234326824254 428.79375 69.20452209660843 437.0625 69.20452209660843C445.33125 69.20452209660843 452.41875 114.5077081192189 460.6875 114.5077081192189C468.95625 114.5077081192189 476.04375 92.6372045220966 484.3125 92.6372045220966C492.58125 92.6372045220966 499.66875 97.32374100719424 507.9375 97.32374100719424C516.20625 97.32374100719424 523.29375 78.5775950668037 531.5625 78.5775950668037C539.83125 78.5775950668037 546.91875 64.51798561151078 555.1875 64.51798561151078C555.1875 64.51798561151078 555.1875 64.51798561151078 555.1875 64.51798561151078 " fill="none" fill-opacity="1" stroke="#3f6ad8" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskufnaw8z9)" pathTo="M 11.8125 109.82117163412127C 20.081249999999997 109.82117163412127 27.168750000000003 67.64234326824254 35.4375 67.64234326824254C 43.70625 67.64234326824254 50.79375 91.07502569373072 59.0625 91.07502569373072C 67.33125 91.07502569373072 74.41875 87.95066803699896 82.6875 87.95066803699896C 90.95625 87.95066803699896 98.04375 81.70195272353546 106.3125 81.70195272353546C 114.58125 81.70195272353546 121.66875 50.45837615621788 129.9375 50.45837615621788C 138.20625 50.45837615621788 145.29375 84.82631038026722 153.5625 84.82631038026722C 161.83125 84.82631038026722 168.91875 122.3186022610483 177.1875 122.3186022610483C 185.45625 122.3186022610483 192.54375 103.57245632065775 200.8125 103.57245632065775C 209.08125 103.57245632065775 216.16875 109.82117163412127 224.4375 109.82117163412127C 232.70625 109.82117163412127 239.79375 72.32887975334017 248.0625 72.32887975334017C 256.33125 72.32887975334017 263.41875 55.144912641315514 271.6875 55.144912641315514C 279.95625 55.144912641315514 287.04375 97.32374100719424 295.3125 97.32374100719424C 303.58125 97.32374100719424 310.66875 80.13977389516957 318.9375 80.13977389516957C 327.20625 80.13977389516957 334.29375 6.717368961973278 342.5625 6.717368961973278C 350.83125 6.717368961973278 357.91875 94.19938335046248 366.1875 94.19938335046248C 374.45625 94.19938335046248 381.54375 56.70709146968139 389.8125 56.70709146968139C 398.08125 56.70709146968139 405.16875 67.64234326824254 413.4375 67.64234326824254C 421.70625 67.64234326824254 428.79375 69.20452209660843 437.0625 69.20452209660843C 445.33125 69.20452209660843 452.41875 114.5077081192189 460.6875 114.5077081192189C 468.95625 114.5077081192189 476.04375 92.6372045220966 484.3125 92.6372045220966C 492.58125 92.6372045220966 499.66875 97.32374100719424 507.9375 97.32374100719424C 516.20625 97.32374100719424 523.29375 78.5775950668037 531.5625 78.5775950668037C 539.83125 78.5775950668037 546.91875 64.51798561151078 555.1875 64.51798561151078" pathFrom="M -1 152L -1 152L 35.4375 152L 59.0625 152L 82.6875 152L 106.3125 152L 129.9375 152L 153.5625 152L 177.1875 152L 200.8125 152L 224.4375 152L 248.0625 152L 271.6875 152L 295.3125 152L 318.9375 152L 342.5625 152L 366.1875 152L 389.8125 152L 413.4375 152L 437.0625 152L 460.6875 152L 484.3125 152L 507.9375 152L 531.5625 152L 555.1875 152"></path><path id="" d="M7.265886213661398 152L7.265886213661398 124.78865202748041C12.600406926185313 124.78865202748041 30.102979287476085 97.57730405496082 35.4375 97.57730405496082C40.77202071252391 97.57730405496082 53.72797928747609 112.69471959524947 59.0625 112.69471959524947C64.39702071252391 112.69471959524947 77.35297928747609 110.67906418987765 82.6875 110.67906418987765C88.02202071252391 110.67906418987765 100.97797928747609 106.64775337913402 106.3125 106.64775337913402C111.64702071252391 106.64775337913402 124.60297928747609 86.4911993254158 129.9375 86.4911993254158C135.27202071252393 86.4911993254158 148.22797928747607 108.66340878450583 153.5625 108.66340878450583C158.89702071252393 108.66340878450583 171.85297928747607 132.8512736489677 177.1875 132.8512736489677C182.52202071252393 132.8512736489677 195.47797928747607 120.75734121673676 200.8125 120.75734121673676C206.14702071252393 120.75734121673676 219.10297928747607 124.78865202748041 224.4375 124.78865202748041C229.77202071252393 124.78865202748041 242.72797928747607 100.60078716301854 248.0625 100.60078716301854C253.39702071252393 100.60078716301854 266.3529792874761 89.51468243347352 271.6875 89.51468243347352C277.0220207125239 89.51468243347352 289.9779792874761 116.72603040599313 295.3125 116.72603040599313C300.6470207125239 116.72603040599313 313.6029792874761 105.6399256764481 318.9375 105.6399256764481C324.2720207125239 105.6399256764481 337.2279792874761 58.2720236502103 342.5625 58.2720236502103C347.8970207125239 58.2720236502103 360.8529792874761 114.7103750006213 366.1875 114.7103750006213C371.5220207125239 114.7103750006213 384.4779792874761 90.52251013615944 389.8125 90.52251013615944C395.1470207125239 90.52251013615944 408.1029792874761 97.57730405496082 413.4375 97.57730405496082C418.7720207125239 97.57730405496082 431.7279792874761 98.58513175764674 437.0625 98.58513175764674C442.3970207125239 98.58513175764674 455.3529792874761 127.81213513553814 460.6875 127.81213513553814C466.0220207125239 127.81213513553814 478.9779792874761 113.70254729793538 484.3125 113.70254729793538C489.6470207125239 113.70254729793538 502.6029792874761 116.72603040599313 507.9375 116.72603040599313C513.2720207125238 116.72603040599313 526.2279792874762 104.6320979737622 531.5625 104.6320979737622C536.8970207125238 104.6320979737622 549.8529792874762 95.56164864958899 555.1875 95.56164864958899C555.1875 95.56164864958899 555.1875 95.56164864958899 555.1875 152M357.82010446523304 95.56164864958899C357.82010446523304 95.56164864958899 357.82010446523304 95.56164864958899 357.82010446523304 95.56164864958899 " fill="url(#SvgjsLinearGradient1019)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskufnaw8z9)" pathTo="M 11.8125 152L 11.8125 109.82117163412127C 20.081249999999997 109.82117163412127 27.168750000000003 67.64234326824254 35.4375 67.64234326824254C 43.70625 67.64234326824254 50.79375 91.07502569373072 59.0625 91.07502569373072C 67.33125 91.07502569373072 74.41875 87.95066803699896 82.6875 87.95066803699896C 90.95625 87.95066803699896 98.04375 81.70195272353546 106.3125 81.70195272353546C 114.58125 81.70195272353546 121.66875 50.45837615621788 129.9375 50.45837615621788C 138.20625 50.45837615621788 145.29375 84.82631038026722 153.5625 84.82631038026722C 161.83125 84.82631038026722 168.91875 122.3186022610483 177.1875 122.3186022610483C 185.45625 122.3186022610483 192.54375 103.57245632065775 200.8125 103.57245632065775C 209.08125 103.57245632065775 216.16875 109.82117163412127 224.4375 109.82117163412127C 232.70625 109.82117163412127 239.79375 72.32887975334017 248.0625 72.32887975334017C 256.33125 72.32887975334017 263.41875 55.144912641315514 271.6875 55.144912641315514C 279.95625 55.144912641315514 287.04375 97.32374100719424 295.3125 97.32374100719424C 303.58125 97.32374100719424 310.66875 80.13977389516957 318.9375 80.13977389516957C 327.20625 80.13977389516957 334.29375 6.717368961973278 342.5625 6.717368961973278C 350.83125 6.717368961973278 357.91875 94.19938335046248 366.1875 94.19938335046248C 374.45625 94.19938335046248 381.54375 56.70709146968139 389.8125 56.70709146968139C 398.08125 56.70709146968139 405.16875 67.64234326824254 413.4375 67.64234326824254C 421.70625 67.64234326824254 428.79375 69.20452209660843 437.0625 69.20452209660843C 445.33125 69.20452209660843 452.41875 114.5077081192189 460.6875 114.5077081192189C 468.95625 114.5077081192189 476.04375 92.6372045220966 484.3125 92.6372045220966C 492.58125 92.6372045220966 499.66875 97.32374100719424 507.9375 97.32374100719424C 516.20625 97.32374100719424 523.29375 78.5775950668037 531.5625 78.5775950668037C 539.83125 78.5775950668037 546.91875 64.51798561151078 555.1875 64.51798561151078C 555.1875 64.51798561151078 555.1875 64.51798561151078 555.1875 152M 555.1875 64.51798561151078z" pathFrom="M -1 152L -1 152L 35.4375 152L 59.0625 152L 82.6875 152L 106.3125 152L 129.9375 152L 153.5625 152L 177.1875 152L 200.8125 152L 224.4375 152L 248.0625 152L 271.6875 152L 295.3125 152L 318.9375 152L 342.5625 152L 366.1875 152L 389.8125 152L 413.4375 152L 437.0625 152L 460.6875 152L 484.3125 152L 507.9375 152L 531.5625 152L 555.1875 152"></path><g id="" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="" r="0" cx="0" cy="0" class="apexcharts-marker wq8ckgd6hl no-pointer-events" stroke="#ffffff" fill="#3f6ad8" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="" class="apexcharts-datalabels"></g></g></g><line id="" x1="0" y1="0" x2="567" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="" x1="0" y1="0" x2="567" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="" class="apexcharts-yaxis-annotations"></g><g id="" class="apexcharts-xaxis-annotations"></g><g id="" class="apexcharts-point-annotations"></g></g><g id="" class="apexcharts-yaxis" rel="0" transform="translate(-35, 0)"><g id="" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(63, 106, 216);"></span><div class="apexcharts-tooltip-text"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
<div class="resize-triggers"><div class="expand-trigger"><div style="width: 568px; height: 153px;"></div></div><div class="contract-trigger"></div></div></div>
</div>
</div>
</div></div></div><div class="slick-slide slick-cloned" data-slick-index="5" id="" aria-hidden="true" tabindex="-1" style="width: 567px;"><div><div style="width: 100%; display: inline-block;">
<div class="widget-chart widget-chart2 text-left p-0">
<div class="widget-chat-wrapper-outer">
<div class="widget-chart-content widget-chart-content-lg pb-0">
<div class="widget-chart-flex">
<div class="widget-title opacity-5 text-muted text-uppercase"> Helpdesk Tickets</div>
</div>
<div class="widget-numbers">
<div class="widget-chart-flex">
<div>
<span class="text-warning">34</span>
</div>
<div class="widget-title ml-2 font-size-lg font-weight-normal text-dark">
<span class="opacity-5 text-muted pl-2 pr-1">5%</span>
increase
</div>
</div>
</div>
</div>
<div class="widget-chart-wrapper he-auto opacity-10 m-0">
<div id="" style="min-height: 152px;"><div id="" class="apexcharts-canvas apexcharts0epa0njc" style="width: 567px; height: 152px;"><svg id="" width="567" height="152" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id=""><clipPath id=""><rect id="" width="572" height="157" x="-2.5" y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id=""><rect id="" width="581" height="166" x="-7" y="-7" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="" x1="0" y1="0" x2="0" y2="1"><stop id="" stop-opacity="0.7" stop-color="rgba(247,185,36,0.7)" offset="0"></stop><stop id="" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="0.9"></stop><stop id="" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="1"></stop></linearGradient></defs><rect id="" width="1" height="152" x="0" y="0" rx="0" ry="0" fill="#b1b9c4" opacity="1" stroke-width="0" stroke-dasharray="0" class="apexcharts-xcrosshairs" filter="none" fill-opacity="0.9"></rect><g id="" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="" class="apexcharts-grid"><line id="" x1="0" y1="152" x2="567" y2="152" stroke="transparent" stroke-dasharray="0"></line><line id="" x1="0" y1="1" x2="0" y2="152" stroke="transparent" stroke-dasharray="0"></line></g><g id="" class="apexcharts-area-series apexcharts-plot-series"><g id="" class="apexcharts-series series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="" d="M7.265886213661398 104.6320979737622C12.600406926185313 104.6320979737622 17.172853251205815 86.4911993254158 22.50737396372973 86.4911993254158C27.841894676253645 86.4911993254158 45.34446703754442 95.56164864958899 50.67898775006833 95.56164864958899C56.01350846259225 95.56164864958899 68.96946703754442 120.75734121673676 74.30398775006833 120.75734121673676C79.63850846259226 120.75734121673676 92.59446703754442 116.72603040599313 97.92898775006833 116.72603040599313C103.26350846259226 116.72603040599313 116.21946703754442 106.64775337913402 121.55398775006833 106.64775337913402C126.88850846259226 106.64775337913402 139.8444670375444 98.58513175764674 145.17898775006833 98.58513175764674C150.51350846259226 98.58513175764674 163.4694670375444 97.57730405496082 168.80398775006833 97.57730405496082C174.13850846259226 97.57730405496082 187.0944670375444 127.81213513553814 192.42898775006833 127.81213513553814C197.76350846259226 127.81213513553814 210.7194670375444 124.78865202748041 216.05398775006833 124.78865202748041C221.38850846259226 124.78865202748041 234.3444670375444 108.66340878450583 239.67898775006833 108.66340878450583C245.01350846259226 108.66340878450583 257.9694670375444 110.67906418987765 263.30398775006836 110.67906418987765C268.63850846259226 110.67906418987765 281.5944670375444 114.7103750006213 286.92898775006836 114.7103750006213C292.26350846259226 114.7103750006213 305.2194670375444 97.57730405496082 310.55398775006836 97.57730405496082C315.88850846259226 97.57730405496082 328.8444670375444 89.51468243347352 334.17898775006836 89.51468243347352C339.51350846259226 89.51468243347352 352.4694670375444 58.2720236502103 357.80398775006836 58.2720236502103C363.13850846259226 58.2720236502103 376.0944670375444 124.78865202748041 381.42898775006836 124.78865202748041C386.76350846259226 124.78865202748041 399.7194670375444 90.52251013615944 405.05398775006836 90.52251013615944C410.38850846259226 90.52251013615944 423.3444670375444 105.6399256764481 428.67898775006836 105.6399256764481C434.01350846259226 105.6399256764481 446.9694670375444 112.69471959524947 452.30398775006836 112.69471959524947C457.63850846259226 112.69471959524947 470.5944670375444 113.70254729793538 475.92898775006836 113.70254729793538C481.26350846259226 113.70254729793538 494.2194670375444 132.8512736489677 499.55398775006836 132.8512736489677C504.8885084625922 132.8512736489677 517.8444670375444 100.60078716301854 523.1789877500684 100.60078716301854C528.5135084625922 100.60078716301854 541.4694670375444 116.72603040599313 546.8039877500684 116.72603040599313C546.8039877500684 116.72603040599313 555.1875 116.72603040599313 555.1875 116.72603040599313 " fill="none" fill-opacity="1" stroke="#f7b924" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask0epa0njc)" pathTo="M 11.8125 78.5775950668037C 20.081249999999997 78.5775950668037 27.168750000000003 50.45837615621788 35.4375 50.45837615621788C 43.70625 50.45837615621788 50.79375 64.51798561151078 59.0625 64.51798561151078C 67.33125 64.51798561151078 74.41875 103.57245632065775 82.6875 103.57245632065775C 90.95625 103.57245632065775 98.04375 97.32374100719424 106.3125 97.32374100719424C 114.58125 97.32374100719424 121.66875 81.70195272353546 129.9375 81.70195272353546C 138.20625 81.70195272353546 145.29375 69.20452209660843 153.5625 69.20452209660843C 161.83125 69.20452209660843 168.91875 67.64234326824254 177.1875 67.64234326824254C 185.45625 67.64234326824254 192.54375 114.5077081192189 200.8125 114.5077081192189C 209.08125 114.5077081192189 216.16875 109.82117163412127 224.4375 109.82117163412127C 232.70625 109.82117163412127 239.79375 84.82631038026722 248.0625 84.82631038026722C 256.33125 84.82631038026722 263.41875 87.95066803699896 271.6875 87.95066803699896C 279.95625 87.95066803699896 287.04375 94.19938335046248 295.3125 94.19938335046248C 303.58125 94.19938335046248 310.66875 67.64234326824254 318.9375 67.64234326824254C 327.20625 67.64234326824254 334.29375 55.144912641315514 342.5625 55.144912641315514C 350.83125 55.144912641315514 357.91875 6.717368961973278 366.1875 6.717368961973278C 374.45625 6.717368961973278 381.54375 109.82117163412127 389.8125 109.82117163412127C 398.08125 109.82117163412127 405.16875 56.70709146968139 413.4375 56.70709146968139C 421.70625 56.70709146968139 428.79375 80.13977389516957 437.0625 80.13977389516957C 445.33125 80.13977389516957 452.41875 91.07502569373072 460.6875 91.07502569373072C 468.95625 91.07502569373072 476.04375 92.6372045220966 484.3125 92.6372045220966C 492.58125 92.6372045220966 499.66875 122.3186022610483 507.9375 122.3186022610483C 516.20625 122.3186022610483 523.29375 72.32887975334017 531.5625 72.32887975334017C 539.83125 72.32887975334017 546.91875 97.32374100719424 555.1875 97.32374100719424" pathFrom="M -1 152L -1 152L 35.4375 152L 59.0625 152L 82.6875 152L 106.3125 152L 129.9375 152L 153.5625 152L 177.1875 152L 200.8125 152L 224.4375 152L 248.0625 152L 271.6875 152L 295.3125 152L 318.9375 152L 342.5625 152L 366.1875 152L 389.8125 152L 413.4375 152L 437.0625 152L 460.6875 152L 484.3125 152L 507.9375 152L 531.5625 152L 555.1875 152"></path><path id="" d="M7.265886213661398 152L7.265886213661398 104.6320979737622C12.600406926185313 104.6320979737622 30.102979287476085 86.4911993254158 35.4375 86.4911993254158C40.77202071252391 86.4911993254158 53.72797928747609 95.56164864958899 59.0625 95.56164864958899C64.39702071252391 95.56164864958899 77.35297928747609 120.75734121673676 82.6875 120.75734121673676C88.02202071252391 120.75734121673676 100.97797928747609 116.72603040599313 106.3125 116.72603040599313C111.64702071252391 116.72603040599313 124.60297928747609 106.64775337913402 129.9375 106.64775337913402C135.27202071252393 106.64775337913402 148.22797928747607 98.58513175764674 153.5625 98.58513175764674C158.89702071252393 98.58513175764674 171.85297928747607 97.57730405496082 177.1875 97.57730405496082C182.52202071252393 97.57730405496082 195.47797928747607 127.81213513553814 200.8125 127.81213513553814C206.14702071252393 127.81213513553814 219.10297928747607 124.78865202748041 224.4375 124.78865202748041C229.77202071252393 124.78865202748041 242.72797928747607 108.66340878450583 248.0625 108.66340878450583C253.39702071252393 108.66340878450583 266.3529792874761 110.67906418987765 271.6875 110.67906418987765C277.0220207125239 110.67906418987765 289.9779792874761 114.7103750006213 295.3125 114.7103750006213C300.6470207125239 114.7103750006213 313.6029792874761 97.57730405496082 318.9375 97.57730405496082C324.2720207125239 97.57730405496082 337.2279792874761 89.51468243347352 342.5625 89.51468243347352C347.8970207125239 89.51468243347352 360.8529792874761 58.2720236502103 366.1875 58.2720236502103C371.5220207125239 58.2720236502103 384.4779792874761 124.78865202748041 389.8125 124.78865202748041C395.1470207125239 124.78865202748041 408.1029792874761 90.52251013615944 413.4375 90.52251013615944C418.7720207125239 90.52251013615944 431.7279792874761 105.6399256764481 437.0625 105.6399256764481C442.3970207125239 105.6399256764481 455.3529792874761 112.69471959524947 460.6875 112.69471959524947C466.0220207125239 112.69471959524947 478.9779792874761 113.70254729793538 484.3125 113.70254729793538C489.6470207125239 113.70254729793538 502.6029792874761 132.8512736489677 507.9375 132.8512736489677C513.2720207125238 132.8512736489677 526.2279792874762 100.60078716301854 531.5625 100.60078716301854C536.8970207125238 100.60078716301854 549.8529792874762 116.72603040599313 555.1875 116.72603040599313C555.1875 116.72603040599313 555.1875 116.72603040599313 555.1875 152M357.82010446523304 116.72603040599313C357.82010446523304 116.72603040599313 357.82010446523304 116.72603040599313 357.82010446523304 116.72603040599313 " fill="url(#SvgjsLinearGradient1050)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask0epa0njc)" pathTo="M 11.8125 152L 11.8125 78.5775950668037C 20.081249999999997 78.5775950668037 27.168750000000003 50.45837615621788 35.4375 50.45837615621788C 43.70625 50.45837615621788 50.79375 64.51798561151078 59.0625 64.51798561151078C 67.33125 64.51798561151078 74.41875 103.57245632065775 82.6875 103.57245632065775C 90.95625 103.57245632065775 98.04375 97.32374100719424 106.3125 97.32374100719424C 114.58125 97.32374100719424 121.66875 81.70195272353546 129.9375 81.70195272353546C 138.20625 81.70195272353546 145.29375 69.20452209660843 153.5625 69.20452209660843C 161.83125 69.20452209660843 168.91875 67.64234326824254 177.1875 67.64234326824254C 185.45625 67.64234326824254 192.54375 114.5077081192189 200.8125 114.5077081192189C 209.08125 114.5077081192189 216.16875 109.82117163412127 224.4375 109.82117163412127C 232.70625 109.82117163412127 239.79375 84.82631038026722 248.0625 84.82631038026722C 256.33125 84.82631038026722 263.41875 87.95066803699896 271.6875 87.95066803699896C 279.95625 87.95066803699896 287.04375 94.19938335046248 295.3125 94.19938335046248C 303.58125 94.19938335046248 310.66875 67.64234326824254 318.9375 67.64234326824254C 327.20625 67.64234326824254 334.29375 55.144912641315514 342.5625 55.144912641315514C 350.83125 55.144912641315514 357.91875 6.717368961973278 366.1875 6.717368961973278C 374.45625 6.717368961973278 381.54375 109.82117163412127 389.8125 109.82117163412127C 398.08125 109.82117163412127 405.16875 56.70709146968139 413.4375 56.70709146968139C 421.70625 56.70709146968139 428.79375 80.13977389516957 437.0625 80.13977389516957C 445.33125 80.13977389516957 452.41875 91.07502569373072 460.6875 91.07502569373072C 468.95625 91.07502569373072 476.04375 92.6372045220966 484.3125 92.6372045220966C 492.58125 92.6372045220966 499.66875 122.3186022610483 507.9375 122.3186022610483C 516.20625 122.3186022610483 523.29375 72.32887975334017 531.5625 72.32887975334017C 539.83125 72.32887975334017 546.91875 97.32374100719424 555.1875 97.32374100719424C 555.1875 97.32374100719424 555.1875 97.32374100719424 555.1875 152M 555.1875 97.32374100719424z" pathFrom="M -1 152L -1 152L 35.4375 152L 59.0625 152L 82.6875 152L 106.3125 152L 129.9375 152L 153.5625 152L 177.1875 152L 200.8125 152L 224.4375 152L 248.0625 152L 271.6875 152L 295.3125 152L 318.9375 152L 342.5625 152L 366.1875 152L 389.8125 152L 413.4375 152L 437.0625 152L 460.6875 152L 484.3125 152L 507.9375 152L 531.5625 152L 555.1875 152"></path><g id="" class="apexcharts-series-markers-wrap hidden"><g class="apexcharts-series-markers"><circle id="" r="0" cx="0" cy="0" class="apexcharts-marker wyvnxskrl no-pointer-events" stroke="#ffffff" fill="#f7b924" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="" class="apexcharts-datalabels"></g></g></g><line id="" x1="0" y1="0" x2="567" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="" x1="0" y1="0" x2="567" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="" class="apexcharts-yaxis-annotations hidden"></g><g id="" class="apexcharts-xaxis-annotations hidden"></g><g id="" class="apexcharts-point-annotations hidden"></g></g><g id="" class="apexcharts-yaxis" rel="0" transform="translate(-35, 0)"><g id="" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(247, 185, 36);"></span><div class="apexcharts-tooltip-text"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
<div class="resize-triggers"><div class="expand-trigger"><div style="width: 568px; height: 153px;"></div></div><div class="contract-trigger"></div></div></div>
</div>
</div>
</div></div></div></div></div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button><ul class="slick-dots" style="" role="tablist"><li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 3" tabindex="0" aria-selected="true">1</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control01" aria-controls="slick-slide01" aria-label="2 of 3" tabindex="-1">2</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control02" aria-controls="slick-slide02" aria-label="3 of 3" tabindex="-1">3</button></li></ul></div>
</div>
<h6 class="text-muted text-uppercase font-size-md opacity-5 pl-3 pr-3 pb-1 font-weight-normal">
Sales Progress</h6>
<ul class="list-group list-group-flush">
<li class="p-3 bg-transparent list-group-item">
<div class="widget-content p-0">
<div class="widget-content-outer">
<div class="widget-content-wrapper">
<div class="widget-content-left">
<div class="widget-heading">Total Orders</div>
<div class="widget-subheading">Last year expenses</div>
</div>
<div class="widget-content-right">
<div class="widget-numbers text-success">
<small>$</small>
1896
</div>
</div>
</div>
<div class="widget-progress-wrapper">
<div class="progress-bar-sm progress-bar-animated-alt progress">
<div class="progress-bar bg-primary" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 43%;">
</div>
</div>
<div class="progress-sub-label">
<div class="sub-label-left">YoY Growth</div>
<div class="sub-label-right">100%</div>
</div>
</div>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="col-sm-12 col-lg-6">
<div class="card-hover-shadow-2x mb-3 card">
<div class="card-header-tab card-header">
<div class="card-header-title font-size-lg text-capitalize font-weight-normal">
<i class="header-icon lnr-lighter icon-gradient bg-amy-crisp"></i>
Timeline Example
</div>
<div class="btn-actions-pane-right text-capitalize actions-icon-btn">
<div class="btn-group dropdown">
<button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
<i class="pe-7s-menu btn-icon-wrapper"></i>
</button>
<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
<h6 tabindex="-1" class="dropdown-header">Header</h6>
<button type="button" tabindex="0" class="dropdown-item">
<i class="dropdown-icon lnr-inbox"> </i><span>Menus</span>
</button>
<button type="button" tabindex="0" class="dropdown-item">
<i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span>
</button>
<button type="button" tabindex="0" class="dropdown-item">
<i class="dropdown-icon lnr-book"> </i><span>Actions</span>
</button>
<div tabindex="-1" class="dropdown-divider"></div>
<div class="p-3 text-right">
<button class="mr-2 btn-shadow btn-sm btn btn-link">View Details</button>
<button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
</div>
</div>
</div>
</div>
</div>
<div class="scroll-area-lg">
<div class="scrollbar-container ps ps--active-y">
<div class="p-4">
<div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
<div class="vertical-timeline-item dot-danger vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">All Hands Meeting</h4>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-warning vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<p>Yet another one, at <span class="text-success">15:00 PM</span>
</p>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-success vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">Build the production release
<div class="badge badge-danger ml-2">NEW</div>
</h4>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-primary vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">
Something not important
<div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTFBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE5RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI0RjBENjMzNUYyM0RFMUYwNjM4MTY4RTUyODFERkI3QSIgc3RSZWY6ZG9jdW1lbnRJRD0iNEYwRDYzMzVGMjNERTFGMDYzODE2OEU1MjgxREZCN0EiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE1RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJENDFFMzk5RUI1NDJFOUFCNzIzNzUzMDQ3QkJEMkQ3OSIgc3RSZWY6ZG9jdW1lbnRJRD0iRDQxRTM5OUVCNTQyRTlBQjcyMzc1MzA0N0JCRDJENzkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMxaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTEyRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTExRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RDgzQTU0RjlFQTY4MTFFODhGMzQ4NDBBMjJGNzJDODgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RDgzQTU0RkFFQTY4MTFFODhGMzQ4NDBBMjJGNzJDODgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYF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" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODFCRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODFBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSIxQUMwRDYxNUU3RTUxRTAwNThENTY1NENGQTYxNTZCQyIgc3RSZWY6ZG9jdW1lbnRJRD0iMUFDMEQ2MTVFN0U1MUUwMDU4RDU2NTRDRkE2MTU2QkMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODE3RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI1NDBBNzQ1MzA5RTU2OURFMUM5Qjk3QUIwRTVDNzYyRCIgc3RSZWY6ZG9jdW1lbnRJRD0iNTQwQTc0NTMwOUU1NjlERTFDOUI5N0FCMEU1Qzc2MkQiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODEzRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODEyRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI5QTgyNDYyOTc1Rjk5RThBQTc3MDRCNDVGMkI4NDgwNyIgc3RSZWY6ZG9jdW1lbnRJRD0iOUE4MjQ2Mjk3NUY5OUU4QUE3NzA0QjQ1RjJCODQ4MDciLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkExQjJCNTVFRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkExQjJCNTVERUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJGQTNDMzBENTkxNUNENDY3Qjg0REZERUVBM0VDRkYwMyIgc3RSZWY6ZG9jdW1lbnRJRD0iRkEzQzMwRDU5MTVDRDQ2N0I4NERGREVFQTNFQ0ZGMDMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkExQjJCNTVBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkExQjJCNTU5RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI0OEUzM0U0MzQ4NzdGOTU0QzlCM0Y3Q0VBNTBGRDM1NiIgc3RSZWY6ZG9jdW1lbnRJRD0iNDhFMzNFNDM0ODc3Rjk1NEM5QjNGN0NFQTUwRkQzNTYiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
<div class="avatar-icon"><i>+</i></div>
</div>
</div>
</h4>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-info vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">This dot has an info state</h4>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-dark vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">This dot has a dark state</h4>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-danger vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">All Hands Meeting</h4>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-warning vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<p>Yet another one, at <span class="text-success">15:00 PM</span>
</p>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-success vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">Build the production release
<div class="badge badge-danger ml-2">NEW</div>
</h4>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-primary vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">
Something not important
<div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTFBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE5RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI0RjBENjMzNUYyM0RFMUYwNjM4MTY4RTUyODFERkI3QSIgc3RSZWY6ZG9jdW1lbnRJRD0iNEYwRDYzMzVGMjNERTFGMDYzODE2OEU1MjgxREZCN0EiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE1RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJENDFFMzk5RUI1NDJFOUFCNzIzNzUzMDQ3QkJEMkQ3OSIgc3RSZWY6ZG9jdW1lbnRJRD0iRDQxRTM5OUVCNTQyRTlBQjcyMzc1MzA0N0JCRDJENzkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMxaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTEyRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTExRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RDgzQTU0RjlFQTY4MTFFODhGMzQ4NDBBMjJGNzJDODgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RDgzQTU0RkFFQTY4MTFFODhGMzQ4NDBBMjJGNzJDODgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYF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" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODFCRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODFBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSIxQUMwRDYxNUU3RTUxRTAwNThENTY1NENGQTYxNTZCQyIgc3RSZWY6ZG9jdW1lbnRJRD0iMUFDMEQ2MTVFN0U1MUUwMDU4RDU2NTRDRkE2MTU2QkMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCABAAEADAREAAhEBAxEB/8QAhQAAAwEBAAMAAAAAAAAAAAAABQYHBAIBAwgBAAMBAQEAAAAAAAAAAAAAAAIDBAEABRAAAgIBAwQABAUDBAMAAAAAAQIDBBEAEgUhMRMGQVFhFIEiMiMHcZFCoVJiFYJTNBEAAgICAQQCAwEBAAAAAAAAAAERAiEDEjFBIgRRE2EyQlJy/9oADAMBAAIRAxEAPwCERTyMWBgJCnaxXr1GoGi7kebRjNZwsZDkdAVx111OpjZ3Qk4iKsv34CMDs7Ek/HPT5aLhZvBkpLIUTk/SzVEfEzyLdf8AU86OsUY/3sR0A+OqVpXdk72PsYLPunJVroTjbCW6cYG6eWPCux6kAZ3Kvy1j01N+xh/i/c+K5dY42dKdtGDeCUEozD4JIBg5+AODpF9PEZS7Y2S2LMUXlnrALj8zKfnqdJPoNbaMss9Ro8yQOqn4suR/XprOLOlCFWr2628vVZt7byUPxOmOH3OUo0pcrtL45EdSMblK5xrOB3NHs9Z9M5X2z2WHjYYmRORm8Rn/AEpDWjP7h6f5Htj56t1UeEJu+7PoG96167wUbcRQowipA/hSPxqSVUYyxxlifmdL9hpWhFPrrlWWL3OfxT6jzlb9uktOywz5YMIc9+o+OmUmANmtSSn3L+LL/r9aQyq0lpW3+TtuUdUZR2YuPh8x89c7ZhivrUSg/wCucjY531OJ6YR2UeGfcNpV1AJGOo69wRqO9FW2RlW7IIT3Z6lYRz1JCsa/mdSCOmk8JeGFMCxC9wruNV9rYwV0yF8nSbeJrpPzSRzRmGOwQgdxhV2qTlj+Gj10myQN74bHj1X2Gh69yVS5VqQz14LDjlb0snirVgsZfdldzMc4XAGNxxnXp2daeRJRWvhIy8z/AC9Yfk2EcFOxHK3kbxTMJlL9QGWVQDu+HXrrz9k28j0dV1XxCXGfyTwNtq896wtZZSQUfchUA4y2R0H17a6l7TlB3VYwxn/kiLieZ9EnnjmE1NY1eOzC4OPE6sAHGcMDp93JKiW+tJYpcPXSrGhNyaaYjGDkvjPTpggaj2w3kKk9glyUXKtXdPtozuGMhsjrpdK16ya2wHWtywxIj1JBtAGR113FPuFP4NEvJztx1t6Pkgnh2CdwgaRYmJEgQEY3N0H9M6C00yiz0VW9mrL+S0ew+p8AnpfCcZeghZYYI2Twqq5nkTdvBUdQoPx769HffjrTZ53q15bbVX6kpscNXv8AMf8AXSRxchBURSbcm2P7aJTt3S42rIR+lc/21Itzg9N+sl1DnvPoFe96x6/NSmNKSOB/2Y3AEsIkJ2ordHeMHdhu+qOKVE2TOXsaQuey0vYuI9F5T7enYjovJA9fkEiMfmiPR68tdS2PI3ZuuNdTGP5E7k46+QS4LhOTqcXx8jSBbK1lEsTqMB3G5u31OpNmxNsxKDvkLHL1qzyMkUiKCcDI1lIeEbLAcNq4GPm4+ZcHDbcNrHrjuEr/AIOeO5G/CLsXhmhS1uV3VSWKnqAdFfXKhM3Rteu3KCnfyvy89bgq8EbtDIgggJXo6osQDhcdiT0yO2n+2+lQvT72JlxXr9+4Rx1rg/BaLmUh7ib2SPqkkZcBNu49ic50tKenlUplpTbxDvuEtHieArULNyet7ZSlHItDaLMLIQeB3hMZlhQYG3AI66ZtolTH7VB1bn9mPKth859uW5r1njTlq6w4mt2lcxvFLHs8SqFwW3EsrDQ7L2tSQdfCl22Kpq3vLNsuHarnAYA9+uppXwSZB/J0+XnhaH7iIKw6krgkD4aKjqnJzTM0F+R7DJJ9sLCY8gWcKCT06ZHXPzGmvRL6mLY0ugUr3YI7tGF/G9u08RipROGZlaUId7Y2qcZOO+NavWh5Zz2NrCDvubUuY5eV/JsWKdizdMAN1U/6aPalsG6m9eBQA4/lZmd+U+zeswjjSSMnP5sfrU7vw0v14XfiW32vsP3McTx8nBUKFxozBBNDYmmQKGnEDeRFJ7ld3U51XtzWGyH7fJsXb92flLliQWXSqsm2GBHOwBf8sdixJJzqPZcxZRhmoywhvDZkUnrnO7r89L5rujfrBFufmF8YSwsjO21Q6dep1q4s5ponT8gURZcEiAFlHUEIDhxj5qe41U6C1cKcHzjUeYgubvLJUdJIpGOSY36q/wBSBkZ+ml3mMB0anJRo4JHL24pgYbCAOck/UNn6g99S+u2ivekxdqerS3uRWKCQ9WJdxkY6/wBtU/syfopKvS4GGrwTyzhrLuBVjaRyx/OcM30HTGrNepW8WR79rqpFyClw96xehrKC1FYpbZJ2JGJU343g7SQO+gv6V1+r5AL2q91xBP8A0Pke0ztPBFG/7MgYlShGQQe2pditTqijXZW6MzTcMcBkuyZQ7kJwRkaSti+BrT+SectVWStX5WL/AOW9Elw9sCRWENpfxRgx+oOvWdMSQq+YBvG0bL05ERs2OJnapMCe8DsfGf8AxYaXwywuXQL0Pd7fr7pQ5YP9nlkr2QC2wj9UUg+IHdT8tKv685qUa/ZjFh99G9i9ZNue7Z5GsKzJlpDMqKoHU9CRgn+ms11snlB7dtWsMeh7hXu1/LCDHxFCKSyZWG3yqF/K4VsFY/guep769DRSMs8vfs5YROKnJXeK9crCLLcz7RZa0kDfHd+3CG/4IuWOjq4X/QtqXH+QlwfskA5GKnTItcZxMhpUInOEv8k6k2bM5/8ARXTcT+GiTnBjUZNfN+sUlp1uU4qaeOhZyrAkhA/dXiDZYRv/AIhtef7mlUXKqLPW2u+LH//Z" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODE3RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI1NDBBNzQ1MzA5RTU2OURFMUM5Qjk3QUIwRTVDNzYyRCIgc3RSZWY6ZG9jdW1lbnRJRD0iNTQwQTc0NTMwOUU1NjlERTFDOUI5N0FCMEU1Qzc2MkQiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODEzRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODEyRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI5QTgyNDYyOTc1Rjk5RThBQTc3MDRCNDVGMkI4NDgwNyIgc3RSZWY6ZG9jdW1lbnRJRD0iOUE4MjQ2Mjk3NUY5OUU4QUE3NzA0QjQ1RjJCODQ4MDciLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkExQjJCNTVFRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkExQjJCNTVERUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJGQTNDMzBENTkxNUNENDY3Qjg0REZERUVBM0VDRkYwMyIgc3RSZWY6ZG9jdW1lbnRJRD0iRkEzQzMwRDU5MTVDRDQ2N0I4NERGREVFQTNFQ0ZGMDMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkExQjJCNTVBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkExQjJCNTU5RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI0OEUzM0U0MzQ4NzdGOTU0QzlCM0Y3Q0VBNTBGRDM1NiIgc3RSZWY6ZG9jdW1lbnRJRD0iNDhFMzNFNDM0ODc3Rjk1NEM5QjNGN0NFQTUwRkQzNTYiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
<div class="avatar-icon"><i>+</i></div>
</div>
</div>
</h4>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-info vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">This dot has an info state</h4>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-dark vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">This dot has a dark state</h4>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-danger vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">All Hands Meeting</h4>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-warning vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<p>Yet another one, at <span class="text-success">15:00 PM</span>
</p>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-success vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">Build the production release
<div class="badge badge-danger ml-2">NEW</div>
</h4>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-primary vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">
Something not important
<div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTFBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE5RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI0RjBENjMzNUYyM0RFMUYwNjM4MTY4RTUyODFERkI3QSIgc3RSZWY6ZG9jdW1lbnRJRD0iNEYwRDYzMzVGMjNERTFGMDYzODE2OEU1MjgxREZCN0EiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE1RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJENDFFMzk5RUI1NDJFOUFCNzIzNzUzMDQ3QkJEMkQ3OSIgc3RSZWY6ZG9jdW1lbnRJRD0iRDQxRTM5OUVCNTQyRTlBQjcyMzc1MzA0N0JCRDJENzkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMxaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTEyRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTExRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RDgzQTU0RjlFQTY4MTFFODhGMzQ4NDBBMjJGNzJDODgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RDgzQTU0RkFFQTY4MTFFODhGMzQ4NDBBMjJGNzJDODgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYF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" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODFCRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODFBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSIxQUMwRDYxNUU3RTUxRTAwNThENTY1NENGQTYxNTZCQyIgc3RSZWY6ZG9jdW1lbnRJRD0iMUFDMEQ2MTVFN0U1MUUwMDU4RDU2NTRDRkE2MTU2QkMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODE3RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI1NDBBNzQ1MzA5RTU2OURFMUM5Qjk3QUIwRTVDNzYyRCIgc3RSZWY6ZG9jdW1lbnRJRD0iNTQwQTc0NTMwOUU1NjlERTFDOUI5N0FCMEU1Qzc2MkQiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODEzRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODEyRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI5QTgyNDYyOTc1Rjk5RThBQTc3MDRCNDVGMkI4NDgwNyIgc3RSZWY6ZG9jdW1lbnRJRD0iOUE4MjQ2Mjk3NUY5OUU4QUE3NzA0QjQ1RjJCODQ4MDciLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCABAAEADAREAAhEBAxEB/8QAgwAAAgMBAQEAAAAAAAAAAAAABQYDBAcCCAEBAAIDAQEAAAAAAAAAAAAAAAABAgMEBQYQAAIBAwMBBwMCBQUAAAAAAAECAxEEBQASBiExQVFhIhMHcTIUkULwgVKCCLHhYiMVEQACAgIDAAIDAAAAAAAAAAAAARECMQMhEgRRYUGxE//aAAwDAQACEQMRAD8A0KAMNQJl+Fa000BZW3r0AqTogRmXMvnThHHMjJjY0my93CAJjZlBErn9nut0JH7qfTQOBSn/AMm8UZgIONTtEQamS6RXr/JCNIAtw/5445ncvHjMnZHDPdNss7t5RJAzH7UlNFMZY9A3210Aak9mVYqy0YGhB7QdAHH4nloAlgjB7tAF2KMjUgMz/wAhPkJ+O8bi4/jJ5YM7mhvM8LbWhslJV+o9W6ZvSKdwJrpCPPnHeFZrOyGKzjHoG6eaSoVS3ie86pvtVcmnVotfA3r8CZV4C638Ynp0jKnZXwLapfpXwXrxP5BOT+HOZ2MbNDAmQFG3wxGrbQK1Cntp5asr6Ksqt5LL7Nu+BOWZHkPEJ7HJsZMjgJVs2mkP/Y8LKTF7leu5NpQk+A1oT4MrTnk0gwU7tECOIIezTGEIYagCmgR5l/yMtyflaR26JFjrJQW6j7GNQPKv66hZwTqjQfj3j9tjsBart9ndGJJTJ6SXfqGcmnXXOs3a0nW1pVqkOUVqzMKBSrdjKag/pqDTLqNNcF1bFF9QQlqU3U6AA1/11F8ElkVPi7jX4PO/kG/jI/HuLq1ijiHQKzIZ3NP7tdPzuaI4vqUXZpBh1cZ5OIIOzQMI2ttV1HZU9ugTZh/yJxgch+QMblp4fbufzTaXdoKsos7GphkeooHYg18dYr7m5R1V5FVUaczDf7CHKuGNlzHcGNbzalI7aeWSOBO31lIypdifPVFNkcF2zX2KXBONy4S/jd98AkiQ3drFLI9utwxIZIxIzVQCnq8dPbacBp1NZUEubuOYXvKbqyt7zJY3G2u38ea1EUkUpkYKu6NhvO2tWoei6lRpVlwQ2KztClD/APGWJv7Tj97NkpFmyd/k7u4vJUFFLKVhUAeAWLW3Sl1UYOZvb7ucjS0Q1YVENsimlNAwxaRoAD36ZEUOaYuO1yYvUIAyLVChgGaSNKN6O+nj56wenXD7LDOr5N6tVVeUUIEQW/uTV2qvp/31mTWDauORduM5jRfpBMyxRlgQ0YD0Ff3NUdfIan0tEwH9qzkYcVkLC7lnNnL7qqGMMo7DQ0ZSO0ddRtWOGHdWUpjzBYxW1vHDGgVVFSB3s3Vm/mddWihJHn7tuzbPjoB26kRFi55Nh7BmV5WleP71gXeF8i3Ra6jJNVZm/Ifk7n2QzEtnir2PA4uJCY3hjWW5kYVoGlcMEHTrtH00pZJURY45NmM3lY7jJ3k13cpjpVtrid9zHbOtSKUA86ayeqzhG3x1UsZLm7hubGWGUiN1pHKtaMrin8Dx1lScpo12fDTA9xYYDEpHHPDI8E1Ckr235AYk16sKEndqytm/ySr/ADSUoJ4S3wWHvTcMGi94RtLbIhG1GNWYRk1qR2g6dU7tJ4KNt60TdeJNNtsnj8inuWNzHOvbRD6h5FTRhT6a6cnIaaOXTx0CMiRS9ylvKqttdvdA+0oR6en1Ool4oZi1lsuWQ2SRGRLmCeY0FTS3G4n6Uk0gGHGTS4+DG5K3Xc9i+2SEmhmhkFJYkrSrsnqUdtRqrdTtWC3TfrYa89xmzzdtFksddGFpVWSC6QblZfuX3E6Vp+o1z626s6Fq9kCoE59aJL+Ra2UthbxvLNf/AJIVFRFLM+1l3dKdmrnar5KYugdYG7u0hy95Uy36Ey7ulFNDGKH+nv1s11SXBi2Nt8hJF9iYhN0cu33FkUkNXuoR56sID1x7PPf7rS4O66hjDe+OgkFSp/uWnXTTK7KBFyMPtzx3sfQKRHMD3f0nUS0jz+NjuTbX6LWWDpuHRgrCh6juOgRUyHF7bJCG4Rtl9bgPYyyEskFwh3RShOz7htb/AIkjTAYOA5PfZMtzA1tE7SGWOOrx2sqPslR61KKHP0/XWTb55co1a/RCSYS5cbO9j/8AEifdArq+TANAyqdwhJHcSKt5ap1a1a30i7Zsday8vAIUR3kEUsDBolLDdtoGo23cpIHaO8dNdBI55blsRLdWikelGAWgp6a1INNOBEvG5Gjs7W9FCSzOQO0gyMKaEKx//9k=" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkExQjJCNTVFRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkExQjJCNTVERUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJGQTNDMzBENTkxNUNENDY3Qjg0REZERUVBM0VDRkYwMyIgc3RSZWY6ZG9jdW1lbnRJRD0iRkEzQzMwRDU5MTVDRDQ2N0I4NERGREVFQTNFQ0ZGMDMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkExQjJCNTVBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkExQjJCNTU5RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI0OEUzM0U0MzQ4NzdGOTU0QzlCM0Y3Q0VBNTBGRDM1NiIgc3RSZWY6ZG9jdW1lbnRJRD0iNDhFMzNFNDM0ODc3Rjk1NEM5QjNGN0NFQTUwRkQzNTYiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
<div class="avatar-icon"><i>+</i></div>
</div>
</div>
</h4>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-info vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">This dot has an info state</h4>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-dark vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">This dot has a dark state</h4>
</div>
</div>
</div>
</div>
</div>
<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 400px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 195px;"></div></div></div>
</div>
<div class="d-block text-center card-footer">
<button class="btn-shadow btn-wide btn-pill btn btn-focus">
<span class="badge badge-dot badge-dot-lg badge-warning badge-pulse">Badge</span>
View All Messages
</button>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-xl-3">
<div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-success border-success">
<div class="widget-chat-wrapper-outer">
<div class="widget-chart-content pt-3 pl-3 pb-1">
<div class="widget-chart-flex">
<div class="widget-numbers">
<div class="widget-chart-flex">
<div class="fsize-4">
<small class="opacity-5">$</small>
<span>874</span>
</div>
</div>
</div>
</div>
<h6 class="widget-subheading mb-0 opacity-5">sales last month</h6>
</div>
<div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
<div class="col-md-9">
<div id="dashboard-sparklines-1" style="min-height: 100px;"><div id="apexchartsuc83f5wz" class="apexcharts-canvas apexchartsuc83f5wz" style="width: 174px; height: 100px;"><svg id="SvgjsSvg1099" width="174" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1101" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1100"><clipPath id="gridRectMaskuc83f5wz"><rect id="SvgjsRect1105" width="177" height="103" x="-1.5" y="-1.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskuc83f5wz"><rect id="SvgjsRect1106" width="182" height="108" x="-4" y="-4" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><rect id="SvgjsRect1104" width="1" height="100" x="0" y="0" rx="0" ry="0" fill="#b1b9c4" opacity="1" stroke-width="0" stroke-dasharray="0" class="apexcharts-xcrosshairs" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1113" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1114" class="apexcharts-xaxis-texts-g" transform="translate(0, 1.875)"></g></g><g id="SvgjsG1117" class="apexcharts-grid"><line id="SvgjsLine1119" x1="0" y1="100" x2="174" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1118" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1108" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1109" class="apexcharts-series series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="apexcharts-line-0" d="M3.625 47.58478931140802C6.1625 47.58478931140802 8.3375 44.50154162384378 10.875 44.50154162384378C13.4125 44.50154162384378 15.5875 33.19630010277493 18.125 33.19630010277493C20.6625 33.19630010277493 22.8375 53.751284686536486 25.375 53.751284686536486C27.9125 53.751284686536486 30.0875 44.50154162384378 32.625 44.50154162384378C35.1625 44.50154162384378 37.3375 59.917780061664956 39.875 59.917780061664956C42.4125 59.917780061664956 44.5875 37.30729701952723 47.125 37.30729701952723C49.6625 37.30729701952723 51.8375 80.47276464542651 54.375 80.47276464542651C56.9125 80.47276464542651 59.0875 64.02877697841726 61.625 64.02877697841726C64.1625 64.02877697841726 66.3375 60.94552929085303 68.875 60.94552929085303C71.4125 60.94552929085303 73.5875 52.723535457348405 76.125 52.723535457348405C78.6625 52.723535457348405 80.8375 36.27954779033916 83.375 36.27954779033916C85.9125 36.27954779033916 88.0875 72.25077081192188 90.625 72.25077081192188C93.1625 72.25077081192188 95.3375 45.52929085303186 97.875 45.52929085303186C100.4125 45.52929085303186 102.5875 61.973278520041106 105.125 61.973278520041106C107.6625 61.973278520041106 109.8375 42.44604316546762 112.375 42.44604316546762C114.9125 42.44604316546762 117.0875 4.419321685508734 119.625 4.419321685508734C122.1625 4.419321685508734 124.3375 72.25077081192188 126.875 72.25077081192188C129.4125 72.25077081192188 131.5875 51.69578622816033 134.125 51.69578622816033C136.6625 51.69578622816033 138.8375 75.33401849948612 141.375 75.33401849948612C143.9125 75.33401849948612 146.0875 68.13977389516958 148.625 68.13977389516958C151.1625 68.13977389516958 153.3375 55.80678314491264 155.875 55.80678314491264C158.4125 55.80678314491264 160.5875 64.02877697841726 163.125 64.02877697841726C165.6625 64.02877697841726 167.8375 57.8622816032888 170.375 57.8622816032888C170.375 57.8622816032888 170.375 57.8622816032888 170.375 57.8622816032888 " fill="none" fill-opacity="1" stroke="rgba(58,196,125,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskuc83f5wz)" pathTo="M 3.625 47.58478931140802C 6.1625 47.58478931140802 8.3375 44.50154162384378 10.875 44.50154162384378C 13.4125 44.50154162384378 15.5875 33.19630010277493 18.125 33.19630010277493C 20.6625 33.19630010277493 22.8375 53.751284686536486 25.375 53.751284686536486C 27.9125 53.751284686536486 30.0875 44.50154162384378 32.625 44.50154162384378C 35.1625 44.50154162384378 37.3375 59.917780061664956 39.875 59.917780061664956C 42.4125 59.917780061664956 44.5875 37.30729701952723 47.125 37.30729701952723C 49.6625 37.30729701952723 51.8375 80.47276464542651 54.375 80.47276464542651C 56.9125 80.47276464542651 59.0875 64.02877697841726 61.625 64.02877697841726C 64.1625 64.02877697841726 66.3375 60.94552929085303 68.875 60.94552929085303C 71.4125 60.94552929085303 73.5875 52.723535457348405 76.125 52.723535457348405C 78.6625 52.723535457348405 80.8375 36.27954779033916 83.375 36.27954779033916C 85.9125 36.27954779033916 88.0875 72.25077081192188 90.625 72.25077081192188C 93.1625 72.25077081192188 95.3375 45.52929085303186 97.875 45.52929085303186C 100.4125 45.52929085303186 102.5875 61.973278520041106 105.125 61.973278520041106C 107.6625 61.973278520041106 109.8375 42.44604316546762 112.375 42.44604316546762C 114.9125 42.44604316546762 117.0875 4.419321685508734 119.625 4.419321685508734C 122.1625 4.419321685508734 124.3375 72.25077081192188 126.875 72.25077081192188C 129.4125 72.25077081192188 131.5875 51.69578622816033 134.125 51.69578622816033C 136.6625 51.69578622816033 138.8375 75.33401849948612 141.375 75.33401849948612C 143.9125 75.33401849948612 146.0875 68.13977389516958 148.625 68.13977389516958C 151.1625 68.13977389516958 153.3375 55.80678314491264 155.875 55.80678314491264C 158.4125 55.80678314491264 160.5875 64.02877697841726 163.125 64.02877697841726C 165.6625 64.02877697841726 167.8375 57.8622816032888 170.375 57.8622816032888" pathFrom="M -1 100L -1 100L 10.875 100L 18.125 100L 25.375 100L 32.625 100L 39.875 100L 47.125 100L 54.375 100L 61.625 100L 68.875 100L 76.125 100L 83.375 100L 90.625 100L 97.875 100L 105.125 100L 112.375 100L 119.625 100L 126.875 100L 134.125 100L 141.375 100L 148.625 100L 155.875 100L 163.125 100L 170.375 100"></path><g id="SvgjsG1110" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1125" r="0" cx="0" cy="0" class="apexcharts-marker wvivfnuhak no-pointer-events" stroke="#ffffff" fill="#3ac47d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1111" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1120" x1="0" y1="0" x2="174" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1121" x1="0" y1="0" x2="174" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1122" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1123" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1124" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1115" class="apexcharts-yaxis" rel="0" transform="translate(-35, 0)"><g id="SvgjsG1116" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(58, 196, 125);"></span><div class="apexcharts-tooltip-text"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
<div class="resize-triggers"><div class="expand-trigger"><div style="width: 175px; height: 101px;"></div></div><div class="contract-trigger"></div></div></div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-xl-3">
<div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-primary border-primary">
<div class="widget-chat-wrapper-outer">
<div class="widget-chart-content pt-3 pl-3 pb-1">
<div class="widget-chart-flex">
<div class="widget-numbers">
<div class="widget-chart-flex">
<div class="fsize-4">
<small class="opacity-5">$</small>
<span>1283</span>
</div>
</div>
</div>
</div>
<h6 class="widget-subheading mb-0 opacity-5">sales Income</h6>
</div>
<div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
<div class="col-md-9">
<div id="dashboard-sparklines-2" style="min-height: 100px;"><div id="apexcharts0yc0momw" class="apexcharts-canvas apexcharts0yc0momw" style="width: 174px; height: 100px;"><svg id="SvgjsSvg1126" width="174" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1128" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1127"><clipPath id="gridRectMask0yc0momw"><rect id="SvgjsRect1132" width="177" height="103" x="-1.5" y="-1.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask0yc0momw"><rect id="SvgjsRect1133" width="182" height="108" x="-4" y="-4" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><rect id="SvgjsRect1131" width="1" height="100" x="0" y="0" rx="0" ry="0" fill="#b1b9c4" opacity="1" stroke-width="0" stroke-dasharray="0" class="apexcharts-xcrosshairs" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1140" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1141" class="apexcharts-xaxis-texts-g" transform="translate(0, 1.875)"></g></g><g id="SvgjsG1144" class="apexcharts-grid"><line id="SvgjsLine1146" x1="0" y1="100" x2="174" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1145" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1135" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1136" class="apexcharts-series series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="apexcharts-line-0" d="M3.625 72.25077081192188C6.1625 72.25077081192188 8.3375 45.52929085303186 10.875 45.52929085303186C13.4125 45.52929085303186 15.5875 61.973278520041106 18.125 61.973278520041106C20.6625 61.973278520041106 22.8375 53.751284686536486 25.375 53.751284686536486C27.9125 53.751284686536486 30.0875 51.69578622816033 32.625 51.69578622816033C35.1625 51.69578622816033 37.3375 55.80678314491264 39.875 55.80678314491264C42.4125 55.80678314491264 44.5875 36.27954779033916 47.125 36.27954779033916C49.6625 36.27954779033916 51.8375 44.50154162384378 54.375 44.50154162384378C56.9125 44.50154162384378 59.0875 59.917780061664956 61.625 59.917780061664956C64.1625 59.917780061664956 66.3375 4.419321685508734 68.875 4.419321685508734C71.4125 4.419321685508734 73.5875 52.723535457348405 76.125 52.723535457348405C78.6625 52.723535457348405 80.8375 60.94552929085303 83.375 60.94552929085303C85.9125 60.94552929085303 88.0875 75.33401849948612 90.625 75.33401849948612C93.1625 75.33401849948612 95.3375 42.44604316546762 97.875 42.44604316546762C100.4125 42.44604316546762 102.5875 37.30729701952723 105.125 37.30729701952723C107.6625 37.30729701952723 109.8375 33.19630010277493 112.375 33.19630010277493C114.9125 33.19630010277493 117.0875 68.13977389516958 119.625 68.13977389516958C122.1625 68.13977389516958 124.3375 64.02877697841726 126.875 64.02877697841726C129.4125 64.02877697841726 131.5875 44.50154162384378 134.125 44.50154162384378C136.6625 44.50154162384378 138.8375 72.25077081192188 141.375 72.25077081192188C143.9125 72.25077081192188 146.0875 57.8622816032888 148.625 57.8622816032888C151.1625 57.8622816032888 153.3375 64.02877697841726 155.875 64.02877697841726C158.4125 64.02877697841726 160.5875 80.47276464542651 163.125 80.47276464542651C165.6625 80.47276464542651 167.8375 47.58478931140802 170.375 47.58478931140802C170.375 47.58478931140802 170.375 47.58478931140802 170.375 47.58478931140802 " fill="none" fill-opacity="1" stroke="rgba(0,123,255,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask0yc0momw)" pathTo="M 3.625 72.25077081192188C 6.1625 72.25077081192188 8.3375 45.52929085303186 10.875 45.52929085303186C 13.4125 45.52929085303186 15.5875 61.973278520041106 18.125 61.973278520041106C 20.6625 61.973278520041106 22.8375 53.751284686536486 25.375 53.751284686536486C 27.9125 53.751284686536486 30.0875 51.69578622816033 32.625 51.69578622816033C 35.1625 51.69578622816033 37.3375 55.80678314491264 39.875 55.80678314491264C 42.4125 55.80678314491264 44.5875 36.27954779033916 47.125 36.27954779033916C 49.6625 36.27954779033916 51.8375 44.50154162384378 54.375 44.50154162384378C 56.9125 44.50154162384378 59.0875 59.917780061664956 61.625 59.917780061664956C 64.1625 59.917780061664956 66.3375 4.419321685508734 68.875 4.419321685508734C 71.4125 4.419321685508734 73.5875 52.723535457348405 76.125 52.723535457348405C 78.6625 52.723535457348405 80.8375 60.94552929085303 83.375 60.94552929085303C 85.9125 60.94552929085303 88.0875 75.33401849948612 90.625 75.33401849948612C 93.1625 75.33401849948612 95.3375 42.44604316546762 97.875 42.44604316546762C 100.4125 42.44604316546762 102.5875 37.30729701952723 105.125 37.30729701952723C 107.6625 37.30729701952723 109.8375 33.19630010277493 112.375 33.19630010277493C 114.9125 33.19630010277493 117.0875 68.13977389516958 119.625 68.13977389516958C 122.1625 68.13977389516958 124.3375 64.02877697841726 126.875 64.02877697841726C 129.4125 64.02877697841726 131.5875 44.50154162384378 134.125 44.50154162384378C 136.6625 44.50154162384378 138.8375 72.25077081192188 141.375 72.25077081192188C 143.9125 72.25077081192188 146.0875 57.8622816032888 148.625 57.8622816032888C 151.1625 57.8622816032888 153.3375 64.02877697841726 155.875 64.02877697841726C 158.4125 64.02877697841726 160.5875 80.47276464542651 163.125 80.47276464542651C 165.6625 80.47276464542651 167.8375 47.58478931140802 170.375 47.58478931140802" pathFrom="M -1 100L -1 100L 10.875 100L 18.125 100L 25.375 100L 32.625 100L 39.875 100L 47.125 100L 54.375 100L 61.625 100L 68.875 100L 76.125 100L 83.375 100L 90.625 100L 97.875 100L 105.125 100L 112.375 100L 119.625 100L 126.875 100L 134.125 100L 141.375 100L 148.625 100L 155.875 100L 163.125 100L 170.375 100"></path><g id="SvgjsG1137" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1152" r="0" cx="0" cy="0" class="apexcharts-marker w85h89rln no-pointer-events" stroke="#ffffff" fill="#007bff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1138" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1147" x1="0" y1="0" x2="174" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1148" x1="0" y1="0" x2="174" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1149" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1150" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1151" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1142" class="apexcharts-yaxis" rel="0" transform="translate(-35, 0)"><g id="SvgjsG1143" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light" style="left: 172.4px; top: 0px;"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 123, 255);"></span><div class="apexcharts-tooltip-text"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
<div class="resize-triggers"><div class="expand-trigger"><div style="width: 175px; height: 101px;"></div></div><div class="contract-trigger"></div></div></div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-xl-3">
<div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-warning border-warning">
<div class="widget-chat-wrapper-outer">
<div class="widget-chart-content pt-3 pl-3 pb-1">
<div class="widget-chart-flex">
<div class="widget-numbers">
<div class="widget-chart-flex">
<div class="fsize-4">
<small class="opacity-5">$</small>
<span>1286</span>
</div>
</div>
</div>
</div>
<h6 class="widget-subheading mb-0 opacity-5">last month sales</h6>
</div>
<div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
<div class="col-md-9">
<div id="dashboard-sparklines-3" style="min-height: 100px;"><div id="apexchartswmdyt21w" class="apexcharts-canvas apexchartswmdyt21w" style="width: 174px; height: 100px;"><svg id="SvgjsSvg1153" width="174" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1155" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1154"><clipPath id="gridRectMaskwmdyt21w"><rect id="SvgjsRect1159" width="177" height="103" x="-1.5" y="-1.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskwmdyt21w"><rect id="SvgjsRect1160" width="182" height="108" x="-4" y="-4" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><rect id="SvgjsRect1158" width="1" height="100" x="0" y="0" rx="0" ry="0" fill="#b1b9c4" opacity="1" stroke-width="0" stroke-dasharray="0" class="apexcharts-xcrosshairs" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1167" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1168" class="apexcharts-xaxis-texts-g" transform="translate(0, 1.875)"></g></g><g id="SvgjsG1171" class="apexcharts-grid"><line id="SvgjsLine1173" x1="0" y1="100" x2="174" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1172" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1162" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1163" class="apexcharts-series series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="apexcharts-line-0" d="M3.625 64.02877697841726C6.1625 64.02877697841726 8.3375 75.33401849948612 10.875 75.33401849948612C13.4125 75.33401849948612 15.5875 47.58478931140802 18.125 47.58478931140802C20.6625 47.58478931140802 22.8375 72.25077081192188 25.375 72.25077081192188C27.9125 72.25077081192188 30.0875 42.44604316546762 32.625 42.44604316546762C35.1625 42.44604316546762 37.3375 60.94552929085303 39.875 60.94552929085303C42.4125 60.94552929085303 44.5875 80.47276464542651 47.125 80.47276464542651C49.6625 80.47276464542651 51.8375 44.50154162384378 54.375 44.50154162384378C56.9125 44.50154162384378 59.0875 59.917780061664956 61.625 59.917780061664956C64.1625 59.917780061664956 66.3375 36.27954779033916 68.875 36.27954779033916C71.4125 36.27954779033916 73.5875 68.13977389516958 76.125 68.13977389516958C78.6625 68.13977389516958 80.8375 72.25077081192188 83.375 72.25077081192188C85.9125 72.25077081192188 88.0875 61.973278520041106 90.625 61.973278520041106C93.1625 61.973278520041106 95.3375 55.80678314491264 97.875 55.80678314491264C100.4125 55.80678314491264 102.5875 51.69578622816033 105.125 51.69578622816033C107.6625 51.69578622816033 109.8375 52.723535457348405 112.375 52.723535457348405C114.9125 52.723535457348405 117.0875 4.419321685508734 119.625 4.419321685508734C122.1625 4.419321685508734 124.3375 57.8622816032888 126.875 57.8622816032888C129.4125 57.8622816032888 131.5875 64.02877697841726 134.125 64.02877697841726C136.6625 64.02877697841726 138.8375 45.52929085303186 141.375 45.52929085303186C143.9125 45.52929085303186 146.0875 33.19630010277493 148.625 33.19630010277493C151.1625 33.19630010277493 153.3375 37.30729701952723 155.875 37.30729701952723C158.4125 37.30729701952723 160.5875 44.50154162384378 163.125 44.50154162384378C165.6625 44.50154162384378 167.8375 53.751284686536486 170.375 53.751284686536486C170.375 53.751284686536486 170.375 53.751284686536486 170.375 53.751284686536486 " fill="none" fill-opacity="1" stroke="rgba(247,185,36,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskwmdyt21w)" pathTo="M 3.625 64.02877697841726C 6.1625 64.02877697841726 8.3375 75.33401849948612 10.875 75.33401849948612C 13.4125 75.33401849948612 15.5875 47.58478931140802 18.125 47.58478931140802C 20.6625 47.58478931140802 22.8375 72.25077081192188 25.375 72.25077081192188C 27.9125 72.25077081192188 30.0875 42.44604316546762 32.625 42.44604316546762C 35.1625 42.44604316546762 37.3375 60.94552929085303 39.875 60.94552929085303C 42.4125 60.94552929085303 44.5875 80.47276464542651 47.125 80.47276464542651C 49.6625 80.47276464542651 51.8375 44.50154162384378 54.375 44.50154162384378C 56.9125 44.50154162384378 59.0875 59.917780061664956 61.625 59.917780061664956C 64.1625 59.917780061664956 66.3375 36.27954779033916 68.875 36.27954779033916C 71.4125 36.27954779033916 73.5875 68.13977389516958 76.125 68.13977389516958C 78.6625 68.13977389516958 80.8375 72.25077081192188 83.375 72.25077081192188C 85.9125 72.25077081192188 88.0875 61.973278520041106 90.625 61.973278520041106C 93.1625 61.973278520041106 95.3375 55.80678314491264 97.875 55.80678314491264C 100.4125 55.80678314491264 102.5875 51.69578622816033 105.125 51.69578622816033C 107.6625 51.69578622816033 109.8375 52.723535457348405 112.375 52.723535457348405C 114.9125 52.723535457348405 117.0875 4.419321685508734 119.625 4.419321685508734C 122.1625 4.419321685508734 124.3375 57.8622816032888 126.875 57.8622816032888C 129.4125 57.8622816032888 131.5875 64.02877697841726 134.125 64.02877697841726C 136.6625 64.02877697841726 138.8375 45.52929085303186 141.375 45.52929085303186C 143.9125 45.52929085303186 146.0875 33.19630010277493 148.625 33.19630010277493C 151.1625 33.19630010277493 153.3375 37.30729701952723 155.875 37.30729701952723C 158.4125 37.30729701952723 160.5875 44.50154162384378 163.125 44.50154162384378C 165.6625 44.50154162384378 167.8375 53.751284686536486 170.375 53.751284686536486" pathFrom="M -1 100L -1 100L 10.875 100L 18.125 100L 25.375 100L 32.625 100L 39.875 100L 47.125 100L 54.375 100L 61.625 100L 68.875 100L 76.125 100L 83.375 100L 90.625 100L 97.875 100L 105.125 100L 112.375 100L 119.625 100L 126.875 100L 134.125 100L 141.375 100L 148.625 100L 155.875 100L 163.125 100L 170.375 100"></path><g id="SvgjsG1164" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1179" r="0" cx="0" cy="0" class="apexcharts-marker ws9h90wk4 no-pointer-events" stroke="#ffffff" fill="#f7b924" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1165" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1174" x1="0" y1="0" x2="174" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1175" x1="0" y1="0" x2="174" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1176" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1177" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1178" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1169" class="apexcharts-yaxis" rel="0" transform="translate(-35, 0)"><g id="SvgjsG1170" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(247, 185, 36);"></span><div class="apexcharts-tooltip-text"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
<div class="resize-triggers"><div class="expand-trigger"><div style="width: 175px; height: 101px;"></div></div><div class="contract-trigger"></div></div></div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-xl-3">
<div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-danger border-danger">
<div class="widget-chat-wrapper-outer">
<div class="widget-chart-content pt-3 pl-3 pb-1">
<div class="widget-chart-flex">
<div class="widget-numbers">
<div class="widget-chart-flex">
<div class="fsize-4">
<small class="opacity-5">$</small>
<span>564</span>
</div>
</div>
</div>
</div>
<h6 class="widget-subheading mb-0 opacity-5">total revenue</h6>
</div>
<div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
<div class="col-md-9">
<div id="dashboard-sparklines-4" style="min-height: 100px;"><div id="apexchartsbok2w4gij" class="apexcharts-canvas apexchartsbok2w4gij" style="width: 174px; height: 100px;"><svg id="SvgjsSvg1180" width="174" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1182" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1181"><clipPath id="gridRectMaskbok2w4gij"><rect id="SvgjsRect1186" width="177" height="103" x="-1.5" y="-1.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskbok2w4gij"><rect id="SvgjsRect1187" width="182" height="108" x="-4" y="-4" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><rect id="SvgjsRect1185" width="1" height="100" x="0" y="0" rx="0" ry="0" fill="#b1b9c4" opacity="1" stroke-width="0" stroke-dasharray="0" class="apexcharts-xcrosshairs" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1194" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1195" class="apexcharts-xaxis-texts-g" transform="translate(0, 1.875)"></g></g><g id="SvgjsG1198" class="apexcharts-grid"><line id="SvgjsLine1200" x1="0" y1="100" x2="174" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1199" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1189" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1190" class="apexcharts-series series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="apexcharts-line-0" d="M3.625 45.52929085303186C6.1625 45.52929085303186 8.3375 68.13977389516958 10.875 68.13977389516958C13.4125 68.13977389516958 15.5875 42.44604316546762 18.125 42.44604316546762C20.6625 42.44604316546762 22.8375 61.973278520041106 25.375 61.973278520041106C27.9125 61.973278520041106 30.0875 53.751284686536486 32.625 53.751284686536486C35.1625 53.751284686536486 37.3375 55.80678314491264 39.875 55.80678314491264C42.4125 55.80678314491264 44.5875 52.723535457348405 47.125 52.723535457348405C49.6625 52.723535457348405 51.8375 36.27954779033916 54.375 36.27954779033916C56.9125 36.27954779033916 59.0875 72.25077081192188 61.625 72.25077081192188C64.1625 72.25077081192188 66.3375 33.19630010277493 68.875 33.19630010277493C71.4125 33.19630010277493 73.5875 51.69578622816033 76.125 51.69578622816033C78.6625 51.69578622816033 80.8375 80.47276464542651 83.375 80.47276464542651C85.9125 80.47276464542651 88.0875 59.917780061664956 90.625 59.917780061664956C93.1625 59.917780061664956 95.3375 64.02877697841726 97.875 64.02877697841726C100.4125 64.02877697841726 102.5875 72.25077081192188 105.125 72.25077081192188C107.6625 72.25077081192188 109.8375 4.419321685508734 112.375 4.419321685508734C114.9125 4.419321685508734 117.0875 57.8622816032888 119.625 57.8622816032888C122.1625 57.8622816032888 124.3375 64.02877697841726 126.875 64.02877697841726C129.4125 64.02877697841726 131.5875 75.33401849948612 134.125 75.33401849948612C136.6625 75.33401849948612 138.8375 44.50154162384378 141.375 44.50154162384378C143.9125 44.50154162384378 146.0875 47.58478931140802 148.625 47.58478931140802C151.1625 47.58478931140802 153.3375 60.94552929085303 155.875 60.94552929085303C158.4125 60.94552929085303 160.5875 37.30729701952723 163.125 37.30729701952723C165.6625 37.30729701952723 167.8375 44.50154162384378 170.375 44.50154162384378C170.375 44.50154162384378 170.375 44.50154162384378 170.375 44.50154162384378 " fill="none" fill-opacity="1" stroke="rgba(217,37,80,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskbok2w4gij)" pathTo="M 3.625 45.52929085303186C 6.1625 45.52929085303186 8.3375 68.13977389516958 10.875 68.13977389516958C 13.4125 68.13977389516958 15.5875 42.44604316546762 18.125 42.44604316546762C 20.6625 42.44604316546762 22.8375 61.973278520041106 25.375 61.973278520041106C 27.9125 61.973278520041106 30.0875 53.751284686536486 32.625 53.751284686536486C 35.1625 53.751284686536486 37.3375 55.80678314491264 39.875 55.80678314491264C 42.4125 55.80678314491264 44.5875 52.723535457348405 47.125 52.723535457348405C 49.6625 52.723535457348405 51.8375 36.27954779033916 54.375 36.27954779033916C 56.9125 36.27954779033916 59.0875 72.25077081192188 61.625 72.25077081192188C 64.1625 72.25077081192188 66.3375 33.19630010277493 68.875 33.19630010277493C 71.4125 33.19630010277493 73.5875 51.69578622816033 76.125 51.69578622816033C 78.6625 51.69578622816033 80.8375 80.47276464542651 83.375 80.47276464542651C 85.9125 80.47276464542651 88.0875 59.917780061664956 90.625 59.917780061664956C 93.1625 59.917780061664956 95.3375 64.02877697841726 97.875 64.02877697841726C 100.4125 64.02877697841726 102.5875 72.25077081192188 105.125 72.25077081192188C 107.6625 72.25077081192188 109.8375 4.419321685508734 112.375 4.419321685508734C 114.9125 4.419321685508734 117.0875 57.8622816032888 119.625 57.8622816032888C 122.1625 57.8622816032888 124.3375 64.02877697841726 126.875 64.02877697841726C 129.4125 64.02877697841726 131.5875 75.33401849948612 134.125 75.33401849948612C 136.6625 75.33401849948612 138.8375 44.50154162384378 141.375 44.50154162384378C 143.9125 44.50154162384378 146.0875 47.58478931140802 148.625 47.58478931140802C 151.1625 47.58478931140802 153.3375 60.94552929085303 155.875 60.94552929085303C 158.4125 60.94552929085303 160.5875 37.30729701952723 163.125 37.30729701952723C 165.6625 37.30729701952723 167.8375 44.50154162384378 170.375 44.50154162384378" pathFrom="M -1 100L -1 100L 10.875 100L 18.125 100L 25.375 100L 32.625 100L 39.875 100L 47.125 100L 54.375 100L 61.625 100L 68.875 100L 76.125 100L 83.375 100L 90.625 100L 97.875 100L 105.125 100L 112.375 100L 119.625 100L 126.875 100L 134.125 100L 141.375 100L 148.625 100L 155.875 100L 163.125 100L 170.375 100"></path><g id="SvgjsG1191" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1206" r="0" cx="0" cy="0" class="apexcharts-marker wj86tjnas no-pointer-events" stroke="#ffffff" fill="#d92550" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1192" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1201" x1="0" y1="0" x2="174" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1202" x1="0" y1="0" x2="174" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1203" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1204" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1205" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1196" class="apexcharts-yaxis" rel="0" transform="translate(-35, 0)"><g id="SvgjsG1197" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(217, 37, 80);"></span><div class="apexcharts-tooltip-text"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
<div class="resize-triggers"><div class="expand-trigger"><div style="width: 175px; height: 101px;"></div></div><div class="contract-trigger"></div></div></div>
</div>
</div>
</div>
</div>
</div>
<div class="card mb-3">
<div class="card-header-tab card-header">
<div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Easy Dynamic Tables
</div>
<div class="btn-actions-pane-right actions-icon-btn">
<div class="btn-group dropdown">
<button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
<i class="pe-7s-menu btn-icon-wrapper"></i>
</button>
<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
<h6 tabindex="-1" class="dropdown-header">Header</h6>
<button type="button" tabindex="0" class="dropdown-item">
<i class="dropdown-icon lnr-inbox"> </i><span>Menus</span>
</button>
<button type="button" tabindex="0" class="dropdown-item">
<i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span>
</button>
<button type="button" tabindex="0" class="dropdown-item">
<i class="dropdown-icon lnr-book"> </i><span>Actions</span>
</button>
<div tabindex="-1" class="dropdown-divider"></div>
<div class="p-3 text-right">
<button class="mr-2 btn-shadow btn-sm btn btn-link">View Details</button>
<button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
</div>
</div>
</div>
</div>
</div>
<div class="card-body">
<div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example_length"><label>Show <select name="example_length" aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example"></label></div></div></div><div class="row"><div class="col-sm-12"><table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered dataTable dtr-inline" role="grid" aria-describedby="example_info">
<thead>
<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 182.4px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 281.4px;" aria-label="Position: activate to sort column ascending">Position</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 132.4px;" aria-label="Office: activate to sort column ascending">Office</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 70.4px;" aria-label="Age: activate to sort column ascending">Age</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 136.4px;" aria-label="Start date: activate to sort column ascending">Start date</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 103.2px;" aria-label="Salary: activate to sort column ascending">Salary</th></tr>
</thead>
<tbody>

























































<tr role="row" class="odd">
<td class="sorting_1 dtr-control">Airi Satou</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>33</td>
<td>2008/11/28</td>
<td>$162,700</td>
</tr><tr role="row" class="even">
<td class="sorting_1 dtr-control">Angelica Ramos</td>
<td>Chief Executive Officer (CEO)</td>
<td>London</td>
<td>47</td>
<td>2009/10/09</td>
<td>$1,200,000</td>
</tr><tr role="row" class="odd">
<td class="sorting_1 dtr-control">Ashton Cox</td>
<td>Junior Technical Author</td>
<td>San Francisco</td>
<td>66</td>
<td>2009/01/12</td>
<td>$86,000</td>
</tr><tr role="row" class="even">
<td class="sorting_1 dtr-control">Bradley Greer</td>
<td>Software Engineer</td>
<td>London</td>
<td>41</td>
<td>2012/10/13</td>
<td>$132,000</td>
</tr><tr role="row" class="odd">
<td class="sorting_1 dtr-control">Brenden Wagner</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>28</td>
<td>2011/06/07</td>
<td>$206,850</td>
</tr><tr role="row" class="even">
<td class="sorting_1 dtr-control">Brielle Williamson</td>
<td>Integration Specialist</td>
<td>New York</td>
<td>61</td>
<td>2012/12/02</td>
<td>$372,000</td>
</tr><tr role="row" class="odd">
<td class="sorting_1 dtr-control">Bruno Nash</td>
<td>Software Engineer</td>
<td>London</td>
<td>38</td>
<td>2011/05/03</td>
<td>$163,500</td>
</tr><tr role="row" class="even">
<td class="sorting_1 dtr-control">Caesar Vance</td>
<td>Pre-Sales Support</td>
<td>New York</td>
<td>21</td>
<td>2011/12/12</td>
<td>$106,450</td>
</tr><tr role="row" class="odd">
<td class="sorting_1 dtr-control">Cara Stevens</td>
<td>Sales Assistant</td>
<td>New York</td>
<td>46</td>
<td>2011/12/06</td>
<td>$145,600</td>
</tr><tr role="row" class="even">
<td class="sorting_1 dtr-control">Cedric Kelly</td>
<td>Senior Javascript Developer</td>
<td>Edinburgh</td>
<td>22</td>
<td>2012/03/29</td>
<td>$433,060</td>
</tr></tbody>
<tfoot>
<tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
</tfoot>
</table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example_previous"><a href="#" aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example_next"><a href="#" aria-controls="example" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
</div>
</div>
<div class="row">
<div class="col-sm-12 col-lg-6">
<div class="card-hover-shadow-2x mb-3 card">
<div class="card-header-tab card-header">
<div class="card-header-title font-size-lg text-capitalize font-weight-normal">
<i class="header-icon lnr-database icon-gradient bg-malibu-beach"> </i>Tasks List
</div>
<div class="btn-actions-pane-right text-capitalize actions-icon-btn">
<div class="btn-group dropdown">
<button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
<i class="pe-7s-menu btn-icon-wrapper"></i>
</button>
<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
<h6 tabindex="-1" class="dropdown-header">Header</h6>
<button type="button" tabindex="0" class="dropdown-item">
<i class="dropdown-icon lnr-inbox"> </i><span>Menus</span>
</button>
<button type="button" tabindex="0" class="dropdown-item">
<i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span>
</button>
<button type="button" tabindex="0" class="dropdown-item">
<i class="dropdown-icon lnr-book"> </i><span>Actions</span>
</button>
<div tabindex="-1" class="dropdown-divider"></div>
<div class="p-3 text-right">
<button class="mr-2 btn-shadow btn-sm btn btn-link">View Details</button>
<button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
</div>
</div>
</div>
</div>
</div>
<div class="scroll-area-lg">
<div class="scrollbar-container ps ps--active-y">
<div class="p-2">
<ul class="todo-list-wrapper list-group list-group-flush">
<li class="list-group-item">
<div class="todo-indicator bg-warning"></div>
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left mr-2">
<div class="custom-checkbox custom-control">
<input type="checkbox" id="exampleCustomCheckbox12" class="custom-control-input">
<label class="custom-control-label" for="exampleCustomCheckbox12">&nbsp;</label>
</div>
</div>
<div class="widget-content-left">
<div class="widget-heading">Wash the car
<div class="badge badge-danger ml-2">Rejected</div>
</div>
<div class="widget-subheading"><i>Written by Bob</i></div>
</div>
<div class="widget-content-right widget-content-actions">
<button class="border-0 btn-transition btn btn-outline-success">
<i class="fa fa-check"></i>
</button>
<button class="border-0 btn-transition btn btn-outline-danger">
<i class="fa fa-trash-alt"></i>
</button>
</div>
</div>
</div>
</li>
<li class="list-group-item">
<div class="todo-indicator bg-focus"></div>
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left mr-2">
<div class="custom-checkbox custom-control">
<input type="checkbox" id="exampleCustomCheckbox1" class="custom-control-input">
<label class="custom-control-label" for="exampleCustomCheckbox1">&nbsp;</label>
</div>
</div>
<div class="widget-content-left">
<div class="widget-heading">Task with dropdown menu</div>
<div class="widget-subheading">
<div>By Johnny
<div class="badge badge-pill badge-info ml-2">NEW</div>
</div>
</div>
</div>
<div class="widget-content-right widget-content-actions">
<div class="d-inline-block dropdown">
<button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="border-0 btn-transition btn btn-link">
<i class="fa fa-ellipsis-h"></i>
</button>
<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
<h6 tabindex="-1" class="dropdown-header">Header</h6>
<button type="button" disabled="" tabindex="-1" class="disabled dropdown-item">Action</button>
<button type="button" tabindex="0" class="dropdown-item">Another Action</button>
<div tabindex="-1" class="dropdown-divider"></div>
<button type="button" tabindex="0" class="dropdown-item">Another Action</button>
</div>
</div>
</div>
</div>
</div>
</li>
<li class="list-group-item">
<div class="todo-indicator bg-primary"></div>
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left mr-2">
<div class="custom-checkbox custom-control">
<input type="checkbox" id="exampleCustomCheckbox4" class="custom-control-input">
<label class="custom-control-label" for="exampleCustomCheckbox4">&nbsp;</label>
</div>
</div>
<div class="widget-content-left flex2">
<div class="widget-heading">Badge on the right task</div>
<div class="widget-subheading">This task has show on hover actions!</div>
</div>
<div class="widget-content-right widget-content-actions">
<button class="border-0 btn-transition btn btn-outline-success">
<i class="fa fa-check"></i>
</button>
</div>
<div class="widget-content-right ml-3">
<div class="badge badge-pill badge-success">Latest Task</div>
</div>
</div>
</div>
</li>
<li class="list-group-item">
<div class="todo-indicator bg-info"></div>
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left mr-2">
<div class="custom-checkbox custom-control">
<input type="checkbox" id="exampleCustomCheckbox2" class="custom-control-input">
<label class="custom-control-label" for="exampleCustomCheckbox2">&nbsp;</label>
</div>
</div>
<div class="widget-content-left mr-3">
<div class="widget-content-left">
<img width="42" class="rounded" src="assets/images/avatars/1.jpg" alt="">
</div>
</div>
<div class="widget-content-left">
<div class="widget-heading">Go grocery shopping</div>
<div class="widget-subheading">A short description for this todo item</div>
</div>
<div class="widget-content-right widget-content-actions">
<button class="border-0 btn-transition btn btn-outline-success">
<i class="fa fa-check"></i>
</button>
<button class="border-0 btn-transition btn btn-outline-danger">
<i class="fa fa-trash-alt"></i>
</button>
</div>
</div>
</div>
</li>
<li class="list-group-item">
<div class="todo-indicator bg-success"></div>
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left mr-2">
<div class="custom-checkbox custom-control">
<input type="checkbox" id="exampleCustomCheckbox3" class="custom-control-input">
<label class="custom-control-label" for="exampleCustomCheckbox3">&nbsp;</label>
</div>
</div>
<div class="widget-content-left flex2">
<div class="widget-heading">Development Task</div>
<div class="widget-subheading">Finish React ToDo List App</div>
</div>
<div class="widget-content-right">
<div class="badge badge-warning mr-2">69</div>
</div>
<div class="widget-content-right">
<button class="border-0 btn-transition btn btn-outline-success">
<i class="fa fa-check"></i>
</button>
<button class="border-0 btn-transition btn btn-outline-danger">
<i class="fa fa-trash-alt"></i>
</button>
</div>
</div>
</div>
</li>
<li class="list-group-item">
<div class="todo-indicator bg-warning"></div>
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left mr-2">
<div class="custom-checkbox custom-control">
<input type="checkbox" id="exampleCustomCheckbox12" class="custom-control-input">
<label class="custom-control-label" for="exampleCustomCheckbox12">&nbsp;</label>
</div>
</div>
<div class="widget-content-left">
<div class="widget-heading">Wash the car
<div class="badge badge-danger ml-2">Rejected</div>
</div>
<div class="widget-subheading"><i>Written by Bob</i></div>
</div>
<div class="widget-content-right widget-content-actions">
<button class="border-0 btn-transition btn btn-outline-success">
<i class="fa fa-check"></i>
</button>
<button class="border-0 btn-transition btn btn-outline-danger">
<i class="fa fa-trash-alt"></i>
</button>
</div>
</div>
</div>
</li>
<li class="list-group-item">
<div class="todo-indicator bg-focus"></div>
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left mr-2">
<div class="custom-checkbox custom-control">
<input type="checkbox" id="exampleCustomCheckbox1" class="custom-control-input">
<label class="custom-control-label" for="exampleCustomCheckbox1">&nbsp;</label>
</div>
</div>
<div class="widget-content-left">
<div class="widget-heading">Task with dropdown menu</div>
<div class="widget-subheading">
<div>By Johnny
<div class="badge badge-pill badge-info ml-2">NEW</div>
</div>
</div>
</div>
<div class="widget-content-right widget-content-actions">
<div class="d-inline-block dropdown">
<button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="border-0 btn-transition btn btn-link">
<i class="fa fa-ellipsis-h"></i>
</button>
<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
<h6 tabindex="-1" class="dropdown-header">Header</h6>
<button type="button" disabled="" tabindex="-1" class="disabled dropdown-item">Action</button>
<button type="button" tabindex="0" class="dropdown-item">Another Action</button>
<div tabindex="-1" class="dropdown-divider"></div>
<button type="button" tabindex="0" class="dropdown-item">Another Action</button>
</div>
</div>
</div>
</div>
</div>
</li>
<li class="list-group-item">
<div class="todo-indicator bg-primary"></div>
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left mr-2">
<div class="custom-checkbox custom-control">
<input type="checkbox" id="exampleCustomCheckbox4" class="custom-control-input">
<label class="custom-control-label" for="exampleCustomCheckbox4">&nbsp;</label>
</div>
</div>
<div class="widget-content-left flex2">
<div class="widget-heading">Badge on the right task</div>
<div class="widget-subheading">This task has show on hover actions!</div>
</div>
<div class="widget-content-right widget-content-actions">
<button class="border-0 btn-transition btn btn-outline-success">
<i class="fa fa-check"></i>
</button>
</div>
<div class="widget-content-right ml-3">
<div class="badge badge-pill badge-success">Latest Task</div>
</div>
</div>
</div>
</li>
<li class="list-group-item">
<div class="todo-indicator bg-info"></div>
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left mr-2">
<div class="custom-checkbox custom-control">
<input type="checkbox" id="exampleCustomCheckbox2" class="custom-control-input">
<label class="custom-control-label" for="exampleCustomCheckbox2">&nbsp;</label>
</div>
</div>
<div class="widget-content-left mr-3">
<div class="widget-content-left">
<img width="42" class="rounded" src="assets/images/avatars/1.jpg" alt="">
</div>
</div>
<div class="widget-content-left">
<div class="widget-heading">Go grocery shopping</div>
<div class="widget-subheading">A short description for this todo item</div>
</div>
<div class="widget-content-right widget-content-actions">
<button class="border-0 btn-transition btn btn-outline-success">
<i class="fa fa-check"></i>
</button>
<button class="border-0 btn-transition btn btn-outline-danger">
<i class="fa fa-trash-alt"></i>
</button>
</div>
</div>
</div>
</li>
<li class="list-group-item">
<div class="todo-indicator bg-success"></div>
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left mr-2">
<div class="custom-checkbox custom-control">
<input type="checkbox" id="exampleCustomCheckbox3" class="custom-control-input">
<label class="custom-control-label" for="exampleCustomCheckbox3">&nbsp;</label>
</div>
</div>
<div class="widget-content-left flex2">
<div class="widget-heading">Development Task</div>
<div class="widget-subheading">Finish React ToDo List App</div>
</div>
<div class="widget-content-right">
<div class="badge badge-warning mr-2">69</div>
</div>
<div class="widget-content-right">
<button class="border-0 btn-transition btn btn-outline-success">
<i class="fa fa-check"></i>
</button>
<button class="border-0 btn-transition btn btn-outline-danger">
<i class="fa fa-trash-alt"></i>
</button>
</div>
</div>
</div>
</li>
</ul>
</div>
<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 400px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 232px;"></div></div></div>
</div>
<div class="d-block text-right card-footer">
<button class="mr-2 btn btn-link btn-sm">Cancel</button>
<button class="btn btn-primary">Add Task</button>
</div>
</div>
</div>
<div class="col-sm-12 col-lg-6">
<div class="card-hover-shadow-2x mb-3 card">
<div class="card-header-tab card-header">
<div class="card-header-title font-size-lg text-capitalize font-weight-normal">
<i class="header-icon lnr-printer icon-gradient bg-ripe-malin"> </i>Chat Box
</div>
<div class="btn-actions-pane-right text-capitalize actions-icon-btn">
<div class="btn-group dropdown">
<button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
<i class="pe-7s-menu btn-icon-wrapper"></i>
</button>
<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
<h6 tabindex="-1" class="dropdown-header">Header</h6>
<button type="button" tabindex="0" class="dropdown-item">
<i class="dropdown-icon lnr-inbox"> </i><span>Menus</span>
</button>
<button type="button" tabindex="0" class="dropdown-item">
<i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span>
</button>
<button type="button" tabindex="0" class="dropdown-item">
<i class="dropdown-icon lnr-book"> </i><span>Actions</span>
</button>
<div tabindex="-1" class="dropdown-divider"></div>
<div class="p-3 text-right">
<button class="mr-2 btn-shadow btn-sm btn btn-link">View Details</button>
<button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
</div>
</div>
</div>
</div>
</div>
<div class="scroll-area-lg">
<div class="scrollbar-container ps ps--active-y">
<div class="p-2">
<div class="chat-wrapper p-1">
<div class="chat-box-wrapper">
<div>
<div class="avatar-icon-wrapper mr-1">
<div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg">
</div>
<div class="avatar-icon avatar-icon-lg rounded">
<img src="assets/images/avatars/2.jpg" alt="">
</div>
</div>
</div>
<div>
<div class="chat-box">But I must explain to you how all this mistaken
idea of denouncing pleasure and praising pain was born and I will
give you a complete account of the system.</div>
<small class="opacity-6">
<i class="fa fa-calendar-alt mr-1"></i>
11:01 AM | Yesterday
</small>
</div>
</div>
<div class="float-right">
<div class="chat-box-wrapper chat-box-wrapper-right">
<div>
<div class="chat-box">Expound the actual teachings of the great
explorer of the truth, the master-builder of human happiness.
</div>
<small class="opacity-6">
<i class="fa fa-calendar-alt mr-1"></i>
11:01 AM | Yesterday
</small>
</div>
<div>
<div class="avatar-icon-wrapper ml-1">
<div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg">
</div>
<div class="avatar-icon avatar-icon-lg rounded">
<img src="assets/images/avatars/3.jpg" alt="">
</div>
</div>
</div>
</div>
</div>
<div class="chat-box-wrapper">
<div>
<div class="avatar-icon-wrapper mr-1">
<div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg">
</div>
<div class="avatar-icon avatar-icon-lg rounded">
<img src="assets/images/avatars/2.jpg" alt="">
</div>
</div>
</div>
<div>
<div class="chat-box">But I must explain to you how all this mistaken
idea of denouncing pleasure and praising pain was born and I will
give you a complete account of the system.</div>
<small class="opacity-6">
<i class="fa fa-calendar-alt mr-1"></i>
11:01 AM | Yesterday
</small>
</div>
</div>
<div class="float-right">
<div class="chat-box-wrapper chat-box-wrapper-right">
<div>
<div class="chat-box">Denouncing pleasure and praising pain was born
and I will give you a complete account.</div>
<small class="opacity-6">
<i class="fa fa-calendar-alt mr-1"></i>
11:01 AM | Yesterday
</small>
</div>
<div>
<div class="avatar-icon-wrapper ml-1">
<div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg">
</div>
<div class="avatar-icon avatar-icon-lg rounded">
<img src="assets/images/avatars/2.jpg" alt="">
</div>
</div>
</div>
</div>
</div>
<div class="float-right">
<div class="chat-box-wrapper chat-box-wrapper-right">
<div>
<div class="chat-box">The master-builder of human happiness.</div>
<small class="opacity-6">
<i class="fa fa-calendar-alt mr-1"></i>
11:01 AM | Yesterday
</small>
</div>
<div>
<div class="avatar-icon-wrapper ml-1">
<div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg">
</div>
<div class="avatar-icon avatar-icon-lg rounded">
<img src="assets/images/avatars/2.jpg" alt="">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 400px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 262px;"></div></div></div>
</div>
<div class="card-footer">
<input placeholder="Write here and hit enter to send..." type="text" class="form-control-sm form-control">
</div>
</div>
</div>
</div>
<div class="card no-shadow bg-transparent no-border rm-borders mb-3">
<div class="card">
<div class="no-gutters row">
<div class="col-md-12 col-lg-4">
<ul class="list-group list-group-flush">
<li class="bg-transparent list-group-item">
<div class="widget-content p-0">
<div class="widget-content-outer">
<div class="widget-content-wrapper">
<div class="widget-content-left">
<div class="widget-heading">Total Orders</div>
<div class="widget-subheading">Last year expenses</div>
</div>
<div class="widget-content-right">
<div class="widget-numbers text-success">1896</div>
</div>
</div>
</div>
</div>
</li>
<li class="bg-transparent list-group-item">
<div class="widget-content p-0">
<div class="widget-content-outer">
<div class="widget-content-wrapper">
<div class="widget-content-left">
<div class="widget-heading">Clients</div>
<div class="widget-subheading">Total Clients Profit</div>
</div>
<div class="widget-content-right">
<div class="widget-numbers text-primary">$12.6k</div>
</div>
</div>
</div>
</div>
</li>
</ul>
</div>
<div class="col-md-12 col-lg-4">
<ul class="list-group list-group-flush">
<li class="bg-transparent list-group-item">
<div class="widget-content p-0">
<div class="widget-content-outer">
<div class="widget-content-wrapper">
<div class="widget-content-left">
<div class="widget-heading">Followers</div>
<div class="widget-subheading">People Interested</div>
</div>
<div class="widget-content-right">
<div class="widget-numbers text-danger">45,9%</div>
</div>
</div>
</div>
</div>
</li>
<li class="bg-transparent list-group-item">
<div class="widget-content p-0">
<div class="widget-content-outer">
<div class="widget-content-wrapper">
<div class="widget-content-left">
<div class="widget-heading">Products Sold</div>
<div class="widget-subheading">Total revenue streams</div>
</div>
<div class="widget-content-right">
<div class="widget-numbers text-warning">$3M</div>
</div>
</div>
</div>
</div>
</li>
</ul>
</div>
<div class="col-md-12 col-lg-4">
<ul class="list-group list-group-flush">
<li class="bg-transparent list-group-item">
<div class="widget-content p-0">
<div class="widget-content-outer">
<div class="widget-content-wrapper">
<div class="widget-content-left">
<div class="widget-heading">Total Orders</div>
<div class="widget-subheading">Last year expenses</div>
</div>
<div class="widget-content-right">
<div class="widget-numbers text-success">1896</div>
</div>
</div>
</div>
</div>
</li>
<li class="bg-transparent list-group-item">
<div class="widget-content p-0">
<div class="widget-content-outer">
<div class="widget-content-wrapper">
<div class="widget-content-left">
<div class="widget-heading">Clients</div>
<div class="widget-subheading">Total Clients Profit</div>
</div>
<div class="widget-content-right">
<div class="widget-numbers text-primary">$12.6k</div>
</div>
</div>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="app-wrapper-footer">
<div class="app-footer">
<div class="app-footer__inner">
<div class="app-footer-left">
<div class="footer-dots">
<div class="dropdown">
<a aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dot-btn-wrapper">
<i class="dot-btn-icon lnr-bullhorn icon-gradient bg-mean-fruit"></i>
<div class="badge badge-dot badge-abs badge-dot-sm badge-danger">Notifications</div>
</a>
<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu">
<div class="dropdown-menu-header mb-0">
<div class="dropdown-menu-header-inner bg-deep-blue">
<div class="menu-header-image opacity-1" style="background-image: url('assets/images/dropdown-header/city3.jpg');"></div>
<div class="menu-header-content text-dark">
<h5 class="menu-header-title">Notifications</h5>
<h6 class="menu-header-subtitle">You have <b>21</b> unread messages</h6>
</div>
</div>
</div>
<ul class="tabs-animated-shadow tabs-animated nav nav-justified tabs-shadow-bordered p-3">
<li class="nav-item">
<a role="tab" class="nav-link active" data-toggle="tab" href="#tab-messages-header1">
<span>Messages</span>
</a>
</li>
<li class="nav-item">
<a role="tab" class="nav-link" data-toggle="tab" href="#tab-events-header1">
<span>Events</span>
</a>
</li>
<li class="nav-item">
<a role="tab" class="nav-link" data-toggle="tab" href="#tab-errors-header1">
<span>System Errors</span>
</a>
</li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="tab-messages-header1" role="tabpanel">
<div class="scroll-area-sm">
<div class="scrollbar-container ps">
<div class="p-3">
<div class="notifications-box">
<div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
<div class="vertical-timeline-item dot-danger vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">All Hands Meeting</h4>
<span class="vertical-timeline-element-date"></span>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-warning vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<p>Yet another one, at
<span class="text-success">15:00 PM</span>
</p>
<span class="vertical-timeline-element-date"></span>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-success vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">Build the production release
<span class="badge badge-danger ml-2">NEW</span>
</h4>
<span class="vertical-timeline-element-date"></span>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-primary vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">Something not important
<div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="assets/images/avatars/1.jpg" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="assets/images/avatars/2.jpg" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="assets/images/avatars/3.jpg" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="assets/images/avatars/4.jpg" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="assets/images/avatars/5.jpg" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="assets/images/avatars/9.jpg" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="assets/images/avatars/7.jpg" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="assets/images/avatars/8.jpg" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
<div class="avatar-icon"><i>+</i></div>
</div>
</div>
</h4>
<span class="vertical-timeline-element-date"></span>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-info vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">This dot has an info state</h4>
<span class="vertical-timeline-element-date"></span>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-danger vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">All Hands Meeting</h4>
<span class="vertical-timeline-element-date"></span>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-warning vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<p>Yet another one, at
<span class="text-success">15:00 PM</span>
</p>
<span class="vertical-timeline-element-date"></span>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-success vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">Build the production release
<span class="badge badge-danger ml-2">NEW</span>
</h4>
<span class="vertical-timeline-element-date"></span>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-dark vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">This dot has a dark state</h4>
<span class="vertical-timeline-element-date"></span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
</div>
</div>
<div class="tab-pane" id="tab-events-header1" role="tabpanel">
<div class="scroll-area-sm">
<div class="scrollbar-container ps">
<div class="p-3">
<div class="vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
<div class="vertical-timeline-item vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in">
<i class="badge badge-dot badge-dot-xl badge-success"></i>
</span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">All Hands Meeting</h4>
<p>Lorem ipsum dolor sic amet, today at
<a href="javascript:void(0);">12:00 PM</a>
</p>
<span class="vertical-timeline-element-date"></span>
</div>
</div>
</div>
<div class="vertical-timeline-item vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in">
<i class="badge badge-dot badge-dot-xl badge-warning"></i>
</span>
<div class="vertical-timeline-element-content bounce-in">
<p>Another meeting today, at
<b class="text-danger">12:00 PM</b>
</p>
<p>Yet another one, at <span class="text-success">15:00 PM</span></p>
<span class="vertical-timeline-element-date"></span>
</div>
</div>
</div>
<div class="vertical-timeline-item vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in">
<i class="badge badge-dot badge-dot-xl badge-danger"></i>
</span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">Build the production release</h4>
<p>Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
incididunt ut labore et dolore magna elit enim at
minim veniam quis nostrud
</p>
<span class="vertical-timeline-element-date"></span>
</div>
</div>
</div>
<div class="vertical-timeline-item vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in">
<i class="badge badge-dot badge-dot-xl badge-primary"></i>
</span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title text-success">Something not important</h4>
<p>Lorem ipsum dolor sit amit,consectetur elit enim at
minim veniam quis nostrud</p>
<span class="vertical-timeline-element-date"></span>
</div>
</div>
</div>
<div class="vertical-timeline-item vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in">
<i class="badge badge-dot badge-dot-xl badge-success"></i>
</span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">All Hands Meeting</h4>
<p>Lorem ipsum dolor sic amet, today at
<a href="javascript:void(0);">12:00 PM</a>
</p>
<span class="vertical-timeline-element-date"></span>
</div>
</div>
</div>
<div class="vertical-timeline-item vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in">
<i class="badge badge-dot badge-dot-xl badge-warning"></i>
</span>
<div class="vertical-timeline-element-content bounce-in">
<p>Another meeting today, at
<b class="text-danger">12:00 PM</b>
</p>
<p>Yet another one, at <span class="text-success">15:00 PM</span></p>
<span class="vertical-timeline-element-date"></span>
</div>
</div>
</div>
<div class="vertical-timeline-item vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in">
<i class="badge badge-dot badge-dot-xl badge-danger"></i>
</span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">Build the production release</h4>
<p>Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
incididunt ut labore et dolore magna elit enim at
minim veniam quis nostrud
</p>
<span class="vertical-timeline-element-date"></span>
</div>
</div>
</div>
<div class="vertical-timeline-item vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in">
<i class="badge badge-dot badge-dot-xl badge-primary"></i>
</span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title text-success">Something not important</h4>
<p>Lorem ipsum dolor sit amit,consectetur elit enim at
minim veniam quis nostrud
</p>
<span class="vertical-timeline-element-date"></span>
</div>
</div>
</div>
</div>
</div>
<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
</div>
</div>
<div class="tab-pane" id="tab-errors-header1" role="tabpanel">
<div class="scroll-area-sm">
<div class="scrollbar-container ps">
<div class="no-results pt-3 pb-0">
<div class="swal2-icon swal2-success swal2-animate-success-icon">
<div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
<span class="swal2-success-line-tip"></span>
<span class="swal2-success-line-long"></span>
<div class="swal2-success-ring"></div>
<div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
<div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
</div>
<div class="results-subtitle">All caught up!</div>
<div class="results-title">There are no system errors!</div>
</div>
<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
</div>
</div>
</div>
<ul class="nav flex-column">
<li class="nav-item-divider nav-item"></li>
<li class="nav-item-btn text-center nav-item">
<button class="btn-shadow btn-wide btn-pill btn btn-focus btn-sm">View Latest Changes</button>
</li>
</ul>
</div>
</div>
<div class="dots-separator"></div>
<div class="dropdown">
<a class="dot-btn-wrapper" aria-haspopup="true" data-toggle="dropdown" aria-expanded="false">
<i class="dot-btn-icon lnr-earth icon-gradient bg-happy-itmeo"></i>
</a>
<div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu">
<div class="dropdown-menu-header">
<div class="dropdown-menu-header-inner pt-4 pb-4 bg-focus">
<div class="menu-header-image opacity-05" style="background-image: url('assets/images/dropdown-header/city2.jpg');"></div>
<div class="menu-header-content text-center text-white">
<h6 class="menu-header-subtitle mt-0"> Choose Language</h6>
</div>
</div>
</div>
<h6 tabindex="-1" class="dropdown-header"> Popular Languages</h6>
<button type="button" tabindex="0" class="dropdown-item">
<span class="mr-3 opacity-8 flag large US"></span> USA
</button>
<button type="button" tabindex="0" class="dropdown-item">
<span class="mr-3 opacity-8 flag large CH"></span> Switzerland
</button>
<button type="button" tabindex="0" class="dropdown-item">
<span class="mr-3 opacity-8 flag large FR"></span>France
</button>
<button type="button" tabindex="0" class="dropdown-item">
<span class="mr-3 opacity-8 flag large ES"></span>Spain
</button>
<div tabindex="-1" class="dropdown-divider"></div>
<h6 tabindex="-1" class="dropdown-header">Others</h6>
<button type="button" tabindex="0" class="dropdown-item active">
<span class="mr-3 opacity-8 flag large DE"></span>Germany
</button>
<button type="button" tabindex="0" class="dropdown-item">
<span class="mr-3 opacity-8 flag large IT"></span> Italy
</button>
</div>
</div>
<div class="dots-separator"></div>
<div class="dropdown">
<a class="dot-btn-wrapper dd-chart-btn-2" aria-haspopup="true" data-toggle="dropdown" aria-expanded="false">
<i class="dot-btn-icon lnr-pie-chart icon-gradient bg-love-kiss"></i>
<div class="badge badge-dot badge-abs badge-dot-sm badge-warning">Notifications</div>
</a>
<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu">
<div class="dropdown-menu-header">
<div class="dropdown-menu-header-inner bg-premium-dark">
<div class="menu-header-image" style="background-image: url('assets/images/dropdown-header/abstract4.jpg');"></div>
<div class="menu-header-content text-white">
<h5 class="menu-header-title">Users Online</h5>
<h6 class="menu-header-subtitle">Recent Account Activity Overview</h6>
</div>
</div>
</div>
<div class="widget-chart">
<div class="widget-chart-content">
<div class="icon-wrapper rounded-circle">
<div class="icon-wrapper-bg opacity-9 bg-focus"></div>
<i class="lnr-users text-white"></i>
</div>
<div class="widget-numbers">
<span>344k</span>
</div>
<div class="widget-subheading pt-2"> Profile views since last login</div>
<div class="widget-description text-danger">
<span class="pr-1"> <span>176%</span></span>
<i class="fa fa-arrow-left"></i>
</div>
</div>
<div class="widget-chart-wrapper">
<div id="dashboard-sparkline-carousel-4-pop"></div>
</div>
</div>
<ul class="nav flex-column">
<li class="nav-item-divider mt-0 nav-item"></li>
<li class="nav-item-btn text-center nav-item">
<button class="btn-shine btn-wide btn-pill btn btn-warning btn-sm">
<i class="fa fa-cog fa-spin mr-2"></i> View Details
</button>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="app-footer-right">
<ul class="header-megamenu nav">
<li class="nav-item">
<a data-placement="top" rel="popover-focus" data-offset="300" data-toggle="popover-custom" class="nav-link" data-original-title="" title="">
Footer Menu
<i class="fa fa-angle-up ml-2 opacity-8"></i>
</a>
<div class="rm-max-width rm-pointers">
<div class="d-none popover-custom-content">
<div class="dropdown-mega-menu dropdown-mega-menu-sm">
<div class="grid-menu grid-menu-2col">
<div class="no-gutters row">
<div class="col-sm-6 col-xl-6">
<ul class="nav flex-column">
<li class="nav-item-header nav-item">Overview</li>
<li class="nav-item">
<a class="nav-link">
<i class="nav-link-icon lnr-inbox"></i>
<span>Contacts</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link">
<i class="nav-link-icon lnr-book"></i>
<span>Incidents</span>
<div class="ml-auto badge badge-pill badge-danger">5</div>
</a>
</li>
<li class="nav-item">
<a class="nav-link">
<i class="nav-link-icon lnr-picture"></i>
<span>Companies</span>
</a>
</li>
<li class="nav-item">
<a disabled="" class="nav-link disabled">
<i class="nav-link-icon lnr-file-empty"></i>
<span>Dashboards</span>
</a>
</li>
</ul>
</div>
<div class="col-sm-6 col-xl-6">
<ul class="nav flex-column">
<li class="nav-item-header nav-item">Sales &amp; Marketing</li>
<li class="nav-item"><a class="nav-link">Queues</a></li>
<li class="nav-item"><a class="nav-link">Resource Groups</a></li>
<li class="nav-item">
<a class="nav-link">Goal Metrics
<div class="ml-auto badge badge-warning">3</div>
</a>
</li>
<li class="nav-item"><a class="nav-link">Campaigns</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</li>
<li class="nav-item">
<a data-placement="top" rel="popover-focus" data-offset="300" data-toggle="popover-custom" class="nav-link" data-original-title="" title="">
Grid Menu
<div class="badge badge-dark ml-0 ml-1">
<small>NEW</small>
</div>
<i class="fa fa-angle-up ml-2 opacity-8"></i>
</a>
<div class="rm-max-width rm-pointers">
<div class="d-none popover-custom-content">
<div class="dropdown-menu-header">
<div class="dropdown-menu-header-inner bg-tempting-azure">
<div class="menu-header-image opacity-1" style="background-image: url('assets/images/dropdown-header/city5.jpg');"></div>
<div class="menu-header-content text-dark">
<h5 class="menu-header-title">Two Column Grid</h5>
<h6 class="menu-header-subtitle">Easy grid navigation inside popovers</h6>
</div>
</div>
</div>
<div class="grid-menu grid-menu-2col">
<div class="no-gutters row">
<div class="col-sm-6">
<button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
<i class="lnr-lighter text-dark opacity-7 btn-icon-wrapper mb-2"></i>Automation
</button>
</div>
<div class="col-sm-6">
<button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger">
<i class="lnr-construction text-danger opacity-7 btn-icon-wrapper mb-2"></i>Reports
</button>
</div>
<div class="col-sm-6">
<button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-success">
<i class="lnr-bus text-success opacity-7 btn-icon-wrapper mb-2"></i>Activity
</button>
</div>
<div class="col-sm-6">
<button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-focus">
<i class="lnr-gift text-focus opacity-7 btn-icon-wrapper mb-2"></i>Settings
</button>
</div>
</div>
</div>
<ul class="nav flex-column">
<li class="nav-item-divider nav-item"></li>
<li class="nav-item-btn clearfix nav-item">
<div class="float-left">
<button class="btn btn-link btn-sm">Link Button</button>
</div>
<div class="float-right">
<button class="btn-shadow btn btn-info btn-sm">Info Button</button>
</div>
</li>
</ul>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
</div></div>

<!-------------------- Bottom(Footer) -------------------------->

<footer class="bg-dark text-light py-4">
    <div class="container">
        <div class="footer-flex">
            <div class="footer-section">
                <h3>สาขาใกล้บ้านคุณ</h3>
                <p>📍 ดอนเมือง<br>📍 สนามบินสุวรรณภูมิ<br>📍 หมอชิต<br>📍 โคกอีเลิ้งซิตี้</p>
            </div>
            <div class="footer-section">
                <h3>Follow Us</h3>
                <ul class="list-unstyled">
                    <li><a href="#"><img src="img/facebook.png" alt="">Facebook : PetVilla</a></li>
                    <li><a href="#"><img src="img/twitter.png" alt="">Twitter(X) : @PetVilla_official</a></li>
                    <li><a href="#"><img src="img/instagram.png" alt="">Instagram : PetVilla</a></li>
                    <li><a href="#"><img src="img/line.png" alt="">Line : @PetVilla</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Developed By.</h3>
                <p>Mr.Pakkatorn Pommin <br>Mr.Pitipong Prasirtsak <br>Mr.Sawettachat Kasemyart</p>
            </div>
        </div>
    </div>
</footer>


<script>

const logoutLinks = document.querySelectorAll('.logout');
logoutLinks.forEach((link) => {
  link.addEventListener('click', function (e) {
    e.preventDefault(); // ป้องกันการนำทางไปยัง index.html โดยค่าพื้นฐานของลิงค์

    Swal.fire({
      title: 'ยืนยันการออกจากระบบ',
      text: 'คุณแน่ใจหรือไม่ว่าต้องการออกจากระบบ?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'ใช่',
      cancelButtonText: 'ยกเลิก',
    }).then((result) => {
      if (result.isConfirmed) {
        // ทำการออกจากระบบ
        // ตรงนี้คุณสามารถเพิ่มโค้ดเพื่อนำผู้ใช้ออกจากระบบ เช่น การลบคุกกี้หรือทำการตัดการเชื่อมต่อ
        window.location.href = 'index.php'; // นำทางไปยังหน้า index.html หรืออีกหน้าที่คุณต้องการ
      }
    });
  });
});

</script>
</body>
</html>