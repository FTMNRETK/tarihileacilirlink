<html>
<head>
<base  target="_blank">
</head>
        <body>

<form action="işlem.php" method="get">
 Aramak istediğiniz tarih: <input type="text" name="tarih" id="tarih" value="yyyy-aa-gg" ><br>
 <button type="submit" name="Verileri Listele" class="btn btn red">Verileri Listele</button>
</form>
<form action="işlem.php" method="get">
<span class="bold">Tarihe Göre Listeleme</span>
<div><input data-date-format="dd.mm.yyyy" name="tarih" id="tarih" class="form-control"  type="date"></div>
<button type="submit" name="Verileri Listele" class="btn btn red">Verileri Listele</button>
</form>

</body>
</html>
