<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Riders</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/riders.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img class="img-fluid" src="imgs/tcmk.png" alt=""></h3>
                <strong><img class="img-fluid" src="imgs/tcmk.png" alt=""></strong>
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
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="card example-1 square scrollbar-dusty-grass square thin">
                <div class="card-body">
                    <div class="row pt-4 pl-3">
                        @foreach ($riders as $rider)

                            <div class="col-lg-4 col-md-6 col-sm-12 text-center mt-2">
                                <div class="card promoting-card">
                                    <a href={{ 'riders/' . $rider->id }}>
                                        <div class="card-body py-2 d-flex flex-row justify-content-between">
                                            <img src={{ $rider->photo }} class="rounded-circle mr-3" height="50px"
                                                width="50px" alt="avatar">
                                            <div>
                                                <h5 class="card-title font-weight-bold mb-0">{{ $rider->nick }}</h5>
                                                <p class="card-text">{{ $rider->r_level->level }}</p>
                                            </div>
                                            <div>
                                                <p class="card-text mb-0">{{ $rider->identity->blood }}</p>
                                                @foreach ($rider->r_mission as $r_mis)
                                                    <p class="card-text">{{ $r_mis->mission }}</p>
                                                @endforeach
                                            </div>
                                        </div>
                                    </a>
                                    <div class="card-body py-1">
                                        <div class="collapse-content">
                                            <div class="d-flex flex-row justify-content-between">
                                                <p class="card-text collapse" id={{ $rider->nick }}>
                                                    {{ $rider->name }}
                                                </p>
                                                <p class="card-text collapse" id={{ $rider->nick }}>
                                                    16 AFU 658
                                                </p>
                                            </div>
                                            <div class="d-flex flex-row justify-content-between">
                                                <p class="card-text collapse" id={{ $rider->nick }}>
                                                    Km: 35162
                                                </p>
                                                <p class="card-text collapse" id={{ $rider->nick }}>
                                                    {{ $rider->contact->phone }}

                                                </p>
                                            </div>
                                            <div class="d-flex flex-row justify-content-between">
                                                <p class="card-text collapse" id={{ $rider->nick }}>
                                                    Borç: 125 TL

                                                </p>
                                                </a>
                                                <a class="collapse" id={{ $rider->nick }}
                                                    href="tel:{{ $rider->contact->phone }}">
                                                    <img class="rounded-circle border border-success p-1"
                                                        src="imgs/call.svg" alt="">
                                                </a>
                                            </div>
                                            <a class="btn btn-block btn-outline-info red-text p-1 my-1 mr-0 mml-1 collapsed"
                                                data-toggle="collapse" href={{ '#' . $rider->nick }}
                                                aria-expanded="false" aria-controls="collapseContent">Genişlet</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });

    </script>
</body>

</html>
