"""Turn a word into it`s Pig Latin equivalent"""
import sys

VOWELS = "aeiouy"

while True:
    word = input("Type a word and get it`s Pig Latin Translation: ")

    if word[0] in VOWELS:
        pig_Latin = word + "way"
    else:
        pig_Latin = word[1:] + word[0] + "ay"
    print("{}".format(pig_Latin), file=sys.stderr)

    try_again = input("Try again? (Press enter else n to stop)\n")
    if try_again.lower() == "n":
        break
