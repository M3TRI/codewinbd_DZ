function findSecondLastChar() {
    const inputString = document.getElementById('inputString').value.trim(); // Убираем лишние пробелы

    // Проверяем, что строка не пустая и содержит хотя бы два символа
    if (inputString.length < 2) {
        document.getElementById('secondLastChar').textContent = 'Строка должна содержать хотя бы два символа.';
        return;
    }

    // Находим предпоследний символ
    const secondLastChar = inputString.charAt(inputString.length - 2);

    // Выводим результат
    document.getElementById('secondLastChar').textContent = secondLastChar;
}
