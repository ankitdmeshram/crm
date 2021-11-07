<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Brokod Admin Panel</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css"
        integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous" />

    <link rel="stylesheet" href="assets/css/style.css">

    <script src="assets/js/script.js"></script>

        
</head>

<body>
    <div class="container-fluid gs-cont">
        <div class="gs-container">
            <div class="gs-sidebar gs-col bg-dark" id="gs-sidebar">
                <h1 class="pl-3 p-1">Login</h1>
                <ul class="gs-scroll pt-2">
                    <a href="/">
                        <li to="/"><i class="fa fa-home" aria-hidden="true"></i> Home</li>
                    </a>
                    <a href="/admission">
                        <li>
                            <i class="fa fa-sign-in" aria-hidden="true"></i> Admission
                        </li>
                    </a>
                    <a href="/blank">
                        <li>
                            <i class="fa fa-sign-in" aria-hidden="true"></i> Blank Page
                        </li>
                    </a>

                    <a data-toggle="collapse" href="#userinterface">
                        <li><i class="fab fa-buffer"></i> User Interface</li>
                    </a>
                    <ul class="collapse" id="userinterface">
                        <a href="/buttons">
                            <li>Buttons</li>
                        </a>
                    </ul>
                </ul>
            </div>

            <div class="gs-body gs-col container-fluid bg-light" id="gs-body">
                <nav class="
                navbar navbar-expand-lg navbar-light
                shadow-sm
                bg-white
                rounded
                gs-nav
                " id="gs-nav">
                    <button onclick="gs_sidebar_close()" id="gs_sidebar_close">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <button onclick="gs_sidebar_open()" id="gs_sidebar_open">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <button onclick="gs_mob_sidebar_open()" id="gs_mob_sidebar_open">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="#">Body Part</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto" id="gs-head-nav">
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#notification" class="nav-link"><i
                                        class="fas fa-bell"></i></a>
                                <ul class="gs-dropdown collapse" id="notification" data-parent="#gs-head-nav">
                                    <p class="p-3">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Dolores animi vero non consectetur illo laborum
                                        exercitationem nihil mollitia delectus veniam ipsam,
                                        repellendus voluptates est velit aliquam hic soluta
                                        voluptas debitis.
                                    </p>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#profile" class="nav-link"><i
                                        class="fas fa-user"></i></a>
                                <ul class="gs-dropdown collapse" id="profile" data-parent="#gs-head-nav">
                                    <li class="nav-item">
                                        <a href="/signin" class="nav-link">
                                            <i class="fa fa-sign-in" aria-hidden="true"></i>
                                            Signin</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/signup" class="nav-link">
                                            <i class="fa fa-user-plus" aria-hidden="true"></i>
                                            Signup</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="/signin" class="nav-link">
                                    <i class="fa fa-sign-in" aria-hidden="true"></i> Signin</a>
                            </li>
                            <li class="nav-item">
                                <a href="/signup" class="nav-link">
                                    <i class="fa fa-user-plus" aria-hidden="true"></i> Signup</a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div class="gs-content card m-3 p-3">
                    <h1>Home</h1>

                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script defer src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js"
        integrity="sha384-G/ZR3ntz68JZrH4pfPJyRbjW+c0+ojii5f+GYiYwldYU69A+Ejat6yIfLSxljXxD"
        crossorigin="anonymous"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>