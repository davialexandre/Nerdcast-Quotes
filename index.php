<?php include('includes/header.php'); ?>
    <body>
        <?php include('includes/facebook.php'); ?>
        <div id="content">
            <h1 title="Nerdcast Quotes">Nerdcast Quotes</h1>
            <form>
                <label for="episode">Selecione um episódio do nerdcast: </label>
                <?php include('includes/select_nerdcasts.php'); ?>
                <button type="submit" value="OK" title="OK">OK</button>
            </form>
            <p class="ou">OU GERE UMA</p>
            <a href="#" onclick="popup(); return false;">
                <img alt="frase aleatória" title="frase aleatória" src="images/frase_aleatoria.png" class="frase-aleatoria" />
            </a>
        </div>
        <?php include('includes/footer.php'); ?>
    </body>
</html>
