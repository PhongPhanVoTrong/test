<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin trong loại</title>
</head>

<body>
    @extends('layout')
    @section('tieudetrang')
    Tin trong loại {{$idLT}}
    @endsection
    @section('noidung')
    <h1>Các tin trong loại {{$idLT}}</h1>
    <?php
    foreach ($listtin as $t) {
        echo '<div class="row">';
        // echo "<h3>{$t->TieuDe}</h3>";
        echo "<h3>";
        echo '<a href="' . url('/tin/' . $t->idTin) . '">' . $t->TieuDe . '</a>';
        echo "</h3>";
        echo "<p>{$t->TomTat}</p>";
        echo '</div>';
    }
    ?>
    @endsection
</body>

</html>