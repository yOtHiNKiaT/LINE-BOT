# This is guess 1 number game

import random

print('Hello! What is your name?')
name = input()

print('Well! I am thinking a number between 1-20.')
secretNumber= random.randint(1,20)

for guesstimes in range(1,7):
    print('Put your guess number :')
    guessNum = int(input())

    if guessNum>secretNumber:
        print('The value is too high.\n')
    elif guessNum<secretNumber:
        print('The value is too low.\n')
    else:
        break   # This break when gress is correct value.


if guessNum == secretNumber:
    print('Good Job, '+name+'. You got correct number in '+str(guesstimes)+' guess!')
else:
    print('Nope! Game Over. The gress value is '+str(secretNumber)+'.')
    