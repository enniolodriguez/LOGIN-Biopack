<?php
include '../incl/controle.php';
?>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<div>
    <h3><a style="float:right; color:black" href="/home.php">Keer terug</a></h3>
    <h1>1: Maken dns-records.</h1>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Voeg een A record toe!</button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">A record toevoegen</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form style="white-space:nowrap" class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-sm-2">Record</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control">
                                <span class="input-group-text"">.biopack.be</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">IP-Adres</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control">
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">TTL</label>
                            <div class="input-group mb-3">
                                <input class="form-control" placeholder="3600" type="text" name="name" required>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">A record toevoegen</button>
                </div>
            </div>
        </div>
    </div>
</div>
<section><table class="table ml-5">
        <thead>
        <tr>
            <th><abbr>Id</abbr></th>
            <th><abbr>Record</abbr></th>
            <th><abbr>A-regels</abbr></th>
            <th><abbr>TTL</abbr></th>
            <th><abbr>Wijzigen</abbr></th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <th>1</th>
            <td>Lodriguez.biopack.be</td>
            <td style="width:350px;height:100px"><div style="height:100px"> Lorem ipsum dolor sit amet, consectetur adipiscing elit.  </div></td>
            <td>3600</td>
            <th><button class="button" onclick="Domein()" data-bs-toggle="modal" data-bs-target="#WijzigenModal" id="Wijzig"><i class="icon-ellipsis-vertical"></i></button></th>

        </tr>
        <tr>
            <th>2</th>
            <td>Ennio.biopack.be</td>
            <td style="width:350px;height:100px"><div style="height:100px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div></td>
            <td>3600</td>
            <th><button class="button" data-bs-toggle="modal" data-bs-target="#WijzigenModal" id="Wijzig"><i class="icon-ellipsis-vertical"></i></button></th>

        </tr>
        </tbody>
    </table>
</section>

<!-- Modal -->
<div class="modal fade" id="WijzigenModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">A record Wijzigen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form style="white-space:nowrap" class="form-horizontal">
                    <!--<button class="button" onclick="Domein()">Domeinnaam veranderen</button>-->

                    <div class="form-group">
                        <label class="control-label col-sm-2">Record</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control">
                            <span type="text" id="spandomein" class="input-group-text"">.biopack.be</span>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">IP-Adres</label>
                        <div class="input-group mb-3">
                            <input class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">TTL</label>
                        <div class="col-sm-10 mb-3">
                            <input class="form-control" placeholder="3600" type="text" name="name" required>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">A record wijzigen</button>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<script>
    function Domein() {


        var domeinnaam = prompt("Geef je domein in.", "biopack.be");

        if (domeinnaam != null) {
            document.getElementById("spandomein").innerHTML =
                domeinnaam;
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>