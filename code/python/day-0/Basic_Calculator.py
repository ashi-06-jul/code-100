first_digit = input("Enter the first no.")
second_digit = input("Enter the second no.")
print("Press 1 for adddition,Press 2 for substraction,Press 3 for multyplication,Press 4 for division")
def switch(choice):
switcher = {
1: first_digit+second_digit,
2 : first_digit-second_digit,
3 : first_digit*second_digit,
4 : first_digit/second_digit
}
print switcher.get(choice,"invalid choice")