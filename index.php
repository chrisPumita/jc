<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="favicon.ico">
<title>JAZMIN Y CHRIS - Inicio</title>
<link rel="stylesheet" href="style/style.css">
<link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister" rel="stylesheet">

<style>
@import url('https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Love+Ya+Like+A+Sister');

* {
    box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
    padding: 20px;
    background: #f1f1f1;
    font-family: 'Love Ya Like A Sister', cursive;
    font-family: 'Gloria Hallelujah', cursive;
}

/* Header/Blog Title */
.header {
    padding: 30px;
    font-size: 40px;
    text-align: center;
    background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {
    float: left;
    width: 75%;
}

/* Right column */
.rightcolumn {
    float: left;
    width: 25%;
    padding-left: 20px;
}

/* Fake image */
.fakeimg {
    background-color: #aaa;
    width: 100%;
    padding: 20px;
}

/* Add a card effect for articles */
.card {
     background-color: white;
     padding: 20px;
     margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Footer */
.footer {
    padding: 20px;
    text-align: center;
    background: #ddd;
    margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
    .leftcolumn, .rightcolumn {
        width: 100%;
        padding: 0;
    }
}
</style>
</head>
<body>

<div class="header">
  <h2>NUESTRA HISTORIA</h2>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>JAZMIN Y CHRISTIAN</h2>
      <h5>ACUERDATE DE MI</h5>
      <div class="fakeimg" style="height:auto;">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Y9DAMm2d4sc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
      <p>CAPITULO 1</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="card">
      <h2>JAZMIN Y CHRISTIAN</h2>
      <h5>UNA VERDADERA HISTORIA REAL</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>CAPITULO 2</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About Me RCGS STUDIOS</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod...</p>
    </div>
    <div class="card">
      <h3>NUESTRAS FOTOS</h3>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div>
    </div>
    <div class="card">
      <h3>RECUERDOS POR SIEMPRE GUARDAR (RECSIGUA)</h3>
      <p>ALGO AQUI IMPORTANTE</p>
    </div>
  </div>
</div>

<div class="footer">
  <h2>RCSG Derechos Reservados 2018</h2>
  <h1>Ultima actualizacion 30-07-18</h1>
</div>

</body>
</html>
