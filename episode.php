<?php include('includes/header.php'); ?>
    <body>
        <?php include('includes/facebook.php'); ?>
        <div id="content">
            <h1 title="Nerdcast Quotes">Nerdcast Quotes</h1>
            <?php require_once('classes/Episode.php'); ?>
            <?php $episode = Episode::getEpisode((int)$_GET['episode']); ?>
            <h2 class="espisode-title"><?php echo $episode->title; ?></h2>
            <?php if(empty($episode->quotes)): ?>
                <p class="no-quotes">Nenhuma frase encontrada para o episódio selecionado.</p>
            <?php else: ?>
                <div id="quotes_list">
                <?php include('includes/helpers.php'); ?>
                <?php foreach($episode->quotes as $quote): ?>
                    <div class="quote-block">
                        <p class="quote"><?php echo $quote; ?></p>
                        <p class="quote-post-link">
                            <a href="#" onclick='postDialog(<?php echo create_post_dialog_object($episode, $quote); ?>); return false;'>Postar no meu mural</a>
                        </p>
                    </div>
                <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <form>
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

