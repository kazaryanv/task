@extends('layouts.default')
@section('title')
    Home
@endsection
@section('content')
    <header>
        <div class="container">
            <div class="header">
                <div class="header2">
                    <div class="logotip"><div style="display: flex;cursor: pointer"><a style="color: transparent;display: flex;" class="links" href="#"><h1 class="logo">Tiger<h2 class="logo" style="color: #B55038;">2022</h2></h1></a></div></div>
                    <div class="header3">
                        <ul>
                            <div id="bar" class="containerse">
                                <h1 class="maniue">
                                    <a href="#menu">|||</a>
                                </h1>

                                <div class="popover" id="menu">
                                    <a href="#" class="close1"></a>
                                    <div class = 'content'>
                                        <a href="#" class="close"></a>
                                        <div class = 'nav'>
                                            <ul class = 'nav_list'>

                                                <div class = 'nav_list_item'>
                                                    <li><a href="#">Главная</a></li>
                                                </div>
                                                <div class = 'nav_list_item'>
                                                    <li><a href="#">О тиграх</a></li>
                                                </div>
                                                <div class = 'nav_list_item'>
                                                    <li><a href="#">Фотогалерея</a></li>
                                                </div>
                                                <div class = 'nav_list_item'>
                                                    <li><a href="#">Контакты</a></li>
                                                </div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <li><a class="links" href="#glavnaya">Главная</a></li>
                            <li><a class="links" href="{{route('page2')}}">О тиграх</a></li>
                            <li><a class="links" href="#photo">Фотогалерея</a></li>
                            <li><a class="links" href="#contacts">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="section1">
        <div class="container">
            <div id="glavnaya" class="tiger">
                <div class="contents">
                    <div class="contentimg"></div>
                    <div id="con">
                        <h1 class="tigri">Тигры</h1>
                        <div class="conteiner"><p class="post">Вид хищных млекопитающих семейства кошачьих, один из пяти представителей рода пантера (лат.<p class="post"> Panthera), который относится к подсемейству</p><p class="post">больших кошек.</p></div>
                        <a class="media" href="{{route('page2')}}">Узнать больше</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section2">
        <div class="container">
            <div id="type" class="hystoryauto">
                <div class="istoriya">
                    <div class="hey2"><h1 class="hey">История <h2 style="color: #B55038;" class="hey">Изучения</h2></h1></div>
                    <div class="one"><p class="two">Первое научное описание тигра было сделано Карлом Линнеем в его труде «Systema naturæ», под названием Felis tigris[6]. Позднее в 1858 году русский натуралист Николай Северцов описывает данный вид под названием Tigris striatus.</p></div>
                    <div class="btn2"><a class="btn3" href="#photo" id="links">Узнать больше</a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section3">
        <div class="container">
            <div id="photo" class="hystory">
                <div class="tigt">
                    <h1 class="tigte">Виды<h2 style="color: #B55038;" class="tigte">Тигров</h2></h1>
                </div>
                <div class="nkarner">
                    <div class="nkar">
                        <div class="img"></div>
                        <div class="type" style="margin-top: 17px">Бенгальский тигр</div>
                    </div>
                    <div class="nkar">
                        <div class="img2"></div>
                        <div class="type" style="margin-top: 7px">Малайский тигр</div>
                    </div>
                    <div class="nkar">
                        <div class="img3"></div>
                        <div class="type" style="margin-top: 17px;">Китайский тигр</div>
                    </div>
                </div>
                <div class="buttons"><a class="buton" href="#glavnaya">Узнать больше</a></div>

            </div>
        </div>
    </section>
    <footer id="contacts">
        <div class="container">
            <div class="futer">
                <div><div class="logotip1"><div style="display: flex;cursor: pointer"><a style="color: transparent;display: flex;" class="links" href="#"><h1 class="logo1">Tiger<h2 class="logo1" style="color: #B55038;">2022</h2></h1></a></div></div></div>
                <div>
                    <div class="icons">
                        <a class="margin" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                 class="icon01"
                                 viewBox="0 0 172 172"
                                 style="  fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><path d="M86,172c-47.49649,0 -86,-38.50351 -86,-86v0c0,-47.49649 38.50351,-86 86,-86v0c47.49649,0 86,38.50351 86,86v0c0,47.49649 -38.50351,86 -86,86z" fill="#34574d"></path><g fill="#ffffff"><path d="M86,32.73375c-16.78575,0 -30.47625,13.6905 -30.47625,30.47625c0,10.42519 5.30613,19.67691 13.33336,25.17012c-15.57826,6.63267 -26.39461,22.10889 -26.39461,40.13613h8.7075c0,-19.43881 15.39119,-34.83 34.83,-34.83c19.43881,0 34.83,15.39119 34.83,34.83h8.7075c0,-18.02725 -10.81635,-33.50346 -26.39461,-40.13613c8.02723,-5.49321 13.33336,-14.74493 13.33336,-25.17012c0,-16.78575 -13.6905,-30.47625 -30.47625,-30.47625zM86,41.44125c12.07486,0 21.76875,9.6939 21.76875,21.76875c0,12.07486 -9.69389,21.76875 -21.76875,21.76875c-12.07485,0 -21.76875,-9.69389 -21.76875,-21.76875c0,-12.07485 9.6939,-21.76875 21.76875,-21.76875z"></path></g></g></svg>
                        </a>
                        <a class="margin" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                 class="icon1"
                                 viewBox="0 0 172 172"
                                 style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><path d="M86,172c-47.49649,0 -86,-38.50351 -86,-86v0c0,-47.49649 38.50351,-86 86,-86v0c47.49649,0 86,38.50351 86,86v0c0,47.49649 -38.50351,86 -86,86z" fill="#34574d"></path><g fill="#ffffff"><path d="M73.05514,130.72v-44.72h-14.90667v-14.90667h14.90667v-8.00488c0,-15.15635 7.38253,-21.80845 19.97866,-21.80845c6.03347,0 9.2235,0.4472 10.7328,0.65217v14.2545h-8.58997c-5.34777,0 -7.21483,2.82109 -7.21483,8.53779v6.36887h15.67063l-2.12793,14.90667h-13.54271v44.72z"></path></g></g></svg>
                        </a>
                        <a class="margin" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                 class="icon2"
                                 viewBox="0 0 172 172"
                                 style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><path d="M86,172c-47.49649,0 -86,-38.50351 -86,-86v0c0,-47.49649 38.50351,-86 86,-86v0c47.49649,0 86,38.50351 86,86v0c0,47.49649 -38.50351,86 -86,86z" fill="#34574d"></path><g fill="#ffffff"><path d="M64.5,37.625c-14.81887,0 -26.875,12.05613 -26.875,26.875v43c0,14.81887 12.05613,26.875 26.875,26.875h43c14.81887,0 26.875,-12.05613 26.875,-26.875v-43c0,-14.81887 -12.05613,-26.875 -26.875,-26.875zM64.5,48.375h43c8.89025,0 16.125,7.23475 16.125,16.125v43c0,8.89025 -7.23475,16.125 -16.125,16.125h-43c-8.89025,0 -16.125,-7.23475 -16.125,-16.125v-43c0,-8.89025 7.23475,-16.125 16.125,-16.125zM112.875,53.75c-2.96853,0 -5.375,2.40647 -5.375,5.375c0,2.96853 2.40647,5.375 5.375,5.375c2.96853,0 5.375,-2.40647 5.375,-5.375c0,-2.96853 -2.40647,-5.375 -5.375,-5.375zM86,59.125c-14.81887,0 -26.875,12.05612 -26.875,26.875c0,14.81887 12.05612,26.875 26.875,26.875c14.81887,0 26.875,-12.05613 26.875,-26.875c0,-14.81887 -12.05613,-26.875 -26.875,-26.875zM86,69.875c8.89025,0 16.125,7.23475 16.125,16.125c0,8.89025 -7.23475,16.125 -16.125,16.125c-8.89025,0 -16.125,-7.23475 -16.125,-16.125c0,-8.89025 7.23475,-16.125 16.125,-16.125z"></path></g></g></svg>
                        </a>
                        <a class="margin" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                 class="icon3"
                                 viewBox="0 0 172 172"
                                 style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><path d="M86,172c-47.49649,0 -86,-38.50351 -86,-86v0c0,-47.49649 38.50351,-86 86,-86v0c47.49649,0 86,38.50351 86,86v0c0,47.49649 -38.50351,86 -86,86z" fill="#34574d"></path><g fill="#ffffff"><path d="M130.22872,60.72088c-1.74687,-6.23634 -5.20569,-11.16253 -10.27162,-14.64755c-6.39356,-4.41086 -13.74791,-5.96558 -20.0978,-6.91762c-8.78678,-1.31016 -16.7438,-1.49358 -24.33397,-0.56773c-7.10978,0.87344 -12.46395,2.2622 -17.34647,4.50694c-9.57288,4.40213 -15.32009,11.52064 -17.0757,21.15466c-0.85597,4.68163 -1.43244,8.90906 -1.76434,12.94434c-0.76863,9.32831 -0.06987,17.5823 2.13119,25.23361c2.14866,7.45916 5.8957,12.78712 11.4595,16.28961c1.41497,0.89091 3.23172,1.53725 4.98733,2.15739c0.99572,0.34937 1.96524,0.69002 2.76006,1.06559c0.73369,0.34064 0.73369,0.40178 0.72495,1.01319c-0.06114,5.30177 0,15.69567 0,15.69567l0.01747,2.21853h3.98288l0.64634,-0.62887c0.42798,-0.40178 10.29783,-9.93972 13.81778,-13.78284l0.48039,-0.5328c0.60267,-0.69875 0.60267,-0.69875 1.22281,-0.70748c4.7515,-0.09608 9.60781,-0.2795 14.42919,-0.54153c5.8433,-0.31444 12.61244,-0.88217 18.98853,-3.53742c5.83456,-2.43689 10.09694,-6.30622 12.65611,-11.49444c2.67272,-5.41531 4.25364,-11.27608 4.84758,-17.92294c1.04812,-11.68659 0.3057,-21.8272 -2.2622,-30.9983zM109.21381,106.16584c-1.46738,2.38448 -3.65097,4.04402 -6.22761,5.11834c-1.88662,0.78609 -3.80819,0.62014 -5.66861,-0.16595c-15.57339,-6.59445 -27.79278,-16.97963 -35.86334,-31.91541c-1.66827,-3.0745 -2.8212,-6.4285 -4.14883,-9.67769c-0.27077,-0.66381 -0.2533,-1.44991 -0.37558,-2.18359c0.11355,-5.24936 4.14009,-8.21031 8.21031,-9.10122c1.55472,-0.34937 2.93475,0.20089 4.08769,1.31016c3.19678,3.03956 5.72102,6.57698 7.62511,10.54239c0.82977,1.73814 0.45419,3.27539 -0.96078,4.56808c-0.29697,0.27077 -0.60267,0.51533 -0.92584,0.75989c-3.23172,2.42816 -3.70337,4.27111 -1.9827,7.93081c2.93475,6.22761 7.80853,10.41138 14.10601,13.00548c1.65953,0.68128 3.22299,0.34064 4.48947,-1.00445c0.17469,-0.17469 0.36684,-0.34937 0.48913,-0.559c2.48056,-4.14009 6.08786,-3.72958 9.41566,-1.3713c2.18359,1.55472 4.30605,3.19678 6.46344,4.7777c3.29286,2.41942 3.26666,4.69036 1.26649,7.96575zM88.55702,64.84351c-0.73369,0 -1.46738,0.06114 -2.19233,0.18342c-1.22281,0.20089 -2.36702,-0.62014 -2.57664,-1.84295c-0.20089,-1.21408 0.62014,-2.36702 1.84295,-2.56791c0.96078,-0.16595 1.94776,-0.24456 2.92601,-0.24456c9.68642,0 17.56483,7.87841 17.56483,17.56483c0,0.98698 -0.07861,1.97397 -0.24456,2.92602c-0.18342,1.0918 -1.12673,1.86916 -2.20106,1.86916c-0.12228,0 -0.24456,-0.00873 -0.37558,-0.03494c-1.21408,-0.20089 -2.03511,-1.35383 -1.83422,-2.56791c0.12228,-0.71622 0.18342,-1.44991 0.18342,-2.19233c0,-7.21459 -5.87823,-13.09283 -13.09283,-13.09283zM99.41384,78.25951c0,1.23155 -1.00445,2.236 -2.236,2.236c-1.23155,0 -2.236,-1.00445 -2.236,-2.236c0,-3.69464 -3.01336,-6.708 -6.708,-6.708c-1.23155,0 -2.236,-1.00445 -2.236,-2.236c0,-1.23155 1.00445,-2.236 2.236,-2.236c6.16647,0 11.18,5.01353 11.18,11.18zM112.1835,83.22937c-0.23583,1.03939 -1.16167,1.73814 -2.18359,1.73814c-0.16595,0 -0.33191,-0.01747 -0.49786,-0.05241c-1.20534,-0.2795 -1.9565,-1.47611 -1.68573,-2.68145c0.32317,-1.4237 0.48912,-2.89981 0.48912,-4.38466c0,-10.86556 -8.84792,-19.71348 -19.71349,-19.71348c-1.48484,0 -2.96095,0.16595 -4.38466,0.48913c-1.20534,0.2795 -2.40195,-0.48039 -2.67272,-1.68573c-0.2795,-1.20534 0.48039,-2.40195 1.68574,-2.67272c1.74687,-0.40178 3.55489,-0.60267 5.37164,-0.60267c13.33739,0 24.18549,10.84809 24.18549,24.18548c0,1.81675 -0.20089,3.62477 -0.59394,5.38038z"></path></g></g></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection