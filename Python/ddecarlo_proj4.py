#  ****************Daniel DeCarlo 3/23/2020******************

#  question one how many vowels


def vowel_function(string):  # has parameter of a string
    letters = string.lower()  # prints the input string to all lowercase

    for v in range(len(letters)):
        a = letters.count("a")  # counts how many a
        e = letters.count("e")  # counts how many e
        i = letters.count("i")  # counts how many i
        o = letters.count("o")  # counts how many o
        u = letters.count("u")  # counts how many u
    vowels = (a + e + i + o + u)
    return str(vowels)
    print("Amount of vowel(s) is" + " " + str(vowels))


vowel_function("hi dan")  # string that will be used for question one


#  question two suffix


def suffix_function(num):
    # used the following link https://codereview.stackexchange.com/questions/41298/producing-ordinal-numbers/41301
    # i was stuck on this one because i was splitting the string but got stuck when making sure that the string had a one for st and etc

    # def suffix_function(string):
    # if string.count("1"):
    #     correct = string.split("th")
    #     correctphrase = "st".join(correct)
    #     elif string.count("2"):
    #         correct = string.split("th")
    #         correctphrase = "nd".join(correct)
    #         elif string.count("3"):
    #             correct = string.split("th")
    #             correctphrase = "rd".join(correct)
    # suffix_function("1st)
    # i was going somewhere along this path but got too confused

    if num % 10 == 1:
        # print(num, "st")
        return(num, "st")
    elif num % 20 == 2:
        # print(num, "nd")
        return(num, "nd")
    elif num % 30 == 3:
        # print(num, "rd")
        return(num, "rd")
    else:
        return(num, "nd")
        # print(num, "th")


suffix_function(24)

def space_station(string):
# 0 is off
# 1 is red
# 2 is green
# 3 is blue
    led = []
    space = string.split(" ")
    if space[0] == "working" and space[1] == "working" and space[2] == "working" and space[3] == "working": #if everything works then leds will be off
        led.append("off")
        led.append("off")
    elif space[0] == "broken" and space[1] == "working" and space[2] == "working" and space[3] == "working": #if one led is broken than it will be red
        led.append("red")
        led.append("off")
    elif space[0] == "broken" and space[1] == "broken" and space[2] == "working" and space[3] == "working": #if one led is broken than it will be blue
        led.append("blue")
        led.append("off")
    elif space[0] == "broken" and space[1] == "broken" and space[2] == "working" and space[3] == "working":  # if one led is broken than it will be green
        led.append("green")
        led.append("off")
    else:print("yay")
    return(str(led))

space_station("broken broken broken broken")

