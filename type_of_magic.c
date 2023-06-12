#include <stdio.h>
#define BOOL char
#define FALSE 0
#define TRUE 1

int main() {

   int a = 739.00;
   float b = 368.14;
   int c = 'W';

   float t;
   int y; 
   float u;

   t = a + b;
   y = a + c; 
   u = b + c;

   printf("739 + 368.14 = %f\n", t);
   printf("739 + 119 = %d\n", y);
   printf("368.12 + 119 = %f\n", u);
}