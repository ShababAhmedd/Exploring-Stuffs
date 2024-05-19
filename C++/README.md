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
