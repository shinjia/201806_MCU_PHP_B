document.getElementById('btn_save').addEventListener('click', saveToStorage);
document.getElementById('btn_loadFromLocalStorage').addEventListener('click', loadFromLocalStorage);
document.getElementById('btn_loadFromSessionStorage').addEventListener('click', loadFromSessionStorage);

// initial 
document.getElementById('output_area').value = JSON.stringify(localStorage).length;


function saveToStorage()
{
	localStorage.UserData = document.getElementById('input_area').value;
	sessionStorage.UserData = document.getElementById('input_area').value;
}


function loadFromLocalStorage()
{
	document.getElementById('output_area').value = localStorage['UserData'];
}


function loadFromSessionStorage()
{
	document.getElementById('output_area').value = sessionStorage['UserData'];
}