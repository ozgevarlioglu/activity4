<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="Activity4-preview.css">
</head>
<body>

<form action="Activity4-preview.php" method="post">
    <h1>Registration Form</h1> <br>
      Name: <input type="text" name="name"> <br>
      Username: <input type="text" name="username"> <br>
      Password: <input type="password" name="password"> <br>
      Address: <input type="text" name="address"> <br>

      <label for="Country" >Country:</label>
  <select id="country" name="country" >
      <option value="">(Please select a country)</option>
    <option value="Germany">Germany</option>
    <option value="Turkey">Turkey</option>
    <option value="England">England</option>
    <option value="French">French</option>
  </select><br>


      ZIP code: <input type="text" name="zipcode"> <br>
      Email: <input type="email" name="email"> <br>

      <label>Sex: </label>
        <input type="radio" name="sex" value="male"> Male
        <input type="radio" name="sex" value="female"> Female<br>

       <label>Language: </label>
       <input type="checkbox" name="checklist[]" value="french"> French
       <input type="checkbox" name="checklist[]" value="germany"> Germany
       <input type="checkbox" name="checklist[]" value="english"> English
       <br>

       <label>About: </label>
      <textarea name="about" rows="5" cols="25">
      </textarea>
      <br>

      <input type="submit" value="Submit">
  </form>
</body>
</html>