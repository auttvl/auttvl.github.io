const calendarHeader = document.querySelector('.current-month-year');
const prevMonthBtn = document.querySelector('.prev-month');
const nextMonthBtn = document.querySelector('.next-month');
const calendarDays = document.querySelector('.calendar-days');

const months = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December"
];

let currentDate = new Date();
let currentMonth = currentDate.getMonth();
let currentYear = currentDate.getFullYear();

const events = [
  { date: new Date(2023, 6, 12), title: 'Event 1' },
  { date: new Date(2023, 6, 18), title: 'Event 2' },
  // Add more events here
];

function renderCalendar() {
  // Clear previous calendar days
  calendarDays.innerHTML = '';

  // Set the current month and year in the header
  calendarHeader.textContent = months[currentMonth] + ' ' + currentYear;

  // Get the first day and last day of the current month
  let firstDay = new Date(currentYear, currentMonth, 1);
  let lastDay = new Date(currentYear, currentMonth + 1, 0);

  // Calculate the number of days in the month
  let numDays = lastDay.getDate();

  // Calculate the day of the week of the first day
  let startDay = firstDay.getDay();

  // Create calendar days
  for (let i = 0; i < numDays + startDay; i++) {
    const day = document.createElement('div');
    if (i >= startDay) {
      const dayNumber = i - startDay + 1;
      day.textContent = dayNumber;

      // Check if the current date has an event
      const event = events.find(event =>
        event.date.getDate() === dayNumber &&
        event.date.getMonth() === currentMonth &&
        event.date.getFullYear() === currentYear
      );

      if (event) {
        day.classList.add('event');
        day.setAttribute('title', event.title);
      }

      // Check if the current date is today
      if (
        dayNumber === currentDate.getDate() &&
        currentMonth === currentDate.getMonth() &&
        currentYear === currentDate.getFullYear()
      ) {
        day.classList.add('current-date');
      }

      // Add onclick event to each date
      day.setAttribute('onclick', 'flipCard(this)');
    }
    calendarDays.appendChild(day);
  }
}

// Render initial calendar
renderCalendar();

// Event listeners for previous and next month buttons
prevMonthBtn.addEventListener('click', () => {
  currentMonth--;
  if (currentMonth < 0) {
    currentMonth = 11;
    currentYear--;
  }
  renderCalendar();
});

nextMonthBtn.addEventListener('click', () => {
  currentMonth++;
  if (currentMonth > 11) {
    currentMonth = 0;
    currentYear++;
  }
  renderCalendar();
});

// Function to handle card flipping
function flipCard(element) {
  const card = document.querySelector('.card');
  card.classList.toggle('flipped');
  console.log('Flipping card for date:', element.textContent);
}