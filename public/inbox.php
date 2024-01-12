<?php
session_start();

if (!isset($_SESSION['UserData']['Username'])) {
    exit;
}
$db = mysqli_connect('localhost', 'root', '', 'face_recog');

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Inbox</title>
    <!-- Add your head styles here -->
</head>

<style>
    /* Add your common styles here */
    body {
        margin: 0;
        padding: 0;
        background-color: #000;
    }

    .sidebar {
        height: 100%;
        width: 250px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        padding-top: 20px;
        display: none; /* Initially hide the sidebar */
    }

    .sidebar a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 18px;
        color: #818181;
        display: block;
    }

    .sidebar a:hover {
        color: #f1f1f1;
    }

    .content {
        margin-left: 0px;
        padding: 20px;
    }

    .toggle-btn {
        font-size: 20px;
        color: white;
        background-color: transparent;
        border: none;
        cursor: pointer;
        position: fixed;
        margin: 20px;
    }

    h1 {
        margin-top: 60px;
        font-family: "Times New Roman", Times, serif;
        font-size: 80px;
        text-align: center;
        color: white;
    }

    table {
        width: 100%;
        border: 1px solid black;
        text-align: center;
        border-radius: 10px;
        padding: 20px;
        margin: 20px 0;
    }

    th,
    td {
        border: 1px solid black;
        padding: 8px;
        background: pink;
        border-radius: 30px;
    }

    th {
        height: 50px;
        background-color: rgba(255, 255, 255, 0.7);
        font-size: 30px;
    }

    td {
        height: 50px;
        background-color: rgba(255, 255, 255, 0.7);
        text-align: center;
        vertical-align: justify;
        font-size: 20px;
    }

    .footer__container {
        background: url('images/8.png') no-repeat center center fixed;
        background-size: cover;
        height: 100vh;
        display: cover;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .footer__logow img {
        width: 100%;
        height: auto;
        max-width: 200px;
        display: block;
        margin: 0 auto;
        transform: scaleX(-1);
    }
</style>

<body>

    <!-- Toggle button for the sidebar -->
    <button class="toggle-btn" onclick="toggleSidebar()">☰</button>

    <!-- Sidebar content -->
    <div class="sidebar">
        <a href="db.php">Back</a>
    </div>

    <div class="content">
        <i>
            <h1>Inquiries</h1>
        </i>

        <table class="table table-hover">

            <tr>
                <th> Google mail</th>
                <th> Messages </th>
            </tr>

            <?php
            $query = mysqli_query($db, "SELECT * FROM messages");
            while ($value = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . $value['email'] . "</td>";
                echo "<td>" . $value['opinion'] . "</td>";
            }
            ?>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <div class="footer__container" id="bottom">
        <section class="social__media">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer__logow">
                            <a href="/" id="footer__logow"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        // JavaScript function to toggle the sidebar's visibility
        function toggleSidebar() {
            var sidebar = document.querySelector('.sidebar');
            var content = document.querySelector('.content');

            if (sidebar.style.display === "none" || sidebar.style.display === "") {
                sidebar.style.display = "block";
                content.style.marginLeft = "250px";
            } else {
                sidebar.style.display = "none";
                content.style.marginLeft = "0";
            }
        }
        // Close sidebar when clicking outside of it
    document.addEventListener('click', function (event) {
        var sidebar = document.querySelector('.sidebar');
        var content = document.querySelector('.content');

        if (sidebar.style.display === "block" && event.target.closest('.sidebar') === null && event.target !== content && !event.target.classList.contains('toggle-btn')) {
            sidebar.style.display = "none";
            content.style.marginLeft = "0";
        }
    });
    </script>

</body>

</html>
