<style>
  .btn-color {
    background-color: #0e1c36;
    color: #fff;

  }

  .profile-image-pic {
    height: 200px;
    width: 200px;
    object-fit: cover;
  }

  .cardbody-color {
    background-color: #ebf2fa;
  }

  a {
    text-decoration: none;
  }
</style>
<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <h2 class="text-center text-dark mt-5">Login Form</h2>
      <div class="card my-5">

        <form class="card-body cardbody-color p-lg-5">

          <div class="text-center">
            <img src="https://static.vecteezy.com/system/resources/thumbnails/007/033/146/small/profile-icon-login-head-icon-vector.jpg" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px" alt="profile">
          </div>

          <div class="mb-3">
            <input type="text" class="form-control" id="Username" aria-describedby="emailHelp" placeholder="User Name">
          </div>
          <div class="mb-3">
            <input type="password" class="form-control" id="password" placeholder="password">
          </div>
          <div class="text-center"><button type="submit" class="btn btn-dark px-5 mb-5 w-100">Login</button></div>
          <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not
            Registered? <a href=" <?= $this->config->base_url('login/sign_up') ?>" class="text-dark fw-bold"> Create an
              Account</a>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>