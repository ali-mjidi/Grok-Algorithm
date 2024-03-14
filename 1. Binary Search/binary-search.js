function binary_search(array, item) {
    let low = 0;
    let high = array.length - 1;

    while (low <= high) {
        let mid = Math.floor((low + high) / 2);
        let guess = array[mid];

        if (guess < item) {
            low = ++mid;
        } else if (guess > item) {
            high = --mid;
        } else {
            return mid;
        }
    }

    return null;
}

const array = Array.from(Array(100).keys()).map(x => ++x);
console.log(binary_search(array, 999));
