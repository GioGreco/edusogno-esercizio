<?php
include __DIR__.'/assets/partials/settings.php';

if(!isset($_SESSION['userId'])){
    header("Location: login_page.php");
    session_destroy();
}
function getUserEvents($conn)
    {
        $userEvents = [];
        $stmt = $conn->prepare("SELECT * FROM `eventi`");

        $stmt->execute();
        $result = $stmt->get_result();
        $events = $result->fetch_all(MYSQLI_ASSOC);

        foreach($events as $event){
            $emailList = explode(',', $event['attendees']);
            foreach ($emailList as $email) {
                if (trim($email) === $_SESSION['userEmail']) {
                  array_push($userEvents, $event);
                }
              }
        }
        
        return $userEvents;
    }

$attendingEvents = getUserEvents($conn);


include __DIR__.'/assets/partials/header.php';
?>

<section id="events">
    <header>
        <div class="logo">
            <img src="./assets/img/logo.png" alt="logo">
        </div>
        <div class="logout">
            <a href="./server/logout.php">Logout</a>
        </div>
    </header>
    <main>
        <h1>Ciao <span class="username"><?php echo $_SESSION['userName'] ?></span> ecco i tuoi eventi</h1>

        <div class="eventsRow">
            <?php
                foreach($attendingEvents as $event){
            ?>
                <div class="single-event">
                    <h2> <?php echo $event['nome_evento'] ?> </h2>
                    <p> <?php echo $event['data_evento']?> </p>
                    <button>Join</button>
                </div>
            <?php
                }
            ?>
        </div>
    </main>
</section>

<?php
include __DIR__.'/assets/partials/footer.php';
?>
