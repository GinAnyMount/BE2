<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('name.view' , ['name' => 'home']) }}" >Trang Chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('name.view' , ['name' => 'gioithieu']) }}">Giới Thiệu</a>
        </li> 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="sanpham" role="button" data-bs-toggle="dropdown">Sản phẩm</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('name.view' , ['name' => 'ban']) }}">Bàn</a></li>
            <li><a class="dropdown-item" href="{{ route('name.view' , ['name' => 'ghe']) }}">Ghế</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('name.view' , ['name' => 'lienhe']) }}">Liên hệ</a>
        </li> 
      </ul>
    </div>
  </div>
</nav>


</body>
</html>


