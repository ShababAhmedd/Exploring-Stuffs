# Print
```js
console.log("Hello World")
```
## typeof()
```js
let x = null;
console.log(typeof(x));
```


## let

### It can be updated, but can not be redeclared.
```js
let a = "mashrur";
let a = "safir";    // can not be redeclared
a = "shabab";   // can only be updated
```

### It has block scope (only works inside {} where it is defined)
```js
if (true) {
  let name = "Mashrur";   // declared inside block
}
console.log(name);
// compiling the code will throw error since it will only work inside the block where it is defined 
```

## var (Old way, not recommended)

### Redeclaration 
Redeclaration is allowed
```js
var string = "hello";
var string = "world";   // will not throw error
console.log(string);   // will print the latest input in the variable
```

### Not being block Scoped:
```js
if (true) {
  var name = "Mashrur"; // declared inside block
}
console.log(name);   // accessible outside the block
```

## const
For constants, values can not change.
- Can not be updated or redeclared.
- Has block scope like let.
```js
const str = "hello";
str = "world";
console.log(str);   // will throw TypeError
```


# Equality

## Loose Equality (==)
only checks the value and not the data type
```js
let a = 10;
let b = "10";
console.log(a == b);   // will output true
```

## Strict Equality (===)
takes into consideration both the value and data type
```js
let a = 10;
let b = "10";
console.log(a == b);   // will output false
```


# String

## length
```js
let x = "Hello World!";
console.log(x.length);
```

## toUpperCase()
```js
let x = "Hello World!";
console.log(x.toUpperCase());
```

## toLowerCase()
```js
let x = "Hello World!";
console.log(x.toLowerCase());
```

## trim()
```js
let x = "    hello    ";
console.log(x.trim());
```

## slice()
```js
let x = "Hello World!";
console.log(x.slice(6));
```

```js
let x = "Hello World!";
console.log(x.slice(0, 5));
```

## concat

### +
```js
let a = "Hello";
let b = "World!";
console.log(a + " " + b);
```

### template literals ${}
```js
let a = "Hello";
let b = "World!";
console.log(`${a} ${b}`);
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

## concat()
```js
let arr1 = [1, 2, 3];
let arr2 = [4, 5, 6];
let combinedArr = arr1.concat(arr2)
console.log(combinedArr)
```

# Rest Operator
```js
function sum(...num) {
  return num.reduce((acc, cur) => acc + cur, 0);
}

let sumNum = sum(1, 2, 3, 4, 5);
console.log(sumNum);
```

# Spread Operator
```js
let arr1 = [1, 2, 3];
let arr2 = [4, 5, 6];
let combinedArr = [...arr1, ...arr2];
console.log(combinedArr)
```

# Object
```js
let person = {
  name : "Mashrur Safir Shabab", 
  professon: "researcher",
  domain : "Computer Vision"
}

console.log(person.name)
```

## array of objects
```js
let person = [
  {
    name: "Mashrur",
    professon: "researcher",
    domain: "Computer Vision",
  },
  {
    name: "Safir",
    professon: "researcher",
    domain: "Quantum Computing",
  },
];

console.log(person[1].name)
```

## Object Destructuring
```js
let person = 
  {
    name: "Mashrur",
    profession: "researcher",
    domain: "Computer Vision",
  };

const {name, profession, domain} = person;
console.log(name);
console.log(profession);
console.log(domain)
```

## Accessing object from another page
student.js
```js
let person = {
  name: "Mashrur",
  profession: "researcher",
  domain: "Computer Vision",
};

module.exports = { person };
```
index.js
```js
const { person } = require("./student.js");

const { name, profession, domain } = person;
console.log(name);
console.log(profession);
console.log(domain);
```
# JSON
user.json
```json
[
  {
    "username": "Mashrur",
    "password": "1234"
  },
  {
    "username": "Safir",
    "password": "1234"
  }
]
```
## Reading JSON
```js
const jsonData = require("./user.json");

let name = jsonData[0].username;
console.log(name);
```

## Writing JSON
```js
const fs = require("fs");
const jsonData = require("./user.json");

const newUser = {
  username: "shabab",
  password: "1234",
};

jsonData.push(newUser);

fs.writeFileSync("./user.json", JSON.stringify(jsonData, null, 2));
```
# Function
## Anonymous function
```js
let greeting = function () {
  console.log("Hello World");
};

greeting();
```
## arrow function
```js
let greeting = () => {
  console.log("Hello World");
};

greeting()
```
```js
// let sum = (a, b) => {
//   return a+b
// };
let sum = (a, b) => a + b;

console.log(sum(10, 10));
```

## Default parameter usuage
```js
function greet(name = "shabab") {
  console.log("Hello" + " " + name);
}

greet("Safir");
```

## Calling functions from another page
myFunc.js
```js
let sayHello = function () {
  console.log("Hello");
};

let sayGoodBye = function () {
  console.log("Good Bye");
};

module.exports = { sayHello, sayGoodBye };
```
index.js
```js
const { sayHello, sayGoodBye } = require("./myFunc");

sayHello();
sayGoodBye();
```
### ------------------------------------------------------------
index1.js
```js
const multiply = (a, b) => a * b;
const divide = (a, b) => a / b;

export { multiply, divide };
```
index2.js
```js
import { multiply, divide } from "./index1.js";

console.log(multiply(2, 3));
```

## Call back function
```js
let msg = () => {
  console.log("Message shown after 3s");
};

setTimeout(msg, 3000);
```
```js
setTimeout(
    () => {
        console.log("Message shown after 3s");
    }, 
    3000
);
```

## Self calling function
```js
(function (name) {
  console.log(name);
})("safir");
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

# Read File
## Asynchronous 
```js
const fs = require("fs");

fs.readFile("file.txt", "utf-8", (err, data) => {
  if (err) {
    console.log(err);
    return;
  }
  console.log(data);
});
```

## Synchronous
```js
const fs = require("fs");

const data = fs.readFileSync("file.txt", "utf-8");
console.log(data);
```

# Delete File
## Asynchronous 
```js
const fs = require("fs");

fs.unlink("file.txt", (err) => {
  if (err) {
    console.log(err);
    return;
  }
  console.log("File Deleted Successfully!");
});
```
## Synchronous
```js
const fs = require("fs");

fs.unlinkSync("file.txt");
```
