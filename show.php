<?php 

include_once("templates/header.php");

?>
<div class="back-btn">

<a href="list.php" id="back-link"> Voltar </a>

</div>

    <h1 class="title-video-meme"><?= $meme["title"] ?></h1>
             <div class="line"></div>

    <?php if(substr($meme["link"],12,7) === "youtube" ): ?>


    <div class="content-video-meme">
        <div class="video-meme">
            <div class="youtube-meme">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?= extrairCodigoDoVideo($meme["link"]) ?>" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;
                clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                ></iframe></div>
            </div>
        </div>
    <?php elseif(substr($meme["link"],12,6) === "tiktok") : ?>

        <div class="video-meme">    
            <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@empatiacristao/video/<?= extrairCodigoDoTikTok($meme["link"]) ?>" 
    data-video-id="<?= extrairCodigoDoTikTok($meme["link"]) ?>" style="max-width: 605px;min-width: 325px;"  > <section>
   </section> </blockquote> <script async
         src="https://www.tiktok.com/embed.js"></script>
            </div>
        </div>
    <?php else :?>
        
        <div class="video-meme">
            <blockquote class="twitter-tweet"> <p lang="zxx" dir="ltr"><a href="https://twitter.com/i/status/<?= extrairCodigoDoVideoTwitter($meme["link"])?>?ref_src=twsrc%5Etfw">-</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            <p><?= extrairCodigoDoVideoTwitter($meme["link"])?></p></div>
    <?php endif; ?>

<?php
    include_once("templates/footer.php");
?>  