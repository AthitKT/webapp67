const digitize = n => [...`${n}`].map(i=>parseInt(i));
const result1 = digitize(123);// แปลงเลข 123 เป็นอาร์เรย์ [1, 2, 3]
console.log(result1);

const result2 = digitize(1230);// แปลงเลข 1230 เป็นอาร์เรย์ [1, 2, 3, 0]
console.log(result2);