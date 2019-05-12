<?php include('../includes/Header.php'); ?>

<body id="home" class="scrollspy">

    <?php include('../includes/Navbar.php'); ?>

    <section>

        <div id="new-stamp">
            <h3>New Stamp</h3>
            <div class="row">
                <form action="saveStamp.php" method="get" class="col s12">
                    <div class="row">

                    
          <div class="gallery-upload">
              <h2>Upload</h2>
              <form action="includes/Navbar.php" method="post" enctype="multipart/form-data">
                <input type="text" name="name" placeholder="Stamp title">
                <input type="text" name="term" placeholder="Year of Issued">
                <input type="text" name="description" placeholder="Stamp description...">
                <input type="file" name="picture">
                <button type="submit" name="submit">UPLOAD</button>
              </form>
            </div>

        <?php include('../includes/Footer.php') ?>


</body>

</html>