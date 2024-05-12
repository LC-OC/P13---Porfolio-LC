<div id="hobbies_container">
    <h2>Mes Loisirs</h2>
    <div id="hobbies_content">
        <div id="hobbies_list">
            <?php 
                include('arrays/arrayHobbies.php');
                foreach($arrayHobbies as $hobbie) : ?>
                <div class="hobbies">
                    <img class="img_hobbies" id="<?php echo $hobbie['id']; ?>" src="<?php echo $hobbie['img']; ?>"></img>
                    <div id="<?php echo $hobbie['id_hide']; ?>">
                        <p><?php echo $hobbie['title']; ?></p>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
       
    </div>
</div>