@extends('layouts.default')
@section('title')
all-tiger
@endsection
@section('content')
    <header>
        <div class="container1" style="margin: 0px 70px; max-width: 1200px">
            <div class="header">
                <div class="header2">
                    <div class="logotip"><div style="display: flex;cursor: pointer"><a style="color: transparent;display: flex;" class="links" href="{{route('home')}}"><h1 class="logo">Tiger<h2 class="logo" style="color: #B55038;">2022</h2></h1></a></div></div>
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
                            <li><a class="links" href="{{route('home')}}">Главная</a></li>
                            <li><a class="links" href="{{route('page2')}}">О тиграх</a></li>
                            <li><a class="links" href="#photo">Фотогалерея</a></li>
                            <li><a class="links" href="#contacts">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="section2">
        <div class="container">
            <div id="type" class="hystoryauto">
                <div class="istoriya">
                    @if(isset($data))
                        @foreach($data as $row)
                            <div>
                                <div style="width: 15%;height: 70px;display: flex;align-items: center;justify-content: center;">
                                    <img style="width: 50px;height: 50px;" src="{{asset('storage/' . $row -> image)}}">
                                </div>
                                <div>
                                    <h2>{{ $row -> name }}</h2>
                                    <p>{{ $row -> content}}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
    <footer id="contacts" style="margin-top: 200px">
        <div class="container" style="max-width: 1200px; margin: 0px 70px">
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
