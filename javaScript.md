# Print
```js
console.log("Hello World")
```
# Array
## Slice
```js
let num = [1, 2, 3, 4, 5];
let slicedArr = num.slice(1, 4);
console.log(slicedArr);
```

## Splice
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
# Map
```js
let num = [1, 2, 3, 4, 5];
let arrMap = num.map(num => num * num);
console.log(arrMap)
```

# Filter
```js
let num = [1, 2, 3, 4, 5];
let arrFilter = num.filter((num) => num % 2 === 0);
console.log(arrFilter);
```

# Reduce
```js
let num = [1, 2, 3, 4, 5];
let arrReduce = num.reduce((acc, cur) => acc + cur, 0);
console.log(arrReduce);
```

# Join
```js
let num = [1, 2, 3, 4, 5];
let arrJoin = num.join("-");
console.log(arrJoin);
```

# Find
```js
let num = [1, 2, 3, 4, 5];
let arrFind = num.find(num => num > 3);
console.log(arrFind);
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
