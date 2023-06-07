<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!--<div class="img">-->
<!--</div>-->
<!--<script>-->
<!--  // let count = 0;-->
<!--  //-->
<!--  // while (count <= 9) {-->
<!--  //     document.querySelector('.img').innerHTML += '<img src="https://fakeimg.pl/250x100/">';-->
<!--  //     count++;-->
<!--  //   }-->
<!---->
<!--  // function byteToSize(size,unit) {-->
<!--  //   let result = 0;-->
<!--  //-->
<!--  //   switch (unit) {-->
<!--  //     case 'Кб':-->
<!--  //       result = size * 1000;-->
<!--  //       break-->
<!--  //-->
<!--  //     case 'Мб':-->
<!--  //       result = (size * 1000) * 1000;-->
<!--  //       break-->
<!--  //-->
<!--  //     case 'Гб':-->
<!--  //       result = ((size * 1000) * 1000) * 1000;-->
<!--  //       break-->
<!--  //   }-->
<!--  //   return result;-->
<!--  // }-->
<!---->
<!---->
<!--</script>-->
<!--</body>-->
<!--</html>-->

<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!--<table>-->
<!--    <thead>-->
<!--    <tr class="head">-->
<!---->
<!--    </tr>-->
<!--    </thead>-->
<!--    <tbody class="body">-->
<!---->
<!--    </tbody>-->
<!--</table>-->
<!--<script>-->
<!--  const calendar = ['ПН', 'ВТ', 'СР', 'ЧТ', 'ПТ', 'СБ', 'ВС'];-->
<!--  let month = 'Март';-->
<!--  let days = 31;-->
<!--  let str = '';-->
<!---->
<!--  calendar.forEach(item => {-->
<!--    document.querySelector('.head').innerHTML += `<th>${item}</th>`;-->
<!--  })-->
<!---->
<!--  for (let i = 0; i < days / 7; i++) {-->
<!--    str += '<tr>';-->
<!--    for (let j = 1; j < 8; j++) {-->
<!--      str += `<td>${(i * 7) + j}</td>`;-->
<!---->
<!--      if ((i * 7) + j >= days) {-->
<!--        break-->
<!--      }-->
<!---->
<!--    }-->
<!--    str += '</tr>';-->
<!--  }-->
<!---->
<!--  document.querySelector('.body').innerHTML += `${str}`;-->
<!--  console.log(str)-->
<!---->
<!---->
<!--</script>-->
<!--</body>-->
<!--</html>-->

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
<script>
  function hello1() {
    return 'hello js';
  }

  function hello2(name) {
    return name ? `hello ${name}` : 'hello idi nahui';
  }

  function mul(n, m) {
    return n * m;
  }

  function repeat(str, n) {
    return str.repeat(n);
  }

  function rgb(int3 = 0, int1 = 0, int2 = 0) {
    if (int3 > 255 || int1 > 255 || int2 > 255) {
      return null;
    }
    return `rgb${int3},${int1},${int2}`
  }

  function avg() {
    const arr = Array.from(arguments);
    let result = 0;

    arr.forEach((num) => {
      result += num;
    });
    return result / arr.length;
  }

  function m(a, b) {
    return mul(a, b);
  }


  function operation(m, n, o) {
    return o(m, n)
  }

  let f = addN(10);

  function addN(n) {
    return function (y) {
      return n + y;
    }
  }

  function words(n) {

    let str = String(n);
    if (str[str.length - 1] === '1') {
      return 'Товар'
    } else if (['2', '3', '4'].includes(str[str.length - 1])) {
      return 'Товара'
    } else {
      return 'Товаров'
    }
  }

  function obj() {

    function getObj() {
      return this
    }

    const city1 = {
      name: 'ГородN',
      population: 1000000,
      nameCity: function () {
        return this.name;
      },
      exportStr: function () {
        return `name=${this.name}\npopulation=${this.population}\n`
      },
      getCity: getObj
    };
    console.log(city1)
    const city2 = {
      ...city1,
      name: 'ГородM',
      population: '1e6'
    }

    // console.log(city1.exportStr());
    // console.log(city2.exportStr());
    console.log(city1.getCity())
  }

  const objct = {
    method1: function () {
      return this
    },
    method2: function () {
      return this
    },
    method3: function () {
      return 'метод 3'
    },
  }
  console.log(objct.method1().method2().method3())


  let d1 = [45, 78, 10, 3]
  d1[7] = 100
  console.log(d1, d1[7], d1[6])


  const d2 = [5, 78, 10, 3]
  let sum = 0

  d2.forEach(function (elem) {
    sum += elem
  })
  console.log(sum)
  // console.log(d1[7])
  // console.log(d1[6])


  const d3 = [45, 78, 10, 3]
  let sum3 = 0
  d3[7] = 100
  for (let item in d3) {
    sum3 += d3[item]
  }
  console.log(sum3)

  const d4 = [
    45,
    78,
    10,
    3
  ]

  function mu(a, b) {
    if (b > a) {
      return 1
    } else if (a > b) {
      return -1
    } else {
      return 0
    }
  }

  function d5() {
    const d5 = []
    let n = 3
    let m = 4

    for (let i = 0; i < n; i++) {
      d5[i] = []
      for (let j = 0; j < m; j++) {
        d5[i][j] = 5
      }
    }
    console.log(d5)
  }



</script>
</body>
</html>


1-товар
5-6-7-8-9-0 товаров
2-3-4 товара