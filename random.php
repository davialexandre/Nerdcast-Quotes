<?php include('includes/error_handler.php'); ?>
<?php include('includes/header.php'); ?>
    <body>
        <?php include('includes/facebook.php'); ?>
        <div id="content">
            <a href="index.php"><h1 title="Nerdcast Quotes">Nerdcast Quotes</h1></a>
            <?php require_once('classes/Episode.php'); ?>
            <?php $episode = Episode::getRandomEpisode(); ?>
            <?php if($episode): ?>
                <?php while(empty($episode->quotes)) { $episode = Episode::getRandomEpisode(); } ?>
                <?php $quote = $episode->getRandomQuote(); ?>
                <h2 class="espisode-title"><?php echo $episode->title; ?></h2>
                <div id="quotes_list">
                <?php include('includes/helpers.php'); ?>
                    <div class="quote-block">
                        <p class="quote"><?php echo $quote; ?></p>
                        <p class="quote-post-link">
                            <a href="#" onclick='postDialog(<?php echo create_post_dialog_object($episode, $quote); ?>); return false;'>Postar no meu mural</a>
                        </p>
                    </div>
                </div>
            <?php else: ?>
                <p class="episode-error">Desculpe. Não foi possível acessar o NerdTrack para recuperar as informações para esse episódio do Nerdcast. Tente novamente.</p>
            <?php endif; ?>
            <form action="episode.php">
                <label for="episode">Selecione um episódio do nerdcast: </label>
                <?php include('includes/select_nerdcasts.php'); ?>
                <button type="submit" value="OK" title="OK">OK</button>
            </form>
            <p class="ou">OU GERE UMA</p>
            <a href="random.php">
                <img alt="frase aleatória" title="frase aleatória" src="images/frase_aleatoria.png" class="frase-aleatoria" />
            </a>
        </div>
        <?php include('includes/footer.php'); ?>
    </body>
</html>

