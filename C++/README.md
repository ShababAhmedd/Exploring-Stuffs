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

   switch(a){
   case 0:
      cout << "zero" << endl;
      break;
   case 1:
      cout << "one" << endl;
      break;
   case 2:
      cout << "two" << endl;
      break;
   }

   return 0;
}
```
