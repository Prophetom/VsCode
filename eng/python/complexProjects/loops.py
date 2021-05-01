# First loops heights
student_heights = input("Input a list of student heights ").split()
for n in range(0, len(student_heights)):
    student_heights[n] = int(student_heights[n])
print(student_heights)

total_height = 0
for height in student_heights:
    total_height += height

number_height = 0
for number in student_heights:
    number_height += 1

average_height = round(total_height / number_height)
print(average_height)

# Second loops scores
student_scores = input("Input a list of student scores ").split()
for n in range(0, len(student_scores)):
    student_scores[n] = int(student_scores[n])
print(student_scores)

heighest_score = 0
for score in student_scores:
    if score > heighest_score:
        heighest_score = score
print(heighest_score)