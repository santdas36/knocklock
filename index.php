<!DOCTYPE html PUBLIC -//W3C//DTD XHTML 1.0 Strict//EN http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd>
 <html lang="en">
 <head>
	 <title>KnockLock - Dashboard</title>
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	 <link rel="icon" href="images/favicon.ico" type="image/x-icon">
     <meta name="viewport" content="width=device-width, initial-scale=1" />
	 <link href="https://fonts.googleapis.com/css?family=Exo+2:500,700&display=swap" rel="stylesheet">
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 </head>
 <style>
 *{
 transition: all 0.2s;
 }
 .preload {
 width: 100vw;
 height: 100%;
 position: fixed;
 background: #444b54;
 display: flex;
 justify-content: center;
 align-items: center;
 z-index: 999;
 }
 
 .preload img {
 width: 300px;
 animation: logoanim 0.5s infinite;
 }
 
.preloaded img {
transform: scale(1.2);
opacity: 0;
 animation: logofade 0.5s 1 forwards;

} 

@keyframes logoanim {
0 {
transform: scale(1);
}
50% {
transform: scale(1.1);
}
100% {
transform: scale(1);
}
}

@keyframes logofade {
from {
transform: scale(1);
opacity: 1;
}
to {
transform: scale(1.2);
opacity: 0;
}
}

 body {
 background: #2691DE;
 display: flex;
 flex-flow: column nowrap;
 align-items: center;
 font-family: 'Exo 2', sans-serif;
 padding: 0;
 margin: 0;
 width: 100%;
 height: 100%;
 }
 
 h1 {
 margin: 1.5em 0 0 0;
 color: #fd928c;
 text-shadow: 2px 2px 1px rgba(0,0,20,0.75);
 }
 
 button {
 margin: 1.5em 0 4em 0;
 color: #f5e6aa;
 background: #444b54;
 border: none;
 padding: 0.5em 1em;
 font-size: 1em;
 border-radius: 10px;
 outline: none;
 box-shadow: 0 0 3px rgba(0,0,0,0.25);
 font-family: 'Exo 2', sans-serif;
 }
 
 button:hover {
 transform: translateY(-3px);
 box-shadow: 0 3px 5px rgba(0,0,0,0.3);
 }
 
 p {
 color: #335;
 font-size: 1.2em;
 margin-bottom: 3em
 }
 
table {
  width: 95%;
  max-width: 720px;
  margin-bottom: 1rem;
  background-color: transparent;
  border-radius: 20px;
  color: #fff;
  background-color: #444B54;
  padding: 1em;
 box-shadow: 0 0.25em 2em rgba(0,0,0,0.33);
 font-size: 1.2em;
}

table th,
table td {
  padding: 0.75rem 0.75rem 0.75rem 1rem;
  vertical-align: top;
}
table thead th {
  vertical-align: bottom;
  text-align: left;
  color: #f5e6aa;
  border-bottom: 2px solid rgba(255,255,255,0.1);
}

table tbody tr:hover {
  background-color: rgba(0, 0, 0, 0.075);
}

table tbody tr:hover td{
  border-radius: 2px;
}

footer p {
color: #f5e6aa;
font-size: 14px;
}
a {
color: #f5e6aa;
text-decoration: none;
position: relative;
}
a:hover:before {
height: 14px;
bottom: -2px;
padding: 3px;
}
a:before {
position: absolute;
content: '';
bottom: -2px;
left: 50%;
transform: translateX(-50%);
width: 100%;
height: 0;
background: #444b54;
padding: 1px 2px;
transition: all 0.3s;
border-radius: 5px;
z-index: -1;
}

@media (max-width: 420px) {

table{
width: calc(100% - 1em);
margin: 0.5em;
padding: 0;
font-size: 16px;
border-radius: 5px;
}
td:first-child,
td:nth-child(3),
th:first-child,
th:nth-child(3) {
display: none;
}
p {
font-size: 1em;
}
footer p {
text-align: center;
padding: 3em;
line-height: 1.75;
}
table th,
table td {
  padding: 0.5rem 0.5rem 0.5rem 0.75rem;
}
.preload img {
width: 200px;
}

}

 </style>
	 <body>
	 <div class="preload">
	 	<img src="kl-logo.png" />
	 </div>
	 <h1>KnockLock</h1>
	 <p>(an IOT based home security device)</p>
	<table>
	<thead>
		<th>No.</th>
		<th>Name</th>
		<th>Key</th>
		<th>Status</th>
		<th>Time</th>
	</thead>
	<tbody>
<?php
$username = "2649093_subscribe";
$password = "55wtmHf2wV7QR4J";
$database = "2649093_subscribe";
date_default_timezone_set("Asia/Kolkata");
$mysqli = new mysqli("fdb19.awardspace.net", $username, $password, $database);
$query = "SELECT * FROM knocklock";
if ($result = $mysqli->query($query)) {
while ($row = $result->fetch_assoc()) {
$slno = $row["id"];
$name = $row["name"];
$key = $row["key"];
$status = $row["status"];
$time = $row["date"];
echo '<tr><td>'.$slno.'</td>';
echo '<td>'.$name.'</td>';
echo '<td>'.$key.'</td>';
echo '<td>'.$status.'</td>';
echo '<td>'.$time.'</td></tr>';
}
$result->free();
}
?>
</tbody>
</table>
	<button class=".reload" onClick="location.reload(true)">Reload</button>
	 	<footer><p>A concept by <a href="http://instagram.com/santdas36">Dash Santosh</a> , <a href="http://instagram.com/rickjonas95">Hrishikesh</a> and <a href="http://instagram.com/duh_mee_ter">Mohammad Ijaz</a></p></footer>

	 </body>
	 <script>
	 $(window).on('load', function() {
	 	setTimeout( function() {
	 		$('.preload').addClass('preloaded');
	 	}, 2000);
	 	setTimeout( function() {
	 		$('.preload').fadeOut(300);
	 	}, 3000);
	 });
	 </script>
 </html>
 
 
 
 
 
 
 