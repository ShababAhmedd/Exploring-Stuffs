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
