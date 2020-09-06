#i Chose to complete this problem in python becasue we created binary trees in python and tha language is easy to use.
#the only issue with this that it is semi-disorganized and that the input repeats for the amount of floors being selected.
#based off the video https://www.youtube.com/watch?v=f5dU3xoE6ms Python data structures by Brian Faure to create the binary trees

# creates the tree shape
class node:
    def __init__(self, value=None):
        self.value = value
        self.left_child = None
        self.right_child = None
class binary_search_tree:
    def __init__(self):  # sets the root of the tree to nothing
        self.root = None

    def insert(self, value):  # inserts the value by making the new tree if there isnt a root
        if self.root == None:
            self.root = node(value)
        else:
            self._insert(value, self.root)  # private insert function

    def _insert(self,value,cur_node): # if there is a node then the if the value is less then the current node
        if value<cur_node.value:
            if cur_node.left_child == None:
                cur_node.left_child = node(value)
            else:
                self._insert(value,cur_node.left_child) #then it check left and if there isnt a node then it makes it and places the value
        elif value>cur_node.value:
            if cur_node.right_child == None: # if there is no value in the right node
                cur_node.right_child = node(value) #place the value in the right node that is less than the root node
            else:
                self._insert(value, cur_node.right_child)
        else:
            print("value already in tree!")
    def print_tree(self):
        if self.root != None:
         self._print_tree(self.root)

    def _print_tree(self,cur_node):
        if cur_node != None:
            self._print_tree(cur_node.left_child)
            print(str(cur_node.value))
            self._print_tree(cur_node.right_child)

    def height(self):
       if self.root !=None:
            return self._height(self.root, 0)
       else:
            return 0
    def _height(self, cur_node,cur_height):
        if cur_node == None: return cur_height
        left_height = self._height(cur_node.left_child, cur_height + 1)
        right_height = self._height(cur_node.right_child, cur_height + 1)
        return max(left_height,right_height)

    def search(self,value):
        if self.root != None:
            return self._search(value,self.root)
        else:
            return False
    def _search(self,value,cur_node):
        if value == cur_node.value:
            return True
        elif value < cur_node.value and cur_node.left_child !=None:
            return self._search(value,cur_node.left_child)
        elif value > cur_node.value and cur_node.right_child != None:
            return self._search(value,cur_node.right_child)
        return False
def fill_tree(tree, num_elems = 100, max_int = 1000):
    from random import randint
    for _ in range(num_elems):
        cur_elem = randint(0,max_int)
        tree.insert(cur_elem)
    return tree


#choosing the input

#from https://www.geeksforgeeks.org/taking-multiple-inputs-from-user-in-python/
print("Welcome to the ceiling function. Please enter in the two integers n (number of ceiling prototypes) and y (the number of layers of ceiling).\n"
      "Then after hitting enter, type in the tree values or 'roofs' that will be used one at a time. \n"
      "For example:\n"
      "Enter two values :1 3 \n"
      "Enter tree values: 3 1 4 \n"
      "Results: \n"
      "Amount of roofs: 1 \n"
      "Amount of layers: 3 \n  ")
#takes the first two input functions. n is the amount of roofs being used and then y is the layers
n, y = [int(n) for n in input("Enter two values: ").split()]

 #n represents the amount of ceiling prototypes to use
 #y represents the amount of layers being used for the ceiling
# print(num)
a = 0
l = 5
#if a < n <= l:
if a < n <= l: #if the value of x is less than five and greater than 0
# appending the tree items to a list was found on https://www.geeksforgeeks.org/python-get-a-list-as-input-from-user/
    #creates a list that uses a 2d array for the trees
    tree_input = []
    for i in range(0, n):
        # ele = int(input())
        # ele is what is being pushed in the array
        ele = [int(n) for n in input("Enter tree values: ").split()] #here the input of the tree_input will be an input of the tree values
        tree_input.append(ele)  # adding the tree inputs
    # print(tree_input)
    # print(tree_input[0][0])
    # print(tree_input[0][1])
    # print(tree_input[0][2])
    # print("\n")
    # print(tree_input[1][0])
    # print(tree_input[1][1])
    # print(tree_input[1][2])
    # print("\n")
    # print(tree_input[2][0])
    # print(tree_input[2][1])
    # print(tree_input[2][2])
    # print("\n")
    # print(tree_input[3][0])
    # print(tree_input[3][1])
    # print(tree_input[3][2])
    # print("\n")
    # print(tree_input[4][0])
    # print(tree_input[4][1])
    # print(tree_input[4][2])

#this builds the five trees also there is a limit of five because the problem has a limit of 5
    tree_one = binary_search_tree()
    tree_two = binary_search_tree()
    tree_three = binary_search_tree()
    tree_four = binary_search_tree()
    tree_five = binary_search_tree()

#this next section fills in the tree values if the length of the tree_input is a certain number
#the double array coordinates get the specific value of the tree being used.

#tree = fill_tree(tree) #this fills the tree with random values in the binary search tree class from the tutorial mentioned

#if the length of the tree input is 1
    if len(tree_input) == 1:
# #building the first tree
        tree_one.insert(tree_input[0][0])
        tree_one.insert(tree_input[0][1])
        tree_one.insert(tree_input[0][2])
#if the length of the tree input is 2
    elif len(tree_input) == 2:
    #building the first tree
        tree_one.insert(tree_input[0][0])
        tree_one.insert(tree_input[0][1])
        tree_one.insert(tree_input[0][2])
#building the second tree
        tree_two.insert(tree_input[1][0])
        tree_two.insert(tree_input[1][1])
        tree_two.insert(tree_input[1][2])
# if the length of the tree input is 3
    elif len(tree_input) == 3:
    # building the first tree
        tree_one.insert(tree_input[0][0])
        tree_one.insert(tree_input[0][1])
        tree_one.insert(tree_input[0][2])
    # building the second tree
        tree_two.insert(tree_input[1][0])
        tree_two.insert(tree_input[1][1])
        tree_two.insert(tree_input[1][2])
 #building the third tree
        tree_three.insert(tree_input[2][0])
        tree_three.insert(tree_input[2][1])
        tree_three.insert(tree_input[2][2])
#if the length of the tree input is 4
    elif len(tree_input) == 4:
    # building the first tree
        tree_one.insert(tree_input[0][0])
        tree_one.insert(tree_input[0][1])
        tree_one.insert(tree_input[0][2])
    # building the second tree
        tree_two.insert(tree_input[1][0])
        tree_two.insert(tree_input[1][1])
        tree_two.insert(tree_input[1][2])
    # building the third tree
        tree_three.insert(tree_input[2][0])
        tree_three.insert(tree_input[2][1])
        tree_three.insert(tree_input[2][2])
# #building the fourth tree
        tree_four.insert(tree_input[3][0])
        tree_four.insert(tree_input[3][1])
        tree_four.insert(tree_input[3][2])
#if the length of the tree input is 5
    elif len(tree_input) == 5:
    # building the first tree
        tree_one.insert(tree_input[0][0])
        tree_one.insert(tree_input[0][1])
        tree_one.insert(tree_input[0][2])
    # building the second tree
        tree_two.insert(tree_input[1][0])
        tree_two.insert(tree_input[1][1])
        tree_two.insert(tree_input[1][2])
    # building the third tree
        tree_three.insert(tree_input[2][0])
        tree_three.insert(tree_input[2][1])
        tree_three.insert(tree_input[2][2])
    # #building the fourth tree
        tree_four.insert(tree_input[3][0])
        tree_four.insert(tree_input[3][1])
        tree_four.insert(tree_input[3][2])
#building the fifth tree
        tree_five.insert(tree_input[4][0])
        tree_five.insert(tree_input[4][1])
        tree_five.insert(tree_input[4][2])
    else:
        print("Please Use a number greater than zero and less than or equal to 5")
    # printing trees

#printing the first tree
    # print("Tree One:")
    # tree_one.print_tree()
    # print ("tree height is " + str(tree_one.height()))
# print(tree_one.search(1))
# print(tree_one.search(25))
#     print("\n")
#
#print the second tree
    # print("Tree Two:")
    # tree_two.print_tree()
    # print ("tree height is " + str(tree_two.height()))
# print(tree_two.search(5))
#  print(tree_two.search(25))
#     print("\n")
#
#print the third tree
    # print("Tree Three:")
    # tree_three.print_tree()
# print ("tree height is " + str(tree_three.height()))
# print(tree_three.search(6))
# print(tree_two.search(25))

    # print("Tree Four:")
    # tree_four.print_tree()
    # print("\n")

    # print("Tree Five: ")
    # tree_five.print_tree()
# print ("tree height is " + str(tree_three.height()))

# Printing type of input value
#print ("type of number", type(num))
    # print("\n")
    # print( "Amount of layers is "+ str(y))
#if there are trees with the same height
# r will be combining the amount of the same number of trees
    same_tree_height = []
    for same_tree in range(len(tree_input)):
        if tree_one.height() == tree_two.height() or tree_one.height() == tree_three.height() or tree_one.height() == tree_four.height() or tree_one.height() == tree_five.height() or \
        tree_two.height() == tree_three.height() or tree_two.height() == tree_four.height() or tree_two.height() == tree_five.height() or tree_three.height() == tree_four.height() or \
        tree_three.height() == tree_five.height() or tree_four.height() == tree_five.height() :

            same_tree_height.append("1")
            #print("Tree height match: " + str(same_tree_height))
            #print("Same tree length = " + str(same_tree_height))
        #print the message if the tree heights match
            #print("Tree heights match")
            getting_the_amount_of_trees = len(tree_input) - int(same_tree_height[0])
            print(getting_the_amount_of_trees)
        else:
            print("Different lengths")
#if the first number doesnt meet the requirements 
else:
    print("Enter a value greater than 0 and less than or equal to 5")



