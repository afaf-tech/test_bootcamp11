<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
    <title>Soal 7</title>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



</head>
<body style="margin-top:100px;background-color:#f2f2f2;">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="navbar-brand" href="#">Soal 7</a>
    </li>
    
  </ul>
</nav>

<div class='container' >
	<button class='btn btn-primary btn-sm' onclick=add()>
        Add
    </button>
    <br>
    <div 
        class='container' 
        id="kotak" >
		
		
    </div>
	
</div>

  <div class=" text-center navbar-expand-sm bg-dark navbar-dark fixed-bottom">
  <a class="navbar-brand" href="#">Agung Maulana</a>
  </div>

// Saya Fikri sedang belajar github

<?php
	ini_set("max_execution_time",300);
	if(function_exists("date_default_timezone_set")){
		date_default_timezone_set("Asia/Jakarta");
	}

	$get=array("menu","flag","z");
	for($i=0;$i<count($get);$i++){
		if(isset($_GET[$get[$i]]) ==  false) $_GET[$get[$i]]  = "";
		if(isset($_POST[$get[$i]]) == false) $_POST[$get[$i]] = "";
	}
	
	ini_set("display_errors",0);
		$con=mysqli_connect("localhost","zzzz","xxxx","yyyy");
		if(!$con)$con=mysqli_connect("localhost","root","","arkademy");
	ini_set("display_errors",1);
	
	$menu=($_POST["menu"]<>""?$_POST["menu"]:$_GET["menu"]);
	$flag=($_POST["flag"]<>""?$_POST["flag"]:$_GET["flag"]);
	$z=($_POST["z"]<>""?$_POST["z"]:$_GET["z"]);
	
	if($_GET["menu"]=="bukatabel")echo urldecode("@|@".baca_data()."@|@");
	if($_GET["menu"]=="bukatabel2")echo urldecode("@|@".baca_semua()."@|@");
	
function baca_data(){
	$q=mysqli_query($GLOBALS["con"],"SELECT nama.name as Nama, hobi.name as Hobi, kategori.name as Kategori from ((nama inner join hobi on nama.id_hobby = hobi.id) INNER JOIN kategori on nama.id_category = kategori.id ) LIMIT 0,100");
	
	$data="";
	while($h=mysqli_fetch_array($q)){
		$data=$data.
        "<tr>".
        "<td>$h[Nama]</td>".
        "<td>$h[Hobi]</td>".
        "<td>$h[Kategori]</td>".
    "<tr>";
	}
	
	$header=
        "<tr>".
        "<th>Nama</th>".
        "<th>Hobi</th>".
        "<th>Kategori</th>".
        "<tr>";
			
	$data="<table class='table table-striped table-success'>$header$data</table>";
	
	return $data;
}
    


?>

<script>
function add(){
	swal({
  title: "Add",

  content: {
    element: "input",
    attributes: {
      placeholder: "Nama",
     
    },
  },
  content: {
    element: "select",
    attributes: {
      placeholder: "Hobby",
     
    },
  }
  
});

}

f_bukatabel();
</script>

</body>
</html>