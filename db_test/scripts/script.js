'use strict';

// Отправляем данные на сервер

const inputText = document.querySelector('.input-text');
const inputNumber = document.querySelector('.input-number');
const sendButton = document.querySelector('.send-button');
const status = document.querySelector('.status-of-adding');

sendButton.addEventListener('click', event => {
	let text = inputText.value;
	let number = inputNumber.value;
	let data = 'data=' + encodeURIComponent(text + '_0.0_' + number);

	let xhr = new XMLHttpRequest();

	xhr.open('POST', './server/db.php', true);
	xhr.addEventListener('readystatechange', () => {
		if (xhr.readyState == 4 && xhr.status == 200) {
			console.log(xhr.responseText);
			status.textContent = xhr.responseText;
		}
	});
	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xhr.send(data);
});

// Получаем актуальное состяние базы данных