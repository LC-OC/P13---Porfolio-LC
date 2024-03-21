<div id="formations_container">
    <h2>Mes Formations</h2>
    <div id="formations">
        <?php 
            include('arrays/arrayFormations.php');
            foreach($arrayFormations as $formation) : ?>
            <div class="cards_formations">
                <h3><?php echo $formation['title']; ?></h3>
            </div>
        <?php endforeach ?>
    </div>
</div>