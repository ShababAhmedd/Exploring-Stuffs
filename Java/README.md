# Print Statement
```Java
public class learning {

    public static void main(String[] args) {
        System.out.println("Hello World!");
    }

}
```
<br></br>

# Escape Sequence
## \\"
```java
public class learning {
    public static void main(String[] args) {
        System.out.println("This is \"Mashrur\"");
    }
}
```
## \\t
```java
public class learning {
    public static void main(String[] args) {
        System.out.println("This is\tSafir");
    }
}
```
## \\n
```java
public class learning {
    public static void main(String[] args) {
        System.out.println("This is\nSafir");
    }
}
```
## \\\
```java
public class learning {
    public static void main(String[] args) {
        System.out.println("This is \\Shabab");
    }
}
```
<br></br>

# Data Types
## Long L - 8 byte
```java
public class learning {
    public static void main(String[] args) {
        long a = 110229338447556L;
    }
}
```
## Float f - 4 byte
```java
public class learning {
    public static void main(String[] args) {
        float a = 12.345f;
    }
}
```
## Double - 8 byte
```java
public class learning {
    public static void main(String[] args) {
        double a = 12.3454;
    }
}
```
## boolean
```java
public class learning {
    public static void main(String[] args) {
        boolean t = true;
        boolean f = false;
    }
}
```
## character
```java
public class learning {
    public static void main(String[] args) {
        char c = '&';
    }
}
```
<br></br>

# Type Casting
## Widening Casting
```java
public class learning {
    public static void main(String[] args) {
        int a = 10;
        double d = a;
        System.out.println(d);
    }
}
```
## Narrowing Casting
```java
public class learning {
    public static void main(String[] args) {
        double d = 10.5;
        int a = (int) d;
        System.out.println(a);
    }
}
```
<br></br>

# Parsing
## int
```java
 public class learning {
    public static void main(String[] args) {
        String num1 = "100";
        String num2 = "100";

        int n1 = Integer.parseInt(num1);
        int n2 = Integer.parseInt(num2);

        System.out.println(n1+n2);
    }
}
```
## double
```java
public class learning {
    public static void main(String[] args) {
        String num1 = "100.5";
        String num2 = "100.5";

        double n1 = Double.parseDouble(num1);
        double n2 = Double.parseDouble(num2);

        System.out.println(n1+n2);
    }
}
```
## converting int to string
```java
public class learning {
    public static void main(String[] args) {
        int num = 10;
        String str = String.valueOf(num);
        System.out.println(str);
    }
}
```
<br></br>

# Math Functions
## Math.max()
```java
public class learning {
    public static void main(String[] args) {
        int n1 = 10;
        int n2 = 20;
        int max = Math.max(n1, n2);
        System.out.println(max);
    }
}
```
## Math.min()
```java
public class learning {
    public static void main(String[] args) {
        int n1 = 10;
        int n2 = 20;
        int max = Math.min(n1, n2);
        System.out.println(max);
    }
}
```
## Math.sqrt()
```java
public class learning {
    public static void main(String[] args) {
        int n1 = 16;
        double ans = Math.sqrt(n1);
        System.out.println(ans);
    }
}
```
## Math.pow()
```java
public class learning {
    public static void main(String[] args) {
        int a = 2;
        int b = 3;
        double ans = Math.pow(a, b);
        System.out.println(ans);
    }
}
```
## Math.abs()
```java
public class learning {
    public static void main(String[] args) {
        int a = -2;
        int ans = Math.abs(a);
        System.out.println(ans);
    }
}
```
## Math.round()
```java
public class learning {
    public static void main(String[] args) {
        double a = 2.098;
        System.out.println(Math.round(a));
    }
}
```
## Math.floor()
```java
public class learning {
    public static void main(String[] args) {
        double a = 10.5;
        System.out.println(Math.floor(a));
    }
}
```
## Math.ceil()
```java
public class learning {
    public static void main(String[] args) {
        double a = 10.5;
        System.out.println(Math.ceil(a));
    }
}
```
## Math.random()
```java
public class learning {
    public static void main(String[] args) {
        double num = Math.random();     // Range[0-1]
        System.out.println(num);
    }
}
```
### Generating random number from a given range
```java
public class learning {
    public static void main(String[] args) {
        int min = 10;
        int max = 100;

        double random = Math.random();

        int randomNumber = (int) (min + random * (max - min));
        System.out.println(randomNumber);
    }
}
```
<br></br>

# Taking Input
## Integer
```java
import java.util.Scanner;

public class learning {
    public static void main(String[] args) {
        System.out.println("Enter a number");
        Scanner sc = new Scanner(System.in);
        int a = sc.nextInt();   // taking an integer input
        System.out.println("The number is " + a);
    }
}
```
## Double
```java
import java.util.Scanner;

public class learning {
    public static void main(String[] args) {
        System.out.println("Enter a floating number");
        Scanner sc = new Scanner(System.in);
       double nm = sc.nextDouble();
        System.out.println("The given floating number is " + nm);
    }
}
```
## String
```java
import java.util.Scanner;

public class learning {
    public static void main(String[] args) {
        System.out.println("Enter a name");
        Scanner sc = new Scanner(System.in);
        String nm = sc.next();
        System.out.println("The name is " + nm);
    }
}
```
## Full line
```java
import java.util.Scanner;

public class learning {
    public static void main(String[] args) {
        System.out.println("Enter full name");
        Scanner sc = new Scanner(System.in);
        String nm = sc.nextLine();
        System.out.println("The full name is " + nm);
    }
}
```
<br></br>

# Exception Handling
```java
import java.util.Scanner;

public class learning {
    public static void main(String[] args) {
        try{
            int a = 10/0;
        } catch (Exception e) {
            System.out.println("Divided by zero");
            System.out.println(e);
        }
        finally {
            System.out.println("Task executed");
        }
    }
}
```
<br></br>

# Statements
## If Else
```java
import java.util.Scanner;

public class learning {
    public static void main(String[] args) {
        int a = 10;
        int b = 10;
        if (a > b){
            System.out.println("a > b");
        }
        else if (a < b){
            System.out.println("a < b");
        }
        else{
            System.out.println("a = b");
        }
    }
}
```
## Swtich Case
```java
import java.util.Scanner;

public class learning {
    public static void main(String[] args) {
        int a = 2;

        switch(a){
            case 0:
                System.out.println("0");
                break;
            case 1:
                System.out.println("1");
                break;
            default:
                System.out.println("Not a binary number");
        }
    }
}
```
## Ternary Operator / short hand if else
```java
public class learning {
    public static void main(String[] args) {
        int a = 10;
        int b = 20;
        String ans = a>b?"Yes":"No";
        System.out.println(ans);
    }
}
```
```java
public class learning {
    public static void main(String[] args) {
        int num1 = 10;
        int num2 = 20;
        int num3 = 30;

        int max = (num1 > num2)
                ? (num1 > num3 ? num1 : num3)
                : (num2 > num3 ? num2 : num3);

        System.out.println(max);
    }
}
```
<br></br>

# Loop
## For Loop
```java
public class learning {
    public static void main(String[] args) {
        for (int i = 0; i < 10; i++) {
            System.out.println(i);
        }
    }
}
```
```java
public class learning {
    public static void main(String[] args) {
        for (int i = 10; i > 0; i--) {
            System.out.println(i);
        }
    }
}
```
### Nested For Loop
```java
public class learning {

    public static void main(String[] args) {

         for (int i = 0; i <= 2; i++) {  // outer loop

            for (int j = 0; j <= 2; j++) {  // inner loop
                System.out.print(i + "," + j + " ");
            }

            System.out.println();

        }

    }

}
```
## While Loop
```java
public class learning {

    public static void main(String[] args) {

        int i = 1;

        while (i <= 5) {
            System.out.print(i + " ");
            i++;
        }

    }

}
```
```java
import java.util.Scanner;

public class learning {

    public static void main(String[] args) {

        boolean flag = true;
        String ch;
        Scanner sc = new Scanner(System.in);

        while (flag) {
            String temp = sc.next();

            if (temp.equals("q")) flag = false;
            else System.out.println(temp);
        }


    }

}
```
## Do While Loop
```java
public class learning {

    public static void main(String[] args) {

        int i = 1;
        do {
            System.out.println(i);
            i++;
        }
        while (i <= 0);

    }

}
```
<br></br>

# Functions
Finding the Maximum of Two Numbers
```java
public class learning {

    public static int findMax(int x, int y) {
        int max;
        if (x > y)
            max = x;
        else
            max = y;
        return max;
    }

    public static void main(String[] args) {
        int maxVal = findMax(10, 20);
        System.out.println(maxVal);
    }

}
```
<br></br>


# Array
## array declaration
```java
public class learning {
    
    public static void main(String[] args) {
        int[] arr = new int[2];
        arr[0] = 1;
        arr[1] = 2;

        for (int i = 0; i < arr.length; i++) {
            System.out.print(arr[i] + " ");
        }
    }

}
```
```java
public class learning {

    public static void main(String[] args) {
        int[] arr = {1, 2, 3, 4, 5};

        for (int i = 0; i < arr.length; i++) {
            System.out.print(arr[i] + " ");
        }
    }

}
```
## For each loop
```java
public class learning {

    public static void main(String[] args) {
        char[] arr = {'a','b', 'c'};
        for (char temp : arr) {
            System.out.println(temp);
        }
    }

}
```
## 2D Array
```java
public class learning {

    public static void main(String[] args) {
        int[][] arr = {{1, 2}, {3, 4}};

        for (int i = 0; i < 2; i++) {
            for (int j = 0; j < 2; j++) {
                System.out.print(arr[i][j]);
            }
        }
    }
}
```
<br></br>

# Array List
## .add()
```java
import java.util.ArrayList;

public class arrlist {
    public static void main(String[] args) {
        ArrayList num = new ArrayList();
        num.add(1);
        num.add(2);
        num.add(3);
        System.out.println(num);
    }
}
```
## .size()
```java
import java.util.ArrayList;

public class arrlist {
    public static void main(String[] args) {
        ArrayList num = new ArrayList();
        num.add(1);
        num.add(2);
        num.add(3);
        System.out.println(num.size());
    }
}
```
## .set()
```java
import java.util.ArrayList;

public class arrlist {
    public static void main(String[] args) {
        ArrayList num = new ArrayList();
        num.add(1);
        num.add(2);
        num.add(3);
        num.set(0, 4);
        System.out.println(num);
    }
}
```
## .get()
```java
import java.util.ArrayList;

public class arrlist {
    public static void main(String[] args) {
        ArrayList num = new ArrayList();
        num.add(1);
        num.add(2);
        num.add(3);
        System.out.println(num.get(0));
    }
}
```
## .remove()
```java
import java.util.ArrayList;

public class arrlist {
    public static void main(String[] args) {
        ArrayList num = new ArrayList();
        num.add(1);
        num.add(2);
        num.add(3);
        num.remove(0);
        System.out.println(num);
    }
}
```
<br></br>

# Hash Set
## .add()
```java
import java.util.HashSet;

public class MyHashSet {
    public static void main(String[] args) {
        HashSet hashSet = new HashSet();
        hashSet.add(1);
        hashSet.add(2);
        hashSet.add(3);
        hashSet.add(3);
        hashSet.add(3);
        System.out.println(hashSet);
    }
}
```
## .size()
```java
import java.util.HashSet;

public class MyHashSet {
    public static void main(String[] args) {
        HashSet hashSet = new HashSet();
        hashSet.add(1);
        hashSet.add(2);
        hashSet.add(3);
        hashSet.add(3);
        hashSet.add(3);
        System.out.println(hashSet.size());
    }
}
```
## .contains()
```java
import java.util.HashSet;

public class MyHashSet {
    public static void main(String[] args) {
        HashSet hashSet = new HashSet();
        hashSet.add(1);
        hashSet.add(2);
        hashSet.add(3);
        hashSet.add(3);
        hashSet.add(3);
        System.out.println(hashSet.contains(0));
        System.out.println(hashSet.contains(3));
    }
}
```
## .remove()
```java
import java.util.HashSet;

public class MyHashSet {
    public static void main(String[] args) {
        HashSet hashSet = new HashSet();
        hashSet.add(1);
        hashSet.add(2);
        hashSet.add(3);
        hashSet.add(3);
        hashSet.add(3);
        hashSet.remove(3);
        System.out.println(hashSet);
    }
}
```
<br></br>

# Hash Map
## .put()
```java
import java.util.HashMap;

public class FindUniqueValuesInArray {
    public static void main(String[] args) {
        HashMap<String, String> hashMap = new HashMap<String, String>();
        hashMap.put("Bangladesh", "Dhaka");
        hashMap.put("Sri Lanka", "Colombo");
        hashMap.put("Pakistan", "Islamabad");
        System.out.println(hashMap);
    }
}
```
## .get()
```java
import java.util.HashMap;

public class FindUniqueValuesInArray {
    public static void main(String[] args) {
        HashMap<String, String> hashMap = new HashMap<String, String>();
        hashMap.put("Bangladesh", "Dhaka");
        hashMap.put("Sri Lanka", "Colombo");
        hashMap.put("Pakistan", "Islamabad");
        System.out.println(hashMap.get("Bangladesh"));
    }
}
```
```java
import java.util.HashMap;

public class FindUniqueValuesInArray {
    public static void main(String[] args) {
        HashMap<Integer, String> hashMap = new HashMap<Integer, String>();
        hashMap.put(1, "One");
        hashMap.put(2, "Two");
        hashMap.put(3, "Three");
        System.out.println(hashMap.get(1));
    }
}
```
## .containsKey()
```java
import java.util.HashMap;

public class FindUniqueValuesInArray {
    public static void main(String[] args) {
        HashMap<Integer, String> hashMap = new HashMap<Integer, String>();
        hashMap.put(1, "One");
        hashMap.put(2, "Two");
        hashMap.put(3, "Three");
        System.out.println(hashMap.containsKey(1));
    }
}
```
## .containsValue()
```java
import java.util.HashMap;

public class FindUniqueValuesInArray {
    public static void main(String[] args) {
        HashMap<Integer, String> hashMap = new HashMap<Integer, String>();
        hashMap.put(1, "One");
        hashMap.put(2, "Two");
        hashMap.put(3, "Three");
        System.out.println(hashMap.containsValue("One"));
    }
}
```
<br></br>

# String
## .toCharArray()
```java
public class StringManipulations {
    public static void main(String[] args) {
        String str = "Hello Java";
        char[] arr = str.toCharArray();
        System.out.println(arr);
    }
}
```
## .length
```java
public class StringManipulations {
    public static void main(String[] args) {
        String str = "Hello Java";
        char[] arr = str.toCharArray();
        System.out.println(arr.length);
    }
}
```
## printing last character array
```java
public class StringManipulations {
    public static void main(String[] args) {
        String str = "Hello Java";
        char[] arr = str.toCharArray();
        System.out.println(arr[arr.length-1]);
    }
}
```
## .toLowerCase()
```java
public class StringManipulations {
    public static void main(String[] args) {
        String str = "Hello Java";
        char[] arr = str.toCharArray();
        System.out.println(String.valueOf(arr[0]).toLowerCase());
    }
}
```
## .length()
```java
public class StringManipulations {
    public static void main(String[] args) {
        String str = "Hello Java";
        System.out.println(str.length());
    }
}
```
## .charAt()
```java
public class StringManipulations {
    public static void main(String[] args) {
        String str = "Hello Java";
        System.out.println(str.charAt(0));
    }
}
```
## .contains()
```java
public class StringManipulations {
    public static void main(String[] args) {
        String str = "Hello Java";
        System.out.println(str.contains("Java"));
    }
}
```
## .equals()
```java
public class StringManipulations {
    public static void main(String[] args) {
        String str = "Hello Java";
        System.out.println(str.equals("Hello Java"));
    }
}
```
## .replace()
```java
public class StringManipulations {
    public static void main(String[] args) {
        String str = "Hello Java";
        System.out.println(str.replace("Java", "JavaScript"));
    }
}
```
## .split()
```java
import java.util.Arrays;

public class StringManipulations {
    public static void main(String[] args) {
        String str = "Hello Java";
        String[] arr = str.split(" ");
        System.out.println(Arrays.toString(arr));
    }
}
```
```java
public class StringManipulations {
    public static void main(String[] args) {
        String money = "100.50";
        String[] m = money.split("\\.");

        String dollar = m[0];
        String cents = m[1];

        int n1 = Integer.parseInt(dollar);
        int n2 = Integer.parseInt(cents);

        System.out.println(n1 + n2);
    }
}
```
## .indexOf()
```java
public class StringManipulations {
    public static void main(String[] args) {
        String str = "Mashrur Safir Shabab";
        System.out.println(str.indexOf("Sa"));
    }
}
```
## .substring()
```java
public class StringManipulations {
    public static void main(String[] args) {
        String str = "Mashrur Safir Shabab";
        System.out.println(str.substring(14));
    }
}
```
```java
public class StringManipulations {
    public static void main(String[] args) {
        String str = "Mashrur Safir Shabab";
        System.out.println(str.substring(8, 13));
    }
}
```
```java
public class StringManipulations {
    public static void main(String[] args) {
        String str = "Mashrur Safir Shabab";
        int first_char = str.indexOf("Sa");
        System.out.println(str.substring(first_char, first_char + 5));
    }
}
```
## .trim()
```java
public class StringManipulations {
    public static void main(String[] args) {
        String str = "    Java    ";
        System.out.println(str.trim());
    }
}
```
## StringBuilder
```java
public class StringManipulations {
    public static void main(String[] args) {
        char[] arr = {'M', 'a', 's', 'h', 'r', 'u', 'r', ' ', 'S', 'a', 'f', 'i', 'r', ' ', 'S', 'h', 'a', 'b', 'a', 'b'};
        StringBuilder sb = new StringBuilder();
        sb.append(arr);
        System.out.println(sb);
    }
}
```
<br></br>

# File Read and Write
```java
package jsonManipulation;

import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;

public class FileReadWrite {
    public static void main(String[] args) throws IOException {
        FileWriter writer = new FileWriter("test.txt", true);
        writer.write("\nHello Js");
        writer.close();

        FileReader fileReader = new FileReader("test.txt");
        int character;
        while ((character = fileReader.read()) != -1) {
            System.out.print((char) character);
        }
        fileReader.close();
    }
}
```
<br></br>


# OOP
## Constructor
```java
package OOP;

public class Constructor {
    public Constructor (String name) {
        System.out.println(name + " called the constructor");
    }

    public static void main(String[] args) {
        new Constructor("Safir");
    }
}
```
e.g.
```java
package OOP;

public class ProductSell {
    public int vat;
    ProductSell(int vat) {
        this.vat = vat;
    }

    public int sellItem(int itemCount, int price) {
        return (price + (itemCount*price)*vat/100);
    }

    public static void main(String[] args) {
        ProductSell productSell = new ProductSell(15);
        int price = productSell.sellItem(1, 100);
        System.out.println(price);
    }
}
```
## Inheritence
overridding
polymorphism
```java
package OOP;

public class Inheritence {
    public static void main(String[] args) {
//        Bird eagle = new Bird();
//        Bird eagle = new Eagle();
//        Eagle eagle = new Eagle();
//        eagle.canFly();

//        Penguin penguin = new Penguin();
        Bird penguin = new Penguin();   // overrides the parent class
        penguin.canFly();
    }
}

class Bird {
    public void canFly() {
        System.out.println("Birds can fly");
    }
}

class Eagle  extends Bird{   // Eagle is the sub-class of Bird
}

class Penguin extends Bird {    // child class extends parent class
    public void canFly() {  // the properties of child class overrides the properties of parent class
        System.out.println("Penguin can't fly");
    }
}
```
## Overloading
```java
package OOP;

public class Overloading {

    public static void calculateSalary(int workingHour, int salaryPerHour) {
        System.out.println(workingHour*salaryPerHour);
    }

    public static void calculateSalary(int workingHour, int salaryPerHour, int overtime) {
        System.out.println((workingHour*salaryPerHour)+(overtime*salaryPerHour));
    }

    public static void main(String[] args) {
        calculateSalary(8, 500);
        calculateSalary(8, 500, 2);
    }
}
```


## Abstraction
```java
package OOP;

public class Abstraction {
    public static void main(String[] args) {
        Food rice = new Rice();
        rice.eatFood();

        Food biscuit = new Biscuit();
        biscuit.eatFood();

    }
}

abstract class Food{
    abstract void eatFood();
}

class Rice extends Food{
    public void eatFood() {
        System.out.println("Rice is cooking");
    }
}

class Biscuit extends Food {
    public void eatFood() {
        System.out.println("Biscuit is not needed to cook");
    }
}
```

## Interface
```java
package OOP;

public interface Interface {
    void drawShape();
}

class Rectangle implements Interface  {
    public void drawShape() {
        System.out.println("Drawing Rectangle");
    }
}

class Circle implements Interface {
    public void drawShape() {
        System.out.println("Drawing Circle");
    }
}

class TestInterface{
    public static void main(String[] args) {
        Interface rectangle = new Rectangle();
        rectangle.drawShape();

        Interface circle = new Circle();
        circle.drawShape();
    }
}
```
### Multiple Inheritence using Interface
```java
package OOP;

public class MultipleInterface {
    public static void main(String[] args) {
        Child child = new Child();
        child.looksLike();
        child.behaviour();
    }
}

interface Father{
    void looksLike();
}
interface Mother{
    void behaviour();
}

class Child implements Father, Mother {
    public void looksLike() {
        System.out.println("Looking like father");
    }
    public void behaviour() {
        System.out.println("Behave like mother");
    }
}
```
