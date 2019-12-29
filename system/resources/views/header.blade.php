
    <!-- Navbar Start -->
    <div > <!-- ---------------------------------- -->
      <div class="d-flex flex-column flex-md-row align-items-center p-0 px-md-4 mb-0">
          <div class="my-0 mr-md-auto font-weight-normal">
            <div id="mySidenav" class="sidenav">
                <div class="col-5">              
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"></a>
                  <a href="{{route('home')}}" class="content_sidemenu">Beranda</a> 
                  <a href="#" class="content_sidemenu" >Pembelian</a>
                </div>
                <div style="padding-left:20px;padding-right:20px" >
                  <hr>
                </div>
                <div class="col-5"> 
                  <a href="{{route('promo')}}" class="content_sidemenu">Promo</a>
                  <a href="" class="content_sidemenu">Bantuan</a>
                  <a href="{{route('tentangkami')}}" class="content_sidemenu">Kontak</a>
                </div> 
            </div>
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
            <a href="{{route('home')}}"><img src="{{asset('assets/image/logo-IMK.png')}}" alt="" height="50px" width="50px"></a> 
          </div>
          <div>
            <ul class="nav nav-tabs justify-content-end">
              <li class="nav-item">
                  <a class="nav-link" href="{{route('promo')}}">Promo</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Tersimpan</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('info')}}">Bantuan</a>
              </li>    
              <li class="nav-item dropdown">
                  <a class="nav-link " href="{{route('login')}}" >Masuk</a>
              </li>
            </ul>
          </div>  
      </div>
    </div> 
    <!-- Navbar End -->
