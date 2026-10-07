<?php
include "db.php";
session_start();
if(isset($_SESSION["id"])){
    $ids = $_SESSION["id"];
   echo "$ids";
   $result=$conn->prepare("select*from blog where userid=?");
   $result->bind_param("i",$ids);
   $result->execute();
  

 $row=$result->get_result()->fetch_assoc();
 if($_SERVER["REQUEST_METHOD"]== "POST"){
    $title=$_POST["title"]; 
    $content=$_POST["content"];
    $imagename=$_FILES["image"]["name"];
    move_uploaded_file($_FILES["image"]['temp_name'],"uplad/.$imagename");
    $sql=$conn->prepare("update blog set title=?,content=?,image=? where userid=?");
    $sql->bind_param('sssi',$title,$content,$imagename,$ids);
    if($sql->execute()){
        header('location:dashbord.php');
    }



}
}


?>

<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <h1 class="text-center">Edit with us</h1>
            <div
                class="container col-5 border rounded p-4 mt-4"
            >
              
                    
                    <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="" class="form-label">Title</label>
                    <input
                        type="text"
                        class="form-control"
                        name="title"
                        id=""
                        value="<?=$row["title"]?>"
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Choose file</label>
                    <input
                        type="file"
                        class="form-control"
                        name="image"
                        id=""
                        
                        placeholder=""
                        aria-describedby="fileHelpId"
                    />
                    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Content</label>
                    <textarea class="form-control" name="content" id="" rows="3"  > <?=$row["content"]?> </textarea>
                </div>

                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Submit
                </button>
                
                
        

                </form>
            </div>
            
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
