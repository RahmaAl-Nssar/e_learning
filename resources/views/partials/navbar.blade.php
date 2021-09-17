   <!-- ==================================================
                          Start Top Section
    ================================================== -->
    <section class="top-section-home" dir="rtl">
        <div class="container">
          <!-- ==================================================
                             Start NavBar
          ================================================== -->
         
          <nav class="navbar navbar-expand-lg navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mx-auto" href="home.html">NavBar</a>
            <div class="collapse navbar-collapse" dir="ltr" id="navbarSupportedContent" style="z-index: 9999999;">
              <ul class="navbar-nav nav-links">
                <li class="nav-item">
                  <a class="nav-link text-light course-btn" href="courses.html">الكورسات</a>
                </li>
                <li class="nav-item mx-lg-3">
                  <a class="nav-link text-light" href="#">تواصل معنا</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link text-light" href="explan-video.html">فيديوهات توضيحية</a>
                </li> 
              </ul>
              <ul class="navbar-nav ml-auto nav-user">
                <div class="row">
                  <div class="col-6">
                    <li class="nav-item">
                      <a href="register" type="button" class="btn btn-login" class="show-student-form">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        سجل الان 
                      </a>
                    </li> 
                  </div>
                  <div class="col-6">
                    <li class="nav-item">
                      <a href="login" type="button" class="btn btn-login" class="show-login-form">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        تسجيل الدخول 
                      </a>
                    </li> 
                  </div>
                </div>
              </ul>
            </div>
          </nav>
         
          <!-- ==================================================
                              End NavBar
          ================================================== -->
        </div>
  
        <!-- ==================================================
    
        ================================================== -->
     @yield('nav')
      </section>
      
      <!-- ==================================================
                            End Top Section
      ================================================== -->


                     
