print("Welcome to Treasure Island.\nYour mission is to find the treasure.")
choice_one = input('There are two paths in front of you, one leading left and one leading right. Which one do you '
                   'choose?\nLeft or Right? ').lower()

if choice_one == 'right':
    print('You fell in the hole.\nGAME OVER!')
elif choice_one == 'left':
    choice_two = input(
        "You've reached the shore. Will you swim across the river or wait for a boat?\nWait or Swim? ").lower()
    if choice_two == 'swim':
        print('You were attacked by piranhas.\nGAME OVER!')
    elif choice_two == 'wait':
        choice_three = input(
            'You have reached three doors, yellow, blue and red. Which door do you choose?\nYellow, Blue or Red? ').lower()
        if choice_three == 'red':
            print('There was a trap in the room and you got burned\nGAME OVER!')
        elif choice_three == 'blue':
            print('You were eaten by beasts\nGame Over!')
        elif choice_three == 'yellow':
            print('Congratulations, you found the treasure and won!')
        else:
            print("You chose a door that doesn't exist. Game Over.")
    else:
        print('You died of waiting and doing nothing. Game over.')
else:
    print("You are crazy because you couldn't pick a path. Game Over.")
