<?php 
    include_once("templates/header.php");
?>

    
    <div class="container">


        <?php if(isset($printMSG) && $printMSG != ''): ?>
            <p id="msg"><?= $printMSG ?></p>
        <?php endif; ?>

        <?php if(count($memelist) > 0): ?>

        <h1 id="title-list">Sua lista</h1>
                <div class="line"></div>

            <ul class="table" id="memes-table">

                <tbody>
                    <?php foreach ($memelist as $memes): ?>
                            <ul class="meme-list">
                                <li class="col">
                                    <div class="testes">

                                        <?php if(substr($memes["link"],12,7) === "youtube" ): ?>

                                            <a height="100px" width="200px" href="<?= $BASE_URL ?>show.php?id=<?= $memes["id"] ?>" ><img src="http://img.youtube.com/vi/<?=extrairCodigoDoVideo($memes["link"])?>/default.jpg" alt=""></a> <!-- Encaminhar para o Meme selecionado -->

                                        <?php elseif(substr($memes["link"],12,6) === "tiktok") : ?>
                                            <a  href="<?= $BASE_URL ?>show.php?id=<?= $memes["id"] ?>" ><img height="90px" width="120px" src="https://p16-va-tiktok.ibyteimg.com/obj/musically-maliva-obj/2fa26c9dd31ce860dc627e5375f58a98" alt=""></a> <!-- Encaminhar para o Meme selecionado -->

                                        <?php else :?>
                                            <a  href="<?= $BASE_URL ?>show.php?id=<?= $memes["id"] ?>" ><img height="90px" width="120px" src="https://cdn.ome.lt/poE-jjZ9Rj9zTr_AGh1MfxX9AS0=/1200x630/smart/extras/conteudos/twitter_novo_logo_x.webp" alt=""></a> <!-- Encaminhar para o Meme selecionado -->
                                            
                                        <?php endif; ?>

                                    </div>
                                </li>
                                <a href="show.php?id=<?= $memes["id"] ?>"><li class="col2"><?= $memes["title"] ?></li></a>
                                        
                                        <form class="delete-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
                                            <input type="hidden" name="type" value="delete">
                                            <input type="hidden" name="id" value="<?= $memes["id"] ?>">
                                            <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                                        </form>
                            </ul>
                    <?php endforeach; ?>
                </tbody>  

            </ul>
        <?php else: ?>
            <p id="empty-list-text">Ainda não há contatos cadastrados na sua Agenda, <a href="<?= $BASE_URL ?>create.php">Clique Aqui para Adicionar</a></p>
        <?php endif; ?>

    </div>

    
<?php
    include_once("templates/footer.php");
?>