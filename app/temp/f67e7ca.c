#include <stdio.h>
int main() {
    int dividend=5, divisor=2, quotient, remainder;


    // Computes quotient
    quotient = dividend / divisor;

    // Computes remainder
    remainder = dividend % divisor;

    printf("Quotient = %d\n", quotient);
    printf("Remainder = %d", remainder);
    return 0;
}