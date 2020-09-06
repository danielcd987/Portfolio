# Name: Daniel DeCarlo
# Date: 3/30/2020
def proj5_fun1(given_string):
    '''
    This function will output the word without a specified letter.
    :param given_string: (String) The word, a space, and then the index
    :return: answer: (String) The original word without the letter at the index given
    '''

    # Your code here.
    splitter = given_string.split(" ")  # splits string by space and creates a list
    string = splitter[0]  # takes the string from the 0 index and stores it as string
    # string_splitter = list(string)  # splits the string into chars
    index_num = int(
        splitter[-1])  # takes the last element of the list which is the string which then converts it to a int
    # answer = string[:index_num]
    var = string[index_num]

    # Hint: Look up built in string methods that may be helpful
    answer = string.replace(string[index_num], "")  # by including string.[index_num] it gets the number in the string
    # Return a string here, using the keyword 'return'
    return answer


# Outside of the function, you should try some print statements here to see if
# it works how you think it works. One example is given; it should return "uppy"
# print(proj5_fun1("superman 3")) #this prints the output of the function


def proj5_fun2(player_info):
    '''
    This function will calculate the slugging percentage for a given player.
    :param player_info: (String) The name of the player, and their list of at-bats
    :return: answer: (String) The name of the player, and their SLG to 3 decimal places
    '''
    # Creates a list of the player name, and their at-bat information.
    # Remember that the colon is still there, so that would need to be removed somehow

    # Your code here....BASED OFF VIDEO POSTED 4/2/2020
    player_info_list2 = player_info.replace(":", "=")
    player_info_list = player_info_list2.split("=")  # splits by the = sign
    batting_list = player_info_list[1].split(",")  # splits the list by , at the first index
    # print(batting_list) PRINTS THE PLAYS BY COMMA AND PUTS THEM IN A NEW LIST.

    single = 0
    double = 0
    triple = 0
    bb = 0  # walk by pitcher
    k = 0  # struck out
    hr = 0  # homerun
    amount_bat = 0

    # loops through the data list and stores them by run

    for bat in batting_list:
        if bat == "K":  # struck out
            amount_bat += 1
        elif bat == "1B":  # single
            amount_bat += 1
            single += 1
        elif bat == "2B":  # double
            amount_bat += 1
            double += 1
        elif bat == "3B":  # triple
            amount_bat += 1
            triple += 1
        elif bat == "HR":  # homerun
            amount_bat += 1
            hr += 1
        elif bat == "BB":
            amount_bat += 0

    # formula to get SLG ((1 x singles) + (2 X doubles) + (3 x triples) + (4 x Homeruns)) / number of times at bat)
    if amount_bat > 0:
        slg = (((1 * single) + (2 * double) + (3 * triple) + (4 * hr)) / (amount_bat))
        # slg_round = round(slg,3)
    # print(str) PRINTS THE VALUE
    # Sample code, looking at
    else:
        slg = "0.000"

    # Return a string here, using the keyword 'return' str(float(slg_round))
    # Remember to use the correct format, including an '=' and three decimal place
    answer = str(player_info_list[0]) + "=" + format(slg, ".3f")
    return answer

    # print(answer)


# Outside of the function, you should try some print statements here to see if
# it works how you think it works. One example is given; it should return Moreland=1.750
# print(proj5_fun2("Moreland:1B,1B,3B"))


def proj5_fun3(sentence):
    '''
    This function will reverse each word in a line of text, keeping the punctuation.
    :param sentence: (String) A sentence, with capitalization and punctuation
    :return: answer: (String) A sentence, reversing each word and keeping punctuation
    '''
    # Split sentence into a list of individual words.
    answer = sentence.split(" ")

    # Now the tricky part, you need to reverse the word, BUT
    # keep the punctuation AND the capitalization
    # HINT: Use a 'for' loop to go through each word in the list,
    # and then you will need to do something with that word.
    # for word in answer:
    # print(answer)

    for punc in answer: #checks the word
     for letters in punc: #checks each char
      if punc.isalpha() != True: #if the letter is alphabetical then it does the condition
          # print(answer[::-1]) # this reverses the words in the list
        return punc




    # print(answer[::-1])
   # print(words[::-1])

    # return(answer)
    # Join the words back together
    # return " ".join(answer)

# Outside of the function, you should try some print statements here to see if
# it works how you think it works. One example is given; it should return "Haow, siht melborp smees looc!"
# print(proj5_fun3("Woah, this problem seems cool!"))
