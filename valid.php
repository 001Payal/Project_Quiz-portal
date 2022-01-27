<?php 

$hostname="localhost"; 
$username="root";  
$password="";       
$database="quiz";  
$con=mysqli_connect($hostname,$username,$password,$database);
if(!$con)
{
die('Connection Failed'.mysql_error());
}

$email =  $_REQUEST['email'];

$pass =  $_REQUEST['pass'];

$sql = "SELECT * FROM registration";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo "id: " . $row["id"]. " - Name: " . $row["name"]. "-email " . $row["email"]. "-password " . $row["password"]."<br>";

    if($email==$row["email"]&&$pass==$row["password"])
    {
        ?>
      <!DOCTYPE html>
      <!DOCTYPE html>
<html lang="en">
<head>
  <title>Select Courses</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <span class="ml-3 text-xl">Quiz Portal</span>
          </a>
          <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a class="mr-5 hover:text-gray-900"></a>          </nav>
            <a href="student.html">
          <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Back
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button>
        </a>
        </div>
      </header>
    <title>Document</title>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Select Course</h1>
          </div>
          <a href="WebTechnology.html">
          <div class="flex flex-wrap -m-4 text-center">
            <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
              <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                <h2 class="text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">Web Technology</h2>
            </a>
              </div>
            </div>
            <a href="Linux.html">
            <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
              <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                <h2 class="text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">Linux</h2>
                </a>
              </div>
            </div>
            <a href="python.html">
            <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
              <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                <h2 class="text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">Python</h2>
            </a>
              </div>
            </div>
            <a href="Aptitude.html">
            <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
              <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                <h2 class="text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">Aptitude</h2>
            </a>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>
<?php
    }

    





  }
} else {
  echo "0 results";
}







?>