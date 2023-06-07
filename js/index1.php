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

  let arr = [
    [34, 56, 46],
    [
      [64, 65, 35, 63],
      [
        [3, 4, 6, 8],
        [4, 2, 56],
      ],
      [54, 37, 26, 7],
    ],
    [
      [
        [
          [
            [73, 345],
            [675, 33],
          ],
        ],
        [99, 34, 3],
        [8, 7, 5],
      ],
      [
        [33, 2],
        [6, 5, 2, 1],
        [
          [
            [234, 223, 453, 66],
          ],
        ],
      ],
      [
        [76, 54, 3, 22],
        [
          [7, 5, 4, 43],
        ],
        [7, 6, 5, 3],
      ],
    ],
  ];

  function countEl(arr) {
    let arri = []
    for (let i = 0; i < arr.length; i++) {
      if (Array.isArray(arr[i])) {
        arri.push(...countEl(arr[i]))
        // countEl(arr[i]).forEach(item => arri.push(item))
      } else {
        arri.push(arr[i])
      }
    }
    return arri
  }

  function maxi() {
    return Math.max.apply(null, arr.flat(Infinity))
  }

  function summa() {
    let summ = 0;
    return arr.flat(Infinity).reduce((a, b) => sum = a + b)
  }

  function even() {
    let arra = []
    arr.flat(Infinity).forEach((num) => {
      if (num % 2 === 0) {
        arra.push(num)
      }
    })
    return arra
  }

  function lastZero() {
    let arra = []
    arr.flat(Infinity).forEach((num) => {
      if ((num - 3) % 10 === 0) {
        arra.push(num)
      }
    })
    return arra
  }


</script>
</body>
</html>
