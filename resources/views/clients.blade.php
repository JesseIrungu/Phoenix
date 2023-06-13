<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>techniche| manage clients</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" charset="utf-8"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">


  <style>
    .btn1 {
      display: inline-block;
      word-spacing: 10px;

    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg fixed-top bg-info">

      <a class="navbar-brand" href="#">
        <img src="Company2.png" alt="" width="100" height="94" class="d-inline-block align-text-top">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <h4>TechNiche</h4>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><strong>Home</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="clients"><strong>Manage Users</strong></a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="messages"><strong>Interactions</strong></a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <strong>Switch User</strong>
            </a>
            <ul class="dropdown-menu bg-info">
              <li><a class="dropdown-item" href="adminlogin">Admin</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="userlogin">Normal User</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="homepage"><i class="fa-solid fa-right-to-bracket"></i></span><strong>Logout</strong></a>
        </li>
      </ul>
    </nav>
  </div>
  <br><br>

  <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
                <h4>Registered Clients</h4>
                <hr>

                @csrf
                 
                    @if(Session::has('client_delete'))
                    <div class="alert alert-success">{{Session::get('client_delete')}}</div>
                    @endif

                <a style="float:center" href="registration">Add new client</a>
                    <table class="table">
                        <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                    
                    @foreach($clients as $clients)
                    <tr>
                        <td>{{ $clients ->id}}</td>
                        <td>{{ $clients ->name }}</td>
                        <td>{{ $clients ->email }}</td>
                        <td>{{ $clients ->password }}</td>
                        <td>
                            <a href="/edit-client/{{ $clients ->id }}">Update</a>
                            <a href="/delete-client/{{ $clients ->id }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach

                    </table>

            </div>
        </div>
    </div>


  <div class="container-fluid">
    <div class="b-example-divider"></div>

    <div class="container-fliud bg-light">
      <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
        <div class="col mb-3">
          <a href="http://localhost/phoenix/Home.php#" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
            <img src="Company2.png" alt="" width="100" height="94" class="d-inline-block align-text-top">

          </a>
          <p class="text-muted">&copy; TechNiche 2023</p>
        </div>

        <div class="col mb-3">

        </div>

        <div class="col mb-3">
          <h5>Contact us</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2">0748174004-Linus Gatungo</li>
            <li class="nav-item mb-2">0743784792-Jesse Kimani</li>
            <li class="nav-item mb-2">Email- info@technichesolutions.co.ke </li>

          </ul>
        </div>

        <div class="col mb-3">
          <h5>Our Company</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Team</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Projects</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
          </ul>
        </div>

      </footer>
    </div>
  </div>
  </div>

  </div>
</body>

</html>