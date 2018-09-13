// 初始定義
var data = {items: [
    {id: 1, name: "Allen", age: 45},
    {id: 2, name: "Bruce", age: 24},
    {id: 3, name: "Candy", age: 53},
    {id: 4, name: "David", age: 34},
    {id: 5, name: "Eric" , age: 41},
    {id: 6, name: "Ford" , age: 15}
]};

data.items.push(
    {id: 7, name: "Green", age: 43}
);


show_all();



document.getElementById('btn_add').onclick = function(){ add(); }
document.getElementById('btn_show').onclick = function(){ show_all(); }
document.getElementById('btn_save').onclick = function(){ save(); }
document.getElementById('btn_retrieve').onclick = function(){ retrieve(); }




function show_all()
{
	console.log(data);
	var str = '';
	for(idx in data.items)
	{
		item_one = data.items[idx];

		id   = item_one.id;
		name = item_one.name;
		age  = item_one.age;

		str += '<input type="button" value="刪" onclick="remove('+idx+');"> ';
		str += id + ', ' + name + ', ' + age + '<br />';
	}
	document.getElementById('display').innerHTML = str;
}


function guid()
{
	var max_value = -999;
	for(idx in data.items)
	{
		item_one = data.items[idx];
		id = item_one.id;
		if(id>max_value)
		{
			max_value = id;
		}
	}
   
   return (max_value+1);
}


function add()
{
	var name = document.getElementById('name').value;
	var age = parseInt(0+document.getElementById('age').value);  // 強制轉為整數
	var id = guid();

	var item_one = { id: id, name:name, age:age}
	data.items.push(item_one);

	show_all();
}


function remove(idx)
{
	if(idx != -1)
	{
		data.items.splice(idx, 1);
	}
	
	show_all();
}


function save()
{
	localStorage.setItem('saveObject', JSON.stringify(data));
}


function retrieve()
{
	data = JSON.parse(localStorage.getItem('saveObject'));
	show_all();
}