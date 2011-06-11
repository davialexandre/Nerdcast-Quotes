<?php $episodes = include('includes/episode_list.php'); ?>
<select id="episode" name="episode">
    <option value=""></option>
    <?php foreach($episodes as $number => $name): ?>
        <option value="<?php echo $number; ?>"><?php echo $number.' - '.$name; ?></option>
    <?php endforeach; ?>
</select>
