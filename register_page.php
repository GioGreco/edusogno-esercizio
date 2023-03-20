<?php
include __DIR__.'/assets/partials/header.php';
?>
<!-- <form method="POST" action="./server/register.php">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required><br>

    <label for="cognome">Cognome:</label>
    <input type="text" id="cognome" name="cognome" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>

    <input type="submit" value="Registrati">
  </form> -->

  <section id="register">
  <header>
    <div class="logo">
      <img src="./assets/img/logo.png" alt="logo">
    </div>
  </header>
  <main>
    <h1>Crea il tuo account</h1>
    <form class="data-form" method="POST" action="./server/register.php">

      <div class="formField">
        <label for="nome">Inserisci il nome</label>
        <input type="text" name="nome" id="nome"  placeholder="Mario" />
      </div>

      <div class="formField">
        <label for="cognome">Inserisci il cognome</label>
        <input type="text" name="cognome" id="cognome"  placeholder="Rossi" />
      </div>

      <div class="formField">
        <label for="email">Inserisci l'email</label>
        <input type="email" name="email" id="email"  placeholder="name@example.com" />
      </div>

      <div class="formField">
        <label for="password">Inserisci la password</label>
        <input type="password" name="password" id="password" placeholder="Scrivila qui"/>
      </div>

      <div class="formField">
        <button type="submit">Registrati</button>
        <a href="#">Forgot password?</a>
      </div>

      <div class="toRegistration">
        <p>Hai già un account? <a href="./login_page.php">Accedi</a></p>
      </div>
    </form>
  </main>
</section>
<?php
include __DIR__.'/assets/partials/footer.php';
?>