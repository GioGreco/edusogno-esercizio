<?php
include __DIR__.'/assets/partials/header.php';
?>

  <section id="register">
  <header>
    <div class="logo">
      <img src="./assets/img/logo.png" alt="logo">
    </div>
  </header>
  <main>
    <h1 id="title">Crea il tuo account</h1>
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
        <i id="hidePsw" class="fa-solid fa-eye"></i>
      </div>

      <div class="formField">
        <button type="submit">Registrati</button>
        <a href="./recoverPsw_page.php">Password dimenticata?</a>
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