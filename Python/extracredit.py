# Python 3
from functools import reduce #imports the reduce library to use the function

numbers = [3, 4, 6, 9, 34, 12] #the list of numbers with different values

def custom_sum(first, second): #a function that has two parameters which is first and second
    return first + second #returns the value if what the first value and second value is. you can change the operation
#and you will get a different result

result = reduce(custom_sum, numbers) #Here we have a reduce function that takes the custom_sum function and applies
#it to the numbers list. So the function will run and take the first and second value of the list and keeps this process
#going until the list ends up with one value.
print(result) #prints the variable result which has the value of the sum of all of the items in the list
#by going through the process of adding the first and second element in the list until there are no more.

#when the function is used then it will add 3 to 4 which will be 7
#then it will add 7 to 6 and the process keeps going until it gets the last value of 68
