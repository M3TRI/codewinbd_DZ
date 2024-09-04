function calc() {
    const method = document.getElementById('method').value;
    let area;

    switch (method) {
        case 'catheti':
            // Ввод катетов
            const a = parseFloat(prompt("Введите длину первого катета (в метрах):"));
            const b = parseFloat(prompt("Введите длину второго катета (в метрах):"));

            if (isNaN(a) || isNaN(b) || a <= 0 || b <= 0) {
                alert("Пожалуйста, введите положительные числовые значения для катетов.");
                return;
            }
            area = 0.5 * a * b;
            break;

        case 'baseHeight':
            // Ввод основания и высоты
            const base = parseFloat(prompt("Введите длину основания (в метрах):"));
            const height = parseFloat(prompt("Введите высоту (в метрах):"));

            if (isNaN(base) || isNaN(height) || base <= 0 || height <= 0) {
                alert("Пожалуйста, введите положительные числовые значения для основания и высоты.");
                return;
            }
            area = 0.5 * base * height;
            break;

        case 'hypotenuseAngle':
            // Ввод гипотенузы и угла
            const hypotenuse = parseFloat(prompt("Введите длину гипотенузы (в метрах):"));
            const angleDegrees = parseFloat(prompt("Введите угол в градусах:"));

            if (isNaN(hypotenuse) || isNaN(angleDegrees) || hypotenuse <= 0 || angleDegrees <= 0 || angleDegrees >= 90) {
                alert("Пожалуйста, введите корректные значения для гипотенузы и угла.");
                return;
            }

            // Переводим угол в радианы
            const angleRadians = angleDegrees * (Math.PI / 180);
            area = 0.5 * hypotenuse * hypotenuse * Math.sin(angleRadians);
            break;

        default:
            alert("Выберите корректный метод расчёта.");
            return;
    }

    // Отображаем результат на странице
    document.getElementById('area').textContent = area.toFixed(2) + ' м²';
}
