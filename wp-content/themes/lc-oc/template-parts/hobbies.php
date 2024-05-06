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
        <?php 
                include('arrays/arrayHobbies.php');
                foreach($arrayHobbies as $hobbie) : ?>
                    <div id="<?php echo $hobbie['id_hide']; ?>">
                        <p><?php echo $hobbie['title']; ?></p>
                    </div>
            <?php endforeach ?>
        </div>
    </div>
    <div id="show_footer">
        <i class="fa-solid fa-chevron-up fa-xl" id="icon_show_footer"></i>
    </div>
</div>