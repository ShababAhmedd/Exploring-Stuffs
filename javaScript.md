# Print
```js
console.log("Hello World")
```
# Array
## slice()
```js
let num = [1, 2, 3, 4, 5];
let slicedArr = num.slice(1, 4);
console.log(slicedArr);
```

## splice()
### remove
```js
let num = [1, 2, 3, 4, 5];
num.splice(1, 3);
console.log(num);
```
### replace
```js
let num = [1, 2, 3, 4, 5];
num.splice(1, 3, 0);
console.log(num);
```

## map()
```js
let num = [1, 2, 3, 4, 5];
let arrMap = num.map(num => num * num);
console.log(arrMap)
```

## filter()
```js
let num = [1, 2, 3, 4, 5];
let arrFilter = num.filter((num) => num % 2 === 0);
console.log(arrFilter);
```

## reduce()
```js
let num = [1, 2, 3, 4, 5];
let arrReduce = num.reduce((acc, cur) => acc + cur, 0);
console.log(arrReduce);
```

## join()
```js
let num = [1, 2, 3, 4, 5];
let arrJoin = num.join("-");
console.log(arrJoin);
```

## find()
```js
let num = [1, 2, 3, 4, 5];
let arrFind = num.find(num => num > 3);
console.log(arrFind);
```

## includes()
```js
let num = [1, 2, 3, 4, 5];
let arrIncludes = num.includes(5);
console.log(arrIncludes);
```

## reverse()
```js
let num = [1, 2, 3, 4, 5];
num.reverse();
console.log(num);
```

# Promise
```js
console.log("Hello")

let myPromise = new Promise((resolve, reject) => {
    setTimeout(()=>{
        let x = 0
        if (x == 0) {
            resolve("Success")
        } else{
            reject("Failed")
        }
    }, 5000)
})

myPromise.then(
    function (value) {
        console.log(value)
    }, 
    (err) => {
        console.log(err)
    }
).then(()=>{
    console.log("world")
})
```
```js
async function func_wait() {
    return "hello"
}

console.log(func_wait())
```


# Write File

## Asynchronous

```js
const fs = require("fs");

fs.writeFile("file.txt", "Hello World", (err) => {
  if (err) throw err;
  console.log("File written successfully");
});
```

## Synchronous

```js
const fs = require("fs");
// fs.writeFileSync("file.txt", "Hello Worlds!");
fs.appendFileSync("file.txt", "\nHello Dhaka!");
```
