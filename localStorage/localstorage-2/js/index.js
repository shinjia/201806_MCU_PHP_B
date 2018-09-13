//　原始 JSON 物件
var dataObject = { 'id': 101, 'username': 'Allen', 'age': 30 };


// Put the object into storage
var str1 = JSON.stringify(dataObject);
localStorage.setItem('save_data', str1);

// Get the object from storage
var str2 = localStorage.getItem('save_data');
var getObject = JSON.parse(str2);


console.clear();
console.log('(1)原始JSON物件：', dataObject);
console.log('(2)轉成字串：', str1);
console.log('(3)取出字串：', str2);
console.log('(4)轉回JSON物件：', getObject);
console.log('(5)目前localStorage的長度：', localStorage.length);



// 合併一起
// localStorage.setItem('save_data', JSON.stringify(dataObject));  // 存入
// var getObject = JSON.parse(localStorage.getItem('save_data'));  // 取出

// console.clear();
// console.log('原始JSON物件: ', dataObject);
// console.log('轉回JSON物件: ', getObject);