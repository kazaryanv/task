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
    <section class="section01"></section>
    <section class="section2">
        <div class="container">
            <div class="contest">
                <h1 class="glavnaya">История Изучения</h1>
                <div class="contest2">
                    <p>Основные данные относительно эволюции вида получены с помощью анализа ископаемых остатков и исследований в области молекулярной филогенетики.На базе кладистического анализа было доказано, что центр происхождения вида располагался в восточной Азии.
                        Реконструкция ископаемых остатков тигров в силу ряда причин довольно сложна: немногочисленность палеонтологических находок, которые в основном сильно фрагментированы; вероятность загрязнения материалов остатками родственных видов и зачастую нечёткое датирование находок.Древнейшие ископаемые остатки тигров известны из северного Китая и острова Ява[8][9]. Близкая к тигру предковая форма Panthera palaeosinensis была небольшой по сравнению с ним кошкой, обитавшей в области Хэнань в Северном Китае с конца плиоцена до начала плейстоцена. Размер этого животного был промежуточным между размерами современных индийских леопардов и подвидов тигра с островов Зондского архипелага. Возможно, Panthera palaeosinensis является крупной формой леопарда или общим предком двух или более видов современного рода Panthera. Чёткое таксономическое положение вида Panthera palaeosinensis требует дополнительных исследований.
                    </p>
                    <div class="kosti"></div>
                    <p>Согласно сравнительно-анатомическим исследованиям, средний размер тигров в период от плейстоцена к современности уменьшался (за исключением популяций, известных сейчас как бенгальский и амурский тигр, в которых средний размер животных не изменился). Данное явление является характерным для плейстоценовых млекопитающих и отображает снижение сезонной биопродуктивности окружающей среды и/или, в случае хищников, уменьшение среднего размера доступной добычи. Голоценовые ископаемые остатки тигров известны с Явы и Калимантана; на последнем острове тигр вымер ещё до нашей эры.Молекулярно-филогенетические данные, полученные с использованием различных методов, подтверждают тесные родственные связи между представителями рода Panthera и доказывают, что вид тигр отделился от общей предковой линии более чем 2 миллиона лет назад, намного раньше льва, леопарда и ягуара. Таким образом, палеонтологические и молекулярно-биологические данные относительно происхождения тигра более или менее подтверждают друг друга.</p>
                    <h1 class="vid">Внешний вид</h1>
                    <div class="twocon">
                        <div>
                            <h3 class="mini">Тигр является крупнейшей и самой тяжёлой из диких кошек, но различные его подвиды сильно различаются по размерам и массе тела. Материковые подвиды тигра крупнее островных. Самыми крупными из них являются бенгальский и амурский подвиды. Самцы данных подвидов могут достигать до 2,3—2,5 м, а в отдельных случаях до 2,6—2,9 метров в длину без хвоста и весить до 275 кг, а в отдельных случаях до 300—320 кг.</h3>
                        </div>
                        <div class="tayger"></div>
                    </div>
                    <p style="margin-top: unset;margin-bottom: 100px;">Высота в холке до 1,15 м. Взрослый самец в природе обычно весит 180—250 кг. Рекордные веса бенгальского и амурского тигров в природе составляют 388,7 кг и 384 кг соответственно. Правда, эти данные порой ставятся под сомнение. Также упоминаются самцы массой в 325, 340, 350 и 360 кг, но они предоставляются из документально неподтверждённых или вторичных, третичных источников. Бенгальский весит в среднем — 220 кг, бенгальский обитающий в северной Индии и Непале — 235 кг. Амурский по современным данным в среднем в пределах 170—180 кг. (историческим 215 кг). Самки обычно заметно меньше самцов, у амурского[13] и бенгальского подвидов достигают массы 100—181 кг. С учётом существующих шести подвидов тигров, средний вес самца данного вида составляет около 170 кг, самки около 115 кг.</p>
                </div>
            </div>
        </div>
    </section>
    <footer id="contacts">
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