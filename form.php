
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link rel="stylesheet" href="styleform.css">
</head>

<body background="img.jpg">

  <div id="form">

    <form action="pdf.php" method="POST">
      <table align="center">
       <tr>
       <th colspan="2"> <h1>  Registration Form</h1></th>
       </tr>

       <tr>
        <td> <label for="">Roll NO: </label> <td> 
        <input type="text" placeholder="Roll NO" id="roll" name="r"> </td>
       </tr>

       <tr>
        <td> <label for="">First Name: </label> <td> 
        <input type="fname" placeholder="First Name"  id="fname" name="f"> </td>
       </tr>
      
       <tr>
        <td> <label for="">Last Name: </label> <td> 
        <input type="lname" placeholder="Last Name"id="lname" name="l"> </td>
       </tr>
       
       <tr>
        <td> <label for="">Email Address: </label> <td> 
        <input type="mailadd" placeholder="Email Address"  id="mailadd" name="m">  </td>
       </tr>

       <tr>
        <td> <label for="">Password: </label> <td> 
        <input type="password" placeholder="password"  id="password" name="p">  </td>
       </tr>

       <tr>
        <td align="center" colspan="2">  
        <input type="submit" id="button" value="submit" name="submit"></td>
       </tr>

      </table>
    </form>
 </div>

</body>
</html>

