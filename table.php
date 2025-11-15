<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talabalar Jadvali</title>
</head>
<body>
      


<h2>Talabalar uchun</h2>
<table>
    <thead>
        <tr>

          <th>name</th>
          <th>surname</th>
          <th>Age</th>
           <th>grade</th>



        </tr>
    </thead>
    <tbody>

     <tr>
        <td><?php echo ++$key ?></td>
        <td><?php ++$item['name'] ?></td>
        <td><?php ++$item['surname'] ?></td>
        <td><?php ++$item['age'] ?></td>
        <td></td>

     </tr>

    </tbody>
</table>
</body>
</html>