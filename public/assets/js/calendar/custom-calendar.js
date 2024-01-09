document.addEventListener('DOMContentLoaded', function () {
  var calendarEl = document.getElementById('calendar');

  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialDate: '2020-09-12',
    initialView: 'timeGridWeek',
    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
      right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek',
    },
    height: 'auto',
    navLinks: false, // can click day/week names to navigate views
    editable: true,
    selectable: true,
    selectMirror: true,
    nowIndicator: true,
    events: [
      {
        id: 1,
        task: 'Create Detail Page',
        hours: 'Online Course',
        image: '../assets/images/dashboard-3/user/6.png',
        classNames: ['common-style', 'bg-light-primary'],
        start: '2020-09-08T24:00:00',
      },
      {
        id: 2,
        task: 'Profile Landing page',
        hours: 'Online Course',
        classNames: ['common-style', 'bg-light-secondary'],
        start: '2020-09-07T01:00:00',
      },
      {
        id: 3,
        task: 'Teammeeting',
        hours: 'Join Now',
        classNames: ['common-style', 'bg-light-tertiary'],
        start: '2020-09-06T02:00:00',
      },
    ],
  });

  calendar.render();
});
