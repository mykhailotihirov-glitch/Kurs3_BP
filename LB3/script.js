// Дані для генерації
const names = ["Олег", "Марія", "Аня", "Ігор", "Оксана", "Тарас"];
const cities = ["Київ", "Одеса", "Львів", "Харків", "Дніпро", "Вінниця"];

let counter = 1;
let timer = null;

// Функція, що створює рядок до таблиці
function addRow() {
  const name = names[Math.floor(Math.random() * names.length)];
  const age = Math.floor(Math.random() * 62) + 18;
  const city = cities[Math.floor(Math.random() * cities.length)];
// Додаємо рядок до таблиці
  $('#tableH tbody').append(`
    <tr>
      <td>${counter}</td>
      <td>${name}</td>
      <td>${age}</td>
      <td>${city}</td>
    </tr>
    `);

  counter++;
}

// Кнопка "Почати"
$('#start').click(function () {
  const interval = Number($("#interval").val());

  if (timer) clearInterval(timer);
  timer = setInterval(addRow, interval);
});

// Кнопка "Зупинити"
$('#stop').click(function () {
  clearInterval(timer);
  timer = null;
});
