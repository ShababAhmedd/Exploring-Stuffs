#include<bits/stdc++.h>
using namespace std;

/*
----Increment/Decrement Operators----
let a be any random variable.
1. a++
2. a--
3. ++a
4. --a

*/

int main() {
	int a = 1;

	cout << a++ << endl;
	cout << a << endl;
	// In line number 24, the variable "a" was used to print out its output and then it was incremented by value one.
	// In line number 25, the value of "a" was simply printed.

	cout << ++a << endl;
	// In line 29, firstly "a" was incremented by value one and then it was printed.
	// This whole mechanism applies verily for "a--" and "--a".

	return 0;
}

