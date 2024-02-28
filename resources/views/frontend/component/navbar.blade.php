<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link rel="stylesheet" href="styles.css">
</head>
<nav class="navbar navbar-expand-lg " style="background-color:#FDE7FB; height:80px">
    <div class="container-fluid">
        <div class=" row collapse navbar-collapse " id="navbarSupportedContent">
            <div class="d-flex col-3 justify-content-center">
                <a href="/home" class="d-flex">
                    <img class="card-img-top-logo rounded-lg " src="images/logo-home.svg" alt="/" style="height:41px" />
                    <img class="card-img-top-text rounded-lg" src="images/text_home.svg" alt="/" style="width:141px;height:41px" />
                </a>
            </div>
            <div class="col-6 d-flex justify-content-center">
                <div class="d-flex w-50 my-4">
                    <div class="form-control me-2 border rounded rounded-pill" aria-label="Search" role="button">
                        <button type="button" class="btn btn-danger rounded-circle">
                            <i class="fas fa-search" style="color: #ffffff;"></i>
                        </button>
                        <span class="placeholder bg-white" style="color:#E60381">Tìm kiếm...</span>
                    </div>
                </div>
            </div>
            <div class="col-3 collapse navbar-collapse justify-content-evenly " id="navbarNav" role="">
                <button type="button" class="btn btn-hover fs-3 fw-medium border-0 rounded-4" aria-current="page" href="#" style="background-color:#FDE7FB;">Trang chủ</button>
                <div class="dropdown border rounded rounded-pill ms-3 p-3 bg-white">
                    <div class="btn-menu btn-group">
                        <button type="button" class="btn " data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                            <i class="fas fa-bars fa-lg px-1"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-center border-1 rounded-4 position-absolute " style="background-color:#FDE7FB; border-color:#990033;top:60px; width:240px; right:-40px">
                            <li><button class="dropdown-item fw-medium py-2 fs-3" type="button" href="">Đánh giá và phản
                                    hồi</button>
                            </li>
                            <li><button class="dropdown-item fw-medium py-2 fs-3" type="button">Quản lí đặt
                                    phòng</button>
                            </li>
                            <li><button class="dropdown-item fw-medium border-bottom border-secondary-subtler py-2 fs-3" type="button" style="border-color:blueviolet">Danh sách yêu thích</button></li>
                            <li><button class="dropdown-item py-2 fs-3" type="button">Quản lí thông tin đặt
                                    phòng</button>
                            </li>
                            <li><button class="dropdown-item  border-bottom border-secondary-subtler py-2 fs-3" type="button" style="border-color:blueviolet">Quản lí thông tin cá nhân</button>
                            </li>
                            <li><button class="dropdown-item py-2 fs-3" type="button">Trung tâm hỗ trợ</button></li>
                            <li><button class="dropdown-item py-2 fs-3" type="button">Đăng xuất</button></li>
                        </ul>
                    </div>
                    <div class="btn-user btn-group ">
                        <button type="button" class="btn btn-secondary rounded-circle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                            <i class="fa-solid fa-user"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-lg-end border-1 rounded-4 position-absolute" style="background-color:#FDE7FB; border-color:#990033; top:60px; width:220px">
                            <li><button class="dropdown-item fs-3 fw-medium py-2" type="button">Đăng kí</button></li>
                            <li><button class="dropdown-item fs-3 fw-medium border-bottom border-secondary-subtler py-2" type="button" style="border-color:blueviolet">Đăng nhập</button></li>
                            <li><button class="dropdown-item fs-3 py-2" type="button">Trang chủ AirHome</button></li>
                            <li><button class="dropdown-item fs-3 py-2" type="button">Hỗ trợ</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

</html>