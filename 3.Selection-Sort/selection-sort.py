def find_smallest(array):
    smallest = array[0]
    smallest_index = 0

    for index in range(1, len(array)):
        if array[index] < smallest:
            smallest = array[index]
            smallest_index = index

    return smallest_index


def selection_sort(array):
    new_array = []

    for i in range(0, len(array)):
        smallest = find_smallest(array)
        new_array.append(array.pop(smallest))

    return new_array


my_array = [10, 102, 78, 22, 82, 51]
print(selection_sort(my_array))
