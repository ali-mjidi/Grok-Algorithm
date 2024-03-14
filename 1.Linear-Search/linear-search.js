function linear_search(array, item) {
    for (index in array) {
        if (array[index] === item) {
            return index;
        }
    }

    return null;
}

const myArray = Array.from(Array(100).keys()).map(x => ++x);
console.log(linear_search(myArray, 99));
