<?php
include __DIR__.'/assets/partials/header.php';
?>

    <section id="recoverPsw">
        <header>
            <div class="logo">
            <img src="./assets/img/logo.png" alt="logo">
            </div>
        </header>

        <main>
            <h1>Recupero Password</h1>
            <form class="data-form" method="POST" action="./server/recoverPsw.php">
                <div class="formField">
                    <label for="email">Inserisci l'indirizzo email con cui ti sei registrato:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <span class="desc">La tua nuova password sarà inviata all'indirizzo inserito e aggiornata automaticamente. Potrai nuovamente modicarla una volta effettuato l'accesso.</span>
                <div class="formField">
                    <button type="submit">Invia</button>
                    <a href="./login_page.php">Torna al login</a>
                </div>
            </form>
        </main>
    </section>

<?php
include __DIR__.'/assets/partials/footer.php';
?>