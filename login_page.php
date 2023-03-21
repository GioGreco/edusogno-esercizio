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
        <i id="hidePsw" class="fa-solid fa-eye"></i>
      </div>

      <div class="formField">
        <button type="submit">Accedi</button>
        <a href="./recoverPsw_page.php">Password dimenticata?</a>
      </div>

      <div class="toRegistration">
        <p>Non hai ancora un profilo? <a href="./register_page.php">Registrati</a></p>
      </div>
    </form>
  </main>
</section>
<?php
include __DIR__.'/assets/partials/footer.php';
?>