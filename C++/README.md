# Printing in C++
```c++
#include <bits/stdc++.h>
using namespace std;

int main() {
   // printing a string
   cout<<"Hello World!"<<endl;

   // printing a variable.
   int a=10;
   cout<<a<<endl;

   //printing string+variable
   cout<<"The value of a is "<<a<<" which is the given varialbe"<<endl;
   
   //printing two variables
   int b=20;
   cout<<a<<" "<<b<<endl;
   return 0;
}

// endl is equivalent to "\n"
```


# Taking input
```c++
#include <bits/stdc++.h>
using namespace std;

int main() {
   int a, b;
   cin>>a>>b;

   return 0;
}
```


# Type casting
```c++
#include <bits/stdc++.h>
using namespace std;

int main() {
   int a=10;
   long long int b = (long long int)(a);
   cout<<b<<endl;

   return 0;
}
```


# ASCII
```c++
#include <bits/stdc++.h>
using namespace std;

int main() {
   cout << int('a') << endl;
   cout << char(97) << endl;

   return 0;
}
```



# EOF
```C++
#include <bits/stdc++.h>
using namespace std;

int main() {
   int a, b;
   while (cin >> a >> b){
      cout << a << " " << b << endl;
   }

   return 0;
}
```



# SetPrecision
```C++
#include <bits/stdc++.h>
using namespace std;

int main() {
   double a = 10.564738291;
   cout << fixed << setprecision(2) << a << endl;
   return 0;
}
```



# Ternary Operator
```C++
#include <bits/stdc++.h>
using namespace std;

int main() {
   int a = 10;
   (a % 2 == 0) ? cout << "Even" << endl : cout << "Odd" << endl;
   return 0;
}
```



# Switch Case
```C++
#include <bits/stdc++.h>
using namespace std;

int main() {
   int a = 1;

   switch (a){
   case 0:
      cout << "zero" << endl;
      break;
   case 1:
      cout << "one" << endl;
      break;
   case 2:
      cout << "two" << endl;
      break;
   default:
      cout << "Numbers don't match" << endl;
   }

   return 0;
}
```

```C++
#include <bits/stdc++.h>
using namespace std;

int main() {
   int a = 2;

   switch (a % 2){
   case 0:
      cout << "even" << endl;
      break;
   case 1:
      cout << "odd" << endl;
      break;
   }

   return 0;
}
```



# min_max
```C++
#include<bits/stdc++.h>
using namespace std;

int main() {
  int a = 1;
  int b = 2;
  int c = 3;
  int d = 4;

  int max_val = max({a, b, c, d});
  cout << max_val << endl;

  int min_val = min({a, b, c, d});
  cout << min_val << endl;
}
```



# Swap
```C++
#include<bits/stdc++.h>
using namespace std;

int main() {
  int a = 1;
  int b = 2;

  swap(a, b);
  cout << a << " " << b << endl;
}
```



# String input_output
```C++
#include<bits/stdc++.h>
using namespace std;

int main() {
  char s[100];
  cin >> s;

  cout << s;

  return 0;
}
```

<h4>getline() function if there are spaces in the string. </h4>

```C++
#include<bits/stdc++.h>
using namespace std;

int main() {
  char s[100];
  cin.getline(s, sizeof(s));

  cout << s;

  return 0;
}
```

<h4>getchar()</h4>

```C++
#include<bits/stdc++.h>
using namespace std;

int main() {
  char s[100];
  int a;
  cin >> a;
  cout << a << endl;

  getchar(); // this function takes the "enter" after the variable a.

  cin.getline(s, sizeof(s));
  cout << s << endl;

  return 0;
}
```



# Dynamic Array
```C++
#include<bits/stdc++.h>
using namespace std;

int main() {
  int n;
  cin >> n;
  int *arr = new int[n];

  for (int i = 0; i < n; i++) {
    cin >> arr[i];
  }

  for (int i = 0; i < n; i++) {
    cout << arr[i] << endl;
  }

  return 0;
}
```
<h4>Returning dynamic array through a function</h4>

```C++
#include<bits/stdc++.h>
using namespace std;

int *arr_return() {
  int n;
  cin >> n;
  int *arr = new int [n];

  for (int i = 0; i < n; i++) {
    cin >> arr[i];
  }

  return arr;
}


int main() {

  int *a = arr_return();

  for (int i = 0; i < 5; i++) {
    cout << a[i] << endl;
  }

  return 0;
}
```
<h4>Increasing the size of the dynamic array. </h4>

```C++
#include<bits/stdc++.h>
using namespace std;

int main() {
  int *a = new int [3];
  int *b = new int [3];
  for (int i = 0; i < 3; i++) {
    cin >> a[i];
    b[i] = a[i];
  }
  delete[] a;

  a = new int [5];
  for (int i = 0; i < 3; i++) {
    a[i] = b[i];
  }
  delete[] b;
  a[3] = 4;
  a[4] = 5;

  for (int i = 0; i < 5; i++) {
    cout << a[i] << endl;
  }

  return 0;
}
```



# Classes and objects
```C++
#include<bits/stdc++.h>
using namespace std;

class Student
{
public:
  char name[100];
  int semester;
  char major[100];
};


int main() {
  Student a;
  char temp[] = "safir";
  strcpy(a.name, temp);
  a.semester = 12;
  char tmp[] = "CSE";
  strcpy(a.major, tmp);

  cout << a.name << " " << a.major << " " << a.semester << endl;
  return 0;
}
```



# Constructors
```C++
#include<bits/stdc++.h>
using namespace std;

class Student
{
public:
  char name[100];
  int semester;
  char major[100];
  Student(char *name, char *major, int semester) {
    strcpy(this->name, name);
    this->semester = semester;
    strcpy(this->major, major);
  }
};


int main() {
  Student a("Mashrur", 7, "CSE");
  Student b("Safir", 12, "CS");

  cout << a.name << " " << a.major << " " << a.semester << endl;
  cout << b.name << " " << b.major << " " << b.semester << endl;
  return 0;
}
```

<h4>Returning the object through a function.</h4>

```C++
#include<bits/stdc++.h>
using namespace std;

class Student
{
public:
  char name[100];
  int semester;
  char major[100];
  Student(char *name, char *major, int semester) {
    strcpy(this->name, name);
    this->semester = semester;
    strcpy(this->major, major);
  }
};


Student func() {
  Student a("Mashrur", "CSE", 7);
  return a;
}


int main() {
  Student ans = func();
  cout << ans.name << " " << ans.major << " " << ans.semester << endl;

  return 0;
}
```



# Dynamic Object
```C++
#include<bits/stdc++.h>
using namespace std;

class Student
{
public:
  char name[100];
  int semester;
  char major[100];
  Student(char *name, char *major, int semester) {
    strcpy(this->name, name);
    strcpy(this->major, major);
    this->semester = semester;
  }
};

int main() {
  Student *a = new Student("Shabab", "CSE", 7);
  cout << a->name << " " << a->major << " " << a->semester << endl;

  return 0;
}
```
<h4>Returning the object through a function</h4>

```C++
#include<bits/stdc++.h>
using namespace std;

class Student
{
public:
  char name[100];
  int semester;
  char major[100];
  Student(char *name, char *major, int semester) {
    strcpy(this->name, name);
    strcpy(this->major, major);
    this->semester = semester;
  }
};


Student *func() {
  Student *a = new Student ("Mashrur", "CSE", 7);
  return a;
}


int main() {
  Student *ans = func();
  cout << ans->name << " " << ans->major << " " << ans->semester << endl;
  delete ans;
  return 0;
}
```



# Sorting
<h4>Sorting an array using built-in function</h4>

```C++
#include<bits/stdc++.h>
using namespace std;

int main() {
  int arr[] = {10, 50, 20, 40, 30};
  // sort(arr, arr + 5);
  sort(arr, arr + 5, greater<int>()); //descending sorting.
  for (int i = 0; i < 5; i++) {
    cout << arr[i] << endl;
  }

  return 0;
}
```



# String
<h4>String Iterators</h4>

```C++
#include<bits/stdc++.h>
using namespace std;


int main() {
    string s = "hello_world_!";
    for (string::iterator it = s.begin(); it < s.end(); it++) {
        cout << *it <<  endl;
    }

    return 0;
}

// for newer compilers we can write "auto" instead of writing "string::iterator"
```


<h4>String input with space</h4>

```C++
#include<bits/stdc++.h>
using namespace std;


int main() {
    int x;
    cin >> x;
    //getchar();
    cin.ignore();   // ignores a character.

    string s;
    getline(cin, s);

    cout << x << endl;
    cout << s << endl;

    return 0;
}

```


<h4>Stringstream</h4>

```C++
#include<bits/stdc++.h>
using namespace std;


int main() {
    string s = "Hey! this is Mashrur Safir";
    stringstream x;
    x << s;
    string word;

    int count = 0;

    while (x >> word) {
        cout << word << endl;
        count++;
    }

    cout << count << endl;

    return 0;
}
```
