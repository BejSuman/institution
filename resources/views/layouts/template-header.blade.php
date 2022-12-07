 <!-- Navbar Start -->
 <div class="container-fluid bg-light position-relative shadow">
     <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
         <a href="{{ asset('/') }}" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px">
             <i class="flaticon-043-teddy-bear"></i>
             <span class="text-primary">Institution</span>
         </a>
         <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
             <div class="navbar-nav font-weight-bold mx-auto py-0">
                 <a href="{{ asset('/') }}" class="nav-item nav-link active">Home</a>
                 <a href="{{ asset('/about') }}" class="nav-item nav-link">About</a>
                 {{-- <a href="class" class="nav-item nav-link">Classes</a> --}}
                 {{-- <a href="team" class="nav-item nav-link">Teachers</a> --}}
                 <a href="{{ asset('/gallery') }}" class="nav-item nav-link">Gallery</a>
                 <div class="nav-item dropdown">
                     {{-- <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a> --}}
                     <div class="dropdown-menu rounded-0 m-0">
                         <a href="blog" class="dropdown-item">Blog Grid</a>
                         <a href="single" class="dropdown-item">Blog Detail</a>
                     </div>
                 </div>
                 <a href="{{ asset('/contact') }}" class="nav-item nav-link">Contact</a>
             </div>
             <a href="{{ asset('admission') }}" class="btn btn-primary px-4">Admission Now</a>
         </div>
     </nav>
 </div>
 <!-- Navbar End -->
