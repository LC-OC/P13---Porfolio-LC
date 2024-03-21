<div id="skills_container">
    <h2>Mes compétences</h2>
    <div id="skills_list">
        <ul>
        <?php 
            include('arrays/arraySkills.php');
            foreach($arraySkills as $skill) : ?>
                <li><?php echo $skill['title']; ?></li>
        <?php endforeach ?>
        </ul>
    </div>
</div>