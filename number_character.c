#include <stdio.h>

int main() {

    char charVariable;

    int asciiCode;
    
    printf("Enter a character = ");
    scanf("%c", &charVariable);

    asciiCode = (int) charVariable;

    printf("ASCII code of %c is %d", charVariable, asciiCode);
    return 0;
}