@extends('layouts.default')
@section('title')
manramasnutyunner
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
                            <li><a class="links" href="{{route('home')}}">Главная</a></li>
                            <li><a class="links" href="{{route('page2')}}">О тиграх</a></li>
                            <li><a class="links" href="{{route('all')}}">Фотогалерея</a></li>
                            <li><a class="links" href="#contacts">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="section1" style="display: block">
        <div>
            <button style="background: bottom;border: unset;margin-left: 20px;">
                <a href="{{route('all')}}" style="color:white;font-size: 30px">⮌</a>
            </button>
        </div>
        <div class="container">
            <div id="glavnaya" class="tiger">
                <div class="container" style="margin: unset">
                    <div class="row">
                        <div class="col-4" style="width:100%;height:500px;display: flex;flex-direction: column;align-items: center;justify-content: space-evenly;">
                            <img style="width: 440px;height: 250px;object-fit: contain;" src="{{asset('storage/' . $image -> image)}}">
                            <h1 style="color: white;font-size: 30px">{{$image->name}}</h1>
                            <p style="color: white;font-size: 20px">{{$image->content}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="contacts" style="margin-top: unset">
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