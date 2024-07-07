<header>
    <nav class="navbar navbar-expand-lg">
      <div class="container-lg">
  
        <div class="hamburger-menu">
          <i class="fas fa-bars"></i>
        </div>
  
        
          <ul class="navbar-nav">
            <div class="close-menu">
              <i class="fas fa-times"></i>
            </div>
            <li class="nav-item">
              <a class="nav-link active" href="#">خانه</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">درباره ما</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">خدمات</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">پروژه ها</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">بلاگ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">تماس با ما</a>
            </li>
  
          </ul>
       
  
        <div class="logo">
          <a href="">Modern-Saze</a>
        </div>
      </div>
    </nav>
  
    <div class="overlay-menu"></div>
</header>
  

<div class="auth-user">

  @guest
    <div class="auth-users">
      <a href="{{route('register')}}" style="padding-left: 10px;">ثبت نام</a>
      /
      <a href="{{route('login')}}" style="padding-right: 10px;">ورود</a>
    </div>
  @else
    <div class="profile">
      <div class="prof" style="padding-bottom: 20px;">
        <a href="{{route('dashboard')}}" target="_blank">پروفایل</a>
      </div>
      <div class="logout">
        <div onclick="logoutUser()" style="cursor: pointer;">خروج</div>
      </div>
    </div>

    <form action="{{route('logout')}}" method="POST" id="logout">
      @csrf
    </form>

  @endguest

  <div class="auth-user-icon">
    <i class="fas fa-cog fa-spin"></i>
  </div>
</div>
