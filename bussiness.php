<!DOCTYPE html>
<html lang="en">
<head>
    <title>Business Generator</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
   body {
  margin: 0;
}

h1 {
  font-family: 'Lato', sans-serif;
  font-weight: 300;
  letter-spacing: 2px;
  font-size: 48px;
}

p {
  font-family: 'Lato', sans-serif;
  letter-spacing: 1px;
  font-size: 14px;
  color: #333333;
}

.header {
  position: relative;
  text-align: center;
  background: linear-gradient(60deg, rgba(84, 58, 183, 1) 0%, rgba(0, 172, 193, 1) 100%);
  color: white;
}

.inner-header {
  height: 15vh;
  width: 100%;
  margin: 0;
  padding: 0;
}

.flex {
 
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}

table {
  width: 100% !important;
  table-layout: fixed;
  word-break: break-word;
}

.waves {
  position: relative;
  width: 100%;
  height: 20vh;
  margin-bottom: -7px;
  min-height: 100px;
  max-height: 150px;
}

.output {
  margin: auto;
  height: 35vh;
}

/* Animation */

.parallax>use {
  animation: move-forever 25s cubic-bezier(.55, .5, .45, .5) infinite;
}

.parallax>use:nth-child(1) {
  animation-delay: -2s;
  animation-duration: 7s;
}

.parallax>use:nth-child(2) {
  animation-delay: -3s;
  animation-duration: 10s;
}

.parallax>use:nth-child(3) {
  animation-delay: -4s;
  animation-duration: 13s;
}

.parallax>use:nth-child(4) {
  animation-delay: -5s;
  animation-duration: 20s;
}

@keyframes move-forever {
  0% {
    transform: translate3d(-90px, 0, 0);
  }
  100% {
    transform: translate3d(85px, 0, 0);
  }
}

@media (max-width: 768px) {
  .waves {
    height: 40px;
    min-height: 40px;
  }
  .content {
    height: 30vh;
  }
  h1 {
    font-size: 24px;
  }
}
    .search1 {
        margin: 0 auto;
        text-align: center;
    }
    .search1 h4{
        margin: 50px 0px 20px 0px;
        font-size: 30px;
    }
    .search1 input[type='text']{
        width: 60%;
        border-radius: 30px;
        outline: none;
        padding-left: 20px;
        padding-top: 10px;
        padding-bottom: 10px;
        border: solid 3px purple;

    }
    .search1 a{
        background-color: lavender;
        margin-top: 20px;
        width: 110px;
        text-align: center;
        margin-left: 5px;
        margin-right: 2px;
        color: black;
    }
    .search1 a:hover{
        background-color: blueviolet;
    }
    
</style>
<body>
  
    <script>
        //for the waves
        $(document).ready(function (){
    console.log("dentro do ready");
    $.ajax({
        type: "GET",
        url: "target-file.csv",
        dataType: "text",
        success: function(data) {processData(data);}
    });
});

function processData(csv){
    let csvLines = csv.split(/\r\n|\n/);
    let headers = csvLines[0].split(',');
    let elGenerate = '<table><tr><th>Hour of the Day</th><th>Wave Length</th></tr>';

    for (let i=1; i<csvLines.length; i++) {
        var data = csvLines[i].split(',');
        if (data.length == headers.length) {
            var arr = [];
            for (var j=0; j<headers.length; j++) {
                let strOut = "<!-- Table Generate -->\n";
                if(j % 2 == 0){
                    strOut = strOut.concat(`<tr><td> ${data[j]} </td>`);
                }else{
                    strOut = strOut.concat(`<td> ${data[j]} meter(s) </td></tr>`);
                }
                elGenerate = elGenerate.concat(strOut);
            }
        }
    }
    let elout = document.getElementById("output");
    elout.insertAdjacentHTML('beforeend', elGenerate);
}
    </script>
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="main.js"></script>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">H-M</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="file:///C:/Users/DELL/Documents/webDeveloopment/webinCloud/buissiness.html#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Options
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
             <div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="color: blueviolet; border: solid 1px blueviolet;">Search</button>
          </form>
        </div>
      </nav>
      <div class="header">
        <div class="inner-header flex">
            <h1>Business Generator</h1>
        </div>

        <!--Waves Container-->
        <div>
            <div id="output"></div>

            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave"
                        d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>
        </div>
        <!--Waves end-->

    </div>
      <!--search engine-->
      <div method="get" class="search1">
        <h4>search for your Business name </h4>
        <input type="text" placeholder="search" name="search1"><br>
        <a href="https://www.dictionary.com/" class="btn">Dictionary</a>
        <a href="file:///C:/Users/DELL/Documents/webDeveloopment/webinCloud/buissiness.html" class="btn">search again</a>
        <a href="" class="btn" name="submit" type="submit">search</a>

 <table>
        <?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "businessgen1";

// Create connection
$conn = mysqli_connect($server, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM businessgen";
$result = mysqli_query($conn, $sql);

//check for a search query

if(isset($_GET['search1'])){
  $search = mysqli_real_escape_string($conn, $_GET['search1']);
  $query = "SELECT * FROM businessgen WHERE keyvalue LIKE '%$search%'";
  $result = $conn->query($query);
  if(isset($_post['submit'])){
  while($row = $result->fetch(PDO::FETCH_ASSOC)){
   
    echo "<tr>";
    echo "<tr>";
    echo "<td>" . $row['value1'] . "</td>";
    echo "<td>" . $row['value2'] . "</td>";
    echo "<td>" . $row['value3'] . "</td>";
    echo "<td>" . $row['value4'] . "</td>";
    echo "<td>" . $row['slogans'] . "</td>";

    echo "</tr>";
   
  }
  }
}
// Get all the drugs from the database
/*$search = mysqli_real_escape_string($conn, $_GET['search1']);
$query = "SELECT * FROM businessgen WHERE keyvalue LIKE '%$search%'";
$result = $conn->query($query);
// Display the drugs in a table
while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $row['value1'] . "</td>";
    echo "<td>" . $row['value2'] . "</td>";
    echo "<td>" . $row['value3'] . "</td>";
    echo "<td>" . $row['value4'] . "</td>";
    echo "<td>" . $row['slogans'] . "</td>";

    echo "</tr>";
}*/
?>
 </table>


      </div>
     



     
</body>
</html>

