#include<bits/stdc++.h>
using namespace std;

/*
	Basic Data types are:

	1. char - stores characters eg. a, b, c etc.

	2. int - stores integers.

	3. float - stores decimal numbers.

	4. double - stores decimal numbers.

	5. bool - stores either true or false.

	Integer data type has a range. If we need longer than that "long int" can be used. "long long int is even greater than that."
	if we
*/

int main() {

	cout << "----Variables and Data Types----" << endl;
	// Representation of declaring and storing a character.
	char c = 'a';
	cout << "c: " << c << endl;
	// Here, the character "a" has now been stored in the variable c.
	// And c is of character data type which is basically declared with the word "char".

	int a = 3;
	cout << "a: " << a << endl;
	// Here, a is basically of int data type where the integer 3 has been stored.

	double b = 3.5;
	cout << "b: " << b << endl;
	// b is of double data type with 3.5 stored within it.

	// what if we try to store a data type of double into a integer type variable.
	int d = 4.5;
	cout << "d: " << d << " {The stored data (i.e. 4.5) was of double data type stored into the integer variabe 'd'}"  << endl;
	// we will see that after printing, the result will be an integer instead of the stored data type double.

	bool e = true;
	cout << "e: " << e << endl;
	// In bool data type the output will be 1 if true is stored. Otherwise it would be zero.
	// In programming language zero is considered as false and except that all the numbers are considered to be true.
	// That means storing any number except zero in bool data type variable will give a output of 1 i.e. true.
	bool f = 4389572349567;		// output should be 1 i.e. True.
	bool g = 0;		// output should be 0 i.e. False.

	bool h = -0; // output will be false.
	bool i = -1; // true
	cout << "f: " << f << " g: " << g << " h: " << h << " i: " << i;
	cout << endl;

	cout << "--------endl-------" << endl;
	// endl is basically used to print a new line.

	// without the use of endl
	cout << "with" << "out";
	cout << endl;

	// using endl
	cout << "with" << endl << "out" << endl;

	return 0;
}

