<?php $episodes = include('includes/episode_list.php'); ?>
<?php $select_episode = isset($_GET['episode']) ? (int)$_GET['episode'] : null; ?>
<select id="episode" name="episode">
    <option value=""></option>
    <?php foreach($episodes as $number => $name): ?>
        <option value="<?php echo $number; ?>" <?php if($number == $select_episode) echo 'selected="selected"'; ?>>
            <?php echo $number.' - '.$name; ?>
        </option>
    <?php endforeach; ?>
</select>
