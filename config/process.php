
<?php
session_start();

include_once("connection.php");

include_once("url.php");

$data = $_POST;

if(!empty($data)){

 
    if($data["type"] === "create"){
        
        $link = $data["link"];
        $title = $data["title"];

        $query = "INSERT INTO memelist (link, title) VALUES (:link,:title)";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":link", $link);
        $stmt->bindParam(":title", $title);
  

        try{
            $stmt->execute();
            $_SESSION["msg"] = "Contato criado com sucesso!";

        }catch(PDOException $e){
            $error = $e->getMessage();
            echo "Erro: $error"; 
        }

    } else if ($data["type"] === "edit"){

        $link = $data["link"];
        $title = $data["title"];
        $id = $data["id"];

        $query = "UPDATE memelist 
                SET link = :link, title = :title
                WHERE id = :id";


        $stmt = $conn->prepare($query);

        $stmt->bindParam(":link", $link);
        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":id", $id);

        try{
            $stmt->execute();
            $_SESSION["msg"] = "Contato atualizado com sucesso!";

        }catch(PDOException $e){
            $error = $e->getMessage();
            echo "Erro: $error"; 
        }
    }else if ($data["type"] === "delete"){
        
        $id = $data["id"];
        $query ="DELETE FROM memelist WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id", $id);

        try{
            $stmt->execute();
            $_SESSION["msg"] = "Contato removido com sucesso!";

        }catch(PDOException $e){
            $error = $e->getMessage();
            echo "Erro: $error"; 
        }
    }

    header("location: " .$BASE_URL. "../list.php");

}else{

    $id;
    if(!empty($_GET)){
        $id = $_GET["id"];
    }

    if(!empty($id)){
        $query = "SELECT * FROM memelist WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $meme = $stmt->fetch();
    }else {

    $memelist = [];

    $query = "SELECT * FROM memelist";

    $stmt = $conn->prepare($query);

    $stmt->execute();

    $memelist = $stmt->fetchAll();
    }
}

$conn = null;


?>