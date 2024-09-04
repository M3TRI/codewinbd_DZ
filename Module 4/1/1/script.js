function calc() {
    const radius = parseFloat(document.getElementById('radius').value);
    const unit = document.getElementById('unit').value;

    if (isNaN(radius) || radius <= 0) {
        alert('Пожалуйста, введите положительное число для радиуса.');
        return;
    }

    // Определяем коэффициенты преобразования для разных единиц измерения
    const conversionFactors = {
        meters: 1,
        centimeters: 100,
        inches: 39.3701
    };

    // Выбираем коэффициент преобразования для выбранной единицы измерения
    const factor = conversionFactors[unit];

    // Преобразуем радиус в метры
    const radiusInMeters = radius / factor;

    // Используем число Пи
    const PI = 3.141592653589793;

    // Вычисляем длину окружности и площадь
    const circumference = 2 * PI * radiusInMeters;
    const area = PI * radiusInMeters * radiusInMeters;

    // Преобразуем результаты обратно в выбранные единицы измерения
    const circumferenceInUnits = circumference * factor;
    const areaInUnits = area * (factor * factor);

    // Выводим результаты
    document.getElementById('circumference').textContent = circumferenceInUnits.toFixed(2) + ' ' + getUnitLabel(unit);
    document.getElementById('area').textContent = areaInUnits.toFixed(2) + ' ' + getUnitLabel(unit);
}

function getUnitLabel(unit) {
    switch (unit) {
        case 'meters':
            return 'м';
        case 'centimeters':
            return 'см';
        case 'inches':
            return 'дюймы';
        default:
            return '';
    }
}
