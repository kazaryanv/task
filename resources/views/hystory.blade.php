@extends('layouts.default')
@section('description')
    @if($data)
        @foreach($data as $row)
            {{$row -> description}}
        @endforeach
    @endif
@endsection
@section('title')
    @if($data)
        @foreach($data as $row)
            {{$row -> title}}
        @endforeach
    @endif
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
                            <li><a class="links" href="{{route('all')}}">Фотогалерея</a></li>
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
                <div class="buttons"><a class="buton" href="{{route('all')}}">Узнать больше</a></div>

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
                            <div class="box">
                                <div class="iconu">
                                    <img  src="../../images/user.svg" style="width: 30px; height: 30px" >
                                </div>
                            </div>
                        </a>
                        <a class="margin" href="#">
                            <div class="box">
                                <div class="iconf">
                                    <img  src="../../images/facebook.svg" style="width: 50px; height: 40px" >

                                </div>
                            </div>
                        </a>
                        <a class="margin" href="#">
                            <div class="box">
                                <div class="iconf">
                                    <img  src="../../images/instagram.svg" style="width: 40px; height: 30px" >
                                </div>
                            </div>
                        </a>
                        <a class="margin" href="#">
                            <div class="box">
                                <div class="iconf">
                                    <img src="../../images/viber.svg" style="width: 40px; height: 35px">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection