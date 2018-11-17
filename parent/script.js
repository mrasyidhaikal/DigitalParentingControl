var keyword = document.getElementById('keyword');
var content = document.getElementById('content');

keyword.addEventListener('keyup',function() {
	
	// Ajax
	var xhr = new XMLHttpRequest();

	// Cek Ajax
	xhr.onreadystatechange = function(argument) {
		if (xhr.readyState == 4 && xhr.status == 200) {
			content.innerHTML = xhr.responseText;
		}
		
	}
	// Eksekusi AjAx
	xhr.open('GET','search.php?keyword=' + keyword.value,true);
	xhr.send(); 
}); 