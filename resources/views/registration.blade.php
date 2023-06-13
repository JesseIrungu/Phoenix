<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" charset="utf-8"></script>
  </head>
  <body>
    <div class="container-sm">
<nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TechNiche</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="homepage">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="homepage">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="homepage">Portofolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="homepage">Contacts</a>
        </li>

        </ul>
        
    </div>
  </div>
</nav>
  </div>
  <div class="container-sm">
    <section class="vh-100 bg-image"
      style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
      <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
              <div class="card" style="border-radius: 15px;">
                <div class="card-body p-5">
                  <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                  <form action="{{route('register-client')}}" method="post">

                  {{ csrf_field() }}
                  @if(Session::has('success'))
                  <div class="alert alert-success">{{Session::get('success')}}</div>
                  @endif
                  @if(Session::has('fail'))
                  <div class="alert alert-danger">{{Session::get('fail')}}</div>
                  @endif


                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example1cg">Enter Name</label>
                      <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="name" />
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3cg">Enter Email</label>
                      <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="email"/>                   
                    </div>

                    <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cg">Password</label>
                      <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="password" />                    
                    </div>

                    <div class="form-check d-flex justify-content-center mb-5">
                      <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" name="checkbox_field" required/>
                      <label class="form-check-label" for="form2Example3g">
                        I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                      </label>
                    </div>

                    <div class="form-group ">
                    <button class="btn btn-block btn-primary" type="submit">Register</button>
                </div>

                    <p class="text-center text-muted mt-5 mb-0">Already have an account? <a href="userlogin" class="fw-bold text-body"><u>Login here</u></a></p>

                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>

  </body>
</html>