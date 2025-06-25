# Print
```js
console.log("Hello World")
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


# write File

## Asynchronous

```
const fs = require("fs");

fs.writeFile("file.txt", "Hello World", (err) => {
  if (err) throw err;
  console.log("File written successfully");
});
```

## Synchronous

```
const fs = require("fs");
// fs.writeFileSync("file.txt", "Hello Worlds!");
fs.appendFileSync("file.txt", "\nHello Dhaka!");
```
