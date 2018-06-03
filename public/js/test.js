var arr = [
    { name:'London', population:'7000000' },
    { name:'Munich', population:'1000000' }
];

var addNewElement = function(arr, newElement) {
    var found = false;
    var element;
    for(i=0; element=arr[i]; i++) {
        if(element.name == newElement.name) {
            found = true;
            if(newElement.population === 0) {
                arr[i] = false;
            } else {
                arr[i] = newElement;
            }
        }
    }
    if(found === false) {
        arr.push(newElement);
    }
    // removing elements
    var newArr = [];
    for(var i=0; element=arr[i]; i++) {
        if(element !== false) newArr.push(element);
    }
    return newArr;
};

arr = addNewElement(arr, {name: 'Paris', population: '30000000'});
console.log(arr);
arr = addNewElement(arr, {name: 'Paris', population: '60000000'});
console.log(arr);
arr = addNewElement(arr, {name: 'Paris', population: 0});
console.log(arr);