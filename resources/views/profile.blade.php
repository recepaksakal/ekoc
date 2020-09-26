<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ 'Profile: ' . $rider->nick }}</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
    <script src='https://cdn.plot.ly/plotly-latest.min.js'></script>


</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img class="img-fluid" src="../imgs/tcmk.png" alt=""></h3>
                <strong><img class="img-fluid" src="../imgs/tcmk.png" alt=""></strong>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="/">
                        <i class="fas fa-home"></i>
                        Anasayfa
                    </a>
                </li>
                <li>
                    <a href="/riders">
                        <i class="fas fa-motorcycle"></i>
                        Sürücüler
                    </a>
                </li>


                <li>
                    <a href="#">
                        <i class="fas fa-users"></i>
                        Toplantı
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-road"></i>
                        Sürüş
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-heartbeat"></i>
                        Kan
                    </a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
                </li>
                <li>
                    <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Yelek</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Motosiklet</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Kimlik</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">İletişim</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Acil Durum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Kronoloji</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sürüşler</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Toplantı</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


            <div class="card example-1 square scrollbar-dusty-grass square thin">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 mb-2 pt-2 border-bottom sticky-top" style="background-color: white">
                            <h3 class="text-center"><img class="rounded-circle ml-3" style="height: 50px"
                                    src={{ $rider->photo }} alt="">
                                {{ $rider->nick }}</h3>
                            <div class="heading-border"></div>
                        </div>
                        <div class="resume-item col-md-6 col-sm-12 ">
                            <div class="card mx-0 p-4 mb-5"
                                style="border-color: #b81717; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
                                <div class="row">
                                    <div class="col-lg-12 border-bottom mb-2">

                                        <h4 class="mb-3"><i class="fa fa-info mr-3 text-info"></i> Yelek Bilgileri
                                        </h4>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>Nick: {{ $rider->nick }}</p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>Rütbe: {{ $rider->r_level->level }}</p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>İsim: {{ $rider->name }}</p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>Görev: {{ $rider->r_mission[0]->mission }}</p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>Km: 3500</p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>Aidat: 125 TL</p>
                                    </div>

                                </div>
                                <div class="resume-date text-md-right">
                                    <span class="text-primary">March 2019 - Present</span>
                                </div>
                            </div>
                        </div>
                        <div class="resume-item col-md-6 col-sm-12 ">
                            <div class="card mx-0 p-4 mb-5"
                                style="border-color: #b81717; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
                                <div class="row">
                                    <div class="col-lg-12 border-bottom mb-2">

                                        <h4 class="mb-3"><i class="fa fa-motorcycle mr-3 text-info"></i> Motosiklet
                                            Bilgileri
                                        </h4>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>Plaka: {{ '16 AFU 658' }}</p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>Marka: {{ 'Ramzey' }}</p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>Sigorta: {{ '29 Eylül 2020' }}</p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>Model: {{ 'QM250' }}</p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>Muayene: {{ '29 Eylül 2021' }}</p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>Yıl: {{ '2006' }}</p>
                                    </div>

                                </div>
                                <div class="resume-date text-md-right">
                                    <span class="text-primary">March 2019 - Present</span>
                                </div>
                            </div>
                        </div>
                        <div class="resume-item col-md-6 col-sm-12 ">
                            <div class="card mx-0 p-4 mb-5"
                                style="border-color: #b81717; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
                                <div class="row">
                                    <div class="col-lg-12 border-bottom mb-2">

                                        <h4 class="mb-3"><i class="fa fa-id-card mr-3 text-info"></i> Kimlik
                                            Bilgileri
                                        </h4>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>T.C. No: {{ $rider->identity->national_id }}</p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>Kan Grubu: {{ $rider->identity->blood }}</p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>Doğum Yeri: {{ $rider->identity->born_place }}</p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>Doğum Tarihi: {{ $rider->identity->born_date }}</p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>Anne Adı: {{ $rider->identity->mother_name }}</p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>Baba Adı: {{ $rider->identity->father_name }}</p>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <p>Medeni Hali: {{ $rider->identity->marital_status }}</p>
                                    </div>

                                </div>
                                <div class="resume-date text-md-right">
                                    <span class="text-primary">March 2019 - Present</span>
                                </div>
                            </div>
                        </div>
                        <div class="resume-item col-md-6 col-sm-12 ">
                            <div class="card mx-0 p-4 mb-5"
                                style="border-color: #b81717; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
                                <div class="row">
                                    <div class="col-lg-12 border-bottom mb-2">

                                        <h4 class="mb-3"><i class="fa fa-phone mr-3 text-info"></i> İletişim
                                            Bilgileri
                                        </h4>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>Telefon: {{ $rider->contact->phone }}</p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <a href="tel:{{ $rider->contact->phone }}">
                                            <img class="rounded-circle border border-success p-1 mr-2"
                                                src="../imgs/call.svg" alt="">Ara
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>Mail: {{ $rider->email }}</p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>Adres: {{ $rider->contact->address }}</p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>İş Telefonu: {{ $rider->contact->business_phone }}</p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <a href="tel:{{ $rider->contact->business_phone }}">
                                            <img class="rounded-circle border border-success p-1 mr-2"
                                                src="../imgs/call.svg" alt="">Ara
                                        </a>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <p>İş Adresi: {{ $rider->contact->business_address }}</p>
                                    </div>


                                </div>
                                <div class="resume-date text-md-right">
                                    <span class="text-primary">March 2019 - Present</span>
                                </div>
                            </div>
                        </div>
                        <div class="resume-item col-md-6 col-sm-12 ">
                            <div class="card mx-0 p-4 mb-5"
                                style="border-color: #b81717; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
                                <div class="row">
                                    <div class="col-lg-12 border-bottom mb-2">

                                        <h4 class="mb-3"><i class="fa fa-heartbeat mr-3 text-info"></i> Acil Durum
                                            İletişim
                                            Bilgileri
                                        </h4>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>İsim: {{ $rider->emergency[0]->name }}</p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>Adres: {{ $rider->emergency[0]->address }}</p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>Telefon: {{ $rider->emergency[0]->phone }}</p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <a href="tel:{{ $rider->emergency[0]->phone }}">
                                            <img class="rounded-circle border border-success p-1 mr-2"
                                                src="../imgs/call.svg" alt="">Ara
                                        </a>
                                    </div>
                                </div>
                                <div class="resume-date text-md-right">
                                    <span class="text-primary">March 2019 - Present</span>
                                </div>
                            </div>
                        </div>
                        <div class="resume-item col-md-6 col-sm-12 ">
                            <div class="card mx-0 p-4 mb-5"
                                style="border-color: #b81717; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
                                <div class=" resume-content mr-auto">
                                    <h4 class="mb-3"><i class="fa fa-history mr-3 text-info"></i> Kronoloji Bilgileri
                                    </h4>
                                    <div class="main-award" id="award-box">
                                        <div class="award">
                                            <div class="award-icon"></div>
                                            <div class="award-content">
                                                <span class="date">13 Nisan 2017</span>
                                                <h5 class="title">Misafir</h5>
                                                <p class="description">
                                                    Misafir olarak toplantılara katılmaya başladı.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="award">
                                            <div class="award-icon"></div>
                                            <div class="award-content">
                                                <span class="date">21 Haziran 2017</span>
                                                <h5 class="title">Hangaround</h5>
                                                <p class="description">
                                                    Hangaround olarak yelek giymeye hak kazandı.

                                                </p>
                                            </div>
                                        </div>
                                        <div class="award">
                                            <div class="award-icon"></div>
                                            <div class="award-content">
                                                <span class="date">07 Temmuz 2018</span>
                                                <h5 class="title">Prospect</h5>
                                                <p class="description">
                                                    Prospect olarak yelek giymeye hak kazandı.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="award">
                                            <div class="award-icon"></div>
                                            <div class="award-content">
                                                <span class="date">1 Haziran 2019</span>
                                                <h5 class="title">Full Patch</h5>
                                                <p class="description">
                                                    Full Patch olarak yelek giymeye hak kazandı.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resume-date text-md-right">
                                    <span class="text-primary">March 2019 - Present</span>
                                </div>
                            </div>
                        </div>
                        <div class="resume-item col-md-6 col-sm-12 ">
                            <div class="card mx-0 p-4 mb-5"
                                style="border-color: #b81717; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
                                <div class="row">
                                    <div class="col-lg-12 border-bottom mb-2">

                                        <h4 class="mb-3"><i class="fa fa-road mr-3 text-info"></i> Sürüş Bilgileri
                                        </h4>
                                    </div>
                                    <div class="col-lg-12">
                                        <div id='road'>

                                        </div>
                                    </div>
                                </div>
                                <div class="resume-date text-md-right">
                                    <span class="text-primary">March 2019 - Present</span>
                                </div>
                            </div>
                        </div>
                        <div class="resume-item col-md-6 col-sm-12 ">
                            <div class="card mx-0 p-4 mb-5"
                                style="border-color: #b81717; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
                                <div class="row">
                                    <div class="col-lg-12 border-bottom mb-2">

                                        <h4 class="mb-3"><i class="fa fa-users mr-3 text-info"></i> Toplantı Bilgileri
                                        </h4>
                                    </div>
                                    <div class="col-lg-12">
                                        <div id='meet'>

                                        </div>
                                    </div>
                                </div>
                                <div class="resume-date text-md-right">
                                    <span class="text-primary">March 2019 - Present</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });

    </script>
    <script>
        var data = [{
            type: "pie",
            values: [2, 5, 3, 2.5],
            labels: ["R", "Python", "Java Script", "Matlab"],
            texttemplate: "%{label}: %{value} (%{percent})",
            textposition: "outside"
        }];

        Plotly.newPlot("road", data)

        var layout = {
            title: "2020",
        }

        var trace1 = {
            x: ['Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim',
                'Kasım', 'Aralık'
            ],
            y: [5, 4, 4, 4, 5, 5, 4, 4, 4, 4, 4, 5],
            name: 'Toplantı Sayısı',
            type: 'bar'
        };

        var trace2 = {
            x: ['Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim',
                'Kasım', 'Aralık'
            ],
            y: [4, 1, 3, 1, 4, 2, 3, 3, 4, 0, 0, 1],
            name: 'Katıldığı Toplantı Sayısı',
            type: 'bar'
        };

        var data = [trace1, trace2]

        Plotly.newPlot('meet', data, layout);

    </script>
</body>

</html>
