#include <stdio.h>
#include <stdlib.h>

   int main() {

   float num1;
   int num2 = 21;
   float num3 = 121;
   
   printf("Enter the price of the product: ");
   scanf("%f", &num1);
   printf("Total amount: ");
   scanf("%d", &num2);



   printf("The tax is: %f", num1 * num2 / num3 );

   return 0;

}
