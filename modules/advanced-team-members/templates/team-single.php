<?php /* Template Name: Single Team Template */ ?>

<?php get_header();

global $post;

$team_id = $post->ID;

$team_name = get_the_title($team_id);
$first_name = explode(' ', $team_name);
$first_name = reset($first_name);

$job_title = get_field('team_job_title', $team_id);
$qualifications = get_field('team_qualifications', $team_id);
$team_phone = get_field('team_phone', $team_id);
$team_email = get_field('team_email', $team_id);

$member_id = strtolower(preg_replace("#[^A-Za-z0-9]#", "", $team_name));

if(get_field('team_second_image', $team_id)) {
    $attachment_id = get_field('team_second_image', $team_id);
} else {
    $attachment_id = get_post_thumbnail_id($team_id);
}

$team_img = vt_resize($attachment_id,'' , 900, 900, true);
?>

<div class="team__single__container">

    <div class="max__width">

        <div class="top">
            <div class="left">  
                <div class="name">
                    <h3><?php echo $team_name ?></h3>
                    <h5><?php echo $qualifications ?></h5>
                    <p><?php echo $job_title ?></p>
                </div>

                <div class="details">

                    <div class="item">
                        <p><?php echo the_content(); ?></p>
                    </div>

                </div>
            </div>

            <div class="right">

                <img src="<?php echo $team_img['url']; ?>" alt="">

                    <?php $team_photo_hide_section = '';
                        if(get_field('team_photo_hide_section', $team_id)) {
                            $team_photo_hide_section = ' hide-section';
                        }
                    ?>

            </div>
        </div>

    </div>

</div>

<?php get_footer();?>