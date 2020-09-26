<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ 'Sürücü Ekle' }}</title>

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
            <form action="sea" method="GET">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">

                        <button type="button" id="sidebarCollapse" class="btn btn-info">
                            <i class="fas fa-align-left"></i>
                            <span>Toggle Sidebar</span>
                        </button>
                        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button"
                            data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-align-justify"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <input type="submit" class="nav-link btn btn-outline-info" value="Ekle">
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>


                <div class="card example-1 square scrollbar-dusty-grass square thin">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 mb-2 pt-2 border-bottom sticky-top" style="background-color: white">
                                <h3 class="text-center"><i class="fa fa-user-plus mr-3 text-info"></i> Sürücü Ekle</h3>
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
                                        <div class="col-lg-6 col-md-12 p-1">
                                            <input type="text" class="form-control" id="nick" placeholder="Nick">
                                        </div>
                                        <div class="col-lg-6 col-md-12 p-1">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label class="pt-2 pr-2" for="sigorta">Fotoğraf</label>
                                                </div>
                                                <div class="col-md-8">

                                                    <input type="file" class="form-control" id="fotograf">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 p-1">
                                            <select class="form-control" id="rutbe" name="rutbe">
                                                <option value="volvo">Misafir</option>
                                                <option value="volvo">Support</option>
                                                <option value="volvo">Hangaround</option>
                                                <option value="volvo">Prospect</option>
                                                <option value="volvo">Full Patch</option>
                                                <option value="volvo">2.Yıl Kıdem</option>
                                                <option value="volvo">5.Yıl Kıdem</option>
                                                <option value="volvo">10.Yıl Kıdem</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-12 p-1">
                                            <input type="text" class="form-control" id="isim"
                                                placeholder="İsim Soyisim">
                                        </div>
                                        <div class="col-lg-6 col-md-12 p-1">
                                            <select type="text" class="form-control" id="gorev" placeholder="Görev">
                                                <option value="volvo">Görev Yok</option>
                                                <option value="volvo">Başkan</option>
                                                <option value="volvo">Koordinatör</option>
                                                <option value="volvo">Koç</option>
                                                <option value="volvo">Disiplin</option>
                                                <option value="volvo">Sayman</option>
                                                <option value="volvo">Yol Kaptanı</option>
                                                <option value="volvo">Çoban</option>
                                                <option value="volvo">Artçı</option>
                                                <option value="volvo">Sıhhiye</option>
                                                <option value="volvo">Mekanik</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-12 p-1">
                                            <input type="number" class="form-control" id="km" placeholder="Km">
                                        </div>
                                        <div class="col-lg-6 col-md-12 p-1">
                                            <input type="number" class="form-control" id="aidat" placeholder="Aidat">
                                        </div>
                                        <div class="col-lg-6 col-md-12 p-1">
                                            <input type="text" class="form-control" id="meslek" placeholder="Meslek">
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
                                        <div class="col-lg-6 col-md-12 p-1">
                                            <input type="text" class="form-control" id="plaka" placeholder="Plaka">
                                        </div>
                                        <div class="col-lg-6 col-md-12 p-1">
                                            <input type="text" class="form-control" id="marka" placeholder="Marka">
                                        </div>
                                        <div class="col-lg-6 col-md-12 p-1">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label class="pt-2 pr-2" for="sigorta">Sigorta</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="date" class="form-control" id="sigorta">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 p-1">
                                            <input type="text" class="form-control" id="model" placeholder="Model">
                                        </div>
                                        <div class="col-lg-6 col-md-12 p-1">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label class="pt-2 pr-2" for="muayene">Muayene</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="date" class="form-control" id="muayene">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 p-1">
                                            <input type="number" class="form-control" id="yil" placeholder="Yıl">
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
                                        <div class="col-lg-6 col-md-12 p-1">
                                            <input type="number" class="form-control" id="tc"
                                                placeholder="T.C. Kimlik Numarası">
                                        </div>
                                        <div class="col-lg-6 col-md-12 p-1">
                                            <select class="form-control" id="kan">
                                                <option value="volvo">0 Rh(-)</option>
                                                <option value="volvo">0 Rh(+)</option>
                                                <option value="volvo">A Rh(-)</option>
                                                <option value="volvo">A Rh(+)</option>
                                                <option value="volvo">B Rh(-)</option>
                                                <option value="volvo">B Rh(+)</option>
                                                <option value="volvo">AB Rh(-)</option>
                                                <option value="volvo">AB Rh(+)</option>

                                            </select>

                                        </div>
                                        <div class="col-lg-6 col-md-12 p-1">
                                            <input type="text" class="form-control" id="dogum_yeri"
                                                placeholder="Doğum Yeri">
                                        </div>
                                        <div class="col-lg-6 col-md-12 p-1">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label class="pt-2 pr-2" for="dogum_tarihi">Doğum Tarihi</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="date" class="form-control" id="dogum_tarihi">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 p-1">
                                            <input type="text" class="form-control" id="anne" placeholder="Anne Adı">
                                        </div>
                                        <div class="col-lg-6 col-md-12 p-1">
                                            <input type="text" class="form-control" id="baba" placeholder="Baba Adı">
                                        </div>
                                        <div class="col-lg-6 col-md-12 p-1">
                                            <select class="form-control" id="medeni">
                                                <option value="volvo">Bekar</option>
                                                <option value="volvo">Evli</option>
                                                <option value="volvo">Dul</option>

                                            </select>
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
                                        <div class="col-lg-6 col-md-12 p-1">
                                            <input type="number" class="form-control" id="telefon"
                                                placeholder="Telefon Numarası">
                                        </div>
                                        <div class="col-lg-6 col-md-12 p-1">
                                            <input type="email" class="form-control" id="mail"
                                                placeholder="Mail Adresi">
                                        </div>
                                        <div class="col-lg-6 col-md-12 p-1">
                                            <input type="number" class="form-control" id="is_telefon"
                                                placeholder="İş Telefonu">
                                        </div>
                                        <div class="col-lg-6 col-md-12 p-1">
                                            <input type="text" class="form-control" id="adres" placeholder="Adres">
                                        </div>
                                        <div class="col-lg-6 col-md-12 p-1">
                                            <input type="text" class="form-control" id="is_adres"
                                                placeholder="İş Adresi">
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
                                        <div class="col-lg-6 col-md-12 p-1">
                                            <input type="text" class="form-control" id="acil_isim"
                                                placeholder="İsim Soyisim">
                                        </div>
                                        <div class="col-lg-6 col-md-12 p-1">
                                            <input type="number" class="form-control" id="acil_telefon"
                                                placeholder="Telefon">
                                        </div>
                                        <div class="col-lg-6 col-md-12 p-1">
                                            <input type="text" class="form-control" id="acil_adres" placeholder="Adres">
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
            </form>
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
