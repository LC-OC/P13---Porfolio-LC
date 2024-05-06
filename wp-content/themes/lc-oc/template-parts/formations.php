<div id="formations_container">
    <h2>Mes Formations</h2>
    <div id="formations">
        <?php 
            include('arrays/arrayFormations.php');
            foreach($arrayFormations as $formation) : ?>
            <div class="cards_formations" id="<?php echo $formation['id']; ?>">
                <h3><?php echo $formation['title']; ?></h3>
                    <ul>
                    <li><?php echo $formation['date']; ?></li>
                    <i class="fa-regular fa-moon"></i>
                    <li><?php echo $formation['school']; ?></li>
                    <i class="fa-regular fa-moon"></i>
                    <li><?php echo $formation['diploma']; ?></li>
                </ul>
            </div>
        <?php endforeach ?>
    </div>
</div>