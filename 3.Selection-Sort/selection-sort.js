function find_smallest(array) {
    let smallest = array[0];
    let smallestIndex = 0;

    for (index in array) {
        if (array[index] < smallest) {
            smallest = array[index];
            smallestIndex = index;
        }
    }

    return smallestIndex;
}

function selection_sort(array) {
    const repetitionNumber = array.length;
    let newArray = [];

    for (let i = 0; i < repetitionNumber; i++) {
        const smallest = find_smallest(array);
        newArray.push(array.splice(smallest, 1)[0]);
    }

    return newArray;
}

const myArray = [10, 102, 78, 22, 82, 51];
console.log(selection_sort(myArray));
