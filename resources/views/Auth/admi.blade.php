@extends('layouts.defaultButtstrap')
@section('title')Sign in
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

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h2>Sign in</h2>
                <form action="{{ route("login") }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">User email</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="example@gmail.com">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">User password</label>
                        <input name="password" type="password" class="form-control" id="password" placeholder="1234">
                    </div>

                    <button class="btn btn-primary">login</button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    <footer id="contacts">
        <div class="container" style="max-width: 1200px; margin: 0px 70px">
            <div class="futer">
                <div><div class="logotip1"><div style="display: flex;cursor: pointer"><a style="color: transparent;display: flex;" class="links" href="#"><h1 class="logo1">Tiger<h2 class="logo1" style="color: #B55038;">2022</h2></h1></a></div></div></div>
                <div>
                    <div class="icons">
                        <a class="margin" href="#">
                            <div class="box">
                                <div class="iconu">
                                    <object type="image/svg+xml" data="../../images/user.svg" style="width: 30px; height: 30px" id="svg">
                                    </object>
                                </div>
                            </div>
                        </a>
                        <a class="margin" href="#">
                            <div class="box">
                                <div class="iconf">
                                    <object type="image/svg+xml" data="../../images/facebook.svg" style="width: 50px; height: 40px" id="svg1">
                                    </object>
                                </div>
                            </div>
                        </a>
                        <a class="margin" href="#">
                            <div class="box">
                                <div class="iconf">
                                    <object type="image/svg+xml" data="../../images/instagram.svg" style="width: 40px; height: 30px" id="svg2">
                                    </object>
                                </div>
                            </div>
                        </a>
                        <a class="margin" href="#">
                            <div class="box">
                                <div class="iconf">
                                    <object type="image/svg+xml" data="../../images/viber.svg" style="width: 40px; height: 35px" id="svg3">
                                    </object>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
