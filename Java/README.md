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
### \\"
```java
public class learning {
    public static void main(String[] args) {
        System.out.println("This is \"Mashrur\"");
    }
}
```
### \\t
```java
public class learning {
    public static void main(String[] args) {
        System.out.println("This is\tSafir");
    }
}
```
### \\n
```java
public class learning {
    public static void main(String[] args) {
        System.out.println("This is\nSafir");
    }
}
```
### \\\
```java
public class learning {
    public static void main(String[] args) {
        System.out.println("This is \\Shabab");
    }
}
```
<br></br>

# Data Types
### Long L - 8 byte
```java
public class learning {
    public static void main(String[] args) {
        long a = 110229338447556L;
    }
}
```
### Float f - 4 byte
```java
public class learning {
    public static void main(String[] args) {
        float a = 12.345f;
    }
}
```
### Double - 8 byte
```java
public class learning {
    public static void main(String[] args) {
        double a = 12.3454;
    }
}
```
### boolean
```java
public class learning {
    public static void main(String[] args) {
        boolean t = true;
        boolean f = false;
    }
}
```
### character
```java
public class learning {
    public static void main(String[] args) {
        char c = '&';
    }
}
```
<br></br>

# Type Casting
### Widening Casting
```java
public class learning {
    public static void main(String[] args) {
        int a = 10;
        double d = a;
        System.out.println(d);
    }
}
```
### Narrowing Casting
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
### int
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
### double
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
### converting int to string
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
### Math.max()
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
### Math.min()
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
### Math.sqrt()
```java
public class learning {
    public static void main(String[] args) {
        int n1 = 16;
        double ans = Math.sqrt(n1);
        System.out.println(ans);
    }
}
```
### Math.pow()
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
