<?php
session_start();
include "db.php";
if(!isset($_SESSION["id"])){
    header("location:login.php");
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $title=$_POST["title"];
   $userid=$_SESSION["id"];
    $imagename=$_FILES["image"]["name"];
    $content=$_POST["content"];
move_uploaded_file($_FILES["image"]["tmp_name"],"uplad/.$imagename");
$result=$conn->prepare("insert into blog(userid,title,image,content) values(?,?,?,?)");
$result->bind_param("isss",$userid, $title,$imagename, $content);
if($result->execute()){
    header("location:dashbord.php");
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
            <h1 class="text-center my-4">Addblog..</h1>
            <div
                class="container col-4 border rounded p-4"
            >
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="" class="form-label">Title</label>
                    <input
                        type="text"
                        class="form-control"
                        name="title"
                        id=""
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
                    <textarea class="form-control" name="content" id="" rows="3"></textarea>
                </div>
                
                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Submit
                </button>
               
                     <a
                        name=""
                        id=""
                        class="btn btn-primary"
                        href="dashbord.php"
                        role="button"
                        >Cancel</a
                    >
                    
            
                
                
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
