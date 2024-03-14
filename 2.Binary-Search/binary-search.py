def binary_search(array, item):
    low = 0
    high = len(array) - 1

    while low <= high:
        mid = (low + high) // 2
        guess = array[mid]

        if guess < item:
            low = mid + 1
        elif guess > item:
            high = mid - 1
        else:
            return mid

    return None


my_array = [i for i in range(1, 101)]
print(binary_search(my_array, 99))
