const random_Number_In_Range = (min, max)=> Math.random()*(max - min)+min;

const random1 = random_Number_In_Range(2, 10);// สร้างตัวเลขสุ่มระหว่าง 2 ถึง 10
console.log(random1); //แสเงผลตัวเลขที่สุมบท console


const random2 = random_Number_In_Range(1, 5);// สร้างตัวเลขสุ่มระหว่าง 1 ถึง 5
document.write(random2);  //แสเงผลตัวเลขที่สุมบนหน้าเว็บ