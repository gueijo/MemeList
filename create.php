<?php

include_once("./config/url.php");
include_once("./Templates/header.php")

?>

    <div id="global">
      
    <div class="line"></div>
      
      <div class="contain-form">

        <div class="contain-texto-dois">
          <div class="texto2">Adicionar meme</div>
          
        </div>

          <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
          <input type="hidden" name="type" value="create">
          <div class="nomememe">
            <div class="texto3">Nome do meme</div>
            <input type="text" class="nomeMeme" id="title" name="title" placeholder="Search here…">

            <div class="texto4">Nomeie esse meme</div>
        
          </div>
          
          <div class="linkMeme">  
              <div class="linkName">Link do vídeo</div>
              <input type="text" class="pesquisa" id="link" name="link" placeholder="Search here…">  
              <div class="link">Aqui vai o link do meme</div>
            </div>
        <div class="contain-btn-create">
          <button type="submit" class="buttonMeme" style="cursor: pointer;">Add Meme</button>
        </div>
        </form>
      </div>
      
    

    <div class="contain-ex-meme">
      <div class="texto6">Seu meme vai ficar assim:</div>
      <div class="texto7">Isso é um exemplo visual.</div>
      <img  class="fotinho" src="./img/yoda.webp" alt="Yoda">
    </div>
      
    </div>
      

<?php
  include_once("templates/footer.php");
?>