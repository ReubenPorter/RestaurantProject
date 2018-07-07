<?php
    define("TITLE", "Team | Reuben's Fine Dining");
    include('includes/header.php');
?>

<div id="team-members">
    <h1>Our Team at Reuben's</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium deserunt dicta dolorum ea earum error iste, possimus praesentium quos repellat similique sint tenetur ullam. Ab aliquam ea facilis molestias possimus.</p>
    <hr>

    <?php
        foreach ($teamMembers as $member) { ?>

            <div class="member">
                <img src="img/<?php echo $member['img']; ?>.png" alt="<?php echo $member['name']; ?>">
                <h2><?php echo $member['name']; ?></h2>
                <p><?php echo $member['bio']; ?></p>
            </div>

            <?php } ?>
    
</div>

<?php include('includes/footer.php'); ?>