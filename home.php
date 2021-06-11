<?php
include 'incl/controle.php';
?>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>
<div>
    <button style="float:right"><a style="color:red" href="/logout.php">Uitloggen</a></button>
    <h1>1: Maken dns-records.</h1>
    <form id="Records" action="" method="post" class="mb-3">
        <div class="select-block">
            <select id="Records" name="Records">
                <option value="" disabled selected>Choose option</option>
                <option value="Webforwarding">Webforwarding</option>
                <option value="A">A</option>
                <option value="AAAA">AAAA</option>
                <option value="CNAME">CNAME</option>
                <option value="MX">MX</option>
                <option value="TXT">TXT</option>
                <option value="NS">NS</option>
                <option value="SRV">SRV</option>
                <option value="CAA">CAA</option>
                <option value="TLSA">TLSA</option>
                <option value="ALIAS">ALIAS</option>

            </select>

        </div>

        <input id="myBtn" hidden type="submit" name="submit" value="Choose options">
    </form>
    <script>
        var input = document.getElementById("Records");
        input.addEventListener("keyup", function(event) {
            if (event.keyCode === 13) {
                event.preventDefault();
                document.getElementById("myBtn").click();
            }
        });
    </script>

    <?php
    if(isset($_POST['submit'])){
        if(!empty($_POST['Records'])) {
            $selected = $_POST['Records'];
            if($_POST['Records'] == 'Webforwarding') {
                echo '<a href="html/Maak-web.php">Maak een webforwarding record.</a>';
            }
            if($_POST['Records'] == 'A') {
                echo '<a href="html/Maak-a.php">Maak een A record.</a>';
            }
            if($_POST['Records'] == 'AAAA') {
                echo '<a href="html/Maak-aaaa.php">Maak een AAAA record.</a>';
            }
            if($_POST['Records'] == 'CNAME') {
                echo '<a href="html/Maak-cname.php">Maak een CNAME record.</a>';
            }
            if($_POST['Records'] == 'MX') {
                echo '<a href="html/Maak-mx.php">Maak een MX record.</a>';
            }
            if($_POST['Records'] == 'TXT') {
                echo '<a href="html/Maak-txt.php">Maak een TXT record.</a>';
            }
            if($_POST['Records'] == 'NS') {
                echo '<a href="html/Maak-ns.php">Maak een NS record.</a>';
            }
            if($_POST['Records'] == 'SRV') {
                echo '<a href="html/Maak-srv.php">Maak een SRV record.</a>';
            }
            if($_POST['Records'] == 'CAA') {
                echo '<a href="html/Maak-caa.php">Maak een CAA record.</a>';
            }
            if($_POST['Records'] == 'TLSA') {
                echo '<a href="html/Maak-tlsa.php">Maak een TLSA record.</a>';
            }
            if($_POST['Records'] == 'ALIAS') {
                echo '<a href="html/Maak-alias.php">Maak een ALIAS record.</a>';
            }
            if($_POST['Records'] == "Choose option")
            {
                echo "";
            }
        } else {
            echo 'Please select the value.';
        }
    }
    ?>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>