const find = (arr) => {
    let min_num = Math.min(...arr);
    let max_num = Math.max(...arr);
    let min_sum = 0;
    let max_sum = 0;

    let filter_min = arr.filter(el => el < max_num);
    let filter_max = arr.filter(el => el > min_num);

    for (let i = 0; i < filter_min.length; i++) {
        if (filter_min[i] != 0) {
            min_sum = min_sum + filter_min[i];
        }
    }

    for(let y = 0; y < filter_max.length; y++){
        if(filter_max[y] != 0){
            max_sum = max_sum + filter_max[y];
        }
    }
    console.log(`min sum ${min_sum} max sum ${max_sum}`);
}
let numbers = [9, 1, 5, 7, 3];
find(numbers);