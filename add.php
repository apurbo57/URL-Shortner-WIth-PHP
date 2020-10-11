<?php include 'header.php'; ?>
<div id="main-content">

    
    <?php 

        if (isset($_POST['save'])) {
            
            $link    = $_POST['link'];
            $short_link = $_POST['short_link'];
            $description   = $_POST['description'];

            $conn = new mysqli('localhost','root','','shorturl');
            $conn -> query("INSERT INTO shortner( link, short_link, description ) VALUES ('$link','$short_link') ");

            header("location: allurl.php");
        }

     ?>


    <h2>Add New Short URL</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Link</label>
            <input type="text" name="link" />
        </div>
        <div class="form-group">
            <label>Short Link</label>
            <input type="text" name="short_link" />
        </div>
        <input class="submit" name="save" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
