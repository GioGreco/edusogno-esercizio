<?php
include __DIR__.'/assets/partials/settings.php';
include __DIR__.'/assets/partials/header.php';
?>

<?php
if(isset($_SESSION['message'])){
?>
<div class="popup-message"> <?php echo $_SESSION['message'] ?></div>
<?php
session_destroy();
}
?>

<section id="login">
  <header>
    <div class="logo">
      <img src="./assets/img/logo.png" alt="logo">
    </div>
  </header>
  <main>
    <h1>Hai già un account?</h1>
    <form class="data-form" method="POST" action="./server/login.php">

      <div class="formField">
        <label for="email">Inserisci l'email</label>
        <input type="email" name="email" id="email"  placeholder="name@example.com" />
      </div>

      <div class="formField">
        <label for="password">Inserisci la password</label>
        <input type="password" name="password" id="password" placeholder="Scrivila qui"/>
      </div>

      <div class="formField">
        <button type="submit">Accedi</button>
        <a href="#">Forgot password?</a>
      </div>

      <div class="toRegistration">
        <p>Non hai ancora un profilo? <a href="./register_page.php">Registrati</a></p>
      </div>
    </form>
  </main>
</section>

<!-- <form method="POST" action="./server/login.php">
                  <p>Please login to your account</p>

                  <div class="form-outline mb-4">
                    <input type="email" name="email" id="email" class="form-control"
                      placeholder="Phone number or email address" />
                    <label class="form-label" for="email">Username</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="password" id="password" class="form-control" />
                    <label class="form-label" for="password">Password</label>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log
                      in</button>
                    <a class="text-muted" href="#!">Forgot password?</a>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <button type="button" id="registerBtn" class="btn btn-outline-danger">Create new</button>
                  </div>

                </form> -->
<?php
include __DIR__.'/assets/partials/footer.php';
?>