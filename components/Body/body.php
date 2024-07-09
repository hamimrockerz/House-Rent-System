<link rel="stylesheet" href="./components/Body/css/style.css">
<div class="container mt-5">
  <div class="card">
    <div class="card-body p-5">
      <div class="row">
        <div class="col-12" id="login-section">
          <h2 class="mb-4">Login</h2>
          <form>
            <div class="mb-3">
              <input type="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
          </form>
        </div>
        <div class="col-12 d-none" id="signup-section">
          <h2 class="mb-4">Signup</h2>
          <form>
            <div class="mb-3">
              <input type="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" placeholder="Confirm Password" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Signup</button>
          </form>
        </div>
      </div>
      <div class="text-center mt-4">
        <button class="btn btn-link" id="toggle-login-signup">Signup</button>
      </div>
    </div>
  </div>
</div>
