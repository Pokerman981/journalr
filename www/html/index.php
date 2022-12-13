<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Planner</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="metro4:init" content="true">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
  <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>

  <link href="assets/css/style.css" rel="stylesheet">

  <!-- <script type="text/javascript" src="config.js"></script> -->

    <!-- Main Quill library -->
    <script src="assets/vendor/quill/quill.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>

    <!-- Theme included stylesheets -->
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <!-- <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet"> -->

    <!-- Core build with no theme, formatting, non-essential modules -->
    <!-- <link href="assets/vendor/quill/quill.core.css" rel="stylesheet"> -->
    <!-- <script src="assets/vendor/quill/quill.core.js"></script> -->



</head>

<body onload="load(this)">


<div class="wrapper">

    <div class="nav">
         <div class="navWrapper">
            <div class="navHamburger" onclick="navToggle(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>            
            </div>
            
            <div id="navDate" class="navDate"></div>
            
            <a class="navAccount" href="google.ca"><img class="navAccount" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAAE00lEQVRogdWaXWxVRRDHf4DIrcSWlrS0JKKA1TRK0fRBiY0YJIaPNvTBECKWR02MGgUkMdqYqE/GF41Vg/EjfsSoj5poNZgAIQqhfERtkRb1hSqoLZVWqJbWh5l1zzk55/bMuR8Jk0zO7Z79z/xnd+/u7PTCZS6zimSnBrgTaAWagOVAHTBf348DZ4CfgD7gALAXGCmS/0ySAzqBr4BLwLRRJ4Ee4H61VTapAHYCQxlIJ+kQsENtl1TakGVQLOJRPQVsLAXxHPBSCYlH9V3gqmKRbwCOlpG808NAfaHklyHTWm7yTgeVQyZpyED+LPAysA5YrHbm6OcNyDL8M0MQ5pmowLZs/gaexO/7M9l+Cjkb0trvxbjV7jYYH0QOL4DZQDvwHjJ746qnkC9mG/7wvBkYMPh5LS35NiP5BsU1k27WeoEVilmsNtL6Wz8T+QrS7/PjyCgCrAXGDETGgDWKXYEswbQDlncp7TSQ6FLMjcBfBpzTUaBRbXQZcNuTyOdInx6M4A+avRnIO/1abcwn/e50moRZ6DQ4fkUxqwsg77RVbb1qwGx1pGcHAtgWF1WCfKnP+wyYJHFkegyYzmhDDZLeph2BaxT3vQGTpMfV1hIDZhJYAH4GViMnZlo5o89rDZgkcTZ+N2DmIBeo/wO4w+jUBTvXiIsTZ8N6O2wFH0BTno5xUqfPX424OBmK2EwrTeADaMzTMU5W6vNbIy5ODurzViOuEXwANUZwmz4/MuLi5GN9bjDiFgb/mMC2cwwDVcgAHDNig9qrNqqQw9GCvVhIANPAs4pdiS0Pcnoen9Q9lwEfCuCPDAYmgBbFr0Fym7TYUeAuxbZkHMDQtnvSCJ4C3iS8cywH9qXA7tO+TuqAt9SmhcOJYACfGYG3B7CrkLuAk7XA2zooF1RPatvdgX7NMXZ+NPD4NBjAiylBe4BqxSxFdqEpZAl0AZXMLJXAM4qZAj7En8Y1SIaahssLQaMdKQDv40/NDuLvAOeAbn2/BEl7c/q5Q9+dS8C5gtaVwAcp+LQHA6gmfzK3J0D+aezrNY1eAnYFgsg3E/8iW29IehI69+OXza4SEI/qw4FBPZHQ5/MoeZAqcdyo3Kbvt1CakY/qJLBJfa4ivvIdew+Zh1zXgh1367sGbPt8oTqM36LfiLwbIs/Ffkeg4xg+3/ikjOSdvqO+FxIugj2WRB6krOLKid9pWzVy7Jc7gGF8pe8HbRsgRYVuI34t3qJt7diunIXqP/hDrznge91M5J28roBfgEXatg3ZvkpNfgK4V30uAn7W9u605EGm6bACD+L33E2UdjmNAPeoryr1PQ0cQjYZk9Tj65a9QK223wAcKQH5b4Dr1Eet+nTr3q0CsywLBDGIT5+vAB7BXuuP07PAA/hCQUvE59Ks5J3U40fjIlI/dWlFpQbSl4H4ceBB/E4zF3gCfzc4RAEjH5UcUp93zvsJ1/pBirzbkaTvGPCbBnwBqV4cQf5H8Cjh+8AstdUfsN9NhjWfRtYTruf3AQ/hvx8WqVVscPYGMGyVWSUHPE447ZhEfj7wPLAZuAlZehWq9dq2WfscIHyunEZO2LL+x34ekgB+QbZDbhLJKrdSwHIp1o89FhD+scf1yBK5Wt+fRy7hA0iKvB+5G48Wyf/lK/8BRWWPmjCtGGwAAAAASUVORK5CYII="></a>
        </div>
    </div>

    <div id="sidebar" class="sideBar sideBarHidden">
        <div class="sideBarWrapper">
            
            <div class="calendarWrapper">
                <div data-role="calendar" data-picker-mode="true" data-buttons="today"></div>
            </div>


        </div>
    </div>
    <div class="main" >
        <div class="mainWrapper">
            <div class="editor" id="editor">
                <!-- <textarea class="" cols="50000" maxlength="50000" wrap="hard" autofocus placeholder="Start Typing..."></textarea> -->
            </div>
            
        </div>
    </div>

</div>

</body>

  <script>

    function load(x) {

        setInterval(function() {
            var dateElement = document.getElementById("navDate");
            dateElement.innerText = new Intl.DateTimeFormat('en-CA', { dateStyle: 'full', timeStyle: 'long', timeZone: 'America/Edmonton' }).format(new Date().getTime());
        }, 1000);

    }


    
    function navToggle(element) {
        element.classList.toggle("change");
        document.getElementById("sidebar").classList.toggle("sideBarChange");
        document.getElementById("sidebar").classList.toggle("sideBarHidden");
        // if (element.classList.contains("change")) {
        //     document.getElementById("sidebar").style.display = "block";
        //     return;
        // } 

        // document.getElementById("sidebar").style.display = "none";

    }

    // var options = {
    // debug: 'info',
    // modules: {
    //     toolbar: '#toolbar'
    // },
    // placeholder: 'Compose an epic...'
    // };

    // var editor = new Quill("#editor", options);

    // Quill.register('modules/toolbar');
    // var toolbar = Quill.import ( 'modules/toolbar' );

    var quill = new Quill('#editor', {
        // debug: 'info',
        placeholder: 'Start Typing...',
        scrollingContainer: '#editor',
        theme: 'snow'
    });

    // var quill = new Quill('#editor', {
    // modules: {
    //     toolbar: {
    //     container: '#toolbar'  // Selector for toolbar container
    //     }
    // }
    // });

  </script>


<?php echo 'We are running PHP, version: '; ?></p>  
      <?  
       $database ="mydb";  
       $user = "root";  
       $password = "Qwaszx1230";  
       $host = "mysql";  

       $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);  
       $query = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");  
       $tables = $query->fetchAll(PDO::FETCH_COLUMN);  

        if (empty($tables)) {
          echo "<p>There are no tables in database \"{$database}\".</p>";
        } else {
          echo "<p>Database \"{$database}\" has the following tables:</p>";
          echo "<ul>";
            foreach ($tables as $table) {
              echo "<li>{$table}</li>";
            }
          echo "</ul>";
        }
        ?>