<div id="hobbies_container">
    <h2>Mes Loisirs</h2>
    <div id="hobbies_content">
        <div id="hobbies_list">
            <?php 
                include('arrays/arrayHobbies.php');
                foreach($arrayHobbies as $hobbie) : ?>
                    <img id="<?php echo $hobbie['id']; ?>" src="<?php echo $hobbie['img']; ?>"></img>
            <?php endforeach ?>
        </div>
        <div id="hobbies_infos">
            
        </div>
    </div>
</div>