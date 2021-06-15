import random

rock = '''
    _______
---'   ____)
      (_____)
      (_____)
      (____)
---.__(___)
'''
paper = '''
    _______
---'   ____)____
          ______)
          _______)
         _______)
---.__________)
'''
scissors = '''
    _______
---'   ____)____
          ______)
       __________)
      (____)
---.__(___)
'''
rps = [rock, paper, scissors]

user_choice = int(input("What do you choose? Type 0 for Rock, 1 for Paper or 2 for Scissors.\n"))
if user_choice >= 3 or user_choice < 0:
    print("You typed an invalid number, you lose!")
else:
    print(f"User: {rps[user_choice]}")

    computer_choice = random.randint(0, 2)
    print(f"Computer: {rps[computer_choice]}")

    if user_choice == 0 and computer_choice == 2:
        print("User win!")
    elif computer_choice == 0 and user_choice == 2:
        print("Computer win!")
    elif computer_choice > user_choice:
        print("Computer win!")
    elif user_choice > computer_choice:
        print("User win!")
    elif computer_choice == user_choice:
        print("It's a draw")
