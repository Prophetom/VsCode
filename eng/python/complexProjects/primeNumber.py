def prime_checker(number):
    # Создание булевой переменной
    is_prime = True
    # for начинается от 2, тк если число делиться на 2, то оно уже не простое
    for i in range(2, number):
        if number % i == 0:
            is_prime = False
    # Цикл if за пределами for для того чтобы не повторялись выводы
    if is_prime:
        print("It`s a prime number")
    else:
        print("It`s a not a prime number")


n = int(input("Check this number: "))
prime_checker(number=n)
