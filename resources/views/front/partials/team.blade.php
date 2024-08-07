<section class="team py-5">
    <div class="container py-5">
      <div class="team-title">
        <h6 class="fs-6 fw-bold text-center text-primary">تیم و کارکنان</h6>
        <h1 class="text-center fw-bold mt-4">مهندسین و کارکنان ما</h1>
      </div>
  
      <div class="row mt-5">
        @foreach($members as $member)
          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="team-item">
              <div class="team-item-img" style="background-image: url('{{asset('/front/images/staff/'.$member->image)}}');">
                <ul>
                  <li><a href="{{$member->instagram}}"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="{{$member->facebook}}"><i class="fab fa-facebook"></i></a></li>
                  <li><a href="{{$member->twitter}}"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="{{$member->linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
              </div>
              <div class="team-item-text py-3 px-3">
                <h4 class="text-center fs-5 fw-bold">{{$member->name}}</h4>
                <h6 class="text-muted text-center fs-6 fw-bold">{{$member->job}}</h6>
              </div>
            </div>
          </div>
        @endforeach
        {{-- <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
          <div class="team-item">
            <div class="team-item-img" style="background-image: url('{{asset('/front/images/staff/1.webp')}}');">
              <ul>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
            <div class="team-item-text py-3 px-3">
              <h4 class="text-center fs-5 fw-bold">ناهید محمدی</h4>
              <h6 class="text-muted text-center fs-6 fw-bold">مهندس ارشد</h6>
            </div>
          </div>
        </div> --}}
        {{-- <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
          <div class="team-item">
            <div class="team-item-img" style="background-image: url('{{asset('/front/images/staff/2.webp')}}');">
              <ul>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
            <div class="team-item-text py-3 px-3">
              <h4 class="text-center fs-5 fw-bold">جواد قاسمی</h4>
              <h6 class="text-muted text-center fs-6 fw-bold">مهندس ارشد</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
          <div class="team-item">
            <div class="team-item-img" style="background-image: url('{{asset('/front/images/staff/3.webp')}}');">
              <ul>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
            <div class="team-item-text py-3 px-3">
              <h4 class="text-center fs-5 fw-bold"> رضا قاسمی</h4>
              <h6 class="text-muted text-center fs-6 fw-bold">مهندس ارشد</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
          <div class="team-item">
            <div class="team-item-img" style="background-image: url('{{asset('/front/images/staff/4.webp')}}');">
              <ul>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
            <div class="team-item-text py-3 px-3">
              <h4 class="text-center fs-5 fw-bold">احمد محمدی</h4>
              <h6 class="text-muted text-center fs-6 fw-bold">مهندس ارشد</h6>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </section>