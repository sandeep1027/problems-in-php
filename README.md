# problems-in-php

Below mentioned are the rules for the problems and their description. For a valid submission, the rules needs to be adhered to.

### Rules:
* The solution should be in PHP
* For every 5 lines of code a commit is needed
* After every commit a pull request needs to be raised
* Coding standards needs to be adhered
* Doc block / comments should be added wherever necessary
* The solution should contain at-least one funciton
 
### Problem Statement 1:
You are given a string **S** and you need to tell the number of substrings in **S** of length **K** which is the **palindrome**.

**Input**
* The first line contains **T (1<=T<=100)**, the number of test cases.
* The first line of each test case contains a string **S (1<=|S|<=100)** and **K (1<=K<=|S|)**.

**Output**
* For each test case print the required answer.

**Sample test cases**   
**Input**
```
2
galaxy 1
aaa 2
```

**Output**
```
6
2
```

Explanation   
  Case 1: Each individual character is a palindrome of size 1.   
  Case 2: aa (S[0:2]), aa (S[1:3]) are two palindromes of size 2.   
