row1 = ["⬜️1", "⬜️2", "⬜️3"]
row2 = ["⬜️4", "⬜️5", "⬜️6"]
row3 = ["⬜️7", "⬜️8", "⬜️9"]
map = [row1, row2, row3]
print(f"{row1}\n{row2}\n{row3}")
position = input("Where do you want to put the treasure? ")

vertical = int(position[0]) - 1
horizontal = int(position[1]) - 1
map[horizontal][vertical] = 'X'

print(f"{row1}\n{row2}\n{row3}")
