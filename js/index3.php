<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" name="form1" method="get" id="form">
    <input type="text" name="name" id="name">
    <input type="text" name="ocenka" id="ocenka">
    <div>
        <button id="add" type="button">Add</button>
        <button type="button" id="search">Search</button>
    </div>
</form>
<script>

  let arr = []
  let str = ''

  document.querySelector('#add').onclick = () => {
    const data = {
      name: document.getElementById('name').value,
      ocenka: document.getElementById('ocenka').value,
    }
    if (data.name === '' || data.name.length < 2) {
      return alert('debil')
    } else if (data.ocenka < 1 || data.ocenka > 5) {
      alert('debil')
    } else {
      arr.push(data)
    }
  }
  document.querySelector('#search').onclick = () => {
    arr = arr.filter((elem) => {
      return elem.ocenka > 3
    })
    arr.forEach((elem) => {
      str += `Имя - ${elem.name} ,Оценка - ${elem.ocenka} `
    })
    alert(str)
    console.log(arr)
    console.log(str)
  }
</script>
</body>
</html>